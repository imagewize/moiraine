<?php
/**
 * Pattern: Hero Two-Tone
 * Category: moiraine/hero, moiraine/call-to-action
 *
 * @package Moiraine
 * @since 1.0.0
 */

return array(
	'title'         => __( 'Hero Section Two-Tone', 'moiraine' ),
	'description'   => __( 'Modern hero section with two-tone heading, dual CTA buttons, and optional image - responsive design with proper spacing', 'moiraine' ),
	'categories'    => array( 'moiraine/hero', 'moiraine/call-to-action' ),
	'keywords'      => array( 'hero', 'call-to-action', 'landing', 'business', 'header', 'two-tone', 'modern' ),
	'viewportWidth' => 1200,
	'content'       => '<!-- wp:group {"align":"full","backgroundColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--xxx-large);padding-bottom:var(--wp--preset--spacing--xxx-large)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:columns {"align":"wide","verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|xx-large","left":"var:preset|spacing|xx-large"}}}} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:heading {"level":1,"textColor":"main","style":{"typography":{"fontSize":"4.5rem","lineHeight":"1.1"},"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}},"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"fontFamily":"open-sans"} -->
			<h1 class="wp-block-heading has-main-color has-text-color has-link-color has-open-sans-font-family" style="margin-bottom:var(--wp--preset--spacing--x-large);font-size:4.5rem;line-height:1.1">' . __( 'Hero ', 'moiraine' ) . '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">' . __( 'Section', 'moiraine' ) . '</mark> ' . __( '2.0', 'moiraine' ) . '</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"}},"typography":{"fontSize":"1.125rem","lineHeight":"1.6"}},"textColor":"main-accent","fontFamily":"open-sans"} -->
			<p class="has-main-accent-color has-text-color has-open-sans-font-family" style="margin-bottom:var(--wp--preset--spacing--xx-large);font-size:1.125rem;line-height:1.6">' . __( 'Transform your business with proven strategies that deliver measurable results. Our solutions are designed for ambitious companies ready to scale.', 'moiraine' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|x-large"}}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|xx-large","right":"var:preset|spacing|xx-large"}},"border":{"radius":"8px"}},"fontSize":"lg","fontFamily":"open-sans"} -->
				<div class="wp-block-button has-custom-font-size has-open-sans-font-family has-lg-font-size"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:8px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--xx-large)">' . __( 'Getting started', 'moiraine' ) . '</a></div>
				<!-- /wp:button -->

				<!-- wp:button {"backgroundColor":"tertiary","textColor":"primary","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|xx-large","right":"var:preset|spacing|xx-large"}},"border":{"radius":"8px"}},"fontSize":"lg","fontFamily":"open-sans"} -->
				<div class="wp-block-button has-custom-font-size has-open-sans-font-family has-lg-font-size"><a class="wp-block-button__link has-primary-color has-tertiary-background-color has-text-color has-background wp-element-button" style="border-radius:8px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--xx-large)">' . __( 'Contribute', 'moiraine' ) . '</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/desktop.webp" alt="' . esc_attr__( 'Hero background', 'moiraine' ) . '" style="border-radius:12px"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->',
);
