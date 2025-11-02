# Changelog

All notable changes to the Moiraine WordPress theme will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [2.3.3] - 2025-11-02

### Fixed
- **Menu Designer Block**: Fixed Site Editor link in block settings now correctly navigates to Menu template parts area (`/wp-admin/site-editor.php?p=%2Fpattern&postType=wp_template_part&categoryId=menu`)
- **Menu Designer URL Generation**: Updated URL construction from incorrect `path%2Fpatterns&categoryType` parameters to proper `p=%2Fpattern&postType` format
- **Menu Designer Reliability**: Added fallback to `window.location.origin` when WordPress site URL isn't available from data store, ensuring link always works
- **Menu Designer Version**: Updated Menu Designer block to version 0.1.3

## [2.3.2] - 2025-11-01

### Changed
- **Block Directory Structure**: Migrated Menu Designer block from `inc/blocks/` to root `blocks/` directory for consistency with WP Native Blocks plugin architecture
- **Block Registration**: Consolidated block registration to use single auto-registration system for all native blocks in `blocks/` directory
- **Code Organization**: Removed duplicate block registration code from functions.php, now using unified registration approach

### Removed
- **Legacy Block Registration**: Removed old block registration system that scanned `inc/blocks/` directory
- **inc/blocks Directory**: Removed empty `inc/blocks/` directory as all blocks now reside in root `blocks/` directory

## [2.3.1] - 2025-10-11

### Added
- **Documentation Protection**: Added `docs/index.php` with directory index blocking for security

### Changed
- **.gitignore**: Added `rsync` to ignored files list for cleaner repository

## [2.3.0] - 2025-09-25

### Added
- **Featured Post Two Column Pattern**: New `post-featured-two-column.php` pattern displaying a single featured post with image and title on the left, excerpt on the right in a 40/60 column layout with tertiary background
- **Enhanced Post Layout Options**: Added horizontal two-column layout option to complement existing vertical post card patterns for more flexible content presentation
- **SVG Upload Support**: Added SVG file upload capability to media library with proper display handling in admin interface
- **Block Extensions System**: Added `inc/block-extensions.php` for enhanced block functionality and extensibility

### Enhanced
- **Pattern Categories**: Featured post pattern includes both `moiraine/posts` and `moiraine/features` categories for better discoverability
- **WordPress Standards Compliance**: Updated composer scripts to exclude JavaScript files from PHP coding standards scanning

## [2.2.0] - 2025-09-24

### Enhanced
- **Duotone System Standardization**: Unified duotone color system across all style variations with consistent naming and color palettes
- **Pattern Duotone Consistency**: Standardized all patterns to use `var:preset|duotone|primary` instead of hardcoded color values for better theme integration and customization
- **Style Variation Duotone Support**: Added comprehensive duotone color sets to all style variations (Agency, Consulting, Creator, Publisher, Startup, Studio) with matching brand color schemes

### Fixed
- **Theme-wide Duotone Integration**: Replaced hardcoded duotone colors in 8 pattern files with theme preset variables for consistent visual styling across all style variations
- **Cross-variation Compatibility**: Ensured duotone effects automatically adapt to active style variation colors for seamless theme switching

## [2.1.4] - 2025-09-24

### Added
- **Publisher Style Variation**: New elegant publishing-focused style variation with premium typography using Bodoni Moda serif font family
- **Bodoni Moda Font Integration**: Added Bodoni Moda regular and italic WOFF2 font files for premium typography experience
- **Publisher Color Palette**: Professional color scheme optimized for content publishing with refined contrast and readability
- **Typography Preset 10**: New typography preset featuring Bodoni Moda for headings with enhanced readability settings

### Enhanced
- **Theme Configuration**: Updated theme.json with Publisher style variation support and font family definitions
- **Documentation**: Expanded AUCTOR.md with comprehensive Publisher style variation implementation details and usage guidelines

## [2.1.3] - 2025-01-27

