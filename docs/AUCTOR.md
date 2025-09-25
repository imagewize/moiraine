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

---

## Publisher Style Variation Analysis

Based on analysis of Auctor's `theme.json`, the theme has a sophisticated design system ideal for creating a publisher-focused style variation for Moiraine.

### Auctor's Design Characteristics

#### Color Palette
- **Primary Brand**: `#5344F4` (sophisticated purple-blue)
- **Brand Accent**: `#DDDAFB` (soft lavender)
- **Brand Alt**: `#DEC9FF` (light purple)
- **Primary Alt Accent**: `#575094` (deep purple)
- **Text Contrast**: `#1E1E26` (rich dark text)
- **Contrast Accent**: `#d4d4ec` (refined light gray)
- **Base**: `#fff` (clean white)
- **Base Accent**: `#5F5F82` (muted purple-gray)
- **Tint**: `#f8f7fc` (very light purple tint)
- **Publishing Colors**:
  - Dark Teal: `#1A3A47` (editorial depth)
  - Ocean Blue: `#0295DA` (digital accent)

#### Typography System
- **Primary Font**: Open Sans (clean, readable sans-serif with full weight range 300-800)
- **Editorial Font**: Bodoni Moda (elegant serif, ideal for publishing - weights 400-900)
- **Modern Font**: Mona Sans (variable font with multiple widths: condensed, narrow, expanded)
- **Supporting**: Bitter, Lato (additional serif/sans options)

#### Publishing-Specific Features
- Sophisticated shadow system (light/dark variations with multiple sizes)
- Editorial-focused color combinations
- Professional typography hierarchy
- Clean, readable design system suitable for content-heavy sites

### Proposed Publisher Style Variation

#### Color Scheme
**Analysis:** Auctor's colors (`#5344F4` purple-blue, `#0295DA` ocean blue) are actually very similar to existing Moiraine color schemes:
- `#5344F4` ≈ Blue scheme `#465aff`
- `#0295DA` = Corporate Blue scheme (exact match)

**Real Publisher Color Research:**
Major news organizations use these color approaches:
- **New York Times**: Black `#000000`, White `#FFFFFF`, Saffron `#F6CB2F` (authority + energy)
- **The Guardian**: Deep Sapphire `#052962`, Yellow `#FFE500`, White (trust + clarity)
- **BBC News**: Golden tones, yellows, black, white (reliability + accessibility)

**Publisher Color Psychology:**
- **Authority & Trust**: Deep blues, blacks, navy
- **Clarity & Energy**: Strategic use of yellow, saffron, gold
- **Readability**: High contrast black/white foundations
- **Professional**: Muted, sophisticated base colors with selective bright accents

**Proposed Publisher Color Scheme:**
Create `styles/colors/publisher.json` with news industry-appropriate palette:
- Primary: `#1a1a1a` (authoritative dark gray, softer than pure black)
- Alt: `#FFD700` (editorial gold/yellow for highlights and emphasis)
- Alt Accent: `#2c3e50` (professional navy blue)
- Text: `#212529` (readable dark text)
- Supporting colors based on journalistic credibility and readability

#### Typography System
Create `styles/typography/typography-preset-publisher.json` focusing on:
- **Headings**: Bodoni Moda for editorial elegance
- **Body**: Open Sans for optimal readability
- **Accents**: Mona Sans for modern digital elements
- Refined font sizes optimized for content consumption
- Proper line heights for extended reading

#### Complete Style Variation
Create `styles/publisher.json` combining:
- Auctor's sophisticated color system
- Editorial typography hierarchy
- Publishing-appropriate element styling
- Professional button and interaction styles

### Implementation Plan

1. **Color Variation** (`styles/colors/publisher.json`)
   - Port Auctor's complete color palette
   - Focus on editorial and digital publishing colors

2. **Typography Variation** (`styles/typography/typography-preset-publisher.json`)
   - Implement Bodoni Moda + Open Sans combination
   - Optimize for content readability and hierarchy

3. **Complete Style** (`styles/publisher.json`)
   - Combine color and typography systems
   - Add publisher-specific element styling
   - Professional button treatments and interactions

### Benefits for Publishers
- **Editorial Elegance**: Bodoni Moda brings traditional publishing sophistication
- **Digital Readability**: Open Sans ensures excellent screen reading experience
- **Professional Palette**: Refined colors convey authority and trustworthiness
- **Content Focus**: Typography hierarchy optimized for articles and long-form content
- **Brand Flexibility**: Color system supports both traditional and digital publishing brands

