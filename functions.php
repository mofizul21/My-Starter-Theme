<?php

// Theme setup
function my_starter_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'my-starter-theme'),
    ));
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
}
add_action('after_setup_theme', 'my_starter_theme_setup');

// Enqueue scripts and styles
function my_starter_theme_scripts() {
    wp_enqueue_style('my-starter-theme-style', get_stylesheet_uri());
    wp_enqueue_script('my-starter-theme-script', get_template_directory_uri() . '/js/main.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'my_starter_theme_scripts');

// Register widget area
function my_starter_theme_widgets_init() {
    register_sidebar(array(
        'name'          => __('Main Sidebar', 'my-starter-theme'),
        'id'            => 'main-sidebar',
        'description'   => __('Add widgets here to appear in your sidebar.', 'my-starter-theme'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'my_starter_theme_widgets_init');
