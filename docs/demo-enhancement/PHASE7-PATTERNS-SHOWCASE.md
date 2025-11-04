# Phase 7: Patterns Showcase Page

**Created:** November 4, 2025
**Status:** Planning
**Priority:** High (addresses core value proposition gap)

---

## Objective

Create a comprehensive "Patterns" showcase page that demonstrates Moiraine's 89+ professional pattern library, similar to https://demo.olliewp.com/patterns/ but optimized for Moiraine's strengths.

## Why This Matters

**Current Gap:**
- Homepage mentions "89+ patterns" throughout but doesn't show them
- No central location to browse/preview patterns
- Visitors can't easily see the breadth of the pattern library
- Core differentiator (largest pattern library) not visually demonstrated

**Solution:**
A dedicated Patterns page that showcases pattern variety, organization, and real-world applications.

---

## Page Structure & Content Plan

### URL
- **Slug:** `/patterns/`
- **Title:** "89+ Professional Patterns"
- **Page ID:** TBD (will be created)

### Sections (10 total)

#### 1. Hero Section
**Pattern:** `hero-light` or `hero-call-to-action-buttons-light`

**Content:**
- **Tagline:** "The Largest Pattern Library for Block Themes"
- **Headline:** "89+ Professional Patterns Ready to Use"
- **Description:** "Every pattern is performance-optimized, fully responsive, easily customizable, and accessibility-compliant. Browse by category and find the perfect design for your website."
- **CTAs:**
  - Primary: "Download Moiraine Free"
  - Secondary: "View Documentation"

#### 2. Pattern Categories Overview
**Pattern:** `three-column-text` or custom grid

**Content:**
Three columns highlighting main categories:
- **Hero Sections** (10+ patterns) - "Make powerful first impressions with full-width heroes, CTAs, and background options"
- **Content Layouts** (25+ patterns) - "Text and image combinations, columns, feature boxes, and content grids"
- **Testimonials & Social Proof** (15+ patterns) - "Customer testimonials, logos, team members, and reviews"
- **Pricing & CTAs** (10+ patterns) - "Pricing tables, call-to-action sections, and conversion-focused designs"
- **Navigation & Footers** (8+ patterns) - "Headers, navigation menus, and footer layouts"
- **Blog & Portfolio** (12+ patterns) - "Blog post layouts, portfolio grids, and content displays"
- **FAQ & Forms** (9+ patterns) - "Frequently asked questions, contact forms, and support sections"

#### 3. Hero Patterns Showcase
**Pattern:** Custom section or `blog-post-columns`

**Content:**
- **Section Title:** "Hero Patterns"
- **Description:** "10+ hero section patterns for powerful first impressions"
- **Pattern Examples:**
  - Show 3-4 hero pattern thumbnails/previews
  - Pattern names: "Hero Light", "Hero Dark", "Hero with CTAs", "Hero Text & Image with Logos"
  - Brief descriptions of each

#### 4. Content Layout Patterns
**Pattern:** Custom section or `card-details`

**Content:**
- **Section Title:** "Content Layout Patterns"
- **Description:** "25+ versatile patterns for any content need"
- **Pattern Examples:**
  - Text & Image (Left/Right variations)
  - Three Column Text
  - Feature Boxes
  - Numbers/Statistics
  - Two Column Content

#### 5. Testimonials & Social Proof Patterns
**Pattern:** `testimonials-with-big-text` (showing real testimonial patterns)

**Content:**
- **Section Title:** "Testimonials & Social Proof"
- **Description:** "15+ patterns to build trust and credibility"
- **Live Examples:**
  - Show actual testimonial patterns from Moiraine
  - Testimonials with logos
  - Single testimonial highlight
  - Team member cards
  - Testimonials with social links

#### 6. Pricing & CTA Patterns
**Pattern:** `pricing-table` (actual pricing pattern)