### Added
- **Mobile Menu Panel Pattern**: Created `menu-panel-1-mobile.php` with simplified single-column layout optimized for mobile screens
- **Conditional Menu Loading**: Added responsive pattern loading to `menu-panel-features.html` that automatically loads desktop or mobile versions based on screen size

### Enhanced
- **Mobile Menu Experience**: Mobile menu panels now display 4 key features (Real-time Analytics, Team Collaboration, Advanced Security, 24/7 Support) with optimized spacing and touch-friendly design
- **Responsive Design**: Added CSS media queries at 782px breakpoint for seamless desktop/mobile menu transitions

### Fixed
- **Mobile Menu Overflow**: Resolved mobile menu panel extending beyond viewport boundaries by creating dedicated mobile-optimized pattern
- **Touch Interaction**: Improved mobile usability with smaller icons (36px vs 50px) and reduced padding for better touch targets
- **Mobile Menu Positioning**: Fixed Menu Designer container positioning on mobile using proper CSS cascade without !important overrides, ensuring mobile menus align correctly within viewport boundaries
- **CSS Architecture**: Cleaned up mobile positioning logic by working with existing layout system rather than fighting it with heavy-handed overrides

## [2.1.2] - 2025-09-24

### Fixed
- **Template Part Pattern Reference**: Fixed `parts/menu-mobile-simple.html` referencing incorrect pattern slug `moiraine/menu-mobile-1` instead of the correct `moiraine/mobile-menu-1`, which was preventing the mobile menu pattern from loading

## [2.1.1] - 2025-09-23

### Updated
- **Menu Designer Block Dependencies**: Updated npm dependencies for Menu Designer block including Playwright (1.55.0 → 1.55.1), Sass (1.93.0 → 1.93.1), and various @cacheable packages for improved performance and security
- **Development Tools**: Enhanced caching and testing dependencies in Menu Designer block development workflow

## [2.1.0] - 2025-09-23

### Added
- **Menu Designer Block**: New custom block with mega menu functionality for creating dynamic navigation menus with template part integration
- **Advanced Block Development Workflow**: Implemented @wordpress/create-block architecture for custom block development in `inc/blocks/` directory
- **Block Registration System**: Modern block manifest approach using `wp_register_block_types_from_metadata_collection()` for WordPress 6.8+ compatibility
- **Base Menu Template Parts**: Added foundational menu template parts for enhanced navigation customization following WordPress best practices
  - `parts/menu-card-simple.html` - Lightweight reference to menu-card-1 pattern
  - `parts/menu-mobile-simple.html` - Lightweight reference to menu-mobile-1 pattern
  - `parts/menu-panel-features.html` - Lightweight reference to menu-panel-1 pattern
  - `parts/menu-panel-product.html` - Lightweight reference to menu-panel-2 pattern

### Enhanced
- **WordPress Interactivity API Integration**: Complete implementation following Human Made Mega Menu Block patterns with proper state management, context references, and callback system
- **Menu Designer Block State Management**: Updated to match Human Made's exact implementation pattern with `menuOpenedBy` getter, proper DOM reference handling via `context.megaMenu`, and enhanced focus management
- **JavaScript Architecture**: Added `initMenu` callback with `data-wp-watch` integration for proper initialization timing and streamlined action methods for cleaner state updates
- **Menu Designer Block Responsiveness**: Improved CSS width constraints to prevent horizontal scrollbars and implemented intelligent viewport-aware positioning system using modern CSS techniques
- **Block Editor Integration**: Menu Designer block now appears in navigation block inserter when adding menu items
- **ES Module Configuration**: Implemented proper `viewScriptModule` configuration with `--experimental-modules` build flag for modern WordPress Interactivity API support
- **User Experience**: Simplified mega menu creation workflow - users can now directly add Menu Designer blocks within navigation with full click, keyboard, and outside click functionality
- **Documentation**: Completely reorganized Menu Designer implementation guide with clear structure, quick start guide, and comprehensive technical documentation
- **Development Tools**: Enhanced build processes for both theme and block development workflows
- **Code Quality**: Improved formatting and linting processes across theme and block development

