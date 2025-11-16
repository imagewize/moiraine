# Changelog

All notable changes to the Moiraine WordPress theme will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [2.6.4] - 2025-11-16

### Changed
- **Repository Structure**: Relocated theme documentation and demo content to project root for WordPress.org compliance
  - Moved `demo-content/` directory to `/demo-content/moiraine/` at imagewize.com project root
  - Moved `docs/` directory to `/docs/moiraine/` at imagewize.com project root
  - Theme directory is now WordPress.org ready without excluded directories
  - Documentation remains accessible for development while keeping theme clean for distribution

## [2.6.3] - 2025-11-16

### Added
- **Pattern Screenshot Documentation**: Comprehensive documentation for pattern screenshot workflow at `demo-content/BLOCK-SCREENSHOTS.md`
  - Complete guide for creating and updating pattern screenshots
  - Tools and scripts reference (screenshot-pattern.js, convert-to-webp.js)
  - Step-by-step instructions for updating screenshots
  - Troubleshooting guide and technical details
  - Pattern screenshot specifications (1400px width, variable height, WebP format)

### Changed
- **Pattern Screenshots Update**: Refreshed all 15 pattern screenshots with variable heights to show complete pattern content
  - Updated dimensions to use variable heights (maintaining 1400px width)
  - Pattern screenshots now show complete content without cropping
  - File sizes optimized with 85% WebP compression
  - Screenshots now support Carousel block's `adaptiveHeight` feature
  - Dimensions range from 1400×879px (smallest) to 1400×1541px (largest)

### Removed
- **WordPress Export File**: Removed outdated `moiraine.WordPress.2025-11-03.xml` (4MB) as content is now managed via database backups and pattern files

## [2.6.2] - 2025-11-15

### Fixed
- **Accessibility - Navigation List Structure**: Fixed HTML5 validation error where chevron `<span>` elements were direct children of `<li>` instead of being inside `<button>` elements by adding JavaScript that moves chevrons into their parent buttons after page load (resolves axe accessibility violation)
- **Accessibility - Skip Link Focus State**: Enhanced skip link visibility when focused by increasing CSS specificity to override WordPress core inline styles with `!important` declarations, ensuring high-contrast brand-colored background (primary color) with proper outline and shadow for WCAG 2.1 AA compliance
- **Accessibility - Skip Link Tab Order**: Fixed tab order issue by replacing outdated `left: -9999px` hiding technique with modern `clip: rect(0, 0, 0, 0)` and `clip-path: inset(50%)` method, ensuring skip link is properly recognized as first tabbable element for keyboard navigation

### Changed
- **Navigation Frontend JavaScript**: Enhanced `assets/js/navigation-frontend.js` with accessibility fix section that automatically corrects WordPress core navigation block HTML structure for standard navigation blocks (non-clickable-parents)
- **Skip Link CSS**: Updated skip link styles in `style.css` with comprehensive `!important` overrides to ensure theme accessibility styles win over WordPress core inline CSS injection
- **CSS Best Practices**: Migrated from deprecated off-screen positioning to modern visually-hidden technique following WebAIM and A11y Project recommendations for better screen reader and keyboard navigation support

## [2.6.1] - 2025-11-15

