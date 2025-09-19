# OLLIE.md

Documentation for analyzing and potentially merging the original Ollie theme into Moiraine.

## Overview

This document analyzes the relationship between the original Ollie theme (`~/code/ollie`) and Moiraine, examining merge opportunities and potential conflicts. Moiraine was originally based on Ollie, making this analysis crucial for understanding what has diverged and what could be synchronized.

## Pre-Merge Analysis

### Theme Relationship
- **Ollie**: Original theme by Mike McAlister (101 patterns)
- **Moiraine**: Fork/derivative of Ollie by Jasper Frumau (75 patterns)
- **Current State**: Moiraine has diverged significantly from its Ollie foundation

### Key Differences

#### 1. Pattern Count and Content
- **Ollie**: 101 patterns including unique menu patterns (14 menu-specific patterns)
- **Moiraine**: 75 patterns, missing menu patterns and some recent Ollie additions
- **Unique to Ollie**: Menu card patterns, menu mobile patterns, menu panel patterns

#### 2. Development Tools and Workflow
**Ollie has advanced development infrastructure:**
- `theme-utils.mjs` - Modern Node.js utility for pattern translation and watching
- `package.json` with npm scripts for development workflow
- Translation automation with pattern text extraction
- File watching for development with `npm run dev`

**Moiraine uses simpler approach:**
- Basic Composer setup for PHP linting only
- No automated translation workflow
- No file watching or development utilities

#### 3. Enhanced Functionality in Ollie
- **WooCommerce Integration**: Dedicated WooCommerce stylesheet support
- **Menu Pattern Category**: New `ollie/menu` pattern category for navigation patterns
- **Translation Workflow**: Automated pattern text domain handling
- **Modern Build Tools**: Node.js-based development utilities

#### 4. Style System Differences
**Ollie includes:**
- Typography variations in `styles/typography/` directory
- More comprehensive style variation system
- Better organized block styles

**Moiraine has:**
- Additional `consulting.json` style (not in Ollie)
- Simplified style structure

## Merge Assessment

### ❌ Challenges with Ollie → Moiraine Merge

#### 1. Divergent Development Paths
- **Theme Identity**: Ollie and Moiraine have become distinct products with different branding
- **Licensing Complexity**: Different authors and potentially different licensing requirements
- **Text Domain Conflicts**: All patterns would need text domain conversion (`ollie` → `moiraine`)

#### 2. Technical Complexity
- **Namespace Conflicts**: `Ollie\` vs `Moiraine\` namespaces throughout codebase
- **Pattern Overlap**: Many patterns share names but have diverged in implementation
- **Asset Conflicts**: Different asset organization and naming conventions

#### 3. Maintenance Overhead
- **Ongoing Synchronization**: Would require continuous effort to keep themes aligned
- **Feature Divergence**: Themes are evolving in different directions
- **Version Control Complexity**: Merging would complicate git history and branching

### ✅ Opportunities for Selective Enhancement

#### 1. Development Tooling (Recommended)
**Import Ollie's development infrastructure:**
```bash
# Copy development utilities
cp ~/code/ollie/theme-utils.mjs ~/code/moiraine/
cp ~/code/ollie/package.json ~/code/moiraine/

# Update package.json for Moiraine
sed -i 's/ollie/moiraine/g' ~/code/moiraine/package.json
```

**Benefits:**
- Automated pattern translation workflow
- File watching for development
- Modern Node.js-based build tools

#### 2. Menu Patterns (High Value)
**Ollie's menu patterns fill a gap in Moiraine:**
- 14 unique menu patterns for navigation design
- Menu card, mobile, and panel variations
- New pattern category for better organization

**Implementation Strategy:**
```bash
# Copy menu patterns
cp ~/code/ollie/patterns/menu-*.php ~/code/moiraine/patterns/

