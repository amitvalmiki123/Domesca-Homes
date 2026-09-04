# Domesca Homes — Contact Form 7 Form Codes

Ye file dono CF7 forms ke ready-to-paste HTML codes deti hai.

## Dono forms ALAG kyun hain (yahi exact difference rakhein)

| Field | Hero / banner form | Final CTA / contact form |
|---|---|---|
| Full name | ✅ | ✅ |
| Phone | ✅ | ✅ |
| Email | ✅ | ✅ |
| Project type | ✅ | ✅ |
| Project suburb | ✅ | ❌ |
| What stage are you at? | ✅ | ❌ |
| Tell us about your project (message x3) | ✅ | ❌ |
| Your message (message x4) | ❌ | ✅ |

> ⚠️ **Galti se dono me same code mat daalna.** Hero form me `Project suburb` +
> `What stage are you at?` hona chahiye. Final CTA form me sirf `Your message`
> (simple textarea) hona chahiye. Neeche alag-alag codes diye hain.

Install steps:

1. **Contact → Add New** → do naye forms banayein:
   - `Hero Contact Form`
   - `Final CTA Contact Form`
2. Neeche diye codes ko **Form** tab me paste karein.
3. **Mail** tab me check karein (To, From, Subject, Message) — default theek hai.
4. **Save** karein.
5. Upar diye **Shortcode** ko copy karke:
   - `Domesca Options → Forms → Hero / banner form shortcode` me paste karein.
   - `Domesca Options → Forms → Final CTA / contact form shortcode` me paste karein.

> Agar CF7 form ke andar fields ke beech extra gap dikh rahi ho to CF7 editor ko
> **Visual → Text** mode me switch karke dobara paste karein.

---

## Form 1: Hero / banner enquiry form

Naam: `Hero Contact Form`

Form tab code:

```html
<div class="qform__body">
  <div class="field--2">
    <div class="field">
      <label>Full name <span class="req">*</span></label>
      [text* your-name autocomplete:name placeholder "Your name"]
    </div>
    <div class="field">
      <label>Phone <span class="req">*</span></label>
      [tel* your-phone autocomplete:tel placeholder "04__ ___ ___"]
    </div>
  </div>

  <div class="field">
    <label>Email <span class="req">*</span></label>
    [email* your-email autocomplete:email placeholder "you@example.com"]
  </div>

  <div class="field--2">
    <div class="field">
      <label>Project type</label>
      [select your-project-type "New home construction" "Knockdown rebuild" "Custom / luxury home" "Not sure yet"]
    </div>
    <div class="field">
      <label>Project suburb</label>
      [text your-suburb placeholder "e.g. Hillside"]
    </div>
  </div>

  <div class="field">
    <label>What stage are you at?</label>
    [select your-stage "I have plans and permits ready" "I have plans, but no permits yet" "I have land, but no plans yet" "I'm still looking for land" "I have a home to knock down and rebuild" "Just starting to research"]
  </div>

  <div class="field">
    <label>Tell us about your project</label>
    [textarea your-message x3 placeholder "Site details, block size, budget range, timing…"]
  </div>

  [submit class:btn class:btn--block class:btn--lg "Send My Enquiry"]
</div>
```

Mail tab defaults:
- **To**: `Info@Domescahomes.com.au`
- **From**: `[your-name] <[your-email]>` (ya WordPress admin email)
- **Subject**: `New enquiry from [your-project-type] — [your-name]`
- **Message**:
  ```
  Name: [your-name]
  Phone: [your-phone]
  Email: [your-email]
  Project type: [your-project-type]
  Suburb: [your-suburb]
  Stage: [your-stage]
  Message: [your-message]
  ```

---

## Form 2: Final CTA / contact form

Naam: `Final CTA Contact Form`

Form tab code:

```html
<div class="qform__body">
  <div class="field--2">
    <div class="field">
      <label>Full name <span class="req">*</span></label>
      [text* your-name autocomplete:name placeholder "Your name"]
    </div>
    <div class="field">
      <label>Phone <span class="req">*</span></label>
      [tel* your-phone autocomplete:tel placeholder "04__ ___ ___"]
    </div>
  </div>

  <div class="field">
    <label>Email <span class="req">*</span></label>
    [email* your-email autocomplete:email placeholder "you@example.com"]
  </div>

  <div class="field">
    <label>Project type</label>
    [select your-project-type "New home construction" "Knockdown rebuild" "Custom / luxury home" "Not sure yet"]
  </div>

  <div class="field">
    <label>Your message</label>
    [textarea your-message x4 placeholder "Tell us about your project…"]
  </div>

  [submit class:btn class:btn--block class:btn--lg "Send My Enquiry"]
</div>
```

Mail tab defaults:
- **To**: `Info@Domescahomes.com.au`
- **From**: `[your-name] <[your-email]>`
- **Subject**: `New enquiry from [your-project-type] — [your-name]`
- **Message**:
  ```
  Name: [your-name]
  Phone: [your-phone]
  Email: [your-email]
  Project type: [your-project-type]
  Message: [your-message]
  ```

---

## Shortcode paste location

| Form | Domesca Options → Forms field |
|---|---|
| Hero Contact Form | `Hero / banner form shortcode` |
| Final CTA Contact Form | `Final CTA / contact form shortcode` |

Shortcode format jaisa CF7 dega:

```
[contact-form-7 id="123" title="Hero Contact Form"]
```
