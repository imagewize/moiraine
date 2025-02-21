<?php
/**
 * Title: Post List Card
 * Slug: moiraine/post-list-card
 * Description:
 * Categories: moiraine/card, moiraine/posts
 * Keywords: card, posts, list, links, query, page
 * Viewport Width: 600
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Post List Card"},"className":"remove-border-and-padding","style":{"border":{"radius":"5px","color":"#e2e2ef","width":"1px"},"spacing":{"blockGap":"0","padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group remove-border-and-padding has-border-color" style="border-color:#e2e2ef;border-width:1px;border-radius:5px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"metadata":{"name":"Title Row"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|large","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|large"}},"border":{"radius":{"topLeft":"5px","topRight":"5px"}}},"backgroundColor":"main","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group has-main-background-color has-background" style="border-top-left-radius:5px;border-top-right-radius:5px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--large)"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"base","fontSize":"medium"} -->
<p class="has-base-color has-text-color has-medium-font-size" style="font-style:normal;font-weight:600">Latest Posts</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"main-accent"} -->
<p class="has-main-accent-color has-text-color">View All →</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":1,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:group {"metadata":{"name":"Post List Wrap"},"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"metadata":{"name":"Post List"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:post-template -->
<!-- wp:group {"metadata":{"name":"Entry"},"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->

<!-- wp:post-date {"textColor":"secondary","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-separator-dotted","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}}},"backgroundColor":"main-accent"} -->
<hr class="wp-block-separator has-text-color has-main-accent-color has-alpha-channel-opacity has-main-accent-background-color has-background is-style-separator-dotted" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:var(--wp--preset--spacing--medium)"/>
<!-- /wp:separator -->
<!-- /wp:post-template --></div>
<!-- /wp:group -->

<!-- wp:query-no-results -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results.","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"textColor":"secondary"} -->
<p class="has-text-align-center has-secondary-color has-text-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0">Looks like you haven't added any posts yet.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
<!-- /wp:query-no-results --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->
