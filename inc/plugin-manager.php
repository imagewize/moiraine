<?php
/**
 * Plugin Manager functionality for Moiraine theme.
 *
 * @package moiraine
 */

namespace Moiraine\PluginManager;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Initialize the plugin manager.
 */
function init() {
	add_action( 'admin_menu', __NAMESPACE__ . '\register_admin_menu' );
	add_action( 'admin_enqueue_scripts', __NAMESPACE__ . '\enqueue_admin_scripts' );
	add_action( 'wp_ajax_moiraine_install_plugin', __NAMESPACE__ . '\ajax_install_plugin' );
}

/**
 * Register the admin menu item.
 */
function register_admin_menu() {
	add_theme_page(
		__( 'Moiraine Plugins', 'moiraine' ),
		__( 'Moiraine Plugins', 'moiraine' ),
		'manage_options',
		'moiraine-plugins',
		__NAMESPACE__ . '\render_admin_page'
	);
}

/**
 * Enqueue admin scripts and styles.
 *
 * @param string $hook The current admin page.
 */
function enqueue_admin_scripts( $hook ) {
	if ( 'appearance_page_moiraine-plugins' !== $hook ) {
		return;
	}

	wp_enqueue_style(
		'moiraine-plugin-manager',
		get_template_directory_uri() . '/assets/css/plugin-manager.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_script(
		'moiraine-plugin-manager',
		get_template_directory_uri() . '/assets/js/plugin-manager.js',
		array( 'jquery' ),
		wp_get_theme()->get( 'Version' ),
		true
	);

	wp_localize_script(
		'moiraine-plugin-manager',
		'MoirainePluginManager',
		array(
			'ajaxUrl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'moiraine-plugin-manager' ),
			'i18n'    => array(
				'installing' => __( 'Installing...', 'moiraine' ),
				'installed'  => __( 'Installed', 'moiraine' ),
				'activated'  => __( 'Activated', 'moiraine' ),
				'error'      => __( 'Error', 'moiraine' ),
			),
		)
	);
}

/**
 * Render the admin page.
 */
function render_admin_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	$available_plugins = get_available_plugins();
	?>
	<div class="wrap moiraine-plugin-manager">
		<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
		<p><?php esc_html_e( 'Install and activate custom Gutenberg block plugins developed specifically for the Moiraine theme.', 'moiraine' ); ?></p>

		<div class="moiraine-plugins-grid">
			<?php foreach ( $available_plugins as $plugin_slug => $plugin ) : ?>
				<div class="moiraine-plugin-card" data-plugin="<?php echo esc_attr( $plugin_slug ); ?>">
					<?php if ( ! empty( $plugin['thumbnail'] ) ) : ?>
						<div class="moiraine-plugin-thumbnail">
							<img src="<?php echo esc_url( $plugin['thumbnail'] ); ?>" alt="<?php echo esc_attr( $plugin['name'] ); ?>">
						</div>
					<?php endif; ?>
					
					<div class="moiraine-plugin-info">
						<h3><?php echo esc_html( $plugin['name'] ); ?></h3>
						<p><?php echo esc_html( $plugin['description'] ); ?></p>
						
						<?php if ( is_plugin_active( $plugin['file'] ) ) : ?>
							<button class="button button-disabled" disabled><?php esc_html_e( 'Active', 'moiraine' ); ?></button>
						<?php elseif ( is_plugin_installed( $plugin_slug ) ) : ?>
							<button class="button activate-plugin" data-action="activate"><?php esc_html_e( 'Activate', 'moiraine' ); ?></button>
						<?php else : ?>
							<button class="button install-plugin" data-action="install"><?php esc_html_e( 'Install', 'moiraine' ); ?></button>
						<?php endif; ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<?php
}

/**
 * Check if a plugin is installed.
 *
 * @param string $plugin_slug The plugin slug.
 * @return bool
 */
function is_plugin_installed( $plugin_slug ) {
	$installed_plugins = get_plugins();
	$plugin_info       = get_available_plugins()[ $plugin_slug ] ?? false;

	if ( ! $plugin_info ) {
		return false;
	}

	return isset( $installed_plugins[ $plugin_info['file'] ] );
}

