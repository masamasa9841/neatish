<?php
// テーマのタグクラウドのパラメータ変更
function my_tag_cloud_filter($args) {
	$myargs = array(
		'smallest' => 10, // 最小文字サイズは 10pt
		'largest' => 10, // 最大文字サイズは 10pt
		'number' => 30,  // 一度に表示するのは30タグまで
		'order' => 'RAND', // 表示順はランダムで
	);
	return $myargs;
}
add_filter('widget_tag_cloud_args', 'my_tag_cloud_filter');
