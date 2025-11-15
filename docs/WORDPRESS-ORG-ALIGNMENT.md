# WordPress.org Theme Review Alignment Plan

**Date:** 2025-11-14
**Theme:** Moiraine
**Version:** 2.5.5

## Overview

This document outlines the required changes to align Moiraine theme with WordPress.org Theme Review requirements based on automated theme check results.

## Latest Test Results Summary (2025-11-14)

### ✅ Resolved Issues
- **Demo Content XML Files**: Added to `.distignore`
- **Plugin Territory - Block Registration**: Moved to moiraine-blocks plugin
- **Plugin Territory - upload_mimes**: Moved to moiraine-blocks plugin

### ✅ Completed Issues
- **GPL-Compatible Images**: All 9 Unsplash images replaced with GPL-compatible alternatives (2025-11-15)
  - 3 workspace images replaced with CC0 Public Domain from StockSnap.io
  - 6 avatar images replaced with Pexels License images
  - See [IMAGE-CREDITS-NEW.md](demo-enhancement/IMAGE-CREDITS-NEW.md) for full attribution

### ⚠️ Outstanding Issues - CRITICAL
- **Navigation List Structure**: Accessibility issue with `<ul>` containing invalid children
- **Skip Link Focus State**: Insufficient visual contrast when focused
- **Skip Link Tab Order**: Not first tabbable element

### 📋 Recommended Actions
- **Tested Up To**: Change from "6.7.1" to "6.7" in style.css

---

## Critical Issues (Must Fix)

### 1. Remove Demo Content XML Files

**Issue:**
```
[ File_Check ]
REQUIRED: `moiraine.wordpress.2025-04-03.xml moiraine.wordpress.2025-04-05.xml moiraine.wordpress.2025-11-03.xml`
XML file found. This file must not be in the production version of the theme.
```

**Location:**
- `demo-content/moiraine.WordPress.2025-11-03.xml`
- `demo-content/moiraine.WordPress.2025-04-03.xml`
- `demo-content/moiraine.WordPress.2025-04-05.xml`

**Solution:**
Add `demo-content` directory to `.distignore` file to exclude it from distribution builds.

**Rationale:**
WordPress.org doesn't allow demo content XML files in themes. These should be hosted separately or provided as a separate download.

**Status:** ✅ Resolved - Added to `.distignore`

---

### 2. GPL-Compatible Image Licensing ✅ COMPLETED

**Original Issue:**
```
[ Non_GPL_Check ]
REQUIRED: Found references to images with non-GPL-compatible licenses.
```

**Resolution (2025-11-15):**
All pattern images have been replaced with GPL-compatible alternatives:

**Replaced Image Files:**
- `computer-hands.webp` - Now CC0 Public Domain (StockSnap.io)
- `desktop.webp` - Now CC0 Public Domain (StockSnap.io)
- `guy-laptop.webp` - Now CC0 Public Domain (StockSnap.io)
- `avatar-1.webp` through `avatar-7.webp` (6 images) - Now Pexels License (GPL-compatible)

**Total:** 9 images replaced with GPL-compatible licenses

