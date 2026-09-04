# Domesca Homes — Landing Page Content Entry Guide (Hinglish)

Ye guide aapko bataata hai ki **Page Editor → Landing Page Sections** me har section
ke kis field me kya likhna hai. Saara text original `ads.html` / `defaults.php` se liya
gaya hai, isliye aap bas copy-paste kar sakte hain.

> **Important:** Agar koi field khali chhodte hain to theme apna original default content
> dikha dega. Aap chaaho toh sirf unhi fields ko bharo jo aap badalna chahte hain.
> Aur jo fields aap bharoge, wahi original content ko override karega.

---

## General rules

1. **Show this section?** → `Yes` (default 1).
2. **Order** → numbers use karein: `10`, `20`, `30`... chhota number pehle aayega.
   Hero hamesha `10` rakho (sabse upar).
3. **HTML allowed hai** in:
   - `Heading` (textarea)
   - WYSIWYG fields
   - Jo fields `Intro`, `Read-more paragraphs` me code style me naam likhe hain
4. **HTML allowed NAHI hai** in simple text fields jo page par plain text ki tarah dikhte hain
   (jaise `Title`, `Label`, `Badge text`, `Name`, `Role`, `Initials`). Wahan sirf text likho.

### Italic / serif accent heading kaise bharein
Original hero heading me `confidence.` italic (serif) me aata hai. Isliye **Heading** field me
ye HTML paste karein:

```html
Build your custom home with <em class="serif-accent">confidence.</em>
```

- `<em class="serif-accent">` ye class hi italic serif look deti hai.
- Wahi pattern baaki heading fields me bhi use hota hai:
  - `What you get when you build with <span class="serif-accent">us.</span>`
  - `A clear path from first call to <span class="serif-accent">handover.</span>`
  - etc.

> Agar aap `<em class="serif-accent">` nahi daalte, to text normal font me dikhega.
> Agar aap plain `confidence.` likhte ho to italic nahi aayega.

---

## Section 1 — Hero

Ye front page ka sabse upar wala section hai.

| UI field label | Kya / kaise bharein |
|---|---|
| Hero image | Image upload karein → `exterior-new-home-facade.jpg` |
| Image alt text | `A completed custom new home built by Domesca Homes in Melbourne` |
| Badges | **Add badge** dabakar 3 row banayein: `Melbourne North & West`, `Building Since 2013`, `Fixed-Price Contracts` |
| Eyebrow | `Custom Home Builder &mdash; Melbourne` |
| Heading | `Build your custom home with <em class="serif-accent">confidence.</em>` |
| Subtitle | `Over 10 years of experience delivering custom homes across Melbourne&rsquo;s north and west. Fixed-price contracts, quality workmanship and direct communication from start to finish &mdash; whether you have plans and permits ready, or nothing more than a vision.` |
| Primary button label | `Request Your Free Quote` |
| Primary button URL | `#enquiry-form` |
| Secondary button label | `Call 0411 526 251` (ya apna phone) |
| Secondary button URL | `tel:+61411526251` (ya apna tel link) |

---

## Section 2 — Credentials strip

Ye numbers/points wali strip hai (2013, 10+, etc.).

- **Add credential** dabakar 4 rows banayein:
  1. Value: `2013` → Label: `Building custom homes in Melbourne since`
  2. Value: `10+` → Label: `Years delivering residential construction`
  3. Value: `4&ndash;6` → Label: `Months to build a typical single-storey home`
  4. Value: `Melbourne` → Label: `Servicing the north and west, including the Moonee Valley region`

---

## Section 3 — Value proposition / About

| UI field label | Kya bharein |
|---|---|
| Image A | Upload `kitchen-living-pendant.jpg` |
| Image B | Upload `exterior-single-storey.jpg` |
| Est. stamp | `2013` |
| Eyebrow | `New Home Construction` |
| Heading | `Homes built to last, by a builder you can <span class="serif-accent">talk to.</span>` |
| Intro / visible paragraphs (WYSIWYG) | `<p class="lead">At Domesca Homes, we are committed to delivering high-quality construction services tailored to each client&rsquo;s unique vision and lifestyle. Specialising in new home construction, we create homes that combine timeless design, functionality, and lasting value.</p><p>No matter if you have all the plans and permits ready for construction, or if you&rsquo;re starting from the ground up with nothing more than a vision, our architect and interior designer can assist with a concept plan to suit your needs.</p>` |
| Read-more paragraphs (WYSIWYG) | `<p>From concept through to completion, our experienced team works closely with clients, architects, and designers to ensure every detail is carefully considered and professionally executed.</p><p>We understand that building a home is one of life&rsquo;s most significant investments, which is why we prioritise clear communication, personalised service, and exceptional workmanship throughout every stage of the journey. By using premium materials and trusted building practices, we deliver homes that not only reflect your individual style but are built to stand the test of time.</p><p>We use only the best building materials, suppliers and techniques to ensure you&rsquo;re getting the highest quality finished product. When you first turn the key to your custom new home, we want it to feel like a dream come true. Whether you have every part of your home mapped out already or you need us to guide you from start to finish, we&rsquo;re happy to be a part of your new home building experience.</p>` |
| Points | **Add point** → 4 rows: `Custom & luxury new homes`, `Knockdown rebuilds`, `Sloping & difficult sites`, `Sustainable, energy-efficient design` |

