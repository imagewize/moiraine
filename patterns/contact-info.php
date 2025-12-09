<?php
/**
 * Title: Contact Information Section
 * Slug: moiraine/contact-info
 * Description: Professional contact section with office hours, phone, email, and address in a modern card layout
 * Categories: moiraine/call-to-action
 * Keywords: contact, address, phone, email, office, hours, location
 * Viewport Width: 1200
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--xxx-large);padding-bottom:var(--wp--preset--spacing--xxx-large)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","textColor":"main","style":{"typography":{"lineHeight":"1.1"},"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}},"elements":{"link":{"color":{"text":"var:preset|color|main"}}}},"fontFamily":"open-sans"} -->
		<h2 class="wp-block-heading has-text-align-center has-main-color has-text-color has-link-color has-open-sans-font-family has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--x-large);line-height:1.1"><?php esc_html_e( 'Get In Touch', 'moiraine' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"}},"typography":{"fontSize":"1.125rem","lineHeight":"1.6"}},"textColor":"main-accent","fontFamily":"open-sans"} -->
		<p class="has-text-align-center has-main-accent-color has-text-color has-open-sans-font-family has-base-font-size" style="margin-bottom:var(--wp--preset--spacing--xx-large);line-height:1.6"><?php esc_html_e( 'We\'re here to help. Reach out and let\'s discuss how we can support your business goals.', 'moiraine' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}}} -->
		<div class="wp-block-columns alignwide">
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-large"}},"border":{"width":"1px","radius":"8px"}},"borderColor":"border-light","backgroundColor":"tertiary"} -->
		<div class="wp-block-column has-border-color has-border-light-border-color has-tertiary-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-large)">
			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"textColor":"primary","fontSize":"large"} -->
			<h3 class="wp-block-heading has-primary-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Office Hours', 'moiraine' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"fontSize":"base"} -->
			<p class="has-base-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><strong><?php esc_html_e( 'Monday - Friday', 'moiraine' ); ?></strong><br><?php esc_html_e( '9:00 AM - 5:00 PM', 'moiraine' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"main-accent","fontSize":"base"} -->
			<p class="has-main-accent-color has-text-color has-base-font-size" style="margin-top:0"><?php esc_html_e( 'Weekend appointments available upon request', 'moiraine' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-large"}},"border":{"width":"1px","radius":"8px"}},"borderColor":"border-light","backgroundColor":"tertiary"} -->
		<div class="wp-block-column has-border-color has-border-light-border-color has-tertiary-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-large)">
			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"textColor":"primary","fontSize":"large"} -->
			<h3 class="wp-block-heading has-primary-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Contact Details', 'moiraine' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"fontSize":"base"} -->
			<p class="has-base-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><strong><?php esc_html_e( 'Phone:', 'moiraine' ); ?></strong> <a href="tel:+1234567890">+1 (234) 567-890</a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"fontSize":"base"} -->
			<p class="has-base-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><strong><?php esc_html_e( 'Email:', 'moiraine' ); ?></strong> <a href="mailto:hello@example.com">hello@example.com</a></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"fontSize":"base"} -->
			<p class="has-base-font-size" style="margin-top:0"><strong><?php esc_html_e( 'Response time:', 'moiraine' ); ?></strong> <?php esc_html_e( 'Within 24 hours', 'moiraine' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-large"}},"border":{"width":"1px","radius":"8px"}},"borderColor":"border-light","backgroundColor":"tertiary"} -->
		<div class="wp-block-column has-border-color has-border-light-border-color has-tertiary-background-color has-background" style="border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-large)">
			<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"textColor":"primary","fontSize":"large"} -->
			<h3 class="wp-block-heading has-primary-color has-text-color has-large-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Visit Us', 'moiraine' ); ?></h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"fontSize":"base"} -->
			<p class="has-base-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><?php esc_html_e( '123 Business Street<br>Suite 100<br>City, State 12345', 'moiraine' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"main-accent","fontSize":"base"} -->
			<p class="has-main-accent-color has-text-color has-base-font-size" style="margin-top:0"><?php esc_html_e( 'Free parking available for visitors', 'moiraine' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|xx-large"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--xx-large)">
		<!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|xx-large","right":"var:preset|spacing|xx-large"}},"border":{"radius":"8px"}},"fontSize":"base","fontFamily":"open-sans"} -->
		<div class="wp-block-button has-custom-font-size has-open-sans-font-family has-base-font-size"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:8px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--xx-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--xx-large)"><?php esc_html_e( 'Schedule a Consultation', 'moiraine' ); ?></a></div>
		<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
