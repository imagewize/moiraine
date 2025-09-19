# Changelog

All notable changes to the Moiraine WordPress theme will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [2.0.0] - 2025-09-19

### Added
- **WooCommerce Integration**: Automatic WooCommerce stylesheet loading when plugin is active for enhanced e-commerce support
- **New Menu Pattern Category**: Added 14 specialized navigation patterns under `moiraine/menu` category for professional menu design
- **Enhanced Translation Support**: Comprehensive translation preparation for all patterns with proper `esc_html_e()` implementation
- **Improved Code Standards**: Enhanced WordPress Coding Standards compliance with updated composer scripts

### Changed
- **Major Translation Update**: All hardcoded text in patterns now properly internationalized with translation functions
- **Code Quality Improvements**: Updated PHPCS scanning to exclude node_modules and improve development workflow
- **Navigation Styles**: Fixed close button positioning in light header with hamburger menu for better mobile experience

### Fixed
- Indentation consistency in navigation CSS files (spaces to tabs conversion)
- Pattern translation readiness across all 88+ patterns
- Composer script improvements for better code scanning

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