# Pattern Screenshot Documentation

This document explains how pattern screenshots are created, updated, and maintained for the Moiraine WordPress theme demo site.

## Overview

Pattern screenshots are high-quality WebP images (1400×800px landscape format) showcasing individual WordPress block patterns. These screenshots are used for:

- Pattern carousel showcase on the demo site
- Theme documentation and marketing materials
- Visual reference for pattern library

## Screenshot Specifications

- **Format**: WebP
- **Dimensions**: 1400×[variable height]px (maintains pattern proportions)
  - Width fixed at 1400px
  - Height varies based on actual pattern content
  - No cropping of pattern content
- **Quality**: 85% (WebP compression)
- **Naming**: `pattern-{slug}-landscape.webp`

**Note**: As of November 2025, screenshots use variable heights to show complete patterns. The Moiraine Carousel block supports `adaptiveHeight` to accommodate different slide heights seamlessly.

## Current Pattern Screenshots

The following pattern screenshots exist in this directory:

1. `pattern-blog-post-columns-landscape.webp`
2. `pattern-contact-side-by-side-landscape.webp`
3. `pattern-feature-boxes-with-button-landscape.webp`
4. `pattern-hero-call-to-action-buttons-light-landscape.webp`
5. `pattern-hero-dark-landscape.webp`
6. `pattern-hero-text-image-and-logos-landscape.webp`
7. `pattern-image-and-numbered-features-landscape.webp`
8. `pattern-large-text-and-text-boxes-landscape.webp`
9. `pattern-pricing-table-3-column-landscape.webp`
10. `pattern-services-feature-cards-landscape.webp`
11. `pattern-single-testimonial-landscape.webp`
12. `pattern-team-members-landscape.webp`
13. `pattern-testimonials-and-logos-landscape.webp`
14. `pattern-text-and-image-columns-with-icons-landscape.webp`
15. `pattern-text-call-to-action-buttons-landscape.webp`

## Pattern Locations on Demo Site

Patterns are displayed on the following demo pages:

### Homepage (`http://demo.imagewize.test/`)
- Hero patterns (hero-dark, hero-text-image-and-logos, hero-call-to-action-buttons-light)
- Feature patterns (services-feature-cards, feature-boxes-with-button)
- Text patterns (large-text-and-text-boxes, text-call-to-action-buttons)

### About Page (`http://demo.imagewize.test/about/`)
- Team members pattern (team-members)
- Testimonials patterns (single-testimonial, testimonials-and-logos)
- Text and image patterns (text-and-image-columns-with-icons, image-and-numbered-features)

### Other Pages
- Blog patterns (blog-post-columns)
- Contact patterns (contact-side-by-side)
- Pricing patterns (pricing-table-3-column)

## Screenshot Creation Process

The Moiraine theme uses automated Playwright scripts to create isolated, high-quality pattern screenshots. The process involves:

1. **Creating a temporary WordPress page** with only the target pattern
2. **Taking a screenshot** at the specified viewport (1400×800px)
3. **Converting to WebP** format with 85% quality compression
4. **Cleaning up** the temporary page after screenshot

## Tools and Scripts

### Primary Scripts (in `.playwright/scripts/`)

#### 1. `screenshot-pattern.js`
Creates PNG screenshots of individual patterns by generating temporary WordPress pages.

**Usage:**
```bash
node .playwright/scripts/screenshot-pattern.js <pattern-slug> [options]
```

**Options:**
- `--width=1400` - Custom viewport width (default: 1400)
- `--height=900` - Custom viewport height (default: 900)
- `--no-cleanup` - Don't delete temp page after screenshot
- `--dry-run` - Show what would be done without executing

**Examples:**
```bash
# Screenshot hero-dark pattern
node .playwright/scripts/screenshot-pattern.js hero-dark

# Screenshot with custom dimensions
node .playwright/scripts/screenshot-pattern.js testimonials-and-logos --width=1600

# Keep temp page for debugging
node .playwright/scripts/screenshot-pattern.js pricing-table-3-column --no-cleanup
```

#### 2. `convert-to-webp.js`
Converts PNG screenshots to optimized WebP format for web delivery.

**Usage:**
```bash
node .playwright/scripts/convert-to-webp.js [options]
node .playwright/scripts/convert-to-webp.js <input-file> [options]
```

**Options:**
- `--quality=85` - WebP quality (1-100, default: 85)
- `--all` - Convert all pattern-*.png files
- `--dry-run` - Show what would be done without executing
- `--output-dir=<path>` - Custom output directory

**Examples:**
```bash
# Convert all PNG screenshots to WebP
node .playwright/scripts/convert-to-webp.js --all

# Convert single file
node .playwright/scripts/convert-to-webp.js pattern-hero-dark.png

# Custom quality setting
node .playwright/scripts/convert-to-webp.js --all --quality=90
```

### Convenience Script (in `scripts/`)

#### `screenshot-patterns.sh`
Wrapper script to simplify the two-step process of screenshotting and converting patterns.

**Usage:**
```bash
# Screenshot single pattern (takes PNG, converts to WebP)
./scripts/screenshot-patterns.sh hero-dark

# Screenshot multiple patterns
./scripts/screenshot-patterns.sh hero-dark testimonials-and-logos team-members

# Screenshot all patterns (requires pattern list file)
./scripts/screenshot-patterns.sh --all
```

## Step-by-Step: Updating Pattern Screenshots

### Updating a Single Pattern

1. **Screenshot the pattern:**
   ```bash
   node .playwright/scripts/screenshot-pattern.js hero-dark
   ```
   This creates `.playwright/screenshots/pattern-hero-dark.png`