### Fixed
- **Pattern Media ID References**: Removed hardcoded media IDs from all pattern wp:image blocks to eliminate blinking/flashing effects, console errors, and performance issues caused by WordPress attempting to load non-existent media library references. Patterns now load images directly from file paths for consistent, faster performance across all WordPress installations
- **Menu Designer CSS Positioning**: Simplified positioning system by adopting Human Made's class-based approach, removing complex navigation-level detection in favor of direct `.menu-justified-*` classes
- **Mobile Menu Responsiveness**: Extended mobile viewport optimizations to all menu positions (left, center, right) ensuring proper fit on mobile devices regardless of desktop alignment
- **CSS Architecture**: Streamlined mega menu positioning logic by eliminating duplicate selectors and complex cascade rules for more maintainable code
- **Template Part Architecture**: Modernized menu template parts to follow WordPress best practices by converting them from full content to lightweight pattern references, eliminating image path issues and reducing duplication
- **Template Part Image Integration**: Fixed image loading issues by adopting Twenty Twenty-Five pattern reference approach where template parts reference patterns instead of containing full content
- **Menu Designer Block Navigation Integration**: Fixed critical issue preventing Menu Designer block from being inserted as navigation menu items
- **Block Supports Configuration**: Updated block.json with required supports for WordPress navigation integration (`interactivity`, `renaming`, `reusable`, `__experimentalSlashInserter`)
- **WordPress Interactivity API State Management**: Fixed state management pattern to match Human Made implementation with proper `state.menuOpenedBy` getter and context separation
- **Menu Designer Context References**: Fixed DOM reference management by implementing `context.megaMenu` pattern with proper cleanup and focus restoration
- **Menu Designer Callback System**: Added missing `initMenu` callback with `data-wp-watch` attribute for proper WordPress Interactivity API initialization timing
- **Outside Click Detection**: Fixed outside click functionality by using proper context reference management instead of DOM queries
- **Menu Designer Script Loading**: Fixed critical issue where view.js script wasn't being enqueued using auto-scan block registration method
- **Menu Designer CSS Positioning**: Fixed responsive width constraints using `min()` function to prevent overflow on smaller viewports and implemented reliable CSS positioning with viewport-aware sizing to prevent horizontal scroll bars when mega menus extend beyond viewport boundaries
- **Menu Designer Width Management**: Fixed restrictive 300px minimum width constraint causing narrow desktop dropdowns by implementing dynamic width calculation with `max-content` and viewport-aware sizing
- **Template Part Integration**: Fixed template parts not appearing in Menu area by properly registering menu template parts in `theme.json`
- **Template Part Expansion**: Fixed template parts not displaying at full width within mega menus by adding CSS overrides for width constraints in menu context
- **Mobile Menu Responsiveness**: Enhanced mobile breakpoint handling with proper width resets while maintaining desktop improvements
- **Build Process Enhancement**: Added `--experimental-modules` flag to webpack build process enabling proper view.js compilation
- **Script Asset Generation**: Now properly generates both view.js and view.asset.php for WordPress dependency management
- **Safari Blinking Fix**: Fixed Safari flickering in backdrop-filter blur effects using browser-specific CSS approach that disables blur only in Safari while maintaining full backdrop-filter effects in other browsers, with semi-transparent background fallback for Safari users to preserve visual quality

### Changed
- **CSS Positioning Strategy**: Replaced navigation-context positioning with direct menu class positioning for cleaner, more predictable behavior
- **Mobile-First Approach**: All menu alignments now respect mobile viewport constraints with consistent `calc(100vw - 2rem)` width calculation
- **WordPress Coding Standards**: Enhanced PHPCS configuration to exclude block directories while maintaining theme-level standards compliance
- **Development Workflow**: Updated composer scripts for better code quality management and block development support
- **Block Development Architecture**: Established standardized workflow for custom blocks using @wordpress/scripts build system

## [2.0.0] - 2025-09-19

