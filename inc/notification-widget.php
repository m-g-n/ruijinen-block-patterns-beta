<?php
/**
 * @package rui-jin-en-pattern
 * @author mgn
 * @license GPL-2.0+
 */

/**
 * ダッシュボードに通知用のウィジェットを追加
 */
add_action( 'wp_dashboard_setup', 'rje_notification_widget' );
// ダッシュボードにウィジェットを追加する
function rje_notification_widget() {
	wp_add_dashboard_widget( 'rje-notification-widget', __( '[RUI-JIN-EN Pattern Library] notification', 'rui-jin-en-pattern' ), 'rje_notification_content' );
}

// ウィジェットへ出力する内容
function rje_notification_content() {
	echo '<p>00/00/00　ダッシュボードにお知らせを追加しました。</p>';
}
