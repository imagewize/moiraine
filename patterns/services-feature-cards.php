<?php
/**
 * Title: Services Feature Cards
 * Slug: moiraine/services-feature-cards
 * Description: A services section with feature cards showcasing consulting, development, and support services
 * Categories: moiraine/features
 * Keywords: services, cards, grid, features, consulting, development, support
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Services Feature Cards","categories":["moiraine/features"],"patternName":"moiraine/services-feature-cards"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|x-large"}},"backgroundColor":"base","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-base-background-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"metadata":{"name":"Services Columns"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"metadata":{"name":"Consulting Column"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Consulting Card"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"12px"},"dimensions":{"minHeight":"300px"}},"backgroundColor":"ocean-blue","textColor":"base","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group has-base-color has-ocean-blue-background-color has-text-color has-background" style="border-radius:12px;min-height:300px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:group {"metadata":{"name":"Card Header"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"600"}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color" style="font-size:1.5rem;font-weight:600"><?php esc_html_e( 'Consulting', 'moiraine' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:image {"width":"40px","height":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/arrow-circle-filled.svg" alt="<?php esc_attr_e( 'Arrow', 'moiraine' ); ?>" style="width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"textColor":"base"} -->
<p class="has-base-color has-text-color" style="line-height:1.5"><?php esc_html_e( 'Strategic guidance and expert advice to help your business grow, optimize processes, and achieve your goals with proven methodologies.', 'moiraine' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Service Links 1"},"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Service Link"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0","margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}},"border":{"radius":"8px","color":"var:preset|color|border-light","width":"1px"}},"backgroundColor":"dark-teal","textColor":"main","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-main-color has-dark-teal-background-color has-text-color has-background" style="border-color:var(--wp--preset--color--border-light);border-width:1px;border-radius:8px;margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","fontStyle":"normal"}},"textColor":"base"} -->
<p class="has-base-color has-text-color" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Strategy Planning', 'moiraine' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"width":"40px","height":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/arrow-circle-filled-dark.svg" alt="<?php esc_attr_e( 'Arrow', 'moiraine' ); ?>" style="width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Service Link"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0"},"border":{"radius":"8px","color":"var:preset|color|border-light","width":"1px"}},"backgroundColor":"dark-teal","textColor":"primary-alt-accent","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-primary-alt-accent-color has-dark-teal-background-color has-text-color has-background" style="border-color:var(--wp--preset--color--border-light);border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","fontStyle":"normal"}},"textColor":"base"} -->
<p class="has-base-color has-text-color" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Business Analysis', 'moiraine' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"width":"40px","height":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/arrow-circle-filled-dark.svg" alt="<?php esc_attr_e( 'Arrow', 'moiraine' ); ?>" style="width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"metadata":{"name":"Development Column"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Development Card"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"12px"},"dimensions":{"minHeight":"300px"}},"backgroundColor":"ocean-blue","textColor":"base","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group has-base-color has-ocean-blue-background-color has-text-color has-background" style="border-radius:12px;min-height:300px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:group {"metadata":{"name":"Card Header"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"600"}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color" style="font-size:1.5rem;font-weight:600"><?php esc_html_e( 'Development', 'moiraine' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:image {"width":"40px","height":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/arrow-circle-filled.svg" alt="<?php esc_attr_e( 'Arrow', 'moiraine' ); ?>" style="width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"textColor":"base"} -->
<p class="has-base-color has-text-color" style="line-height:1.5"><?php esc_html_e( 'Custom software solutions, web applications, and digital products built with modern technologies and best practices.', 'moiraine' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Service Links 2"},"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Service Link"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0","margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}},"border":{"radius":"8px","color":"var:preset|color|border-light","width":"1px"}},"backgroundColor":"dark-teal","textColor":"main","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-main-color has-dark-teal-background-color has-text-color has-background" style="border-color:var(--wp--preset--color--border-light);border-width:1px;border-radius:8px;margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","fontStyle":"normal"}},"textColor":"base"} -->
<p class="has-base-color has-text-color" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Web Applications', 'moiraine' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"width":"40px","height":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/arrow-circle-filled-dark.svg" alt="<?php esc_attr_e( 'Arrow', 'moiraine' ); ?>" style="width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Service Link"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0"},"border":{"radius":"8px","color":"var:preset|color|border-light","width":"1px"}},"backgroundColor":"dark-teal","textColor":"main","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-main-color has-dark-teal-background-color has-text-color has-background" style="border-color:var(--wp--preset--color--border-light);border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","fontStyle":"normal"}},"textColor":"base"} -->
<p class="has-base-color has-text-color" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Mobile Apps', 'moiraine' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"width":"40px","height":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/arrow-circle-filled-dark.svg" alt="<?php esc_attr_e( 'Arrow', 'moiraine' ); ?>" style="width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"metadata":{"name":"Support Column"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Support Card"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"radius":"12px"},"dimensions":{"minHeight":"300px"}},"backgroundColor":"ocean-blue","textColor":"base","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group has-base-color has-ocean-blue-background-color has-text-color has-background" style="border-radius:12px;min-height:300px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:group {"metadata":{"name":"Card Header"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"600"}},"textColor":"base"} -->
<h3 class="wp-block-heading has-base-color has-text-color" style="font-size:1.5rem;font-weight:600"><?php esc_html_e( 'Support', 'moiraine' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:image {"width":"40px","height":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/arrow-circle-filled.svg" alt="<?php esc_attr_e( 'Arrow', 'moiraine' ); ?>" style="width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.5"}},"textColor":"base"} -->
<p class="has-base-color has-text-color" style="line-height:1.5"><?php esc_html_e( 'Ongoing maintenance, technical support, and optimization services to keep your systems running smoothly and efficiently.', 'moiraine' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Service Links 3"},"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Service Link"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0","margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}},"border":{"radius":"8px","color":"var:preset|color|border-light","width":"1px"}},"backgroundColor":"dark-teal","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-dark-teal-background-color has-background" style="border-color:var(--wp--preset--color--border-light);border-width:1px;border-radius:8px;margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small);padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","fontStyle":"normal"}},"textColor":"base"} -->
<p class="has-base-color has-text-color" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Maintenance', 'moiraine' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"width":"40px","height":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/arrow-circle-filled-dark.svg" alt="<?php esc_attr_e( 'Arrow', 'moiraine' ); ?>" style="width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Service Link"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small","right":"var:preset|spacing|small"},"blockGap":"0"},"border":{"radius":"8px","color":"var:preset|color|border-light","width":"1px"}},"backgroundColor":"dark-teal","textColor":"main","layout":{"type":"flex","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group has-border-color has-main-color has-dark-teal-background-color has-text-color has-background" style="border-color:var(--wp--preset--color--border-light);border-width:1px;border-radius:8px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","fontStyle":"normal"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base"} -->
<p class="has-base-color has-text-color has-link-color" style="font-style:normal;font-weight:500"><?php esc_html_e( 'Technical Support', 'moiraine' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"width":"40px","height":"40px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/arrow-circle-filled-dark.svg" alt="<?php esc_attr_e( 'Arrow', 'moiraine' ); ?>" style="width:40px;height:40px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->