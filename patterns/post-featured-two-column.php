<?php
/**
 * Title: Featured Post Two Columns
 * Slug: moiraine/post-featured-two-columns
 * Description: Displays a single featured post with image and title on the left, excerpt on the right. Shows posts tagged with "featured".
 * Categories: moiraine/posts, moiraine/features
 * Keywords: post, featured, two column, highlight, showcase
 * Viewport Width: 1280
 * Block Types: core/query
 * Post Types: post, page
 * Inserter: true
 */
?>
<!-- wp:group {"metadata":{"name":"Featured Post Two Column"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-tertiary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:query {"queryId":2,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"tagIds":[],"post_tag":[]},"tax":{"post_tag":[]}},"align":"wide","className":"featured-post-query"} -->
<div class="wp-block-query alignwide featured-post-query"><!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"default"}} -->
<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|x-large","left":"var:preset|spacing|x-large"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"40%"} -->
<div class="wp-block-column" style="flex-basis:40%"><!-- wp:post-featured-image {"isLink":true,"style":{"border":{"radius":"5px"}}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:post-title {"isLink":true,"style":{"typography":{"textDecoration":"none","fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"}},"fontSize":"x-large"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
<div class="wp-block-column" style="flex-basis:60%"><!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":true,"linkToPost":true,"underlineLink":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"fontSize":"large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"top":"var:preset|spacing|medium"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group has-secondary-color has-text-color has-link-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:post-author {"showAvatar":false} /-->

<!-- wp:paragraph -->
<p><?php esc_html_e( '·', 'moiraine' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->