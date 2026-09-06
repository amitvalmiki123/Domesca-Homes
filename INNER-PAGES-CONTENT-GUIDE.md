# Domesca Homes — Inner Page Content Entry Guide

Ye guide batati hai ki WordPress admin me inner pages (About, Services, New Builds, Portfolio, Contact, Privacy Policy, etc.) ka content kaise bharein. Ye theme ke **"Domesca Inner Page" template** ke liye hai — front page (`ads.html` landing) ke liye alag guide hai.

---

## 1. Inner page kaise banayen

1. WP Admin → **Pages → Add New**.
2. Title daalein (H1/banner me use hota hai).
3. Right side **Page Attributes → Template** me **`Domesca Inner Page`** select karein.
4. `Publish` karein (ya pehle **Update** nahi karna ho to draft me bhi fields dikh jayenge).
5. Page ki **URL/slug** page type decide karne me help karti hai. Ye slugs automatically sahi HTML-content layout load karte hain:

| Page slug | Page type (content) |
|---|---|
| `/about/` | About Us |
| `/services/` | Services |
| `/our-plans/` | Our Plans |
| `/new-builds/` | New Builds |
| `/townhouse-developments/` | Townhouse Developments |
| `/multi-unit-projects/` | Multi-Unit Projects |
| `/extensions/` | Extensions |
| `/renovations/` | Renovations |
| `/portfolio/` | Portfolio |
| `/contact/` | Contact |
| `/location-hillside/` | Location / Hillside |
| `/privacy-policy/` | Privacy Policy |
| koi bhi custom slug | Plain / Custom content page |

> Note: Agar Page Type dropdown me zyada concrete choice nahi hai, to slug se page type auto-detect hota hai. Custom slug ke liye `Page type / defaults` dropdown se **Plain / Custom** ya **About Us** choose kar sakte hain.

---

## 2. 2 content modes samjhein

Inner page ka content 2 tarike se aata hai — **koi bharna zaroori nahi**:

### Mode A — Defaults (recommended start)
- **Page sections** list khali chhodo.
- Theme automatically selected `Page type` ke converted HTML content render karta hai (banner, creds, splits, reviews, projects, FAQ, CTA — jo page me design me hai).
- Ye mode sabse fast hai: page banao, slug sahi rakho, publish karo — design ready.

### Mode B — Custom ACF sections
- **Page sections → Add section** se sections add karein.
- Jaise hi plugin kisi layout me value daalte hain, wahi section default HTML content ki jagah dikhta hai.
- Khali/unfilled fields design me kuch nahi dikhati (empty field = koi output nahi).
- Sections ko Add/Reorder/Remove karke poora page apne design se bana sakte hain.

> Best approach: pehle Mode A me page preview dekh lijiye, phir sirf wahi sections customize karein jisme naya text/image chahiye.

---

## 3. Steps to edit content

1. Page ko edit mode me kholein.
2. Neeche **Domesca Inner Page** ke fields dikhte hain (same order as above).
3. **Page type / defaults** se page ka base choose karein (ya slug par trust karein).
4. **Page sections → Add section** se layout add karein. Har layout ke andar `Show this section?` (yes/no) aur `Order` (number) sabse upar milta hai.
5. Fields bharein — `Text`, `Textarea`, `WYSIWYG`, `Image`, `Repeater`, `True/False` (toggle), `Select`, `URL`.
6. Update → page front-end par dekhein.

---

## 4. Har section ke fields — quick reference

Har section me sabse pehle 2 common fields hote hain:

| Field | Type | Kya karta hai |
|---|---|---|
| **Show this section?** | Toggle | `Yes` = section render hota hai; `No` = hide. Default `Yes`. |
| **Order** | Number | Number jitna chhota, utna pehle dikhta hai. Default `10`. |

---

### 4.1 Page banner (top hero — `pbanner`)
Inner page ka sabse upar wala banner. Style me image background + title + buttons + enquiry form hota hai.

| Field | Type | Notes |
|---|---|---|
| **Plain (no form column)** | Toggle | `Yes` = form column nahi dikhega (simple banner). |
| **Background image** | Image | ~1600px, background banega. |
| **Title (H1)** | Textarea | Page ka main heading. HTML allowed (`<em>`, `<span class="serif-accent">`). |
| **Subtitle** | Textarea | Small descriptive line. |
| **Primary button label / URL** | Text | Main CTA, e.g. “Request Your Free Quote”. |
| **Secondary button label / URL** | Text | Dark/ghost CTA, e.g. “Call 0411 526 251”. |
| **Show enquiry form** | Toggle | Banner me form dikhana hai ya nahi. |
| **Form eyebrow / title / text** | Text / Textarea | Form card ke heading aur intro. |