### Added
- **WooCommerce Integration**: Automatic WooCommerce stylesheet loading when plugin is active for enhanced e-commerce support
- **New Menu Pattern Category**: Added 14 specialized navigation patterns under `moiraine/menu` category for professional menu design
- **Enhanced Translation Support**: Comprehensive translation preparation for all patterns with proper `esc_html_e()` implementation
- **Improved Code Standards**: Enhanced WordPress Coding Standards compliance with updated composer scripts
- **New Pattern Collection**: Added 5 new professional patterns including services feature cards, benefits lists, and call-to-action sections
- **Enhanced Font Library**: Added 7 new Google Fonts including Big Shoulders, DM Sans, Fraunces, Mona Sans, Montagu Slab, Source Serif, and Space Grotesk
- **New SVG Icons**: Added arrow circle filled icons (light and dark variants) and checkmark icon for pattern designs

### Changed
- **Template Architecture Modernization**: Updated core templates (page.html, single.html, index.html) to use clean pattern-based approach matching Ollie architecture
- **Major Translation Update**: All hardcoded text in patterns now properly internationalized with translation functions
- **Code Quality Improvements**: Updated PHPCS scanning to exclude node_modules and improve development workflow
- **Navigation Styles**: Fixed close button positioning in light header with hamburger menu for better mobile experience

### Fixed
- Template structure now properly references template patterns for better modularity and Site Editor compatibility
- **Header Template Part**: Fixed pattern reference typo in `parts/header.html` (`moiraine/header-light-wth-action-button` → `moiraine/header-light-action-button`)
- Template parts verification: All header, footer, and sidebar components now load correctly
- Indentation consistency in navigation CSS files (spaces to tabs conversion)
- Pattern translation readiness across all 88+ patterns
- Composer script improvements for better code scanning
- **Color System Standardization**: Fixed list-benefits-dark.php to use standard `backgroundColor="main"` instead of non-standard `dark-teal`
- **Typography Presets**: Converted hardcoded font sizes to WordPress typography presets in benefits list patterns for better theme compatibility
- **Corporate Blue Color Variation**: Added new corporate-blue.json color scheme with professional brand colors mapped to standard WordPress color slugs

### Previous Versions

## [1.2.2] - 2024-11-01
- Fixed header and footer calls for child themes

## [1.2.1] - 2024-10-08
- Fixed image paths in patterns for child themes
- Fixed box shadow slug name
- Fixed outline button color cascading

## [1.2.0] - 2024-10-02
- Refreshed homepage pattern design
- Updated site logo to use paragraph instead of H1
- Updated header and footer to lighter color patterns by default
- Added new hero pattern to homepage
- Cleaned up pattern library for more consistency

## [1.1.6] - 2024-09-03
- Removed template restriction on headers
- Removed default full width on form inputs

## [1.1.5] - 2024-08-20
- Added box shadow support
- Fixed image paths in patterns for child themes
- Cleaned up pagination styles

## [1.1.4] - 2024-07-23
- Added style improvements for images on mobile

## [1.1.3] - 2024-07-16
- Removed unnecessary theme.json styles
- Improved line height styling
- Removed unnecessary underline styles
- Added image size fallback

## [1.1.2] - 2024-07-09
- Removed H1 font size to allow for global styles
- Fixed font size on site title
- Fixed font size on patterns

## [1.1.1] - 2024-06-27
- Switched main font to Mona Sans
- Adjusted typography scale for new font
- Added new style variations: Creator, Startup, Studio
- Removed Dashicons dependency and reworked list styles
- Fixed tag wrapping on single post template
- Added active class style in navigation
- Improved pattern typography for new style variations

## [1.0.0] - 2024-04-03
- Initial Moiraine release based on Ollie theme
- Complete theme rebranding from Ollie to Moiraine
- Added Open Sans Font Family
- Added Header Light w/ Hamburger Menu
- Added Royal Blue Palette & Consulting Variation
- Added demo content including Contact Page
- Updated author information and branding
- Improved WordPress Standards compliance