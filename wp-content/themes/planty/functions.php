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
   if ( $item->title == '' ) {
       // Ajoute la classe personnalisée au lien de menu
       $classes[] = 'my-custom-menu-item';
   }
   return $classes;
}
add_filter( 'nav_menu_css_class', 'add_custom_class_to_menu_item', 10, 3 );





//
add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );
function add_extra_item_to_nav_menu( $items, $args ) {
   // verifie si l'utilisateur est connecté//

    if (is_user_logged_in() && $args->theme_location == 'main-menu') {
        $items .= '<li><a href="'. admin_url() .'">Admin</a></li>';
    }

    return $items;
}


function your_theme_new_customizer_settings($wp_customize) {
   // add a setting for the site logo
   $wp_customize->add_setting('your_theme_logo');
   // Add a control to upload the logo
   $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_logo',
   array(
   'label'=>'Upload Logo',
   'section'=>'title_tagline',
   'settings'=>'your_theme_logo',
   ) ) );
   }
   add_action('customize_register', 'your_theme_new_customizer_settings');

  