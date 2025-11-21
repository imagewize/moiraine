# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

Moiraine is a WordPress block theme based on the Ollie theme by Mike McAlister. It's designed to work with WordPress's block editor and site editor, providing over 50 patterns, templates, and style variations for building custom websites without coding.

## Development Commands

### Node.js Development Workflow
- `npm install` - Install Node.js dependencies for development tools
- `npm run dev` - Watch pattern files for changes and auto-escape for translations
- `npm run translate:patterns` - Process pattern files for translation readiness

### Linting and Code Quality
- `composer run lint` - Run PHP parallel lint on all PHP files
- `composer run wpcs:scan` - Scan code against WordPress coding standards
- `composer run wpcs:fix` - Auto-fix WordPress coding standard violations

**WPCS Requirements:**
- All PHP code must follow WordPress Coding Standards (WPCS)
- Run `composer run wpcs:fix` to auto-fix most violations before committing
- WPCS exclusions are configured in `composer.json` scripts and GitHub Actions workflow
- WPCS is enforced in CI/CD pipeline via GitHub Actions

### Custom Blocks
Custom blocks (Carousel, Menu Designer) have been moved to the [Moiraine Blocks plugin](https://github.com/imagewize/moiraine-blocks/). See that repository for block development documentation.

### Version Management
- Review changes with `git diff` to understand what has been modified
- Update version numbers following semantic versioning (MAJOR.MINOR.PATCH)
- For patch releases (bug fixes, minor enhancements):
  1. Update `CHANGELOG.md` with new patch version and changes summary
  2. Update `readme.txt` stable tag and changelog section
  3. Update `style.css` theme header version number
- For minor/major releases, follow same process but increment appropriate version numbers
- Always update all three files together to maintain version consistency

### Installation
- `composer install` - Install PHP dependencies for development
- `composer require imagewize/moiraine` - Install theme via Composer

## Architecture Overview

### Core Files
- `functions.php` - Main theme functionality including block styles, pattern categories, and WordPress hooks
- `theme.json` - WordPress theme configuration defining colors, typography, layout settings, and global styles
- `style.css` - Main theme stylesheet and WordPress theme header
- `theme-utils.mjs` - Node.js utility for pattern translation and file watching
- `package.json` - NPM configuration for development workflow

### Directory Structure
- `patterns/` - 88+ block patterns organized by category (hero, features, pricing, menu, etc.)
- `templates/` - WordPress block theme templates (page, single, archive, etc.)
- `parts/` - Template parts (header, footer, sidebar)
- `styles/` - Theme style variations and block-specific styles
- `assets/` - Theme assets including block-specific CSS files

### Block Theme Architecture
This is a WordPress block theme that uses:
- **Block patterns** for pre-designed page sections
- **Template parts** for reusable components (header, footer, sidebar)
- **Global styles** via theme.json for consistent design system
- **Block styles** for visual variations of core WordPress blocks

### Pattern System
Patterns are organized into categories:
- `moiraine/hero` - Hero sections
- `moiraine/features` - Feature presentations
- `moiraine/call-to-action` - CTA sections
- `moiraine/card` - Card layouts
- `moiraine/pricing` - Pricing tables
- `moiraine/testimonial` - Testimonials
- `moiraine/posts` - Blog post layouts
- `moiraine/pages` - Full page layouts
- `moiraine/menu` - Navigation and menu patterns (14 patterns: cards, mobile, panels)

**Pattern Image Guidelines:**
- **NEVER use hardcoded media IDs** in `wp:image` blocks (e.g., `"id":59`)
- Always use direct file paths: `<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/filename.webp`
- Hardcoded IDs cause performance issues: database queries for non-existent media, blinking/flashing effects, console errors, and validation failures
- All pattern images should be stored in `patterns/images/` directory
- Removing hardcoded IDs ensures patterns work consistently across all WordPress installations

### Style Variations
Multiple style variations available in `styles/` directory:
- Agency, Consulting, Creator, Startup, Studio
- Color variations in `styles/colors/`

## Development Notes

- WordPress 6.0+ required
- PHP 7.3+ required
- Node.js for development workflow (pattern translation, file watching)
- Uses WordPress coding standards (WPCS)
- Patterns directory excluded from linting
- No build process required - works out of the box
- Uses namespaced functions under `Moiraine\` namespace

### WordPress Development Mode
For optimal theme development experience, enable WordPress development mode:

**In Bedrock environments** (like demo site), add to `config/environments/development.php`:
```php
Config::define('WP_DEVELOPMENT_MODE', 'theme');
```

**In standard WordPress**, add to `wp-config.php`:
```php
define('WP_DEVELOPMENT_MODE', 'theme');
```

**Benefits for theme development:**
- Bypasses theme.json caching for immediate changes
- Pattern modifications appear instantly without cache clearing
- Essential for block theme and pattern development
- Ensures theme.json color/spacing/typography changes apply immediately

**Values:**
- `'theme'` - Theme development mode (recommended for Moiraine development)
- `'plugin'` - Plugin development mode
- `'core'` - WordPress core development mode
- `'all'` - All development modes enabled
- `''` - Development mode disabled

**Important:** Disable in production environments for optimal performance.

## Enhanced Features

### WooCommerce Integration
- Automatic WooCommerce stylesheet loading when plugin is active
- Enhanced e-commerce support for online stores

### Typography System
- 9 typography preset variations in `styles/typography/`
- Professional font combinations for different design needs
- Accessible via WordPress Site Editor Global Styles

### Menu Patterns
- 14 specialized navigation patterns for professional menu design
- Mobile-responsive menu variations
- Card, panel, and mobile menu styles