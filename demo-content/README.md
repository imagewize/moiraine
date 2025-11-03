# Moiraine Demo Content

This directory contains WordPress export files and assets for setting up the Moiraine theme demo site.

## Contents

- **WordPress XML Exports**: Complete site content including posts, pages, patterns, and settings
- **Featured Images**: Linked from XML but stored separately in uploads directory

## Setting Up Demo Content on a New Site

### Prerequisites

- Fresh WordPress installation with Moiraine theme installed and activated
- WordPress Importer plugin installed ([Download](https://wordpress.org/plugins/wordpress-importer/))
- SSH/SFTP access to upload media files (if needed)

### Step 1: Import WordPress Content

1. In WordPress admin, go to **Tools → Import**
2. Click **WordPress** and install/activate the importer if needed
3. Click **Run Importer**
4. Upload the latest XML file (e.g., `moiraine.WordPress.2025-11-03.xml`)
5. **Important**: Check "Download and import file attachments" - this will attempt to import images
6. Assign authors or create new users as needed
7. Click **Submit** and wait for import to complete

### Step 2: Handle Media/Image Files

The WordPress XML export includes references to media files (featured images, uploads, etc.), but the actual image files need special handling:

#### Option A: Automatic Import (Recommended for Testing)

If you checked "Download and import file attachments" during import, WordPress will attempt to download images from the demo site URL. This works if:

- The demo site is publicly accessible
- Image URLs in the XML are valid and accessible
- Your server can make external HTTP requests

**Limitations**: May fail if demo site is behind authentication, localhost, or has moved.

#### Option B: Manual Upload (Recommended for Production)

For reliable imports, especially for production sites:

1. **Download the uploads directory** from the demo site:
   ```bash
   # From the trellis directory
   cd trellis

   # Pull uploads from demo development environment
   ansible-playbook files-pull.yml -e env=development -e site=demo.imagewize.com
   ```

2. **Create a compressed archive** of the demo uploads:
   ```bash
   cd ../demo/web/app/uploads
   tar -czf moiraine-demo-uploads.tar.gz ./
   ```

3. **Upload to new site** via SFTP/SSH:
   ```bash
   # Example using rsync
   rsync -avz moiraine-demo-uploads.tar.gz user@newsite.com:/path/to/wp-content/uploads/

   # Extract on server
   ssh user@newsite.com
   cd /path/to/wp-content/uploads/
   tar -xzf moiraine-demo-uploads.tar.gz
   rm moiraine-demo-uploads.tar.gz
   ```

4. **Search-replace URLs** if domains differ:
   ```bash
   # Using WP-CLI
   wp search-replace 'https://demo.imagewize.test' 'https://newsite.com' --all-tables
   ```

#### Option C: Using WordPress Download Import Feature

WordPress importer can download images from URLs in the XML file, but this requires:

- Demo site to be publicly accessible
- Correct URLs in XML export
- Server firewall allowing outbound connections

If URLs need updating before import:

```bash
# Update URLs in XML file before importing
sed -i 's|https://demo.imagewize.test|https://newsite.com|g' moiraine.WordPress.2025-11-03.xml
```

### Step 3: Verify Import

After importing, verify:

1. **Pages**: Check homepage, blog, sample pages exist
2. **Posts**: Verify blog posts with featured images
3. **Navigation**: Menus may need reassignment in **Appearance → Menus**
4. **Settings**:
   - **Settings → Reading**: Set homepage and posts page
   - **Settings → Permalinks**: Re-save to flush rewrite rules
5. **Images**: Check that featured images display correctly on posts
6. **Patterns**: Verify patterns are available in block editor

### Step 4: Theme Configuration

1. **Set homepage**: **Settings → Reading** → Set static page
2. **Configure menus**: **Appearance → Menus** → Assign to theme locations
3. **Customize theme**: **Appearance → Customize** for site identity, colors, etc.
4. **Verify patterns**: Open block editor and check pattern library

## Featured Images Location

Blog post featured images are stored in the uploads directory:

```
demo/web/app/uploads/2025/11/
├── post-1-featured.jpg
├── post-2-featured.jpg
├── post-3-featured.jpg
└── [various thumbnail sizes]
```

These images are **not embedded in patterns** - they are linked to posts via WordPress featured image metadata.

## Pattern Images

Some patterns include placeholder images using `wp:image` blocks. These are:

- Stored in the uploads directory
- Referenced by attachment ID in the pattern PHP files
- Will need re-association after import if IDs change

**Note**: Pattern images may need manual re-linking if attachment IDs change during import.

## Creating New Exports

To create a fresh export from the demo site:

### Using WordPress Admin (Recommended)

1. Go to **Tools → Export**
2. Select **All content** (or specific content types)
3. Click **Download Export File**
4. Save to this directory with naming convention: `moiraine.WordPress.YYYY-MM-DD.xml`

### Using WP-CLI

```bash
# From Trellis VM
cd trellis && trellis vm shell
cd /srv/www/demo.imagewize.com/current

# Export all content
wp export --dir=/tmp --user=admin

# Copy to demo-content directory (adjust path as needed)
cp /tmp/export.xml /srv/www/imagewize.com/current/demo/web/app/themes/moiraine/demo-content/moiraine.WordPress.$(date +%Y-%m-%d).xml
```

## Troubleshooting

### Images Not Importing

**Problem**: Featured images don't show after import

**Solutions**:
1. Verify "Download and import file attachments" was checked
2. Check image URLs in XML are accessible
3. Manually upload images via Option B above
4. Run search-replace if domain changed

### Patterns Missing Images

**Problem**: Pattern placeholder images are broken

**Solution**:
1. Upload pattern images to new site
2. Note new attachment IDs
3. Update pattern PHP files with new IDs (or regenerate patterns)

### Menus Not Assigned

**Problem**: Navigation menus empty after import

**Solution**: Go to **Appearance → Menus** and assign imported menus to theme locations

### Permalinks Not Working

**Problem**: Pages return 404 errors

**Solution**: Go to **Settings → Permalinks** and click "Save Changes" to flush rewrite rules

## Support

For issues with the Moiraine theme or demo content, contact the theme developer or refer to theme documentation.

## Version History

- **2025-11-03**: Initial export with blog posts and featured images
- **2025-04-05**: Previous export version
- **2025-04-03**: Original export version
