<?php
//This function is for link javaScript and css files
function my_site() {
    wp_enqueue_script('my-theme-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);
    wp_enqueue_style('coustom-google-fonts',' //fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('my_site_styles', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('my_theme_styles', get_theme_file_uri('/build/index.css'));
}
add_action('wp_enqueue_scripts', 'my_site');

//This function is for dynamic the website title 
function amazing_theme() {
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'amazing_theme');
