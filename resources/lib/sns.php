<?php
/**
 * SNS関連の関数.
 *
 * @package neatish
 * @author Masaya Okawa
 * @license GPL-2.0+
 */

/**
 * はてぶurlを作成する
 *
 * @param string $url url.
 */
function get_hatebu_url( $url ) {
	if ( strpos( $url, 'https://' ) === 0 ) {
		$hatebu_url = preg_replace( '/https:\/\//', 's/', $url );
	} else {
		$hatebu_url = preg_replace( '/http:\/\//', '', $url );
	}
	return '//b.hatena.ne.jp/entry/' . $hatebu_url;
}