---

## Section 4 — What you get

| UI field label | Kya bharein |
|---|---|
| Eyebrow | `Why Build With Domesca Homes` |
| Heading | `What you get when you build with <span class="serif-accent">us.</span>` |
| Included items (repeater) | **Add item** 6 baar. Har row me: |

Row details:

1. Icon `price` → Title `Transparent fixed pricing` → Text `We aim to provide clear and detailed pricing once we have reviewed your plans and project requirements. Our focus is on transparency, so you can move forward with confidence and avoid hidden surprises.`
2. Icon `chat` → Title `One point of contact` → Text `We keep communication clear and regular throughout the build. You will be kept informed on progress, key milestones and any important decisions, so you always know how your project is tracking.`
3. Icon `cart` → Title `Choose your own suppliers` → Text `We give you the freedom to choose materials from any supplier you prefer. We recommend trusted retailers and materials to ensure quality and reliability, and support you in selecting what you like, from where you like.`
4. Icon `build` → Title `Design help if you need it` → Text `Bring your own plans, or work with our partner designers, architect and interior designer on a concept plan that balances functionality, style and budget.`
5. Icon `check` → Title `Permits & approvals guided` → Text `We can help guide you through the approvals and permit process. The exact requirements depend on your project, site and local council, but we aim to make the process clear and manageable from the start.`
6. Icon `shield` → Title `Warranty support after handover` → Text `Final inspections, warranty support, and assistance with any adjustments or repairs needed after the project is completed &mdash; our team resolves post-construction concerns promptly.`

---

## Section 5 — Assurance strip

| UI field label | Kya bharein |
|---|---|
| Heading | `Not sure where to start? Book a free, no-obligation consultation.` |
| Text | `At your first consultation you discuss your project goals, site details, budget and timeline with our team. It is also your chance to ask questions and understand the next steps before moving forward.` |
| Button label | `Book My Consultation` |
| Button URL | `#enquiry-form` (ya apna link) |

---

## Section 6 — Process

| UI field label | Kya bharein |
|---|---|
| Eyebrow | `How We Build` |
| Heading | `A clear path from first call to <span class="serif-accent">handover.</span>` |
| Intro (WYSIWYG) | `Our design process begins with an initial consultation to understand your vision and requirements. We then collaborate with our partner designers to create a tailored plan, incorporating your preferences and our expertise to ensure functionality and cost-efficiency.` |
| Steps (repeater) | **Add step** 5 baar. Har row me: |

| # | Step label | Step title | Description |
|---|---|---|---|
| 1 | `Step 01` | `Consultation` | `Discuss your project goals, site details, budget and timeline with our team, and understand the next steps.` |
| 2 | `Step 02` | `Design & Planning` | `Bring your own plans, or work with our partner designers, architect and interior designer on a concept that suits your needs.` |
| 3 | `Step 03` | `Approvals & Permits` | `We guide you through the approvals and permit process for your project, site and local council.` |
| 4 | `Step 04` | `Construction` | `Trades, engineers and designers coordinated under one point of contact, with regular updates on progress and milestones.` |
| 5 | `Step 05` | `Handover & Warranty` | `A thorough final inspection of all aspects of the construction, any adjustments made, then the keys &mdash; backed by warranty support.` |

- **Note (WYSIWYG)**: `A single-storey home typically takes <strong>4&ndash;6 months</strong>, and a double-storey home <strong>8&ndash;12 months</strong>. These durations may vary based on the specific size and complexity of the project.`
- **Button label**: `Get My Free Quote`
- **Button URL**: `#enquiry-form`

---

## Section 7 — Projects

| UI field label | Kya bharein |
|---|---|
| Eyebrow | `Completed Works` |
| Heading | `Homes we&rsquo;ve <span class="serif-accent">delivered.</span>` |
| Intro | `A selection of completed Domesca Homes new builds across Melbourne&rsquo;s north and west.` |
| Project tiles (repeater) | **Add tile** 9 baar. Har tile me Image, Alt text, Category label, Title, Tile width |