### Thaiconomics Site Assessment

**Current Thaiconomics Design Analysis:**
- **Font**: Bootstrap default (Helvetica Neue, Helvetica, Arial)
- **Colors**: White background `#fff`, dark gray text `#333`, Bootstrap blue links `#337ab7`
- **Content**: Professional Thai economics articles, clean layout
- **Audience**: Economic professionals and analysts

**Publisher Color Scheme Compatibility:**
✅ **Excellent Fit** - The proposed publisher scheme would significantly enhance Thaiconomics:

**Color Benefits:**
- **Authority**: Dark gray `#1a1a1a` instead of `#333` → more professional, credible
- **Gold accent**: `#FFD700` perfect for Thai cultural context (gold significance)
- **Navy blue**: `#2c3e50` more sophisticated than Bootstrap blue `#337ab7`
- **Readability**: High contrast maintains excellent text legibility for economic analysis

**Typography Benefits:**
- **Bodoni Moda**: Adds editorial sophistication perfect for economic journalism
- **Open Sans**: Superior to Helvetica for extended reading of economic content
- **Professional hierarchy**: Better suited for academic/financial content structure

**Cultural Appropriateness:**
- Gold accent aligns with Thai cultural values (prosperity, value, respect)
- Professional color palette suitable for serious economic discourse
- International appeal while maintaining Thai cultural sensitivity

**Recommendation:** The publisher style variation would be ideal for Thaiconomics, providing enhanced credibility, better readability for long-form economic content, and culturally appropriate design elements.

---

## Implementation Progress Update

### Local Development Status
**Demo Site:** http://demo.imagewize.test/auctor/

### Completed Implementation Tasks
✅ **Header**: Updated and configured
✅ **Blog Post Columns**: 3-column grid layout implemented
✅ **Footer**: Adjusted with improved layout
✅ **Blog Post Card**: Single post card pattern created

### Current Pattern Implementation

#### 1. Blog Post Columns (3-column grid)
```php
<!-- wp:group {"metadata":{"name":"Blog Post Columns","categories":["moiraine/posts"],"patternName":"moiraine/blog-post-columns"},"align":"full",...} -->
```
- **Layout**: 3-column grid using `wp:query` with post template
- **Features**: Featured images, post dates, titles, card-style background
- **Status**: ✅ Implemented and working

#### 2. Blog Post Card (single featured post)
```php
<!-- wp:group {"metadata":{"name":"Blog Post Card","categories":["moiraine/card","moiraine/posts"],"patternName":"moiraine/blog-post-card"},...} -->
```
- **Current Layout**: Vertical stack (image, meta, title, excerpt)
- **Status**: ✅ Implemented but needs layout adjustment

### Missing Pattern Requirement

#### 2-Column Featured Post Layout
**Current Issue**: The blog post card uses a vertical layout (image above content) but the desired layout is horizontal 2-column (image left, content right).

**Required Pattern**: `post-single-featured.php` from thaiconomics
**Location**: `/Users/jasperfrumau/code/thaiconomics/patterns/post-single-featured.php`

**Layout Structure:**
- **Left Column (40%)**: Featured image + post title
- **Right Column (60%)**: Post excerpt
- **Background**: Tertiary color with padding
- **Query**: Single post with featured tag filter

**Recommendation**: Add this pattern to Moiraine patterns directory as it provides the exact 2-column layout needed and doesn't currently exist in Moiraine's pattern collection.

### Pattern Analysis - Moiraine vs Required

**Existing Moiraine Post Patterns:**
- `card-blog-post.php` - Vertical card layout (image above content)
- `post-loop-grid-*.php` - Grid layouts for multiple posts
- `blog-post-columns*.php` - Column-based multi-post layouts

**Missing Pattern:**
- **2-column featured post** (image left, content right) - Available in thaiconomics

### Next Steps
1. **Add 2-column featured post pattern** to Moiraine from thaiconomics
2. **Test with Playwright** to verify all layouts work correctly
3. **Apply publisher style variation** when ready
4. **Final layout adjustments** based on testing results

---

## Thaiconomics Layout Recreation Plan

