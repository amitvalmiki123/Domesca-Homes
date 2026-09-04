# Domesca Homes — WordPress Parent/Child Theme

Custom WordPress theme generated from the Domesca Homes static HTML design
(Ads: `ads.html`, Main home: `index.html`), following the **WordPress Theme
Conversion Master Prompt** workflow with a **Hybrid ACF Pro** implementation.

## What is included

- **Minimal parent theme** (`domesca-parent`) — 3 files only: `style.css`, `index.php`, `functions.php`.
- **Child theme** (`domesca-homes`) — all theme work.
- **Content Audit Table** (`CONTENT-AUDIT.md`) — Rule 2 field mapping for every page/section/element.
- **defaults.php** — all original HTML content as PHP arrays (fallback).
- **ACF field groups** in `inc/acf/` (hybrid: Repeater + Flexible Content + Options page).
- **WordPress Customizer** (`inc/customizer.php`) — colours, typography, spacing, container (Rule 19).
- **CSS architecture** — `assets/css/main.css` (base) + `assets/css/responsive.css` (media queries only).
- **Installable zips** — `domesca-parent.zip` and `domesca-homes.zip` in the repo root.

## Folder structure

```
wp-content/themes/
├── domesca-parent/                # minimal parent (3 files)
└── domesca-homes/                 # child — all work
    ├── style.css                  # Template: domesca-parent
    ├── functions.php              # constants THEME_DIR/THEME_URI/THEME_VERSION
    ├── defaults.php               # all original HTML content as arrays
    ├── header.php / footer.php
    ├── front-page.php             # ads.html front page
    ├── page-templates/            # template-landing.php / template-home.php
    ├── inc/
    │   ├── setup.php / enqueue.php / nav.php / ajax.php / customizer.php
    │   ├── helpers/
    │   │   ├── field-helpers.php
    │   │   ├── image-helpers.php
    │   │   └── section-helpers.php
    │   └── acf/
    │       ├── register.php       # shared ACF Pro field registration
    │       ├── options-fields.php
    │       ├── landing-fields.php
    │       └── home-fields.php
    ├── template-parts/
    │   ├── form/                  # enquiry / contact markup
    │   └── sections/              # one self-contained file per section
    │       ├── landing-*.php
    │       └── home-*.php
    └── assets/
        ├── css/                   # main.css + responsive.css
        ├── js/                    # main.js, theme-forms.js, customizer-preview.js
        └── images/
```

## Requirements

- WordPress `>= 6.0`
- PHP `>= 7.4`
- [ACF Pro](https://www.advancedcustomfields.com/pro/) (optional but recommended — Repeater / Flexible / Options are registered as Pro fields)
- Contact Form 7 (optional — used only if a CF7 shortcode is set)

## Install

1. Upload `domesca-parent.zip`, then `domesca-homes.zip`, to `Appearance → Themes → Add New`.
2. Activate **Domesca Homes** (child theme) — parent is required.
3. Install/activate ACF Pro (recommended).
4. In **Settings → Reading**:
   - `Your homepage displays` → **A static page**
   - `Homepage` → a page assigned to template **Domesca Landing Page**
5. **Appearance → Menus** → assign menu to **Header Primary Menu** (a default menu is created on activation).
6. **Domesca Options** — set contact/global fields.
7. Edit the front page and reorder **Landing Page Sections**.

## How this follows the 19 rules

| Rule | Implementation |
|---|---|
| 1 | Minimal parent (3 files) + full child theme |
| 2 | `CONTENT-AUDIT.md` completed; ACF fields for every element |
| 3 | Empty fields output nothing |
| 4 | `show` + `order` on every section; `dsc_render_sections()` |
| 5 | Original BEM-style HTML classes preserved |
| 6–9 | CSS variables, `clamp()`, container widths in `main.css` |
| 10 | Self-contained section files in `template-parts/sections/` |
| 11 | `main.css` (base) + `responsive.css` (@media only) |
| 12 | CF7 shortcode option + fallback to built-in AJAX forms |
| 13 | One H1 per page |
| 14 | Semantic header/footer with `wp_head`/`wp_footer`/`wp_body_open` |
| 15 | 3-tier image alt fallback |
| 16 | Escaping via `esc_html`/`esc_url`/`esc_attr`/`wp_kses_post` |
| 17 | Security hardening (generator, XML-RPC, REST user, nosniff) |
| 18 | Eager above-fold / lazy below-fold images, fonts with swap, width/height |
| 19 | Customizer with live preview |
