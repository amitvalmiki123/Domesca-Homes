# Domesca Homes — Client/Editor Guide

Simple guide for editing the site from WordPress admin without touching code.

---

## 1. Global / contact settings (used everywhere)

Go to **Domesca Options**.

| Tab | What you can edit |
|---|---|
| Contact & Branding | Tagline, Phone (link + display), Email, Address, Address/Location link, Facebook URL |
| Footer | Footer about text, Footer "Get In Touch" title, Footer "Request a Quote" button, Copyright line |
| Forms | Hero form CF7 shortcode, Final CTA form CF7 shortcode, Enquiry recipient email |

### Copyright auto year + site name
The copyright field accepts:
- `{year}` → automatically becomes the current year (e.g. 2026)
- `{site}` → automatically becomes the WordPress site name

Default: `©{year} {site}. All rights reserved.`

### Logos (header and footer are separate)
- **Header logo** = WordPress **Site Identity** logo.
  Go to **Appearance → Customize → Site Identity → Logo**.
- **Footer logo** = **Domesca Options → Footer → Footer logo**.
  Upload a separate footer image (usually a white / light version).
  If left empty, the theme uses the built-in footer logo.

---

## 2. Menus

Go to **Appearance → Menus → Manage Locations**.

| Menu location | Which menu to assign | What it controls |
|---|---|---|
| Header Primary Menu | `Primary` | Desktop nav + dropdown + mobile drawer menu |
| Footer Menu (columns) | `Footer` | Footer columns (Services, Company...) |
| Footer Bottom Menu (legal/bottom bar) | `Footer Bottom` | Footer bottom bar links (About, Services, Contact...) |

The theme creates these three default menus on activation. You can rename or
edit them in **Appearance → Menus**; the location assignment is what matters.

- Header menu: top-level items become menu links; children become dropdown items.
- Footer menu: top-level items become column headings; children become links inside that column.
- Footer bottom menu: all top-level items become links in the bottom bar.

---

## 3. Landing page sections (front page)

Edit the **front page** (the page assigned as Homepage with template "Domesca Landing Page").

- The page uses **Landing Page Sections** – a flexible content list.
- You can **Add / Reorder / Delete** sections.
- Each layout has its own editable fields:
  - Hero: image, alt, badges (repeater), eyebrow, heading, subtitle, buttons
  - Credentials: value + label (repeater)
  - About: two images, heading, WYSIWYG paragraphs, points (repeater)
  - What you get: icon, title, text (repeater)
  - Assurance: title, text, button
  - Process: heading, intro, steps (repeater), note
  - Projects: image, alt, category, title, width (repeater)
  - Testimonials: quote (WYSIWYG), name, role, initials (repeater)
  - Areas: heading, WYSIWYG description, list (repeater), map URL
  - FAQ: question + WYSIWYG answer (repeater), aside
  - Final CTA: heading, subtitle, background image, form text

Every section also has:
- **Show this section?** (show/hide toggle)
- **Order** (reorder via number)

---

## 4. Home page sections (optional main homepage)

If you use the "Domesca Home Page" template (`template-home.php`), it has the same
section list plus **Services** and **Developers**.

---

## 5. Cards / lists / repeating content

All cards, lists, timeline steps, badges, areas, FAQ items, project tiles,
testimonials and footer/global repeatables are managed as **Repeater** fields.
Use the **Add / Duplicate / Remove row** buttons in the ACF panel.

## 6. Paragraphs with styling

Sections with multiple paragraphs (About, Areas, FAQ answers, Services read-more,
Testimonials) use **WYSIWYG** editors. You can add colour/class per paragraph;
the site keeps one consistent gap between paragraphs.

## 7. Forms

- **Hero/banner form** → controlled by `Hero / banner form shortcode` (Domesca Options → Forms).
- **Final CTA / contact form** → controlled by `Final CTA / contact form shortcode` (Domesca Options → Forms).
- Create forms in **Contact → Add New** (Contact Form 7), then paste the `[contact-form-7 ...]` shortcode above.
- If the shortcode is empty, the theme shows its built-in AJAX enquiry form.

## 8. Not seeing the new section?

Check:
1. Is the section **Show this section?** ON?
2. Is the correct page/template assigned?
3. Clear any cache plugin after saving.
