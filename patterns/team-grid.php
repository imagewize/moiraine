<?php
/**
 * Pattern: Team Member Grid
 * Category: moiraine/features
 *
 * @package Moiraine
 * @since 1.0.0
 */

	return array(
	'title'         => __( 'Team Member Grid', 'moiraine' ),
	'description'   => __( 'Showcase your team with professional profiles in a clean three-column grid layout', 'moiraine' ),
	'categories'    => array( 'moiraine/features' ),
	'keywords'      => array( 'team', 'staff', 'people', 'about', 'employees', 'members', 'profiles' ),
	'viewportWidth' => 1200,
	'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large"}}},"backgroundColor":"tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--xxx-large);padding-bottom:var(--wp--preset--spacing--xxx-large)">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}},"fontSize":"5xl"} -->
		<h2 class="wp-block-heading has-text-align-center has-5-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--medium)">' . __( 'Meet Our Team', 'moiraine' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"}}},"textColor":"main-accent","fontSize":"xl"} -->
		<p class="has-text-align-center has-main-accent-color has-text-color has-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--xx-large)">' . __( 'Dedicated professionals committed to delivering exceptional results for your business', 'moiraine' ) . '</p>
		<!-- /wp:paragraph -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}}} -->
		<div class="wp-block-columns alignwide">
		<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"base"} -->
		<div class="wp-block-column has-base-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-1.webp" alt="' . esc_attr__( 'Team member photo', 'moiraine' ) . '" style="border-radius:8px"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)">
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"textColor":"main","fontSize":"2xl"} -->
				<h3 class="wp-block-heading has-main-color has-text-color has-2-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)">' . __( 'Sarah Johnson', 'moiraine' ) . '</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"textColor":"primary","fontSize":"base"} -->
				<p class="has-primary-color has-text-color has-base-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><strong>' . __( 'Chief Executive Officer', 'moiraine' ) . '</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"main-accent","fontSize":"base"} -->
				<p class="has-main-accent-color has-text-color has-base-font-size" style="margin-top:0">' . __( 'With 15+ years of industry experience, Sarah leads our strategic vision and drives innovation across all operations.', 'moiraine' ) . '</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"base"} -->
		<div class="wp-block-column has-base-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-2.webp" alt="' . esc_attr__( 'Team member photo', 'moiraine' ) . '" style="border-radius:8px"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)">
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"textColor":"main","fontSize":"2xl"} -->
				<h3 class="wp-block-heading has-main-color has-text-color has-2-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)">' . __( 'Michael Chen', 'moiraine' ) . '</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"textColor":"primary","fontSize":"base"} -->
				<p class="has-primary-color has-text-color has-base-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><strong>' . __( 'Head of Operations', 'moiraine' ) . '</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"main-accent","fontSize":"base"} -->
				<p class="has-main-accent-color has-text-color has-base-font-size" style="margin-top:0">' . __( 'Michael ensures seamless execution and operational excellence, bringing efficiency and quality to every project.', 'moiraine' ) . '</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"base"} -->
		<div class="wp-block-column has-base-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
			<!-- wp:image {"sizeSlug":"large","linkDestination":"none","style":{"border":{"radius":"8px"}}} -->
			<figure class="wp-block-image size-large has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-3.webp" alt="' . esc_attr__( 'Team member photo', 'moiraine' ) . '" style="border-radius:8px"/></figure>
			<!-- /wp:image -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--x-large)">
				<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"textColor":"main","fontSize":"2xl"} -->
				<h3 class="wp-block-heading has-main-color has-text-color has-2-xl-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)">' . __( 'Emily Rodriguez', 'moiraine' ) . '</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|medium"}}},"textColor":"primary","fontSize":"base"} -->
				<p class="has-primary-color has-text-color has-base-font-size" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--medium)"><strong>' . __( 'Client Success Director', 'moiraine' ) . '</strong></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"main-accent","fontSize":"base"} -->
				<p class="has-main-accent-color has-text-color has-base-font-size" style="margin-top:0">' . __( 'Emily builds lasting client relationships and ensures every partnership delivers exceptional value and measurable success.', 'moiraine' ) . '</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->',
);