**Content:**
- **Section Title:** "Pricing & Call-to-Action Patterns"
- **Description:** "10+ conversion-focused patterns"
- **Live Example:**
  - Show actual pricing table pattern
  - Text CTA sections
  - Button variations

#### 7. Blog & Portfolio Patterns
**Pattern:** `blog-post-columns` (showing actual blog layouts)

**Content:**
- **Section Title:** "Blog & Portfolio Patterns"
- **Description:** "12+ patterns for content-rich websites"
- **Live Examples:**
  - Blog post columns
  - Card details (portfolio style)
  - Blog post grids

#### 8. Performance & Technical Features
**Pattern:** `numbers` or `numbers-stacked`

**Content:**
- **Section Title:** "Built for Performance"
- **Statistics:**
  - **89+ Patterns** - "The largest pattern library of any block theme"
  - **100/100 PageSpeed** - "Every pattern optimized for performance"
  - **100% Responsive** - "Mobile-first design across all patterns"
  - **Accessibility Compliant** - "WCAG 2.1 AA standards"

#### 9. How to Use Patterns
**Pattern:** `text-and-image-left` or `text-and-image-right`

**Content:**
- **Section Title:** "Easy to Use, Powerful to Customize"
- **Description:** Step-by-step guide:
  1. **Insert:** Add patterns directly in the WordPress Site Editor
  2. **Customize:** Change colors, typography, spacing with clicks
  3. **Extend:** Combine patterns to create unique page layouts
- **Image:** Screenshot of WordPress Site Editor pattern inserter
- **CTA Button:** "View Documentation"

#### 10. Final CTA Section
**Pattern:** `text-call-to-action-buttons`

**Content:**
- **Headline:** "Start Building with 89+ Professional Patterns"
- **Description:** "Download Moiraine free and get instant access to the largest pattern library for WordPress block themes."
- **CTA Button:** "Download Moiraine Free"

---

## Pattern Categories Audit

Based on Moiraine's actual pattern library in `demo/web/app/themes/moiraine/patterns/`:

### Hero Sections (10 patterns)
- hero-call-to-action-buttons-light.php
- hero-dark.php
- hero-fullwidth.php
- hero-light.php
- hero-simple-centered.php
- hero-split-screen.php
- hero-text-image-and-logos.php
- hero-with-buttons.php
- hero.php
- (plus variations)

### Content Layouts (25+ patterns)
- text-and-image-left.php
- text-and-image-right.php
- text-and-image-columns-with-testimonial.php
- three-column-text.php
- two-column-text.php
- feature-boxes.php
- feature-boxes-with-button.php
- card-details.php
- numbers.php
- numbers-stacked.php

### Testimonials & Social Proof (15+ patterns)
- testimonials-and-logos.php
- testimonials-with-big-text.php
- testimonials-with-social-links.php
- single-testimonial.php
- testimonial-highlight.php
- card-testimonial.php
- team-members.php
- logos.php

### Pricing & CTAs (10+ patterns)
- pricing-table.php
- pricing.php
- text-call-to-action.php
- text-call-to-action-buttons.php
- call-to-action.php

### Navigation & Footers (8+ patterns)
- footer-default.php
- footer-with-social-links.php
- footer-with-newsletter.php
- header-default.php
- header-with-search.php

### Blog & Portfolio (12+ patterns)
- blog-post-columns.php
- blog-post-grid.php
- blog-hero.php
- post-header.php
- post-meta.php
- portfolio-grid.php (if exists)

### FAQ & Forms (9+ patterns)
- faq.php
- contact-details.php
- contact-form.php
- job-openings.php

---

## Implementation Strategy

### Approach
Use Moiraine's own patterns to build the Patterns showcase page (meta/self-referential approach).

### Benefits
✅ **Demonstrates pattern flexibility** - Shows how patterns can be combined
✅ **Fast implementation** - No custom code needed
✅ **Self-validating** - Uses actual patterns from the theme
✅ **Easy to maintain** - Pattern-based approach

