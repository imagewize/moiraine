=== Moiraine WordPress Block Theme ===
Contributors: jfrumau
Tags: blog, portfolio, entertainment, grid-layout, one-column, two-columns, three-columns, four-columns, block-patterns, block-styles, custom-logo, custom-menu, editor-style, featured-images, full-site-editing, full-width-template, rtl-language-support, style-variations, template-editing, theme-options, translation-ready, wide-blocks
Requires at least: 5.8
Tested up to: 6.7.1
Requires PHP: 7.3
Stable tag: 2.1.0
License: GNU General Public License v3.0 (or later)
License URI: https://www.gnu.org/licenses/gpl-3.0.html

== Description ==

Launch a blazing-fast, pixel-perfect website with the Moiraine WordPress block theme! Moiraine features over 50 beautiful pattern designs, 7 full-page pattern layouts, and a fully-customizable design system with Global Styles. Moiraine integrates seamlessly with all of the powerful new WordPress editor features, giving you the most lightweight and powerful website builder on the planet — no expensive page builder plugin required! ✶ Full demo: https://demo.imagewize.com ✶

== Changelog ==

= 2.1.0 - 09/23/25 =
* NEW: Menu Designer Block with mega menu functionality for creating dynamic navigation menus with template part integration
* NEW: Advanced block development workflow using @wordpress/create-block architecture in inc/blocks/ directory
* NEW: Modern block registration system using wp_register_block_types_from_metadata_collection() for WordPress 6.8+ compatibility
* NEW: Base menu template parts for enhanced navigation customization following WordPress best practices with lightweight pattern references (menu-card-simple, menu-mobile-simple, menu-panel-features, menu-panel-product)
* ENHANCED: WordPress Interactivity API integration with proper ES module configuration following Human Made Mega Menu Block patterns
* ENHANCED: Menu Designer Block responsiveness with improved CSS width constraints to prevent horizontal scrollbars and intelligent viewport-aware positioning system using modern CSS techniques
* ENHANCED: Block editor integration - Menu Designer appears in navigation block inserter when adding menu items
* ENHANCED: JavaScript performance by streamlining Menu Designer block with clean state management and removed debug logging from view.js for production-ready code
* ENHANCED: User experience with simplified mega menu creation workflow for adding Menu Designer blocks within navigation
* ENHANCED: Documentation with comprehensive Menu Designer implementation guide, WordPress Interactivity API best practices, and Human Made Mega Menu Block implementation patterns
* ENHANCED: Development tools with enhanced build processes for theme and block development workflows
* ENHANCED: Code quality with improved formatting and linting processes across theme and block development
* FIXED: Pattern media ID references - removed hardcoded media IDs from all pattern wp:image blocks to eliminate blinking/flashing effects, console errors, and performance issues caused by WordPress attempting to load non-existent media library references. Patterns now load images directly from file paths for consistent, faster performance across all WordPress installations
* FIXED: Menu Designer CSS positioning - simplified by adopting Human Made's class-based approach, removing complex navigation-level detection in favor of direct .menu-justified-* classes
* FIXED: Mobile menu responsiveness - extended mobile viewport optimizations to all menu positions (left, center, right) ensuring proper fit on mobile devices regardless of desktop alignment
* FIXED: Template part architecture - modernized menu template parts to follow WordPress best practices by converting them from full content to lightweight pattern references, eliminating image path issues and reducing duplication
* FIXED: Template part image integration - fixed image loading issues by adopting Twenty Twenty-Five pattern reference approach where template parts reference patterns instead of containing full content
* FIXED: Menu Designer Block navigation integration - critical issue preventing block insertion as navigation menu items
* FIXED: Block supports configuration with required WordPress navigation integration features (interactivity, renaming, reusable, __experimentalSlashInserter)
* FIXED: Menu Designer script loading - critical issue where view.js script wasn't being enqueued using auto-scan block registration method
* FIXED: WordPress Interactivity API context initialization and state management for proper dropdown functionality
* FIXED: Menu Designer CSS positioning with responsive width constraints using min() function to prevent viewport overflow and reliable CSS positioning with viewport-aware sizing to prevent horizontal scroll bars when mega menus extend beyond viewport boundaries
* FIXED: Template part integration - template parts now properly appear in Menu area by registering menu template parts in theme.json
* FIXED: Build process with --experimental-modules flag enabling proper view.js compilation as separate entry point
* FIXED: Script asset generation now properly creates both view.js and view.asset.php for WordPress dependency management
* FIXED: Safari blinking fix - fixed Safari flickering in backdrop-filter blur effects using browser-specific CSS approach that disables blur only in Safari while maintaining full backdrop-filter effects in other browsers, with semi-transparent background fallback for Safari users to preserve visual quality
* IMPROVED: WordPress Coding Standards configuration with improved exclusions for block directories
* IMPROVED: CSS architecture - streamlined mega menu positioning logic by eliminating duplicate selectors and complex cascade rules for more maintainable code
* UPDATED: CSS positioning strategy - replaced navigation-context positioning with direct menu class positioning for cleaner, more predictable behavior
* ENHANCED: Mobile-first approach - all menu alignments now respect mobile viewport constraints with consistent calc(100vw - 2rem) width calculation
* UPDATED: Development workflow with composer scripts for better code quality management and block development support
* UPDATED: Block development architecture with standardized workflow using @wordpress/scripts build system

