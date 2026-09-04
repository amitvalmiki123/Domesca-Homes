# Domesca Homes — Content Audit Table

Step A for PDF Rule 2. Every visible element on each page is listed with the
ACF field that controls it.

> Hybrid note: because ACF Pro repeater / flexible content is used, repeating
> groups are documented as one repeater with a row count, rather than
> `_1_`, `_2_` numbered fields. The ACF implementation in `inc/acf/register.php`
> matches this table.

---

## Page: Landing / Front page (from `ads.html`)

### Header — global (shared across all pages)

| # | Section | Element | Type | ACF field name | Source |
|---|---|---|---|---|---|
| 1 | Utility | Tagline | text | `tagline` | Options |
| 2 | Utility | Email link text | text | `email` | Options |
| 3 | Utility | Phone display | text | `phone_display` | Options |
| 4 | Utility | Phone link | text | `phone` | Options |
| 5 | Utility | Facebook URL | url | `facebook_url` | Options |
| 6 | Header | Logo | image | Customizer logo | WP Customizer |
| 7 | Header | Primary menu | — | `primary` menu location | WP Menus |
| 8 | Header | CTA "Get a Free Quote" | text | options → `header_cta_text` | Options |
| 9 | Header | Phone display block | text | `phone_display` | Options |
| 10 | Footer | About text | wysiwyg | `footer_about` | Options |
| 11 | Footer | Copyright | text | `copyright` | Options |
| 12 | Footer | Footer columns | repeater | `footer_columns` | Options |
| 13 | Footer | Footer column links | repeater (nested) | `footer_columns[].links` | Options |
| 14 | Footer | Contact phone/email/address | text | `phone` / `email` / `address` | Options |
| 15 | Forms | CF7 shortcode (optional) | text | `contact_form_7_shortcode` | Options |

### Hero

| # | Section | Element | Type | ACF field name | Source |
|---|---|---|---|---|---|
| 16 | Hero | Badge rows (3) | repeater | `landing_sections[hero].badges` | Flexible |
| 17 | Hero | Badge text | text | `badges[].label` | Repeater |
| 18 | Hero | Eyebrow | text | `landing_sections[hero].eyebrow` | Flexible |
| 19 | Hero | H1 (one per page) | textarea | `landing_sections[hero].title` | Flexible |
| 20 | Hero | Subtitle | textarea | `landing_sections[hero].sub` | Flexible |
| 21 | Hero | Primary button label | text | `btn1_label` | Flexible |
| 22 | Hero | Primary button URL | url | `btn1_url` | Flexible |
| 23 | Hero | Secondary button label | text | `btn2_label` | Flexible |
| 24 | Hero | Secondary button URL | url | `btn2_url` | Flexible |
| 25 | Hero | Background image | image | `landing_sections[hero].image` | Flexible |
| 26 | Hero | Image alt text | text | `landing_sections[hero].alt` | Flexible |
| 27 | Hero | Show toggle | true_false | `show` | Rule 4 |
| 28 | Hero | Order | number | `order` | Rule 4 |

### Credentials strip

| # | Section | Element | Type | ACF field name | Source |
|---|---|---|---|---|---|
| 29 | Creds | Credential rows (4) | repeater | `landing_sections[creds].items` | Flexible |
| 30 | Creds | Value | text | `items[].value` | Repeater |
| 31 | Creds | Label | text | `items[].label` | Repeater |
| 32 | Creds | Show / Order |  | `show` / `order` | Rule 4 |

### Value proposition (About)

| # | Section | Element | Type | ACF field name | Source |
|---|---|---|---|---|---|
| 33 | About | Image A | image | `image_a` | Flexible |
| 34 | About | Image B | image | `image_b` | Flexible |
| 35 | About | Est. stamp | text | `stamp` | Flexible |
| 36 | About | Eyebrow | text | `eyebrow` | Flexible |
| 37 | About | Heading | textarea | `title` | Flexible |
| 38 | About | Visible paragraphs | wysiwyg | `lead` | Flexible |
| 39 | About | Read-more paragraphs | wysiwyg | `more` | Flexible |
| 40 | About | Points (4) | repeater | `points` | Flexible |
| 41 | About | Show / Order |  | `show` / `order` | Rule 4 |

### What you get (why cards)

