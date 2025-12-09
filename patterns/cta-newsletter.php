<?php
/**
 * Title: Newsletter Signup CTA
 * Slug: moiraine/cta-newsletter
 * Description: Call-to-action block for newsletter subscription or lead capture
 * Categories: moiraine/call-to-action
 * Keywords: cta, newsletter, signup, subscribe, lead-generation
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"primary-accent","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-primary-accent-background-color has-background" style="padding-top:var(--wp--preset--spacing--xxx-large);padding-bottom:var(--wp--preset--spacing--xxx-large)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:columns {"align":"wide","verticalAlignment":"center"} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center">
		<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
			<!-- wp:heading {"level":2,"textColor":"main","style":{"typography":{"fontSize":"x-large","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}},"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"fontFamily":"open-sans"} -->
			<h2 class="wp-block-heading has-main-color has-text-color has-link-color has-open-sans-font-family" style="margin-bottom:var(--wp--preset--spacing--x-large);;line-height:1.2"><?php esc_html_e( 'Get Weekly Business Growth Insights', 'moiraine' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"0"}},"typography":{"fontSize":"1.125rem","lineHeight":"1.6"}},"textColor":"main-accent","fontFamily":"open-sans"} -->
			<p class="has-main-accent-color has-text-color has-open-sans-font-family" style="margin-bottom:0;;line-height:1.6"><?php esc_html_e( 'Join 5,000+ business owners receiving actionable strategies, industry trends, and exclusive resources directly to their inbox.', 'moiraine' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
		<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%">
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary","textColor":"base","width":100,"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|xx-large","right":"var:preset|spacing|xx-large"}},"border":{"radius":"8px"}},"fontSize":"base","fontFamily":"open-sans"} -->
				<div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size has-open-sans-font-family has-base-font-size"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:8px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--xx-large)"><?php esc_html_e( 'Subscribe Now', 'moiraine' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->

			<!-- wp:paragraph {"align":"center","fontSize":"x-small"} -->
			<p class="has-text-align-center has-x-small-font-size"><?php esc_html_e( 'No spam. Unsubscribe anytime.', 'moiraine' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
