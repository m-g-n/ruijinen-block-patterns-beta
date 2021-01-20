
[![release](https://github.com/m-g-n/ruijinen-block-patterns-beta/workflows/Upload%20Release%20Asset/badge.svg)](https://github.com/megane9988/megane-auto-update/actions?query=workflow%3A%22Upload+Release+Asset%22)

# 類人猿ブロックパターン（ベータ）
- Contributors: mgn
- Tags: gutenberg, block, blocks, editor, gutenberg blocks, page builder, landing page, microcopy, steps, call to action
- Requires at least: 5.6
- Tested up to: 5.6
- Stable tag: 0.2.0
- Requires PHP: 7.3
- License: GPLv2 or later
- License URI: https://www.gnu.org/licenses/gpl-2.0.html

## Description
類人猿ブロックパターン（ベータ）はWordPressテーマ Snow Monkey ( https://snow-monkey.2inc.org/ ) と Snow Monkey Blocks ( https://ja.wordpress.org/plugins/snow-monkey-blocks/ ) を拡張するブロックパターンを提供します。

### ただいまこちらからダウンロードできるプラグインは『ベータ版』です
- 一般に公開されているサイトでのご利用は推奨されません
- 公開されているサイトでのご利用はリリース版をお待ちください
- このプラグインはプレミアムテーマ「Snow Monkey」およびプラグイン「Snow Monkey Blocks」が有効なサイトでのみご利用いただけます

## 動作環境
現在確認されている動作環境は以下のとおりです
- WordPress 5.6 以上
- Snow Monkey 12.2.2 以上
- Snow Monkey Blocks 10.2.1 以上

## インストール
1. ruijinen-block-patterns-beta フォルダ全体を /wp-content/plugins/ ディレクトリにアップロードします。
2. プラグイン 画面 (プラグイン > インストール済みプラグイン) でプラグインを有効化します。
3. 投稿などの編集画面より、ブロック追加よりパターンを選択します。
4. パターンのプルダウンより`[類人猿]**サイト`を選択して利用します。


## 変更履歴

### 0.2.0

- 「[類人猿] 企業サイト」パターンにパターンを追加
	- アコーディオン1（スリム）
	- 沿革1
	- アクセスMAP1
	- バナー1
	- お問合せ誘導1

### 0.1.2

- お知らせのウィジェットの出力を修正

### 0.1.1

- 管理画面でのプラグイン一覧表示の際の作者表示を追加
- お知らせのウィジェットの出力を修正

### 0.1.0

- Initial release.

## 開発

### SCSSのコンパイル方法

当プラグインディレクトリーまで移動したあと、

- npm i でpackegeをインストール
- npx gulp watch でSCSSファイルの修正を常時監視（SCSSを修正したら即時CSSにコンパイルしてくれる）
- npx gulp sass でCSSにコンパイル（コマンド走ったときだけCSSをコンパイル）
