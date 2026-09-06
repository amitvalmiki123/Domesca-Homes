# Domesca Homes — Inner Page Content Entry Guide

Ye guide batati hai ki WordPress admin me inner pages (About, Services, New Builds, Portfolio, Contact, Privacy Policy, etc.) ka content kaise bharein.

> **Important:** Is update ke baad inner pages ka workflow badal gaya hai.
> - Har page type ka **apna alag template** hai (About Page, Services Page, ...).
> - **Page type / defaults dropdown hat gaya** — template select karte hi page type fix ho jata hai.
> - **Common sections** (Credentials strip, Google Reviews, Portfolio/Projects) ab sab pages ke liye **Domesca Options → Shared Sections** me ek baar edit hote hain, aur har page par automatic update hote hain.
> - Breadcrumbs ab dynamic hain — page slug / menu ke hisaab se aate hain.

---

## 1. Inner page kaise banayen

1. WP Admin → **Pages → Add New**.
2. Title daalein (banner/H1 ke liye).
3. Right side **Page Attributes → Template** me apna template choose karein:

   | Template | Kis page ke liye |
   |---|---|
   | `Domesca About Page` | About Us |
   | `Domesca Services Page` | Services |
   | `Domesca Our Plans Page` | Our Plans |
   | `Domesca New Builds Page` | New Builds |
   | `Domesca Townhouse Developments Page` | Townhouse Developments |
   | `Domesca Multi-Unit Projects Page` | Multi-Unit Projects |
   | `Domesca Extensions Page` | Extensions |
   | `Domesca Renovations Page` | Renovations |
   | `Domesca Portfolio Page` | Portfolio |
   | `Domesca Contact Page` | Contact |
   | `Domesca Location / Hillside Page` | Location / Hillside |
   | `Domesca Privacy Policy Page` | Privacy Policy |
   | `Domesca Plain Page` | Plain / custom content |

4. Publish / Update karein.
5. Neeche **es page ke sections** field group dikhega (template ke hisaab se).

> **Note:** `Domesca Inner Page (Custom)` sirf purane pages ke liye backward-compat fallback hai. Naye pages ke liye upar wale specific templates use karein.

---

## 2. 2 content modes

### Mode A — Defaults (recommended start)
- **Page sections** khali chhodo.
- Theme automatically us page type ke converted HTML content render karta hai (banner, splits, reviews, projects, FAQ, CTA — design jaisa hai).
- Ye sabse fast hai: template choose karo, page publish karo, ready.

### Mode B — Custom ACF sections
- **Page sections → Add section** se sections add karein.
- Jaise hi layout me value daalte hain, wahi section default HTML ke bajaye dikhta hai.
- **Common sections** (Credentials / Reviews / Portfolio) **yahan content fields nahi dikhengi** — sirf show/order toggle milta hai. Unka content **Domesca Options → Shared Sections** me edit hota hai.

---

## 3. Shared sections (ek baar edit → har page update)

Now these are global. Go to **Domesca Options → Shared Sections** tab:

### 3.1 Credentials strip
- **Value** — bada number/word, e.g. `2013`, `10+`, `Melbourne`.
- **Label** — uske neeche wali line.

Yahan bhaarte hi ye landing, home, aur saare inner pages par apply ho jata hai.

### 3.2 Google Reviews
- **Eyebrow / Heading / Intro** — section header.
- **Google rating / Review count** — e.g. `5.0`, `27`.
- **Google review URL** — “See All Reviews” link.
- **Footer text / Footer button label / URL** — reviews ke neeche.
- **Reviews** repeater — har review ka:
  - Quote (WYSIWYG)
  - Continue quote (optional)
  - Avatar initial + background colour
  - Name + Role/project

### 3.3 Portfolio / Projects
- **Eyebrow / Heading / Intro** — section header.
- **Filter chips** — `key` (lower-case, e.g. `all`, `new-homes`) + `label`.
- **Project tiles** — har tile:
  - Image + Alt
  - Category
  - Filter keys (space separated)
  - Title
  - Width (Default / Wide / Half)

---

## 4. Har page-specific section ke fields

Har non-common section me sabse pehle 2 common fields hote hain:

| Field | Type | Kya karta hai |
|---|---|---|
| **Show this section?** | Toggle | `Yes` = render; `No` = hide. Default `Yes`. |
| **Order** | Number | Number jitna chhota, utna pehle. Default `10`. |

### 4.1 Page banner (top hero — `pbanner`)
| Field | Notes |
|---|---|
| **Plain (no form column)** | Toggle: `Yes` = form nahi dikhega. |
| **Background image** | ~1600px. |
| **Title (H1)** | Main heading, HTML allowed. |
| **Subtitle** | Chhoti line. |
| **Primary / Secondary button + URL** | CTAs. |
| **Show enquiry form** | Toggle. |
| **Form eyebrow / title / text** | Form card header. |