= 2.0.0 - 09/19/25 =
* MAJOR UPDATE: Enhanced WooCommerce Integration
* NEW: Menu Pattern Category with 14 specialized navigation patterns
* NEW: 5 professional patterns including Services Feature Cards, Benefits Lists (light/dark), and Call-to-Action sections
* NEW: Enhanced font library with 7 Google Fonts (Big Shoulders, DM Sans, Fraunces, Mona Sans, Montagu Slab, Source Serif, Space Grotesk)
* NEW: SVG icon collection with arrow circle filled icons and checkmark for pattern designs
* IMPROVED: Comprehensive translation support for all patterns
* ENHANCED: WordPress Coding Standards compliance
* MODERNIZED: Template architecture now uses clean pattern-based approach for better Site Editor compatibility
* FIXED: Header template part pattern reference typo - header now loads correctly with logo, menu, and action button
* FIXED: Template parts verification - all header, footer, and sidebar components load properly
* FIXED: Navigation styling and mobile experience improvements
* FIXED: Color system standardization - benefits patterns now use standard WordPress color slugs for better theme compatibility
* FIXED: Typography presets implementation - converted hardcoded font sizes to WordPress presets in patterns
* ADDED: Corporate Blue color variation with professional brand colors mapped to standard WordPress color system
* UPDATED: Pattern internationalization with proper translation functions

= 1.2.2 - 11/1/24 =
* Fix header and footer calls for child themes

= 1.0.1 - 04/04/24 =
* Composer PHP version update
* README Composer installation note addition

= 1.0.0 - 04/03/24 =
* Add Open Sans Font Family
* Add Header Light w/ Hamburger Menu
* Complete Theme Rebranding
* Add Royal Blue Palette & Consulting Variation
* Fix Branding Alignment
* Remove Old Branding from README
* Update Composer Meta
* Add Demo Content including Contact Page
* Add GNU GPL License MD File
* Update Author Name
* Improve WordPress Standards compliance
* Rename OllieWP to Imagewize/Moiraine
* Update contributor names
* Add PHP CS XML Config File
* Update WP README
* Update Content
* Improve Styling & Content

= 1.3.3 - 1/31/24 =
* Improve standalone color palettes to match style variations
* Add standalone Neon color palette from Agency style variation
* Add Brand Alt color variation for buttons

= 1.3.2 - 1/29/24 =
* Improve responsive typography for smaller screens

= 1.3.1 - 1/29/24 =
* Remove extra styles in /styles folder

= 1.3.0 - 12/16/24 =
* Refine color palette names to map better to their contextual use. Read more about the change here: https://imagewize.com/moiraine/docs/color-palette/
* Refine existing color palettes with updated colors and new color slot.
* Refine pattern layouts with simpler markup where possible
* Add new Agency color palette for upcoming Agency pattern collection.
* Add style variation for quickly changing button colors.
* Add layer names to patterns

= 1.2.5 - 11/25/24 =
* Fix issue where some font weights aren't being applied

= 1.2.4 - 11/21/24 =
* Fix line height issue in global styles by switching to number-based line heights instead of variables

= 1.2.3 - 11/19/24 =
* Improve line height on post title headings

= 1.2.2 - 11/1/24 =
* Fix header and footer calls for child themes

= 1.2.1 - 10/8/24 =
* Fix image paths in patterns for child themes
* Fix box shadow slug name
* Fix outline button color cascading

= 1.2.0 - 10/2/24 =
* Refresh homepage pattern design
* Update site logo to use paragraph instead of H1
* Update header and footer to lighter color patterns by default
* Add new hero pattern to homepage
* Clean up pattern library for more consistency
* Clean up navigation block markup
* Clean up header and footer markup

= 1.1.6 - 9/3/24 =
* Remove template restriction on headers
* Remove default full width on form inputs

= 1.1.5 - 8/20/24 =
* Add box shadow support
* Fix image paths in patterns for child themes
* Clean up pagination styles

= 1.1.4 - 7/23/24 =
* Add style improvements for images on mobile

= 1.1.3 - 7/16/24 =
* Remove unnecessary theme.json styles
* Improve line height styling
* Remove unnecessary underline styles
* Add image size fallback

