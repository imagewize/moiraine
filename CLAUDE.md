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

### Block Styles System
Custom block styles are registered in functions.php and loaded dynamically:
- List styles (check, boxed)
- Cover styles (blur, rounded)
- Image styles (rounded, boxed)
- Code styles (dark theme)
- Group styles (box shadow, background blur)

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