# Lower Page Rules For Image Wireframes

Use these rules for kisumi lower pages when the wireframe is shared as image files and page images are placeholders.

## Source Of Truth

| Item | Source |
|---|---|
| Text | Wireframe image, if readable |
| Section order | Wireframe image |
| Base layout | Wireframe image |
| Tone | Existing top page and current theme |
| Image content | Placeholder images in `img/draft` or `img` until final images are supplied |
| Image selection | AI-only thumbnails in `img/catalog` and `.ai-work/image-catalog.md` |
| UI patterns | `~/Documents/Obsidian Vault/wiki/ui-patterns/INDEX.md` when the shape matches |

If text in a wireframe image is ambiguous, do not guess. Record it in `.ai-work/lower/{slug}/content-notes.md` as an unresolved question.

## Must

- Implement lower pages as `page-XXX.php`.
- Keep wireframe text, section order, and base layout unchanged.
- Use exactly one `h1` matching the WordPress admin page title.
- Keep breadcrumbs.
- Use existing header/footer.
- Scope page-specific CSS under the page/body slug class.
- Reuse top-page tone and theme patterns.
- Promote repeated lower-page layouts to common classes.
- Use the top-page/common section title style as a shared part, such as `c-sec-title`, when applicable.
- Read both source and target PHP before reusing a top-page or lower-page pattern.
- Follow `../../rules/.codingrules-scss.md`; never use `&` shorthand.
- Place all used images in `img/` with meaningful English filenames.
- Use `img/catalog/` thumbnails only for AI image selection. Never use them in rendered PHP/SCSS/CSS/HTML.
- Set alt text guidance for every placeholder image.
- Commit after each completed task.

## Must Not

- Do not add, rewrite, or remove copy.
- Do not add new sections, CTA blocks, icons, decorative elements, or links not present in the wireframe.
- Do not treat placeholder images as final content.
- Do not use `img/catalog/` thumbnails as site images.
- Do not let lower-page CSS affect unrelated pages, archives, posts, or forms.
- Do not force a UI Pattern Library pattern if the wireframe shape differs.

## Planning Outputs

Before implementation, create or update:

- `.ai-work/lower/{slug}/page-plan.md`
- `.ai-work/lower/{slug}/image-plan.md`
- `.ai-work/lower/{slug}/content-notes.md`

`page-plan.md` should include:

- slug and target template filename
- wireframe image path(s)
- page title, breadcrumb label, and `h1`
- locked section order
- layout notes from the image wireframe
- top-page tone/components to reuse
- common classes to create or reuse
- UI Pattern Library references, only when the shape matches
- unresolved questions
- implementation order

`image-plan.md` should include:

- catalog id, when selected from `.ai-work/image-catalog.md`
- catalog thumbnail path, for review only
- image slot
- placeholder source filename
- matching original path in `img/draft/`
- renamed theme filename
- destination path
- alt text guidance
- ratio/crop notes
- final-image replacement note

`content-notes.md` should include:

- readable wireframe text
- uncertain text from the wireframe image
- button/link labels and destinations
- questions for the user/client

## Review Checklist

- Text matches the wireframe image where readable.
- Ambiguous text is recorded as a question, not guessed.
- Section order and base layout match the wireframe image.
- Placeholder images are clearly planned and named.
- No PHP/SCSS/CSS/HTML references `img/catalog/`.
- Top-page tone is preserved.
- Shared section title/common layout classes are used where appropriate.
- No horizontal overflow at 1440px and 390px.
- Add 1000px / 768px / 560px checks for risky layouts.
