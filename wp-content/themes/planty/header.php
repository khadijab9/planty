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
<img id=logo src="<?php echo get_template_directory_uri(); ?>/planty/image/logo-png" alt="logo">
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