<?php //cssの読み込み。headの中には書かない
if ( !function_exists( 'add_filis' ) ):
    function add_filis() {

        // テーマスタイルの呼び出し
        wp_enqueue_style( 'main-style',
            get_template_directory_uri() . '/resources/src/css/style.css'
        );

    }
endif;
add_action( 'wp_enqueue_scripts', 'add_filis', 1 );