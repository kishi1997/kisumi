---
title: kisumi 画像選定・ページ埋め込みワークフロー
created: 2026-05-21
type: workflow
tags: [kisumi, yaotemp, wordpress, image-selection, placeholder-images]
---

# kisumi 画像選定・ページ埋め込みワークフロー

> [!summary]
> ページ実装済みの状態で、画像だけを選定して既存ページへ埋め込むためのフロー。AIはサムネイルカタログで候補を絞り、実装時は必ず `img/draft/` の元画像を `img/` 直下へ意味のある英語名でコピーして使う。

<h2 style="color:#f2994a;">基本方針</h2>

| 項目 | 方針 |
|---|---|
| 対象 | 既存 `page-*.php` と `themes/yaotemp/css/design.scss` |
| 画像選定 | `img/catalog/` のAI用サムネイルと `.ai-work/image-catalog.md` で行う |
| 実装画像 | `img/draft/` の元画像を `img/` 直下へリネームコピー |
| catalog画像 | PHP / SCSS / CSS / HTML から参照禁止 |
| 画像名 | 用途が分かる英語名にする |
| alt | プレースホルダーでも用途に応じて設定 |
| SCSS | `design.scss` に既存ページスコープで追加・調整 |
| コミット | カタログ作成、画像選定、埋め込み、レビューを分ける |

<h2 style="color:#f2994a;">Step 1: Catalog生成</h2>

支給画像を `themes/yaotemp/img/draft/` に入れた後、リポジトリルートで実行する。

```bash
npm run images:catalog
```

生成物:

- `themes/yaotemp/img/catalog/*__thumb.jpg`
- `.ai-work/image-catalog.md`

`img/catalog/` と `.ai-work/` はGit管理外。元画像は変更しない。

<h2 style="color:#f2994a;">Step 2: Catalog分類</h2>

Claude Code / Codex / cowork は、まず `.ai-work/image-catalog.md` を埋める。

追記する項目:

- content: 写っているもの
- use candidates: 向いているページ・セクション
- notes: 明るさ、人物有無、横長/縦長、使いにくさ、トリミング注意

全ページ実装時に全画像を毎回見ない。以後は catalog id と候補だけ渡す。

<h2 style="color:#f2994a;">Step 3: ページ別画像選定</h2>

対象ページごとに以下を作る。

- `.ai-work/lower/{slug}/image-embed-plan.md`

含める内容:

- 対象PHP: `themes/yaotemp/page-{slug}.php`
- 対象SCSS: `themes/yaotemp/css/design.scss`
- 画像スロット
- catalog id
- catalog thumbnail path
- original path in `themes/yaotemp/img/draft/`
- final filename in `themes/yaotemp/img/`
- alt text
- crop/ratio notes
- PHP変更の有無
- `design.scss` で必要なobject-fit / aspect-ratio / レスポンシブ調整

<h2 style="color:#f2994a;">Step 4: 埋め込み</h2>

実装時のルール:

- `img/catalog/` を参照しない。
- `img/draft/` の元画像を `img/` 直下へコピーする。
- コピー時に意味のある英語名に変更する。
- PHP内の画像パスは `<?php bloginfo('template_url');?>/img/xxx.jpg` を使う。
- altを設定する。
- `design.scss` は対象ページスコープ内に閉じる。
- 画像比率が崩れる場合は `aspect-ratio`, `object-fit`, `width`, `height` を調整する。

<h2 style="color:#f2994a;">Step 5: Review</h2>

確認項目:

- `img/catalog/` を実装参照していない
- 採用画像が `img/draft/` 由来で `img/` 直下にある
- 画像名が用途の分かる英語名
- altがある
- 1440px / 390pxで画像比率が崩れていない
- 必要に応じて 1000px / 768px / 560pxも確認
- `design.scss` の変更が対象ページスコープに収まっている

<h2 style="color:#f2994a;">Claude Code Prompt</h2>

```text
画像選定・ページ埋め込みフローで進めてください。

前提:
- ページファイルは作成済みです
- 残り作業は画像選定と既存ページへの埋め込みです
- 対象SCSSは /Users/tomoyukikishi/Desktop/wordpress/kisumi/themes/yaotemp/css/design.scss です
- catalogサムネイルはAI選定用で、実サイトでは使いません

まず npm run images:catalog を実行して、.ai-work/image-catalog.md と themes/yaotemp/img/catalog/ を作成してください。
次に、画像カタログを分類し、対象ページごとに .ai-work/lower/{slug}/image-embed-plan.md を作成してください。

重要:
- img/catalog/ の画像をPHP/SCSS/CSS/HTMLから参照しない
- 実装時は img/draft/ の元画像を img/ 直下へ意味のある英語名でコピーする
- 既存HTML構造は大きく変えない
- PHP変更は画像src/altまたは必要最小限のclass追加に留める
- design.scss は対象ページスコープ内で画像比率・トリミング・レスポンシブを調整する
- 計画作成後、私の承認まで埋め込み実装に入らない
```
