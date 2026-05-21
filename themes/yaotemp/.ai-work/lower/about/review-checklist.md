# review-checklist: about（初めての方へ）

## ワイヤー整合

- [ ] セクション順がwire3.pngと一致している（hero → concept → feature → service → region → column → cta）
- [ ] 各セクションの基本レイアウト（2col / 3card / 2item）がワイヤーと一致している
- [ ] ワイヤーに存在しない装飾・アイコン・CTAを追加していない
- [ ] テキストをワイヤーから勝手に変更・補完していない

## コンテンツ整合

- [ ] ページヒーローに h1「初めての方へ」が1つだけある
- [ ] Feature番号が Feature 01 / 02 / 03 の順で表示されている
- [ ] 「c-section-head」のEN+JA見出しが Region / Column セクションで正しく出ている
- [ ] サービスカードの「詳しくみる」ボタンが正しいリンク先を向いている

## 画像

- [ ] 全プレースホルダー画像が `img/placeholder-about-*.jpg` 等の意味のある英語名になっている
- [ ] `img/draft/` の名前のまま使われているファイルがない
- [ ] ヒーロー画像が `img-ph--wide` で横長比率になっている
- [ ] image-plan.md の alt方針が PHP に反映されている（または計画と一致している）

## HTML構造

- [ ] 既存PHPのHTMLを大きく改変していない（class追加・inline style→クラス移行程度）
- [ ] inline style は SCSS クラスへ移行済み（`style="margin-bottom:24px;"` 等）
- [ ] `img-ph-wrapper` の `padding-top` 値が各セクションの比率と一致している

## SCSS・クラス設計

- [ ] グローバル共通クラス（page-hero, inner-section, inner-2col, page-contact-cta 等）が定義されている
- [ ] `c-section-head`, `section-title-en`, `section-title-ja`, `top-more-btn` が下層ページでも機能している
- [ ] about固有クラスは `#page-about` スコープ内に記述されている
- [ ] 他ページに影響する副作用がない
- [ ] `&` ショートハンドを使っていない（.codingrules-scss.md 準拠）

## デザイントーン

- [ ] フォントが "Shippori Mincho" / "Lora" で統一されている
- [ ] カラー変数（--color-text, --color-primary, --color-surface 等）を使っている
- [ ] トップページのボタン（top-more-btn）スタイルと自然につながっている

## レスポンシブ

- [ ] 1440px（PC）で崩れていない
- [ ] 390px（SP）で崩れていない
- [ ] 2カラム（inner-2col, about-feature-item, about-region）が1000px以下で縦積みになる
- [ ] カードグリッドが768px以下で2列、560px以下で1列になる
- [ ] 横スクロールが発生していない

## 未解決事項

- [ ] content-notes.md の「要確認」項目が解消されている（または承認済み）
