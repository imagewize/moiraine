<div align="center">
  <img src="moiraine-logo.svg" alt="Moiraine Logo" width="128" height="128">
<h1>Moiraine</h1>
<h2>Professional WordPress Sites in Minutes, Not Days</h2>
</div>


Moiraine is a WordPress block theme built on the foundation of [Ollie](https://github.com/OllieWP/ollie), designed for the WordPress block editor and site editor. While Moiraine uses Ollie's core architecture (~65-70% of base code including pattern layouts, templates, and block styles), it extends the foundation with significant customizations: 16 original patterns, custom block extensions, WooCommerce integration, enhanced navigation, 22 block-specific stylesheets, and production-grade development tooling. Create beautiful, fully-customizable websites with WordPress's built-in tools — no coding required.

Features **49 professional patterns** (Moiraine-first heroes, CTAs, testimonials, statistics, blog layouts, essential headers/footers, and comprehensive template layouts), WooCommerce integration, modern development tooling, and blazing-fast performance with 100% scores across the board.

## Table of Contents

- [Getting Started](#getting-started)
- [Key Features](#key-features)
- [Working with Block Themes](#working-with-block-themes)
- [Developer Notes](#developer-notes)
- [Credits](#credits)
- [License](#license)

## Getting Started

| Links  | Description |
| ------------- | ------------- |
| [Download Moiraine Theme](https://github.com/imagewize/moiraine)  | Download the Moiraine theme to install on your WordPress site.  |

Moiraine is built for modern WordPress features and requires WordPress 6.0 or later. To get started, download the theme and install it into your WordPress website by going to `Appearance → Themes → Add New`.

## Key Features

### 🎨 **49 Professional Patterns**
Moiraine includes 49 focused patterns across headers/footers, hero, CTA/contact, testimonial, statistics, content layouts, and templates:

- **Headers & Footers (3)**: `header-light-action-button`, `header-light-with-hamburger-menu`, `footer-light`
- **Hero (6)**: `hero-text-image-and-logos`, `hero-call-to-action-buttons-light`, `hero-dark`, `hero-light`, `hero-two-tone`, `hero-with-cta`
- **Features & Content (10)**: `feature-boxes-with-button`, `feature-grid`, `numbers`, `card-details`, `faq`, `pricing-table`, `services-feature-cards`, `blog-post-columns`, `blog-post-columns-portrait`, `post-featured-two-column`
- **Call-to-Actions & Contact (5)**: `text-call-to-action`, `text-call-to-action-buttons`, `cta-newsletter`, `contact-side-by-side`, `contact-info`
- **Statistics & Showcases (2)**: `stats-showcase`, `stats-list`
- **Testimonials & Teams (8)**: `client-reviews-orange`, `testimonial-card`, `testimonial-highlight`, `testimonials-and-logos`, `testimonials-with-big-text`, `single-testimonial`, `team-members`, `team-grid`
- **Menu (1)**: `menu-panel-1-mobile` (custom mobile-optimized menu)
- **Templates (15)**: `template-index-grid`, `template-index-list`, `template-page-404`, `template-page-archive`, `template-page-centered`, `template-page-full`, `template-page-left-sidebar`, `template-page-right-sidebar`, `template-page-search`, `template-page-wide`, `template-post-centered`, `template-post-left-sidebar`, `template-post-right-sidebar`, `template-post-wide`, `post-loop-grid-default`
- All patterns use Moiraine-specific copy and styling; portrait blog layouts leverage the new portrait image sizes
- Several of these patterns were originally authored for our standalone plugin Callandor and brought into Moiraine: https://github.com/imagewize/callandor

**Pattern origins:**
- **Moiraine originals (20):** `hero-two-tone`, `hero-with-cta`, `cta-newsletter`, `contact-info`, `feature-grid`, `team-grid`, `testimonial-card`, `client-reviews-orange`, `blog-post-columns-portrait`, `post-featured-two-column`, `contact-side-by-side`, `services-feature-cards`, `stats-showcase`, `stats-list`, `menu-panel-1-mobile`, plus custom messaging/variants across `hero-text-image-and-logos`, `hero-call-to-action-buttons-light`, `hero-dark`, `hero-light`, `feature-boxes-with-button`
- **From Ollie foundation (15, fully reworked copy/styles):** `blog-post-columns`, `card-details`, `faq`, `numbers`, `pricing-table`, `text-call-to-action`, `text-call-to-action-buttons`, `testimonials-with-big-text`, `testimonials-and-logos`, `testimonial-highlight`, `single-testimonial`, `team-members`
- **Restored Ollie patterns (14):** `header-light-action-button`, `header-light-with-hamburger-menu`, `footer-light` (essential for theme functionality), plus 11 template layout patterns for comprehensive page/post layout options

**Pattern Library Changes:**
- v3.0.1: Restored 11 template patterns (sidebar layouts, 404, archive, search templates)
- v3.0.1: Removed 4 Ollie menu patterns (kept 1 custom mobile menu)
- v3.0.0: Removed 82 Ollie patterns from the theme (kept 3 essential headers/footers)
- Original Ollie patterns available in the Ollie theme repository for reference
- See [CHANGELOG.md](CHANGELOG.md#301---2025-12-11) for complete details

### 🧩 **Block Extensions System** (NEW in 2.3.0)
- **Post Excerpt Linking**: Extend core post-excerpt blocks with customizable link functionality
- **Link Controls**: Toggle excerpt-to-post linking with underline options via inspector controls
- **Developer-Friendly**: Extensible architecture for adding functionality to core WordPress blocks
- **Standards Compliant**: Uses WordPress hooks and filters for seamless integration

### 🔌 **Moiraine Blocks Plugin**
Custom blocks like Carousel and Menu Designer are available in the companion [Moiraine Blocks plugin](https://github.com/imagewize/moiraine-blocks/).

### 🛒 **WooCommerce Integration**
- Automatic stylesheet loading when WooCommerce is active
- Pre-built cart and checkout page templates
- E-commerce optimized patterns and styles

### 🎯 **Typography & Design**
- Expanded typography set (Mona Sans, Bodoni Moda, new Bitter serif) with responsive scaling
- Multiple typography presets and style variations
- Global styles system via theme.json
- Full Site Editing compatibility

### 🚀 **Performance & Compatibility**
- 100% performance scores with minimal footprint
- Fully responsive design out of the box
- Safari compatibility with backdrop-filter fixes
- Clean pattern architecture prevents block validation errors

## Working with Block Themes

Moiraine is a WordPress block theme with templates entirely composed of blocks, allowing you to edit all areas of your site — headers, footers, templates, and more.

### Key Concepts

- **Site Editor**: Access via `Appearance → Editor` to customize templates, styles, typography, and more
- **Patterns**: Pre-designed page elements accessible via the block inserter for quick page creation
- **Global Styles**: Modify colors, fonts, and layout defaults site-wide through the theme.json system
- **Template Parts**: Reusable components like headers and footers that appear across pages
- **Export**: Save your customizations as a theme zip file via the Site Editor options menu

### Using Full-Page Patterns

For best results with full-page patterns, apply the "No Page Title" template and ensure your design includes an H1 for SEO.

## Developer Notes

Moiraine works out of the box with no build steps required. Development workflows are available for advanced users.

**Requirements:** WordPress 6.0+, PHP 7.3+

### Installation

```bash
# Via Composer
composer require imagewize/moiraine

# Development setup
npm install && composer install
```

### Development Commands

```bash
# Pattern development
npm run dev                    # Watch and auto-translate patterns
npm run translate:patterns     # Process patterns for i18n

# Code quality
composer run lint             # PHP linting
composer run wpcs:scan        # WordPress coding standards
composer run wpcs:fix         # Auto-fix WPCS violations
```

See `CLAUDE.md` for detailed development documentation.

## Credits

### Theme Foundation
Moiraine is built on the [Ollie theme](https://github.com/OllieWP/ollie) by [Mike McAlister](https://mikemcalister.com). Approximately 65-70% of Moiraine's core architecture comes from Ollie, including:
- Pattern layouts and template structures (34 of 50 patterns are customized Ollie patterns)
- Block style variations (13 style variations)
- Pattern categories and helper functions
- Base `functions.php` structure and theme setup

All shared code has been adapted with Moiraine's namespace, custom content, and styling. Moiraine extends this foundation with 16 original patterns, custom block extensions (230+ lines of PHP), 22 block-specific stylesheets, enhanced navigation and WooCommerce integration, and production-grade development tooling.

We express our gratitude to Mike for creating such an excellent foundation for WordPress block themes.

### Additional Credits
- Favicon: [Ladybug icon](https://blade-ui-kit.com/blade-icons/mdi-ladybug) from Blade UI Kit
- Custom blocks available in the [Moiraine Blocks plugin](https://github.com/imagewize/moiraine-blocks/)

## License

Moiraine is licensed under the [GPL-3.0 license](https://www.gnu.org/licenses/gpl-3.0.html).
