# content-notes: about（初めての方へ）

## ワイヤーから読めたテキスト

| セクション | 読み取り内容 |
|---|---|
| ページ名 | 初めての方へ |
| Concept EN | Concept |
| Concept h2 | 季節を住まう。時を愛でる。 |
| Feature 01 タイトル | 家から始まる暮らし |
| Feature 01 番号 | Feature 01 |
| Feature 02 番号 | Feature 02 |
| Feature 03 番号 | Feature 03 |
| サービスセクション h2 | どんな形の「家づくり」も相談窓口で |
| サービスカード1 タイトル | 新しい家づくり |
| サービスカード1 ボタン | 詳しくみる |
| Region EN | Region |
| Region JA | 地域のよりどころ |
| Region アイテム1 | いつでも集まる |
| Region アイテム2 | みんなで参加・入り出自由 |
| Column EN | Column |
| Column JA | コラム |
| Column ボタン | もっとみる |
| CTA EN | CONTACT US |
| CTA JA | お問い合わせ |
| CTA メールボタン | メールでのお問い合わせ |
| CTA 電話ラベル | お電話でのお問い合わせ |

---

## 要確認項目

### Q1: Feature 02 タイトル
- PHP上: `了解済/初期からー`
- ワイヤー上: 読み取り不明確
- → 正しいタイトルを教えてください

### Q2: Feature 03 タイトル
- PHP上: `横でなしー`
- ワイヤー上: 読み取り不明確
- → 正しいタイトルを教えてください

### Q3: サービスカード2・3 タイトル
- PHP上: 2枚とも「見越し」（同一）
- ワイヤーには別タイトルの可能性あり
- → 正しいタイトルと遷移先URLを教えてください（現在両方 `/renovation/` になっています）

### Q4: Concept セクション見出し構成
- PHPでは `c-section-head`（Region/Column形式）ではなく、inline styleで `section-title-en` のみ表示（`section-title-ja` なし）
- ワイヤーの "Concept" は EN ラベルのみか、JA見出しも別にあるか確認
- → そのまま EN ラベルのみで進めますか？

### Q5: コラムカードのデータソース
- 現状はPHP for-loopで3件静的表示
- 最終的にWordPress投稿から動的に出す予定があるか確認
- → プレースホルダーのまま静的で進めて問題なければ実装を進めます

---

## ボタン・リンク確認

| ボタン | 現在のhref | 確認要否 |
|---|---|---|
| サービスカード1「詳しくみる」 | `/custom-home/` | OK（ページ存在） |
| サービスカード2「詳しくみる」 | `/renovation/` | Q3参照 |
| サービスカード3「詳しくみる」 | `/renovation/` | Q3参照（重複） |
| コラム「もっとみる」 | `/column/` | 要確認（ページ存在するか） |
| CTAメール | `/contact/` | OK |
