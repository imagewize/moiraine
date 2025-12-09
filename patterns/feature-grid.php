<?php
/**
 * Title: 3-Column Feature Grid
 * Slug: moiraine/feature-grid
 * Description: Showcase your key features or services in a clean three-column layout
 * Categories: moiraine/features
 * Keywords: features, services, grid, columns, benefits
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large"}}},"backgroundColor":"tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--xxx-large);padding-bottom:var(--wp--preset--spacing--xxx-large)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e( 'Why Businesses Choose Us', 'moiraine' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"}}},"fontSize":"base"} -->
		<p class="has-text-align-center has-base-font-size" style="margin-bottom:var(--wp--preset--spacing--xx-large)"><?php esc_html_e( 'We deliver results that matter to your bottom line', 'moiraine' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}}} -->
		<div class="wp-block-columns alignwide">
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}},"backgroundColor":"base"} -->
		<div class="wp-block-column has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)">
			<!-- wp:heading {"level":3,"textColor":"primary","fontSize":"large"} -->
			<h3 class="wp-block-heading has-primary-color has-text-color has-large-font-size"><?php esc_html_e( 'Proven Results', 'moiraine' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Track record of delivering measurable ROI and business growth for our clients across diverse industries.', 'moiraine' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}},"backgroundColor":"base"} -->
		<div class="wp-block-column has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)">
			<!-- wp:heading {"level":3,"textColor":"primary","fontSize":"large"} -->
			<h3 class="wp-block-heading has-primary-color has-text-color has-large-font-size"><?php esc_html_e( 'Expert Team', 'moiraine' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Dedicated professionals with deep industry expertise committed to understanding and achieving your business goals.', 'moiraine' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}},"backgroundColor":"base"} -->
		<div class="wp-block-column has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)">
			<!-- wp:heading {"level":3,"textColor":"primary","fontSize":"large"} -->
			<h3 class="wp-block-heading has-primary-color has-text-color has-large-font-size"><?php esc_html_e( 'Ongoing Support', 'moiraine' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p><?php esc_html_e( 'Continuous optimization and support to ensure your investment delivers sustained value and competitive advantage.', 'moiraine' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