/**
 * Check if a plugin is active.
 *
 * @param string $plugin_file The plugin file path.
 * @return bool
 */
function is_plugin_active( $plugin_file ) {
	if ( ! function_exists( 'is_plugin_active' ) ) {
		include_once ABSPATH . 'wp-admin/includes/plugin.php';
	}

	return \is_plugin_active( $plugin_file );
}

/**
 * Handle Ajax plugin installation.
 */
function ajax_install_plugin() {
	// Check permissions and nonce
	if ( ! current_user_can( 'install_plugins' ) || ! check_ajax_referer( 'moiraine-plugin-manager', 'nonce', false ) ) {
		wp_send_json_error( array( 'message' => __( 'You do not have permission to install plugins.', 'moiraine' ) ) );
	}

	$plugin_slug = isset( $_POST['plugin'] ) ? sanitize_text_field( wp_unslash( $_POST['plugin'] ) ) : '';
	$action      = isset( $_POST['pluginAction'] ) ? sanitize_text_field( wp_unslash( $_POST['pluginAction'] ) ) : '';

	if ( empty( $plugin_slug ) ) {
		wp_send_json_error( array( 'message' => __( 'No plugin specified.', 'moiraine' ) ) );
	}

	$available_plugins = get_available_plugins();

	if ( ! isset( $available_plugins[ $plugin_slug ] ) ) {
		wp_send_json_error( array( 'message' => __( 'Plugin not found.', 'moiraine' ) ) );
	}

	$plugin_data = $available_plugins[ $plugin_slug ];

	if ( 'install' === $action ) {
		// Include required files for plugin installation
		require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
		require_once ABSPATH . 'wp-admin/includes/plugin-install.php';
		require_once ABSPATH . 'wp-admin/includes/file.php';

		$skin     = new \WP_Ajax_Upgrader_Skin();
		$upgrader = new \Plugin_Upgrader( $skin );

		// Install the plugin
		$result = $upgrader->install( $plugin_data['download_url'] );

		if ( is_wp_error( $result ) ) {
			wp_send_json_error( array( 'message' => $result->get_error_message() ) );
		} elseif ( is_wp_error( $skin->result ) ) {
			wp_send_json_error( array( 'message' => $skin->result->get_error_message() ) );
		} elseif ( $skin->get_errors()->has_errors() ) {
			wp_send_json_error( array( 'message' => $skin->get_error_messages() ) );
		} elseif ( false === $result ) {
			wp_send_json_error( array( 'message' => __( 'Plugin installation failed.', 'moiraine' ) ) );
		}

		// Activate the plugin
		$activate = activate_plugin( $plugin_data['file'] );

		if ( is_wp_error( $activate ) ) {
			wp_send_json_error( array( 'message' => $activate->get_error_message() ) );
		}

		wp_send_json_success( array( 'message' => __( 'Plugin installed and activated.', 'moiraine' ) ) );
	} elseif ( 'activate' === $action ) {
		// Activate the plugin
		$activate = activate_plugin( $plugin_data['file'] );

		if ( is_wp_error( $activate ) ) {
			wp_send_json_error( array( 'message' => $activate->get_error_message() ) );
		}

		wp_send_json_success( array( 'message' => __( 'Plugin activated.', 'moiraine' ) ) );
	} else {
		wp_send_json_error( array( 'message' => __( 'Invalid action.', 'moiraine' ) ) );
	}
}

/**
 * Get available plugins.
 *
 * @return array Available plugins.
 */
function get_available_plugins() {
	$json_file = get_template_directory() . '/packages/plugins.json';

	if ( ! file_exists( $json_file ) ) {
		return array();
	}

	// Initialize the WordPress filesystem.
	global $wp_filesystem;
	if ( empty( $wp_filesystem ) ) {
		require_once ABSPATH . '/wp-admin/includes/file.php';
		WP_Filesystem();
	}

	// Read the JSON file using WordPress filesystem.
	$json_contents = $wp_filesystem->get_contents( $json_file );
	if ( ! $json_contents ) {
		return array();
	}

	$plugins_data = json_decode( $json_contents, true );

	if ( ! $plugins_data || ! is_array( $plugins_data ) ) {
		return array();
	}

	return $plugins_data;
}