| Image (upload) | Alt text | Category | Title | Tile width |
|---|---|---|---|---|
| `living-open-plan.jpg` | `Open-plan living and dining area in a completed Domesca Homes new build` | `New Homes` | `Open-Plan Living` | `Wide (2 cols)` |
| `exterior-townhouse-dusk.jpg` | `Completed two-storey home façade in brick and render at dusk` | `New Homes` | `Facade at Dusk` | Default |
| `bathroom-marble-vanity.jpg` | `Stone-clad ensuite with twin basins and brushed brass tapware` | `New Homes` | `Twin-Basin Ensuite` | Default |
| `kitchen-dark-cabinetry.jpg` | `Kitchen with dark cabinetry, stone island and integrated appliances` | `New Homes` | `Kitchen & Island` | Default |
| `stairwell-void.jpg` | `Double-height stairwell void with pendant light in a two-storey home` | `New Homes` | `Stairwell Void` | Default |
| `living-sliding-doors.jpg` | `Living area with full-height sliding doors opening to the backyard` | `New Homes` | `Indoor&ndash;Outdoor Living` | Half (1 col) |
| `alfresco-outdoor.jpg` | `Covered alfresco entertaining area completed by Domesca Homes` | `New Homes` | `Alfresco Entertaining` | Half (1 col) |
| `bedroom-master.jpg` | `Master bedroom with built-in robes in a Domesca Homes new build` | `New Homes` | `Master Suite` | Default |
| `hallway-timber.jpg` | `Timber-floored entry hallway with a feature door` | `New Homes` | `Entry Hallway` | Default |

---

## Section 8 — Testimonials

| UI field label | Kya bharein |
|---|---|
| Eyebrow | `Testimonials` |
| Heading | `What our clients <span class="serif-accent">say.</span>` |
| Intro | `Reviews as published on domescahomes.com.au.` |
| Footer text | `Whether it&rsquo;s a family home or an investment development, we take the time to understand your goals.` |
| Footer button label | `Get Your Free Quote` |
| Reviews (repeater) | **Add review** 3 baar |

### Review 1
- Quote (WYSIWYG): `<p>I cannot begin to express how happy we were with Domesca Homes in building our forever home. From the very beginning Hamza was amazing in terms of guiding us with everything, I cannot speak more highly of him&hellip;</p>`
- Continue quote: `<p>Having never built before, Hamza was awesome through the whole process, always communicated with us, very patient and provided us with advice throughout the build. He was able to build us an amazing house on time and within our budget.</p><p>The craftsmanship and eye for detail during the build by Hamza was excellent. I would highly highly recommend him to anyone looking to build their house and would not hesitate to go straight to him if I was ever building again.</p>`
- Initials `JS` / Name `Jon Siotas` / Role `New home build`

### Review 2
- Quote: `<p>If I could give 10 stars, I would! The work completed by Hamza and his team was outstanding. From communication to the quality of the work, I could not be happier. I highly recommend Domesca Homes.</p>`
- Continue quote: khali chhodein
- Initials `RT` / Name `Rebecca Tipping` / Role `Domesca Homes client`

### Review 3
- Quote: `<p>Literally counting our blessings for having found Hamza and Domesca Homes to build our 2 units!! For the 10 months we worked with him, work progressed very well, Hamza was super easy to talk to and communicated well regarding any issues&hellip;</p>`
- Continue quote: `<p>&hellip;and he was always positive of getting work done and stuck to his timelines well, managing delays with a lot of patience. His standards are high and his work is of top quality and we are super impressed by his materials and fittings. We are lucky to have a good relationship with our builder in an industry where most building experiences can be traumatic.</p>`
- Initials `JS` / Name `Jeena S` / Role `2-unit development`

---

## Section 9 — Areas We Build

| UI field label | Kya bharein |
|---|---|
| Eyebrow | `Where We Build` |
| Heading | `Building across Melbourne&rsquo;s north &amp; <span class="serif-accent">west.</span>` |
| Description (WYSIWYG) | `<p class="lead">Domesca Homes primarily works across Melbourne&rsquo;s north and west, including the Moonee Valley region and surrounding areas.</p><p>Our team is based in Hillside, Victoria, and we build new homes and knockdown rebuilds throughout the surrounding suburbs.</p>` |
| Areas list (repeater) | **Add item** 4 baar: `Melbourne&rsquo;s North`, `Melbourne&rsquo;s West`, `Moonee Valley region`, `Hillside, VIC 3037` |
| Notice box | `Outside these areas? Get in touch and we can confirm whether your project is a fit.` |
| Button 1 label | `Check Your Suburb` |
| Button 1 URL | `#enquiry-form` |
| Button 2 label | `Call 0411 526 251` |
| Button 2 URL | `tel:+61411526251` |
| Map embed URL | `https://www.google.com/maps?q=Hillside+VIC+3037+Australia&z=11&output=embed` |

