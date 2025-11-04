# Patterns Carousel Enhancement

**Created:** November 4, 2025
**Status:** Planning
**Purpose:** Add carousel showcase of 15 best patterns with landscape screenshots

---

## Objective

Enhance the Patterns page (Page ID: 100) with a carousel block showcasing 15 carefully selected patterns as landscape screenshots. This provides visual browsing of patterns before visitors see the full-size pattern examples below.

---

## Selection Criteria for Best 15 Patterns

### Categories to Represent (Coverage Strategy)
To demonstrate the breadth of Moiraine's 108+ patterns, select patterns across these categories:

1. **Hero Sections** (3 patterns)
2. **Content Layouts** (3 patterns)
3. **Testimonials & Social Proof** (2 patterns)
4. **Pricing & CTAs** (2 patterns)
5. **Features & Services** (2 patterns)
6. **Blog & Portfolio** (2 patterns)
7. **Contact & Forms** (1 pattern)

### Selection Criteria
- ✅ **Visual Impact** - Patterns with strong visual hierarchy and color
- ✅ **Variety** - Mix of light/dark backgrounds, layout styles
- ✅ **Functionality** - Represents different use cases
- ✅ **Completeness** - Patterns that look good standalone (not fragments)
- ✅ **Mobile-Friendly** - Works well in landscape crop
- ❌ **Exclude** - Headers, footers, menu panels (utility patterns)
- ❌ **Exclude** - Template patterns (page-*.php, template-*.php)

---

## The Best 15 Patterns to Showcase

### Hero Sections (3 patterns)

#### 1. `hero-call-to-action-buttons-light.php`
**Why:** Light background, clear CTAs, perfect entry point
**Category:** Hero
**Visual Elements:** Heading, description, dual buttons, light background
**Screenshot Focus:** Full hero section with gradient background

#### 2. `hero-dark.php`
**Why:** Contrast to light hero, demonstrates dark mode capability
**Category:** Hero
**Visual Elements:** White text on dark background, striking contrast
**Screenshot Focus:** Full hero section with dark background

#### 3. `hero-text-image-and-logos.php`
**Why:** Complex hero with multiple elements (text + image + logo grid)
**Category:** Hero
**Visual Elements:** Split layout, image, logo trust badges
**Screenshot Focus:** Full width showing text-image split

---

### Content Layouts (3 patterns)

#### 4. `text-and-image-columns-with-icons.php`
**Why:** Multi-column layout with icons, shows content variety
**Category:** Content
**Visual Elements:** Icons, text columns, images
**Screenshot Focus:** Grid layout showing 2-3 columns

#### 5. `feature-boxes-with-button.php`
**Why:** Card-based layout, button CTAs, service/feature showcase
**Category:** Features
**Visual Elements:** Cards, icons/emojis, buttons
**Screenshot Focus:** 3-column feature card grid

#### 6. `large-text-and-text-boxes.php`
**Why:** Typography-focused, unique layout style
**Category:** Content
**Visual Elements:** Large heading, text boxes
**Screenshot Focus:** Full section showing text hierarchy

---

### Testimonials & Social Proof (2 patterns)

#### 7. `testimonials-and-logos.php`
**Why:** Combines testimonials with logo grid (social proof + trust)
**Category:** Testimonials
**Visual Elements:** Quote text, client logos grid
**Screenshot Focus:** Full section with testimonials + logos

#### 8. `single-testimonial.php`
**Why:** Clean, focused testimonial design
**Category:** Testimonials
**Visual Elements:** Large quote, attribution, photo
**Screenshot Focus:** Centered testimonial with quote styling

---

### Pricing & CTAs (2 patterns)

#### 9. `pricing-table-3-column.php`
**Why:** Full pricing grid, popular pattern type
**Category:** Pricing
**Visual Elements:** 3-column pricing cards, feature lists, buttons
**Screenshot Focus:** Full 3-column grid

#### 10. `text-call-to-action-buttons.php`
**Why:** Simple, effective CTA section
**Category:** CTA
**Visual Elements:** Heading, description, dual buttons
**Screenshot Focus:** Centered CTA content

---

### Features & Services (2 patterns)

