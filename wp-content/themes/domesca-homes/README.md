# Domesca Homes — WordPress Parent/Child Theme

Custom WordPress theme generated from the Domesca Homes website design
(Ads: `ads.html`, Main home: `index.html`, and full site pages), following the
**WordPress Theme Conversion Master Prompt** workflow with a **Hybrid ACF Pro**
implementation.

## What is included

- **Minimal parent theme** (`domesca-parent`) — 3 files only: `style.css`, `index.php`, `functions.php`.
- **Child theme** (`domesca-homes`) — all theme templates, styling, scripts, and functionality.
- **Page Templates**:
  - `Domesca Landing Page` (`template-landing.php`) — Paid ads landing page (`ads.html`)
  - `Domesca Home Page` (`template-home.php`) — Main homepage layout (`index.html`)
  - `Domesca About Us` (`template-about.php`) — Company story & pillars (`about.html`)
  - `Domesca Services` (`template-services.php`) — Services overview (`services.html`)
  - `Domesca Service Detail` (`template-service-detail.php`) — New Builds, Extensions, Renovations, Multi-Unit, Townhouse Developments, Our Plans
  - `Domesca Portfolio` (`template-portfolio.php`) — Photo gallery & completed projects (`portfolio.html`)
  - `Domesca Contact Us` (`template-contact.php`) — Contact meta, form & Google map embed (`contact.html`)
  - `Domesca Location Page` (`template-location.php`) — Suburb / Location page (`location-hillside.html`)
- **Content Audit Table** (`CONTENT-AUDIT.md`) — Rule 2 field mapping.
- **defaults.php** — All default HTML content as PHP fallback arrays (zero-config out of the box).
- **ACF Pro field groups** in `inc/acf/` (Flexible Content + Repeater + Options page).
- **WordPress Customizer** (`inc/customizer.php`) — colours, typography, spacing, container (Rule 19).
- **CSS architecture** — `assets/css/main.css` (base) + `assets/css/responsive.css` (media queries only).
- **Installable zips** — `domesca-parent.zip` and `domesca-homes.zip` in the repo root.

## Navigation & Header

- **Primary Menu**:
  1. Home (`/`)
  2. About Us (`/about-us/`)
  3. Services (`/services/`) with dropdown:
     - Our Plans (`/our-plans/`)
     - New Builds (`/new-builds/`)
     - Townhouse Developments (`/townhouse-developments/`)
     - Multi-Unit Projects (`/multi-unit-projects/`)
     - Extensions (`/extensions/`)
     - Renovations (`/renovations/`)
  4. Our Plans (`/our-plans/`)
  5. Portfolio (`/portfolio/`)
  6. Contact Us (`/contact-us/`)
- **Header CTA**: Phone `0411 526 251` (`Call us now`) + `Get a Free Quote` button.
- **Mobile Drawer**: Responsive off-canvas navigation with accessible +/- sub-menu toggles.

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
   - `Homepage` → a page assigned to template **Domesca Home Page** (or **Domesca Landing Page**)
5. **Appearance → Menus → Manage Locations** → assign menus:
   - **Header Primary Menu** → `Primary`
   - **Footer Menu (columns)** → `Footer`
   - **Footer Bottom Menu (legal/bottom bar)** → `Footer Bottom`
6. **Header logo** → **Appearance → Customize → Site Identity → Logo**.
   **Footer logo** → **Domesca Options → Footer → Footer logo**.
7. **Domesca Options** — set contact info, phone `0411 526 251`, email, footer text, and forms.
