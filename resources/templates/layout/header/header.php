<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width">
  <title><?php wp_title('|', true, 'right'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php get_template_part('templates/layout/navigation/navigation.php');//ナヴィゲーションの設定テンプレート?>

<!-- header -->
<div id="container">
    <header id="global-head">
        <h1 id="brand-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
    </header>
    <main id="main">
        <section class="inner">
            <body>