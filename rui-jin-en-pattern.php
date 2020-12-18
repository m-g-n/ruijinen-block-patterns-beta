<?php
/**
 * Plugin name: 類人猿パターンライブラリ（β版）
 * Description: Snow Monkeyサイトをより素敵にするブロックパターンが入っています
 * Version: 0.1.0beta
 *
 * @package rui-jin-en-pattern
 * @author mgn
 * @license GPL-2.0+
 */

/**
 * 定数を宣言
 */
define( 'RJE_PLUGIN_URL', plugins_url( '', __FILE__ ) ); // このプラグインのURL
define( 'RJE_PLUGIN_PATH', plugin_dir_path( __FILE__ ) ); // このプラグインのパス

/**
 * テキストドメインを宣言
 */
function rje_pattern_load_textdomain() {
	load_plugin_textdomain( 'rui-jin-en-pattern', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'rje_pattern_load_textdomain' );

/**
 * inc ファイルの読み込み
 */

// Snow Monkey テーマが有効かの判別と、有効でない場合の処理
require_once RJE_PLUGIN_PATH . 'inc/is-snow-monkey-theme.php';
// Snow Monkey Blocks プラグインが有効かの判別と、有効でない場合の処理
require_once RJE_PLUGIN_PATH . 'inc/is-snow-monkey-blocks-plugin.php';
// 自動アップデート
require_once RJE_PLUGIN_PATH . 'inc/auto-update.php';
// ブロックスタイル及びブロックパターンの設定の読み込み
require_once RJE_PLUGIN_PATH . 'inc/load-register-block.php';
