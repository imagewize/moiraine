# Changelog

All notable changes to the Moiraine WordPress theme will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [2.1.4] - 2025-09-22

### Enhanced
- **Menu Designer Block Responsiveness**: Improved CSS width constraints to prevent horizontal scrollbars and ensure proper viewport-aware positioning
- **Menu Designer Styling**: Enhanced positioning logic for better alignment across different navigation justification settings
- **Documentation**: Comprehensive implementation guide added to Menu Designer documentation with solutions for dropdown positioning and hover functionality

### Fixed
- **Menu Designer CSS Positioning**: Fixed responsive width constraints using `min()` function to prevent overflow on smaller viewports
- **Menu Container Styling**: Improved CSS selectors for both `.moiraine-menu-designer` and `.wp-block-moiraine-menu-designer__menu-container` classes
- **Mobile Responsive Design**: Added proper mobile breakpoint handling for menu positioning and width calculations

## [2.1.3] - 2025-09-22

### Fixed
- **Menu Designer Block Navigation Integration**: Fixed critical issue preventing Menu Designer block from being inserted as navigation menu items
- **Block Supports Configuration**: Updated block.json with required supports for WordPress navigation integration (`interactivity`, `renaming`, `reusable`, `__experimentalSlashInserter`)
- **Typography Compatibility**: Corrected typography supports to use experimental features matching WordPress core navigation blocks
- **Navigation Block Parent Relationship**: Menu Designer block now properly functions as child of `core/navigation` blocks

### Enhanced
- **Block Editor Integration**: Menu Designer block now appears in navigation block inserter when adding menu items
- **Documentation**: Updated `docs/MENU-DESIGNER.md` with correct usage instructions and technical implementation details
- **User Experience**: Simplified mega menu creation workflow - users can now directly add Menu Designer blocks within navigation

## [2.1.2] - 2025-09-22

### Fixed
- **Menu Designer Block Integration**: Fixed template parts not appearing in Menu area by registering menu template parts in `theme.json`
- **Template Part Area Assignment**: Menu template parts now properly assigned to "menu" area enabling menu designer block functionality

## [2.1.1] - 2025-09-22

### Added
- **Base Menu Template Parts**: Added foundational menu template parts for enhanced navigation customization
  - `parts/menu-card-simple.html` - Simple card-style menu template
  - `parts/menu-mobile-simple.html` - Mobile-optimized menu template
  - `parts/menu-panel-features.html` - Feature-focused panel menu template
  - `parts/menu-panel-product.html` - Product-focused panel menu template

### Enhanced
- **Menu Designer Documentation**: Updated `docs/MENU-DESIGNER.md` with comprehensive implementation guidelines
- **Menu System Integration**: Enhanced functions.php with improved menu template part support

## [2.1.0] - 2025-09-22

### Added
- **Menu Designer Block**: New custom block with mega menu functionality for creating dynamic navigation menus with template part integration
- **Advanced Block Development Workflow**: Implemented @wordpress/create-block architecture for custom block development in `inc/blocks/` directory
- **Enhanced PHPCS Configuration**: Updated WordPress Coding Standards configuration with improved exclusions for block directories
- **Block Registration System**: Modern block manifest approach using `wp_register_block_types_from_metadata_collection()` for WordPress 6.8+ compatibility

### Changed
- **WordPress Coding Standards**: Enhanced PHPCS configuration to exclude block directories while maintaining theme-level standards compliance
- **Development Workflow**: Updated composer scripts for better code quality management and block development support
- **Block Development Architecture**: Established standardized workflow for custom blocks using @wordpress/scripts build system

### Enhanced
- **Code Quality**: Improved formatting and linting processes across theme and block development
- **Documentation**: Added comprehensive Menu Designer block documentation with implementation guidelines
- **Development Tools**: Enhanced build processes for both theme and block development workflows

### Previous Versions

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