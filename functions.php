<?php
/**
 * Created by PhpStorm.
 * User: Marie
 * Date: 14/03/2018
 * Time: 14:52
 */
/**
 * Gestion des miniatures dans les thèmes
 **/
add_theme_support('post-thumbnails');

add_image_size('466x466', 466, 466, true);

/**
 * Initiatlisation
 * Styles, Jquery, Menu
 */
add_action('wp_enqueue_scripts', 'sk_wp_enqueue_scripts');

//fonction wordpress à moi

function sk_wp_enqueue_scripts() {
    $path = get_stylesheet_directory_uri();
    $css = array (
        'reset'     => $path . '/css/reset.css',
        'main'     => $path . '/css/main.css',

    );
    // //Scripts CSS id=style et path_file=filedirectory
    foreach ($css as $id => $path_file) {
        wp_register_style($id, $path_file, array(), false, 'all');
        wp_enqueue_style($id);
    }
    /**
     * Ajout des JS
     */

    $js = array (
        // 'jquery' => 'https://code.jquery.com/jquery-3.3.1.min.js',
        'jquery'    => $path . '/js/jquery.js',
        'main'   => $path . '/js/main.js',
        'map'   => $path . '/js/map.js'
    );

    //supp la version de base de WP
    wp_deregister_script('jquery');

    foreach($js as $id => $path_file) {
        wp_register_script($id, $path_file, array(), false, true);
        wp_enqueue_script($id);
    }
}

function menulittlemakura() {
    register_nav_menu('header-menu',__('Header Menu', 'littlemakura'));
    register_nav_menu('footer',__('Footer Menu', 'littlemakura'));
    register_nav_menu('header-mob',__('Header Mob Menu', 'littlemakura'));
}
add_action('init', 'menulittlemakura');

function getPrevNext(){}