---

## Section 10 — FAQ

| UI field label | Kya bharein |
|---|---|
| Eyebrow | `Frequently Asked Questions` |
| Heading | `Answers before you <span class="serif-accent">build.</span>` |
| Aside title | `Ready to start?` |
| Aside text | `Share a few details about your project and our team will review your needs and respond with the next steps.` |
| Questions (repeater) | **Add question** 11 baar |

| Question | Answer |
|---|---|
| `Why choose Domesca Homes for custom home building in Melbourne?` | `Domesca Homes has been a trusted name in Melbourne since 2013, known for delivering high-quality custom homes tailored to individual needs. Our commitment to integrity, quality workmanship, and client satisfaction sets us apart.` |
| `What is the process for building a new home with Domesca Homes?` | `Your new home journey usually starts with an initial consultation, followed by design planning, approvals, and construction. Throughout the process, you stay informed and involved so your home is built to suit your needs and goals.` |
| `How long does it take to build a house with Domesca Homes?` | `The time it takes to build a house with Domesca Homes depends on the type and size of the house. For a single-story home, it typically takes 4-6 months. For a double-story home, the timeframe is usually 8-12 months. These durations may vary based on the specific size and complexity of the project.` |
| `Do you provide fixed-price quotes for building projects?` | `Yes, we aim to provide clear and detailed pricing once we have reviewed your plans and project requirements. Our focus is on transparency, so you can move forward with confidence and avoid hidden surprises.` |
| `Do you build knockdown rebuild projects?` | `Yes. If your current home no longer suits your needs, we can help you explore a knockdown rebuild. We will assess the site, discuss your design options and guide you through the process from planning through to handover.` |
| `Can Domesca Homes build on a sloping or difficult site?` | `Yes, we can assess challenging sites and advise on the most suitable building approach. Every site is different, so we review the conditions carefully before recommending a practical solution for your project.` |
| `How can customers bring their own designs and plans to Domesca Homes?` | `Customers can bring their own designs and plans to Domesca Homes by scheduling a consultation with our team. We will review the designs, discuss the vision, and provide expert advice to ensure the project aligns with their goals. Our team is dedicated to bringing your vision to life and building a home that meets your expectations.` |
| `How does Domesca Homes ensure that the design meets my budget?` | `We work closely with you to understand your budget and provide cost-effective solutions without compromising on quality. Our team reviews every aspect of the design to ensure it aligns with your financial goals.` |
| `Can Domesca Homes help with sustainable and eco-friendly home designs?` | `Yes, we specialize in sustainable home designs. Our team can incorporate eco-friendly materials, energy-efficient solutions, and sustainable practices into your home design to reduce environmental impact and save on long-term costs.` |
| `Do you help with council approvals and building permits?` | `Yes, we can help guide you through the approvals and permit process. The exact requirements depend on your project, site and local council, but we aim to make the process clear and manageable from the start.` |
| `Which Melbourne areas do you work in?` | `Domesca Homes primarily works across Melbourne&rsquo;s north and west, including Moonee Valley region and surrounding areas. If you are outside these areas, get in touch and we can confirm whether your project is a fit.` |

> **FAQ answers ke liye:** WYSIWYG me `Add paragraph` karke paste karein. Agar aap answer me
> paragraph-level formatting/styling chahiye to paragraphs alag-alag rakhein.

---

## Section 11 — Final CTA / Contact

| UI field label | Kya bharein |
|---|---|
| Eyebrow | `Get In Touch With Us Today` |
| Heading | `Let&rsquo;s build something you&rsquo;ll be proud of for <span class="serif-accent">decades.</span>` |
| Subtitle | `Whether you have all the plans and permits ready for construction, or nothing more than a vision, our team can help you take the next step.` |
| Background image | Upload `kitchen-white-island.jpg` |
| Form eyebrow | `Enquire Online` |
| Form title | `Request Your Free Quote` |
| Form text | `Tell us what you&rsquo;re planning and we&rsquo;ll come back to you with the next steps.` |

---

## Quick tips

- Jab bhi koi section **Show this section?** = No karte hain, wo page par nahi dikhega.
- **Order** numbers se hi section ka position change hota hai; upar-niche drag bhi kar sakte hain.
- Flexible layout me "Add section" → layout choose karein.
- Repeater me rows ko drag karke order change kar sakte hain.
- Save karke frontend par check karein; cache plugin ho to clear karein.