> Banner title blank chhoda to WordPress page title use hota hai.
> `tel:+61411526251` jaise phone URLs direct paste kar sakte hain.

---

### 4.2 Credentials strip (`creds`)
Numbers wali chhoti strip (2013, 10+, 4, Melbourne, etc.).

| Field | Type | Notes |
|---|---|---|
| **Value** | Text | Bada number/word, e.g. `2013`, `10+`, `Melbourne`. |
| **Label** | Text | Uske neeche wali line. |

---

### 4.3 Splits (`splits`)
Alternating image+text blocks. Har split block ke fields:

| Field | Type | Notes |
|---|---|---|
| **Flip (media left)** | Toggle | `Yes` = image left me, text right me; `No` = text left, image right. |
| **Heading level** | Select | `H2` ya `H3`. |
| **Eyebrow** | Text | Chhota uppercase label, e.g. “Who We Are”. |
| **Heading** | Textarea | Section heading (HTML allowed). |
| **Paragraphs → Type** | Select | `Paragraph` ya `Lead paragraph` (bada intro text). |
| **Paragraphs → Text / HTML** | WYSIWYG | Multi-paragraph content daal sakte hain. |
| **Check list → Label / Link URL** | Repeater | Checkmark items (optional). |
| **Buttons → Label / URL / Style** | Repeater | Primary ya Ghost buttons. |
| **Image / Alt text / Image tag** | Image / Text | Image, alt text aur image par overlay tag (e.g. “Established 2013”). |

---

### 4.4 Services grid (`services`)
Services page ke cards (New Home Construction, Extensions, etc.).

| Field | Type | Notes |
|---|---|---|
| **Eyebrow / Heading / Intro / Top button** | Text / Textarea | Section header. |
| **Card → Image** | Image | Service/feature image. |
| **Card → Number / eyebrow** | Text | Card ka bada label/sequence. |
| **Card → Title / URL** | Text | Card heading aur link. |
| **Card → Short description** | Textarea | Visible line. |
| **Card → Read more (WYSIWYG)** | WYSIWYG | “Read more” ke andar wala content. |
| **Card → Tags** | Repeater | Small tag buttons/labels. |

---

### 4.5 Your plans, or ours (`plans`)
“Design your own or use ours” wali section (read more toggle ke saath).

| Field | Type | Notes |
|---|---|---|
| **Eyebrow / Heading** | Text / Textarea | Section header. |
| **Lead text (WYSIWYG)** | WYSIWYG | Pehle visible paragraphs. |
| **Read more (WYSIWYG)** | WYSIWYG | “Read more” ke andar ke paragraphs. |
| **Read more label** | Text | Button label, default “Read more about our design process”. |
| **Plan routes → Icon / Title / Text** | Repeater | Two option cards (`Plans` ya `Pencil` icon). |
| **Image / Alt text** | Image / Text | Side image. |
| **Stamp / Stamp text** | Text | Overlay stamp (e.g. year). |

---

### 4.6 Why / dark grid (`why`)
Dark background wala “Why build with us” grid (numbers ke saath).

| Field | Type | Notes |
|---|---|---|
| **Eyebrow / Heading** | Text / Textarea | Section header (white text). |
| **Background image** | Image | Dark section ka background. |
| **Grid cell → Number / Title / Text** | Repeater | Har cell ka bada number, heading, description. |
| **Primary button / URL** | Text | White button. |
| **Secondary button / URL** | Text | Dark button. |
| **Note** | Text | Buttons ke neeche chhoti line. |

---

### 4.7 Process (`process`)
“How we build” steps + “Indicative build timeframes” note (blue left border + Get My Free Quote button).

| Field | Type | Notes |
|---|---|---|
| **Eyebrow / Heading / Intro (WYSIWYG)** | Text / Textarea / WYSIWYG | Section header. |
| **Steps → Step label / Title / Description** | Repeater | Step 01, Step 02, … |
| **Note label** | Text | Default `Indicative build timeframes.` — aur left-border note heading. |
| **Note (WYSIWYG)** | WYSIWYG | Timeframes note ka body. `<strong>` tags allowed. |
| **Button label / URL** | Text | `Get My Free Quote` button. |

