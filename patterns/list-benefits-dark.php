<?php
/**
 * Title: Benefits List Dark
 * Slug: moiraine/list-benefits-dark
 * Description: A benefits section with checkmark features and blue accent lines on dark background
 * Categories: moiraine/features, moiraine/call-to-action
 * Keywords: benefits, features, checkmark, advantages
 * Viewport Width: 1500
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Benefits List Dark"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"main","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-main-background-color has-base-color has-text-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-bottom:var(--wp--preset--spacing--xxx-large)">
    <!-- wp:group {"metadata":{"name":"Header Section"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium","margin":{"bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--x-large)">
        <!-- wp:group {"metadata":{"name":"Title and Button Row"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"var:preset|font-size|large","fontWeight":"400"}},"textColor":"base"} -->
            <h2 class="wp-block-heading has-base-color has-text-color" style="font-size:var(--wp--preset--font-size--large);font-weight:400"><?php esc_html_e( 'Why Choose Our Solution', 'moiraine' ); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:button {"style":{"border":{"radius":"4px","width":"2px"},"spacing":{"padding":{"left":"var:preset|spacing|medium","right":"var:preset|spacing|medium","top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}},"borderColor":"primary","textColor":"primary","className":"is-style-outline"} -->
            <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-color has-text-color has-border-color has-primary-border-color wp-element-button" style="border-width:2px;border-radius:4px;padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Learn More', 'moiraine' ); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:group -->

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|base","lineHeight":"1.6"}},"textColor":"base"} -->
        <p class="has-base-color has-text-color" style="font-size:var(--wp--preset--font-size--base);line-height:1.6"><?php esc_html_e( 'Discover the key advantages that set us apart and see why thousands of customers trust our platform to deliver exceptional results.', 'moiraine' ); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"metadata":{"name":"Benefits List"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:group {"metadata":{"name":"Benefit Item 1"},"style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"left":"var:preset|spacing|medium"}},"border":{"left":{"color":"var:preset|color|primary","width":"3px"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-left-color:var(--wp--preset--color--primary);border-left-width:3px;padding-left:var(--wp--preset--spacing--medium)">
            <!-- wp:group {"metadata":{"name":"Benefit Title Row"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
            <div class="wp-block-group">
                <!-- wp:image {"width":"17px","height":"14px","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/checkmark.svg" alt="<?php esc_attr_e( 'Checkmark', 'moiraine' ); ?>" style="width:17px;height:14px"/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","fontWeight":"500"}},"textColor":"primary"} -->
                <h3 class="wp-block-heading has-primary-color has-text-color" style="font-size:var(--wp--preset--font-size--medium);font-weight:500"><?php esc_html_e( 'Comprehensive Analytics', 'moiraine' ); ?></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"base"} -->
            <p class="has-base-color has-text-color" style="line-height:1.6"><?php esc_html_e( 'Get detailed insights and real-time data visualization that help you make informed decisions and track performance across all key metrics.', 'moiraine' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"metadata":{"name":"Benefit Item 2"},"style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"left":"var:preset|spacing|medium"}},"border":{"left":{"color":"var:preset|color|primary","width":"3px"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-left-color:var(--wp--preset--color--primary);border-left-width:3px;padding-left:var(--wp--preset--spacing--medium)">
            <!-- wp:group {"metadata":{"name":"Benefit Title Row"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
            <div class="wp-block-group">
                <!-- wp:image {"width":"17px","height":"14px","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/checkmark.svg" alt="<?php esc_attr_e( 'Checkmark', 'moiraine' ); ?>" style="width:17px;height:14px"/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","fontWeight":"500"}},"textColor":"primary"} -->
                <h3 class="wp-block-heading has-primary-color has-text-color" style="font-size:var(--wp--preset--font-size--medium);font-weight:500"><?php esc_html_e( 'Reduced Costs & Errors', 'moiraine' ); ?></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"base"} -->
            <p class="has-base-color has-text-color" style="line-height:1.6"><?php esc_html_e( 'Minimize operational expenses and prevent costly mistakes with automated processes and intelligent error detection systems.', 'moiraine' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"metadata":{"name":"Benefit Item 3"},"style":{"spacing":{"blockGap":"var:preset|spacing|small","padding":{"left":"var:preset|spacing|medium"}},"border":{"left":{"color":"var:preset|color|primary","width":"3px"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-left-color:var(--wp--preset--color--primary);border-left-width:3px;padding-left:var(--wp--preset--spacing--medium)">
            <!-- wp:group {"metadata":{"name":"Benefit Title Row"},"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
            <div class="wp-block-group">
                <!-- wp:image {"width":"17px","height":"14px","sizeSlug":"full","linkDestination":"none"} -->
                <figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/checkmark.svg" alt="<?php esc_attr_e( 'Checkmark', 'moiraine' ); ?>" style="width:17px;height:14px"/></figure>
                <!-- /wp:image -->

                <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"var:preset|font-size|medium","fontWeight":"500"}},"textColor":"primary"} -->
                <h3 class="wp-block-heading has-primary-color has-text-color" style="font-size:var(--wp--preset--font-size--medium);font-weight:500"><?php esc_html_e( 'Faster Decision Making', 'moiraine' ); ?></h3>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"}},"textColor":"base"} -->
            <p class="has-base-color has-text-color" style="line-height:1.6"><?php esc_html_e( 'Access streamlined workflows and instant data processing to accelerate your team\'s productivity and reduce time-to-market.', 'moiraine' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->