2. **Convert to WebP:**
   ```bash
   node .playwright/scripts/convert-to-webp.js pattern-hero-dark.png
   ```
   This creates `demo-content/images/pattern-screenshots/pattern-hero-dark-landscape.webp`

3. **Verify the screenshot:**
   - Check file size (should be reasonable, typically 20-60KB)
   - Visually inspect the image for quality
   - Ensure dimensions are 1400×800px

### Updating Multiple Patterns

1. **Screenshot each pattern:**
   ```bash
   node .playwright/scripts/screenshot-pattern.js hero-dark
   node .playwright/scripts/screenshot-pattern.js testimonials-and-logos
   node .playwright/scripts/screenshot-pattern.js team-members
   ```

2. **Batch convert to WebP:**
   ```bash
   node .playwright/scripts/convert-to-webp.js --all
   ```

### Using Convenience Script

```bash
# Single pattern
./scripts/screenshot-patterns.sh hero-dark

# Multiple patterns at once
./scripts/screenshot-patterns.sh hero-dark testimonials-and-logos team-members
```

## Recent Updates (November 2025)

### Carousel Block Enhancement
The Moiraine Carousel block (imagewize/carousel) now supports **Adaptive Height**:
- New `adaptiveHeight` attribute (boolean, default: false)
- When enabled, carousel height adjusts to match each slide's content
- Allows variable-height screenshots to display properly
- Toggle available in Block Settings → Carousel Settings panel

### Pattern Screenshot Updates (2025-11-16)
Updated 6 pattern screenshots with new images and variable heights:

1. ✅ `text-and-image-columns-with-icons` (1400×879px)
2. ✅ `testimonials-and-logos` (1400×1541px)
3. ✅ `team-members` (1400×1067px)
4. ✅ `image-and-numbered-features` (1400×879px)
5. ✅ `hero-text-image-and-logos` (1400×1418px)
6. ✅ `hero-dark` (1400×1326px)

All screenshots now use variable heights to show complete pattern content without cropping.

## Troubleshooting

### Pattern Not Found Error
**Problem:** Script can't find the pattern slug

**Solution:**
- Verify the pattern exists: Check `patterns/` directory for the PHP file
- Use the correct slug format: `hero-dark` not `moiraine/hero-dark`
- Pattern slug should match filename without `.php` extension

### Screenshot Shows Full Page Instead of Pattern
**Problem:** Screenshot includes header/footer instead of just the pattern

**Solution:**
- The script tries multiple CSS selectors to isolate the pattern content
- If this fails, you may need to manually crop the screenshot
- Check that the demo site doesn't have caching issues (clear cache with `wp cache flush`)

### WebP Conversion Fails
**Problem:** `convert-to-webp.js` errors or produces corrupted files

**Solution:**
- Ensure `sharp` npm package is installed: `npm install` in project root
- Verify input PNG file exists in `.playwright/screenshots/`
- Check file permissions on output directory

### Viewport Size Issues
**Problem:** Pattern appears cut off or incorrectly sized

**Solution:**
- Adjust viewport height: `--height=1200` for taller patterns
- For very wide patterns, increase width: `--width=1600`
- The script will automatically adjust to capture the full pattern element

## Technical Details

### How It Works

1. **WP-CLI Integration**: Scripts use Trellis VM to execute WP-CLI commands
   - Creates temporary WordPress page with pattern block
   - Pattern is inserted using block syntax: `<!-- wp:pattern {"slug":"moiraine/PATTERN-SLUG"} /-->`

2. **Playwright Browser Automation**:
   - Launches headless Chromium browser
   - Navigates to temporary page URL
   - Waits for pattern to fully render (3 second default)
   - Locates pattern element using CSS selectors
   - Takes screenshot of isolated pattern element

3. **Image Processing**:
   - PNG screenshot saved to `.playwright/screenshots/`
   - Sharp library converts PNG to WebP
   - WebP optimization at 85% quality
   - Output saved to `demo-content/images/pattern-screenshots/`

### Pattern Element Detection

The script tries the following CSS selectors in order to find the pattern element:

1. `.entry-content > *:first-child` - First element in content area
2. `article .entry-content > div` - Pattern wrapper in article
3. `main > *:first-child` - First element in main
4. `.wp-site-blocks > *:first-child` - Block theme container

If none match, it falls back to full-page screenshot.

### File Naming Convention

- **Input (PNG)**: `pattern-{slug}.png`
- **Output (WebP)**: `pattern-{slug}-landscape.webp`

The `-landscape` suffix is automatically added during WebP conversion to distinguish from potential portrait/square variants in the future.

## Version History

- **2024-11-04**: Initial pattern screenshot creation (15 patterns)
- **2025-11-16**: Documentation created, 6 patterns identified for updates due to image changes

## Future Improvements

Potential enhancements for the screenshot workflow:

1. **Batch Script**: Create wrapper script to screenshot multiple patterns at once
2. **Pattern List Config**: JSON file listing all patterns to screenshot
3. **Automated Testing**: Compare old vs new screenshots to detect visual regressions
4. **CI/CD Integration**: Automatically update screenshots when patterns change
5. **Portrait Variants**: Add support for vertical pattern screenshots (800×1400px)
6. **Screenshot Gallery**: Generate HTML gallery for visual review of all patterns

## Support

For issues with pattern screenshots:

1. Check this documentation first
2. Review script output for error messages
3. Verify demo site is accessible at `http://demo.imagewize.test/`
4. Ensure Trellis VM is running: `cd trellis && trellis vm start`
5. Check pattern file exists in `patterns/` directory

## Related Documentation

- [Main Demo Content README](README.md) - WordPress export and import process
- [CLAUDE.md](../../../../../CLAUDE.md) - Playwright testing guidelines
- [CHANGELOG.md](../CHANGELOG.md) - Theme version history and pattern updates
