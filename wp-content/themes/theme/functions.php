<?php
// Fonction pour inclure les fichiers CSS
function taxica_enqueue_styles() {
    // Inclure les fichiers CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/all-fontawesome.min.css');
    wp_enqueue_style('animate', get_template_directory_uri() . '/assets/css/animate.min.css');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.min.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
    wp_enqueue_style('jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.min.css');
    wp_enqueue_style('timepicker', get_template_directory_uri() . '/assets/css/jquery.timepicker.min.css');
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/assets/css/nice-select.min.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());
}

// Fonction pour inclure les fichiers JS
function taxica_enqueue_scripts() {
    // Inclure jQuery (WordPress l'inclut par défaut en mode admin, mais il faut l'inclure en frontend)
    wp_enqueue_script('jquery');
    
    // Inclure les fichiers JS
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/assets/js/modernizr.min.js', array(), null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jquery'), null, true);
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array(), null, true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), null, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), null, true);
    wp_enqueue_script('appear', get_template_directory_uri() . '/assets/js/jquery.appear.min.js', array(), null, true);
    wp_enqueue_script('easing', get_template_directory_uri() . '/assets/js/jquery.easing.min.js', array(), null, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), null, true);
    wp_enqueue_script('counter-up', get_template_directory_uri() . '/assets/js/counter-up.js', array(), null, true);
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.min.js', array('jquery'), null, true);
    wp_enqueue_script('timepicker', get_template_directory_uri() . '/assets/js/jquery.timepicker.min.js', array('jquery'), null, true);
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array('jquery'), null, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array(), null, true);
   
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);
}

// Ajouter les styles et scripts dans WordPress
add_action('wp_enqueue_scripts', 'taxica_enqueue_styles');
add_action('wp_enqueue_scripts', 'taxica_enqueue_scripts');

// Fonction pour enregistrer les menus
function taxica_register_menus() {
    // Enregistrement des menus dans WordPress
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu', 'taxica'),  // Menu principal
        )
    );
}

// Ajouter l'action pour l'initialisation des menus
add_action('init', 'taxica_register_menus');
?>
