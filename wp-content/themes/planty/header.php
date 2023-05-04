<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="wrapper" class="hfeed">
    <header id="header" role="banner">
        <div id="branding">
            <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
<?php
if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; }
echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; }
?>

        </div>

        <div id="site-description"<?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>><?php bloginfo( 'description' ); ?></div>
        </div>
        <nav class=navbar >
            <img class=logo src="/planty/wp-content/themes/planty/image/logo.png" alt="logo planty">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nous rencontrer</a>
                    </li>
               <li class="nav-item dropdown">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="admin" aria-haspopup="true" aria-expanded="false">
                    Admin
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-linkLast" href="#">Commander</a>
                </li>
            </ul>

    <?php wp_nav_menu( array( 
        'theme_location' => 'main-menu', 
        'link_before' => '<span itemprop="name">', 
        'link_after' => '</span>',
        'menu_class' => 'navbar-nav mr-auto' ) ); ?>
 
        </nav>

   
            </div>
</nav>
        

    </header>

<div id="container">
<main id="content" role="main">