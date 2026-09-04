# Domesca Homes — Contact Form 7 Form Codes

Ye file dono CF7 forms ke ready-to-paste HTML codes deti hai.

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
      [text* name autocomplete:name placeholder "Your name"]
    </div>
    <div class="field">
      <label>Phone <span class="req">*</span></label>
      [tel* phone autocomplete:tel placeholder "04__ ___ ___"]
    </div>
  </div>

  <div class="field">
    <label>Email <span class="req">*</span></label>
    [email* email autocomplete:email placeholder "you@example.com"]
  </div>

  <div class="field--2">
    <div class="field">
      <label>Project type</label>
      [select project_type "New home construction" "Knockdown rebuild" "Custom / luxury home" "Not sure yet"]
    </div>
    <div class="field">
      <label>Project suburb</label>
      [text suburb placeholder "e.g. Hillside"]
    </div>
  </div>

  <div class="field">
    <label>What stage are you at?</label>
    [select stage "I have plans and permits ready" "I have plans, but no permits yet" "I have land, but no plans yet" "I'm still looking for land" "I have a home to knock down and rebuild" "Just starting to research"]
  </div>

  <div class="field">
    <label>Tell us about your project</label>
    [textarea message x3 placeholder "Site details, block size, budget range, timing…"]
  </div>

  [submit "Send My Enquiry"]
</div>
```

Mail tab defaults:
- **To**: `Info@Domescahomes.com.au`
- **From**: `[your-name] <[email]>` (ya WordPress admin email)
- **Subject**: `New enquiry from [project_type] — [name]`
- **Message**:
  ```
  Name: [name]
  Phone: [phone]
  Email: [email]
  Project type: [project_type]
  Suburb: [suburb]
  Stage: [stage]
  Message: [message]
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
      [text* name autocomplete:name placeholder "Your name"]
    </div>
    <div class="field">
      <label>Phone <span class="req">*</span></label>
      [tel* phone autocomplete:tel placeholder "04__ ___ ___"]
    </div>
  </div>

  <div class="field">
    <label>Email <span class="req">*</span></label>
    [email* email autocomplete:email placeholder "you@example.com"]
  </div>

  <div class="field">
    <label>Project type</label>
    [select project_type "New home construction" "Knockdown rebuild" "Custom / luxury home" "Not sure yet"]
  </div>

  <div class="field">
    <label>Your message</label>
    [textarea message x4 placeholder "Tell us about your project…"]
  </div>

  [submit "Send My Enquiry"]
</div>
```

Mail tab defaults:
- **To**: `Info@Domescahomes.com.au`
- **From**: `[your-name] <[email]>`
- **Subject**: `New enquiry from [project_type] — [name]`
- **Message**:
  ```
  Name: [name]
  Phone: [phone]
  Email: [email]
  Project type: [project_type]
  Message: [message]
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
