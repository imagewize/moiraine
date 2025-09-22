# Menu Designer Block - Implementation Plan

## Overview
This document outlines the plan to integrate the Human Made Mega Menu Block functionality into our custom `menu-designer` block for the Moiraine theme. We'll use the cloned submodule as a reference while building our own implementation using `@wordpress/create-block` workflow.

## Project Structure
- **Source Code**: `hm-mega-menu-block/` (submodule, reference only)
- **Development**: `inc/blocks/menu-designer/` (our custom block)
- **Patterns**: `patterns/menu-*` (existing Moiraine menu patterns)
- **Text Domain**: `moiraine` (theme text domain)

## Implementation Plan

### Phase 1: Analysis & Setup ✅ COMPLETED
- [x] Analyze HM Mega Menu Block structure and functionality
- [x] Document key components and features
- [x] Review existing Moiraine menu patterns for integration opportunities
- [x] Set up development environment in `inc/blocks/menu-designer/`

### Phase 2: Core Block Development 🔄 IN PROGRESS
- [ ] **Block Registration**
  - [ ] Update `block.json` with mega menu specific attributes
  - [ ] Define block supports and settings
  - [ ] Set up proper text domain (`moiraine`)

- [ ] **Block Editor Components**
  - [ ] Port mega menu editor functionality from HM block
  - [ ] Implement template part selector interface
  - [ ] Add mega menu configuration options
  - [ ] Integrate with WordPress navigation system

- [ ] **Frontend Rendering**
  - [ ] Implement mega menu display logic
  - [ ] Add responsive behavior and styling
  - [ ] Ensure accessibility compliance
  - [ ] Handle template part rendering

### Phase 3: Template Part Integration
- [ ] **Menu Pattern Integration**
  - Convert existing `patterns/menu-*` to template parts
  - Create new mega menu specific template parts
  - Implement pattern/template part selector in block

- [ ] **Template Part Management**
  - Add template part creation workflow
  - Implement template part assignment to menu items
  - Handle template part preview in editor

### Phase 4: Styling & UX
- [ ] **Theme Integration**
  - Align styles with Moiraine design system
  - Use theme.json color palette and typography
  - Implement block style variations

- [ ] **User Experience**
  - Simplify configuration interface
  - Add helpful hints and documentation
  - Implement drag-and-drop functionality for menu items

### Phase 5: Advanced Features
- [ ] **Enhanced Functionality**
  - Add animation and transition options
  - Implement mobile-specific mega menu behavior
  - Add keyboard navigation support

- [ ] **Performance Optimization**
  - Optimize loading and rendering
  - Implement caching where appropriate
  - Minimize CSS and JS output

## Technical Implementation Details

### Block Structure (@wordpress/create-block)
```
inc/blocks/menu-designer/
├── src/
│   └── menu-designer/
│       ├── block.json          # Block configuration (source)
│       ├── index.js            # Block registration
│       ├── edit.js             # Editor interface
│       ├── save.js             # Frontend save
│       ├── style.scss          # Frontend block styles
│       ├── editor.scss         # Editor-only styles
│       └── view.js             # Frontend interactivity
├── build/                      # Compiled assets (auto-generated)
│   ├── blocks-manifest.php     # WordPress block manifest
│   └── menu-designer/          # Compiled block assets
│       ├── block.json          # Compiled block config
│       ├── index.js            # Compiled editor script
│       ├── index.css           # Compiled editor styles
│       ├── style-index.css     # Compiled frontend styles
│       ├── view.js             # Compiled frontend script
│       └── *.asset.php         # Asset dependency files
├── package.json                # NPM dependencies & scripts
└── menu-designer.php           # Block registration for WordPress
```

### Key Features to Port
1. **Mega Menu Block Core**
   - Template part selection
   - Menu item association
   - Responsive behavior

2. **Editor Interface**
   - Template part picker
   - Menu configuration panel
   - Live preview functionality

3. **Frontend Functionality**
   - Dropdown/mega menu display
   - Template part rendering
   - Accessibility features

### Integration with Existing Patterns
- **Menu Cards** (`patterns/menu-cards.php`) → Template part
- **Menu Mobile** (`patterns/menu-mobile.php`) → Mobile mega menu
- **Menu Panels** (`patterns/menu-panels-*.php`) → Various mega menu layouts

