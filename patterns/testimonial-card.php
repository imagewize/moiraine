<?php
/**
 * Pattern: Testimonial Card
 * Category: moiraine/testimonial
 *
 * @package Moiraine
 * @since 1.0.0
 */

return array(
	'slug'          => 'moiraine/testimonial-card',
	'title'         => __( 'Client Testimonial Card', 'moiraine' ),
	'description'   => __( 'Single testimonial with client quote, name, and company', 'moiraine' ),
	'categories'    => array( 'moiraine/testimonial' ),
	'keywords'      => array( 'testimonial', 'review', 'client', 'quote', 'social-proof' ),
	'viewportWidth' => 1200,
	'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--xxx-large);padding-bottom:var(--wp--preset--spacing--xxx-large)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-text-align-center has-x-large-font-size">' . __( 'What Our Clients Say', 'moiraine' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"},"margin":{"top":"var:preset|spacing|xx-large"}}}} -->
		<div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--xx-large)">
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}},"border":{"width":"1px","color":"#ebeced"}},"backgroundColor":"base"} -->
		<div class="wp-block-column has-border-color has-base-background-color has-background" style="border-color:#ebeced;border-width:1px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)">
			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size">"' . __( 'Working with this team has transformed our approach to customer acquisition. We\'ve seen a 150% increase in qualified leads within just three months.', 'moiraine' ) . '"</p>
			<!-- /wp:paragraph -->

			<!-- wp:separator {"backgroundColor":"border-light"} -->
			<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background"/>
			<!-- /wp:separator -->

			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"base"} -->
			<p class="has-primary-color has-text-color has-base-font-size" style="font-weight:600">' . __( 'Sarah Mitchell', 'moiraine' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"main-accent"} -->
			<p class="has-main-accent-color has-text-color">' . __( 'CEO, TechVenture Solutions', 'moiraine' ) . '</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}},"border":{"width":"1px","color":"#ebeced"}},"backgroundColor":"base"} -->
		<div class="wp-block-column has-border-color has-base-background-color has-background" style="border-color:#ebeced;border-width:1px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)">
			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size">"' . __( 'The ROI speaks for itself. Professional service, strategic thinking, and genuine partnership. Couldn\'t recommend them more highly.', 'moiraine' ) . '"</p>
			<!-- /wp:paragraph -->

			<!-- wp:separator {"backgroundColor":"border-light"} -->
			<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background"/>
			<!-- /wp:separator -->

			<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"}},"textColor":"primary","fontSize":"base"} -->
			<p class="has-primary-color has-text-color has-base-font-size" style="font-weight:600">' . __( 'Michael Chen', 'moiraine' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"main-accent"} -->
			<p class="has-main-accent-color has-text-color">' . __( 'Director of Marketing, Global Innovations Inc.', 'moiraine' ) . '</p>
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
