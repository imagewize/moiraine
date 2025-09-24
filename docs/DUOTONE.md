# Duotone Refactoring Plan

## Current Problem

The Moiraine theme has **two critical duotone issues**:

### 1. Original Issue (Partially Resolved)
The theme used hardcoded color-specific duotone names (`blue`, `pink`, `green`, etc.) in `theme.json`, causing:
- **Style variation conflicts**: Bright blue duotones clashed with professional aesthetics
- **Inflexible naming**: Color names didn't adapt to different style variations
- **Pattern dependencies**: Patterns were tied to specific color implementations

### 2. **NEW CRITICAL ISSUE DISCOVERED**
**Only Publisher style variation defines duotones** - all other style variations are missing duotone definitions entirely:
- Agency (green theme), Consulting (navy theme), Creator (purple theme), Startup (blue theme), and Studio (pink theme) **inherit the main theme's duotones**
- This means patterns with duotones will show the wrong colors for each style variation
- The semantic duotone system is incomplete without matching duotones for each style variation

## Current Implementation

```json
// theme.json - Lines 10-115
"duotone": [
  {
    "name": "Blue",
    "slug": "blue",
    "colors": ["#462CFF", "#ECE8FF"]
  },
  {
    "name": "Pink",
    "slug": "Pink",
    "colors": ["#F22AAA", "#FFDBF0"]
  }
  // ... 12 more color-specific duotones
]
```

```php
// patterns/hero-text-image-and-logos.php - Line 40
"color":{"duotone":"var:preset|duotone|blue"}
```

## Proposed Solution: Semantic Duotone System

### Phase 1: Define Semantic Duotones in Main Theme

Replace color-specific names with semantic, purpose-driven names:

```json
// theme.json
"duotone": [
  {
    "name": "Primary",
    "slug": "primary",
    "colors": ["#5344F4", "#e9e7ff"]
  },
  {
    "name": "Secondary",
    "slug": "secondary",
    "colors": ["#1E1E26", "#f8f7fc"]
  },
  {
    "name": "Accent",
    "slug": "accent",
    "colors": ["#F22AAA", "#FFDBF0"]
  },
  {
    "name": "Neutral",
    "slug": "neutral",
    "colors": ["#545473", "#E3E3F0"]
  },
  {
    "name": "High Contrast",
    "slug": "high-contrast",
    "colors": ["#000000", "#ffffff"]
  }
]
```

### Phase 2: Update Style Variations

Each style variation can override duotones to match their aesthetic:

#### Publisher Style (`styles/publisher.json`)
```json
{
  "settings": {
    "color": {
      "duotone": [
        {
          "name": "Primary",
          "slug": "primary",
          "colors": ["#495057", "#e9ecef"]
        },
        {
          "name": "Secondary",
          "slug": "secondary",
          "colors": ["#2c3e50", "#f8f9fa"]
        },
        {
          "name": "Accent",
          "slug": "accent",
          "colors": ["#FFD700", "#2c3e50"]
        }
      ]
    }
  }
}
```

#### Agency Style (`styles/agency.json`)
```json
{
  "settings": {
    "color": {
      "duotone": [
        {
          "name": "Primary",
          "slug": "primary",
          "colors": ["#0057FF", "#31B5FF"]
        }
        // Override only what's needed
      ]
    }
  }
}
```

### Phase 3: Update Patterns

Replace hardcoded color references with semantic ones:

```php
// Before
"color":{"duotone":"var:preset|duotone|blue"}

// After
"color":{"duotone":"var:preset|duotone|primary"}
```

## Implementation Steps

### Step 1: Backup and Audit
- ✅ Document all current duotone usage across patterns **COMPLETED**
- ✅ Create list of affected files **COMPLETED**
- [ ] Test current functionality with all style variations

