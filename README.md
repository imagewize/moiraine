# Moiraine — A WordPress Block Theme

![Image](https://user-images.githubusercontent.com/1415737/217930880-5d019715-f0c2-4f2f-9d24-dd466abf531b.jpg)

Moiraine is a modern WordPress block theme designed to work seamlessly with the WordPress block editor and site editor, where you can create beautiful, fully-customizable websites with WordPress's built-in page builder — no page builder or coding skills required.

Moiraine ships with over 50 beautifully-designed patterns, page templates, block styles, and style variations so you can design stunning pages quickly with drag and drop instead of code. Moiraine is also blazing fast, fully customizable via the WordPress UI, fully responsive out of the box, and scores 100% across the board on performance.

## Based on Ollie

Moiraine is based on the Ollie theme by [Mike McAlister](https://mikemcalister.com). We would like to express our gratitude to Mike for creating such an excellent foundation for WordPress block themes. You can find the original Ollie theme at [OllieWP's GitHub repository](https://github.com/OllieWP/ollie).

## Table of Contents

- [Getting Started with Moiraine](#getting-started-with-moiraine)
- [Working with Block Themes](#working-with-block-themes)
  - [Site Editor](#site-editor)
  - [Patterns](#patterns)
  - [Global Styles](#global-styles)
  - [Template Parts](#template-parts)
  - [Export Your Site](#export-your-site)
- [Developer Notes](#developer-notes)
- [License](#license)

## Getting Started with Moiraine

| Links  | Description |
| ------------- | ------------- |
| [Download Moiraine Theme Zip](https://github.com/OllieWP/ollie/releases/latest/download/ollie.zip)  | Download the latest Moiraine theme zip to install on your WordPress site.  |
| [Download Moiraine Child Theme Zip](https://github.com/imagewize/moiraine-child)  | Download the Moiraine child theme zip for customizations  |

Moiraine is built for modern WordPress features and requires WordPress 6.0 or later. To get started, download the theme and install it into your WordPress website by going to `Appearance → Themes → Add New`.

## Working with Block Themes

Once you activate Moiraine, it will largely behave like any other traditional WordPress theme. You can create posts and pages just like you always have. However, as a block theme, Moiraine also supports powerful new features like the site editor, patterns, global styles, and more. 

A block theme is a WordPress theme with templates entirely composed of blocks so that in addition to post and page content, the block editor can also be used to edit all areas of the site — headers, footers, templates, and more.

### Site Editor

The WordPress site editor is the new way to build beautiful websites with WordPress. Using blocks, patterns, and a full suite of drag-and-drop design tools, you can build pages right inside WordPress without an extra page builder.

To edit your site via the site editor, go to `Appearance → Editor`. Here, you can create and edit templates, create menus, customize your website styles, color palette, typography, block styles, and much more. This interface is where you'll design and build your site before exporting it later.

### Patterns

Patterns are pre-designed page elements that can be used to quickly design a page section or a full page layout. Instead of designing a page from scratch, WordPress creators can now lean on patterns to quickly design their full website in the WordPress Site Editor.

You can access Moiraine's patterns via the block inserter on posts, pages, or in the site editor. 

#### Creating page designs with patterns

To create beautiful pages, simply insert Moiraine's full-page patterns onto any page, and apply the No Page Title template via the editor sidebar. This template removes the default page title, which better accommodates the full-page patterns, so make sure you have an H1 in your design for SEO best practices.

### Global Styles

Global styles is the user interface in the Site Editor where you can modify all the styles associated with your site. This could be typography, fonts, button colors, link colors, layout defaults, and more. 

Global styles is powered by a `theme.json` in the root of the theme folder. This configuration file lets you define site-wide and block-specific styles to be used by the global styles interface.

### Template Parts

A template part is a part of your site that appears across most or all pages. The most common template parts are for the header, footer, and sidebar of a website. Template parts let you easily make global changes to the design or markup of global site elements.

### Export Your Site

Once you've finished building and customizing your site with the site editor, you can export a zip to install on another site. While in the site editor, go to the Options menu (upper right hand corner), and select Export under the Tools heading. WordPress will write all of your changes to a theme zip file.

## Developer Notes

The Moiraine theme works out of the box, so no build steps are required. However, we have included a Composer file that is used for linting to PHP and WordPress core standards. 

- `composer run lint`
- `composer run wpcs:scan`
- `composer run wpcs:fix`

## License

Moiraine is licensed under the [GPL-3.0 license](https://www.gnu.org/licenses/gpl-3.0.html).
