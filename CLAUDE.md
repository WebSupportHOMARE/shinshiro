# CLAUDE.md — アイレクス・ライト＋24 新城

## プロジェクト概要

ヨガ＆ジム「アイレクス・ライト＋24 新城」のコーポレートサイト。
静的HTML + SCSS + jQuery + PHP（フォーム処理）構成。

- 本番URL: https://www.ilex-light.com/shinshiro/
- ホスティング: Xserver（sv14659.xserver.jp）
- デプロイ: VSCode SFTP拡張（uploadOnSave: true）

---

## ディレクトリ構成

```
shinshiro/
├── index.html          # メインページ（LP）
├── mail.php            # メールフォーム処理
├── complete.php / complete_thanks.php
├── shared/
│   ├── css/
│   │   ├── style.scss  # メインスタイルシート（編集対象）
│   │   ├── style.css   # コンパイル済み（直接編集しない）
│   │   ├── destyle.css # リセットCSS
│   │   ├── swiper-bundle.min.css
│   │   └── base/
│   │       └── _mixin.scss  # Mixinとブレークポイント定義
│   ├── js/
│   │   └── script.js   # メインJS（jQuery + Swiper）
│   └── img/            # 画像
├── contact/            # お問い合わせフォーム
├── reservation/        # 体験予約フォーム
├── hotyoga/            # ホットヨガページ
├── constitution/       # 会員規約ページ
└── bk/                 # バックアップ（触らない）
```

---

## 技術スタック

- HTML5 / SCSS（Prepros でコンパイル）
- jQuery / Swiper / matchHeight
- PHP（メールフォーム）
- Google Fonts（Noto Sans JP / Barlow Condensed / Jost / Oswald）

---

## ブレークポイント（\_mixin.scss）

| 変数     | 幅         | 用途                 |
| -------- | ---------- | -------------------- |
| `sm`     | max 640px  | スマートフォン小     |
| `md`     | max 768px  | スマートフォン（主） |
| `lg`     | max 820px  | タブレット縦         |
| `xl`     | max 1024px | タブレット横         |
| `xxl`    | max 1400px | 小デスクトップ       |
| `.tb-pc` | max 1160px | クラスで制御         |

使用例:

```scss
@include mq-down(md) { ... }
```

---

## SCSSコンパイル

Prepros を使用。`style.scss` を保存すると自動で `style.css` が生成される。
`style.css` および `style.css.map` は直接編集しない。

---

## 画像・アセット（プロジェクト固有）

- `/img/renew` フォルダの素材を使用すること
