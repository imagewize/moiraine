# WordPress Block Patterns Development Guide

## Overview

This document provides comprehensive guidelines for developing WordPress block patterns in the Moiraine theme, with special focus on image handling, performance optimization, and best practices based on official WordPress documentation and research.

## Pattern Image Guidelines

### ❌ AVOID: Hardcoded Media IDs

**Never use hardcoded media IDs in wp:image blocks:**

```html
<!-- DON'T DO THIS -->
<!-- wp:image {"id":59,"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded-full"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded-full">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-4.webp" alt="" class="wp-image-59" style="width:60px;height:60px"/>
</figure>
<!-- /wp:image -->
```

### ✅ CORRECT: Direct File Paths

**Always use direct file paths without hardcoded IDs:**

```html
<!-- DO THIS INSTEAD -->
<!-- wp:image {"width":"60px","height":"60px","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded-full"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded-full">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/avatar-4.webp" alt="" style="width:60px;height:60px"/>
</figure>
<!-- /wp:image -->
```

## Why Hardcoded IDs Cause Problems

### Performance Issues

Based on WordPress core documentation and GitHub issues, hardcoded media IDs in patterns cause several performance problems:

1. **Database Queries**: WordPress attempts to query the media library for non-existent attachment IDs
2. **Validation Failures**: Block validation repeatedly fails when IDs don't match saved content
3. **Loading Delays**: Extra processing time while WordPress tries to resolve missing media references
4. **Memory Usage**: Unnecessary object instantiation for failed media lookups

### Visual Issues

1. **Blinking/Flashing**: WordPress first tries to load the image with the hardcoded ID, then falls back to the file path, causing a visual flash
2. **Console Errors**: JavaScript errors when WordPress tries to fetch metadata for non-existent media IDs
3. **Inconsistent Behavior**: Different rendering depending on whether the ID exists in the target installation

### WordPress Core Behavior

According to WordPress developer documentation:

- `wp_get_attachment_image()` returns an empty string when called with a non-existent ID
- No error handling or graceful fallback mechanism exists
- Block validation checks expect markup to match exactly what's saved in the database

**Sources:**
- [wp_get_attachment_image() Function Reference](https://developer.wordpress.org/reference/functions/wp_get_attachment_image/)
- [Block Editor Fundamentals](https://developer.wordpress.org/block-editor/getting-started/fundamentals/markup-representation-block/)
- [WordPress Gutenberg GitHub Issues](https://github.com/WordPress/gutenberg/issues/21051)

## Pattern Development Best Practices

### Image Storage

```
patterns/
├── images/
│   ├── avatar-1.webp
│   ├── avatar-2.webp
│   ├── avatar-3.webp
│   ├── avatar-4.webp
│   ├── avatar-5.webp
│   ├── avatar-7.webp
│   ├── computer-hands.webp
│   ├── desktop.webp
│   ├── guy-laptop.webp
│   ├── logo-1.webp
│   ├── logo-2.webp
│   ├── logo-3.webp
│   ├── logo-4.webp
│   ├── logo-6.webp
│   ├── arrow-circle-filled.svg
│   ├── arrow-circle-filled-dark.svg
│   └── checkmark.svg
└── [pattern-files].php
```

### Image Path Structure

All pattern images should use the standardized path structure:

```php
<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/filename.webp
```

This ensures:
- **Portability**: Patterns work on any WordPress installation
- **Performance**: Direct file loading without database queries
- **Reliability**: No dependency on media library contents
- **Consistency**: Predictable behavior across environments

### Cover Block Images

For cover blocks, use the same pattern:

```html
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/desktop.webp","dimRatio":0,"overlayColor":"main","isUserOverlayColor":true} -->
<div class="wp-block-cover">
    <span aria-hidden="true" class="wp-block-cover__background has-main-background-color has-background-dim-0 has-background-dim"></span>
    <img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/desktop.webp" data-object-fit="cover"/>
    <div class="wp-block-cover__inner-container">
        <!-- Cover content -->
    </div>
</div>
<!-- /wp:cover -->
```

## Pattern Categories

Moiraine patterns are organized into the following categories:

- `moiraine/hero` - Hero sections
- `moiraine/features` - Feature presentations
- `moiraine/call-to-action` - CTA sections
- `moiraine/card` - Card layouts
- `moiraine/pricing` - Pricing tables
- `moiraine/testimonial` - Testimonials
- `moiraine/posts` - Blog post layouts
- `moiraine/pages` - Full page layouts
- `moiraine/menu` - Navigation and menu patterns (14 patterns: cards, mobile, panels)

## Translation Readiness

All pattern text should be wrapped in translation functions:

```php
<?php esc_html_e( 'Your text here', 'moiraine' ); ?>
```

For attributes:
```php
alt="<?php esc_attr_e( 'Description', 'moiraine' ); ?>"
```

## Development Workflow

### Pattern Creation Process

1. **Create Pattern File**: Use PHP template format in `patterns/` directory
2. **Add Pattern Header**: Include proper metadata (title, slug, description, categories)
3. **Use Correct Image Paths**: Never use hardcoded media IDs
4. **Test Pattern**: Verify images load correctly without database dependencies
5. **Internationalize Text**: Wrap all text in translation functions
6. **Validate Markup**: Ensure block markup is valid and follows WordPress standards

### Quality Checks

Before committing patterns:

1. **No Hardcoded IDs**: Search for `"id":` in pattern files
2. **Proper Image Paths**: Verify all images use `get_template_directory_uri()`
3. **Translation Ready**: Check all text uses `esc_html_e()` or `esc_attr_e()`
4. **Performance Test**: Load pattern in fresh WordPress installation
5. **WPCS Compliance**: Run `composer run wpcs:scan` (patterns are excluded but check for PHP syntax)

### Testing Environment

Test patterns in:
- Fresh WordPress installation without existing media library
- Different themes to verify portability
- Various screen sizes for responsive behavior
- Browser developer tools for console errors

## Performance Optimization

### Image Optimization

- Use WebP format for photographs
- Use SVG for icons and simple graphics
- Optimize file sizes without sacrificing quality
- Consider lazy loading implications

### Code Optimization

- Minimize pattern file sizes
- Use efficient block structures
- Avoid unnecessary nested groups
- Follow WordPress block best practices

## Troubleshooting

### Common Issues

**Problem**: Pattern images don't load
- **Solution**: Check file paths and ensure images exist in `patterns/images/`

**Problem**: Blinking/flashing images
- **Solution**: Remove hardcoded `"id":XXX` from wp:image blocks

**Problem**: Console errors about missing media
- **Solution**: Verify no hardcoded media IDs remain in pattern files

**Problem**: Pattern validation failures
- **Solution**: Ensure block markup is clean and follows WordPress standards

## References

- [WordPress Block Patterns Documentation](https://developer.wordpress.org/block-editor/reference-guides/block-api/block-patterns/)
- [WordPress Image Block Documentation](https://wordpress.org/documentation/article/image-block/)
- [WordPress Media Utils Package](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-media-utils/)
- [WordPress Attachment Functions](https://developer.wordpress.org/reference/functions/wp_get_attachment_image/)
- [WordPress Gutenberg GitHub Repository](https://github.com/WordPress/gutenberg)

## Changelog

- **2025-09-23**: Initial documentation creation with hardcoded ID research and best practices
- **2025-09-23**: Removed hardcoded media IDs from all 22+ pattern files in version 2.1.0