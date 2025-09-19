# Auctor Patterns Analysis

This document analyzes patterns available in the Auctor theme that are missing from Moiraine and could potentially be ported over.

## Missing Patterns from Auctor

The following patterns exist in Auctor (`~/code/auctor/patterns`) but are not present in Moiraine:

### 1. Benefits List Patterns
- **benefits-list-dark.php** - Benefits section with checkmark features and blue accent lines on dark background
- **benefits-list-light.php** - Benefits section with checkmark features and blue accent lines on light background
- **Categories:** auctor/features, auctor/call-to-action
- **Keywords:** benefits, features, checkmark, advantages
- **Viewport:** 1500px

### 2. Static Content Patterns
- **blog-posts-static.php** - Static blog post content with publishing industry focus
- **featured-post-static.php** - Static featured post content with publishing industry focus
- **Categories:** auctor/posts
- **Keywords:** blog, posts, static, content, publishing
- **Viewport:** 1280px

### 3. Call-to-Action Patterns
- **cta-explore-more.php** - Call to action to explore more content on the site
- **Categories:** auctor/call-to-action
- **Keywords:** cta, call to action, explore, more, content
- **Viewport:** 1280px

### 4. Page Templates
- **page-marketing.php** - Complete marketing homepage with hero, features, testimonials, and blog sections
- **Template Types:** front-page, home, index
- **Categories:** auctor/pages
- **Keywords:** marketing, homepage, business, agency, hero, features
- **Viewport:** 1500px
- **Inserter:** true

### 5. Post Display Patterns
- **post-loop-grid-tc.php** - Post loop grid best used on index and archive pages where the loop can inherit the query
- **post-single-featured.php** - Single selected post in featured format with image and excerpt side by side
- **Categories:** auctor/posts
- **Keywords:** blog, posts, query, loop, single, feature
- **Block Types:** core/query
- **Viewport:** 1280px

### 6. Service Patterns
- **services-feature-cards.php** - Services section with feature cards showcasing consulting, development, and support services
- **Categories:** auctor/features, auctor/services
- **Keywords:** services, cards, grid, features, consulting, development, support
- **Viewport:** 1500px

## Recommendation for Porting

### High Priority (Recommended)
1. **benefits-list-dark.php & benefits-list-light.php** - These provide valuable feature/benefits presentation options that would complement Moiraine's existing feature patterns
2. **services-feature-cards.php** - Professional services presentation that would enhance Moiraine's business-focused patterns
3. **cta-explore-more.php** - Simple but effective CTA pattern that could be useful for content discovery

### Medium Priority
4. **page-marketing.php** - Complete marketing homepage could serve as a good full-page template example
5. **post-single-featured.php** - Alternative post display format that could be valuable for content highlighting

### Lower Priority
6. **blog-posts-static.php & featured-post-static.php** - Static content patterns with publishing industry focus may be too specific
7. **post-loop-grid-tc.php** - Similar functionality may already exist in current post loop patterns

## Porting Considerations

When porting these patterns to Moiraine:

1. **Namespace Changes:** Update pattern slugs from `auctor/` to `moiraine/`
2. **Category Mapping:** Map Auctor categories to Moiraine categories:
   - `auctor/features` → `moiraine/features`
   - `auctor/call-to-action` → `moiraine/call-to-action`
   - `auctor/posts` → `moiraine/posts`
   - `auctor/pages` → `moiraine/pages`
   - `auctor/services` → `moiraine/features` (or create new services category)
3. **Style Consistency:** Ensure patterns match Moiraine's design system and color scheme
4. **Content Updates:** Replace any Auctor-specific content with Moiraine-appropriate content
5. **Testing:** Verify patterns work correctly with Moiraine's theme.json and block styles

## File Locations

- **Source:** `~/code/auctor/patterns/[pattern-name].php`
- **Destination:** `./patterns/[pattern-name].php`
- **Translation Processing:** Run `npm run translate:patterns` after adding new patterns