**GPL-Compatible Image Sources:**
1. **[Pexels](https://www.pexels.com/license/)** - Free for commercial use, no attribution required
2. **[Pixabay](https://pixabay.com/service/license/)** - Pixabay License (compatible with GPL)
3. **[WordPress Photo Directory](https://wordpress.org/photos/)** - CC0 (Public Domain)
4. **[Openverse](https://wordpress.org/openverse/)** - WordPress-maintained search for CC-licensed media
5. **[Unsplash (with proper license)](https://unsplash.com/license)** - *Wait, actually Unsplash license is NOT GPL-compatible!*
6. **[StockSnap.io](https://stocksnap.io/license)** - CC0 Public Domain

**Recommended Approach:**
Use **[Openverse](https://wordpress.org/openverse/)** (WordPress.org's official CC-licensed media search):
- Official WordPress.org resource for finding CC-licensed images
- Searches across multiple sources (Flickr, Wikimedia, etc.)
- Filters for license type (CC0, CC BY, etc.)
- GPL-compatible Creative Commons licenses
- Shows attribution requirements clearly
- Best choice for WordPress theme development

**Alternative Sources:**
- **[Pexels](https://www.pexels.com/)** - High quality, no attribution required
- **[WordPress Photo Directory](https://wordpress.org/photos/)** - CC0 Public Domain

**Action Plan:**
1. ✅ Identify all Unsplash images (documented in IMAGE-CREDITS.md)
2. ✅ Search for GPL-compatible replacements on Pexels and StockSnap.io
3. ✅ Download and optimize replacement images (WebP format, same dimensions)
4. ✅ Replace files in `patterns/images/` directory
5. ✅ Create new IMAGE-CREDITS-NEW.md with Pexels/CC0 license attribution
6. ⏳ Test patterns to ensure images display correctly
7. ✅ Verify `.distignore` excludes IMAGE-CREDITS.md (keep credits in docs)

**Openverse Search Links:**
- [Person typing on laptop](https://wordpress.org/openverse/search/?q=person+typing+laptop) (for computer-hands.webp)
- [Desk setup monitor](https://wordpress.org/openverse/search/?q=desk+setup+monitor) (for desktop.webp)
- [Business meeting laptop](https://wordpress.org/openverse/search/?q=business+meeting+laptop) (for guy-laptop.webp)
- [Professional headshot](https://wordpress.org/openverse/search/?q=professional+headshot) (for avatar images)
- [Technology workspace](https://wordpress.org/openverse/search/?q=technology+workspace) (for blog images)

**License Recommendation:**
When searching on Openverse, filter for:
- **CC0** (Public Domain) - No attribution required ✅ Best option
- **CC BY** (Attribution) - Attribution required in credits file

**Status:** ✅ **COMPLETED** (2025-11-15) - All 9 Unsplash images replaced with GPL-compatible alternatives
- 3 workspace images: StockSnap.io (CC0 Public Domain)
- 6 avatar images: Pexels (Pexels License, GPL-compatible)
- Full documentation: [IMAGE-CREDITS-NEW.md](demo-enhancement/IMAGE-CREDITS-NEW.md)

---

### 3. Move Block Registration to Plugin Territory

**Issue:**
```
[ Plugin_Territory_Check ]
REQUIRED: The theme uses the `register_block_type()` function.
`register_block_type()` is plugin-territory functionality and must not be used in themes.
```

**Affected Files:**
- `functions.php` (lines 342-376)
- `blocks/mega-menu/mega-menu.php` (lines 35-56)

**Current Implementation:**
Theme registers custom blocks directly in `functions.php` and includes a custom Mega Menu block.

**WordPress.org Position:**
Custom blocks should be in plugins, not themes. Themes should only use `register_block_style()` and `register_block_pattern()`.

**Solution Options:**

#### Option A: Convert to Block Styles and Patterns (Recommended for WordPress.org)
1. Remove all `register_block_type()` calls
2. Move Mega Menu block to a separate companion plugin
3. Rely on core blocks + block styles + block patterns only
4. Document the companion plugin requirement

**Pros:**
- Fully compliant with WordPress.org requirements
- Follows WordPress.org philosophy (themes = presentation, plugins = functionality)
- Easier theme review approval

**Cons:**
- Requires companion plugin for Mega Menu functionality
- Limits custom block capabilities

#### Option B: Keep Current Implementation + Add Notice
1. Keep custom blocks as-is
2. Add prominent documentation that theme won't be accepted on WordPress.org without modifications
3. Provide instructions for users to extract blocks into a plugin if needed

**Pros:**
- Maintains current functionality
- Better user experience (everything in one package)
- No breaking changes

**Cons:**
- Won't pass WordPress.org theme review
- Limits distribution options

**Recommended Approach:**
Use Option A for WordPress.org submission. Create a "Moiraine Blocks" companion plugin to house:
- Mega Menu block
- Carousel block (if any)
- Any other custom blocks

**Implementation Steps:**

1. **Create Companion Plugin** (`moiraine-blocks/`)
   - Move `blocks/mega-menu/` to plugin
   - Move carousel block registration to plugin
   - Register plugin with appropriate headers
   - Add plugin dependency check in theme

2. **Update Theme Functions**
   - Remove custom block registration code (lines 342-376 in functions.php)
   - Keep `register_block_style()` calls (these are allowed)
   - Keep `register_block_pattern()` and pattern categories
   - Add admin notice if companion plugin is not active

3. **Update Documentation**
   - Document companion plugin requirement
   - Provide installation instructions
   - Update README.md

**Status:** ✅ **COMPLETED** - Moiraine Blocks plugin created and installed
- Plugin repository: [imagewize/moiraine-blocks](https://github.com/imagewize/moiraine-blocks)
- Installed via Composer: `"imagewize/moiraine-blocks": "^1.0"`
- All custom blocks moved to plugin
- Theme now only uses `register_block_style()` and `register_block_pattern()`

---

### 4. Remove upload_mimes Filter

**Issue:**
```
[ Plugin_Territory_Check ]
REQUIRED: The theme uses the `upload_mimes` filter. This is plugin-territory functionality
and must not be used in themes.
```

**Affected Files:**
- `functions.php` (line 259)

**Current Implementation:**
```php
function allow_additional_mime_types( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';
	$mimes['webp'] = 'image/webp';
	return $mimes;
}
add_filter( 'upload_mimes', __NAMESPACE__ . '\\allow_additional_mime_types' );
```

**Solution:**

1. **Remove from Theme**
   - Delete `allow_additional_mime_types()` function
   - Delete `fix_media_display()` function (SVG display helper)
   - Remove associated `add_filter()` calls

2. **Move to Companion Plugin** (if creating one for blocks)
   - Add SVG/WebP upload support to "Moiraine Blocks" plugin

3. **Document Workaround**
   - Add to README: "For SVG upload support, install a plugin like 'Safe SVG'"
   - WebP is natively supported in WordPress 5.8+, no plugin needed

**Alternative:**
Since WebP is now natively supported in WordPress, only SVG needs addressing. Users can install a dedicated SVG plugin.

**Status:** ✅ **COMPLETED** - Moved to moiraine-blocks plugin
- SVG and WebP upload support moved to companion plugin
- Removed from theme functions.php
- Theme is now compliant with plugin-territory guidelines

---

## Warnings (Should Fix)

### 5. Hard-Coded Links in Footer Patterns

**Issue:**
```
[ Link_Check ]
INFO: Possible hard-coded links were found in footer patterns.
```

**Affected Files:**
- `patterns/footer-centered-light.php` (line 37)
- `patterns/footer-centered.php` (line 37)
- `patterns/footer-light.php` (line 114)
- `patterns/footer-minimal-light.php` (line 19)
- `patterns/footer-minimal.php` (line 19)
- `patterns/footer.php` (line 118)

**Current Links:**
All footer patterns include: `https://imagewize.com/moiraine`

**WordPress.org Position:**
Hard-coded links to external sites (especially theme author sites) are discouraged but not strictly forbidden if:
- They are in patterns (user can modify)
- They are clearly theme credits
- They are not required for theme functionality

**Solution Options:**

#### Option A: Keep Links (Acceptable)
Since these are in block patterns (not hardcoded in templates), users can easily modify or remove them. This is generally acceptable.

#### Option B: Make Links Optional
Replace hardcoded links with a theme mod or site option that defaults to empty.

#### Option C: Remove Links
Replace credit links with text-only credits.

**Recommended Approach:**
Keep current implementation. Block patterns are user-editable, so this shouldn't block theme review.

**Status:** ✅ Acceptable as-is (but monitor during review)

---

### 6. Tested Up To Version Format

**Issue:**
```
[ Version_Tested_Upto_Check ]
RECOMMENDED: `Tested up to` is recommended to have major versions only (e.g. 5.8).
Patch version is not needed (e.g. 5.8.1).
```

**Solution:**
Update `style.css` header to use major version only for "Tested up to" field.

Example:
```
Change: Tested up to: 6.7.1
To:     Tested up to: 6.7
```

**Status:** ❌ Not implemented

---

## Accessibility Issues (Must Fix)

### 7. Navigation List Structure Issue

**Issue:**
```
Rule: "list" (<ul> and <ol> must only directly contain <li>, <script> or <template> elements)
Affected Nodes: .wp-block-navigation__container
```

**Root Cause:**
WordPress core navigation block may be rendering invalid HTML structure. This is a known issue with certain navigation configurations.

**Investigation Required:**
1. Check navigation block configuration in theme.json
2. Review navigation patterns
3. Test with different navigation depths
4. Check if custom CSS is interfering with navigation structure

**Possible Solutions:**

1. **Update Navigation Block Settings in theme.json**
   - Review `core/navigation` block settings
   - Ensure proper overlay/dropdown configuration

2. **Simplify Navigation Patterns**
   - Review and test all navigation patterns
   - Ensure they follow proper HTML structure

3. **Check for JavaScript Interference**
   - Review `assets/js/navigation-frontend.js`
   - Ensure it's not manipulating DOM in invalid ways

4. **Report to WordPress Core** (if core bug)
   - If this is a core block issue, report to WordPress
   - Document workaround if needed

**Status:** ❌ Requires investigation

---

### 8. Skip Link Focus State Visibility

**Issue:**
```
The element "<a class="skip-link screen-reader-text"...>" does not have enough visible
difference when focused.
```

**Solution:**
Enhance skip-link focus styles in `style.css`:

```css
.skip-link:focus {
	background-color: var(--wp--preset--color--contrast);
	color: var(--wp--preset--color--base);
	box-shadow: 0 0 0 3px var(--wp--preset--color--primary);
	outline: 3px solid var(--wp--preset--color--primary);
	outline-offset: 2px;
	z-index: 100000;
}
```

**Status:** ❌ Not implemented

---

### 9. Skip Link Not First Tabbable Element

**Issue:**
```
Tabbing is not working as expected
Expected: <a class="skip-link...">Skip to content</a>
Current: <a href="http://localhost:8485"...>trunk</a>
```

**Root Cause:**
Skip link may not be the first focusable element in the DOM, or may be hidden in a way that prevents proper focus.

**Investigation Required:**
1. Check where skip-link is rendered in templates
2. Ensure it's the first element in `<body>`
3. Verify CSS doesn't prevent focus
4. Test tab order

**Solution:**
Ensure skip-link is:
- First child in body (or visually positioned first)
- Properly hidden until focused
- Has proper z-index when focused

**Status:** ❌ Requires investigation

---

## Implementation Priority

### Phase 1: Critical Blockers (Required for WordPress.org)
1. ✅ Verify `.distignore` excludes demo-content and docs
2. ✅ Remove `upload_mimes` filter from theme (moved to moiraine-blocks plugin)
3. ✅ Remove/move custom block registration (moved to moiraine-blocks plugin)
4. ✅ Create companion plugin for custom blocks (moiraine-blocks created and published)
5. ✅ Replace all Unsplash images with GPL-compatible alternatives (2025-11-15)

### Phase 2: Accessibility Fixes (Required for WordPress.org)
5. ❌ Fix skip-link focus state visibility
6. ❌ Fix skip-link tab order
7. ❌ Investigate and fix navigation list structure

### Phase 3: Polish (Recommended)
8. ❌ Update "Tested up to" version format
9. ✅ Review footer pattern links (no action needed)

---

## Companion Plugin Specification

**Plugin Name:** Moiraine Blocks
**Plugin Slug:** moiraine-blocks
**Description:** Custom blocks for the Moiraine WordPress theme
**Version:** 1.0.0
**Requires:** WordPress 6.7+
**Text Domain:** moiraine-blocks

**Included Functionality:**
- Mega Menu block
- Carousel block support
- SVG/WebP upload support
- Any other custom blocks

**Theme Integration:**
- Theme checks for plugin activation
- Admin notice if plugin is missing
- Graceful degradation if plugin is not active

---

## Distribution Build Process

**Build Steps:**
1. Run `npm run build` (if applicable)
2. Run `composer install --no-dev`
3. Create zip excluding files in `.distignore`
4. Verify no demo-content XML files in zip
5. Verify no docs/ directory in zip
6. Test zip installation on clean WordPress

**Recommended Tool:**
Use `wp dist-archive` command (from WP-CLI) or create custom build script.

---

## Testing Checklist

Before WordPress.org submission:

- [ ] Theme Check plugin passes with no errors
- [ ] Accessibility tests pass (axe, WAVE)
- [ ] No plugin-territory functionality in theme
- [ ] Skip-link is visible and first tabbable element
- [ ] Navigation structure is valid HTML
- [ ] No demo content in distribution
- [ ] No GPL-incompatible license references in distribution
- [ ] Companion plugin (if created) is documented
- [ ] Theme works with default WordPress content
- [ ] Theme works with block editor
- [ ] All patterns are valid
- [ ] Footer links are acceptable

---

## Alternative: Keep Theme as Premium/Self-Hosted

**If WordPress.org submission is not required:**

Consider keeping current implementation and distributing theme through:
- Own website (imagewize.com)
- GitHub releases
- Premium theme marketplaces (ThemeForest, etc.)

**Benefits:**
- Keep custom blocks in theme
- No restrictions on functionality
- More flexibility
- Can include demo content

**Trade-offs:**
- No WordPress.org directory exposure
- Manual updates (or implement own update mechanism)
- Users must download manually

---

## Resources

- [WordPress Theme Review Handbook](https://make.wordpress.org/themes/handbook/review/)
- [Theme Check Plugin](https://wordpress.org/plugins/theme-check/)
- [Plugin Territory Guidelines](https://make.wordpress.org/themes/handbook/review/required/#plugins-territory)
- [Theme Unit Test](https://github.com/WPTT/theme-unit-test)
- [Accessibility Testing](https://make.wordpress.org/accessibility/handbook/testing/)

---

## Next Steps - Priority Order

### Immediate Actions (Before WordPress.org Submission)

#### 1. Replace GPL-Incompatible Images ✅ COMPLETED
- **Status**: ✅ Completed (2025-11-15)
- **Effort**: ~3 hours
- **Priority**: HIGHEST
- All 9 images replaced with GPL-compatible alternatives
- 3 workspace images from StockSnap.io (CC0)
- 6 avatar images from Pexels (Pexels License)
- Documentation: [IMAGE-CREDITS-NEW.md](demo-enhancement/IMAGE-CREDITS-NEW.md)

#### 2. Fix Skip-Link Accessibility Issues (REQUIRED)
- **Status**: ❌ Not started
- **Effort**: ~30 minutes
- **Priority**: HIGH
- Enhance focus state visibility in style.css
- Ensure skip-link is first tabbable element
- Test with keyboard navigation

#### 3. Fix Navigation List Structure (REQUIRED)
- **Status**: ❌ Not started
- **Effort**: ~1-2 hours
- **Priority**: HIGH
- Investigate navigation block HTML structure
- Review theme.json navigation settings
- Test with accessibility tools

#### 4. Update "Tested up to" Version (RECOMMENDED)
- **Status**: ❌ Not started
- **Effort**: 5 minutes
- **Priority**: LOW
- Change from "6.7.1" to "6.7" in style.css

### Testing Before Submission

- [x] Replace all GPL-incompatible images with compatible alternatives (2025-11-15)
- [ ] Run Theme Check plugin - should pass with no errors
- [ ] Run accessibility tests (axe, WAVE) - should pass
- [ ] Verify `.distignore` properly excludes docs/ and demo-content/
- [ ] Build distribution zip and verify no excluded files present
- [ ] Test theme installation on clean WordPress instance
- [ ] Verify moiraine-blocks plugin is documented in README
- [ ] Test all patterns display correctly with new images

### Estimated Total Time to WordPress.org Ready
**~4-6 hours of work**

---

## Notes

- All changes should maintain backward compatibility where possible
- Document breaking changes clearly
- Provide migration guide if companion plugin is created
- Consider creating a "lite" version for WordPress.org and "pro" version with blocks
