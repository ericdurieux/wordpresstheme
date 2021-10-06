<?php
function wordpresstheme_functions_assets()
{

    // Déclarer jQuery
    wp_enqueue_script('jquery');

    // Déclarer le JS
    wp_enqueue_style(
        'wordpresstheme',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css',
        array(),
        '5.0.2'
    );

    
    wp_enqueue_script(
        'wordpresstheme',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.0.2'
    );

    // Déclarer un CSS
    wp_enqueue_style(
        'wordpresscss',
        get_template_directory_uri() . '/style.css',
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'wordpresstheme_functions_assets');




// Ajouter la prise en charge des images mises en avant
add_theme_support('post-thumbnails');

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support('Librairie');




// Définir la taille des images mises en avant
set_post_thumbnail_size(2000, 400, true);

// Définir d'autres tailles d'images
add_image_size('products', 800, 600, false);
add_image_size('square', 256, 256, false);




register_nav_menus(array(
    'main' => 'Menu Principal',
    'footer' => 'Bas de page',
));
