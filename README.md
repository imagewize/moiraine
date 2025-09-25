# Moiraine — A WordPress Block Theme

Moiraine is a modern WordPress block theme designed for the WordPress block editor and site editor. Create beautiful, fully-customizable websites with WordPress's built-in tools — no coding required.

Features **89+ professional patterns**, WooCommerce integration, modern development tooling, and blazing-fast performance with 100% scores across the board.

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
| [Download Moiraine Theme Zip](https://github.com/OllieWP/ollie/releases/latest/download/ollie.zip)  | Download the latest Moiraine theme zip to install on your WordPress site.  |
| [Download Moiraine Child Theme Zip](https://github.com/imagewize/moiraine-child)  | Download the Moiraine child theme zip for customizations  |

Moiraine is built for modern WordPress features and requires WordPress 6.0 or later. To get started, download the theme and install it into your WordPress website by going to `Appearance → Themes → Add New`.

## Key Features

### 🎨 **88+ Professional Patterns**
- **Hero Sections**: Eye-catching headers and banners
- **Feature Presentations**: Showcase your products and services
- **Call-to-Action Sections**: Drive conversions with beautiful CTAs
- **Card Layouts**: Flexible content presentation
- **Pricing Tables**: Professional pricing displays
- **Testimonials**: Build trust with customer feedback
- **Blog Post Layouts**: Beautiful post and archive designs including horizontal two-column featured posts
- **Menu Patterns**: 14 specialized navigation designs (cards, mobile, panels)
- **Template Patterns**: 14 complete page layout templates

### 🧩 **Block Extensions System** (NEW in 2.3.0)
- **Post Excerpt Linking**: Extend core post-excerpt blocks with customizable link functionality
- **Link Controls**: Toggle excerpt-to-post linking with underline options via inspector controls
- **Developer-Friendly**: Extensible architecture for adding functionality to core WordPress blocks
- **Standards Compliant**: Uses WordPress hooks and filters for seamless integration

### 🧩 **Menu Designer Block** (NEW in 2.1.0)
- Advanced mega menu functionality with template part integration
- WordPress Interactivity API with modern state management
- Drag-and-drop navigation creation
- Responsive design with mobile-first approach
- Full keyboard navigation and accessibility support

### 🛒 **WooCommerce Integration**
- Automatic stylesheet loading when WooCommerce is active
- Pre-built cart and checkout page templates
- E-commerce optimized patterns and styles

### 🎯 **Typography & Design**
- 7 Google Fonts with responsive scaling
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

# Block development (Menu Designer)
cd inc/blocks/menu-designer
npm start                     # Development with file watching
npm run build                 # Production build
```

See `CLAUDE.md` for detailed development documentation.

## Credits

### Theme Foundation
Moiraine is based on the [Ollie theme](https://github.com/OllieWP/ollie) by [Mike McAlister](https://mikemcalister.com). We express our gratitude to Mike for creating such an excellent foundation for WordPress block themes.

### Additional Credits
- **Menu Designer Block**: Built upon the foundational work of [Human Made's Mega Menu Block](https://github.com/humanmade/hm-mega-menu-block)
- Favicon: [Ladybug icon](https://blade-ui-kit.com/blade-icons/mdi-ladybug) from Blade UI Kit

## License

Moiraine is licensed under the [GPL-3.0 license](https://www.gnu.org/licenses/gpl-3.0.html).