# Update text domains and namespaces
find ~/code/moiraine/patterns/menu-*.php -type f -exec sed -i 's/ollie/moiraine/g' {} \;
```

#### 3. WooCommerce Support (Optional)
**Add e-commerce functionality:**
```php
// Add to functions.php
function enqueue_woocommerce_styles() {
    if ( class_exists( 'WooCommerce' ) ) {
        wp_enqueue_style(
            'moiraine-woocommerce-style',
            get_template_directory_uri() . '/assets/styles/woocommerce.css',
            array(),
            wp_get_theme()->get( 'Version' )
        );
    }
}
add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_woocommerce_styles' );
```

#### 4. Typography System Enhancement
**Import Ollie's typography variations:**
```bash
# Copy typography styles
cp -r ~/code/ollie/styles/typography/ ~/code/moiraine/styles/
```

## Recommended Approach: Selective Enhancement

### Phase 1: Development Tooling Integration
1. **Copy Development Infrastructure**
   - Import `theme-utils.mjs` and `package.json`
   - Update configurations for Moiraine branding
   - Set up npm-based development workflow

2. **Benefits**
   - Automated translation handling
   - File watching for development
   - Pattern text extraction

### Phase 2: Menu Pattern Integration
1. **Import Menu Patterns**
   - Copy all 14 menu patterns from Ollie
   - Update text domains and namespaces
   - Add menu pattern category to functions.php

2. **Pattern Categories Update**
```php
'moiraine/menu' => array(
    'label' => __( 'Menu', 'moiraine' ),
),
```

### Phase 3: Template Pattern Integration
1. **Import Template Patterns**
   - Copy all 14 template patterns from Ollie (template-*.php)
   - These are complete template layouts for different page types
   - Include post, page, index, and archive template variations

2. **Template Pattern Categories**
   - `template-post-*`: Single post layout variations (centered, sidebar, wide)
   - `template-page-*`: Page layout variations (centered, sidebar, wide, full)
   - `template-index-*`: Home/index page layouts (grid, list)
   - `template-page-404`: 404 error page layout
   - `template-page-archive`: Archive page layout
   - `template-page-search`: Search results page layout

3. **Implementation Benefits**
   - Complete template layout options for users
   - Professional layout variations (centered, sidebar, wide, full)
   - Enhanced design flexibility beyond basic WordPress templates
   - Template patterns are marked with `Inserter: false` (not visible in pattern inserter)
   - Designed specifically for template creation in Site Editor

### Phase 4: Optional Enhancements
1. **WooCommerce Support** (if e-commerce features desired)
2. **Typography Variations** (for enhanced design flexibility)
3. **Enhanced Block Styles** (if Ollie has newer variations)

## Implementation Commands

### Quick Start: Essential Improvements
```bash
# Backup Moiraine
cp -r ~/code/moiraine ~/code/moiraine-backup-$(date +%Y%m%d)

# Copy development tools
cp ~/code/ollie/theme-utils.mjs ~/code/moiraine/
cp ~/code/ollie/package.json ~/code/moiraine/

# Update package.json for Moiraine
sed -i 's/ollie/moiraine/g' ~/code/moiraine/package.json
sed -i 's/Mike McAlister/Jasper Frumau/g' ~/code/moiraine/package.json

# Copy menu patterns
cp ~/code/ollie/patterns/menu-*.php ~/code/moiraine/patterns/

# Update menu pattern text domains
find ~/code/moiraine/patterns/menu-*.php -type f -exec sed -i 's/ollie/moiraine/g' {} \;

# Copy template patterns
cp ~/code/ollie/patterns/template-*.php ~/code/moiraine/patterns/

# Update template pattern text domains
find ~/code/moiraine/patterns/template-*.php -type f -exec sed -i 's/ollie/moiraine/g' {} \;

