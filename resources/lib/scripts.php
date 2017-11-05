<?php
/**
 * CSS, JSの読み込み。headの中では行わない
 *
 * @package neatish
 * @author Masaya Okawa
 * @license GPL-2.0+
 */

if ( ! function_exists( 'add_filis' ) ) :
	/**
	 * ファイルを呼び出す
	 */
	function add_filis() {
		// テーマスタイルの呼び出し.
		wp_enqueue_style( 'main-style',
			get_template_directory_uri() . '/src/css/style.css'
		);

		// 画面の配置(width)を指定するスクリプト.
		wp_enqueue_script(
			'get-width',
			get_stylesheet_directory_uri() . '/src/js/get-width.js',
			array( 'jquery' )
		);

		// シェアボタンのカウントをするスクリプト.
		wp_enqueue_script(
			'share-count',
			get_stylesheet_directory_uri() . '/src/js/share-count.js',
			array( 'jquery' )
		);

		// ナヴィゲーションのスクロール.
		wp_enqueue_script(
			'perfect-scrollbar',
			get_stylesheet_directory_uri() . '/src/js/perfect-scrollbar.min.js',
			array( 'jquery' )
		);

		// ナビゲーションのサブメニューの動き.
		wp_enqueue_script(
			'velocity',
			get_stylesheet_directory_uri() . '/src/js/velocity.min.js',
			array( 'jquery' )
		);

		// ナビゲーションの全体のjs.
		wp_enqueue_script(
			'navigation',
			get_stylesheet_directory_uri() . '/src/js/navigation.js',
			array( 'jquery', 'velocity', 'perfect-scrollbar' )
		);

		// はてブボタンのためのjs.
		wp_enqueue_script(
			'hatena',
			'//b.st-hatena.com/js/bookmark_button.js'
		);
	}
	endif;
add_action( 'wp_enqueue_scripts', 'add_filis', 1 );
