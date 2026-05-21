---
name: wordpress-lower-page-image-wire-planning
description: Plan kisumi yaotemp lower pages from image-shared wireframes before coding. Use when wireframes are PNG/JPG files, text must not be invented, images are placeholders, and Codex should create a single plan.md (section layout, image slots, unresolved text) while mapping the layout to existing theme tone and common components.
---

# WordPress Lower Page Image Wire Planning

Use this skill before writing lower-page code in the kisumi `themes/yaotemp` theme.

## Required inputs

- Target page slug or temporary slug.
- Wireframe image path(s), usually `/Users/tomoyukikishi/Desktop/wordpress/kisumi/wireframe/*.png`.
- Existing theme files in `/Users/tomoyukikishi/Desktop/wordpress/kisumi/themes/yaotemp`.
- Placeholder image sources in `img/draft/` or existing `img/`.
- Optional image catalog generated with `npm run images:catalog`.
- Rules:
  - `AGENTS.md`
  - `rules/lower-image-wire.md`
  - `../../rules/.clauderules-lower.md`
  - `../../rules/.codingrules-scss.md`

## Core rule

The wireframe image is the source of truth for text, section order, and base layout.

Do not invent unreadable text. Do not add sections, CTA blocks, decorative elements, icons, links, or copy. If the image is unclear, record a question in `content-notes.md`.

Images are placeholders unless the user explicitly says they are final.

## Workflow

1. Read the required rules.
2. Inspect the target wireframe image(s).
3. Extract only what can be read or inferred safely:
   - exact readable text
   - section order
   - heading hierarchy
   - base layout
   - button/link labels
   - image slots
   - repeated layout shapes
4. Record unclear text or layout as questions. Do not guess.
5. Inspect existing top page and relevant lower page templates for tone and reusable parts.
6. Check the UI Pattern Library index. Read only matching patterns.
7. Plan placeholder image usage:
   - catalog id, if selected from `.ai-work/image-catalog.md`
   - catalog thumbnail path, for AI review only
   - source image
   - matching original path in `img/draft/`
   - new meaningful English filename
   - destination in `img/`
   - alt text guidance
   - final replacement note
8. Create or update a single file: `.ai-work/lower/{slug}/plan.md`
   Do not create separate `image-plan.md` or `content-notes.md` files.
9. Stop before coding and report unresolved questions.

## `plan.md` must include

**Section layout**
- Page slug and target template filename.
- Wireframe image path(s).
- Page title and `h1`.
- Locked section order table (class / background / content summary).
- Section-by-section layout notes and page-scoped class names.
- Common classes to create or reuse.

**Image slots** (table)
- Slot name / PHP location / ratio / placeholder source / renamed filename / alt guidance.
- Note that all images are placeholders and may be replaced later.

**Unresolved text**
- Exact readable text from the wireframe.
- Unreadable or uncertain text, marked as questions.
- Button/link labels and destinations.

## Output rules

- Keep planning notes concise and implementation-ready.
- Do not start coding during this skill.
- Do not treat placeholder image choice as final design approval.
- Do not use `img/catalog/` thumbnails as rendered-site images.
- Do not force a reusable pattern if the wireframe shape differs.
- If a reusable layout is created later, report it as a UI Pattern Library addition candidate.
