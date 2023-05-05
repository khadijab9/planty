<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>
<body>


<header id="header" role="banner">



<nav class=nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
<a href="#"><img id=logo src="wp-content/themes/planty/image/logo.png" alt="logo du site"> </a>
<?php wp_nav_menu( array( 
    'theme_location' => 'main-menu', 
    'link_before' => '<span itemprop="name">', 
    'link_after' => '</span>' ,
    'menu_class' => 'navbar-nav mr-auto',
    ) )
    ; ?>

</nav>
</header>
<div id="container">
<main id="content" role="main">