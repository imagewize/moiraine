# Phase 7: Patterns Showcase - Commands Reference

**Created:** November 4, 2025
**Status:** Complete
**Page ID:** 100
**Page URL:** http://demo.imagewize.test/patterns/

---

## Summary

Phase 7 created a comprehensive Patterns showcase page to demonstrate Moiraine's 89+ professional pattern library. This addresses a key gap in the demo site by providing a central location to browse and preview patterns, similar to https://demo.olliewp.com/patterns/.

---

## Step 1: Create Patterns Page

**Command:**
```bash
cd trellis
trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- \
  wp post create \
    --post_type=page \
    --post_title='89+ Professional Patterns' \
    --post_name='patterns' \
    --post_status=publish \
    --path=web/wp \
    --porcelain
```

**Output:**
- Page ID: `100`
- URL: `http://demo.imagewize.test/patterns/`
- Status: Published

---

## Step 2: Add Pattern Content to Page

**Method:** Create HTML content file in VM and update page via WP-CLI

**Commands:**
```bash
# Enter VM shell
trellis vm shell --workdir /srv/www/demo.imagewize.com/current

# Create content file with patterns
cat > /tmp/patterns-content.html << 'CONTENTEOF'
<!-- wp:pattern {"slug":"moiraine/hero-call-to-action-buttons-light"} /-->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--xxx-large);padding-bottom:var(--wp--preset--spacing--xxx-large)">
<!-- wp:heading {"textAlign":"center","fontSize":"xxx-large"} -->
<h2 class="wp-block-heading has-text-align-center has-xxx-large-font-size">Browse Patterns by Category</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size">Explore 89+ professionally designed patterns organized by use case.</p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"moiraine/hero-dark"} /-->
<!-- wp:pattern {"slug":"moiraine/text-and-image-left"} /-->
<!-- wp:pattern {"slug":"moiraine/testimonials-and-logos"} /-->
<!-- wp:pattern {"slug":"moiraine/pricing-table"} /-->
<!-- wp:pattern {"slug":"moiraine/blog-post-columns"} /-->
<!-- wp:pattern {"slug":"moiraine/faq"} /-->
<!-- wp:pattern {"slug":"moiraine/text-call-to-action-buttons"} /-->
CONTENTEOF

# Update page with content from file
wp post update 100 --post_content="$(cat /tmp/patterns-content.html)" --path=web/wp
```

**One-liner version (from host):**
```bash
trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- bash -c "wp post update 100 --post_content=\"\$(cat /tmp/patterns-content.html)\" --path=web/wp"
```

**Result:** Page 100 now displays 8+ Moiraine patterns showcasing different categories

---

## Step 3: Update Primary Navigation Menu

**Get current navigation content:**
```bash
trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- \
  wp post get 3 --field=post_content --path=web/wp
```

**Create updated navigation with Patterns link:**
```bash
# Enter VM shell
trellis vm shell --workdir /srv/www/demo.imagewize.com/current

# Create updated navigation content
cat > /tmp/nav-updated.html << 'NAVEOF'
<!-- wp:navigation-link {"label":"Home","type":"page","id":17,"url":"http://demo.imagewize.test/","kind":"post-type"} /-->
<!-- wp:navigation-link {"label":"About","type":"page","id":19,"url":"http://demo.imagewize.test/about/","kind":"post-type"} /-->
<!-- wp:navigation-link {"label":"Services","type":"page","id":21,"url":"http://demo.imagewize.test/services/","kind":"post-type"} /-->
<!-- wp:navigation-link {"label":"Patterns","type":"page","id":100,"url":"http://demo.imagewize.test/patterns/","kind":"post-type"} /-->
<!-- wp:moiraine/menu-designer {"label":"features","labelColor":"#000000","menuSlug":"menu-panel-features"} /-->
<!-- wp:navigation-link {"label":"Portfolio","type":"page","id":69,"url":"http://demo.imagewize.test/portfolio/","kind":"post-type"} /-->
<!-- wp:navigation-link {"label":"FAQ","type":"page","id":70,"url":"http://demo.imagewize.test/faq/","kind":"post-type"} /-->
<!-- wp:navigation-link {"label":"Blog","type":"page","id":22,"url":"http://demo.imagewize.test/blog/","kind":"post-type"} /-->
<!-- wp:navigation-link {"label":"Contact","type":"page","id":20,"url":"http://demo.imagewize.test/contact-us/","kind":"post-type"} /-->
NAVEOF

# Update navigation post
wp post update 3 --post_content="$(cat /tmp/nav-updated.html)" --path=web/wp
```