---

### 4.8 Portfolio / projects (`projects`)
Photo grid with filter chips.

| Field | Type | Notes |
|---|---|---|
| **Eyebrow / Heading / Intro** | Text / Textarea | Section header. |
| **Filter chips → Key / Label** | Repeater | Filter buttons. `key` lower-case, e.g. `all`, `new-homes`, `renovations`. |
| **Tile → Image / Alt** | Image / Text | Project photo + alt. |
| **Tile → Category** | Text | Overlay label, e.g. “New Homes”. |
| **Tile → Filter keys** | Text | Space-separated keys jo tile ko filter karte hain, e.g. `new-homes renovations`. |
| **Tile → Title** | Text | Overlay title. |
| **Tile → Width** | Select | Default / Wide (2 col) / Half (1 col). |

---

### 4.9 Developers / investors (`developers`)
Development/multi-unit section (image + badge + checklist).

| Field | Type | Notes |
|---|---|---|
| **Eyebrow / Heading / Description (WYSIWYG)** | Text / WYSIWYG | Section header. |
| **Assist list → Item** | Repeater | Checklist items. |
| **Image** | Image | Side/feature image. |
| **Badge title / Badge text** | Text / Textarea | Image par overlay badge. |
| **Button label / URL** | Text | CTA. |

---

### 4.10 Testimonials / Google Reviews (`testimonials`)
Google Reviews section (rating, count, review cards, footer button).

| Field | Type | Notes |
|---|---|---|
| **Eyebrow / Heading / Intro** | Text / Textarea | Section header. |
| **Google rating** | Text | e.g. `5.0`. |
| **Review count** | Text | e.g. `27`. |
| **Google review URL** | URL | “Google Reviews” link. |
| **Footer text** | Textarea | Reviews ke neeche line, e.g. “We’re grateful for every review.” |
| **Footer button label / URL** | Text | e.g. “Read All Reviews”. |
| **Reviews → Quote (WYSIWYG)** | WYSIWYG | Review ka open text. |
| **Reviews → Continue quote (WYSIWYG)** | WYSIWYG | Optional “more” part. |
| **Reviews → Avatar initial / background colour** | Text | e.g. `R`, `#1a73e8`. |
| **Reviews → Name / Role** | Text | Reviewer name + project type. |

---

### 4.11 Areas we build (`areas`)
Sticky-map wali “Where We Build” section.

| Field | Type | Notes |
|---|---|---|
| **Eyebrow / Heading** | Text / Textarea | Section header. |
| **Description (WYSIWYG)** | WYSIWYG | Multi-paragraph intro. |
| **Areas list → Area** | Repeater | Checklist of suburbs/regions. |
| **Notice box** | Textarea | “Outside these areas?” wali note. |
| **Button 1 / URL** | Text | e.g. “Check Your Suburb”. |
| **Button 2 / URL** | Text | e.g. “Call 0411 526 251”. |
| **Map embed URL** | URL | Google Maps `output=embed` link. |

---

### 4.12 FAQ tabs (`faq`)
Tabbed FAQ section.

| Field | Type | Notes |
|---|---|---|
| **Eyebrow / Heading** | Text / Textarea | Section header. |
| **FAQ categories → Tab label / id** | Text | Tab ka naam + lower-case id. |
| **FAQ categories → Questions → Question / Answer (WYSIWYG)** | Text / WYSIWYG | Q&A. Answer me multi-paragraph allowed. |
| **Aside title / Aside text** | Text / Textarea | Right side “Ready to start?” card. |

---

### 4.13 Final CTA / contact (`cta`)
Bottom full-width CTA with form.

| Field | Type | Notes |
|---|---|---|
| **Eyebrow / Heading / Subtitle** | Text / Textarea | CTA text. |
| **Background image** | Image | Section background. |
| **Form eyebrow / title / text** | Text / Textarea | Form card header. |

---

### 4.14 Contact split + form (`contact`)
Contact page ka 2-column layout (details + light form).

| Field | Type | Notes |
|---|---|---|
| **Eyebrow / Heading** | Text / Textarea | Section header. |
| **Description (WYSIWYG)** | WYSIWYG | Intro paragraphs. |
| **Form eyebrow / title / text** | Text / Textarea | Form card header. |