| # | Section | Element | Type | ACF field name | Source |
|---|---|---|---|---|---|
| 42 | Why | Eyebrow | text | `eyebrow` | Flexible |
| 43 | Why | Heading | textarea | `title` | Flexible |
| 44 | Why | Card rows (6) | repeater | `items` | Flexible |
| 45 | Why | Icon | select | `items[].icon` | Repeater |
| 46 | Why | Card title | text | `items[].title` | Repeater |
| 47 | Why | Card text | textarea | `items[].text` | Repeater |
| 48 | Why | Show / Order |  | `show` / `order` | Rule 4 |

### Assurance strip

| # | Section | Element | Type | ACF field name | Source |
|---|---|---|---|---|---|
| 49 | Assure | Heading | textarea | `title` | Flexible |
| 50 | Assure | Text | textarea | `text` | Flexible |
| 51 | Assure | Button label | text | `button` | Flexible |
| 52 | Assure | Button URL | url | `url` | Flexible |
| 53 | Assure | Show / Order |  | `show` / `order` | Rule 4 |

### Process

| # | Section | Element | Type | ACF field name | Source |
|---|---|---|---|---|---|
| 54 | Process | Eyebrow | text | `eyebrow` | Flexible |
| 55 | Process | Heading | textarea | `title` | Flexible |
| 56 | Process | Intro | wysiwyg | `lead` | Flexible |
| 57 | Process | Step rows (5) | repeater | `steps` | Flexible |
| 58 | Process | Step label | text | `steps[].label` | Repeater |
| 59 | Process | Step title | text | `steps[].title` | Repeater |
| 60 | Process | Step text | textarea | `steps[].text` | Repeater |
| 61 | Process | Note | wysiwyg | `note` | Flexible |
| 62 | Process | Button | text/url | `button` / `url` | Flexible |
| 63 | Process | Show / Order |  | `show` / `order` | Rule 4 |

### Projects

| # | Section | Element | Type | ACF field name | Source |
|---|---|---|---|---|---|
| 64 | Projects | Eyebrow | text | `eyebrow` | Flexible |
| 65 | Projects | Heading | textarea | `title` | Flexible |
| 66 | Projects | Intro | textarea | `lead` | Flexible |
| 67 | Projects | Tile rows (9) | repeater | `items` | Flexible |
| 68 | Projects | Image | image | `items[].image` | Repeater |
| 69 | Projects | Alt text | text | `items[].alt` | Repeater |
| 70 | Projects | Category | text | `items[].category` | Repeater |
| 71 | Projects | Title | text | `items[].title` | Repeater |
| 72 | Projects | Width modifier | select | `items[].class` | Repeater |
| 73 | Projects | Show / Order |  | `show` / `order` | Rule 4 |

### Testimonials

| # | Section | Element | Type | ACF field name | Source |
|---|---|---|---|---|---|
| 74 | Testimonials | Eyebrow | text | `eyebrow` | Flexible |
| 75 | Testimonials | Heading | textarea | `title` | Flexible |
| 76 | Testimonials | Intro | textarea | `lead` | Flexible |
| 77 | Testimonials | Review rows (3) | repeater | `items` | Flexible |
| 78 | Testimonials | Quote | wysiwyg | `items[].quote` | Repeater |
| 79 | Testimonials | Continue quote | wysiwyg | `items[].more` | Repeater |
| 80 | Testimonials | Initials | text | `items[].initials` | Repeater |
| 81 | Testimonials | Name | text | `items[].name` | Repeater |
| 82 | Testimonials | Role | text | `items[].role` | Repeater |
| 83 | Testimonials | Footer text | textarea | `foot` | Flexible |
| 84 | Testimonials | Footer button | text | `foot_button` | Flexible |
| 85 | Testimonials | Show / Order |  | `show` / `order` | Rule 4 |

### Areas

| # | Section | Element | Type | ACF field name | Source |
|---|---|---|---|---|---|
| 86 | Areas | Eyebrow | text | `eyebrow` | Flexible |
| 87 | Areas | Heading | textarea | `title` | Flexible |
| 88 | Areas | Description | wysiwyg | `prose` | Flexible |
| 89 | Areas | Area list rows (4) | repeater | `list` | Flexible |
| 90 | Areas | Area text | text | `list[].label` | Repeater |
| 91 | Areas | Notice box | textarea | `box` | Flexible |
| 92 | Areas | Button 1 label/url | text/url | `button1` / `url1` | Flexible |
| 93 | Areas | Button 2 label/url | text/url | `button2` / `url2` | Flexible |
| 94 | Areas | Map URL | url | `map` | Flexible |
| 95 | Areas | Show / Order |  | `show` / `order` | Rule 4 |

