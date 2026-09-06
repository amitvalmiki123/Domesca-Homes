# Domesca Homes — About Us Page Content Entry Guide

Ye guide sirf **About Us page** ke liye hai. Isme exact fields aur content values diye hain taaki aap landing page ki tarah manually fill karein.

> **Pehle check karein:**
> 1. WP Admin → **Pages** → “About Us” page kholen.
> 2. Right side **Template** = **`Domesca About Page`** hona chahiye (agar “Domesca Inner Page/Custom” hai to change karein, phir Update).
> 3. About par **3 page-specific sections** + **3 shared sections** hain.

### About page ka section order (exact design order)
1. **Page banner** — page-specific
2. **Credentials strip** — shared
3. **Splits (3 blocks)** — page-specific
4. **Google Reviews** — shared
5. **Portfolio / Projects** — shared
6. **Final CTA / contact** — page-specific

---

## 1. Page banner

Edit screen me **Domesca About Page Sections → Add section → Page banner** add karein.

| Field | Value |
|---|---|
| Show this section? | Toggle **Yes** |
| Order | `10` |
| Plain (no form column) | Toggle **No** |
| Background image | Upload **exterior-townhouse-dusk.jpg** (ya apna image, ~1600px) |
| Title (H1) | `About Domesca Homes` |
| Subtitle | *(khali chhod sakte hain)* |
| Primary button label | `Request Your Free Quote` |
| Primary button URL | `#banner-form` |
| Secondary button label | `Call 0411 526 251` |
| Secondary button URL | `tel:+61411526251` |
| Show enquiry form | Toggle **Yes** |
| Form eyebrow | `Free & no-obligation` |
| Form title | `Talk To Our Team` |
| Form text | `Share a few details about your project and our team will review your needs and respond with the next steps.` |

> Image ke liye agar aap ke paas upload nahi hai, to theme ki bundled image `exterior-townhouse-dusk.jpg` automatically use hoti hai. Content change karne ke liye sirf title/subtitle/buttons badlein.

---

## 2. Credentials strip (SHARED)

Ye section ab per-page field nahi hai — **ek baar** **Domesca Options → Shared Sections → Credentials strip** me bharein.

Rows (Add credential → 4 rows):

| # | Value | Label |
|---|---|---|
| 1 | `2013` | `Founded as a Melbourne-based building company` |
| 2 | `10+` | `Years delivering residential construction across Melbourne` |
| 3 | `4` | `Core services: new homes, multi-unit, renovations & extensions, knockdown rebuilds` |
| 4 | `Melbourne` | `Servicing the north and west, including the Moonee Valley region` |

> Ye landing page, home page, aur saare inner pages par auto-apply hoga.

---

## 3. Splits (3 blocks) — page-specific

Edit screen me **Domesca About Page Sections → Add section → Splits** add karein.

**Section level:**
- Show this section? → **Yes**
- Order → `30`

Phir **Split blocks → Add split** — 3 blocks bharein.

### Split Block 1 — Who We Are
| Field | Value |
|---|---|
| Flip (media left) | **No** (image right) |
| Heading level | **H2** |
| Eyebrow | `Who We Are` |
| Heading | `Quality over quantity, on every project.` |
| Paragraphs → Add 3 paragraphs | (see below) |
| Check list | *(khali)* |
| Buttons → Add 2 | (see below) |
| Image | `kitchen-living-pendant.jpg` |
| Alt text | `Open-plan kitchen and living area with feature pendant lighting in a Domesca Homes build` |
| Image tag | `Established 2013` |

Paragraph 1 (Type: Paragraph):
```
Founded in 2013, Domesca Homes is a Melbourne-based building company specialising in custom homes, renovations, knockdown rebuilds, and multi-unit developments across Melbourne’s north and west.
```

Paragraph 2 (Type: Paragraph):
```
We were established to meet the growing demand for reliable, high-quality residential construction delivered with clear communication, strong project management, and consistent results.
```

Paragraph 3 (Type: Paragraph):
```
At Domesca Homes, we focus on quality over quantity. Every project is managed with care from pre-construction through to completion, ensuring attention to detail, transparency, and a smooth building experience for our clients.
```

Button 1: Label `Start Your Project`, URL `#banner-form`, Style Primary
Button 2: Label `Call 0411 526 251`, URL `tel:+61411526251`, Style Ghost

