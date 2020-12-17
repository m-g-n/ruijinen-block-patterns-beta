<?php
/**
 * @package rui-jin-en-pattern
 * @author mgn
 * @license GPL-2.0+
 */

$pattern_category = array( 'RJE-company' );
$pattern_title = 'サンプル';
$use_block_style = array(
    'RJE-sample',
);


foreach ( $use_block_style as $block_style_name ) {
    $this->load_style_handle[$block_style_name][] = $pattern_title;
}
register_block_pattern(
    'RJE-pattern/' . basename(__DIR__),
    array(
        'title' => $pattern_title,
        'content' => file_get_contents( RJE_PLUGIN_PATH . 'patterns/' . basename(__DIR__) . '/pattern.php' ),
        'categories' => $pattern_category
    )
);