# Moiraine Demo Site Enhancement Plan

## Executive Summary

This document outlines a comprehensive plan to transform the Moiraine demo site from its current OllieWP-based implementation into a unique, professional showcase that highlights Moiraine's capabilities while establishing its own visual identity.

**Current Demo URL:** http://demo.imagewize.test

## Important: Demo Site Architecture

**Critical Note:** The demo site is a **separate WordPress installation** from the main Imagewize.com site:

- **Main Site**: `/srv/www/imagewize.com/current` - Main Imagewize.com website
- **Demo Site**: `/srv/www/demo.imagewize.com/current` - Moiraine block theme demo (subdomain)

**This means:**
- All WP-CLI commands must use `--workdir /srv/www/demo.imagewize.com/current`
- Posts and pages exist only on the demo site (not multisite network)
- Moiraine theme is active on demo.imagewize.test
- Documentation will be added to main site later

**Correct WP-CLI Usage:**
```bash
# Always use this workdir for demo site
cd trellis
trellis vm shell --workdir /srv/www/demo.imagewize.com/current
wp [command] --path=web/wp
```

## Table of Contents

- [Current Issues](#current-issues)
- [Enhancement Goals](#enhancement-goals)
- [Detailed Action Items](#detailed-action-items)
- [Image Replacement Strategy](#image-replacement-strategy)
- [Content Strategy](#content-strategy)
- [Template Showcase Pages](#template-showcase-pages)
- [Duotone Customization](#duotone-customization)
- [Implementation Roadmap](#implementation-roadmap)

---

## Current Issues

### 1. Empty Blog Posts
**Issue:** Blog posts contain only default "Hello world!" content with no catching titles, featured images, or meaningful content.

**Current State:**
- Two identical posts titled "Hello world!"
- Minimal placeholder text: "Welcome to WordPress. This is your first post. Edit or delete it, then start writing!"
- No featured images
- Category: Uncategorized
- Published: March 27, 2025 and March 18, 2025

**Impact:**
- Fails to demonstrate Moiraine's blog styling capabilities
- Creates poor first impression for visitors
- Doesn't showcase post layouts, typography, or image handling

### 2. OllieWP Visual Identity
**Issue:** Demo site looks too similar to https://demo.olliewp.com, lacking Moiraine's unique identity.

**Similarities Identified:**
- Identical stock images from OllieWP patterns library
- Same avatar images for team members
- Same logo placeholder images
- Similar color treatments and duotone effects
- Nearly identical homepage layout

**Current Shared Images:**
```
patterns/images/
├── avatar-1.webp
├── avatar-2.webp
├── avatar-3.webp
├── avatar-4.webp
├── avatar-5.webp
├── avatar-7.webp
├── computer-hands.webp
├── desktop.webp
├── guy-laptop.webp
├── logo-1.webp
├── logo-2.webp
├── logo-3.webp
├── logo-4.webp
└── logo-6.webp
```

**Impact:**
- Moiraine appears as OllieWP clone rather than unique theme
- Reduces perceived value proposition
- Confuses potential users about differences between themes

### 3. Missing Duotone Customization
**Issue:** Need to verify Moiraine has unique duotone color schemes.

**Current Status:**
- Moiraine uses semantic duotone system (Primary, Secondary, Accent, Neutral, High Contrast)
- All style variations now have custom duotones (completed as per DUOTONE.md)
- Colors are different from OllieWP's color-specific duotones

**Verification Needed:**
- Test visual appearance across all style variations
- Ensure duotone effects create distinct Moiraine aesthetic
- Confirm no visual overlap with OllieWP demo

### 4. Missing Template Showcase Pages
**Issue:** Moiraine has template patterns but no dedicated showcase pages like OllieWP.

**OllieWP Has (That We Don't):**
- Download page (`/download/`) - Product/theme download page
- Features page (`/features/`) - Feature highlight showcase
- Link page (`/link-page/`) - Social media links page (Profile pattern)
- Style Guide page (`/style-guide/`) - Typography and design system showcase
- Patterns page (`/patterns/`) - Pattern library showcase

**Moiraine Currently Has:**
- Homepage (`/`)
- About page (`/about/`)
- Blog archive (`/blog/`)
- Contact page (appears in footer nav)
- Individual blog posts

**Impact:**
- Fewer demonstration pages for potential users
- Doesn't showcase Moiraine's full pattern library
- Missing opportunity to highlight theme capabilities
- Less content for SEO and discovery

---

## Enhancement Goals

### Primary Objectives

1. **Establish Unique Visual Identity**
   - Replace all OllieWP stock images with Moiraine-branded alternatives
   - Create cohesive visual language distinct from OllieWP
   - Leverage Moiraine logo (SVG in README.md) throughout site

2. **Showcase Theme Capabilities**
   - Add compelling blog content that demonstrates post layouts
   - Create template showcase pages
   - Highlight Moiraine's 89+ patterns effectively

3. **Professional Polish**
   - High-quality imagery throughout
   - Catching, relevant content
   - SEO-optimized pages
   - Consistent branding

4. **Differentiation from OllieWP**
   - Unique color treatments
   - Custom imagery
   - Moiraine-specific messaging
   - Distinct use cases and examples

---

## Detailed Action Items

### Phase 1: Content Foundation (Priority: HIGH)

#### 1.1 Blog Post Enhancement

**Create 2 Feature-Rich Blog Posts:**

**Post 1: "Building Modern WordPress Sites with Block Themes"**
- **Title:** Building Modern WordPress Sites with Block Themes
- **Excerpt:** Discover how block themes like Moiraine are revolutionizing WordPress site building with no-code solutions, full site editing, and professional patterns.
- **Featured Image:** Modern workspace with laptop showing WordPress editor (Unsplash)
- **Content Structure:**
  - Introduction to block themes and Full Site Editing
  - Benefits of pattern-based design
  - How Moiraine simplifies professional design
  - Real-world examples
  - Call-to-action to explore patterns
- **Word Count:** 800-1000 words
- **Images:** 3-4 high-quality images from Unsplash
- **Categories:** WordPress, Block Themes, Web Design
- **Tags:** Full Site Editing, WordPress 6.0, Block Patterns, Moiraine

**Post 2: "89+ Professional Patterns: Your Fast Track to Beautiful Websites"**
- **Title:** 89+ Professional Patterns: Your Fast Track to Beautiful Websites
- **Excerpt:** Explore Moiraine's extensive pattern library featuring hero sections, CTAs, testimonials, pricing tables, and complete page templates—all customizable with clicks, not code.
- **Featured Image:** Grid/collage showcasing various pattern designs (Unsplash)
- **Content Structure:**
  - Overview of Moiraine's pattern categories
  - Spotlight on hero patterns
  - Showcase card patterns
  - Template patterns walkthrough
  - Menu Designer block feature
  - Tips for combining patterns
- **Word Count:** 1000-1200 words
- **Images:** 4-5 pattern screenshots and Unsplash images
- **Categories:** Patterns, Design, Templates
- **Tags:** Block Patterns, Design System, Moiraine Patterns, WordPress Templates

**Image Sources:**
- Use Unsplash for professional, royalty-free images
- Focus on: modern workspaces, web design, creativity, technology
- Ensure images work well with Moiraine's duotone filters
- Optimize as WebP format for performance

**Implementation:**
```bash
# Access WordPress via Trellis VM for DEMO site
cd trellis
trellis vm shell --workdir /srv/www/demo.imagewize.com/current

# Update posts using WP-CLI (demo site has posts with IDs 1 and 14)
wp post update 1 --post_title="Building Modern WordPress Sites with Block Themes" \
  --post_content="[content]" --path=web/wp

wp post update 14 --post_title="89+ Professional Patterns: Your Fast Track to Beautiful Websites" \
  --post_content="[content]" --path=web/wp
```

---

### Phase 2: Visual Identity (Priority: HIGH)

#### 2.1 Image Replacement Strategy

**Images to Replace (14 files):**

| Current File | Replacement Strategy | Usage in Patterns |
|-------------|---------------------|-------------------|
| `avatar-1.webp` | Replace with diverse team member image | Team sections, testimonials |
| `avatar-2.webp` | Replace with diverse team member image | Team sections, testimonials |
| `avatar-3.webp` | Replace with diverse team member image | Team sections, testimonials |
| `avatar-4.webp` | Replace with diverse team member image | Team sections, testimonials |
| `avatar-5.webp` | Replace with diverse team member image | Team sections, testimonials |
| `avatar-7.webp` | Replace with diverse team member image | Team sections, testimonials |
| `computer-hands.webp` | Modern workspace/laptop image | Card patterns, hero sections |
| `desktop.webp` | Clean desk setup with monitors | Hero sections, features |
| `guy-laptop.webp` | Person working on laptop | About sections, features |
| `logo-1.webp` | Client logo or abstract brand mark | Logo grids, testimonials |
| `logo-2.webp` | Client logo or abstract brand mark | Logo grids, testimonials |
| `logo-3.webp` | Client logo or abstract brand mark | Logo grids, testimonials |
| `logo-4.webp` | Client logo or abstract brand mark | Logo grids, testimonials |
| `logo-6.webp` | Client logo or abstract brand mark | Logo grids, testimonials |

**Image Specifications:**
- **Format:** WebP (for performance)
- **Avatar Dimensions:** 400x400px (square, optimized for circular crops)
- **Desktop/Workspace Images:** 1920x1080px minimum
- **Logo Images:** 400x200px (2:1 ratio)
- **Quality:** High-quality, professional photography
- **Style:** Modern, clean, diverse, inclusive

**Image Sources:**
1. **Unsplash** (Free, commercial use)
   - Collections: workspace, technology, business, people
   - Keywords: "modern office", "web design", "creative workspace", "professional headshot"

2. **Generated Avatars** (AI-generated diverse faces)
   - Tools: This Person Does Not Exist, Generated Photos
   - Ensures diversity and modern aesthetic

3. **Custom Logo Designs**
   - Create abstract brand marks using Moiraine color palette
   - Or use placeholder services like UI Faces for realistic company logos

**Implementation:**
```bash
# Navigate to images directory
cd demo/web/app/themes/moiraine/patterns/images

# Backup existing images
mkdir -p backup-ollie-images
cp *.webp backup-ollie-images/

# Download and optimize new images
# Use tools like squoosh.app or cwebp for WebP conversion
```

#### 2.2 Moiraine Logo Integration

**Current Logo:** SVG logo in `moiraine-logo.svg` (used in README.md)

**Integration Points:**
1. Site logo in header patterns
2. Favicon (convert SVG to ICO)
3. Footer branding
4. About page
5. OG image for social sharing

**Tasks:**
- Export logo in multiple sizes (32x32, 64x64, 128x128, 512x512)
- Create favicon from logo
- Ensure logo works on light and dark backgrounds
- Add logo to relevant patterns and template parts

---

### Phase 3: Template Showcase Pages (Priority: MEDIUM)

#### 3.1 Create Missing Showcase Pages

**Page 1: Features Page**
- **URL:** `/features/`
- **Template:** No Page Title template
- **Pattern:** Use existing `page-features.php` pattern
- **Content Focus:**
  - 89+ Professional Patterns
  - Menu Designer Block
  - Block Extensions System
  - WooCommerce Integration
  - Performance (100% scores)
  - Typography & Design
- **Additional Patterns:**
  - Hero section
  - Feature boxes with icons
  - Statistics section (89+ patterns, 100% performance)
  - CTA section

**Page 2: Download Page**
- **URL:** `/download/`
- **Template:** No Page Title template
- **Pattern:** Use existing `page-download.php` pattern
- **Content Focus:**
  - Moiraine theme download
  - Installation instructions
  - Requirements (WordPress 6.0+, PHP 7.3+)
  - FAQ section
  - Testimonials
- **Additional Patterns:**
  - Hero CTA
  - FAQ pattern
  - Testimonials
  - Numbered features

**Page 3: Patterns Showcase**
- **URL:** `/patterns/`
- **Template:** Custom template
- **Content:**
  - Introduction to Moiraine's pattern library
  - Pattern categories showcase:
    - Hero Patterns (8+)
    - Card Patterns (15+)
    - Menu Patterns (14)
    - Template Patterns (14)
    - Feature Patterns (10+)
    - Testimonials (5+)
    - Blog Patterns (8+)
  - Visual grid of pattern previews
  - CTA to Site Editor

**Page 4: Style Guide**
- **URL:** `/style-guide/`
- **Template:** Full width template
- **Content:**
  - Typography showcase (7 Google Fonts)
  - Color palette display
  - Button styles
  - Form elements
  - Spacing system
  - Block examples
  - Duotone examples
  - Style variations preview

**Page 5: Link Page (Profile)**
- **URL:** `/profile/` or `/links/`
- **Template:** No Page Title template
- **Pattern:** Use existing `page-profile.php` pattern
- **Content:**
  - Moiraine theme profile
  - Social links (GitHub, Twitter, Website)
  - Download links
  - Documentation links
  - Community resources

**Implementation:**
```bash
# Create pages via WP-CLI on DEMO site
cd trellis
trellis vm shell --workdir /srv/www/demo.imagewize.com/current

# Create Features page
wp post create --post_type=page --post_title='Features' \
  --post_name='features' --post_status='publish' \
  --path=web/wp

# Create Download page
wp post create --post_type=page --post_title='Download' \
  --post_name='download' --post_status='publish' \
  --path=web/wp

# Repeat for Patterns, Style Guide, Profile pages
```

#### 3.2 Update Navigation Menu

**Add New Pages to Main Navigation:**
```
Home | About | Features | Patterns | Blog | Download
```

**Footer Navigation Updates:**
- Add "Style Guide" to Resources column
- Add "Download" to Product column
- Add "Patterns" to Features column

---

### Phase 4: Duotone Verification (Priority: LOW)

#### 4.1 Visual Testing

**Verify Across Style Variations:**
- Default (Purple: #5344F4, #e9e7ff)
- Publisher (Grayscale professional)
- Agency (Green: #495148, #e5f0e4)
- Consulting (Navy: #1E3A8A, #B1C2FF)
- Creator (Purple: #5A20FF, #E2D8FF)
- Startup (Blue: #454DFF, #DBDDFF)
- Studio (Pink: #FF50A9, #FFE7F3)

**Test Patterns:**
- Hero Light (`hero-light.php`)
- Hero Text Image and Logos (`hero-text-image-and-logos.php`)
- Image and Numbered Features
- Card Image and Text
- Text and Image Columns patterns

**Validation Checklist:**
- [ ] Duotones render correctly in editor
- [ ] Duotones render correctly on frontend
- [ ] Each style variation has unique duotone appearance
- [ ] No OllieWP color overlap
- [ ] Images remain legible with duotone applied
- [ ] Semantic duotone names work across all variations

#### 4.2 Documentation

**Update DUOTONE.md:**
- Mark testing checklist as complete
- Document any issues found
- Add screenshots of each style variation's duotone rendering
- Create visual comparison with OllieWP

---

## Image Replacement Strategy

### Recommended Image Collections

#### 1. Avatar/Team Member Images

**Diversity Requirements:**
- Gender diversity (40% female, 40% male, 20% non-binary/diverse)
- Ethnic diversity (varied backgrounds)
- Age diversity (20s-50s)
- Professional appearance

**Recommended Sources:**
- Unsplash: Search "professional headshot", "portrait", "team member"
- Generated Photos (AI-generated, diverse faces)
- UI Faces (placeholder service)

**Example Search Queries:**
```
- "professional woman headshot" site:unsplash.com
- "diverse team portrait" site:unsplash.com
- "business professional headshot" site:unsplash.com
```

#### 2. Workspace/Technology Images

**Image Types Needed:**
- Modern clean desk with laptop/monitors
- Hands typing on laptop
- Close-up of code/design work
- Team collaboration workspace
- Creative office environment

**Recommended Searches:**
```
- "modern workspace laptop" site:unsplash.com
- "web design workspace" site:unsplash.com
- "minimalist desk setup" site:unsplash.com
- "developer workspace" site:unsplash.com
```

#### 3. Logo/Brand Images

**Options:**

**Option A: Abstract Brand Marks**
- Create simple geometric logos using Moiraine color palette
- Tools: Figma, Canva, Adobe Illustrator
- Style: Modern, minimal, geometric

**Option B: Client Portfolio**
- If Imagewize has client logos, use with permission
- Showcase real projects using Moiraine

**Option C: Generic Tech Brands**
- Create fictional tech company logos
- Inspired by modern SaaS aesthetics

### Image Optimization Workflow

```bash
# 1. Download images from Unsplash
# 2. Resize to appropriate dimensions
# 3. Convert to WebP

# Example conversion using cwebp (install via Homebrew)
brew install webp

# Convert and optimize images
cwebp -q 85 avatar-1.jpg -o avatar-1.webp
cwebp -q 85 desktop.jpg -o desktop.webp

# Batch conversion
for img in *.jpg; do
  cwebp -q 85 "$img" -o "${img%.jpg}.webp"
done
```

---

## Content Strategy

### Blog Post Writing Guidelines

#### Voice and Tone
- **Friendly but Professional**: Approachable yet authoritative
- **Educational**: Focus on teaching and empowering
- **Enthusiastic**: Show genuine excitement about WordPress and Moiraine
- **Inclusive**: Use "you", "we", "our" language

#### SEO Optimization
- **Title:** 50-60 characters, include primary keyword
- **Meta Description:** 150-160 characters, compelling summary
- **Headings:** Use H2-H4 hierarchy, include keywords naturally
- **Images:** Alt text with descriptive keywords
- **Internal Links:** Link to other demo pages (Features, Patterns, Download)
- **External Links:** Link to WordPress.org, documentation

#### Content Structure Template

```markdown
# [Catching Title with Primary Keyword]

[Opening Hook - 1-2 sentences that grab attention]

[Introduction Paragraph - 2-3 sentences setting context]

## [First Main Topic]

[3-4 paragraphs with examples, benefits, use cases]

![Alt text](image-url.webp)

## [Second Main Topic]

[3-4 paragraphs continuing the narrative]

### [Subtopic if Needed]

[Details and examples]

## [Third Main Topic]

[Conclusion points, summary]

## Conclusion

[2-3 sentences wrapping up, CTA to explore Moiraine]

---

**Related:** [Link to Features Page] | [Link to Patterns Page] | [Link to Download Page]
```

### Page Content Guidelines

#### Features Page
- **Headline:** Focus on time-saving and ease of use
- **Subheadline:** Highlight "no coding required"
- **Feature List:**
  - Lead with most impressive stat (89+ patterns)
  - Group features by category (Design, Performance, Developer)
  - Use benefit-focused language ("Build faster" not "Has patterns")
- **Social Proof:** Mention WordPress.org ratings, user testimonials
- **CTA:** Clear download or try demo actions

#### Download Page
- **Clear Value Prop:** "Professional WordPress Sites in Minutes"
- **Installation Steps:** Numbered, easy to follow
- **Requirements:** Upfront and clear
- **FAQ:** Address common concerns
- **Testimonial:** Real or realistic user praise
- **Secondary CTA:** Link to documentation, patterns showcase

#### Patterns Page
- **Visual First:** Lead with pattern examples
- **Categories:** Organize by use case (Homepage, CTAs, Blog, etc.)
- **Search/Filter:** Allow users to find patterns easily
- **Try It:** Encourage users to explore in Site Editor
- **Inspiration:** Show example combinations

#### Style Guide Page
- **Typography Hierarchy:** Display all heading levels
- **Color Swatches:** Show full palette with hex codes
- **Components:** Button styles, form elements, cards
- **Spacing System:** Visual representation
- **Code Examples:** Show how to use theme.json values

---

## Template Showcase Pages

### Detailed Page Specifications

#### Features Page Structure

```
[Hero Section - Hero Call to Action Buttons Light]
├── Headline: "Everything You Need to Build Professional WordPress Sites"
├── Subheadline: "89+ patterns, blazing-fast performance, zero code required"
└── CTA Buttons: [Download Moiraine] [Explore Patterns]

[Statistics Section - Numbers Pattern]
├── 89+ Patterns
├── 100% Performance Score
├── 1000+ Hours Crafting
└── 200+ Ratings

[Feature Boxes - Feature Boxes with Icon Dark]
├── Professional Patterns
│   └── Hero sections, CTAs, cards, pricing, testimonials, blog layouts
├── Menu Designer Block
│   └── Advanced mega menus with WordPress Interactivity API
├── Block Extensions
│   └── Enhanced functionality for core WordPress blocks
└── WooCommerce Ready
    └── Pre-built cart and checkout templates

[Typography & Design Section - Text and Image Columns]
├── 7 Google Fonts
├── Multiple typography presets
├── Global styles system
└── Full Site Editing compatible

[Performance Section - Card Pricing Table]
├── 100% Core Web Vitals
├── Clean code architecture
└── Safari compatibility

[CTA Section - Text Call to Action Buttons]
├── "Ready to Build Something Amazing?"
└── [Download Now] [View Documentation]
```

#### Download Page Structure

```
[Hero CTA - Card Big Text Call to Action]
├── "Download Moiraine Free"
├── Latest version badge
└── [Download Theme ZIP]

[Installation Steps - Image and Numbered Features]
1. Download the theme ZIP file
2. Go to Appearance → Themes → Add New
3. Upload the ZIP file
4. Activate Moiraine
5. Start building in Appearance → Editor

[Requirements - Card Details]
├── WordPress 6.0 or later
├── PHP 7.3 or later
└── Modern browser

[FAQ Section - FAQ Pattern]
├── How do I install Moiraine?
├── Is Moiraine free?
├── Can I use Moiraine with page builders?
├── Does it work with WooCommerce?
└── How do I get support?

[Testimonials - Testimonials with Social Links]
├── User testimonial 1
├── User testimonial 2
└── User testimonial 3

[Final CTA - Text Call to Action]
└── "Join thousands of Moiraine users building beautiful WordPress sites"
```

#### Patterns Showcase Page Structure

```
[Hero Introduction]
├── "89+ Professional Patterns at Your Fingertips"
└── "Drag, drop, and customize beautiful designs — no coding required"

[Pattern Categories Grid]
├── Hero Patterns (8+)
│   ├── Hero Light
│   ├── Hero Dark
│   ├── Hero Call to Action Buttons
│   └── Hero Text Image and Logos
├── Card Patterns (15+)
│   ├── Card Blog Post
│   ├── Card Testimonial
│   ├── Card Pricing Table
│   └── Card Call to Action
├── Menu Patterns (14)
│   ├── Menu Card 1-4
│   ├── Menu Mobile 1-6
│   └── Menu Panel 1-4
├── Template Patterns (14)
│   ├── Page Home
│   ├── Page About
│   ├── Page Features
│   └── Post Templates
└── Feature Patterns (10+)
    ├── Feature Boxes
    ├── Numbered Features
    └── Service Cards

[How to Use Patterns]
├── Step 1: Open Site Editor
├── Step 2: Browse pattern library
├── Step 3: Insert pattern
└── Step 4: Customize content

[CTA - Explore in Site Editor]
└── [Open Site Editor] [Download Moiraine]
```

#### Style Guide Page Structure

```
[Introduction]
├── "Moiraine Design System"
└── "Typography, colors, components, and spacing"

[Typography]
├── Heading 1 - 4rem
├── Heading 2 - 3rem
├── Heading 3 - 2rem
├── Heading 4 - 1.5rem
├── Paragraph - 1rem
└── Small - 0.875rem

[Font Families]
├── Mona Sans (Headings)
├── Bricolage Grotesque
├── Crimson Pro
└── Work Sans

[Color Palette]
├── Primary: #5344F4
├── Primary Accent: #e9e7ff
├── Secondary: #1E1E26
├── Accent: #F22AAA
└── Neutral variations

[Duotone Filters]
├── Primary Duotone
├── Secondary Duotone
├── Accent Duotone
└── High Contrast

[Buttons]
├── Primary Button
├── Secondary Button
├── Outline Button
└── Text Button

[Form Elements]
├── Input Fields
├── Textareas
├── Select Dropdowns
└── Checkboxes/Radios

[Spacing Scale]
├── Small: 1rem
├── Medium: 2rem
├── Large: 3rem
├── XL: 4rem
└── XXL: 6rem

[Components]
├── Cards
├── Testimonials
├── Pricing Tables
└── Team Members
```

---

## Implementation Roadmap

### Phase 1: Foundation (Week 1)
**Priority:** HIGH
**Effort:** Medium

- [ ] Audit all existing demo content
- [ ] Identify pattern image dependencies
- [ ] Source replacement images from Unsplash
- [ ] Generate/find avatar images
- [ ] Create logo replacement designs
- [ ] Set up image optimization workflow

### Phase 2: Content Creation (Week 1-2)
**Priority:** HIGH
**Effort:** High

- [ ] Write Blog Post 1: "Building Modern WordPress Sites with Block Themes"
- [ ] Write Blog Post 2: "89+ Professional Patterns"
- [ ] Source and optimize blog post images
- [ ] Create featured images for posts
- [ ] Update post metadata (categories, tags, excerpts)
- [ ] Add internal links between content

### Phase 3: Image Replacement (Week 2)
**Priority:** HIGH
**Effort:** Medium

- [ ] Replace all 14 pattern images
- [ ] Convert images to WebP format
- [ ] Optimize image file sizes
- [ ] Test patterns with new images
- [ ] Verify duotone filters work well with new images
- [ ] Update any pattern files with image references

### Phase 4: Template Pages (Week 2-3)
**Priority:** MEDIUM
**Effort:** High

- [ ] Create Features page
- [ ] Create Download page
- [ ] Create Patterns showcase page
- [ ] Create Style Guide page
- [ ] Create Profile/Links page
- [ ] Update navigation menus
- [ ] Add internal linking between pages
- [ ] Test all page templates

### Phase 5: Duotone Testing (Week 3)
**Priority:** LOW
**Effort:** Low

- [ ] Test duotones in all style variations
- [ ] Screenshot duotone examples
- [ ] Compare with OllieWP demo
- [ ] Document any issues
- [ ] Update DUOTONE.md with findings

### Phase 6: Polish & QA (Week 3-4)
**Priority:** MEDIUM
**Effort:** Medium

- [ ] SEO optimization (titles, meta descriptions)
- [ ] Image alt text audit
- [ ] Internal linking audit
- [ ] Mobile responsiveness testing
- [ ] Cross-browser testing
- [ ] Performance testing (Core Web Vitals)
- [ ] Accessibility audit
- [ ] Spell check and grammar review

### Phase 7: Launch (Week 4)
**Priority:** HIGH
**Effort:** Low

- [ ] Final review of all content
- [ ] Backup current demo site
- [ ] Deploy changes to demo site
- [ ] Test all pages post-deployment
- [ ] Update marketing materials
- [ ] Share demo site internally
- [ ] Monitor for any issues

---

## Success Metrics

### Qualitative Metrics
- [ ] Demo site visually distinct from OllieWP
- [ ] Moiraine brand identity clearly established
- [ ] All patterns showcased effectively
- [ ] Professional, polished appearance
- [ ] Cohesive visual language throughout

### Quantitative Metrics
- [ ] 5+ high-quality demo pages
- [ ] 2 feature-rich blog posts (800+ words each)
- [ ] 14 unique pattern images (WebP format)
- [ ] 100% Core Web Vitals scores maintained
- [ ] All style variations tested and documented
- [ ] Zero OllieWP image overlap

### User Experience Metrics
- [ ] Clear value proposition on homepage
- [ ] Easy navigation between showcase pages
- [ ] Pattern discovery is intuitive
- [ ] Download/installation instructions are clear
- [ ] Site demonstrates Moiraine capabilities effectively

---

## Additional Insights and Recommendations

### 1. Leverage Moiraine's Unique Features

**Menu Designer Block:**
- Create a showcase page specifically for the Menu Designer
- Demonstrate drag-and-drop mega menu creation
- Show mobile-first responsive behavior
- Highlight WordPress Interactivity API integration

**Block Extensions System:**
- Create examples showing Post Excerpt Linking
- Demonstrate how extensions enhance core blocks
- Show developer-friendly extensibility

### 2. Create Moiraine Brand Story

**About Page Enhancement:**
- Share the "why" behind forking from Ollie
- Highlight what makes Moiraine different
- Showcase Imagewize's expertise in WordPress
- Include team members and company values

### 3. Performance Showcasing

**Create Performance Page:**
- Live Core Web Vitals scores
- Comparison with average WordPress sites
- Performance optimization tips
- Technical details for developers

### 4. Community Building

**Add Community Resources:**
- GitHub repository link
- Issue reporting guidelines
- Feature request process
- Contribution guide for developers
- Changelog highlights

### 5. SEO Optimization

**Target Keywords:**
- "WordPress block theme"
- "Full Site Editing theme"
- "Professional WordPress patterns"
- "No-code WordPress theme"
- "Fast WordPress theme"

**Content Marketing:**
- Blog posts can rank for long-tail keywords
- Link back to main imagewize.com site
- Create external link opportunities
- Build topical authority in WordPress space

### 6. Conversion Optimization

**Clear CTAs:**
- Download theme (primary action)
- Explore patterns (secondary)
- Read documentation (tertiary)

**Trust Signals:**
- "Based on Ollie, WordPress's most popular block theme"
- "100+ 5-star reviews" (if applicable)
- "Used by 1000+ WordPress sites" (if applicable)
- Client testimonials

### 7. Visual Consistency

**Design System Application:**
- Use consistent color palette throughout
- Maintain typography hierarchy
- Apply spacing system rigorously
- Use duotone filters strategically (not on every image)

**Photography Style:**
- Modern, clean, bright
- Consistent color grading
- Professional quality
- Diverse and inclusive

### 8. Mobile-First Approach

**Mobile Optimization:**
- Test all pages on mobile devices
- Ensure touch targets are appropriate
- Optimize images for mobile bandwidth
- Test menu interactions on touch devices

### 9. Accessibility Considerations

**WCAG 2.1 AA Compliance:**
- Sufficient color contrast ratios
- Keyboard navigation support
- Screen reader compatibility
- Alt text for all images
- Semantic HTML structure

### 10. Future Enhancements

**Phase 2 Additions (Future):**
- Video tutorials embedded in demo
- Interactive pattern builder tool
- Style variation switcher
- Live customization preview
- Comparison table: Moiraine vs Other Themes

---

## Appendix

### A. Image Dimension Reference

| Image Type | Dimensions | Format | Max File Size |
|-----------|-----------|--------|---------------|
| Avatar | 400x400px | WebP | 50KB |
| Hero/Desktop | 1920x1080px | WebP | 150KB |
| Featured Post | 1200x630px | WebP | 100KB |
| Logo | 400x200px | WebP | 30KB |
| Blog Content | 1200x800px | WebP | 120KB |

### B. WordPress Commands Reference

**Important:** The demo site is a separate WordPress installation at `/srv/www/demo.imagewize.com/current`

```bash
# Access demo site via Trellis VM
cd trellis
trellis vm shell --workdir /srv/www/demo.imagewize.com/current

# List all pages
wp post list --post_type=page --format=table --path=web/wp

# List all posts
wp post list --post_type=post --format=table --path=web/wp

# Create new page
wp post create --post_type=page --post_title='Features' \
  --post_status='publish' --path=web/wp

# Update post
wp post update POST_ID --post_content='[content]' --path=web/wp

# Set featured image
wp post meta update POST_ID _thumbnail_id IMAGE_ID --path=web/wp

# List menus
wp menu list --path=web/wp

# Add item to menu
wp menu item add-post MENU_ID PAGE_ID --path=web/wp

# List themes
wp theme list --path=web/wp
```

### C. Unsplash Collections

**Curated Collections for Moiraine:**
- Modern Workspace: https://unsplash.com/collections/1163994/workspace
- Web Design: https://unsplash.com/collections/1766690/web-design
- Minimalist: https://unsplash.com/collections/3178108/minimalist
- Technology: https://unsplash.com/collections/1319040/technology
- Creative Office: https://unsplash.com/collections/2343465/creative-office

### D. Tools and Resources

**Image Tools:**
- Squoosh (image optimization): https://squoosh.app
- WebP Converter: `brew install webp`
- Unsplash Source (direct URLs): https://source.unsplash.com

**WordPress Tools:**
- WP-CLI Documentation: https://wp-cli.org
- Block Editor Handbook: https://developer.wordpress.org/block-editor
- Theme JSON Reference: https://developer.wordpress.org/block-editor/how-to-guides/themes/theme-json/

**Design Tools:**
- Figma (free tier): https://figma.com
- Canva (free tier): https://canva.com
- ColorZilla (browser extension): For extracting colors
- WhatFont (browser extension): For identifying fonts

---

## Conclusion

This comprehensive plan transforms the Moiraine demo site from an OllieWP clone into a unique, professional showcase. By replacing all images, creating compelling content, adding showcase pages, and verifying duotone customization, we establish Moiraine's distinct identity while demonstrating its powerful capabilities.

**Key Takeaways:**
1. Visual identity is crucial for theme differentiation
2. Quality content showcases capabilities better than empty demos
3. Template pages help users discover features
4. Consistent branding builds trust and recognition
5. Performance and accessibility should never be compromised

**Next Steps:**
1. Review and approve this plan
2. Begin Phase 1: Image sourcing
3. Start writing blog post content
4. Schedule implementation timeline
5. Assign tasks and responsibilities

---

**Document Version:** 1.0
**Last Updated:** November 2, 2025
**Author:** Claude Code Analysis
**Status:** Draft for Review