## Development Workflow

### Setup
```bash
cd inc/blocks/menu-designer
npm install
npm start  # Development mode with file watching
```

### Build Process (@wordpress/scripts)
```bash
npm run build         # Production build (compiles src/ to build/)
npm run start         # Development mode with file watching
npm run lint:js       # JavaScript linting
npm run lint:css      # CSS/SCSS linting
npm run format        # Code formatting
npm run packages-update  # Update WordPress packages
```

### Build System Notes
- **Source files**: Located in `src/menu-designer/` - **EDIT THESE FILES ONLY**
- **Compiled output**: Auto-generated in `build/menu-designer/` - **NEVER EDIT THESE**
- **Block manifest**: `build/blocks-manifest.php` (for WordPress registration)
- **Asset dependencies**: Auto-generated `.asset.php` files for dependency management
- **File watching**: `npm start` watches for changes and rebuilds automatically
- **Production builds**: Run `npm run build` before committing changes
- **CRITICAL**: Never edit build files directly - always edit source files in `src/menu-designer/` and build

### Block Registration
Blocks must be registered with WordPress using the `register_block_type()` function. The menu-designer block uses the modern block manifest approach:

**Current Implementation** (`menu-designer.php`):
```php
function moiraine_menu_designer_block_init() {
    // Modern WordPress 6.8+ method (most efficient)
    if ( function_exists( 'wp_register_block_types_from_metadata_collection' ) ) {
        wp_register_block_types_from_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
        return;
    }

    // WordPress 6.7+ fallback
    if ( function_exists( 'wp_register_block_metadata_collection' ) ) {
        wp_register_block_metadata_collection( __DIR__ . '/build', __DIR__ . '/build/blocks-manifest.php' );
    }

    // Register individual blocks from manifest
    $manifest_data = require __DIR__ . '/build/blocks-manifest.php';
    foreach ( array_keys( $manifest_data ) as $block_type ) {
        register_block_type( __DIR__ . "/build/{$block_type}" );
    }
}
add_action( 'init', 'moiraine_menu_designer_block_init' );
```

**Alternative Methods**:

*Single Block Registration*:
```php
function register_menu_designer_block() {
    register_block_type( __DIR__ . '/inc/blocks/menu-designer/build/menu-designer/block.json' );
}
add_action( 'init', 'register_menu_designer_block' );
```

*Auto-scan Multiple Blocks*:
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

### Testing
- Test in WordPress Site Editor
- Verify template part integration
- Test responsive behavior
- Validate accessibility

## Migration Strategy

### From HM Mega Menu Block
1. **Code Analysis**: Study HM block structure and identify core components
2. **Selective Porting**: Port relevant functionality while adapting to Moiraine theme
3. **Text Domain Update**: Replace all text domains with `moiraine`
4. **Style Integration**: Adapt styles to match Moiraine design system

### Pattern Integration
1. **Convert Patterns**: Transform existing menu patterns to template parts
2. **Template Part Creation**: Build new mega menu specific template parts
3. **Block Integration**: Connect template parts to menu designer block

## Success Criteria
- [ ] Block integrates seamlessly with Moiraine theme
- [ ] Existing menu patterns work as template parts
- [ ] User-friendly interface for creating mega menus
- [ ] Responsive and accessible implementation
- [ ] Performance optimized
- [ ] Follows WordPress coding standards

## Next Steps
1. Begin Phase 1: Analyze HM Mega Menu Block code structure
2. Set up development environment
3. Start porting core functionality to menu-designer block
4. Test integration with existing Moiraine patterns

## Notes
- Keep HM Mega Menu Block submodule as reference only
- All development happens in `inc/blocks/menu-designer/`
- Use Moiraine theme text domain throughout
- Leverage existing Moiraine design system and patterns
- Follow WordPress block development best practices

## Previous Attempts & Lessons Learned
**Note**: We are currently on the `menu-builder` branch where previous attempts were made to implement similar functionality. The previous approach had several issues:
- Successfully converted patterns into template parts
- Could not get template parts category to load properly
- Encountered persistent JavaScript issues and errors
- Implementation became overly complicated