#### 11. `services-feature-cards.php`
**Why:** Service showcase with cards
**Category:** Services
**Visual Elements:** Card grid, icons, descriptions
**Screenshot Focus:** Multi-card grid layout

#### 12. `image-and-numbered-features.php`
**Why:** Numbered list with image, unique layout
**Category:** Features
**Visual Elements:** Image, numbered features, icon badges
**Screenshot Focus:** Split layout with numbers

---

### Blog & Portfolio (2 patterns)

#### 13. `blog-post-columns.php`
**Why:** Blog grid layout, content-rich
**Category:** Blog
**Visual Elements:** Post cards, images, excerpts
**Screenshot Focus:** 2-3 column blog grid

#### 14. `team-members.php`
**Why:** Team/people showcase with photos
**Category:** Team
**Visual Elements:** Team member photos, names, roles, grid layout
**Screenshot Focus:** Team member card grid

---

### Contact & Forms (1 pattern)

#### 15. `contact-side-by-side.php`
**Why:** Contact information + form layout
**Category:** Contact
**Visual Elements:** Split layout, contact details, form fields
**Screenshot Focus:** Two-column contact section

---

## Screenshot Specifications

### Dimensions & Format

**Viewport Size:**
- **Width:** 1400px (landscape)
- **Height:** Variable (based on pattern content, typically 600-900px)
- **Aspect Ratio:** ~16:9 to 2:1 (landscape)

**Output Format:**
- **Format:** WebP (modern, compressed)
- **Quality:** 85% (balance between quality and file size)
- **Naming:** `pattern-{slug}-landscape.webp`
- **Max File Size:** ~150KB per image

### Viewport Strategy
```javascript
viewport: {
  width: 1400,
  height: 900
}
```

**Reasoning:**
- 1400px width shows desktop patterns clearly
- Wide enough for multi-column layouts
- Not too large for carousel thumbnails
- Landscape orientation fits carousel UI

---

## Screenshot Creation Approach

### Option 1: Isolated Pattern Pages (Recommended)

**Method:** Create temporary single-pattern pages for each pattern, screenshot, then delete

**Advantages:**
- ✅ Clean screenshots (no navigation/footer clutter)
- ✅ Controlled viewport and cropping
- ✅ Consistent pattern presentation
- ✅ Easy to automate with WP-CLI + Playwright

**Process:**
```bash
# 1. Create temporary page for pattern
wp post create \
  --post_type=page \
  --post_title='Pattern Screenshot Temp' \
  --post_name='pattern-screenshot-temp' \
  --post_status=publish \
  --post_content='<!-- wp:pattern {"slug":"moiraine/hero-dark"} /-->' \
  --path=web/wp \
  --porcelain

# 2. Screenshot with Playwright (custom viewport)
node .playwright/scripts/screenshot-pattern.js \
  http://demo.imagewize.test/pattern-screenshot-temp/ \
  hero-dark \
  --width=1400 \
  --height=900

# 3. Convert to WebP
npm install sharp-cli -g
sharp -i .playwright/screenshots/pattern-hero-dark.png \
      -o demo/web/app/themes/moiraine/demo-content/images/pattern-hero-dark-landscape.webp \
      --quality 85

# 4. Delete temporary page
wp post delete <PAGE_ID> --force --path=web/wp
```

### Option 2: Element Screenshots from Patterns Page

**Method:** Screenshot specific pattern elements from existing Patterns page

**Advantages:**
- ✅ No temporary pages needed
- ✅ Patterns already rendered on Patterns page
- ✅ Faster workflow

**Disadvantages:**
- ❌ Includes navigation/spacing from page context
- ❌ Harder to crop cleanly
- ❌ Less control over pattern isolation

**Process:**
```javascript
// Custom Playwright script with element selector
await page.goto('http://demo.imagewize.test/patterns/');
const element = await page.locator('.wp-block-pattern[data-pattern="hero-dark"]');
await element.screenshot({
  path: 'pattern-hero-dark.png',
  type: 'png'
});
```

---

## Image Storage & Organization

