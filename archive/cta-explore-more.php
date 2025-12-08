<?php
/**
 * Title: Explore More CTA
 * Slug: moiraine/cta-explore-more
 * Description: Call to action to explore more content on the site
 * Categories: moiraine/call-to-action
 * Keywords: cta, call to action, explore, more, content
 * Viewport Width: 1280
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|medium","padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"main","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-main-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--medium)">
    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained","contentSize":"600px"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontWeight":"600"}},"textColor":"base","fontSize":"large"} -->
        <h2 class="wp-block-heading has-text-align-center has-base-color has-text-color has-large-font-size" style="font-weight:600"><?php esc_html_e( 'Explore More Resources', 'moiraine' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"main-accent"} -->
        <p class="has-text-align-center has-main-accent-color has-text-color"><?php esc_html_e( 'Discover more articles, tutorials, and insights to help grow your business and achieve your goals.', 'moiraine' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
            <!-- wp:button {"className":"is-style-button-light"} -->
            <div class="wp-block-button is-style-button-light"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Browse All Articles', 'moiraine' ); ?></a></div>
            <!-- /wp:button -->

            <!-- wp:button {"className":"is-style-button-light"} -->
            <div class="wp-block-button is-style-button-light"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'About Us', 'moiraine' ); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->