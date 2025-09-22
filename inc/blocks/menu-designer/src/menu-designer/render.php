<?php
/**
 * Menu Designer Block Server-side Render
 *
 * @package Moiraine
 */

$label = esc_html($attributes['label'] ?? '');
$label_color = esc_attr($attributes['labelColor'] ?? '');
$description = esc_html($attributes['description'] ?? '');
$menu_slug = esc_attr($attributes['menuSlug'] ?? '');
$justify_menu = esc_attr($attributes['justifyMenu'] ?? 'left');
$menu_width = esc_attr($attributes['width'] ?? 'content');

$menu_classes  = 'moiraine-menu-designer wp-block-moiraine-menu-designer__menu-container';
$menu_classes .= ' menu-width-' . $menu_width;
$menu_classes .= $justify_menu ? ' menu-justified-' . $justify_menu : '';

$wrapper_attributes = get_block_wrapper_attributes([
	'class' => 'wp-block-navigation-item',
]);

$close_icon  = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" aria-hidden="true" focusable="false"><path d="M13 11.8l6.1-6.3-1-1-6.1 6.2-6.1-6.2-1 1 6.1 6.3-6.5 6.7 1 1 6.5-6.6 6.5 6.6 1-1z"></path></svg>';
$toggle_icon = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12" width="12" height="12" aria-hidden="true" focusable="false" fill="none"><path d="M1.50002 4L6.00002 8L10.5 4" stroke-width="1.5" stroke="currentColor"></path></svg>';

$button_style = '';
if ($label_color) {
	$button_style = 'style="color:' . $label_color . '"';
}
?>

<li <?php echo $wrapper_attributes; ?> data-wp-interactive='{"namespace": "moiraine/menu-designer"}' data-wp-context='{"menuOpenedBy": {}}' data-wp-on-document--keydown="actions.handleMenuKeydown" data-wp-on-document--click="actions.handleOutsideClick">

	<button class="wp-block-navigation-item__content wp-block-moiraine-menu-designer__toggle" data-wp-on--click="actions.toggleMenuOnClick" data-wp-bind--aria-expanded="state.isMenuOpen" <?php echo $button_style; ?> <?php if ($description): ?>aria-describedby="menu-description-<?php echo esc_attr($menu_slug); ?>"<?php endif; ?>>
		<span class="wp-block-navigation-item__label"><?php echo $label; ?></span>
		<span class="wp-block-moiraine-menu-designer__toggle-icon"><?php echo $toggle_icon; ?></span>
	</button>

	<?php if ($description): ?>
		<span id="menu-description-<?php echo esc_attr($menu_slug); ?>" class="screen-reader-text"><?php echo $description; ?></span>
	<?php endif; ?>

	<?php if ($menu_slug): ?>
	<div class="<?php echo $menu_classes; ?>">
		<?php
		// Render the template part if menu slug is provided
		if (function_exists('block_template_part')) {
			echo block_template_part($menu_slug);
		} else {
			// Fallback for older WordPress versions
			$template_part = get_block_template('moiraine//' . $menu_slug, 'wp_template_part');
			if ($template_part && $template_part->content) {
				echo do_blocks($template_part->content);
			}
		}
		?>

		<button aria-label="<?php echo esc_attr(__('Close menu', 'moiraine')); ?>" class="menu-container__close-button" data-wp-on--click="actions.closeMenuOnClick" type="button">
			<?php echo $close_icon; ?>
		</button>
	</div>
	<?php endif; ?>

</li>