### Directory Structure
```
demo/web/app/themes/moiraine/demo-content/images/
├── pattern-screenshots/
│   ├── pattern-hero-call-to-action-buttons-light-landscape.webp
│   ├── pattern-hero-dark-landscape.webp
│   ├── pattern-hero-text-image-and-logos-landscape.webp
│   ├── pattern-text-and-image-columns-with-icons-landscape.webp
│   ├── pattern-feature-boxes-with-button-landscape.webp
│   ├── pattern-large-text-and-text-boxes-landscape.webp
│   ├── pattern-testimonials-and-logos-landscape.webp
│   ├── pattern-single-testimonial-landscape.webp
│   ├── pattern-pricing-table-3-column-landscape.webp
│   ├── pattern-text-call-to-action-buttons-landscape.webp
│   ├── pattern-services-feature-cards-landscape.webp
│   ├── pattern-image-and-numbered-features-landscape.webp
│   ├── pattern-blog-post-columns-landscape.webp
│   ├── pattern-card-details-landscape.webp
│   └── pattern-contact-side-by-side-landscape.webp
```

### Image Upload to WordPress
```bash
# Upload all 15 screenshots to WordPress Media Library
for file in demo/web/app/themes/moiraine/demo-content/images/pattern-screenshots/*.webp; do
  wp media import "$file" \
    --title="Pattern: $(basename $file .webp)" \
    --path=web/wp \
    --porcelain
done
```

**Output:** Media IDs for each image (use in carousel block)

---

## Carousel Block Integration

### WordPress Carousel Block
Moiraine likely doesn't have a native carousel block, so we'll use:

**Option 1:** Core Gallery Block in Carousel Mode (if supported)
```html
<!-- wp:gallery {"columns":1,"imageCrop":false,"linkTo":"none","className":"is-style-carousel"} -->
<figure class="wp-block-gallery has-nested-images columns-1 is-style-carousel">
  <!-- wp:image {"id":101} -->
  <figure class="wp-block-image"><img src="pattern-hero-dark.webp" alt=""/></figure>
  <!-- /wp:image -->
  <!-- ... more images ... -->
</figure>
<!-- /wp:gallery -->
```

**Option 2:** Image Block with Custom CSS (Swiper.js)
- Use Group block with horizontal scroll
- Add custom CSS for carousel styling
- Implement with JavaScript (Swiper.js or similar)

**Option 3:** Third-Party Block Plugin (if available)
- Check if Moiraine demo has carousel block plugin
- Use existing carousel functionality

### Recommended Approach
**Custom Carousel Pattern** - Create new Moiraine pattern with carousel functionality

**Pattern File:** `demo/web/app/themes/moiraine/patterns/carousel-pattern-showcase.php`

**Content Structure:**
```php
<?php
/**
 * Title: Pattern Showcase Carousel
 * Slug: moiraine/carousel-pattern-showcase
 * Categories: gallery
 */
?>

<!-- wp:group {"align":"full","className":"pattern-carousel-wrapper"} -->
<div class="wp-block-group alignfull pattern-carousel-wrapper">
  <!-- wp:heading {"textAlign":"center"} -->
  <h2 class="has-text-align-center">Browse Our Pattern Library</h2>
  <!-- /wp:heading -->

  <!-- wp:paragraph {"align":"center"} -->
  <p class="has-text-align-center">Swipe or scroll to preview 15 popular patterns</p>
  <!-- /wp:paragraph -->

  <!-- wp:gallery {"columns":3,"imageCrop":false,"linkTo":"none"} -->
  <figure class="wp-block-gallery">
    <!-- 15 images here -->
  </figure>
  <!-- /wp:gallery -->
</div>
<!-- /wp:group -->
```

---

## Implementation Workflow

**IMPORTANT:** All scripts must be run from the project root directory:
```bash
cd /~code/imagewize.com
# Then run scripts from here
```

### Phase 1: Pattern Selection & Testing (30 min)
1. Review all 15 selected patterns in browser
2. Verify patterns render correctly
3. Note any patterns that need adjustments

### Phase 2: Screenshot Generation (60 min) ✅ SCRIPTS CREATED
1. ✅ Created custom Playwright script: `.playwright/scripts/screenshot-pattern.js`
2. ✅ Created WebP conversion script: `.playwright/scripts/convert-to-webp.js`
3. ✅ Created automation pipeline: `.playwright/scripts/generate-pattern-screenshots.sh`
4. Generate temporary pages for each pattern
5. Capture 1400x900 screenshots
6. Convert PNG → WebP (85% quality)
7. Delete temporary pages

