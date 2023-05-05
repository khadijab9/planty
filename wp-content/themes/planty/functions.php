<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
       // Chargement du style.css du thème parent blankSl
       wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
       wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    }

    //ajout de l'emplacement pour le footer//
function register_footer(){
   add_theme_support('footer');
   register_nav_menu('footer-menu', __('pieds de page'));
}

add_action ('after_setup_theme', 'register_footer');

   //pour styliser le lien commander//
function add_custom_class_to_menu_item( $classes, $item, $args ) {
   // Vérifie si le lien  correspond à celui qu'on veut modifier
   if ( $item->title == 'Commander' ) {
       // Ajoute la classe personnalisée au lien de menu
       $classes[] = 'my-custom-menu-item';
   }
   return $classes;
}
add_filter( 'nav_menu_css_class', 'add_custom_class_to_menu_item', 10, 3 );