= 1.1.2 - 7/9/24 =
* Remove H1 font size to allow for global styles
* Fix font size on site title
* Fix font size on patterns

= 1.1.1 - 6/27/24 =
* Switch main font to Mona Sans
* Adjust typography scale for new font
* Add new style variations: Creator, Startup, Studio
* Remove Dashicons dependency and rework list styles
* Fix tag wrapping on single post template
* Add active class style in navigation
* Improve pattern typography for new style variations

= 1.1.0 - 10/14/23 =
* Remove custom duotone limitation 
* Improve patterns for use in child themes 
* Remove unnecessary ollie slug from template part

= 1.0.9 - 10/4/23 =
* Update theme description to remove reference to onboarding wizard
* Add Patrick Posner as a contributor

= 1.0.8 - 10/4/23 =
* Update screenshot

= 1.0.7 - 10/2/23 =
* Remove Ollie onboarding wizard in favor of plugin implementation in the coming weeks

= 1.0.6 - 9/27/23 =
* Replace social icon links with placeholder links

= 1.0.5 - 9/27/23 =
* Remove activation modal and replace it with core admin notice 
* Remove site icon setting from onboarding

= 1.0.4 - 9/25/23 =
* Refactor dashboard views
* Remove unused styles

= 1.0.3 - 9/22/23 =
* Clean up footer patterns
* Clean up header patterns
* Add more padding to blog post cards

= 1.0.2 - 9/18/23 =
* Prepare theme for wp.org release
* Prefix pattern categories 
* Update theme screenshot
* Remove site title, tagline, and logo upload from dashboard wizard
* Add additional license info in readme.txt
* Fix navigation spacing 
* Update blog to two column layout
* Under the hood improvements for security and performance

= 1.0.1 - 8/21/23 =
* Remove site logo conditional in header patterns and revert to site title by default

= 1.0.0 - 8/16/23 =
* Initial public release 
* Add Ollie Dashboard and Setup Wizard (Appearance → Ollie)
* Fix block spacing for WordPress 6.3 

= 0.1.4 - 7/17/23 =
* Remove home.html template in favor of traditional set up. Using home.html had benefits, but required users to employ workarounds to get the homepage and blog settings working as expected. Now, to create a homepage layout, choose any page, apply the No Title page template, and add one of the full page patterns found in the pattern modal.
* Fix margin styles on paragraphs and lists for 6.3. 
* Add a Blog page pattern.
* Prepare theme for Ollie setup wizard. 

= 0.1.3 - 5/19/23 =
* Change Front Page template back to front-page.html for now. Still contemplating the best option here.
* Improve styling on search results page
* Change blog index view from list view to a grid view. 
* Improve styling on header font sizes 
* Add Page With Sidebar template. 

= 0.1.2 - 5/10/23 =
* Change Front Page template to Home template, which makes it a lot easier to control what shows on your homepage.

= 0.1.1 - 5/3/23 =
* Fix image height on single post columns
* Remove post type restriction from header and footer patterns
* Add author profile box pattern
* Remove unnecessary styles from style.css
* Update Ollie Twitter URLs

= 0.1.0 - 3/20/23 =
* Initial beta release

== Copyright ==

Moiraine Theme, (C) 2025 Jasper Frumau based on Ollie by Mike McAlister.
Moiraine is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

All media licensed under Creative Commons Zero (CC0) https://creativecommons.org/publicdomain/zero/1.0/

skateboarding.webp  - https://stocksnap.io/photo/skateboarder-sidewalk-NH8J97NEVN
computer-hands.webp - https://stocksnap.io/photo/computer-laptop-FBXB2DA8O7
avatar-1.webp       - https://stocksnap.io/photo/people-man-A3WDGDTBI6
avatar-2.webp       - https://stocksnap.io/photo/urban-fashion-TQAKNY0XO2
avatar-3.webp       - https://stocksnap.io/photo/woman-glasses-7RKWHUXLMQ
avatar-4.webp       - https://stocksnap.io/photo/smiling-woman-KS92MVGSXY
avatar-5.webp       - https://stocksnap.io/photo/male-professional-6QXAIH13O6
avatar-7.webp       - https://stocksnap.io/photo/woman-business-LERRJPTMHP
desktop.webp        - https://startupstockphotos.com/photos/workspace-desk-office/
guy-laptop.webp     - https://startupstockphotos.com/photos/office-worker-computer/

logo-1.webp, logo-2.webp, logo-3.webp, logo-4.webp, logo-5.webp - created by Mike McAlister and available via CC0.
All images in /inc/settings/build/images/ created by Mike McAlister and available via CC0. 

Other assets: 

- The Mona Sans font is available via the SIL Open Font License 1.1: https://github.com/github/mona-sans/blob/main/LICENSE
- Icons available from Iconnoir via the MIT License: https://github.com/iconoir-icons/iconoir/blob/main/LICENSE
