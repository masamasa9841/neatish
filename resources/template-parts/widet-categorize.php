<?php
/**
 * カテゴリの関数集
 *
 * @package neatish
 * @author Masaya Okawa
 * @license GPL-2.0+
 */

?>

<?php
/**
 * カテゴリのアーカイブ数にclassを追加する関数
 *
 * @param string $output Content.
 */
function wp_list_categories_archives( $output ) {
	$output = str_replace( '&nbsp;', ' ', $output );
	$output = preg_replace( '/<\/a> \(([0-9]*)\)/', ' <sapn class="cat_count">${1}</span></a>', $output );
	return $output;
}
add_filter( 'wp_list_categories', 'wp_list_categories_archives', 10, 2 );
add_filter( 'get_archives_link', 'wp_list_categories_archives', 10, 2 );
