<?php //cssの読み込み。headの中には書かない
if ( !function_exists( 'add_filis' ) ):
    function add_filis() {

        // テーマスタイルの呼び出し
        wp_enqueue_style( 'main-style',
            get_template_directory_uri() . '/src/css/style.css'
				);

				wp_enqueue_script(
					'get-width',
					get_stylesheet_directory_uri() . '/src/js/get-width.js',
					array( 'jquery' )
				);

    }
endif;
add_action( 'wp_enqueue_scripts', 'add_filis', 1 );
