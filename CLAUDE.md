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

**WPCS Requirements for Blocks and Code:**
- All PHP code must follow WordPress Coding Standards (WPCS)
- Block directories (`inc/blocks/*`) are excluded from WPCS as they use `@wordpress/create-block` conventions
- Block files use WordPress-standard naming conventions (e.g., `index.asset.php`, `view.asset.php`)
- Only edit source files in `inc/blocks/*/src/` - never edit build files directly
- Run `composer run wpcs:fix` to auto-fix most violations before committing
- WPCS exclusions are configured in `composer.json` scripts and GitHub Actions workflow
- WPCS is enforced in CI/CD pipeline via GitHub Actions

### Block Development Workflow

#### Creating Blocks with WP Native Blocks Plugin
**IMPORTANT**: The demo site uses the WP Native Blocks plugin for block scaffolding. All WP-CLI commands must be run from the Trellis VM, not from your local machine.

```bash
# From the project root (imagewize.com repository)
cd trellis

# Create a new block using WP Native Blocks plugin
trellis vm shell --workdir /srv/www/demo.imagewize.com/current -- wp block create imagewize/block-name --url=http://demo.imagewize.test --path=web/wp

# OR from interactive VM shell
trellis vm shell
cd /srv/www/demo.imagewize.com/current
wp block create imagewize/block-name --url=http://demo.imagewize.test --path=web/wp
```

**Why Trellis VM?**
- Database connection is configured in the VM environment
- WordPress installation is accessible at `/srv/www/demo.imagewize.com/current/`
- All WP-CLI commands require database access
- Local machine doesn't have correct database credentials
- **Important**: If you have another database server (MySQL, MariaDB, PostgreSQL) running locally on your machine, it will conflict with the Trellis VM's database port. In this case, you **must** run `wp` commands from within the VM.

**After Block Creation:**
- Block files are created in `inc/blocks/[block-name]/`
- Navigate to block directory: `cd inc/blocks/[block-name]`
- Install block dependencies: `npm install`
- Start development mode: `npm start` (file watching with auto-rebuild)
- Production build: `npm run build` (compiles src/ to build/)
- JavaScript linting: `npm run lint:js`
- CSS/SCSS linting: `npm run lint:css`
- Code formatting: `npm run format`

### Block Registration
Custom blocks must be registered with WordPress. Three main approaches:

**Single Block Registration**:
```php
function register_my_block() {
    register_block_type( __DIR__ . '/inc/blocks/my-block/build/my-block/block.json' );
}
add_action( 'init', 'register_my_block' );
```

**Auto-scan Multiple Blocks** (recommended for themes):
```php
add_action('init', function () {
    $blocks_dir = get_template_directory() . '/inc/blocks';
    if (!is_dir($blocks_dir)) return;

    foreach (scandir($blocks_dir) as $folder) {
        if ($folder === '.' || $folder === '..') continue;

        $block_json_path = $blocks_dir . '/' . $folder . '/build/' . $folder . '/block.json';
        if (file_exists($block_json_path)) {
            register_block_type($block_json_path);
        }
    }
});
```

**Block Manifest** (WordPress 6.7+, most efficient):
```php
function register_theme_blocks() {
    if (function_exists('wp_register_block_types_from_metadata_collection')) {
        wp_register_block_types_from_metadata_collection(__DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php');
    }
}
add_action('init', 'register_theme_blocks');
```

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

### Block Development
- Uses `@wordpress/create-block` and `@wordpress/scripts` for custom block development
- Block source files in `blocks/*/src/` directories
- Build output auto-generated in `blocks/*/build/` directories
- **IMPORTANT**: Never edit build files directly - always edit source files in `src/` and run `npm run build`
- Build process compiles TypeScript/JSX, processes SCSS, and generates block manifest
- Use `npm start` for development (watches files and rebuilds automatically)
- Use `npm run build` for production builds before committing
- Blocks must be registered with WordPress using `register_block_type()` function

**Block Structure Requirements:**
- `block.json` must be in `src/` directory (not root) - `@wordpress/scripts` automatically copies it to `build/` during build
- Source files in `src/`: `index.js`, `edit.js`, `save.js`, `editor.scss`, `style.scss`, `view.js` (if needed)
- Import `block.json` from same directory: `import metadata from './block.json';` (not `'../block.json'`)
- WordPress registration looks for `block.json` at: `blocks/[block-name]/build/block.json`
- Each block needs its own `package.json` with `@wordpress/scripts` devDependency

**Example Block Structure:**
```
blocks/
└── carousel/
    ├── package.json          # npm scripts and dependencies
    ├── src/                  # Source files (edit these)
    │   ├── block.json       # Block metadata (copied to build/)
    │   ├── index.js         # Block registration
    │   ├── edit.js          # Editor component
    │   ├── save.js          # Frontend save component
    │   ├── editor.scss      # Editor styles
    │   ├── style.scss       # Frontend styles
    │   └── view.js          # Frontend JavaScript (optional)
    ├── build/               # Build output (auto-generated, don't edit)
    │   ├── block.json       # Copied from src/
    │   ├── index.js         # Compiled JavaScript
    │   ├── index.css        # Compiled editor styles
    │   ├── style-index.css  # Compiled frontend styles
    │   └── index.asset.php  # WordPress asset dependencies
    └── node_modules/        # Block dependencies (gitignored)
```

**Enqueuing Block Assets:**
- For blocks requiring external libraries (like Slick Carousel), create a separate function in `functions.php`
- Use `has_block()` to conditionally load assets only when block is used
- Use `is_admin()` to prevent frontend-only scripts from loading in editor
- Example in `functions.php`: `enqueue_carousel_assets()` function