---

### Split Block 2 — How We Work
| Field | Value |
|---|---|
| Flip (media left) | **Yes** (image left) |
| Heading level | **H3** |
| Eyebrow | `How We Work` |
| Heading | `Built on trust, communication and results.` |
| Paragraphs → Add 2 | (see below) |
| Check list → Add 4 | (see below) |
| Buttons | *(khali)* |
| Image | `hallway-timber.jpg` |
| Alt text | `Timber-floored entry hallway with a feature door in a Domesca Homes custom build` |
| Image tag | *(khali)* |

Paragraph 1 (Type: Paragraph):
```
We understand the trust involved in building — whether it’s a family home or an investment development. That’s why we take the time to understand your goals, communicate openly, and deliver work that meets both your expectations and industry standards.
```

Paragraph 2 (Type: Paragraph):
```
Our team works closely with homeowners, investors, and developers to deliver practical building solutions that achieve strong outcomes. From concept through to completion, we are committed to making the process straightforward, professional, and well-managed.
```

Check list (Label only, URL khali):
1. `Clear, direct communication throughout the build`
2. `Transparent, detailed pricing with no hidden surprises`
3. `Freedom to choose materials from any supplier you prefer`
4. `Final inspections and warranty support after handover`

---

### Split Block 3 — Who We Build For
| Field | Value |
|---|---|
| Flip (media left) | **No** (image right) |
| Heading level | **H3** |
| Eyebrow | `Who We Build For` |
| Heading | `Homeowners, investors and developers.` |
| Paragraphs → Add 2 | (see below) |
| Check list | *(khali)* |
| Buttons → Add 2 | (see below) |
| Image | `exterior-townhouse-brick.jpg` |
| Alt text | `Completed multi-unit development in brick and dark render at dusk` |
| Image tag | `Melbourne north & west` |

Paragraph 1 (Type: Paragraph):
```
Whether you have all the plans and permits ready for construction, or you’re starting from the ground up with nothing more than a vision, our architect and interior designer can assist with a concept plan to suit your needs.
```

Paragraph 2 (Type: Paragraph):
```
For developers and investors we take on townhouse, unit and small-scale residential developments, managing council approvals, engineering and trades under one point of contact.
```

Button 1: Label `See All Services`, URL `/services/`, Style Ghost
Button 2: Label `View Our Work`, URL `/portfolio/`, Style Ghost

---

## 4. Google Reviews (SHARED)

**Domesca Options → Shared Sections → Google reviews** me ek baar bharein.

| Field | Value |
|---|---|
| Eyebrow | `Google Reviews` |
| Heading | `What our clients <span class="serif-accent">say.</span>` |
| Intro | `Reviews published by Domesca Homes clients.` |
| Google rating | `0.0` |
| Review count | `00` |
| Google review URL | `https://www.google.com/search?q=Domesca+Homes+Hillside` |
| Footer text | `Whether it’s a family home or an investment development, we take the time to understand your goals.` |
| Footer button label | `Get Your Free Quote` |
| Footer button URL | `#enquiry-form` |
| Reviews | 3 rows (see below) |

### Add Review 1
| Field | Value |
|---|---|
| Quote (WYSIWYG) | `<p>If I could give 10 stars, I would! The work completed by Hamza and his team was outstanding. From communication to the quality of the work, I could not be happier. I highly recommend Domesca Homes.</p>` |
| Continue quote | *(khali)* |
| Avatar initial | `R` |
| Avatar background colour | `#1a73e8` |
| Name | `Rebecca Tipping` |
| Role / project | `Domesca Homes client` |

### Add Review 2
| Field | Value |
|---|---|
| Quote (WYSIWYG) | `<p>Literally counting our blessings for having found Hamza and Domesca Homes to build our 2 units!! For the 10 months we worked with him, work progressed very well, Hamza was super easy to talk to and communicated well regarding any issues…</p>` |
| Continue quote | `<p>…and he was always positive of getting work done and stuck to his timelines well, managing delays with a lot of patience. His standards are high and his work is of top quality and we are super impressed by his materials and fittings. We are lucky to have a good relationship with our builder in an industry where most building experiences can be traumatic.</p>` |
| Avatar initial | `J` |
| Avatar background colour | `#e8710a` |
| Name | `Jeena S` |
| Role / project | `2-unit development` |

