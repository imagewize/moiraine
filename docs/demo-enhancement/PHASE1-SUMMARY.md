# Phase 1: Foundation - Summary & Next Steps

**Date:** November 2, 2025
**Status:** Audit Complete - Ready for Image Sourcing

## What We've Accomplished

### 1. Complete Image Audit ✅
- Mapped all 14 images to their pattern usage
- Identified high-priority images (6 pattern usages)
- Created detailed replacement strategy for each image
- Documented Unsplash search terms

### 2. Usage Analysis ✅

**Critical Findings:**
- **avatar-3.webp** and **guy-laptop.webp** are MOST USED (6 patterns each)
- **desktop.webp** is primary hero section image (4 patterns)
- All logo images used consistently in 2 patterns each
- SVG icons (arrows, checkmark) should be kept as-is

**Pattern Categories Using Images:**
- Hero patterns: desktop.webp, guy-laptop.webp
- Team/testimonial patterns: All avatar images
- Feature/card patterns: computer-hands.webp, guy-laptop.webp
- Logo showcases: All logo images

### 3. Documentation Created ✅
- [MOIRAINE-DEMO-ENHANCEMENT.md](MOIRAINE-DEMO-ENHANCEMENT.md) - Master plan
- [PHASE1-IMAGE-AUDIT.md](PHASE1-IMAGE-AUDIT.md) - Detailed image audit
- This summary document

---

## Ready-to-Use Image Sourcing Guide

### Priority Order for Image Replacement

**Replace First (Highest Impact):**
1. **avatar-3.webp** (6 patterns) - Woman, 20s-30s, tech/creative
2. **guy-laptop.webp** (6 patterns) - Person working on laptop
3. **desktop.webp** (4 patterns) - Clean desk setup with monitor
4. **avatar-2.webp** (5 patterns) - Man, 20s-30s, casual professional
5. **computer-hands.webp** (5 patterns) - Hands typing on laptop

**Replace Second (Medium Impact):**
6. **avatar-4.webp** (4 patterns) - Man, 40s-50s, business professional
7. **avatar-1.webp** (3 patterns) - Woman, 30s-40s, business attire
8. **avatar-5.webp** (3 patterns) - Woman, 20s, modern tech
9. **avatar-7.webp** (2 patterns) - Diverse/non-binary professional

**Replace Last (Design Work):**
10-14. **logo-1 through logo-6** (2 patterns each) - Custom geometric designs

---

## Recommended Unsplash Search Terms

### For Avatars (Copy-Paste Ready)

**Priority 1 - avatar-3.webp:**
```
professional woman portrait developer tech
professional woman headshot creative industry
young woman professional tech startup
```

**Priority 2 - avatar-2.webp:**
```
professional man portrait creative
casual professional headshot man
young businessman portrait
```

**Priority 3 - avatar-4.webp:**
```
professional businessman headshot
senior executive portrait
mature professional man
```

**Priority 4 - avatar-1.webp:**
```
professional woman headshot business
businesswoman portrait executive
```

**Priority 5 - avatar-5.webp:**
```
young professional woman tech
startup team member portrait
millennial professional woman
```

**Priority 6 - avatar-7.webp:**
```
professional portrait diverse
modern professional headshot
creative industry portrait
```

### For Workspace Images (Copy-Paste Ready)

**Priority 1 - guy-laptop.webp:**
```
person working laptop office
developer working macbook
professional working computer workspace
```

**Priority 2 - desktop.webp:**
```
modern workspace desk monitor
developer workspace dual monitors
clean desk setup macbook
minimalist workspace tech
```

**Priority 3 - computer-hands.webp:**
```
hands typing laptop workspace
hands on keyboard development
person typing macbook closeup
```

---

## Quick Start: Sourcing Images Today

### Step 1: Visit Unsplash Collections

**Avatar Images:**
- https://unsplash.com/s/photos/professional-headshot
- https://unsplash.com/@cowomen (Women in tech/business)
- https://unsplash.com/@wocintechchat (Women of color in tech)

