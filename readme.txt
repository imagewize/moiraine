=== Moiraine WordPress Block Theme ===
Contributors: jfrumau
Tags: blog, portfolio, entertainment, grid-layout, one-column, two-columns, three-columns, four-columns, block-patterns, block-styles, custom-logo, custom-menu, editor-style, featured-images, full-site-editing, full-width-template, rtl-language-support, style-variations, template-editing, theme-options, translation-ready, wide-blocks
Requires at least: 5.8
Tested up to: 6.7
Requires PHP: 7.3
Stable tag: 2.7.2
License: GNU General Public License v3.0 (or later)
License URI: https://www.gnu.org/licenses/gpl-3.0.html

== Description ==

Launch a blazing-fast, pixel-perfect website with the Moiraine WordPress block theme! Moiraine features over 50 beautiful pattern designs, 7 full-page pattern layouts, and a fully-customizable design system with Global Styles. Moiraine integrates seamlessly with all of the powerful new WordPress editor features, giving you the most lightweight and powerful website builder on the planet — no expensive page builder plugin required! ✶ Full demo: https://demo.imagewize.com ✶

== Changelog ==

= 2.7.2 - 11/21/25 =
* FIXED: Distribution Ignore File Format - fixed .distignore format for zip -x@ command compatibility
* FIXED: Added /* suffix to directory entries (.git/*, .github/*, node_modules/*, vendor/*, .claude/*, .playwright/*) for proper recursive exclusion
* FIXED: GitHub Actions release workflow now correctly excludes development directories from theme zip
* ADDED: packages/* to exclusions

= 2.7.1 - 11/21/25 =
* CHANGED: Distribution Ignore File - cleaned up .distignore to remove references to non-existent directories and files (docs, demo-content, inc/settings/src, theme-utils.mjs)
* CHANGED: Updated .playwright-mcp to .playwright (correct directory name) and added .claude directory to exclusions

= 2.7.0 - 11/20/25 =
* NEW: Classic Editor Compatibility Styles - comprehensive CSS support for classic editor and Theme Unit Test content in style.css
* NEW: Image Alignment - support for img.alignleft, img.alignright, img.aligncenter (direct image alignment without container wrappers)
* NEW: Image Captions - support for .wp-caption.alignleft, .wp-caption.alignright, .wp-caption.aligncenter (captioned images with proper float layouts)
* NEW: Blockquotes - classic blockquote element styling with left border, italic text, and theme colors
* NEW: Citations - styling for cite elements outside WordPress blocks with secondary color and proper spacing
* NEW: Inline Quotes - support for q tag with automatic quotation marks via CSS
* NEW: Preformatted Text - classic pre element styling with overflow handling and theme background colors
* NEW: Inline Code Overflow - enhanced overflow handling for code elements with word-wrap and overflow-wrap support
* NEW: Page Template Comments - added complete comments section to template-page-centered.php pattern with author avatars, dates, content, reply/edit links, pagination, and comment form
* IMPROVED: Float-based layouts with logical property support (margin-inline-end, margin-inline-start) for better RTL language support
* IMPROVED: Consistent spacing using theme preset variables throughout all classic editor styles
* IMPROVED: CSS Organization - restructured style.css with comprehensive table of contents (7 main sections: CSS Reset, Form Styling, Helper Styles, Classic Editor Compatibility, Block Adjustments, Mobile Responsive, Accessibility Fixes)
* IMPROVED: Documentation - enhanced inline CSS comments explaining WordPress core limitations and classic editor requirements
* FIXED: Classic editor content and Theme Unit Test data now displays correctly with proper image alignment, blockquotes, code blocks, and citations
* NOTE: WordPress core only provides .is-layout-flow > .alignleft which requires a container wrapper, this update adds direct support for classic editor markup without containers

= 2.6.6 - 11/19/25 =
* CHANGED: Development Tools Organization - moved theme-utils.mjs pattern processing script to project root for better organization
* CHANGED: Script relocated to scripts/themes/moiraine/utils.mjs (project-level organization)
* CHANGED: Created comprehensive documentation at docs/moiraine/THEME-UTILS.md
* CHANGED: Added quick reference guide at scripts/themes/moiraine/README.md
* CHANGED: Script now accepts --theme-path parameter for flexibility
* CHANGED: Default text domain changed from ollie to moiraine
* CHANGED: Cleaner theme directory structure without development tooling files
* IMPROVED: Run from project root: node scripts/themes/moiraine/utils.mjs escape-patterns

= 2.6.5 - 11/19/25 =
* CHANGED: WordPress.org Preparation - Updated theme headers for WordPress.org submission compliance with full HTTPS URLs
* FIXED: WordPress Coding Standards - Fixed 3 code alignment warnings in inc/block-extensions.php for full WPCS compliance
* Theme now ready for WordPress.org theme review submission

= 2.6.4 - 11/16/25 =
* CHANGED: Repository Structure - relocated theme documentation and demo content to project root for WordPress.org compliance
* CHANGED: Moved demo-content/ directory to /demo-content/moiraine/ at imagewize.com project root
* CHANGED: Moved docs/ directory to /docs/moiraine/ at imagewize.com project root
* IMPROVED: Theme directory is now WordPress.org ready without excluded directories while documentation remains accessible for development

= 2.6.3 - 11/16/25 =
* NEW: Pattern Screenshot Documentation - comprehensive documentation for pattern screenshot workflow at demo-content/BLOCK-SCREENSHOTS.md with complete guide for creating and updating pattern screenshots, tools and scripts reference, step-by-step instructions, troubleshooting guide and technical details
* CHANGED: Pattern Screenshots Update - refreshed all 15 pattern screenshots with variable heights to show complete pattern content (maintaining 1400px width, heights range from 1400×879px to 1400×1541px)
* CHANGED: Pattern screenshots now show complete content without cropping and support Carousel block's adaptiveHeight feature with 85% WebP compression for optimized file sizes
* REMOVED: WordPress Export File - removed outdated moiraine.WordPress.2025-11-03.xml (4MB) as content is now managed via database backups and pattern files

= 2.6.2 - 11/15/25 =
* FIXED: Accessibility - Navigation List Structure - fixed HTML5 validation error where chevron span elements were direct children of li instead of being inside button elements by adding JavaScript that moves chevrons into their parent buttons after page load (resolves axe accessibility violation)
* FIXED: Accessibility - Skip Link Focus State - enhanced skip link visibility when focused by increasing CSS specificity to override WordPress core inline styles with !important declarations, ensuring high-contrast brand-colored background (primary color) with proper outline and shadow for WCAG 2.1 AA compliance
* FIXED: Accessibility - Skip Link Tab Order - fixed tab order issue by replacing outdated left: -9999px hiding technique with modern clip: rect(0, 0, 0, 0) and clip-path: inset(50%) method, ensuring skip link is properly recognized as first tabbable element for keyboard navigation
* CHANGED: Navigation Frontend JavaScript - enhanced assets/js/navigation-frontend.js with accessibility fix section that automatically corrects WordPress core navigation block HTML structure for standard navigation blocks
* CHANGED: Skip Link CSS - updated skip link styles in style.css with comprehensive !important overrides to ensure theme accessibility styles win over WordPress core inline CSS injection
* CHANGED: CSS Best Practices - migrated from deprecated off-screen positioning to modern visually-hidden technique following WebAIM and A11y Project recommendations

= 2.6.1 - 11/15/25 =
* CHANGED: Theme Logo - updated moiraine-logo.svg to ladybug icon design (sourced from Blade UI Kit) maintaining the existing sky blue color (#38bdf8) for consistent brand identity

= 2.6.0 - 11/15/25 =
* CHANGED: WordPress.org Alignment - migrated all custom blocks to separate "Moiraine Blocks" companion plugin to comply with WordPress.org Theme Review requirements
* CHANGED: Plugin Territory Compliance - moved SVG/WebP upload functionality to companion plugin (plugin-territory functionality)
* CHANGED: GPL-Compatible Images - replaced all 9 pattern images with GPL-compatible alternatives for WordPress.org compliance
* REMOVED: Custom Block Registration - removed all register_block_type() calls from theme (WordPress.org requirement)
* REMOVED: Blocks Directory - removed /blocks/ directory from theme (now in companion plugin)
* REMOVED: Upload MIME Filters - removed SVG/WebP upload filters (plugin-territory functionality)
* NOTE: Breaking Change - this release requires the "Moiraine Blocks" companion plugin for Mega Menu functionality, Carousel/Slide blocks, and SVG upload support

= 2.5.5 - 11/14/25 =
* CHANGED: Screenshot - updated theme screenshot to WordPress.org compliant dimensions (1200×900 pixels, 4:3 aspect ratio) reducing file size from 352KB to 156KB (56% reduction)
* CHANGED: Documentation - updated readme.txt with complete changelog entries for versions 2.4.1 through 2.5.4

= 2.5.4 - 11/12/25 =
* SECURITY: Slide Block - fixed webpack-dev-server security vulnerabilities (CVE-2018-14732) by updating @wordpress/scripts from 30.24.0 to 30.27.0 with npm override forcing webpack-dev-server 5.2.2
* SECURITY: Resolved GHSA-9jgg-88mc-972h (CVSS 6.5) - source code theft via malicious websites with non-Chromium browsers
* SECURITY: Resolved GHSA-4v9v-hfq4-rm2v (CVSS 5.3) - source code theft via malicious websites
* NOTE: Security vulnerabilities affect development environment only (webpack-dev-server is a devDependency)

= 2.5.3 - 11/12/25 =
* SECURITY: Carousel Block - fixed webpack-dev-server security vulnerabilities (CVE-2018-14732) by updating @wordpress/scripts from 30.24.0 to 30.27.0 with npm override forcing webpack-dev-server 5.2.2
* SECURITY: Resolved GHSA-9jgg-88mc-972h (CVSS 6.5) and GHSA-4v9v-hfq4-rm2v (CVSS 5.3) - source code theft vulnerabilities
* NOTE: Affects development environment only (webpack-dev-server is a devDependency)

= 2.5.2 - 11/12/25 =
* FIXED: Navigation Toggle Spacing - fixed excessive spacing between parent links and toggle buttons on desktop when using both has-clickable-parents and has-improved-chevrons classes together. The margin-left: 0.5rem now only applies in mobile overlay mode where touch-friendly spacing is needed

= 2.5.1 - 11/11/25 =
* FIXED: Mega Menu Block Security - updated @wordpress/scripts dependency from 30.24.0 to 30.27.0 and added package override to force webpack-dev-server to version 5.2.0+ to address moderate severity vulnerabilities (GHSA-9jgg-88mc-972h and GHSA-4v9v-hfq4-rm2v)
* FIXED: Mega Menu Block Build - rebuilt block assets with updated dependencies

= 2.5.0 - 11/09/25 =
* NEW: Navigation Block Extension - extended WordPress core Navigation block with custom features while preserving visual editing capabilities
* NEW: Clickable Parent Menu Items - click text navigates to parent page, click chevron toggles submenu with separate clickable elements
* NEW: Improved Chevron Positioning - better inline alignment on mobile menus with enhanced visual presentation
* NEW: Navigation Inspector Controls - added toggle switches for "Clickable parent items" and "Improved chevron positioning" in block settings panel
* NEW: Frontend JavaScript Enhancement - transforms parent buttons into clickable links plus separate toggle buttons while preserving WordPress Interactivity API
* NEW: Navigation Documentation - comprehensive implementation plan at docs/NAVIGATION-EXTENSION-PLAN.md with architecture overview, testing plan, and rollback procedures
* NEW: Core Navigation Hamburger Styles - added hamburger menu icon styles to assets/styles/core-navigation.css with increased size (32px) and thickness for better visibility
* CHANGED: Menu Designer Block Renamed to Mega Menu - complete rebrand from "Menu Designer" to "Mega Menu" for clarity and consistency across 15+ files
* CHANGED: Block Namespace - updated from moiraine/menu-designer to moiraine/mega-menu with all CSS class names updated accordingly
* CHANGED: Header Pattern Enhancement - updated header-light-with-hamburger-menu.php with navigation extension attributes (hasClickableParents and hasImprovedChevrons)
* CHANGED: Navigation Architecture - switched from custom nav-builder block to core Navigation block extension approach for better WordPress integration
* FIXED: Mega Menu Interactivity API - fixed state management to consistently use context instead of mixing state and context access
* FIXED: Mega Menu State Access - updated toggleMenuOnClick, handleMenuKeydown, openMenu, and closeMenu actions to properly access context.menuOpenedBy
* FIXED: Mega Menu CSS Class References - fixed SCSS file still using old menu-designer class names after block rename
* FIXED: Menu Visibility Toggle - fixed menu visibility that was preventing dropdown overlay from working, now properly hides by default and shows on click with smooth transitions
* FIXED: Navigation Submenu Chevrons - fixed mobile submenu chevron arrows appearing below menu items instead of inline (right-aligned) using block extension approach with CSS flexbox and JavaScript DOM transformation
* REMOVED: Nav Builder Block - removed custom nav-builder block in favor of extending core Navigation block for better Site Editor integration and visual menu editing

= 2.4.2 - 11/04/25 =
* NEW: Pattern Screenshot Assets - added 15 optimized WebP landscape screenshots (1400x800px) for pattern carousel showcase
* NEW: Pattern Carousel Documentation - comprehensive documentation for pattern selection criteria and carousel implementation (docs/demo-enhancement/PATTERNS-CAROUSEL.md)
* NEW: Phase 7 Documentation - pattern showcase implementation guide (docs/demo-enhancement/PHASE7-PATTERNS-SHOWCASE.md) and automation commands (docs/demo-enhancement/PHASE7-COMMANDS.md)
* ENHANCED: Services Feature Cards Pattern - improved responsive layout with CSS Grid (minimumColumnWidth: 20rem) replacing fixed 3-column layout for better mobile responsiveness
* ENHANCED: Blog Post Columns Pattern - updated to use responsive CSS Grid layout instead of fixed 2-column grid
* ENHANCED: Pattern Color Consistency - standardized services-feature-cards.php to use primary and tertiary background colors instead of non-standard ocean-blue and dark-teal
* ENHANCED: Pattern Text Contrast - improved text color consistency in service cards, changed nested text from base to main for better accessibility on tertiary backgrounds
* ENHANCED: Demo Enhancement Tracking - updated docs/demo-enhancement/PROGRESS.md with Phase 7 completion tracking
* CHANGED: Pattern Layout System - migrated patterns from fixed column layouts to flexible CSS Grid layouts for improved responsiveness across all viewport sizes
* CHANGED: Pattern Color Palette - aligned all pattern colors to standard theme color system for better theme variation compatibility

= 2.4.1 - 11/03/25 =
* NEW: Playwright Testing Scripts - added dedicated menu testing script (.playwright/scripts/test-menu.js) for automated desktop and mobile menu behavior testing with screenshots
* ENHANCED: Menu Designer Block Styles - refactored SCSS architecture with modern Sass features including variables, improved BEM nesting, and better code organization for enhanced maintainability
* ENHANCED: Documentation - updated CLAUDE.md with comprehensive Playwright browser testing and screenshot guidelines, including usage examples for both general screenshots and specialized menu testing
* CHANGED: SCSS Structure - introduced reusable variables for transitions, sizes, and z-indexes in Menu Designer block
* CHANGED: CSS Organization - improved nesting patterns following BEM methodology for cleaner, more maintainable code
* CHANGED: Code Quality - consolidated duplicate mobile menu styles using Sass features for DRY principles

= 2.4.0 - 11/03/25 =
* NEW: Carousel Block - custom WordPress block for creating responsive image/content carousels with Slick Carousel integration for stunning visual presentations
* NEW: Slide Block - companion block for individual carousel slides with InnerBlocks support allowing any content type (images, text, buttons, etc.)
* NEW: Slick Carousel Library - added professional carousel JavaScript library with complete theme assets and initialization scripts
* NEW: Demo Content Export - comprehensive WordPress XML export (moiraine.WordPress.2025-11-03.xml) with complete demo site content for easy setup
* NEW: Demo Enhancement Documentation - extensive documentation covering image audit, content creation phases, and homepage refinement strategies
* NEW: Pattern Images - added logo-5.webp and optimized existing avatar/logo images for superior performance and visual quality
* NEW: Database Backup Scripts - automated backup script (backup-db.sh) for both main and demo sites with timestamp organization
* NEW: Content Management Scripts - Python script for homepage updates and Bash automation for applying changes efficiently
* ENHANCED: Pattern Images - optimized all avatar images (avatar-1 through avatar-7) reducing file sizes by 50-80% while maintaining visual quality
* ENHANCED: Logo Images - refreshed all logo images (logo-1 through logo-6) with improved designs matching OllieWP aesthetic standards
* ENHANCED: Hero Pattern - updated hero-text-image-and-logos.php with refined layout, improved spacing, and better logo grid presentation
* ENHANCED: Testimonial Patterns - updated 6 testimonial patterns (card-testimonial, single-testimonial, testimonial-highlight, testimonials-and-logos, testimonials-with-big-text, testimonials-with-social-links) with new avatar images and refined styling
* ENHANCED: Team Members Pattern - enhanced team member display with updated avatar images, improved typography, and better layout spacing
* ENHANCED: Demo Site Content - complete content refresh with new blog posts, showcase pages, and templates optimized for multi-site WordPress setup
* ENHANCED: Block Development Workflow - enhanced CLAUDE.md documentation with detailed block structure requirements and asset enqueuing best practices
* ENHANCED: Functions.php - added carousel asset enqueuing function with smart conditional loading using has_block() for optimal performance
* CHANGED: Package Dependencies - updated npm packages for improved security patches and performance optimizations
* CHANGED: Git Configuration - updated .gitignore to exclude carousel backup directories and rsync temporary files for cleaner repository
* CHANGED: Documentation Structure - organized demo enhancement documentation into dedicated docs/demo-enhancement/ directory for better navigation
* FIXED: Image Performance - significantly reduced pattern image file sizes (computer-hands.webp: 145KB → 84KB, guy-laptop.webp improved quality at 129KB)
* FIXED: Asset Loading - implemented intelligent conditional loading for carousel assets preventing unnecessary script/style enqueuing on pages without carousels

= 2.3.3 - 11/02/25 =
* FIXED: Menu Designer Block - Site Editor link in block settings now correctly navigates to Menu template parts area (/wp-admin/site-editor.php?p=%2Fpattern&postType=wp_template_part&categoryId=menu)
* FIXED: Menu Designer URL Generation - updated URL construction from incorrect path%2Fpatterns&categoryType parameters to proper p=%2Fpattern&postType format
* FIXED: Menu Designer Reliability - added fallback to window.location.origin when WordPress site URL isn't available from data store, ensuring link always works
* UPDATED: Menu Designer block to version 0.1.3

= 2.3.2 - 11/01/25 =
* CHANGED: Block Directory Structure - migrated Menu Designer block from inc/blocks/ to root blocks/ directory for consistency with WP Native Blocks plugin architecture
* CHANGED: Block Registration - consolidated block registration to use single auto-registration system for all native blocks in blocks/ directory
* CHANGED: Code Organization - removed duplicate block registration code from functions.php, now using unified registration approach
* REMOVED: Legacy Block Registration - removed old block registration system that scanned inc/blocks/ directory
* REMOVED: inc/blocks Directory - removed empty inc/blocks/ directory as all blocks now reside in root blocks/ directory

= 2.3.1 - 10/11/25 =
* NEW: Documentation Protection - added docs/index.php with directory index blocking for security
* CHANGED: .gitignore - added rsync to ignored files list for cleaner repository

= 2.3.0 - 09/25/25 =
* NEW: Featured Post Two Column Pattern - new post-featured-two-column.php pattern displaying a single featured post with image and title on the left, excerpt on the right in a 40/60 column layout with tertiary background for enhanced content presentation
* NEW: Enhanced Post Layout Options - added horizontal two-column layout option to complement existing vertical post card patterns for more flexible and professional content display
* NEW: SVG Upload Support - added SVG file upload capability to media library with proper display handling in admin interface for better icon and graphic management
* NEW: Block Extensions System - added inc/block-extensions.php for enhanced block functionality and future extensibility
* ENHANCED: Pattern Categories - featured post pattern includes both moiraine/posts and moiraine/features categories for better discoverability in pattern inserter
* ENHANCED: WordPress Standards Compliance - updated composer scripts to exclude JavaScript files from PHP coding standards scanning for cleaner development workflow

= 2.2.0 - 09/24/25 =
* ENHANCED: Duotone System Standardization - unified duotone color system across all style variations with consistent naming and color palettes for better theme integration
* ENHANCED: Pattern Duotone Consistency - standardized all patterns to use var:preset|duotone|primary instead of hardcoded color values for improved theme integration and customization flexibility
* ENHANCED: Style Variation Duotone Support - added comprehensive duotone color sets to all style variations (Agency, Consulting, Creator, Publisher, Startup, Studio) with matching brand color schemes
* FIXED: Theme-wide Duotone Integration - replaced hardcoded duotone colors in 8 pattern files with theme preset variables for consistent visual styling across all style variations
* FIXED: Cross-variation Compatibility - ensured duotone effects automatically adapt to active style variation colors for seamless theme switching experience

= 2.1.4 - 09/24/25 =
* NEW: Publisher Style Variation - new elegant publishing-focused style variation with premium typography using Bodoni Moda serif font family for refined content presentation
* NEW: Bodoni Moda Font Integration - added Bodoni Moda regular and italic WOFF2 font files for premium typography experience with optimized file sizes
* NEW: Publisher Color Palette - professional color scheme optimized for content publishing with refined contrast ratios and enhanced readability
* NEW: Typography Preset 10 - new typography preset featuring Bodoni Moda for headings with enhanced readability settings and proper font fallbacks
* ENHANCED: Theme Configuration - updated theme.json with Publisher style variation support, font family definitions, and typography presets integration
* ENHANCED: Documentation - expanded AUCTOR.md with comprehensive Publisher style variation implementation details, usage guidelines, and technical specifications

= 2.1.3 - 01/27/25 =
* NEW: Mobile menu panel pattern - created menu-panel-1-mobile.php with simplified single-column layout optimized for mobile screens with 4 key features (Real-time Analytics, Team Collaboration, Advanced Security, 24/7 Support)
* NEW: Conditional menu loading - added responsive pattern loading to menu-panel-features.html that automatically loads desktop or mobile versions based on screen size using CSS media queries at 782px breakpoint
* ENHANCED: Mobile menu experience with optimized spacing, touch-friendly design, and smaller icons (36px vs 50px) for better mobile usability
* ENHANCED: Responsive design with seamless desktop/mobile menu transitions and proper viewport handling
* FIXED: Mobile menu overflow - resolved mobile menu panel extending beyond viewport boundaries by creating dedicated mobile-optimized pattern
* FIXED: Touch interaction improvements with reduced padding and better touch targets for mobile devices
* FIXED: Mobile menu positioning - fixed Menu Designer container positioning on mobile using proper CSS cascade without !important overrides, ensuring mobile menus align correctly within viewport boundaries
* IMPROVED: CSS architecture - cleaned up mobile positioning logic by working with existing layout system rather than fighting it with heavy-handed overrides

= 2.1.2 - 09/24/25 =
* FIXED: Template part pattern reference - fixed parts/menu-mobile-simple.html referencing incorrect pattern slug moiraine/menu-mobile-1 instead of the correct moiraine/mobile-menu-1, which was preventing the mobile menu pattern from loading

= 2.1.1 - 09/23/25 =
* UPDATED: Menu Designer Block dependencies - updated npm dependencies including Playwright (1.55.0 → 1.55.1), Sass (1.93.0 → 1.93.1), and various @cacheable packages for improved performance and security
* ENHANCED: Development tools - enhanced caching and testing dependencies in Menu Designer block development workflow

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
