<?php
/**
 * Pattern: Client Reviews Orange
 * Category: moiraine/testimonial
 *
 * @package Moiraine
 * @since 1.0.0
 */

return array(
	'slug'          => 'moiraine/client-reviews-orange',
	'title'         => __( 'Client Reviews - Orange Background', 'moiraine' ),
	'description'   => __( 'Three client reviews with profile images on vibrant orange background with white text', 'moiraine' ),
	'categories'    => array( 'moiraine/testimonial' ),
	'keywords'      => array( 'testimonial', 'review', 'client', 'quote', 'social-proof', 'reviews', 'orange', 'profile' ),
	'viewportWidth' => 1200,
	'content'       => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large"},"margin":{"top":"0","bottom":"0"}},"color":{"background":"#ff6b35"}},"textColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull has-base-color has-text-color has-background" style="background-color:#ff6b35;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-bottom:var(--wp--preset--spacing--xxx-large)">
	<!-- wp:group {"layout":{"type":"constrained","wideSize":"900px"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"}}},"textColor":"base","fontSize":"large","fontFamily":"open-sans"} -->
		<h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-open-sans-font-family has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--xx-large);font-weight:600">' . __( 'Client Reviews.', 'moiraine' ) . '</h2>
		<!-- /wp:heading -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}}} -->
		<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"constrained","contentSize":"380px","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":"95px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
					<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-4.webp" alt="' . esc_attr__( 'Client profile', 'moiraine' ) . '" style="border-radius:100px;aspect-ratio:1;object-fit:cover;width:95px"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"}}},"textColor":"base","fontSize":"base","fontFamily":"open-sans"} -->
				<p class="has-text-align-center has-base-color has-text-color has-open-sans-font-family has-base-font-size" style="margin-top:var(--wp--preset--spacing--x-large)">"' . __( 'We have hired Jasper a couple of times and he always does a great job and in a timely manner! He is very good at what he does and we continue to use him for our projects.', 'moiraine' ) . '"</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"constrained","contentSize":"380px","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":"95px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
					<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-5.webp" alt="' . esc_attr__( 'Client profile', 'moiraine' ) . '" style="border-radius:100px;aspect-ratio:1;object-fit:cover;width:95px"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"}}},"textColor":"base","fontSize":"base","fontFamily":"open-sans"} -->
				<p class="has-text-align-center has-base-color has-text-color has-open-sans-font-family has-base-font-size" style="margin-top:var(--wp--preset--spacing--x-large)">"' . __( 'His communication was top-notch, he met all deadlines, and his skills were very strong. He was proficient in WordPress, WooCommerce, Shopify and programming on those platforms to get our new Shopify site up and running.', 'moiraine' ) . '"</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"layout":{"type":"constrained","contentSize":"380px","justifyContent":"center"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","orientation":"vertical"}} -->
				<div class="wp-block-group">
					<!-- wp:image {"width":"95px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
					<figure class="wp-block-image size-full is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-7.webp" alt="' . esc_attr__( 'Client profile', 'moiraine' ) . '" style="border-radius:100px;aspect-ratio:1;object-fit:cover;width:95px"/></figure>
					<!-- /wp:image -->
				</div>
				<!-- /wp:group -->

				<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"}}},"textColor":"base","fontSize":"base","fontFamily":"open-sans"} -->
				<p class="has-text-align-center has-base-color has-text-color has-open-sans-font-family has-base-font-size" style="margin-top:var(--wp--preset--spacing--x-large)">"' . __( 'Couldn\'t have done this job without Jasper and he did a great job. My website now runs faster than ever. Would definitely hire again.', 'moiraine' ) . '"</p>
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
