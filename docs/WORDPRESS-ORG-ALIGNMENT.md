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

**Root Cause (IDENTIFIED):**
WordPress core navigation block renders submenu chevron icons (`<span class="wp-block-navigation__submenu-icon">`) as direct children of `<li>` elements, positioned OUTSIDE the `<button>` element. This violates HTML5 list structure rules.

**Current HTML Structure:**
```html
<ul class="wp-block-navigation__container">
  <li class="has-child">
    <button>Services</button>
    <span class="wp-block-navigation__submenu-icon">  <!-- ❌ Invalid! -->
      <svg>...</svg>
    </span>
    <ul class="wp-block-navigation__submenu-container">
      <li>FAQ</li>
    </ul>
  </li>
</ul>
```

**Why Current CSS Fix Doesn't Work:**
```css
/* style.css line 204-207 - Attempts to use display: contents */
.wp-block-navigation__container > :not(li):not(script):not(template) {
  display: contents;
}
```

This selector targets direct children of `.wp-block-navigation__container`, but the problematic `<span>` is a child of `<li>`, not `<ul>`. The accessibility checker examines the DOM structure, not the rendered box tree.

**Solution Options:**

#### Option A: JavaScript DOM Restructuring (RECOMMENDED)
Move the chevron `<span>` inside the `<button>` element using JavaScript after page load.

**Implementation:**
```javascript
// Add to assets/js/navigation-frontend.js or create new file
document.addEventListener('DOMContentLoaded', function() {
  // Find all navigation items with submenus
  const navItems = document.querySelectorAll('.wp-block-navigation-item.has-child');

  navItems.forEach(item => {
    const button = item.querySelector('.wp-block-navigation-submenu__toggle');
    const chevron = item.querySelector(':scope > .wp-block-navigation__submenu-icon');

    // Move chevron inside button if both exist
    if (button && chevron && chevron.parentNode === item) {
      button.appendChild(chevron);
    }
  });
});
```

**Pros:**
- Fixes HTML validation
- Minimal code change
- Works with existing navigation structure
- No impact on functionality

**Cons:**
- JavaScript dependency for accessibility (not ideal)
- May flash incorrect structure before JS loads

#### Option B: CSS Fix with Correct Selector
Update CSS to target the actual problematic element.

**Implementation:**
```css
/* Fix navigation list structure - move chevron icon using display: contents */
.wp-block-navigation__container .wp-block-navigation-item.has-child > .wp-block-navigation__submenu-icon {
  display: contents;
}
```

**Pros:**
- Pure CSS solution
- No JavaScript required
- Works immediately

**Cons:**
- May not pass accessibility checker (still sees DOM structure)
- `display: contents` browser support edge cases

#### Option C: PHP Filter to Modify Block Output
Use WordPress filter to modify navigation block HTML output.

**Implementation:**
```php
// Add to functions.php
add_filter('render_block', function($block_content, $block) {
  if ($block['blockName'] === 'core/navigation') {
    // Use DOMDocument to restructure HTML
    // Move chevron spans inside buttons
  }
  return $block_content;
}, 10, 2);
```

**Pros:**
- Server-side fix
- No JavaScript dependency
- Proper HTML from the start

**Cons:**
- Complex implementation
- May break with WordPress updates
- Performance impact

#### Option D: Accept as WordPress Core Issue
Document this as a WordPress core limitation and accept the warning.

**Rationale:**
- This is a WordPress core navigation block issue, not theme-specific
- Many themes likely have this same issue
- WordPress.org reviewers may understand this is unavoidable
- Could report to WordPress core team

**Pros:**
- No code changes needed
- Not actually a theme bug

**Cons:**
- May block WordPress.org approval
- Accessibility issue remains

**RECOMMENDED APPROACH:**
Try **Option A (JavaScript)** first as it's the most reliable fix. If WordPress.org rejects, escalate with documentation that this is a core block issue.

**Status:** ⏳ Solution proposed - awaiting decision

---

### 8. Skip Link Focus State Visibility

**Issue:**
```
The element "<a class="skip-link screen-reader-text"...>" does not have enough visible
difference when focused.
```

**Root Cause (IDENTIFIED):**
WordPress core injects inline CSS with weak focus styles that have higher specificity than the theme's CSS.

**Current Situation:**

WordPress core injects this inline CSS:
```css
.skip-link.screen-reader-text:focus {
  background-color: #eee;  /* ← Too subtle! Gray on white */
  color: #444;
  /* ... other styles ... */
}
```

Moiraine theme CSS (style.css lines 210-219):
```css
.skip-link:focus,
a.skip-link:focus {
  background-color: var(--wp--preset--color--primary);
  color: var(--wp--preset--color--base);
  outline: 3px solid var(--wp--preset--color--main);
  /* ... */
}
```