**Workspace Images:**
- https://unsplash.com/s/photos/developer-workspace
- https://unsplash.com/s/photos/modern-office
- https://unsplash.com/@fakurian (Modern workspaces)

### Step 2: Download Images

**For Each Image:**
1. Search using the recommended terms above
2. Select high-quality, well-lit, professional images
3. Click "Download free" button
4. Save to `~/Downloads/moiraine-images/[category]/`

**Naming Convention:**
```
~/Downloads/moiraine-images/
├── avatars/
│   ├── source-avatar-1.jpg
│   ├── source-avatar-2.jpg
│   └── ... (6 total)
├── workspace/
│   ├── source-computer-hands.jpg
│   ├── source-desktop.jpg
│   └── source-guy-laptop.jpg
└── logos/
    └── (will design separately)
```

### Step 3: Process Images

**Install WebP Tools (if not installed):**
```bash
brew install webp imagemagick
```

**Avatars - Resize & Convert:**
```bash
cd ~/Downloads/moiraine-images/avatars

# Crop to square and resize to 400x400
for img in source-avatar-*.jpg; do
  # Crop to square (center crop)
  convert "$img" -resize 400x400^ -gravity center -extent 400x400 "temp-$img"

  # Convert to WebP
  num=$(echo "$img" | grep -o '[0-9]')
  cwebp -q 85 "temp-$img" -o "avatar-$num.webp"

  # Clean up temp file
  rm "temp-$img"
done
```

**Workspace Images - Resize & Convert:**
```bash
cd ~/Downloads/moiraine-images/workspace

# Resize to 1920x1080 and convert
for img in source-*.jpg; do
  # Resize maintaining aspect ratio
  convert "$img" -resize 1920x1080^ -gravity center -extent 1920x1080 "temp-$img"

  # Convert to WebP
  name=$(basename "$img" .jpg | sed 's/source-//')
  cwebp -q 85 "temp-$img" -o "$name.webp"

  # Clean up
  rm "temp-$img"
done
```

### Step 4: Verify File Sizes

**Check if files are under target sizes:**
```bash
cd ~/Downloads/moiraine-images

# Check avatar sizes (should be < 50KB)
ls -lh avatars/*.webp | awk '{if ($5 > 50000) print $9, $5}'

# Check workspace sizes (should be < 150KB)
ls -lh workspace/*.webp | awk '{if ($5 > 150000) print $9, $5}'
```

**If files too large, reduce quality:**
```bash
# Reduce to quality 75
cwebp -q 75 input.jpg -o output.webp

# Or reduce dimensions slightly
convert input.jpg -resize 90% temp.jpg
cwebp -q 85 temp.jpg -o output.webp
```

### Step 5: Backup & Deploy

**Backup Original Ollie Images:**
```bash
cd /Users/jasperfrumau/code/imagewize.com/demo/web/app/themes/moiraine/patterns/images

# Create timestamped backup
mkdir -p backup-ollie-20251102
cp avatar-*.webp computer-hands.webp desktop.webp guy-laptop.webp logo-*.webp backup-ollie-20251102/
```

**Copy New Images:**
```bash
# Copy avatars
cp ~/Downloads/moiraine-images/avatars/avatar-*.webp \
   /Users/jasperfrumau/code/imagewize.com/demo/web/app/themes/moiraine/patterns/images/

# Copy workspace images
cp ~/Downloads/moiraine-images/workspace/*.webp \
   /Users/jasperfrumau/code/imagewize.com/demo/web/app/themes/moiraine/patterns/images/
```

### Step 6: Test

**Check Git Status:**
```bash
cd /Users/jasperfrumau/code/imagewize.com/demo/web/app/themes/moiraine
git status
```

**Visual Test:**
1. Open http://demo.imagewize.test in browser
2. Navigate to About page (team members visible)
3. Check that images load correctly
4. Verify duotone filters apply properly