### Phase 3: Image Processing & Upload (30 min)
1. Review all 15 WebP images
2. Optimize file sizes (target <150KB each)
3. Upload to WordPress Media Library
4. Record Media IDs for each image

### Phase 4: Carousel Integration (45 min)
1. Choose carousel approach (Gallery vs. Custom)
2. Create carousel pattern or insert block
3. Add all 15 images to carousel
4. Test carousel functionality (swipe, navigation)
5. Responsive testing (mobile, tablet, desktop)

### Phase 5: Documentation & Screenshots (15 min)
1. Update PHASE7-COMMANDS.md with carousel commands
2. Capture screenshots of carousel on Patterns page
3. Update PROGRESS.md with carousel enhancement

**Total Estimated Time:** 3 hours

---

## Custom Playwright Script

### File: `.playwright/scripts/screenshot-pattern.js`

```javascript
const { chromium } = require('playwright');
const path = require('path');

async function screenshotPattern(url, patternName, options = {}) {
  const browser = await chromium.launch();
  const context = await browser.newContext({
    viewport: {
      width: options.width || 1400,
      height: options.height || 900
    }
  });

  const page = await context.newPage();
  await page.goto(url, { waitUntil: 'networkidle' });

  // Wait for pattern to render
  await page.waitForTimeout(2000);

  // Screenshot
  const outputPath = path.join(
    __dirname,
    '../screenshots',
    `pattern-${patternName}.png`
  );

  await page.screenshot({
    path: outputPath,
    fullPage: false
  });

  console.log(`Screenshot saved: ${outputPath}`);

  await browser.close();
}

// CLI usage
const args = process.argv.slice(2);
screenshotPattern(args[0], args[1], {
  width: parseInt(args[2]) || 1400,
  height: parseInt(args[3]) || 900
});

module.exports = { screenshotPattern };
```

**Usage:**
```bash
node .playwright/scripts/screenshot-pattern.js \
  http://demo.imagewize.test/temp-pattern/ \
  hero-dark \
  1400 \
  900
```

---

## WebP Conversion Script

### File: `.playwright/scripts/convert-to-webp.js`

```javascript
const sharp = require('sharp');
const fs = require('fs');
const path = require('path');

async function convertToWebP(inputPath, outputPath, quality = 85) {
  await sharp(inputPath)
    .webp({ quality })
    .toFile(outputPath);

  const stats = fs.statSync(outputPath);
  console.log(`WebP created: ${outputPath} (${Math.round(stats.size / 1024)}KB)`);
}

// Convert all PNG screenshots to WebP
const screenshotsDir = path.join(__dirname, '../screenshots');
const outputDir = path.join(__dirname, '../../demo/web/app/themes/moiraine/demo-content/images/pattern-screenshots');

fs.mkdirSync(outputDir, { recursive: true });

const files = fs.readdirSync(screenshotsDir).filter(f => f.startsWith('pattern-') && f.endsWith('.png'));

Promise.all(
  files.map(file => {
    const inputPath = path.join(screenshotsDir, file);
    const outputPath = path.join(outputDir, file.replace('.png', '-landscape.webp'));
    return convertToWebP(inputPath, outputPath, 85);
  })
).then(() => {
  console.log('All screenshots converted to WebP');
});
```

**Usage:**
```bash
npm install sharp
node .playwright/scripts/convert-to-webp.js
```

---

## Automation Script (Full Pipeline)

### File: `.playwright/scripts/generate-pattern-screenshots.sh`

