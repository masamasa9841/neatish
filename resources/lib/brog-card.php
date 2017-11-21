<?php
/**
 * Brog-card setting file.
 * Thanks to https://nelog.jp/wordpress-hatena-blog-card.
 *
 * @package neatish
 * @author Masaya Okawa
 * @license GPL-2.0+
 */

/**
 * Enable blog card.
 *
 * @param string $the_content Content.
 */
function url_to_hatena_blog_card( $the_content ) {
	if ( is_singular() ) {
		$res = preg_match_all( '/^(<p>)?(<a.+?>)?https?:\/\/[-_.!~*\'()a-zA-Z0-9;\/?:\@&=+\$,%#]+(<\/a>)?(<\/p>)?(<br ? \/>)?$/im', $the_content, $m );
		foreach ( $m[0] as $match ) {
			$url         = strip_tags( $match );
				$tag     = '<iframe class="blog-card external-blog-card-hatena cf" style="width: 100%;" src="//hatenablog-parts.com/embed?url=' . $url . '"></iframe>';
			$the_content = preg_replace( '{' . preg_quote( $match ) . '}', $tag, $the_content, 1 );
		}
	}
	return $the_content;
}
// add_filter( 'the_content', 'url_to_hatena_blog_card' );

// wp_oembed_add_provider( 'https://*', 'https://hatenablog.com/oembed' );
add_filter( 'embed_oembed_discover', '__return_false' );
remove_action( 'parse_query', 'wp_oembed_parse_query' );
remove_action( 'wp_head', 'wp_oembed_remove_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_remove_host_js' );
remove_filter( 'pre_oembed_result', 'wp_filter_pre_oembed_result' );
