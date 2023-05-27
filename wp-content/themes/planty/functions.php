<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
       // Chargement du style.css du thème parent blankSl et du thème enfant
       wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
       wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
    }

    //ajoute un emplacement pour le footer  sur wp et enregistre un menu de navigation appelé "pieds de page" (footer-menu). 
    function register_footer(){
   add_theme_support('footer');
   register_nav_menu('footer-menu', __('pieds de page'));
}

add_action ('after_setup_theme', 'register_footer');


//filtre hook : ajoute un élément supplémentaire au menu de navigation 
add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
function add_extra_item_to_nav_menu( $items, $args ) {
   // verifie si l'utilisateur est connecté dans ce cas un lien vers la page d'administration (admin_url()) est ajouté au menu//

    if (is_user_logged_in() && $args->theme_location == 'main-menu') {
        $items .= '<li><a href="'. admin_url() .'">Admin</a></li>';
    }

    return $items;
}

//utilise le Customizer de WordPressa pour l'ajout d' une option permettant de télécharger un logo pour le site.
function your_theme_new_customizer_settings($wp_customize) {
   // crée un réglage (add_setting) pour le logo et un contrôle (add_control) pour télécharger l'image du logo
   $wp_customize->add_setting('your_theme_logo');
   $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_logo',
   array(
   'label'=>'Upload Logo',
   'section'=>'title_tagline',
   'settings'=>'your_theme_logo',
   ) ) );
   }
   add_action('customize_register', 'your_theme_new_customizer_settings');

  