This new approach with the `menu-designer` block using `@wordpress/create-block` provides a cleaner foundation and more structured development workflow. We can reference the previous work in the `menu-builder` branch for insights on what to avoid and any useful converted template parts.

---

## Phase 1 Analysis Results ✅

### HM Mega Menu Block Structure Analysis

**Plugin Location**: `inc/blocks/hm-mega-menu-block/`

#### Core Components Identified:

1. **Block Configuration** (`src/block.json`):
   - **Name**: `hm-blocks/hm-mega-menu-block`
   - **Parent**: `core/navigation` (integrates with navigation blocks)
   - **API Version**: 3
   - **Text Domain**: `hm-mega-menu-block` (needs change to `moiraine`)

2. **Block Attributes**:
   ```json
   {
     "label": "string",           // Menu item label
     "labelColor": "string",      // Custom label color
     "description": "string",     // Menu description
     "menuSlug": "string",        // Template part slug
     "justifyMenu": "string",     // left|center|right
     "width": "string"           // content|wide|full
   }
   ```

3. **Template Part Integration**:
   - Registers 'menu' template part area
   - Uses `block_template_part($menu_slug)` for rendering
   - Template parts filtered by `area === 'menu'`

4. **Editor Interface** (`src/edit.js`):
   - **ComboboxControl**: Template part selector
   - **ColorPalette**: Label color picker
   - **ToggleGroupControl**: Justification options (left/center/right)
   - **ToggleGroupControl**: Width options (content/wide/full)
   - **Site Editor Integration**: Direct link to template part management

5. **Frontend Functionality**:
   - **WordPress Interactivity API**: Modern interactive behavior
   - **Accessibility**: ARIA attributes, keyboard navigation (Escape key)
   - **Click Handling**: Outside click detection, focus management
   - **Responsive**: Width and justification controls

6. **Dependencies**:
   ```json
   {
     "@wordpress/icons": "^10.17.0",
     "@wordpress/interactivity": "^6.11.0"
   }
   ```

### Moiraine Menu Patterns Analysis

**Pattern Count**: 14 menu patterns organized in 3 categories

#### Pattern Categories:
1. **Menu Cards** (4 patterns): `menu-card-1.php` to `menu-card-4.php`
   - Simple card layouts with icons and text
   - Perfect for dropdown menus
   - Already tagged with `Block Types: core/template-part/menu`

2. **Menu Mobile** (6 patterns): `menu-mobile-1.php` to `menu-mobile-6.php`
   - Mobile-optimized navigation layouts
   - Responsive design considerations
   - Various complexity levels

3. **Menu Panels** (4 patterns): `menu-panel-1.php` to `menu-panel-4.php`
   - Complex mega menu layouts
   - Multi-column designs with features, case studies
   - Rich content sections

#### Key Pattern Features:
- **Moiraine Design System**: Uses theme colors, spacing, typography
- **Block Structure**: Built with WordPress blocks (groups, columns, paragraphs)
- **Translation Ready**: Uses `<?php esc_html_e()` functions
- **Category**: All tagged with `moiraine/menu`
- **Template Part Ready**: Block types already set for template parts

### Menu Designer Block Environment

**Location**: `inc/blocks/menu-designer/`

#### Current Setup:
- ✅ **@wordpress/create-block** structure in place
- ✅ **Node.js environment** configured with npm scripts
- ✅ **Development workflow** ready (`npm start`, `npm run build`)
- ✅ **Package dependencies** installed
- ✅ **Build system** operational

#### Development Commands Available:
```bash
cd inc/blocks/menu-designer
npm start      # Development mode with file watching
npm run build  # Production build
npm run lint   # Code linting
npm run format # Code formatting
```

### Current Todo List Status

**Phase 2 Tasks Ready** (11 tasks queued):
1. Update block.json with mega menu specific attributes
2. Define block supports and settings
3. Set up proper text domain (moiraine)
4. Port mega menu editor functionality from HM block
5. Implement template part selector interface
6. Add mega menu configuration options
7. Integrate with WordPress navigation system
8. Implement mega menu display logic
9. Add responsive behavior and styling
10. Ensure accessibility compliance
11. Handle template part rendering

### Next Steps
- Begin Phase 2: Core Block Development
- Start with block.json configuration updates
- Port editor interface components systematically
- Test integration with existing Moiraine patterns