# Navigation System: Problem Analysis & Solutions

## Current Situation

After 4+ hours of attempting to fix navigation issues with CSS, we've identified fundamental architectural problems that cannot be solved with styling alone.

## Core Problems

### 1. WordPress Navigation Block Limitations
- **Desktop dropdowns**: Can't display multi-column mega menus with rich content
- **Mobile submenu chevrons**: Always appear below menu items instead of inline (CSS can't fix this)
- **Mobile submenu behavior**: Limited control over show/hide animations and interactions
- **Styling constraints**: Core WordPress CSS fights custom styles, requiring excessive `!important` overrides

### 2. Menu Designer Block Limitations
- **Desktop-only design**: Originally built for mega menu dropdowns on desktop
- **No mobile experience**: Doesn't handle mobile hamburger menu or collapsible submenus
- **Missing hamburger icon**: No built-in mobile navigation toggle
- **Template-based**: Displays template parts (rich content), not navigational menu structures

### 3. Current Pattern Problems
The `header-light-with-hamburger-menu.php` pattern uses:
- WordPress Navigation block with hamburger (`overlayMenu: "always"`)
- Menu Designer blocks inserted into navigation for mega menus
- CSS hacks to position dropdowns and style mobile menus

**This approach fails because:**
- Navigation block controls menu structure (can't customize submenu chevron positioning)
- Menu Designer is a dropdown overlay, not a hierarchical menu system
- Mobile and desktop require completely different UX patterns

## Solution Options

### Option 1: Build Custom Navigation Block (RECOMMENDED)

Create a purpose-built navigation block that handles both desktop and mobile properly.

**Pros:**
- ✅ Full control over HTML structure and submenu chevron positioning
- ✅ Proper mobile hamburger with collapsible submenus
- ✅ Desktop mega menu support with multi-column layouts
- ✅ Single source of truth for menu data (WordPress navigation menus)
- ✅ Clean, maintainable code without CSS hacks
- ✅ Accessible keyboard navigation and screen reader support
- ✅ Matches exact design requirements

**Cons:**
- ❌ Development time: 8-12 hours for full implementation
- ❌ Need to maintain custom code
- ❌ Requires JavaScript for mobile interactions

**Implementation Steps:**

1. **Create Block Structure** (1-2 hours)
   ```bash
   cd trellis
   trellis vm shell --workdir /srv/www/demo.imagewize.com/current/web/app/themes/moiraine -- \
     wp acorn sage-native-block:create moiraine-navigation --template=basic --force
   ```

2. **Build Menu Data Provider** (2-3 hours)
   - Create `src/render.php` to fetch WordPress menu items
   - Transform menu structure into nested array with depth tracking
   - Add menu selector in block inspector controls
   - Support custom labels, icons, descriptions per menu item

3. **Desktop Mega Menu Layout** (2-3 hours)
   - Horizontal menu items with hover dropdowns
   - Multi-column mega menu support (configurable columns per item)
   - Allow template parts for rich content in mega menus
   - Position dropdowns with proper z-index and alignment
   - Add Menu Designer block integration for mega menu content

4. **Mobile Hamburger Experience** (2-3 hours)
   - SVG hamburger icon button (configurable size/color)
   - Full-screen or side-panel mobile menu
   - Collapsible submenu items with chevron buttons
   - Chevron positioned inline (right-aligned) with menu item text
   - Smooth CSS animations for open/close states
   - Body scroll lock when menu is open

5. **Interactivity API Integration** (1-2 hours)
   - Use WordPress Interactivity API (like Menu Designer block)
   - Handle hamburger toggle, submenu expand/collapse
   - Keyboard navigation (Escape to close, Arrow keys for submenus)
   - Focus management and accessibility attributes
   - Click outside to close

**Key Features:**
- **Data source**: WordPress Navigation Menus (wp_nav_menu)
- **Desktop**: Horizontal menu with mega menu dropdowns
- **Mobile**: Hamburger icon → full menu with collapsible submenus
- **Submenu chevrons**: Positioned inline, right-aligned on mobile
- **Rich content**: Support Menu Designer template parts in mega menus
- **Responsive**: Breakpoint-based desktop/mobile switching (default: 782px)

**File Structure:**
```
blocks/moiraine-navigation/
├── src/
│   ├── edit.js          # Block editor UI with menu selector
│   ├── view.js          # Interactivity API (hamburger, submenus)
│   ├── render.php       # Server-side rendering (menu data)
│   ├── style.scss       # Frontend styles
│   └── editor.scss      # Editor styles
├── block.json           # Block metadata and attributes
└── moiraine-navigation.php
```

### Option 2: Enhance Menu Designer Block for Mobile

Extend the existing Menu Designer block to support mobile navigation.

**Pros:**
- ✅ Builds on existing codebase (Menu Designer already works on desktop)
- ✅ Less development time than full custom navigation (4-6 hours)
- ✅ Reuses Interactivity API patterns already in place

**Cons:**
- ❌ Still requires WordPress Navigation block as wrapper (menu structure dependency)
- ❌ Doesn't solve submenu chevron positioning issue on mobile
- ❌ Creates confusion: "Menu Designer" implies mega menus, not primary navigation
- ❌ Architectural mismatch (dropdown overlay vs. hierarchical navigation)

**Implementation Steps:**

1. **Add Mobile Mode Attribute** (1 hour)
   - Add `mobileMode` boolean attribute to block
   - Toggle between "mega menu" (desktop) and "navigation" (mobile) modes
   - Update inspector controls with mode selector

2. **Build Mobile Menu Template** (2-3 hours)
   - Alternative template in `render.php` for mobile mode
   - Fetch WordPress menu items (same as custom nav block)
   - Render as hierarchical list with collapsible submenus
   - Add chevron buttons inline with menu items

3. **Update Interactivity API** (1-2 hours)
   - Extend `view.js` to handle submenu expand/collapse
   - Keep existing mega menu toggle logic for desktop
   - Add mobile-specific handlers (chevron clicks)

**Why This Is Less Ideal:**
- The Menu Designer block was designed for **mega menu overlays**, not **primary navigation**
- Using it for both creates architectural confusion
- Still doesn't solve the core WordPress Navigation block submenu chevron issue
- Requires both Menu Designer AND Navigation blocks working together

### Option 3: Use WordPress Navigation Block with Heavy CSS Overrides

Continue trying to fix issues with CSS on the current pattern.

**Pros:**
- ✅ No custom block development
- ✅ Uses core WordPress functionality

**Cons:**
- ❌ We already spent 4+ hours on this approach and failed
- ❌ Cannot fix mobile submenu chevron positioning (HTML structure limitation)
- ❌ Excessive `!important` overrides create maintenance nightmares
- ❌ Future WordPress updates may break custom CSS
- ❌ Limited control over mega menu layouts
- ❌ No clean way to integrate Menu Designer content

**Why This Doesn't Work:**
WordPress Navigation block markup for submenus:
```html
<li class="wp-block-navigation-item">
  <button class="wp-block-navigation-item__content">
    <span class="wp-block-navigation-item__label">Menu Item</span>
  </button>
  <span class="wp-block-navigation__submenu-icon">
    <svg>...</svg> <!-- Chevron appears here, AFTER button -->
  </span>
  <ul class="wp-block-navigation__submenu-container">...</ul>
</li>
```

**The problem**: The chevron SVG is in a separate `<span>` outside the `<button>`. On mobile, this causes the chevron to wrap to a new line. CSS cannot move the chevron inside the button or reflow it inline.

**To fix this properly**, you need:
```html
<button class="menu-item__toggle">
  <span class="menu-item__label">Menu Item</span>
  <svg class="menu-item__chevron">...</svg> <!-- Inline -->
</button>
```

This requires **custom HTML**, which means a **custom block**.

### Option 4: Third-Party Navigation Plugin

Use an existing WordPress navigation plugin with mega menu support.

**Pros:**
- ✅ Maintained by plugin developers
- ✅ Feature-complete (mobile, mega menus, etc.)
- ✅ No custom development

**Cons:**
- ❌ Adds plugin dependency (bloat)
- ❌ May not integrate well with block theme patterns
- ❌ Limited customization to match Moiraine design
- ❌ Often requires paid license for mega menu features
- ❌ Conflicts with block-based workflow

**Examples:**
- Max Mega Menu
- Quad Menu
- WP Mega Menu

**Why We Don't Recommend This:**
- Moiraine is a modern block theme
- Third-party plugins use shortcodes or custom post types (not block patterns)
- Harder to version control and customize
- Defeats the purpose of a custom theme

## Recommendation: Build Custom Navigation Block

### Why This Is The Right Solution

1. **Solves All Core Problems**
   - ✅ Mobile submenu chevrons positioned inline (right-aligned)
   - ✅ Desktop mega menus with multi-column layouts
   - ✅ Full control over hamburger icon size and behavior
   - ✅ Clean, semantic HTML without CSS hacks

2. **Long-Term Benefits**
   - ✅ Reusable across all Moiraine-based sites
   - ✅ Maintainable codebase (no brittle CSS overrides)
   - ✅ Future-proof (not dependent on core WordPress markup)
   - ✅ Performance optimized (only loads needed styles)

3. **Integration with Menu Designer**
   - ✅ Custom nav block can include Menu Designer blocks in mega menus
   - ✅ Keep rich content capability for desktop dropdowns
   - ✅ Clean separation: Nav block = structure, Menu Designer = content

4. **Developer Experience**
   - ✅ Built with modern WordPress tools (Interactivity API, block.json)
   - ✅ Follows Moiraine theme architecture (Sage Native Blocks)
   - ✅ Well-documented and testable

### Estimated Timeline

| Task | Time | Priority |
|------|------|----------|
| Block scaffolding & setup | 1-2 hours | High |
| Menu data provider (PHP) | 2-3 hours | High |
| Desktop mega menu layout | 2-3 hours | High |
| Mobile hamburger & submenus | 2-3 hours | High |
| Interactivity API (JS) | 1-2 hours | High |
| Styling & polish | 1-2 hours | Medium |
| Testing & documentation | 1 hour | Medium |
| **TOTAL** | **10-16 hours** | |

### Implementation Roadmap

#### Phase 1: Core Navigation (MVP)
**Goal**: Basic menu with desktop/mobile modes
- Menu selector (choose WordPress menu)
- Desktop: Horizontal menu items
- Mobile: Hamburger icon + collapsible menu
- Submenu chevrons positioned correctly

#### Phase 2: Mega Menu Support
**Goal**: Rich desktop dropdowns
- Multi-column layout options per menu item
- Integration with Menu Designer template parts
- Dropdown positioning and styling

#### Phase 3: Polish & Accessibility
**Goal**: Production-ready
- Keyboard navigation
- Screen reader support (ARIA labels, roles)
- Focus management
- Animation polish

## Custom Navigation Block: Implementation Status

### ✅ COMPLETED (As of November 2025)

The custom navigation block (`moiraine/nav-builder`) has been fully implemented with all core features:

#### Block Structure
- **Location**: `/demo/web/app/themes/moiraine/blocks/nav-builder/`
- **Source files**: Organized in `src/` directory (block.json, edit.js, render.php, view.js, style.scss, editor.scss)
- **Build system**: WordPress Scripts with ES modules support

#### Core Features Implemented

1. **Menu Data Provider** ✅
   - Server-side rendering in `render.php` fetches WordPress menus via `wp_get_nav_menu_items()`
   - Hierarchical menu tree builder (`build_menu_tree()`) transforms flat menu items into nested structure
   - Supports menu item attributes (title, URL, target, classes, description, aria-title)

2. **Desktop Navigation** ✅
   - **Two display modes** via `desktopStyle` attribute:
     - `"hamburger"`: Shows hamburger icon on all screen sizes (mobile-first approach)
     - `"horizontal"`: Shows horizontal menu on desktop (≥782px), hamburger on mobile (<782px)
   - Horizontal menu items with flexbox layout
   - Desktop dropdown submenus on hover (CSS-based)
   - Responsive breakpoint: 782px (WordPress standard)

3. **Mobile Hamburger Menu** ✅
   - Hamburger icon with configurable size (24-48px, default: 32px)
   - Configurable position: left or right (RTL languages auto-reverse)
   - Full-screen overlay with slide-in panel (max-width: 400px)
   - Close button and click-outside-to-close functionality
   - Body scroll lock when menu is open

4. **Mobile Submenus** ✅
   - Collapsible submenu items with chevron toggle buttons
   - Chevrons positioned inline, right-aligned with menu item text
   - Smooth CSS animations (max-height transition)
   - Nested submenu support (one level deep)

5. **Interactivity API** ✅
   - WordPress Interactivity API implementation (`@wordpress/interactivity`)
   - Actions: `toggleMobileMenu`, `closeMobileMenu`, `toggleSubmenu`, `handleKeydown`
   - State management: `isOpen`, `isSubmenuOpen`, `openSubmenus`
   - Keyboard navigation: Escape key closes mobile menu
   - Accessibility: ARIA labels, aria-expanded, aria-controls

6. **Styling** ✅
   - SCSS architecture with BEM-like class naming
   - CSS custom properties for hamburger size and breakpoint
   - RTL language support (Arabic, Hebrew)
   - WordPress color/typography integration
   - Desktop hover dropdowns with smooth transitions
   - Mobile overlay with backdrop and slide animation

7. **Editor Experience** ✅
   - React-based editor component with Inspector Controls
   - Menu selector (fetches all WordPress menus)
   - Settings panels: Menu, Hamburger, Responsive, Display
   - Block Controls toolbar for quick hamburger position toggle
   - Editor preview notice showing current configuration

#### Block Attributes

| Attribute | Type | Default | Description |
|-----------|------|---------|-------------|
| `menuId` | number | 0 | WordPress menu ID to display |
| `desktopStyle` | string | "hamburger" | Desktop display mode: "hamburger" or "horizontal" |
| `hamburgerPosition` | string | "right" | Hamburger icon position: "left" or "right" |
| `hamburgerSize` | number | 32 | Hamburger icon size in pixels (24-48) |
| `mobileBreakpoint` | number | 782 | Breakpoint in pixels for mobile/desktop switch |
| `showLabels` | boolean | true | Display text labels for menu items |
| `backgroundColor` | string | - | Background color (WordPress color palette) |
| `textColor` | string | - | Text color (WordPress color palette) |

#### File Structure

```
blocks/nav-builder/
├── build/                     # Compiled assets (generated)
├── node_modules/              # Dependencies
├── src/
│   ├── block.json            # Block metadata and attributes ✅
│   ├── index.js              # Block registration entry point ✅
│   ├── edit.js               # Editor component (React) ✅
│   ├── render.php            # Server-side rendering ✅
│   ├── view.js               # Interactivity API (frontend JS) ✅
│   ├── style.scss            # Frontend styles ✅
│   └── editor.scss           # Editor styles ✅
├── package.json              # NPM dependencies ✅
├── package-lock.json         # Lockfile
└── IMPLEMENTATION-PLAN.md    # Original implementation guide
```

### 🐛 Current Issue: Desktop Menu Items Not Visible

**Problem**: When `desktopStyle="hamburger"`, desktop menu items load in HTML but are not visible.

**Root Cause**: In [style.scss:10-12](../blocks/nav-builder/src/style.scss#L10-L12), the `.nav-builder__desktop` container is set to `display: none` by default. It only becomes visible when:

1. The block has the `desktop-horizontal` class (which is applied when `desktopStyle="horizontal"`)
2. AND the viewport is ≥782px

**Current CSS Logic**:

```scss
.nav-builder__desktop {
	display: none; // Hidden by default
}

&.desktop-horizontal {
	.nav-builder__desktop {
		@media (min-width: 782px) {
			display: block; // Only shown on desktop when horizontal mode
		}
	}
}
```

**HTML Classes Applied**:

Based on your HTML output, the nav has these classes:
```html
<nav class="moiraine-nav-builder desktop-hamburger hamburger-right">
```

**Why Menu Items Don't Show**:
- The block has `desktop-hamburger` class (not `desktop-horizontal`)
- Therefore, the CSS rule for showing desktop menu never applies
- Desktop menu items remain `display: none` even though they exist in the DOM

**Expected Behavior**:

The `desktopStyle` attribute offers two modes:

1. **"hamburger" mode** (`desktop-hamburger` class):
   - Hamburger icon visible on ALL screen sizes (mobile + desktop)
   - Desktop horizontal menu hidden (`display: none`)
   - Mobile overlay menu works on all devices
   - **Use case**: Mobile-first sites, apps, or when you always want hamburger UI

2. **"horizontal" mode** (`desktop-horizontal` class):
   - Hamburger icon visible ONLY on mobile (<782px)
   - Desktop horizontal menu visible on desktop (≥782px)
   - Mobile overlay menu for small screens
   - **Use case**: Traditional website navigation (desktop menu + mobile hamburger)

**Solution**:

To see desktop menu items, change the block's `desktopStyle` attribute from `"hamburger"` to `"horizontal"` in the block settings.

**In the WordPress editor**:
1. Select the Nav Builder block
2. Open block settings (sidebar)
3. Look for "Desktop Style" setting (may need to be added to edit.js if not present)
4. Change from "Hamburger" to "Horizontal"

**Verification**:

After changing to horizontal mode, the HTML should show:
```html
<nav class="moiraine-nav-builder desktop-horizontal hamburger-right">
```

And the desktop menu will be visible at screen widths ≥782px.

### 📋 Remaining Work

1. **Desktop Mega Menu Support** (Phase 7) - Not yet implemented
   - Multi-column layout options per menu item
   - Integration with `moiraine/mega-menu` blocks
   - InnerBlocks support for mega menu content
   - Advanced dropdown positioning and styling
   - Estimated time: 3-4 hours

2. **Documentation & Patterns** (Phase 8) - Partially complete
   - ✅ IMPLEMENTATION-PLAN.md created
   - ❌ User-facing documentation needed
   - ❌ Header pattern examples needed
   - ❌ Mega menu usage examples needed
   - Estimated time: 1 hour

3. **Editor Enhancement**
   - Add "Desktop Style" toggle to Inspector Controls (if not already present)
   - Visual preview of desktop/mobile modes in editor
   - Better onboarding (show instructions when no menu selected)

### 🎯 Recommendation

**For traditional website navigation** (horizontal menu on desktop, hamburger on mobile):
- Set `desktopStyle="horizontal"` in block settings
- This will show the horizontal menu items on desktop (≥782px)
- Mobile users (<782px) will see the hamburger icon

**For mobile-first navigation** (hamburger on all devices):
- Keep `desktopStyle="hamburger"` (current setting)
- This is intentional behavior - hamburger menu works on all screen sizes
- Desktop users will click the hamburger to reveal the slide-in menu panel

---

## Summary: What Changed from Original WordPress Navigation Block

### Problems Solved ✅

1. **Mobile submenu chevrons now positioned inline** (right-aligned)
   - WordPress Navigation block: Chevron appeared below menu items (unfixable with CSS)
   - Nav Builder: Custom HTML structure places chevron inside menu item header

2. **Full control over desktop mega menus**
   - WordPress Navigation block: Limited dropdown styling, fights custom CSS
   - Nav Builder: Custom dropdown system with hover animations, ready for mega menu integration

3. **Consistent mobile hamburger experience**
   - WordPress Navigation block: `overlayMenu: "always"` has limited customization
   - Nav Builder: Full control over overlay, slide-in panel, body scroll lock, animations

4. **Clean, maintainable code**
   - WordPress Navigation block: Required excessive `!important` overrides
   - Nav Builder: Semantic BEM-style classes, CSS custom properties, no hacks

5. **Flexible desktop modes**
   - WordPress Navigation block: Either always overlay or always horizontal
   - Nav Builder: Choose between horizontal (desktop) + hamburger (mobile) OR hamburger-only (all devices)

### Architecture Comparison

| Feature | WordPress Navigation Block | Nav Builder (Custom) |
|---------|---------------------------|----------------------|
| **Data Source** | Block-based menu (navigation blocks) | WordPress menus (wp_nav_menu) |
| **Rendering** | Client-side (JavaScript) | Server-side (PHP) |
| **Mobile Chevrons** | ❌ Separate span, wraps to new line | ✅ Inside button, inline |
| **Desktop Dropdowns** | Basic CSS, limited control | Full custom styling |
| **Mobile Overlay** | Built-in but limited | Custom with full control |
| **Mega Menu Support** | ❌ Not supported | ✅ Ready for integration |
| **RTL Support** | Basic | Full (auto-reverse hamburger) |
| **Interactivity** | Core JavaScript | WordPress Interactivity API |
| **Customization** | Limited, requires CSS overrides | Full control via attributes |
| **Build System** | WordPress core | WordPress Scripts (ES modules) |

### Development Time Investment

- **Initial implementation**: 10-12 hours (Phases 1-6)
- **Mega menu support**: 3-4 hours (Phase 7, not yet implemented)
- **Documentation**: 1 hour (Phase 8, in progress)
- **Total**: ~14-17 hours

### Long-term Benefits

1. **Reusability**: Can be used across all Moiraine-based sites
2. **Maintainability**: No brittle CSS overrides that break with WordPress updates
3. **Future-proof**: Custom HTML structure not dependent on core WordPress markup
4. **Performance**: Optimized bundle size, only loads needed styles
5. **Extensibility**: Ready for mega menu integration, custom menu item types, advanced features

### What's Next

1. **Immediate**: Change `desktopStyle` to `"horizontal"` to see desktop menu items
2. **Short-term**: Add header pattern examples using Nav Builder
3. **Long-term**: Implement mega menu support (Phase 7) if needed

---

## Technical Details

### CSS Architecture

The block uses a two-mode system controlled by the `desktopStyle` attribute:

**Mode 1: Hamburger-only** (`desktopStyle="hamburger"`)
```scss
.moiraine-nav-builder.desktop-hamburger {
  .nav-builder__desktop { display: none; } // Always hidden
  .nav-builder__hamburger { display: flex; } // Always visible
  .nav-builder__mobile-overlay { display: block; } // Always functional
}
```

**Mode 2: Horizontal + Hamburger** (`desktopStyle="horizontal"`)
```scss
.moiraine-nav-builder.desktop-horizontal {
  .nav-builder__desktop {
    @media (min-width: 782px) { display: block; } // Visible on desktop
  }
  .nav-builder__hamburger {
    @media (min-width: 782px) { display: none; } // Hidden on desktop
  }
  .nav-builder__mobile-overlay {
    @media (min-width: 782px) { display: none; } // Hidden on desktop
  }
}
```

### HTML Structure

**Desktop Menu** (when `desktopStyle="horizontal"`):
```html
<nav class="moiraine-nav-builder desktop-horizontal hamburger-right">
  <div class="nav-builder__desktop">
    <ul class="nav-builder__menu" role="menubar">
      <li class="nav-builder__item">
        <a href="..." class="nav-builder__link">Home</a>
      </li>
      <!-- Desktop dropdowns appear here on :hover -->
    </ul>
  </div>
  <!-- Hamburger button (hidden on desktop via CSS) -->
  <!-- Mobile overlay (hidden on desktop via CSS) -->
</nav>
```

**Mobile Menu** (always available):
```html
<button class="nav-builder__hamburger" aria-controls="mobile-menu-...">
  <svg><!-- Hamburger icon --></svg>
</button>

<div class="nav-builder__mobile-overlay">
  <div class="nav-builder__mobile-container">
    <button class="nav-builder__mobile-close">
      <svg><!-- Close icon --></svg>
    </button>
    <ul class="nav-builder__mobile-menu">
      <li class="nav-builder__mobile-item">
        <div class="nav-builder__mobile-item-header">
          <a href="..." class="nav-builder__mobile-link">Menu Item</a>
          <button class="nav-builder__mobile-toggle">
            <svg><!-- Chevron inline, right-aligned --></svg>
          </button>
        </div>
        <ul class="nav-builder__mobile-submenu"><!-- Collapsible submenus --></ul>
      </li>
    </ul>
  </div>
</div>
```

### Interactivity API State

```javascript
{
  "isOpen": false,                    // Mobile menu open/closed
  "openSubmenus": {                   // Submenu states
    "submenu-123": false,
    "submenu-456": true
  }
}
```

**Actions**:
- `toggleMobileMenu()`: Opens/closes mobile overlay, locks body scroll
- `closeMobileMenu()`: Closes overlay, unlocks scroll, resets submenus
- `toggleSubmenu(event)`: Toggles individual submenu expansion
- `handleKeydown(event)`: Closes menu on Escape key

**Callbacks**:
- `initNav()`: Stores nav reference, cleans up on unmount
- `stopPropagation(event)`: Prevents clicks inside mobile container from closing overlay

---

## Conclusion

The custom Nav Builder block successfully solves all the core problems identified with the WordPress Navigation block:

✅ **Mobile chevrons positioned correctly** (inline, right-aligned)
✅ **Full control over desktop/mobile behavior** (two modes)
✅ **Clean, maintainable code** (no CSS hacks)
✅ **Ready for mega menu integration** (Phase 7)
✅ **Excellent developer experience** (WordPress Interactivity API)
✅ **Accessible** (ARIA labels, keyboard navigation)
✅ **RTL support** (auto-reverse for Arabic/Hebrew)
✅ **Site Editor Integration** (November 2025 update - reads from wp_navigation posts)

The investment of 10-12 hours has created a production-ready navigation system that can be reused across all Moiraine-based sites and extended with mega menus when needed.

---

## November 9, 2025 Update: Nav Builder Abandoned - Extending Core Navigation Block Instead

### Critical Discovery: Nav Builder Unusable for Editors

After implementing the nav-builder block, we discovered a **fatal flaw**:

**❌ No Visual Menu Editing**
- Nav Builder blocks cannot be edited visually in the block editor
- Users cannot drag/drop menu items
- Users cannot inline-edit menu labels, URLs, or descriptions
- FSE block themes don't have "Appearance > Menus"
- Users must manage menus outside the block editor (poor UX)

**This makes Nav Builder unusable for client sites.**

### Decision: Extend Core Navigation Block

Instead of building a custom navigation block, we're **extending the core WordPress Navigation block** using block extensions (similar to how we extended the Post Excerpt block).

**Why This Is Better:**

1. ✅ **Visual Editing Preserved** - Users can drag/drop, inline-edit menu items in Site Editor
2. ✅ **Site Editor Integration** - Works seamlessly with WordPress navigation system
3. ✅ **Familiar Workflow** - Users already know how to use Navigation block
4. ✅ **Less Development Time** - 4-6 hours vs. 10-12 hours for nav-builder
5. ✅ **Follows Theme Architecture** - Uses existing `inc/block-extensions.php` pattern

### Implementation Approach

**Similar to "Options for Block Themes" plugin, but enhanced with clickable parents:**

#### 1. JavaScript Block Extension (`assets/js/block-extensions/navigation.js`)

Add custom attributes to `core/navigation` block:

```javascript
// Add attributes
wp.hooks.addFilter('blocks.registerBlockType', 'moiraine/navigation-attributes', (settings, name) => {
    if (name !== 'core/navigation') return settings;

    return {
        ...settings,
        attributes: {
            ...settings.attributes,
            hasClickableParents: { type: 'boolean', default: false },
            hasImprovedChevrons: { type: 'boolean', default: false }
        }
    };
});

// Add Inspector Controls
wp.hooks.addFilter('editor.BlockEdit', 'moiraine/navigation-controls', (BlockEdit) => {
    return (props) => {
        if (props.name !== 'core/navigation') return <BlockEdit {...props} />;

        return (
            <>
                <BlockEdit {...props} />
                <InspectorControls>
                    <PanelBody title="Moiraine Navigation">
                        <ToggleControl
                            label="Clickable parent items"
                            checked={props.attributes.hasClickableParents}
                            onChange={() => props.setAttributes({
                                hasClickableParents: !props.attributes.hasClickableParents
                            })}
                        />
                        <ToggleControl
                            label="Improved chevron positioning"
                            checked={props.attributes.hasImprovedChevrons}
                            onChange={() => props.setAttributes({
                                hasImprovedChevrons: !props.attributes.hasImprovedChevrons
                            })}
                        />
                    </PanelBody>
                </InspectorControls>
            </>
        );
    };
});
```

#### 2. PHP Render Filter (`inc/block-extensions.php`)

Modify navigation HTML output:

```php
function filter_navigation_block_output( $block_content, $block ) {
    if ( 'core/navigation' !== $block['blockName'] ) {
        return $block_content;
    }

    $attributes = $block['attrs'] ?? array();
    $has_clickable_parents = $attributes['hasClickableParents'] ?? false;
    $has_improved_chevrons = $attributes['hasImprovedChevrons'] ?? false;

    // Add CSS classes
    if ( $has_clickable_parents ) {
        $block_content = preg_replace(
            '/<nav\s+class="([^"]*)"/',
            '<nav class="$1 has-clickable-parents"',
            $block_content,
            1
        );
    }

    if ( $has_improved_chevrons ) {
        $block_content = preg_replace(
            '/<nav\s+class="([^"]*)"/',
            '<nav class="$1 has-improved-chevrons"',
            $block_content,
            1
        );
    }

    // Add data-parent-url to parent menu items for JavaScript
    if ( $has_clickable_parents ) {
        // Parse and add data attributes to submenu parent buttons
        $block_content = add_parent_url_attributes( $block_content, $block );
    }

    return $block_content;
}
add_filter( 'render_block', 'filter_navigation_block_output', 10, 2 );
```

#### 3. Frontend JavaScript (`assets/js/navigation-frontend.js`)

Convert parent buttons to clickable links + separate toggle:

```javascript
document.addEventListener('DOMContentLoaded', () => {
    const navs = document.querySelectorAll('.wp-block-navigation.has-clickable-parents');

    navs.forEach(nav => {
        const parentButtons = nav.querySelectorAll('.wp-block-navigation-submenu__toggle[data-parent-url]');

        parentButtons.forEach(button => {
            const parentUrl = button.getAttribute('data-parent-url');
            if (!parentUrl) return;

            const label = button.querySelector('.wp-block-navigation-item__label');
            const chevron = button.parentNode.querySelector('.wp-block-navigation__submenu-icon');

            // Create wrapper
            const wrapper = document.createElement('div');
            wrapper.className = 'moiraine-nav-parent-wrapper';

            // Create link
            const link = document.createElement('a');
            link.href = parentUrl;
            link.className = 'moiraine-nav-parent-link';
            link.textContent = label.textContent;
            link.setAttribute('aria-label', `Go to ${label.textContent}`);

            // Create toggle button
            const toggle = document.createElement('button');
            toggle.className = 'moiraine-nav-toggle';
            toggle.setAttribute('aria-expanded', 'false');
            toggle.setAttribute('aria-label', `Toggle ${label.textContent} submenu`);
            if (chevron) {
                toggle.innerHTML = chevron.innerHTML;
            }

            // Copy WordPress Interactivity API attributes from original button
            const interactivityAttrs = [
                'data-wp-interactive',
                'data-wp-context',
                'data-wp-on-async--click',
                'data-wp-bind--aria-expanded'
            ];
            interactivityAttrs.forEach(attr => {
                const value = button.getAttribute(attr);
                if (value) toggle.setAttribute(attr, value);
            });

            // Replace button with wrapper containing link + toggle
            button.parentNode.insertBefore(wrapper, button);
            wrapper.appendChild(link);
            wrapper.appendChild(toggle);
            button.remove();

            // Move chevron if still exists
            if (chevron && chevron.parentNode) {
                chevron.remove();
            }
        });
    });
});
```

#### 4. Enhanced CSS (`assets/styles/core-navigation.css`)

Better chevron positioning and clickable parent styling:

```css
/* Clickable parents: wrapper layout */
.has-clickable-parents .moiraine-nav-parent-wrapper {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    width: 100%;
}

.has-clickable-parents .moiraine-nav-parent-link {
    flex: 1;
}

.has-clickable-parents .moiraine-nav-toggle {
    flex-shrink: 0;
    background: none;
    border: none;
    cursor: pointer;
    padding: 0.25rem;
}

/* Improved chevrons: better positioning */
.has-improved-chevrons .wp-block-navigation-item {
    display: flex;
    align-items: center;
}

.has-improved-chevrons .wp-block-navigation__submenu-icon {
    margin-left: 0.25rem;
}

/* Mobile: inline chevrons */
@media (max-width: 782px) {
    .has-improved-chevrons .is-menu-open .wp-block-navigation-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .has-improved-chevrons .is-menu-open .wp-block-navigation__submenu-icon {
        display: inline-flex !important;
        margin-left: auto;
    }
}
```

### Benefits of This Approach

**Compared to Nav Builder:**

| Feature | Nav Builder | Core Navigation + Extension |
|---------|-------------|------------------------------|
| Visual menu editing | ❌ No | ✅ Yes |
| Site Editor integration | ⚠️ Read-only | ✅ Full integration |
| Clickable parent items | ✅ Yes | ✅ Yes (via JavaScript) |
| Chevron positioning | ✅ Perfect | ⚠️ Improved (CSS limitations) |
| Development time | 10-12 hours | 4-6 hours |
| Maintenance | Custom code | Extends core |
| Editor experience | ❌ Poor | ✅ Excellent |

**The Trade-offs:**

1. **Chevron Positioning**: Extension uses CSS improvements (better but not perfect) vs. Nav Builder's custom HTML (perfect). This is acceptable since visual editing is more important.

2. **Clickable Parents**: Extension uses JavaScript DOM manipulation (slight performance cost) vs. Nav Builder's native HTML. Performance impact is negligible.

3. **Complexity**: Extension adds JavaScript layer but preserves WordPress Interactivity API vs. Nav Builder's complete rewrite.

### Files to Create/Modify

1. **Create**: `assets/js/block-extensions/navigation.js`
2. **Create**: `assets/js/navigation-frontend.js`
3. **Modify**: `inc/block-extensions.php` (add navigation extension)
4. **Modify**: `assets/styles/core-navigation.css` (add extension styles)
5. **Modify**: `patterns/header-light-with-hamburger-menu.php` (add custom attributes)

### Removal of Nav Builder

The nav-builder block will be removed from the `moiraine-navigation-system` branch:

- Delete `blocks/nav-builder/` directory
- Auto-registration in `functions.php` will automatically stop loading it
- No manual deregistration needed

### November 2025 Update: Site Editor Navigation Integration

### ~~Problem Solved~~ DEPRECATED - Nav Builder Removed

~~The original nav-builder implementation read from **classic WordPress menus** (`wp_nav_menu`), which meant editors had to manage navigation in two separate systems:
1. Site Editor navigation for patterns/templates (`wp_navigation` post type)
2. Classic WordPress menus for the nav-builder block

This created confusion and duplicate work.~~

**UPDATE**: This entire nav-builder approach has been abandoned due to lack of visual editing capability. We're now extending the core Navigation block instead, which already has full Site Editor integration.

### Solution Implemented

**Modified nav-builder to read from Site Editor navigation** (`wp_navigation` post type):

#### Changes Made

1. **block.json** - Added `navigationId` attribute (kept `menuId` for backward compatibility)
2. **edit.js** - Updated to fetch and select `wp_navigation` posts instead of classic menus
3. **render.php** - Added `parse_navigation_blocks()` function to parse Site Editor navigation blocks:
   - Handles `core/navigation-link` blocks
   - Handles `core/navigation-submenu` blocks with children
   - Maintains same menu tree structure as classic menus
   - Falls back to classic menus if `menuId` is set (backward compatibility)

#### Benefits

✅ **Single source of truth** - Editors only manage navigation in Site Editor
✅ **No duplicate menu management** - No need to sync between systems
✅ **Future-proof** - Aligns with WordPress's block-based direction
✅ **Backward compatible** - Existing nav-builder instances with `menuId` still work
✅ **Zero editor training** - Editors use the Site Editor they already know

#### How It Works

```php
// In render.php
if ( $navigation_id ) {
    // Use wp_navigation post (Site Editor)
    $navigation_post = get_post( $navigation_id );
    if ( $navigation_post && 'wp_navigation' === $navigation_post->post_type ) {
        $menu_tree = parse_navigation_blocks( $navigation_post->post_content );
    }
} elseif ( $menu_id ) {
    // Fallback to classic menu for backward compatibility
    $menu_items = wp_get_nav_menu_items( $menu_id );
    $menu_tree = build_menu_tree( $menu_items );
}
```

#### Editor Workflow

**Before (Two Systems):**
1. Edit navigation in Site Editor → Use in patterns
2. Edit classic menu in Appearance → Menus → Use in nav-builder
3. Keep both in sync manually 😖

**After (Single System):**
1. Edit navigation in Site Editor → Use everywhere ✅
2. Nav-builder automatically reads from Site Editor navigation
3. No syncing needed! 🎉

#### Migration

Existing nav-builder blocks with `menuId` will continue to work. To migrate to Site Editor navigation:

1. Update the nav-builder block attribute from `"menuId": 38` to `"navigationId": 3`
2. The navigation ID can be found in Site Editor → Navigation

**Example:**
```
Before: <!-- wp:moiraine/nav-builder {"menuId":38} /-->
After:  <!-- wp:moiraine/nav-builder {"navigationId":3} /-->
```

#### Implementation Time

- Planning: 30 minutes
- Development: 2 hours
- Testing: 30 minutes
- **Total: 3 hours**

Much faster than the original 10-12 hour nav-builder implementation!