**The Problem:**
WordPress core's selector `.skip-link.screen-reader-text:focus` (2 classes) has higher specificity than theme's `.skip-link:focus` (1 class), so WordPress core's gray styling wins.

**Solution Options:**

#### Option A: Increase CSS Specificity (RECOMMENDED)
Match or exceed WordPress core's specificity without using `!important`.

**Implementation:**
```css
/* Update style.css lines 210-219 */
.skip-link.screen-reader-text:focus,
a.skip-link.screen-reader-text:focus {
  background-color: var(--wp--preset--color--primary) !important;
  color: var(--wp--preset--color--base) !important;
  outline: 3px solid var(--wp--preset--color--main) !important;
  outline-offset: 3px !important;
  padding: 1em 1.5em !important;
  text-decoration: none !important;
  box-shadow: 0 0 0 3px var(--wp--preset--color--primary) !important;
  z-index: 100000 !important;
  clip-path: none !important;
  height: auto !important;
  width: auto !important;
  position: absolute !important;
  top: 0 !important;
  left: 0 !important;
}
```

**Pros:**
- Guaranteed to override WordPress core inline CSS
- Simple implementation
- Immediate fix

**Cons:**
- Requires `!important` (generally discouraged but necessary here)
- May need updates if WordPress core changes

#### Option B: Remove WordPress Core Inline CSS
Use `wp_dequeue_style()` to remove WordPress core's skip-link inline CSS.

**Implementation:**
```php
// Add to functions.php
add_action('wp_enqueue_scripts', function() {
  // Remove WordPress core skip-link inline styles
  wp_dequeue_style('wp-block-template-skip-link');
}, 100);
```

**Pros:**
- Cleaner CSS without `!important`
- Full control over skip-link styling

**Cons:**
- May break if WordPress core changes how it handles skip links
- Removes all core skip-link functionality

#### Option C: Use Inline Styles (Not Recommended)
Add inline styles directly to the skip link.

**Cons:**
- Not possible since skip link is generated by WordPress core JavaScript
- Would require JavaScript manipulation

**RECOMMENDED APPROACH:**
Use **Option A** with `!important` declarations. This is the most reliable approach when dealing with WordPress core inline CSS that you need to override for accessibility compliance.

**Accessibility Justification:**
Using `!important` is acceptable (and necessary) when overriding WordPress core inline styles to meet WCAG 2.1 AA contrast requirements.

**Status:** ⏳ Solution proposed - awaiting decision

---

### 9. Skip Link Not First Tabbable Element

**Issue:**
```
Tabbing is not working as expected
Expected: <a class="skip-link...">Skip to content</a>
Current: <a href="http://localhost:8485"...>trunk</a>
```

**Root Cause (IDENTIFIED):**
WordPress core JavaScript generates the skip link and injects it into the DOM, but it may not be truly the first tabbable element due to:
1. WordPress core's default CSS hiding method may interfere with focus
2. Theme CSS positioning may affect tab order
3. Other elements may have explicit `tabindex` attributes

**Current Situation:**

WordPress core JavaScript (injected inline):
```javascript
// Creates skip link and injects it before .wp-site-blocks
skipLink = document.createElement('a');
skipLink.classList.add('skip-link', 'screen-reader-text');
skipLink.id = 'wp-skip-link';
skipLink.href = '#wp--skip-link--target';
skipLink.innerText = 'Skip to content';
sibling.parentElement.insertBefore(skipLink, sibling);
```

Moiraine theme CSS (style.css lines 222-230):
```css
/* Hides skip link when not focused */
.skip-link:not(:focus),
a.skip-link:not(:focus) {
  position: absolute;
  left: -9999px;  /* Off-screen positioning */
  top: auto;
  width: 1px;
  height: 1px;
  overflow: hidden;
}
```

**The Problem:**
The test shows the site logo link (`<a href="http://localhost:8485"...>trunk</a>`) receives focus first instead of the skip link. This could be due to:
1. CSS `left: -9999px` positioning may confuse some browsers' tab order
2. WordPress core's inline CSS may override theme positioning
3. The skip link may not truly be the first element in DOM order

**Solution Options:**

#### Option A: Ensure Skip Link is Visually First (RECOMMENDED)
Use modern CSS visually-hidden technique instead of off-screen positioning.