# Install development dependencies
cd ~/code/moiraine
npm install
```

### Add Menu Pattern Category
Update `functions.php` to include menu category:
```php
'moiraine/menu' => array(
    'label' => __( 'Menu', 'moiraine' ),
),
```

## Benefits of Selective Enhancement

### 1. Improved Development Workflow
- **Pattern Translation**: Automated text domain handling
- **File Watching**: Real-time development with `npm run dev`
- **Modern Tooling**: Node.js-based utilities

### 2. Enhanced Pattern Library
- **28 Additional Patterns**: 14 menu-focused + 14 template layout patterns
- **Better Organization**: Menu and template pattern categories
- **Layout Flexibility**: Template variations (centered, sidebar, wide, full)
- **Navigation Flexibility**: Mobile, card, and panel menu variations

### 3. Maintained Independence
- **Separate Identity**: Moiraine retains its distinct branding
- **Controlled Integration**: Choose specific enhancements
- **Simplified Maintenance**: Avoid full merge complexity

## Warnings and Considerations

### ❌ Full Merge Not Recommended
- **Complex Integration**: Would require extensive namespace and branding changes
- **Maintenance Burden**: Ongoing synchronization would be challenging
- **Identity Confusion**: Themes have distinct purposes and audiences

### ✅ Selective Enhancement Recommended
- **Targeted Improvements**: Import specific valuable features
- **Maintained Separation**: Keep themes as distinct products
- **Manageable Updates**: Easier to maintain and update

## Implementation Status

### ✅ Completed Enhancements

#### 1. Template Pattern Integration (COMPLETED)
- **Status**: ✅ All 14 template patterns successfully integrated
- **Patterns Added**:
  - `template-post-*`: Single post layout variations (centered, sidebar, wide)
  - `template-page-*`: Page layout variations (centered, sidebar, wide, full)
  - `template-index-*`: Home/index page layouts (grid, list)
  - `template-page-404`: 404 error page layout
  - `template-page-archive`: Archive page layout
  - `template-page-search`: Search results page layout
- **Template Architecture**: ✅ Updated to use clean pattern-based approach matching Ollie architecture
- **Site Editor**: ✅ Template patterns work correctly in Site Editor template creation

#### 2. Header Template Part Fix (COMPLETED)
- **Issue**: ✅ Fixed pattern reference typo in `parts/header.html`
- **Before**: `moiraine/header-light-wth-action-button` (typo)
- **After**: `moiraine/header-light-action-button` (correct)
- **Result**: ✅ Header now properly loads logo, navigation menu, and action button

#### 3. Template Parts Verification (COMPLETED)
- **Header**: ✅ Fixed and working correctly
- **Footer**: ✅ Verified working (references `moiraine/footer-light`)
- **Sidebar**: ✅ Verified working (direct HTML content)

#### 4. Development Tooling Integration (COMPLETED)
- **Status**: ✅ Node.js development infrastructure fully integrated
- **Implemented**:
  - `theme-utils.mjs`: ✅ Automated pattern translation and file watching utilities
  - `package.json`: ✅ NPM configuration with Moiraine-specific settings
  - **Scripts Available**:
    - `npm run dev`: ✅ Watch pattern files for changes and auto-escape for translations
    - `npm run translate:patterns`: ✅ Process pattern files for translation readiness
- **Text Domain**: ✅ Properly configured for `moiraine`
- **Author**: ✅ Updated to Jasper Frumau

#### 5. Menu Pattern Integration (COMPLETED)
- **Status**: ✅ All 14 menu patterns successfully integrated
- **Patterns Added**:
  - `menu-card-*`: ✅ 4 card-style menu patterns
  - `menu-mobile-*`: ✅ 6 mobile-responsive menu patterns
  - `menu-panel-*`: ✅ 4 panel-style menu patterns
- **Pattern Category**: ✅ `moiraine/menu` category added to functions.php
- **Text Domain**: ✅ All patterns properly use `moiraine` text domain

#### 6. WooCommerce Integration (COMPLETED)
- **Status**: ✅ Enhanced e-commerce support fully implemented
- **Features**:
  - **Automatic Stylesheet**: ✅ WooCommerce-specific CSS loads when plugin is active
  - **Demo Content**: ✅ WooCommerce cart and checkout pages included in demo
  - **E-commerce Ready**: ✅ Theme optimized for online stores

## Testing Checklist

Current implementation status:

- [x] All template patterns load without errors
- [x] Template patterns work in Site Editor template creation
- [x] Header template part fixed and working
- [x] Footer template part verified working
- [x] Sidebar template part verified working
- [x] Template structure properly references template patterns
- [x] All menu patterns load without errors
- [x] Menu pattern category displays correctly in block editor
- [x] Development tools work (`npm run dev`)
- [x] Translation workflow functions properly
- [x] WooCommerce integration works when plugin is active
- [x] WordPress coding standards compliance
- [x] Site performance remains optimal
- [x] No namespace conflicts or PHP errors

## Conclusion

**Status**: ✅ **SELECTIVE ENHANCEMENT COMPLETED**

All recommended enhancements have been successfully implemented:

### ✅ Completed Integrations:
1. **Development tooling** ✅ (high impact, low risk) - npm scripts, file watching, translation automation
2. **Menu patterns** ✅ (fills significant gap in Moiraine) - 14 navigation patterns with dedicated category
3. **Template patterns** ✅ (provides complete layout system for Site Editor) - 14 template layout patterns
4. **WooCommerce integration** ✅ (enhanced e-commerce support) - automatic stylesheet loading
5. **Template parts verification** ✅ (critical infrastructure) - header, footer, sidebar all functional

### 🔄 Optional Future Enhancements:
- **Typography system** (optional, for enhanced design flexibility) - Ollie's typography variations available for future integration

**Result**: Moiraine now has all the benefits of Ollie's enhancements while maintaining its independence and distinct identity. The selective enhancement approach has been successful, avoiding the complexity and maintenance overhead of a full merge.

**Moiraine Enhancement Summary**:
- **+28 New Patterns**: 14 menu patterns + 14 template patterns
- **+Modern Development Workflow**: npm-based tooling with file watching and translation automation
- **+E-commerce Ready**: WooCommerce integration for online stores
- **+Maintained Identity**: Distinct Moiraine branding and independence preserved