<?php
/**
 * Pattern: Feature Grid
 * Category: moiraine/features
 *
 * @package Moiraine
 * @since 1.0.0
 */

return array(
	'title'         => __( '3-Column Feature Grid', 'moiraine' ),
	'description'   => __( 'Showcase your key features or services in a clean three-column layout', 'moiraine' ),
	'categories'    => array( 'moiraine/features' ),
	'keywords'      => array( 'features', 'services', 'grid', 'columns', 'benefits' ),
	'viewportWidth' => 1200,
	'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large"}}},"backgroundColor":"tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--xxx-large);padding-bottom:var(--wp--preset--spacing--xxx-large)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","fontSize":"5xl"} -->
		<h2 class="wp-block-heading has-text-align-center has-5-xl-font-size">' . __( 'Why Businesses Choose Us', 'moiraine' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"}}},"fontSize":"lg"} -->
		<p class="has-text-align-center has-lg-font-size" style="margin-bottom:var(--wp--preset--spacing--xx-large)">' . __( 'We deliver results that matter to your bottom line', 'moiraine' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}}} -->
		<div class="wp-block-columns alignwide">
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}},"backgroundColor":"base"} -->
		<div class="wp-block-column has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)">
			<!-- wp:heading {"level":3,"textColor":"primary","fontSize":"3xl"} -->
			<h3 class="wp-block-heading has-primary-color has-text-color has-3-xl-font-size">' . __( 'Proven Results', 'moiraine' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>' . __( 'Track record of delivering measurable ROI and business growth for our clients across diverse industries.', 'moiraine' ) . '</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}},"backgroundColor":"base"} -->
		<div class="wp-block-column has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)">
			<!-- wp:heading {"level":3,"textColor":"primary","fontSize":"3xl"} -->
			<h3 class="wp-block-heading has-primary-color has-text-color has-3-xl-font-size">' . __( 'Expert Team', 'moiraine' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>' . __( 'Dedicated professionals with deep industry expertise committed to understanding and achieving your business goals.', 'moiraine' ) . '</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}},"backgroundColor":"base"} -->
		<div class="wp-block-column has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)">
			<!-- wp:heading {"level":3,"textColor":"primary","fontSize":"3xl"} -->
			<h3 class="wp-block-heading has-primary-color has-text-color has-3-xl-font-size">' . __( 'Ongoing Support', 'moiraine' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph -->
			<p>' . __( 'Continuous optimization and support to ensure your investment delivers sustained value and competitive advantage.', 'moiraine' ) . '</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->',
);