### FAQ

| # | Section | Element | Type | ACF field name | Source |
|---|---|---|---|---|---|
| 96 | FAQ | Eyebrow | text | `eyebrow` | Flexible |
| 97 | FAQ | Heading | textarea | `title` | Flexible |
| 98 | FAQ | Question rows (11) | repeater | `items` | Flexible |
| 99 | FAQ | Question | text | `items[].question` | Repeater |
| 100 | FAQ | Answer | wysiwyg | `items[].answer` | Repeater |
| 101 | FAQ | Aside title | text | `aside_title` | Flexible |
| 102 | FAQ | Aside text | textarea | `aside_text` | Flexible |
| 103 | FAQ | Show / Order |  | `show` / `order` | Rule 4 |

### Final CTA / Contact

| # | Section | Element | Type | ACF field name | Source |
|---|---|---|---|---|---|
| 104 | CTA | Eyebrow | text | `eyebrow` | Flexible |
| 105 | CTA | Heading | textarea | `title` | Flexible |
| 106 | CTA | Subtitle | textarea | `sub` | Flexible |
| 107 | CTA | Background image | image | `image` | Flexible |
| 108 | CTA | Form eyebrow | text | `form_eyebrow` | Flexible |
| 109 | CTA | Form title | text | `form_title` | Flexible |
| 110 | CTA | Form text | textarea | `form_text` | Flexible |
| 111 | CTA | Contact meta phone/email/address | text/url | global options | Options |
| 112 | CTA | Show / Order |  | `show` / `order` | Rule 4 |

---

## Page: Main Home (from `index.html`)

The home page reuses the same `hero`, `creds`, `about`, `why`, `process`,
`projects`, `testimonials`, `areas`, `faq`, `cta` field definitions above. The
following sections are additional on the home page only.

### Services (additional home section)

| # | Section | Element | Type | ACF field name | Source |
|---|---|---|---|---|---|
| 113 | Services | Eyebrow | text | `home_sections[services].eyebrow` | Flexible |
| 114 | Services | Heading | textarea | `home_sections[services].title` | Flexible |
| 115 | Services | Intro | textarea | `home_sections[services].lead` | Flexible |
| 116 | Services | Top button label/url | text/url | `button` / `url` | Flexible |
| 117 | Services | Service rows (3) | repeater | `items` | Flexible |
| 118 | Services | Image | image | `items[].image` | Repeater |
| 119 | Services | Number | text | `items[].number` | Repeater |
| 120 | Services | Title | text | `items[].title` | Repeater |
| 121 | Services | Description | textarea | `items[].text` | Repeater |
| 122 | Services | Read-more paragraphs | wysiwyg | `items[].more` | Repeater |
| 123 | Services | Tags | repeater | `items[].tags` | Repeater |
| 124 | Services | Show / Order |  | `show` / `order` | Rule 4 |

### Developers / investors (additional home section)

| # | Section | Element | Type | ACF field name | Source |
|---|---|---|---|---|---|
| 125 | Developers | Eyebrow | text | `home_sections[developers].eyebrow` | Flexible |
| 126 | Developers | Heading | textarea | `home_sections[developers].title` | Flexible |
| 127 | Developers | Description | wysiwyg | `home_sections[developers].prose` | Flexible |
| 128 | Developers | Assist rows (6) | repeater | `list` | Flexible |
| 129 | Developers | Image | image | `image` | Flexible |
| 130 | Developers | Badge title/text | text/textarea | `badge_title` / `badge_text` | Flexible |
| 131 | Developers | Button label/url | text/url | `button` / `url` | Flexible |
| 132 | Developers | Show / Order |  | `show` / `order` | Rule 4 |

---

## Repeating-content count check (PDF Rule 2 Step A)

| Group | Original count | Rendered count |
|---|---|---|
| Hero badges | 3 badges | 3 |
| Credentials | 4 items | 4 |
| About points | 4 points | 4 |
| Why cards | 6 cards | 6 |
| Process steps | 5 steps | 5 |
| Projects tiles | 9 tiles | 9 |
| Testimonials | 3 reviews | 3 |
| Areas list | 4 areas | 4 |
| FAQ questions | 11 questions | 11 |
| Footer columns | 3 columns | 3 (configurable) |
| Services | 3 services | 3 |
| Developers assist | 6 items | 6 |
