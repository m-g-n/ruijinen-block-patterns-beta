<?php
/**
 * @package rui-jin-en-pattern
 * @author mgn
 * @license GPL-2.0+
 */

/**
 * Snow Monkey Blocks が有効化されていなかったら有効化してもカスタマイズが反映されないようにする
 */

// plugin.phpを読み込む
require_once( ABSPATH . 'wp-admin/includes/plugin.php' );

// Snow Monkey Blocks が有効化されていなかったら
if ( ! is_plugin_active( 'snow-monkey-blocks/snow-monkey-blocks.php' ) ) {
	function add_alert_need_plugin_snow_monkey_blocks() {
		?>
<div class="error">
	<p><?php esc_html_e( '[RUI-JIN-EN Pattern Library] This Plugin needs a plugin Snow Monkey Blocks.', 'rui-jin-en-pattern' ); ?></p>
</div>
		<?php
	};
	add_action( 'admin_notices', 'add_alert_need_plugin_snow_monkey_blocks' );

	return false;
}