> Phone, email, address, service area, Facebook — ye **Domesca Global Options** se aate hain, is section me nahi. Contact page par wahi values dikhengi.

---

### 4.15 Full-width map (`contact_map`)
| Field | Type | Notes |
|---|---|---|
| **Map embed URL** | URL | Google Maps embed URL. |

---

### 4.16 Document / prose (`prose`)
Privacy Policy / legal / simple text page.

| Field | Type | Notes |
|---|---|---|
| **Title** | Text | Page heading (H1). |
| **Meta line** | Text | Chhoti meta line (e.g. “Last updated: …”). |
| **Content (WYSIWYG)** | WYSIWYG | Full body. Images allowed in this field. |

> Ye field khali chhoda to page ki normal WordPress editor content (`the_content`) use hota hai.

---

## 5. Global settings (inner pages par apply hote hain)

Ye fields page sections me nahi, **Domesca Options** (left admin menu me “Domesca Options”) me set hote hain:

| Setting | Kya karta hai |
|---|---|
| **Phone (full tel link)** | `tel:` link ke liye, e.g. `+61411526251`. |
| **Phone (displayed)** | Screen par dikhne wala, e.g. `0411 526 251`. |
| **Email** | Header/footer/contact email. |
| **Address / service area** | Footer + contact page. |
| **Header form shortcode** | Hero/banner enquiry form (Contact Form 7). |
| **Final CTA / contact form shortcode** | Bottom CTA form (Contact Form 7). |
| **Enquiry recipient email** | Built-in form ka recipient. |
| **Footer logo** | Footer ka alag (light) logo. |
| **Footer about / copyright / quote button text** | Footer content. |

> **Menus** WordPress **Appearance → Menus** se manage hote hain — header, mobile drawer, footer columns aur footer bottom bar sab same menu system use karte hain.

---

## 6. Forms (Contact Form 7)

- Create CF7 forms normally, then uske shortcode ko **Domesca Options** ke form fields me paste karein.
- Field names in reserved words ko avoid karein, ye names use karein:
  `your-name`, `your-phone`, `your-email`, `your-message`, `your-project-type`, `your-suburb`, `your-stage`.
- Submit button me theme classes zaroor daalein:
  `[submit class:btn class:btn--block class:btn--lg "Send My Enquiry"]`
- Select fields custom arrow ke liye theme CSS handle karta hai — CF7 me special styling ko hataayen.

---

## 7. Images & alt text recommendations

- Upload **max ~1600px** wide images (theme zip size ke liye zaroori).
- **Hero/banner** image par `alt` bhariye (screen readers ko context mile).
- Har project/service/person image ke liye **Alt text** likhein, e.g.
  - `Open-plan kitchen and living area in a completed Domesca Homes new build`
  - `Two-storey brick facade at dusk`
- **Empty fields output nothing** — isliye koi bhi khali image/title/page chhoda to section me woh element nahi dikhega.

---

## 8. Quick workflow (copy-paste checklist)

1. Page create karo, slug set karo (e.g. `/new-builds/`).
2. Template = `Domesca Inner Page`.
3. Page type/defaults select karo.
4. Page publish karo → preview to confirm defaults matching design.
5. Sirf wahi sections customize karo jo alag chahiye:
   - Banner → change title/image/buttons/form.
   - Splits/Projects → naye text/images/items.
   - Reviews → rating, count, review cards.
   - FAQ → questions + answers.
   - CTA/Contact → form header text/image.
6. Global details (phone/email/address/menus/footer/logo) Domesca Options me set karo.
7. Mobile preview bhi dekh lo (drawer + banner form).

---

## 9. Common mistakes (avoid)

- ❌ Page template select karna bhoolna → theme fields nahi dikhenge.
- ❌ Page type ko slide ke liye wrong slug par chhodna.
- ❌ Har section add karke baad me sab khali chhod dena — defaults use hota hai, custom sections ko bharna zaroori hai agar add kiya hai.
- ❌ Image alt blank rakhna (accessibility + SEO).
- ❌ CF7 field names me reserved words (`name`, `email`, `message`) — use `your-*` names.
- ❌ Header ka logo hi footer me upload karna — footer light logo alag field me daalein.
- ❌ “Indicative build timeframes” note ko normal paragraph me daal dena — Process section ke **Note** field me daalein (blue left border design wahi milega).
