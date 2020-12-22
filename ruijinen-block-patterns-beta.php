<?php
/**
 * Plugin name: 類人猿ブロックパターン（ベータ）
 * Description: Snow Monkeyサイトをより素敵にするブロックパターンが入っています
 * Version: 0.1.0beta
 *
 * @package ruijinen-block-patterns-beta
 * @author mgn
 * @license GPL-2.0+
 */

/**
 * 定数を宣言
 */
define( 'RJE_PLUGIN_URL', plugins_url( '', __FILE__ ) );  // このプラグインのURL
define( 'RJE_PLUGIN_PATH', plugin_dir_path( __FILE__ ) ); // このプラグインのパス
define( 'RJE_BASENAME', plugin_basename( __FILE__ ) );    // このプラグインのベースネーム

/**
 * テキストドメインを宣言
 */
function rje_pattern_load_textdomain() {
	load_plugin_textdomain( 'ruijinen-block-patterns-beta', false, dirname( RJE_BASENAME ) . '/languages/' );
}
add_action( 'plugins_loaded', 'rje_pattern_load_textdomain' );

/**
 * inc ファイルの読み込み
 */
// Snow Monkey および Snow Monkey Blocks が有効化されていない場合の処理
require_once RJE_PLUGIN_PATH . 'inc/activate.php';
// 自動アップデート
require_once RJE_PLUGIN_PATH . 'inc/auto-update.php';
// ブロックスタイル及びブロックパターンの設定の読み込み
require_once RJE_PLUGIN_PATH . 'inc/load-register-block.php';
