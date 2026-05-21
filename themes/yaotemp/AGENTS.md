# yaotemp Agent Rules

This theme is part of the kisumi WordPress project.

## Always Read

- `../../CLAUDE.md`
- `../../rules/.clauderules-common.md`
- `../../rules/.clauderules-lower.md` for lower-page work
- `../../rules/.codingrules-common.md`
- `../../rules/.codingrules-scss.md` for SCSS work
- `docs/lower-page-image-wire-workflow.md` for lower pages built from wireframe images
- `rules/lower-image-wire.md`

## Working Directory

The active theme is:

- `/Users/tomoyukikishi/Desktop/wordpress/kisumi/themes/yaotemp`

Do not edit unrelated themes or WordPress core files.

## Lower Page Source Of Truth

For the current kisumi lower-page workflow:

- Wireframes are shared as images in `/Users/tomoyukikishi/Desktop/wordpress/kisumi/wireframe/`.
- Theme images are placeholders unless the user explicitly supplies final images.
- Text, section order, and base layout come from the wireframe images.
- If wireframe text cannot be read confidently from the image, record a question instead of guessing.
- Keep the wireframe layout. Do not add sections, CTA blocks, icons, decorative elements, or copy.

## Implementation Rules

- Lower pages must be implemented as `page-XXX.php`.
- Use existing header/footer.
- Keep breadcrumbs.
- Use exactly one `h1`, matching the WordPress admin page title.
- Scope page styles under the page/body slug class.
- Reuse top-page tone and existing theme patterns where they fit.
- Repeated lower-page layouts should become common classes, not repeated page-specific CSS.
- SCSS must follow `../../rules/.codingrules-scss.md`; `&` shorthand is forbidden.
- Images used from `img/draft` must be copied to `img/` with meaningful English filenames before use.
- Placeholder images must still have a meaningful filename and alt guidance in `image-plan.md`.

## Commit Rules

- Commit after each completed planning, common-part, section implementation, image-placement, or review task.
- Inspect `git status` and the relevant diff before committing.
- Do not include unrelated user or other-agent changes.