### Add Review 3
| Field | Value |
|---|---|
| Quote (WYSIWYG) | `<p>I cannot begin to express how happy we were with Domesca Homes in building our forever home. From the very beginning Hamza was amazing in terms of guiding us with everything, I cannot speak more highly of him…</p>` |
| Continue quote | `<p>Having never built before, Hamza was awesome through the whole process, always communicated with us, very patient and provided us with advice throughout the build. He was able to build us an amazing house on time and within our budget.</p><p>The craftsmanship and eye for detail during the build by Hamza was excellent. I would highly highly recommend him to anyone looking to build their house and would not hesitate to go straight to him if I was ever building again.</p>` |
| Avatar initial | `J` |
| Avatar background colour | `#137333` |
| Name | `Jon Siotas` |
| Role / project | `New home build` |

---

## 5. Portfolio / Projects (SHARED)

**Domesca Options → Shared Sections → Portfolio / projects** me bharein.

| Field | Value |
|---|---|
| Eyebrow | `Portfolio — Photo Gallery` |
| Heading | `Homes, townhouses and renovations we’ve <span class="serif-accent">delivered.</span>` |
| Intro | `A selection of completed Domesca Homes projects across Melbourne — new builds, townhouse and unit developments, and full renovations.` |

**Filter chips:**
1. Key `all` / Label `All Projects`
2. Key `new-homes` / Label `New Builds`
3. Key `developments` / Label `Townhouses & Units`
4. Key `renovations` / Label `Renovations & Extensions`
5. Key `kitchens` / Label `Kitchens`
6. Key `bathrooms` / Label `Bathrooms`

**Project tiles (abhi theme default me jitne hain usi ko reuse karein; change karna ho to):**
Use bundled images: `kitchen-living-pendant.jpg`, `bathroom-marble-vanity.jpg`, `exterior-townhouse-dusk.jpg`, `kitchen-dark-cabinetry.jpg`, `stairwell-void.jpg`, `entry-black-door.jpg`, etc.

> Agar sirf existing content chahiye to is section me filhal ye theme defaults me already hain. Isse manual fill karne ki zaroorat sirf tab hai jab aap project images/titles change karna chahte hain.

---

## 6. Final CTA / contact — page-specific

Edit screen me **Domesca About Page Sections → Add section → Final CTA / contact** add karein.

| Field | Value |
|---|---|
| Show this section? | **Yes** |
| Order | `60` |
| Eyebrow | `Get In Touch With Us Today` |
| Heading | `Let’s build something you’ll be proud of for <span class="serif-accent">decades.</span>` |
| Subtitle | `Whether you have all the plans and permits ready for construction, or nothing more than a vision, our team can help you take the next step.` |
| Background image | `kitchen-white-island.jpg` |
| Form eyebrow | `Enquire Online` |
| Form title | `Request Your Free Quote` |
| Form text | `Tell us what you’re planning and we’ll come back to you with the next steps.` |

> Is section ke form ko **Domesca Options → Forms → Final CTA / contact form shortcode** me CF7 shortcode dal kar control karte hain.

---

## 7. Save & check

1. Sab fields bharne ke baad **Update** karein.
2. Page ko preview karein — section order hoga:
   `Banner → Creds → Split 1/2/3 → Reviews → Portfolio → Final CTA`
3. Design match nahi ho raha ho to sirf ye dekhein:
   - Template `Domesca About Page` chuna hai.
   - Split blocks me `Flip` sahi set hai (Block 1 = No, Block 2 = Yes, Block 3 = No).
   - Shared sections **Domesca Options → Shared Sections** me bhi bhare hain (page me sirf show/order toggle hai).

---

## 8. Quick copy list (one-screen reference)

**Banner:** About Domesca Homes / Request Your Free Quote / Call 0411 526 251 / Talk To Our Team / Free & no-obligation.

**Splits:**
- Who We Are — “Quality over quantity, on every project.”
- How We Work — “Built on trust, communication and results.”
- Who We Build For — “Homeowners, investors and developers.”

**Shared:** 2013 / 10+ / 4 / Melbourne (creds) + Google Reviews + Portfolio.

**CTA:** “Let’s build something you’ll be proud of for decades.” + Request Your Free Quote form.
