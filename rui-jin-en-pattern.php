<?php
/**
 * Plugin name: 類人猿パターンライブラリ（β版）
 * Description: Snow Monkeyサイトをより素敵にするブロックパターンが入っています
 * Version: 0.1.0
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
 * Snow Monkey 以外のテーマを利用している場合は有効化してもカスタマイズが反映されないようにする
 */
$theme = wp_get_theme( get_template() );
if ( 'snow-monkey' !== $theme->template && 'snow-monkey/resources' !== $theme->template ) {
	return;
}