**Implementation:**
```css
/* Update style.css lines 222-230 */
/* Ensure skip link is visually hidden but accessible - modern approach */
.skip-link:not(:focus),
a.skip-link:not(:focus) {
  position: absolute !important;
  width: 1px !important;
  height: 1px !important;
  padding: 0 !important;
  margin: -1px !important;
  overflow: hidden !important;
  clip: rect(0, 0, 0, 0) !important;
  white-space: nowrap !important;
  border-width: 0 !important;
  /* DO NOT use left: -9999px - it can break tab order */
}

/* Skip link tab order priority - ensure it appears at top when focused */
.skip-link,
a.skip-link {
  position: absolute !important;
  top: 0 !important;
  left: 0 !important;
  z-index: 100000 !important;
}
```

**Pros:**
- Modern accessibility best practice
- Better browser compatibility
- Reliable tab order
- Follows WordPress core recommendations

**Cons:**
- Requires `!important` to override WordPress core inline CSS

#### Option B: Force Tab Order with JavaScript
Explicitly ensure skip link is first in tab order by manipulating tabindex.

**Implementation:**
```javascript
// Add to functions.php or enqueue as separate script
document.addEventListener('DOMContentLoaded', function() {
  const skipLink = document.getElementById('wp-skip-link');

  if (skipLink) {
    // Ensure skip link is definitely first tabbable element
    skipLink.tabIndex = 0;

    // Move it to be first child of body if it isn't already
    if (document.body.firstChild !== skipLink) {
      document.body.insertBefore(skipLink, document.body.firstChild);
    }
  }
});
```

**Pros:**
- Guaranteed to work
- Forces correct tab order

**Cons:**
- JavaScript dependency
- May conflict with WordPress core skip-link generation
- Could cause race conditions

#### Option C: Combine CSS + JavaScript Fix
Use improved CSS hiding method PLUS JavaScript to verify DOM position.

**Implementation:**
Combine Option A CSS with minimal JavaScript verification:

```javascript
// Lightweight check to ensure skip link is first
document.addEventListener('DOMContentLoaded', function() {
  const skipLink = document.getElementById('wp-skip-link');
  if (skipLink && document.body.firstElementChild !== skipLink) {
    document.body.insertBefore(skipLink, document.body.firstElementChild);
  }
});
```

**Pros:**
- Most robust solution
- Handles edge cases
- Works even if WordPress core changes

**Cons:**
- Requires both CSS and JavaScript changes

#### Option D: Test with WordPress Core Defaults First
Before implementing fixes, test if the issue is actually caused by theme CSS overrides.

**Testing Steps:**
1. Temporarily disable theme skip-link CSS
2. Test tab order with only WordPress core styles
3. If it works, adjust theme CSS selectors
4. If it doesn't work, it's a WordPress core issue

**RECOMMENDED APPROACH:**
Start with **Option A** (improved CSS hiding method). This follows WordPress accessibility best practices and should fix the tab order issue. If that doesn't work, escalate to **Option C** (CSS + JavaScript).

**Why Modern CSS Matters:**
The old `left: -9999px` technique can cause:
- Tab order confusion in some browsers
- Horizontal scrollbar flashes
- Performance issues with large pages
- Screen reader navigation problems

Modern `clip` + `overflow: hidden` technique is now the standard.