**One-liner version (from host):**
```bash
trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- bash -c "wp post update 3 --post_content=\"\$(cat /tmp/nav-updated.html)\" --path=web/wp"
```

**Result:** Primary navigation now shows: Home | About | Services | **Patterns** | Features | Portfolio | FAQ | Blog | Contact

---

## Step 4: Update Footer Navigation Menu

**Get current footer navigation:**
```bash
trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- \
  wp post get 98 --field=post_content --path=web/wp
```

**Create updated footer navigation:**
```bash
# Enter VM shell
trellis vm shell --workdir /srv/www/demo.imagewize.com/current

# Create updated footer navigation content
cat > /tmp/footer-nav-updated.html << 'FOOTEREOF'
<!-- wp:navigation-link {"label":"About","type":"page","id":19,"url":"http://demo.imagewize.test/about/","kind":"post-type"} /-->
<!-- wp:navigation-link {"label":"Services","type":"page","id":21,"url":"http://demo.imagewize.test/services/","kind":"post-type"} /-->
<!-- wp:navigation-link {"label":"Patterns","type":"page","id":100,"url":"http://demo.imagewize.test/patterns/","kind":"post-type"} /-->
<!-- wp:navigation-link {"label":"Portfolio","type":"page","id":69,"url":"http://demo.imagewize.test/portfolio/","kind":"post-type"} /-->
<!-- wp:navigation-link {"label":"Blog","type":"page","id":22,"url":"http://demo.imagewize.test/blog/","kind":"post-type"} /-->
<!-- wp:navigation-link {"label":"Contact","type":"page","id":20,"url":"http://demo.imagewize.test/contact-us/","kind":"post-type"} /-->
<!-- wp:navigation-link {"label":"Privacy Policy","type":"page","id":15,"url":"http://demo.imagewize.test/privacy-policy/","kind":"post-type"} /-->
FOOTEREOF

# Update footer navigation post
wp post update 98 --post_content="$(cat /tmp/footer-nav-updated.html)" --path=web/wp
```

**One-liner version (from host):**
```bash
trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- bash -c "wp post update 98 --post_content=\"\$(cat /tmp/footer-nav-updated.html)\" --path=web/wp"
```

**Result:** Footer navigation now includes Patterns link after Services

---

## Step 5: Capture Screenshots

**Commands:**
```bash
# Desktop screenshot (Patterns page)
node .playwright/scripts/test.js http://demo.imagewize.test/patterns/ screenshot phase7-patterns-page --desktop

# Mobile screenshot (Patterns page)
node .playwright/scripts/test.js http://demo.imagewize.test/patterns/ screenshot phase7-patterns-page --mobile

# Desktop screenshot (homepage with updated navigation)
node .playwright/scripts/test.js http://demo.imagewize.test/ screenshot phase7-navigation-with-patterns --desktop
```

**Screenshots Created:**
1. `phase7-patterns-page-desktop-2025-11-04-01-47-29.png` (1597×7500 resized)
2. `phase7-patterns-page-mobile-2025-11-04-01-47-36.png` (291×7500 resized)
3. `phase7-navigation-with-patterns-desktop-2025-11-04-01-47-42.png` (1210×7500 resized)

**Location:** `.playwright/screenshots/`

---

## Verification Commands

**Check page exists:**
```bash
trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- \
  wp post list --post_type=page --name=patterns --path=web/wp
```

**Check page content:**
```bash
trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- \
  wp post get 100 --field=post_content --path=web/wp
```

**Check navigation menus:**
```bash
# Primary navigation (ID: 3)
trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- \
  wp post get 3 --field=post_content --path=web/wp

# Footer navigation (ID: 98)
trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- \
  wp post get 98 --field=post_content --path=web/wp
```

**View page in browser:**
- Local: http://demo.imagewize.test/patterns/
- Production: https://demo.imagewize.com/patterns/ (after deployment)

---