### Changed
- **Theme Logo**: Updated moiraine-logo.svg to ladybug icon design (sourced from Blade UI Kit) maintaining the existing sky blue color (#38bdf8) for consistent brand identity

## [2.6.0] - 2025-11-15

### Changed
- **WordPress.org Alignment**: Migrated all custom blocks to separate "Moiraine Blocks" companion plugin to comply with WordPress.org Theme Review requirements
  - Moved Mega Menu block to plugin
  - Moved Carousel block to plugin
  - Moved Slide block to plugin
  - Removed custom block registration from theme
- **Plugin Territory Compliance**: Moved SVG/WebP upload functionality to companion plugin (plugin-territory functionality)
  - Removed `upload_mimes` filter from theme
  - Removed `fix_media_display()` function from theme
  - All MIME type handling now in plugin
- **GPL-Compatible Images**: Replaced all 9 pattern images with GPL-compatible alternatives for WordPress.org compliance
  - 3 workspace images replaced with CC0 Public Domain images from StockSnap.io (computer-hands.webp, desktop.webp, guy-laptop.webp)
  - 6 avatar images replaced with Pexels License images (avatar-1 through avatar-7, excluding avatar-6)
  - All images optimized for web performance (WebP format, appropriate dimensions)
  - Full attribution documented in `docs/demo-enhancement/IMAGE-CREDITS-NEW.md`

### Removed
- **Custom Block Registration**: Removed all `register_block_type()` calls from theme (WordPress.org requirement)
- **Blocks Directory**: Removed `/blocks/` directory from theme (now in companion plugin)
- **Carousel Assets**: Removed Slick Carousel asset enqueuing from theme (now handled by plugin)
- **Upload MIME Filters**: Removed SVG/WebP upload filters (plugin-territory functionality)

### Notes
- **Breaking Change**: This release requires the "Moiraine Blocks" companion plugin for:
  - Mega Menu functionality
  - Carousel/Slide blocks
  - SVG upload support
- Theme now follows WordPress.org Theme Review guidelines (blocks in plugins, not themes)
- All pattern images now use GPL-compatible licenses (CC0 Public Domain and Pexels License)
- See `docs/WORDPRESS-ORG-ALIGNMENT.md` for full compliance details

## [2.5.5] - 2025-11-14

### Changed
- **Screenshot**: Updated theme screenshot to WordPress.org compliant dimensions (1200×900 pixels, 4:3 aspect ratio)
  - Previous: 1500×911 pixels (incorrect aspect ratio)
  - New: 1200×900 pixels (WordPress.org standard)
  - File size reduced from 352KB to 156KB (56% reduction)
  - Captures demo site homepage with hero section and key features
- **Documentation**: Updated readme.txt with complete changelog entries for versions 2.4.1 through 2.5.4

### Fixed
- **Accessibility - Navigation List Structure**: Fixed axe violation where `.wp-block-navigation__container` had invalid direct children by using `display: contents` to ensure only `<li>`, `<script>`, and `<template>` elements are recognized as direct children
- **Accessibility - Skip Link Focus State**: Enhanced skip-link visibility when focused with high-contrast styling (primary brand color background, white text, 3px outline with offset, box-shadow) and proper padding (1em × 1.5em) for improved keyboard navigation accessibility
- **Accessibility - Skip Link Tab Order**: Fixed tab order to prioritize skip-link as first focusable element with proper off-screen positioning when not focused (absolute positioning at -9999px) and very high z-index (100000) when focused to ensure it appears above all content

## [2.5.4] - 2025-11-12

### Security
- **Slide Block**: Fixed webpack-dev-server security vulnerabilities (CVE-2018-14732)
  - Updated `@wordpress/scripts` from 30.24.0 to 30.27.0
  - Added npm override to force `webpack-dev-server` 5.2.2 (patched version)
  - Resolved GHSA-9jgg-88mc-972h (CVSS 6.5) - Source code theft via malicious websites with non-Chromium browsers
  - Resolved GHSA-4v9v-hfq4-rm2v (CVSS 5.3) - Source code theft via malicious websites
  - Affects development environment only (webpack-dev-server is a devDependency)
  - Files modified: `blocks/slide/package.json`, `blocks/slide/package-lock.json`

## [2.5.3] - 2025-11-12

### Security
- **Carousel Block**: Fixed webpack-dev-server security vulnerabilities (CVE-2018-14732)
  - Updated `@wordpress/scripts` from 30.24.0 to 30.27.0
  - Added npm override to force `webpack-dev-server` 5.2.2 (patched version)
  - Resolved GHSA-9jgg-88mc-972h (CVSS 6.5) - Source code theft via malicious websites with non-Chromium browsers
  - Resolved GHSA-4v9v-hfq4-rm2v (CVSS 5.3) - Source code theft via malicious websites
  - Affects development environment only (webpack-dev-server is a devDependency)
  - Files modified: `blocks/carousel/package.json`, `blocks/carousel/package-lock.json`

## [2.5.2] - 2025-11-12

### Fixed
- **Navigation Toggle Spacing**: Fixed excessive spacing between parent links and toggle buttons on desktop when using both `has-clickable-parents` and `has-improved-chevrons` classes together. The `margin-left: 0.5rem` now only applies in mobile overlay mode where touch-friendly spacing is needed.

## [2.5.1] - 2025-11-11

### Fixed
- **Mega Menu Block Security**: Updated `@wordpress/scripts` dependency from 30.24.0 to 30.27.0 and added package override to force `webpack-dev-server` to version 5.2.0+ to address moderate severity vulnerabilities (GHSA-9jgg-88mc-972h and GHSA-4v9v-hfq4-rm2v)
- **Mega Menu Block Build**: Rebuilt block assets with updated dependencies

## [2.5.0] - 2025-11-09

### Added
- **Navigation Block Extension**: Extended WordPress core Navigation block with custom features while preserving visual editing capabilities
  - Clickable parent menu items - click text navigates to parent page, click chevron toggles submenu
  - Improved chevron positioning with better inline alignment on mobile menus
  - Inspector Controls panel with toggle switches for "Clickable parent items" and "Improved chevron positioning"
  - Frontend JavaScript that transforms parent buttons into clickable links + separate toggle buttons
  - Preserves WordPress Interactivity API for native submenu functionality
  - Full integration with Site Editor - drag/drop menu editing, inline text editing, visual menu management
- **Navigation Extension Implementation**: Following post-excerpt extension pattern for consistency
  - Block extension JavaScript: `assets/js/block-extensions/navigation.js`
  - Frontend enhancement: `assets/js/navigation-frontend.js`
  - PHP filters: `render_block` filters for `core/navigation` and `core/navigation-submenu` blocks
  - CSS styling: Extension styles in `assets/styles/core-navigation.css`
  - Automatic `data-parent-url` attribute injection for submenu items
- **Navigation Documentation**: Comprehensive implementation plan at `docs/NAVIGATION-EXTENSION-PLAN.md`
  - Architecture overview and implementation steps
  - Comparison: why block extension instead of custom block
  - Testing plan and rollback procedures
  - 8-hour estimated timeline with phase breakdown
- **Core Navigation Styles**: Added hamburger menu icon styles to `assets/styles/core-navigation.css` with increased size (32px) and thickness for better visibility

### Changed
- **Menu Designer Block Renamed to Mega Menu**: Complete rebrand from "Menu Designer" to "Mega Menu" for clarity and consistency
  - Updated block name: `moiraine/menu-designer` → `moiraine/mega-menu`
  - Updated all CSS class names: `.wp-block-moiraine-menu-designer` → `.wp-block-moiraine-mega-menu`
  - Updated namespace: `moiraine/menu-designer` → `moiraine/mega-menu`
  - Updated text domain and all references across 15+ files
- **Header Pattern Enhancement**: Updated `header-light-with-hamburger-menu.php` with navigation extension attributes
  - Added `hasClickableParents` and `hasImprovedChevrons` attributes
  - Enabled `moiraine-hamburger-large` class for improved mobile navigation visibility
- **Navigation Architecture**: Switched from custom nav-builder block to core Navigation block extension approach
  - Preserves native WordPress navigation features and Site Editor integration
  - Maintains visual menu editing capabilities (drag/drop, inline editing)
  - Simpler maintenance using WordPress core block as foundation

### Fixed
- **Mega Menu Interactivity API**: Fixed state management to consistently use context instead of mixing state and context access
  - Updated `toggleMenuOnClick`, `handleMenuKeydown`, `openMenu`, and `closeMenu` actions to properly access `context.menuOpenedBy`
  - Resolved issue where menu wasn't responding to click events due to state/context disconnect
- **Mega Menu CSS Class References**: Fixed SCSS file still using old `menu-designer` class names after block rename
  - Updated all class selectors in `src/style.scss` to use `mega-menu` naming
  - Fixed menu visibility toggle that was preventing dropdown overlay from working
  - Menu now properly hides by default and shows on click with smooth transitions
- **Navigation Submenu Chevrons**: Fixed mobile submenu chevron arrows appearing below menu items instead of inline (right-aligned) using block extension approach with CSS flexbox and JavaScript DOM transformation
- **Clickable Parent Menu Items**: Enabled parent menu items to function as both navigation links and submenu toggles by separating link and chevron into distinct clickable elements while preserving WordPress Interactivity API

### Removed
- **Nav Builder Block**: Removed custom nav-builder block in favor of extending core Navigation block
  - Custom block lacked visual menu editing in Site Editor
  - Extension approach provides better user experience and maintainability
  - Documentation archived in `docs/NAVIGATION-EXTENSION-PLAN.md` explaining the decision

## [2.4.2] - 2025-11-04

### Added
- **Pattern Screenshot Assets**: Added 15 optimized WebP landscape screenshots (1400x800px) for pattern carousel showcase
- **Pattern Carousel Documentation**: Comprehensive documentation for pattern selection criteria and carousel implementation (`docs/demo-enhancement/PATTERNS-CAROUSEL.md`)
- **Phase 7 Documentation**: Pattern showcase implementation guide (`docs/demo-enhancement/PHASE7-PATTERNS-SHOWCASE.md`) and automation commands (`docs/demo-enhancement/PHASE7-COMMANDS.md`)

### Enhanced
- **Services Feature Cards Pattern**: Improved responsive layout with CSS Grid (`minimumColumnWidth: 20rem`) replacing fixed 3-column layout for better mobile responsiveness
- **Blog Post Columns Pattern**: Updated to use responsive CSS Grid layout instead of fixed 2-column grid
- **Pattern Color Consistency**: Standardized `services-feature-cards.php` to use `primary` and `tertiary` background colors instead of non-standard `ocean-blue` and `dark-teal`
- **Pattern Text Contrast**: Improved text color consistency in service cards - changed nested text from `base` to `main` for better accessibility on tertiary backgrounds
- **Demo Enhancement Tracking**: Updated `docs/demo-enhancement/PROGRESS.md` with Phase 7 completion tracking

### Changed
- **Pattern Layout System**: Migrated patterns from fixed column layouts to flexible CSS Grid layouts for improved responsiveness across all viewport sizes
- **Pattern Color Palette**: Aligned all pattern colors to standard theme color system for better theme variation compatibility

## [2.4.1] - 2025-11-03

### Added
- **Playwright Testing Scripts**: Added dedicated menu testing script (`.playwright/scripts/test-menu.js`) for automated desktop and mobile menu behavior testing with screenshots

### Enhanced
- **Menu Designer Block Styles**: Refactored SCSS architecture with modern Sass features including variables, improved BEM nesting, and better code organization for enhanced maintainability
- **Documentation**: Updated CLAUDE.md with comprehensive Playwright browser testing and screenshot guidelines, including usage examples for both general screenshots and specialized menu testing

### Changed
- **SCSS Structure**: Introduced reusable variables for transitions, sizes, and z-indexes in Menu Designer block
- **CSS Organization**: Improved nesting patterns following BEM methodology for cleaner, more maintainable code
- **Code Quality**: Consolidated duplicate mobile menu styles using Sass features for DRY principles

## [2.4.0] - 2025-11-03

### Added
- **Carousel Block**: New custom WordPress block for creating responsive image/content carousels with Slick Carousel integration
- **Slide Block**: Companion block for individual carousel slides with InnerBlocks support for flexible content
- **Slick Carousel Library**: Added Slick Carousel JavaScript library and theme assets for carousel functionality
- **Demo Content Export**: Comprehensive WordPress XML export (moiraine.WordPress.2025-11-03.xml) with complete demo site content
- **Demo Enhancement Documentation**: Extensive documentation covering image audit, content creation, and homepage refinement phases
- **New Pattern Images**: Added logo-5.webp and optimized existing avatar and logo images for better performance
- **Database Backup Scripts**: Added automated backup script (backup-db.sh) for both main and demo sites
- **Content Management Scripts**: Python script for homepage content updates and Bash script for applying homepage updates

### Enhanced
- **Pattern Images**: Optimized all avatar images (avatar-1 through avatar-7) reducing file sizes by 50-80% while maintaining quality
- **Logo Images**: Refreshed all logo images (logo-1 through logo-6) with improved designs matching OllieWP aesthetic
- **Hero Pattern**: Updated hero-text-image-and-logos.php with refined layout and improved logo grid
- **Testimonial Patterns**: Updated 6 testimonial patterns with new avatar images and refined styling
- **Team Members Pattern**: Enhanced team member display with updated avatar images and layout improvements
- **Demo Site Content**: Complete content refresh with new blog posts, pages, and showcase templates for multi-site setup
- **Block Development Workflow**: Enhanced documentation in CLAUDE.md for block structure requirements and asset enqueuing
- **Functions.php**: Added carousel asset enqueuing function with conditional loading using has_block()

### Changed
- **Package Dependencies**: Updated npm packages for improved security and performance
- **Git Configuration**: Updated .gitignore to exclude carousel backup directories and rsync files
- **Documentation Structure**: Organized demo enhancement documentation into dedicated docs/demo-enhancement/ directory

### Fixed
- **Image Performance**: Reduced pattern image file sizes significantly (computer-hands.webp: 145KB → 84KB, guy-laptop.webp: 38KB → 129KB with better quality)
- **Asset Loading**: Implemented conditional loading for carousel assets to prevent unnecessary script/style enqueuing

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