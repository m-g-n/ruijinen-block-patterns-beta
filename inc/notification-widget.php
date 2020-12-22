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
	wp_add_dashboard_widget( 'rje-notification-widget', __( 'RUI-JIN-EN Pattern Library - beta', 'rui-jin-en-pattern' ), 'rje_notification_content' );
}

// ウィジェットへ出力する内容
function rje_notification_content() {
	global $wp_version;

	$transient = get_transient( 'rje-notification-widget' );

	if ( ! $transient ) {
		$wp_api_posts = wp_remote_get(
			'https://snow-monkey.2inc.org/wp-json/wp/v2/topic?per_page=5',
			[
				'user-agent' => 'WordPress/' . $wp_version,
			]
		);

		if ( is_wp_error( $wp_api_posts ) || 200 !== $wp_api_posts['response']['code'] ) {
			$wp_api_posts = [];
		} else {
			$wp_api_posts = json_decode( $wp_api_posts['body'] );
		}

		set_transient( 'rje-notification-widget', $wp_api_posts, 60 * 60 );
	} else {
		$wp_api_posts = $transient;
	}

	if ( ! $wp_api_posts ) {
		return;
	}
	?>
	<style>
		.rje-widget-btn-area {
			text-align: center;
			margin-top: 15px !important;
		}
		.rje-widget-btn-area li {
			display: inline-block;
			margin: 0 5px;
		}
		.rje-widget-btn-area .rje-widget-btn {
			min-width: 80px;
			text-align: center;
		}
	</style>
	<div class="wordpress-news hide-if-no-js">
		<div class="rss-widget">
			<h3><?php esc_html_e( __( 'Information', 'rui-jin-en-pattern' ) ); ?></h3>
			<ul id="rje-notification-widget">
				<?php foreach ( $wp_api_posts as $item ) : ?>
					<li><a href="<?php echo esc_url( $item->link ); ?>" target="_blank" rel="noreferrer"><?php echo esc_html( $item->title->rendered ); ?></a></li>
				<?php endforeach; ?>
			</ul>
			<ul class="rje-widget-btn-area">
				<li><a href="" class="rje-widget-btn button-primary"><?php esc_html_e( __( 'Official Site', 'rui-jin-en-pattern' ) ); ?></a></li>
<?php /* // 後日公開 */ ?>
				<li><a href="" class="rje-widget-btn button-primary"><?php esc_html_e( __( 'How to use', 'rui-jin-en-pattern' ) ); ?></a></li>
				<li><a href="" class="rje-widget-btn button-primary"><?php esc_html_e( __( 'FAQ', 'rui-jin-en-pattern' ) ); ?></a></li>
<?php /**/ ?>
			</ul>
		</div>
	</div>
	<?php
}