## Key WordPress Block Patterns Used

The Patterns page showcases the following Moiraine patterns:

1. **hero-call-to-action-buttons-light** - Opening hero section
2. **hero-dark** - Dark hero example
3. **text-and-image-left** - Content layout example
4. **testimonials-and-logos** - Social proof section
5. **pricing-table** - Pricing display
6. **blog-post-columns** - Blog layout example
7. **faq** - FAQ accordion example
8. **text-call-to-action-buttons** - Final CTA section

**Pattern Reference Format:**
```html
<!-- wp:pattern {"slug":"moiraine/pattern-name"} /-->
```

---

## Navigation Structure

### Primary Navigation (Post ID: 3)
**Order:** Home → About → Services → **Patterns** → Features (Menu Designer) → Portfolio → FAQ → Blog → Contact

### Footer Navigation (Post ID: 98)
**Order:** About → Services → **Patterns** → Portfolio → Blog → Contact → Privacy Policy

---

## Technical Notes

### WordPress Navigation Blocks
- Moiraine uses `wp_navigation` post type (not traditional theme locations)
- Navigation posts store block content with `navigation-link` blocks
- Updates require modifying post content directly (WP-CLI or Site Editor)

### Pattern Insertion
- Patterns inserted using `<!-- wp:pattern {"slug":"moiraine/pattern-name"} /-->` syntax
- WordPress renders patterns on page load
- Pattern content comes from `demo/web/app/themes/moiraine/patterns/` directory

### Page Template
- Page uses default Moiraine page template (Full Site Editing)
- No custom template assigned
- Content managed entirely via block editor

---

## Troubleshooting

**Issue: Pattern not rendering**
```bash
# Check if pattern exists
ls demo/web/app/themes/moiraine/patterns/ | grep pattern-name

# Verify pattern slug format (use moiraine/ prefix)
<!-- wp:pattern {"slug":"moiraine/pattern-name"} /-->
```

**Issue: Navigation not updating**
```bash
# Clear WordPress cache (if using caching plugin)
trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- \
  wp cache flush --path=web/wp

# Check navigation post ID
trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- \
  wp post list --post_type=wp_navigation --path=web/wp
```

**Issue: Page showing 404**
```bash
# Flush rewrite rules
trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- \
  wp rewrite flush --path=web/wp
```

---

## Files Modified

**WordPress Database:**
- Post ID 100 (new Patterns page)
- Post ID 3 (primary navigation updated)
- Post ID 98 (footer navigation updated)

**Documentation:**
- `PHASE7-PATTERNS-SHOWCASE.md` (planning document)
- `PHASE7-COMMANDS.md` (this file)
- `PROGRESS.md` (updated with Phase 7 status)

**Screenshots:**
- `.playwright/screenshots/phase7-patterns-page-desktop-*.png`
- `.playwright/screenshots/phase7-patterns-page-mobile-*.png`
- `.playwright/screenshots/phase7-navigation-with-patterns-desktop-*.png`

---

## Success Metrics

✅ **Patterns page created** (Page ID: 100)
✅ **8+ patterns showcased** (hero, content, testimonials, pricing, blog, FAQ, CTA)
✅ **Primary navigation updated** (Patterns link added)
✅ **Footer navigation updated** (Patterns link added)
✅ **Screenshots captured** (desktop + mobile)
✅ **Mobile responsive** (tested at 390px width)
✅ **Performance optimized** (uses native WordPress patterns)

---

## Next Steps

1. Test navigation on production site after deployment
2. Consider expanding Patterns page with more examples
3. Optional: Add pattern category filtering (future enhancement)
4. Complete Phase 6 (Style Variations Testing) for 100% completion

---

## References

- **Planning Document:** [PHASE7-PATTERNS-SHOWCASE.md](PHASE7-PATTERNS-SHOWCASE.md)
- **Progress Tracking:** [PROGRESS.md](PROGRESS.md)
- **Master Plan:** [MOIRAINE-DEMO-ENHANCEMENT.md](MOIRAINE-DEMO-ENHANCEMENT.md)
- **OllieWP Inspiration:** https://demo.olliewp.com/patterns/
- **WordPress Block Patterns:** https://developer.wordpress.org/block-editor/reference-guides/block-api/block-patterns/