---

## Logo Design Task

**Logos require custom design work** - separate from photo sourcing.

### Quick Logo Design Options

**Option 1: Figma (Recommended)**
1. Create 400x200px artboards (5 total)
2. Design abstract geometric shapes
3. Use Moiraine colors: #5344F4, #F22AAA, #1E1E26
4. Export as PNG at 2x (800x400px)
5. Convert to WebP

**Option 2: Canva**
1. Search "geometric logo" templates
2. Customize colors to match Moiraine
3. Remove any text
4. Export as PNG
5. Resize to 400x200px
6. Convert to WebP

**Option 3: Simple Shapes in Code**
```html
<!-- Create SVG logos and convert to WebP -->
<!-- Example: Circular gradient -->
<svg width="400" height="200" xmlns="http://www.w3.org/2000/svg">
  <circle cx="100" cy="100" r="60" fill="url(#grad1)"/>
  <defs>
    <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" style="stop-color:#5344F4;stop-opacity:1" />
      <stop offset="100%" style="stop-color:#e9e7ff;stop-opacity:1" />
    </linearGradient>
  </defs>
</svg>
```

---

## Estimated Time to Complete

**Image Sourcing & Processing:**
- Avatar sourcing: 30 minutes (6 images)
- Workspace sourcing: 15 minutes (3 images)
- Image processing: 30 minutes (resize, convert)
- Verification: 15 minutes
- **Total: ~1.5 hours**

**Logo Design:**
- Design 5 logos: 1-2 hours (depending on tool proficiency)
- Export & process: 15 minutes
- **Total: ~1.5-2 hours**

**Deployment & Testing:**
- Backup & deploy: 10 minutes
- Visual testing: 20 minutes
- **Total: ~30 minutes**

**Grand Total: 3.5-4 hours**

---

## Checklist: Ready for Phase 2

Before moving to Phase 2 (Content Creation):

- [ ] All 9 photos sourced from Unsplash
- [ ] All 9 photos resized to correct dimensions
- [ ] All 9 photos converted to WebP
- [ ] All file sizes under targets
- [ ] 5 logos designed
- [ ] 5 logos exported and converted to WebP
- [ ] Old images backed up
- [ ] New images deployed to theme
- [ ] Visual test on demo site passed
- [ ] Duotone filters working correctly
- [ ] Git changes committed

---

## Quick Reference: File Specifications

| Type | Dimensions | Format | Max Size | Quality |
|------|-----------|---------|----------|---------|
| Avatar | 400x400px | WebP | 50KB | 85 |
| Workspace | 1920x1080px | WebP | 150KB | 85 |
| Logo | 400x200px | WebP | 30KB | 85 |

---

## Support Resources

**Unsplash License:**
- Free to use for commercial projects
- No attribution required (but appreciated)
- Cannot sell unmodified photos
- More info: https://unsplash.com/license

**Image Tools:**
- Squoosh (online): https://squoosh.app
- ImageMagick docs: https://imagemagick.org
- WebP converter: `man cwebp` (after brew install)

**Moiraine Color Reference:**
- Primary: `#5344F4`
- Primary Accent: `#e9e7ff`
- Secondary: `#1E1E26`
- Accent: `#F22AAA`
- Neutral: `#545473`

---

## Questions or Issues?

**Common Issues:**

**Q: Images not loading after replacement?**
A: Check file permissions (`chmod 644 *.webp`) and verify file names match exactly.

**Q: File sizes too large?**
A: Reduce WebP quality to 75 or resize images slightly smaller.

**Q: Duotone not applying correctly?**
A: Ensure images have good contrast and aren't too dark. Test with Primary duotone filter.

**Q: Images pixelated?**
A: Use higher resolution source images from Unsplash (download Large size, not Small).

---

**Next Phase:** Once images are replaced and tested, move to Phase 2: Content Creation (blog posts).

**Document Status:** Complete & Ready for Execution
**Last Updated:** November 2, 2025
