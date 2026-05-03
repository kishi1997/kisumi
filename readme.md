## 自分のプロジェクトにクローン
```
git clone https://github.com/user/example-repo.git [my-project]
```

### リモートリポジトリの変更
```
git remote remove origin
```

### 新しく作成したリポジトリと繋ぐ(push an existing repository from the command line)
```
git remote add origin [your-repo-url]
git branch -M main
git push -u origin main
```

## wp-env を使った初回セットアップ

```bash
npm install
npm run start
npm run setup
```

WordPress: http://localhost:8080

## よく使うコマンド

```bash
# 起動
npm run start

# 停止
npm run stop

# WP-CLI
npm run wp -- option get home

# テーマ・パーマリンク・固定ページを再適用
npm run setup

# DBを初期化してセットアップし直す
npm run reset
```

## 初期化内容

- テーマを `yaotemp` に変更
- パーマリンクを `/%postname%/` に変更
- `config/pages.json` に定義した固定ページを一括作成

固定ページを変更したい場合は `config/pages.json` の `slug` と `title` を編集してください。

## 旧 Docker Compose 構成

`docker-compose.yml` は比較・移行用に残しています。wp-env 運用では通常 `npm run start` / `npm run stop` を使います。