```bash
#!/bin/bash
# Full automation: Create temp pages → Screenshot → Convert to WebP → Upload → Cleanup

SITE_URL="http://demo.imagewize.test"
WP_PATH="web/wp"
WORKDIR="/srv/www/demo.imagewize.com/current"

# Array of 15 patterns
PATTERNS=(
  "hero-call-to-action-buttons-light"
  "hero-dark"
  "hero-text-image-and-logos"
  "text-and-image-columns-with-icons"
  "feature-boxes-with-button"
  "large-text-and-text-boxes"
  "testimonials-and-logos"
  "single-testimonial"
  "pricing-table-3-column"
  "text-call-to-action-buttons"
  "services-feature-cards"
  "image-and-numbered-features"
  "blog-post-columns"
  "card-details"
  "contact-side-by-side"
)

for pattern in "${PATTERNS[@]}"; do
  echo "Processing pattern: $pattern"

  # 1. Create temp page
  PAGE_ID=$(trellis vm shell --workdir $WORKDIR -- \
    wp post create \
      --post_type=page \
      --post_title="Pattern: $pattern" \
      --post_name="pattern-screenshot-$pattern" \
      --post_status=publish \
      --post_content="<!-- wp:pattern {\"slug\":\"moiraine/$pattern\"} /-->" \
      --path=$WP_PATH \
      --porcelain)

  echo "Created temp page ID: $PAGE_ID"

  # 2. Screenshot with Playwright
  node .playwright/scripts/screenshot-pattern.js \
    "$SITE_URL/pattern-screenshot-$pattern/" \
    "$pattern" \
    1400 \
    900

  # 3. Delete temp page
  trellis vm shell --workdir $WORKDIR -- \
    wp post delete $PAGE_ID --force --path=$WP_PATH

  echo "Cleaned up temp page"
done

# 4. Convert all to WebP
echo "Converting to WebP..."
node .playwright/scripts/convert-to-webp.js

# 5. Upload to WordPress Media Library
echo "Uploading to WordPress..."
trellis vm shell --workdir $WORKDIR -- bash -c "
  for file in /srv/www/demo.imagewize.com/current/web/app/themes/moiraine/demo-content/images/pattern-screenshots/*.webp; do
    wp media import \"\$file\" \
      --title=\"Pattern: \$(basename \$file -landscape.webp | sed 's/pattern-//')\" \
      --path=$WP_PATH \
      --porcelain
  done
"

echo "Done! All 15 pattern screenshots generated, converted, and uploaded."
```

**Usage:**
```bash
chmod +x .playwright/scripts/generate-pattern-screenshots.sh
./.playwright/scripts/generate-pattern-screenshots.sh
```

---

## Alternative: Manual Screenshot Workflow

If automation is too complex, use manual workflow:

1. **Create test page:**
   ```bash
   trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- \
     wp post create \
       --post_type=page \
       --post_title="Pattern Screenshot Test" \
       --post_name="pattern-test" \
       --post_status=publish \
       --path=web/wp \
       --porcelain
   ```

2. **Update page content for each pattern:**
   ```bash
   wp post update <PAGE_ID> \
     --post_content='<!-- wp:pattern {"slug":"moiraine/hero-dark"} /-->' \
     --path=web/wp
   ```

3. **Screenshot manually with browser DevTools:**
   - Open http://demo.imagewize.test/pattern-test/
   - Set viewport to 1400x900 (DevTools → Responsive)
   - Right-click → "Capture Screenshot"
   - Save as `pattern-hero-dark.png`

4. **Convert to WebP manually:**
   ```bash
   # Using ImageMagick
   convert pattern-hero-dark.png -quality 85 pattern-hero-dark-landscape.webp

   # OR using sharp-cli
   npx sharp-cli -i pattern-hero-dark.png -o pattern-hero-dark-landscape.webp --webp --quality 85
   ```

5. **Upload to WordPress:**
   ```bash
   trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- \
     wp media import /path/to/pattern-hero-dark-landscape.webp \
       --title="Pattern: Hero Dark" \
       --path=web/wp
   ```

6. **Repeat for all 15 patterns**

---

## Success Metrics

### Must-Have
- ✅ 15 pattern screenshots generated (WebP format)
- ✅ All images <150KB file size
- ✅ Landscape orientation (1400px width)
- ✅ Images uploaded to WordPress Media Library
- ✅ Carousel block added to Patterns page
- ✅ Carousel functions on desktop/mobile
- ✅ High visual quality (85% WebP)

### Nice-to-Have
- Pattern name overlays on carousel images
- Clickable carousel items (link to full pattern on page)
- Category badges on screenshots
- Lazy loading for performance
- Swipe gestures on mobile

---

## Open Questions

1. **Carousel Block Choice:**
   - Does Moiraine have a built-in carousel block?
   - Should we use Core Gallery block or custom solution?
   - Consider Swiper.js integration?

