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

<a href="<?php echo home_url();?>" >
<?php
// check to see if the logo exists and add it to the page
if ( get_theme_mod( 'your_theme_logo' ) ) : ?>
<img  id='logo' src="<?php echo get_theme_mod( 'your_theme_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
<?php // add a fallback if the logo doesn't exist
else : ?>
<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
<?php endif; ?>

</a>
</div>
<?php wp_nav_menu( array( 
    'theme_location' => 'main-menu', 
    'link_before' => '', 
    'link_after' => '' ,
    'menu_class' => 'navbar-nav mr-auto',
    ) )
    ; ?>
   
</nav>
</header>
<div id="container">
<main id="content" role="main">