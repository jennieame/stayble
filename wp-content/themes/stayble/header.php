<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
<section id="branding">
<div id="site-title"><?php if ( ! is_singular() ) ?><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Home" rel="home"><img src="http://localhost/phptest/stayble/wp-content/uploads/2015/02/AG_1-e1422953961269.png"></a></div>
<!-- <div id="site-description"><?php bloginfo( 'description' ); ?></div> -->
</section>
<nav id="menu" role="navigation">
<!-- <div id="search"> -->
<!-- <?php get_search_form(); ?> -->
<!-- </div> -->
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>


 
</nav>
</header>
<div id="container">