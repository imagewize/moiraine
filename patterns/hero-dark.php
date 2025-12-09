<?php
/**
 * Title: Hero Dark
 * Slug: moiraine/hero-dark
 * Description:
 * Categories: moiraine/call-to-action, moiraine/hero
 * Keywords: cta, header, buttons, heading, hero, feature, homepage
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/guy-laptop.webp","dimRatio":80,"overlayColor":"main","isUserOverlayColor":true,"metadata":{"name":"Hero Dark"},"align":"full","className":"is-style-blur-image is-style-blur-image-less","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"0","top":"0","right":"0","left":"0"}},"color":{}}} -->
<div class="wp-block-cover alignfull is-style-blur-image is-style-blur-image-less" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-main-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/guy-laptop.webp" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"metadata":{"name":"Hero Dark Wrap"},"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"var:preset|spacing|xxx-large","bottom":"0px","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"blockGap":"0px"}},"textColor":"base","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-text-color" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:0px;padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"metadata":{"name":"Text and Buttons"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|xx-large"}}}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--xx-large)"><!-- wp:group {"metadata":{"name":"Titles"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"main-accent","fontSize":"small"} -->
<p class="has-text-align-center has-main-accent-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html_e( 'WordPress Reimagined', 'moiraine' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","level":1,"className":"has-secondary-font-family","style":{"typography":{"fontSize":"4rem"}}} -->
<h1 class="wp-block-heading has-text-align-center has-secondary-font-family" style="font-size:4rem"><?php esc_html_e( 'Build your site with clicks, not code.', 'moiraine' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","textColor":"main-accent"} -->
<p class="has-text-align-center has-main-accent-color has-text-color"><?php esc_html_e( 'Moiraine combines powerful flexibility with elegant design. Create professional WordPress sites using the Site Editor—no coding experience needed.', 'moiraine' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-button-brand"} -->
<div class="wp-block-button is-style-button-brand"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started Free', 'moiraine' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-button-light"} -->
<div class="wp-block-button is-style-button-light"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Explore Features', 'moiraine' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"wide","className":"is-style-default","style":{"color":{"duotone":"var:preset|duotone|primary"},"border":{"radius":{"bottomLeft":"0px","bottomRight":"0px"}}}} -->
<figure class="wp-block-image alignwide size-full has-custom-border is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/desktop.webp" alt="" class="" style="border-bottom-left-radius:0px;border-bottom-right-radius:0px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
