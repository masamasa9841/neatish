<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_enqueue_script('jquery');//jQueryの読み込み?>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php get_template_part('templates/layout/navigation/navigation');//ナヴィゲーションの設定テンプレート?>
<!-- header -->
<div class="container">
    <header class="global-head">
        <h1 id="brand-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    </header>
    <main class="main-contents">
        <section class="inner">
            <body>