### Method
1. Create page via WP-CLI
2. Insert patterns using WordPress blocks
3. Customize content to describe patterns
4. Add pattern examples where possible
5. Include screenshots/thumbnails of key patterns

---

## Navigation Updates

### Primary Navigation Menu
**Add new menu item:**
- Position: After "Services", before "Portfolio"
- Label: "Patterns"
- URL: `/patterns/`

**Updated menu order:**
1. Home
2. About
3. Services
4. **Patterns** ← NEW
5. Portfolio
6. FAQ
7. Blog
8. Contact

### Footer Navigation Menu
**Add new menu item:**
- Position: After "Services", before "Portfolio"
- Label: "Patterns"
- URL: `/patterns/`

**Updated footer menu order:**
1. About
2. Services
3. **Patterns** ← NEW
4. Portfolio
5. Blog
6. Contact
7. Privacy Policy

---

## Technical Implementation

### Page Creation
```bash
# Create page via WP-CLI
cd /srv/www/demo.imagewize.com/current
wp post create \
  --post_type=page \
  --post_title='89+ Professional Patterns' \
  --post_name='patterns' \
  --post_status=publish \
  --path=web/wp
```

### Pattern Insertion
Use WordPress block editor to insert patterns manually, OR use WP-CLI to insert pattern content:

```bash
# Get pattern content and insert into page
wp post meta update <PAGE_ID> _wp_page_template '' --path=web/wp
# Then manually add patterns via Site Editor
```

### Navigation Update
```bash
# Get current navigation ID (should be 3)
wp post list --post_type=wp_navigation --path=web/wp

# Update navigation with new menu item
# (Manual via Site Editor or WP-CLI)
```

---

## Screenshots to Capture

After implementation, capture screenshots:

1. **Patterns Page - Desktop** (full page scroll)
2. **Patterns Page - Mobile** (full page scroll)
3. **Hero Section** (close-up desktop)
4. **Pattern Categories Grid** (desktop)
5. **Navigation with "Patterns"** (desktop + mobile)

**Location:** `.playwright/screenshots/`
**Naming:** `phase7-patterns-page-[viewport]-[timestamp].png`

---

## Success Metrics

### Must-Have
- ✅ Dedicated Patterns page created and published
- ✅ All 7+ pattern categories represented
- ✅ Live pattern examples visible on page
- ✅ Navigation updated (primary + footer)
- ✅ Mobile responsive
- ✅ Performance optimized (PageSpeed 90+)

### Nice-to-Have
- Screenshots/thumbnails of each pattern category
- "Click to preview" functionality (if feasible)
- Pattern usage statistics
- Search/filter by category (future enhancement)

---

## Inspiration & References

**OllieWP Patterns Page:**
- URL: https://demo.olliewp.com/patterns/
- Shows pattern categories with visual thumbnails
- Clean grid layout
- Category filtering

**Moiraine Advantages:**
- **89+ patterns** vs. OllieWP's library
- **Performance-first** messaging
- **Actual pattern usage** on demo site (self-referential)

---

## Timeline

**Estimated Time:** 2-3 hours

1. **Planning & Documentation** (30 min) ✅ DONE
2. **Page Creation** (30 min)
3. **Pattern Insertion & Content** (60 min)
4. **Navigation Updates** (15 min)
5. **Screenshots & Testing** (30 min)
6. **Documentation Update** (15 min)

---

## Next Steps

1. Review this planning document
2. Create Patterns page via WP-CLI
3. Insert patterns and customize content
4. Update navigation menus
5. Capture screenshots
6. Update PROGRESS.md with Phase 7 completion
7. Commit changes to `moiraine-demo-enhancements` branch

---

## Notes

- This phase was added based on review feedback (November 4, 2025)
- Addresses key gap: showcasing Moiraine's core differentiator (89+ patterns)
- Complements Phase 5 (Homepage Refinement) by providing detailed pattern exploration
- Similar to OllieWP's approach but optimized for Moiraine's strengths
- Will increase demo site value and pattern discoverability
