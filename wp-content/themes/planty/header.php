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
<div class=logo-image> 

<!-- revnoi à l'url de la page d'accueil du site -->
<a href="<?php echo home_url();?>" >
<?php
// vérifie si le logo a été défini sur le customizer wp et l'ajoute à la page 
if ( get_theme_mod( 'your_theme_logo' ) ) : ?>
<img  id='logo' src="<?php echo get_theme_mod( 'your_theme_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
<?php // Si aucun logo existe,  le titre de site s'affichera en utilisant la fonction bloginfo()
else : ?>
<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
<?php endif; ?>

</a>
</div> 
<?php 
// affiche un menu de navigation
wp_nav_menu( array( 
    'theme_location' => 'main-menu', 
    'menu_class' => 'navbar-nav mr-auto',
    ) )
    ; ?>
   
</nav>
</header>
<div id="container">
<main id="content" role="main">