### 4.2 Splits
| Field | Notes |
|---|---|
| **Flip (media left)** | Toggle. |
| **Heading level** | H2/H3. |
| **Eyebrow / Heading** | Header. |
| **Paragraphs** | `Paragraph` / `Lead paragraph` + WYSIWYG. |
| **Check list** | Label + URL. |
| **Buttons** | Label + URL + Style (Primary/Ghost). |
| **Image / Alt / Image tag** | Side graphic + overlay tag. |

### 4.3 Services grid
Header + services repeater (image, number, title, URL, description, read-more, tags).

### 4.4 Your plans, or ours
Heading, lead, read-more, routes (icon/title/text), image, stamp.

### 4.5 Why / dark grid
Eyebrow, heading, background image, grid cells (number/title/text), 2 buttons, note.

### 4.6 Process
Eyebrow/heading/intro, steps (label/title/text), **Note label + Note (WYSIWYG)** — yahi “Indicative build timeframes” blue-left-border note + **Get My Free Quote** button hai.

### 4.7 Developers / investors
Header, description, assist list, image, badge, button.

### 4.8 Areas we build (sticky map)
Eyebrow/heading, description, areas list, notice box, button 1/2, map embed URL.
> `sticky-split` / `sticky-col` map behavior preserve kiya gaya hai — isko remove nahi karna.

### 4.9 FAQ tabs
Eyebrow/heading, categories (tab label/id + questions), aside title/text.

### 4.10 Final CTA / contact
Eyebrow/heading/subtitle, background image, form eyebrow/title/text.

### 4.11 Contact split + form
Eyebrow/heading/description + form header.
> Phone/email/address/service area/facebook — **Domesca Options** se aate hain, yahan nahi.

### 4.12 Full-width map
Map embed URL.

### 4.13 Document / prose (privacy, plain)
Title, meta line, content (WYSIWYG). Khali chhoda to page ki normal editor content use hoti hai.

---

## 5. Breadcrumbs (dynamic)

Breadcrumb ab automatically banta hai:
- **Home** hamesha pehla.
- Agar page ka **WordPress parent** hai → parent add hota hai.
- Agar primary menu me page kisi parent ke neeche hai (e.g. `New Builds` → `Services`) → parent crumb aata hai.
- Agar koi menu assign nahi hai, to built-in slug map (`new-builds`, `extensions`, `renovations`, ... → Services) use hota hai.
- Last crumb = current page title.

> Iske liye admin me kuch karne ki zaroorat nahi — page slug/template se auto aata hai.

---

## 6. Global settings (inner pages par apply)

**Domesca Options** me set hote hain:
- Phone (full tel + display), Email, Address, Service area, Facebook.
- Hero/banner form shortcode (CF7), Final CTA form shortcode, enquiry recipient.
- Footer logo, footer about, copyright, quote button text.

**Menus:** WordPress **Appearance → Menus** se. Header, mobile drawer, footer columns, footer bottom — sab native WP menu system.

---

## 7. Forms (Contact Form 7)

- CF7 forms banayen, shortcode **Domesca Options** me paste karein.
- Field names: `your-name`, `your-phone`, `your-email`, `your-message`, `your-project-type`, `your-suburb`, `your-stage`.
- Submit: `[submit class:btn class:btn--block class:btn--lg "Send My Enquiry"]`.

---

## 8. Images & alt text

- max ~1600px wide upload karein.
- Har image ke liye **Alt text** likhein.
- **Empty fields output nothing** — khali section/element render nahi hota.

---

## 9. Workflow checklist

1. Page banao + template choose karo (About, Services, etc.).
2. Page publish karo → defaults preview dekho.
3. **Domesca Options → Shared Sections** me credentials / reviews / portfolio ek baar set karo (har page par auto apply).
4. Page-specific sections me sirf wahi customize karo jo alag chahiye.
5. Global info (phone/email/address/menus/logo/forms) Domesca Options me set karo.
6. Desktop + mobile preview dekho.

---

## 10. Common mistakes (avoid)

- ❌ Shared sections ko page ke andar dhundhna — unka content **Domesca Options → Shared Sections** me hai.
- ❌ `Domesca Inner Page (Custom)` naye pages ke liye use karna — specific template chuno.
- ❌ Har page par baar-baar alag reviews/portfolio bharna — shared sections me ek baar bharo.
- ❌ Image alt blank rakhna.
- ❌ CF7 reserved field names (`name`, `email`, `message`) — `your-*` use karein.
- ❌ “Indicative build timeframes” normal paragraph me daalna — Process section ke **Note** field me daalein.