2. **Image Optimization:**
   - Target file size per image? (Currently: <150KB)
   - WebP quality setting? (Currently: 85%)
   - Responsive image sizes needed?

3. **Pattern Page Placement:**
   - Where on Patterns page should carousel go?
   - Above current patterns or as introduction?
   - Replace any existing sections?

4. **Screenshot Automation:**
   - Fully automate or manual workflow?
   - Create custom Playwright scripts?
   - Use existing .playwright/scripts/test.js?

---

## Quick Start Guide (After Scripts Created)

### Generate All 15 Pattern Screenshots (Fully Automated)

**From project root:**
```bash
cd ~/code/imagewize.com

# Generate all screenshots + convert to WebP (no upload)
./.playwright/scripts/generate-pattern-screenshots.sh

# Generate all screenshots + convert to WebP + upload to WordPress
./.playwright/scripts/generate-pattern-screenshots.sh --upload

# Dry run to test (no actual changes)
./.playwright/scripts/generate-pattern-screenshots.sh --dry-run
```

### Manual Usage (Individual Scripts)

**1. Generate single pattern screenshot:**
```bash
cd ~/code/imagewize.com
node .playwright/scripts/screenshot-pattern.js hero-dark
node .playwright/scripts/screenshot-pattern.js pricing-table-3-column
```

**2. Convert all screenshots to WebP:**
```bash
cd ~/code/imagewize.com
node .playwright/scripts/convert-to-webp.js --all
```

**3. Convert single screenshot to WebP:**
```bash
cd ~/code/imagewize.com
node .playwright/scripts/convert-to-webp.js pattern-hero-dark.png
```

### Output Locations

- **PNG Screenshots:** `.playwright/screenshots/pattern-*.png`
- **WebP Images:** `demo/web/app/themes/moiraine/demo-content/images/pattern-screenshots/*.webp`

### Testing Results ✅

**All 15 Patterns Generated:**
- ✅ **Consistent dimensions:** All images are 1400x800 (landscape)
- ✅ **Pattern-only screenshots** - No header/footer (element-specific capture)
- ✅ **File sizes:** 5.7KB - 56KB (all well under 150KB target)
- ✅ **Average file size:** ~37KB per image
- ✅ **Total size:** ~557KB for all 15 images
- ✅ Temporary WordPress pages created and cleaned up successfully
- ✅ Clean, isolated pattern presentation perfect for carousel

**Pattern Replaced:**
- ❌ `card-details` (broken - only showed title)
- ✅ Replaced with `team-members` (team showcase with photos)

---

## Next Steps

1. ✅ Review this planning document
2. ⬜ Decide on carousel block solution
3. ✅ Create Playwright screenshot automation script
4. ✅ Create WebP conversion script
5. ✅ Create full automation pipeline script
6. ✅ Test with single pattern (hero-dark)
7. ✅ Generate all 15 pattern screenshots
8. ✅ Normalize all images to 1400x800 (consistent dimensions)
9. ✅ Replace broken pattern (card-details → team-members)
10. ⬜ Upload images to WordPress
11. ⬜ Integrate carousel into Patterns page
12. ⬜ Test carousel functionality
13. ⬜ Update PHASE7-COMMANDS.md
14. ⬜ Capture final screenshots

---

## References

- **Phase 7 Planning:** [PHASE7-PATTERNS-SHOWCASE.md](PHASE7-PATTERNS-SHOWCASE.md)
- **Phase 7 Commands:** [PHASE7-COMMANDS.md](PHASE7-COMMANDS.md)
- **Moiraine Patterns:** `demo/web/app/themes/moiraine/patterns/`
- **WordPress Gallery Block:** https://wordpress.org/documentation/article/gallery-block/
- **Swiper.js:** https://swiperjs.com/
- **Sharp Image Processing:** https://sharp.pixelplumbing.com/

---

## Scripts Created

1. **`.playwright/scripts/screenshot-pattern.js`** - Generate pattern screenshots
2. **`.playwright/scripts/convert-to-webp.js`** - Convert PNG to WebP
3. **`.playwright/scripts/generate-pattern-screenshots.sh`** - Full automation pipeline
