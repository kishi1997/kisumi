---
name: yaotemp-image-select-and-embed
description: Select images from the AI catalog and embed them into existing page-*.php files in the kisumi yaotemp theme. Use when page files are already created and the only remaining work is image selection and PHP src/alt embedding. No CSS/SCSS changes, no responsive checks, no per-page commits.
---

# yaotemp Image Select and Embed

Use this skill when page PHP files are already created and the only remaining task is selecting images and embedding them into the existing PHP.

## When to use

- `page-*.php` already exists with placeholder image slots.
- Remaining work is limited to image selection and embedding `src`/`alt` in PHP.
- No new HTML sections, no CSS/SCSS adjustments, no layout changes.

## Required inputs

- Target page slug(s).
- `.ai-work/image-catalog.md` — catalog of all draft images.
- `themes/yaotemp/img/catalog/` — AI-review thumbnails.
- `themes/yaotemp/img/draft/` — source images for implementation.
- Target `page-{slug}.php` file(s).

## Core rules

- **Never reference `img/catalog/` from PHP, SCSS, CSS, or HTML.** Catalog thumbnails are for AI review only.
- **Never edit, move, or delete files in `img/draft/`.**
- **Never edit CSS or SCSS.**
- Copy the `img/draft/` original to `img/` with a meaningful English filename before embedding.
- Every image slot must have an `alt` attribute.
- Image filenames must describe their subject — never use `image-001.jpg`, `copy.jpg`, or similar generic names.
- Do not rewrite existing HTML structure.
- Do not touch PHP files other than the target page(s).
- Do not commit per page — commit once after all target pages are done.

## Workflow

### Step 1 — Read the catalog

Read `.ai-work/image-catalog.md` in full. Understand which catalog IDs are available and their content descriptions.

### Step 2 — Inspect catalog thumbnails

View thumbnail images in `themes/yaotemp/img/catalog/` to visually confirm candidates. Use catalog ID to cross-reference with `image-catalog.md`.

### Step 3 — Identify image slots

Read the target `page-{slug}.php`. List every `<img>` tag or image-related PHP output that currently holds a placeholder path, empty `src`, or `img/draft/` reference.

### Step 4 — Select images

For each slot, choose the most appropriate catalog ID based on:
- Subject matter and composition
- Aspect ratio fit for the slot
- Overall page tone

Do not wait for approval. Proceed directly to the next step.

### Step 5 — Identify source images

Look up each selected catalog ID in `.ai-work/image-catalog.md`. Find the `original` field — this is the `img/draft/` path to use.

### Step 6 — Copy to `img/`

Copy each `img/draft/` source file to `themes/yaotemp/img/` with a meaningful English filename.

```bash
cp themes/yaotemp/img/draft/<original-filename> themes/yaotemp/img/<meaningful-english-name.jpg>
```

Naming guidance:
- Describe the subject: `treatment-room-interior.jpg`, `staff-smiling-reception.jpg`
- Include the page/section if helpful: `about-hero-bg.jpg`, `custom-procedure-closeup.jpg`
- No generic names (`image-001.jpg`, `photo.jpg`, `copy.jpg`)

### Step 7 — Update PHP

In the target `page-{slug}.php`, update each image slot:

- Set `src` to `<?php bloginfo('template_url');?>/img/<meaningful-english-name.jpg>`
- Set a descriptive `alt` text appropriate for the image content and context

Do not change any surrounding HTML structure. Only update `src` and `alt`.

### Step 8 — Write embed log

Create or update `.ai-work/lower/{slug}/image-embed-log.md` with the following table for each slot:

| field | value |
|---|---|
| slot | (element / section description) |
| selected catalog id | (e.g. `img-042`) |
| thumb path | `themes/yaotemp/img/catalog/<id>__thumb.jpg` |
| original draft path | `themes/yaotemp/img/draft/<filename>` |
| final filename | `themes/yaotemp/img/<meaningful-english-name.jpg>` |
| reason | (why this image was chosen) |
| alt | (alt text used) |
| changed PHP location | `page-{slug}.php` line approx. N |

### Step 9 — Next page

If there are more target pages, repeat Steps 3–8 for each page without committing between pages.

### Step 10 — Final review and commit

After all target pages are complete:

1. Run `git diff` and verify the changes.
2. Confirm the review checklist below.
3. Commit all changes in a single commit.

```
git add themes/yaotemp/img/<new-files>
git add themes/yaotemp/page-*.php
git add .ai-work/lower/
git commit -m "image: select and embed lower page images"
```

## Review checklist

Before committing, verify every item:

- [ ] No `img/catalog/` path appears in any PHP, SCSS, CSS, or HTML file
- [ ] Every adopted image was copied from `img/draft/` to `img/` directly
- [ ] Every final filename is a meaningful English name (no `image-001`, `copy`, etc.)
- [ ] Every `<img>` in the changed PHP has a non-empty `alt` attribute
- [ ] PHP changes are limited to the target page(s) only
- [ ] No CSS or SCSS files were modified
- [ ] `git diff` shows no unrelated changes

## Codex task template

Use this when delegating image embedding to Codex.

```
## Task: Image select and embed — page-{slug}.php

### Target PHP
- themes/yaotemp/page-{slug}.php

### Catalog
- .ai-work/image-catalog.md
- themes/yaotemp/img/catalog/ (thumbnails for review only — never reference in PHP)

### Do
- Read .ai-work/image-catalog.md
- Inspect catalog thumbnails in themes/yaotemp/img/catalog/
- Identify every image slot in page-{slug}.php
- Select the most appropriate catalog ID for each slot
- Look up the original draft path in image-catalog.md
- Copy themes/yaotemp/img/draft/<original> to themes/yaotemp/img/<meaningful-english-name.jpg>
- Update src and alt in page-{slug}.php only
- Write .ai-work/lower/{slug}/image-embed-log.md

### Do NOT
- Reference img/catalog/ from PHP, SCSS, CSS, or HTML
- Edit, move, or delete any file in img/draft/
- Edit CSS or SCSS
- Rewrite existing HTML structure
- Touch any PHP other than page-{slug}.php
- Leave any img tag without an alt attribute
- Use generic filenames like image-001.jpg or copy.jpg
- Commit

### Done when
- All image slots in page-{slug}.php have src pointing to img/<meaningful-name.jpg>
- All image slots have a non-empty alt attribute
- .ai-work/lower/{slug}/image-embed-log.md is written
- No img/catalog/ reference exists in PHP

### Report
Return a summary in this format:
- slot → selected catalog id → final filename → alt
- List any slot that could not be filled and why
```

## Common mistakes to avoid

| Mistake | Correct approach |
|---|---|
| Embedding `img/catalog/<id>__thumb.jpg` in PHP | Always use `img/<meaningful>.jpg` copied from `img/draft/` |
| Leaving `alt=""` or omitting alt | Set descriptive alt for every slot |
| Naming files `image-001.jpg` | Name files by content: `treatment-room-exterior.jpg` |
| Editing `design.scss` for layout | Do not touch CSS/SCSS in this skill |
| Committing after each page | Commit once after all pages are done |
| Waiting for approval between selection and embedding | Proceed directly — no approval gate in this skill |
