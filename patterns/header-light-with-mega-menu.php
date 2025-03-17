<?php
/**
 * Title: Header Light With Mega Menu
 * Slug: moiraine/header-light-with-mega-menu
 * Description: Header with mega menu navigation
 * Categories: header
 * Keywords: header, nav, links, mega menu
 * Viewport Width: 1500
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Inserter: true
 */
?>
<!-- wp:group {"tagName":"header","metadata":{"name":"Header With Mega Menu"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"top":"0px"}},"border":{"bottom":{"color":"var:preset|color|border-light","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"inherit":true,"type":"constrained"}} -->
<header class="wp-block-group alignfull" style="border-bottom-color:var(--wp--preset--color--border-light);border-bottom-width:1px;margin-top:0px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal"}} -->
<div class="wp-block-group alignwide"><!-- wp:site-title {"level":0} /-->

<!-- wp:navigation {"className":"has-mega-menu","layout":{"type":"flex"}} -->
<!-- wp:navigation-link {"label":"Products","url":"#","className":"has-mega-menu-trigger","megaMenuId":"products"} /-->
<!-- wp:navigation-link {"label":"Services","url":"#","className":"has-mega-menu-trigger","megaMenuId":"services"} /-->
<!-- wp:navigation-link {"label":"Resources","url":"#"} /-->
<!-- wp:navigation-link {"label":"About","url":"#"} /-->
<!-- /wp:navigation -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Contact</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"mega-menu-container","style":{"position":{"type":"sticky","top":"0px"}}} -->
<div class="wp-block-group mega-menu-container">
<!-- wp:group {"className":"mega-menu-content","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"display":"none"},"backgroundColor":"base","megaMenuId":"products"} -->
<div class="wp-block-group mega-menu-content has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)" data-mega-menu-id="products">
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%">
<!-- wp:heading {"level":4} -->
<h4>Product Categories</h4>
<!-- /wp:heading -->
<!-- wp:navigation {"orientation":"vertical"} -->
<!-- wp:navigation-link {"label":"Category 1","url":"#"} /-->
<!-- wp:navigation-link {"label":"Category 2","url":"#"} /-->
<!-- wp:navigation-link {"label":"Category 3","url":"#"} /-->
<!-- /wp:navigation -->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"75%"} -->
<div class="wp-block-column" style="flex-basis:75%">
<!-- wp:heading {"level":4} -->
<h4>Featured Products</h4>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>This is customizable content for the Products mega menu. You can edit this content directly in the block editor.</p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"medium"} -->
<figure class="wp-block-image size-medium"><img src="https://via.placeholder.com/300x200" alt="Product 1"/><figcaption class="wp-element-caption">Product 1</figcaption></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"medium"} -->
<figure class="wp-block-image size-medium"><img src="https://via.placeholder.com/300x200" alt="Product 2"/><figcaption class="wp-element-caption">Product 2</figcaption></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"mega-menu-content","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"display":"none"},"backgroundColor":"base","megaMenuId":"services"} -->
<div class="wp-block-group mega-menu-content has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)" data-mega-menu-id="services">
<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%">
<!-- wp:heading {"level":4} -->
<h4>Our Services</h4>
<!-- /wp:heading -->
<!-- wp:navigation {"orientation":"vertical"} -->
<!-- wp:navigation-link {"label":"Service 1","url":"#"} /-->
<!-- wp:navigation-link {"label":"Service 2","url":"#"} /-->
<!-- wp:navigation-link {"label":"Service 3","url":"#"} /-->
<!-- /wp:navigation -->
</div>
<!-- /wp:column -->

<!-- wp:column {"width":"70%"} -->
<div class="wp-block-column" style="flex-basis:70%">
<!-- wp:heading {"level":4} -->
<h4>Service Highlights</h4>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p>This is customizable content for the Services mega menu. You can edit this content directly in the block editor.</p>
<!-- /wp:paragraph -->

<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"medium"} -->
<figure class="wp-block-image size-medium"><img src="https://via.placeholder.com/300x200" alt="Service 1"/><figcaption class="wp-element-caption">Service 1</figcaption></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
<!-- wp:image {"sizeSlug":"medium"} -->
<figure class="wp-block-image size-medium"><img src="https://via.placeholder.com/300x200" alt="Service 2"/><figcaption class="wp-element-caption">Service 2</figcaption></figure>
<!-- /wp:image -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group --></header>
<!-- /wp:group -->
