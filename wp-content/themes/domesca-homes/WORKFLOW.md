# HTML → WordPress Theme Conversion Workflow — Domesca Homes

Reference: `Claude_Code_Updated_Instructions.pdf` (WordPress Theme Conversion
Master Prompt, 19 rules).

> Decision: the user explicitly chose **Hybrid**. We follow the PDF's
> **phase structure, parent/child architecture, Content Audit Table,
> `defaults.php`, CSS main/responsive split, Customizer, security and escaping
> rules** exactly. Where the PDF says "ACF Free only / no repeater / no
> flexible / no options page", we intentionally keep **ACF Pro** (repeater,
> flexible content, options page) because the user has ACF Pro and requested
> those fields.

## Two phases

### Phase 1 — Exact HTML → WordPress conversion
- Preserve `ads.html` as the **front page** (`front-page.php`).
- Preserve `index.html` content as the **Home template** (`template-home.php`).
- Keep every section, heading, text, image and link, same class structure and
  same visual design.
- `defaults.php` holds the original content so the frontend looks correct with
  **zero ACF data entered**.

### Phase 2 — Apply the 19 rules without changing frontend
Rebuild the architecture (parent/child, `defaults.php`, helpers, section
partials, `main.css` + `responsive.css`, Customizer) while the rendered output
stays the same.

## 1. Parent + Child theme

- `domesca-parent/`: `style.css` (metadata), `index.php`, `functions.php` (basic
  supports). No styling, no layout logic, no dependencies.
- `domesca-homes/`: all layout/content/ACF/design code.
- Child `functions.php` uses `THEME_DIR`, `THEME_URI`, `THEME_VERSION`
  constants and `require_once THEME_DIR . '/...'`.
- Zips: `domesca-parent.zip`, `domesca-homes.zip`.

## 2. Content Audit Table

See **`CONTENT-AUDIT.md`**. It must be reviewed/updated before adding ACF fields.
Implication for Hybrid: repeating groups use ACF Pro repeaters (badges,
credentials, points, why cards, steps, projects, testimonials, areas, FAQ,
services, footer columns). Each repeater row has the same sub-fields as the
original N× child elements.

## 3. ACF field registration (Hybrid)

- `inc/acf/register.php` registers:
  - **Options group** — `Domesca Global Options` (contact/branding, footer,
    and forms; footer columns are menu-driven, and project type/stage are
    managed inside Contact Form 7, not the theme).
  - **Landing group** — Flexible Content `landing_sections` (front page).
  - **Home group** — Flexible Content `home_sections` (template-home.php).
- Allowed ACF types: text, textarea, wysiwyg, image (array), url, email,
  select, true_false, number, tab, message, **repeater**, **flexible_content**.
- Field location:
  - Front page `page_type == front_page`
  - Page template `page-templates/template-landing.php`
  - Page template `page-templates/template-home.php`

## 4. Empty fields output nothing

- Every section checks `if ( ! $value )` / `if ( $value )` before outputting.
- `dsc_row_key( ... ) ?: default` pattern; no lorem / placeholder text.
- `defaults.php` is the fallback only.

## 5. Show / Hide / Reorder sections

- Every Flexible Content layout has `show` (true_false, default true) and
  `order` (number, default 10/20/30...).
- `dsc_render_sections()` in `inc/helpers/section-helpers.php` filters,
  sorts by order and calls `get_template_part('template-parts/sections/...')`.

## 6. Section partials

Each section is a self-contained file in `template-parts/sections/`:

| Page | Section file |
|---|---|
| Landing | `landing-hero.php`, `landing-creds.php`, `landing-about.php`, `landing-why.php`, `landing-assure.php`, `landing-process.php`, `landing-projects.php`, `landing-testimonials.php`, `landing-areas.php`, `landing-faq.php`, `landing-cta.php` |
| Home extra | `home-services.php`, `home-developers.php` |

## 7. CSS architecture

- `assets/css/main.css` — base styles + CSS variables.
- `assets/css/responsive.css` — **@media only** (verified programmatically).
- Both are enqueued from `inc/enqueue.php` (responsive after main).
- The original Domesca design classes and look are preserved.

## 8. WordPress Customizer

- Panel `Theme Design` with sections Colors, Typography, Spacing, Container.
- Live preview via `assets/js/customizer-preview.js`.
- Only non-default values are printed to `wp_head()`.

## 9. Forms

- ACF option `hero_form_shortcode` → `template-parts/form/enquiry.php`
  (hero/banner form).
- ACF option `contact_form_shortcode` → `template-parts/form/contact.php`
  (final CTA / before-footer form).
- If the corresponding shortcode is empty, the theme's built-in AJAX form
  (`inc/ajax.php` + `assets/js/theme-forms.js`) is used.
- `enquiry_types` and `enquiry_stages` old option repeaters were removed; the
  project-type / stage dropdowns come from `defaults.php` and are expected to
  be recreated inside the CF7 form when a shortcode is used.
- Visual styling comes from the theme CSS.

## 10. Verification

- `front-page.php` renders the ads landing page.
- `template-home.php` renders the index homepage stack.
- One H1 per page.
- All images have width/height, alt, and lazy/eager strategy.
- All dynamic output escaped.
- Security hardening applied.
- `responsive.css` contains only `@media`.
- Parent theme minimal.