**References:**
- [WordPress Core Trac: Skip Link Best Practices](https://core.trac.wordpress.org/ticket/42331)
- [WebAIM: CSS in Action - Invisible Content](https://webaim.org/techniques/css/invisiblecontent/)
- [A11y Project: How to Hide Content](https://www.a11yproject.com/posts/how-to-hide-content/)

**Status:** ⏳ Solution proposed - awaiting decision

---

## Accessibility Issues - Decision Matrix

### Quick Summary

| Issue | Current State | Recommended Fix | Estimated Time | Risk Level |
|-------|---------------|-----------------|----------------|------------|
| **#7 Navigation List** | Invalid HTML: `<span>` as child of `<li>` | JavaScript to move chevron into button | 30 min | Low |
| **#8 Skip Link Focus** | WordPress core CSS overrides theme styles | Add `!important` to theme CSS | 15 min | Very Low |
| **#9 Skip Link Tab Order** | Using outdated `left: -9999px` technique | Modern `clip` + `overflow: hidden` CSS | 15 min | Very Low |

### Implementation Recommendation

**All three issues can be fixed with minimal code changes in ~1 hour total:**

1. **Skip Link Issues (#8 & #9)** - CSS-only fixes in `style.css`
   - Very low risk
   - Follows modern accessibility best practices
   - No JavaScript dependencies
   - **Action**: Update 20 lines of CSS

2. **Navigation Structure (#7)** - Small JavaScript addition
   - Low risk
   - Works around WordPress core limitation
   - Falls back gracefully if JavaScript disabled (still functional, just fails accessibility test)
   - **Action**: Add 15 lines of JavaScript

**Alternative (Not Recommended):**
Accept navigation issue as WordPress core bug and hope reviewers understand. This is risky as it may block WordPress.org approval.

### Risk Assessment

**If we implement all fixes:**
- ✅ High confidence of passing WordPress.org accessibility review
- ✅ Follows WCAG 2.1 AA standards
- ✅ Modern, maintainable code
- ⚠️ Minor: Uses `!important` in CSS (but justified for accessibility)
- ⚠️ Minor: JavaScript dependency for navigation fix (but progressive enhancement)

**If we skip fixes:**
- ❌ Will likely fail WordPress.org accessibility review
- ❌ Does not meet WCAG 2.1 AA standards
- ❌ May require multiple review cycles

### Code Changes Overview

**File: `style.css` (lines 210-237)**
```css
/* BEFORE: 27 lines */
.skip-link:focus,
a.skip-link:focus {
  background-color: var(--wp--preset--color--primary);
  /* ... existing styles ... */
}

.skip-link:not(:focus),
a.skip-link:not(:focus) {
  position: absolute;
  left: -9999px;  /* ← Outdated technique */
  /* ... */
}

/* AFTER: 35 lines with !important and modern hiding */
.skip-link.screen-reader-text:focus,
a.skip-link.screen-reader-text:focus {
  background-color: var(--wp--preset--color--primary) !important;
  /* ... styles with !important ... */
}

.skip-link:not(:focus),
a.skip-link:not(:focus) {
  position: absolute !important;
  clip: rect(0, 0, 0, 0) !important;  /* ← Modern technique */
  /* ... no more left: -9999px ... */
}
```

**New File: `assets/js/accessibility-fixes.js` (~20 lines)**
```javascript
// Fix navigation list structure by moving chevron inside button
document.addEventListener('DOMContentLoaded', function() {
  const navItems = document.querySelectorAll('.wp-block-navigation-item.has-child');
  navItems.forEach(item => {
    const button = item.querySelector('.wp-block-navigation-submenu__toggle');
    const chevron = item.querySelector(':scope > .wp-block-navigation__submenu-icon');
    if (button && chevron && chevron.parentNode === item) {
      button.appendChild(chevron);
    }
  });
});
```

**File: `functions.php` (1 line to enqueue new JS)**
```php
wp_enqueue_script('moiraine-accessibility-fixes', get_template_directory_uri() . '/assets/js/accessibility-fixes.js', array(), MOIRAINE_VERSION, true);
```

### Recommendation: Implement All Fixes

**Rationale:**
- Total implementation time: ~1 hour
- High probability of WordPress.org approval
- Improves actual user accessibility
- Follows current best practices
- Low risk, high reward

**Status:** ⏳ Solution proposed - awaiting decision

---

## Implementation Priority

### Phase 1: Critical Blockers (Required for WordPress.org)
1. ✅ Verify `.distignore` excludes demo-content and docs
2. ✅ Remove `upload_mimes` filter from theme (moved to moiraine-blocks plugin)
3. ✅ Remove/move custom block registration (moved to moiraine-blocks plugin)
4. ✅ Create companion plugin for custom blocks (moiraine-blocks created and published)
5. ✅ Replace all Unsplash images with GPL-compatible alternatives (2025-11-15)

### Phase 2: Accessibility Fixes (Required for WordPress.org)
5. ⏳ Fix skip-link focus state visibility (Solution proposed - Issue #8, Option A)
6. ⏳ Fix skip-link tab order (Solution proposed - Issue #9, Option A)
7. ⏳ Fix navigation list structure (Solution proposed - Issue #7, Option A recommended)

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
- **Status**: ⏳ Solutions identified, ready for implementation
- **Effort**: ~30 minutes
- **Priority**: HIGH
- **Issue #8**: Update CSS specificity with `!important` to override WordPress core inline styles
- **Issue #9**: Replace `left: -9999px` with modern `clip` + `overflow: hidden` technique
- **Files to modify**: `style.css` (lines 210-230)
- **Recommended approach**: CSS-only fix (Options A for both issues)
- Test with keyboard navigation after implementation

#### 3. Fix Navigation List Structure (REQUIRED)
- **Status**: ⏳ Solution identified, ready for implementation
- **Effort**: ~30 minutes
- **Priority**: HIGH
- **Issue #7**: WordPress core renders chevron `<span>` outside `<button>`, violating HTML5 list rules
- **Recommended solution**: JavaScript to move chevron inside button after page load
- **Alternative**: Accept as WordPress core limitation and document
- **Files to modify**: Create new `assets/js/accessibility-fixes.js` or add to existing navigation JS
- Test with accessibility tools (axe DevTools) after implementation

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