Based on analysis of the live Thaiconomics site (https://thaiconomics.smtv.test), here's a detailed plan to recreate the layout using Moiraine's publisher style variation and existing patterns.

### Current Thaiconomics Layout Analysis

**Header Section:**
- Simple hamburger menu icon (left)
- Centered "Thaiconomics" site title with underline accent
- Social media icons (Facebook, Twitter, Instagram) aligned right
- Clean white background with minimalist design

**Main Content Layout:**
- **Top Row**: 3-column grid with equal-sized cards
  - Each card: Featured image, title below
  - Titles: "Beaches to remain quiet", "Female Entrepreneurs are going strong", "Thai markets are slowly opening up"
- **Featured Article**: 2-column layout below the grid
  - Left column: Large featured image (building/architecture)
  - Right column: Long-form article content with headline "Covid-19 Surge in Thailand is causing another massive lay-off of personal and is keeping the country in fear of worse to come"
  - Article title: "Bangkok Real Estate Market Slowing Down"

**Footer:**
- Simple footer with "About Work Contact" links
- Clean, minimalist approach

### Implementation Plan Using Existing Moiraine Patterns

#### 1. Header Implementation
**Use existing pattern:** Check `patterns/` for header patterns with hamburger menu
- **Pattern needed**: Header with hamburger menu + centered title + social icons
- **If available**: Use existing header pattern, customize with publisher colors
- **If not available**: May need simple header pattern from existing menu patterns in `patterns/menu-*`

#### 2. Main Content Grid (Top Section)
**Use existing pattern:** `patterns/posts-*` or `patterns/card-*`
- **Recommended**: Look for 3-column blog/post grid pattern
- **Alternative**: Use `patterns/card-grid-3-col.php` or similar card pattern
- **Customization needed**: Remove excerpts, keep only image + title format

#### 3. Featured Article Section
**Use existing pattern:** Check `patterns/posts-featured-*` or `patterns/hero-*`
- **Layout needed**: 2-column with image left, content right
- **From Auctor analysis**: `post-single-featured.php` would be perfect for this
- **Action**: Port Auctor's `post-single-featured.php` pattern if not available in Moiraine

#### 4. Footer Implementation
**Use existing pattern:** `patterns/footer-*`
- **Needed**: Simple footer with minimal links
- **Customization**: Apply publisher color scheme

### Required Pattern Assessment

#### Patterns Likely Available in Moiraine:
1. ✅ **Header with hamburger menu** - Check `patterns/menu-*` patterns
2. ✅ **3-column card/post grid** - Check `patterns/posts-grid-*` or `patterns/card-*`
3. ✅ **Simple footer** - Check `patterns/footer-*`

#### Patterns Potentially Missing:
1. ❓ **Featured article 2-column layout** - May need to port from Auctor or create

### Implementation Steps

#### Step 1: Inventory Check
```bash
ls patterns/menu-* patterns/posts-* patterns/card-* patterns/footer-*
```

#### Step 2: Pattern Selection
- **Header**: Use best hamburger menu pattern from `patterns/menu-*`
- **Grid**: Use 3-column post/card grid from `patterns/posts-*` or `patterns/card-*`
- **Featured**: Check for 2-column featured post pattern, port from Auctor if needed
- **Footer**: Use minimal footer from `patterns/footer-*`

#### Step 3: Style Application
- Apply `styles/publisher.json` style variation
- Customize colors to match Thaiconomics minimal aesthetic
- Ensure typography uses Bodoni Moda + Open Sans combination

#### Step 4: Child Theme Decision
**Assessment**: Based on pattern availability:
- **If all patterns exist**: No child theme needed, use pure Moiraine + publisher style
- **If 1-2 patterns missing**: Consider child theme using https://github.com/imagewize/moiraine-child
- **Recommendation**: Try pure Moiraine approach first, fall back to child theme only if necessary

### Content Strategy

#### Homepage Template
Create homepage using:
1. **Header pattern** with hamburger menu
2. **3-column post grid** for recent articles
3. **Featured article section** for main story
4. **Simple footer** with minimal links

#### Publisher Style Benefits for Thaiconomics
- **Professional credibility** via Bodoni Moda headlines
- **Reading comfort** via Open Sans body text
- **Cultural alignment** with gold accent colors
- **Clean aesthetic** matching current minimalist approach
- **Editorial sophistication** appropriate for economic journalism

### Next Steps
1. **Pattern inventory** - Identify available patterns in current Moiraine
2. **Gap analysis** - Determine what needs to be ported from Auctor or created
3. **Child theme decision** - Only if significant customization needed
4. **Implementation** - Build using existing patterns + publisher style variation