### Step 2: Update Main Theme
- ✅ Replace color-specific duotones with semantic ones in `theme.json` **COMPLETED**
- ✅ Map current colors to appropriate semantic categories: **COMPLETED**
  - `blue` (#462CFF, #ECE8FF) → `primary` (#5344F4, #e9e7ff)
  - `grayscale` (#000, #fff) → `high-contrast` (#000000, #ffffff)
  - `pink` (#F22AAA, #FFDBF0) → `accent` (#F22AAA, #FFDBF0)
  - `secondary` (new) → (#1E1E26, #f8f7fc)
  - `neutral` (new) → (#545473, #E3E3F0)

### Step 3: Update Patterns
- ✅ Update `hero-text-image-and-logos.php` to use `primary` **COMPLETED**
- ✅ Audit other patterns for duotone usage **COMPLETED**
- ✅ Update any other patterns using duotones **COMPLETED** (Only 1 pattern needed updates)

### Step 4: Update Style Variations
- ✅ Add duotone overrides to Publisher style **COMPLETED**
- ✅ Review other style variations (Agency, Startup, Creator, etc.) **COMPLETED**
- ✅ Add appropriate duotone definitions for each **COMPLETED** (All 5 variations now have duotones)

**DETAILED STYLE VARIATION ANALYSIS:**

| Style Variation | Brand Primary | Brand Accent | Status | Duotone Colors Added |
|---|---|---|---|---|
| Publisher | `#1a1a1a` | `#f8f8f8` | ✅ Complete | Grayscale professional |
| Agency | `#495148` | `#e5f0e4` | ✅ Complete | Green/earthy tones |
| Consulting | `#1E3A8A` | `#4F68C6` | ✅ Complete | Navy/blue professional |
| Creator | `#5A20FF` | `#E2D8FF` | ✅ Complete | Purple/creative |
| Startup | `#454DFF` | `#DBDDFF` | ✅ Complete | Bright blue/tech |
| Studio | `#FF50A9` | `#FFE7F3` | ✅ Complete | Pink/creative |

### Step 5: Testing
- [ ] Test all style variations with updated duotones
- [ ] Verify patterns display correctly across variations
- [ ] Test in WordPress editor duotone picker
- [ ] Validate no console errors or broken references

## Files to Update

### Core Theme Files
- ✅ `theme.json` - Main duotone definitions **COMPLETED**
- ✅ `patterns/hero-text-image-and-logos.php` - Primary pattern using duotone **COMPLETED**

### Patterns Audit Results
**Files with duotone usage found:**
- ✅ `patterns/hero-text-image-and-logos.php` - Uses `var:preset|duotone|blue` → Updated to `var:preset|duotone|primary`
- ✅ `patterns/card-big-text-call-to-action.php` - Uses `"duotone":"unset"` → No change needed (disables duotone)

**No other patterns found using color-specific duotones** - The theme primarily uses only 2 patterns with duotone references.

### Style Variations
- ✅ `styles/publisher.json` - Add professional grayscale duotones **COMPLETED**
- ✅ `styles/agency.json` - Green/earthy duotones **COMPLETED** (Primary: #495148→#e5f0e4, Accent: #CEF453→#44473b)
- ✅ `styles/startup.json` - Bright blue/tech duotones **COMPLETED** (Primary: #454DFF→#DBDDFF, Accent: #B1C2FF→#263042)
- ✅ `styles/creator.json` - Purple/creative duotones **COMPLETED** (Primary: #5A20FF→#E2D8FF, Accent: #E3D0FF→#2E2738)
- ✅ `styles/consulting.json` - Navy/professional duotones **COMPLETED** (Primary: #1E3A8A→#B1C2FF, Accent: #4F68C6→#263042)
- ✅ `styles/studio.json` - Pink/creative duotones **COMPLETED** (Primary: #FF50A9→#FFE7F3, Accent: #FFCFD7→#463235)

**ISSUE RESOLVED:** All style variations now have complete duotone definitions that match their individual brand aesthetics.

### Documentation
- `CHANGELOG.md` - Document breaking changes
- `README.md` - Update duotone documentation if present

## Breaking Changes

⚠️ **This is a breaking change** - Any custom patterns or user customizations using the old color-specific duotone names will need updates.

### Migration Path
1. Maintain backward compatibility by keeping old duotone definitions alongside new semantic ones temporarily
2. Add deprecation notices in next minor version
3. Remove old definitions in next major version

## Benefits After Complete Refactoring

1. **Consistent theming**: Each style variation gets duotones that match its aesthetic
2. **Maintainable code**: Semantic names make intent clear
3. **Flexible customization**: Users can override semantic duotones without breaking patterns
4. **Professional appearance**: All style variations will have harmonious duotone colors
5. **Scalable system**: New style variations can easily define appropriate duotones

## Immediate Next Steps Required

**COMPLETED:** All 5 style variations now have duotone definitions. Here's the pattern that was applied to each:

```json
// Example for Agency style variation
{
  "settings": {
    "color": {
      "duotone": [
        {
          "name": "Primary",
          "slug": "primary",
          "colors": ["#495148", "#e5f0e4"]  // Match Agency brand colors
        },
        {
          "name": "Secondary",
          "slug": "secondary",
          "colors": ["#0E0E0E", "#F5F5F0"]  // Match Agency contrast colors
        },
        {
          "name": "Accent",
          "slug": "accent",
          "colors": ["#CEF453", "#44473b"]  // Match Agency accent colors
        },
        {
          "name": "Neutral",
          "slug": "neutral",
          "colors": ["#51524e", "#E2E2D9"]  // Match Agency neutral colors
        },
        {
          "name": "High Contrast",
          "slug": "high-contrast",
          "colors": ["#000000", "#ffffff"]
        }
      ]
    }
  }
}
```

This pattern should be applied to all remaining style variations using their respective brand colors.

## Testing Checklist

- [ ] All existing patterns render correctly
- [ ] Style variations show appropriate duotone colors
- [ ] WordPress editor duotone picker works
- [ ] No JavaScript console errors
- [ ] Backward compatibility maintained (if implemented)
- [ ] Documentation updated
- [ ] Version numbers incremented appropriately