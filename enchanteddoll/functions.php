<?php

function enchanteddoll_resources() {
    
    wp_enqueue_style('style', get_stylesheet_uri());
    
}

add_action('wp_enqueue_scripts', 'enchanteddoll_resources');


//NAV MENUS
register_nav_menus(array(
    'primary' => __('Primary Menu'),
));

add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');
 
function my_custom_dashboard_widgets() {
global $wp_meta_boxes;
 
wp_add_dashboard_widget('custom_help_widget', 'Theme Support', 'custom_dashboard_help');
}
 
function custom_dashboard_help() {
echo '<p>Welcome to Enchanted Doll Theme! Need help? Contact the developer <a href="mailto:catherinejnussey@gmail.com">here</a>. Please pass me, I am a good student - I swear!</p>';
}

//USER FRONT PAGE HEADER CUSTOMIZABLE 

function ed_user_header_option($wp_customize) {
    $wp_customize->add_section('ed-header-option', array(
        'title' => 'Home Page Header Image'
    ));
    
    $wp_customize->add_setting('ed-home-header-image', array(
        'default' => 'DEFAULT IMAGE HERE'
    ));
    
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'ed-home-header-image-control', array(
    
        'label' => 'Header Image',
        'section' => 'ed-header-option',
        'settings' => 'ed-home-header-image', 
        'width' => 1180,
        'height' => 600,
        
    )));
}

add_action('customize_register', 'ed_user_header_option');

function ed_about_top_half($wp_customize) {
    $wp_customize->add_section('ed_about_top_half_section', array(
        'title' => 'About Top Section'
    ));
    
    $wp_customize->add_setting('ed_about_top_half_headline', array(
        'default' => 'About Enchanted Doll'
    ));
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ed_about_top_half_headline_control', array(
        'label' => 'Headline',
        'section' => 'ed_about_top_half_section',
        'settings' => 'ed_about_top_half_headline'
    )));
    
    $wp_customize->add_setting('ed_about_top_half_text', array(
        'default' => 'this is a paragraph'
    ));
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ed_about_top_half_text_control', array(
        'label' => 'Body Text',
        'section' => 'ed_about_top_half_section',
        'settings' => 'ed_about_top_half_text', 
        'type' => 'textarea'
    )));
    
    $wp_customize->add_setting('ed_about_top_half_image');
    
    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ed_about_top_half_image_control', array(
        'label' => 'Image',
        'section' => 'ed_about_top_half_section',
        'settings' => 'ed_about_top_half_image', 
        'width' => 400,
        'height' => 400,
    )));
}

add_action('customize_register', 'ed_about_top_half');

function ed_about_bottom_half($wp_customize) {
    $wp_customize->add_section('ed_about_bottom_half_section', array(
        'title' => 'About Bottom Section'
    ));
    
    $wp_customize->add_setting('ed_about_bottom_half_headline', array(
        'default' => 'About Enchanted Doll'
    ));
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ed_about_bottom_half_headline_control', array(
        'label' => 'Headline',
        'section' => 'ed_about_bottom_half_section',
        'settings' => 'ed_about_bottom_half_headline'
    )));
    
    $wp_customize->add_setting('ed_about_bottom_half_text', array(
        'default' => 'this is a paragraph'
    ));
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ed_about_bottom_half_text_control', array(
        'label' => 'Body Text',
        'section' => 'ed_about_bottom_half_section',
        'settings' => 'ed_about_bottom_half_text', 
        'type' => 'textarea'
    )));
    
    $wp_customize->add_setting('ed_about_bottom_half_image');
    
    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control($wp_customize, 'ed_about_bottom_half_image_control', array(
        'label' => 'Image',
        'section' => 'ed_about_bottom_half_section',
        'settings' => 'ed_about_bottom_half_image', 
        'width' => 400,
        'height' => 400,
    )));
}

add_action('customize_register', 'ed_about_bottom_half');

function ed_quote_text($wp_customize) {
    $wp_customize->add_section('ed_quote_text_section', array(
        'title' => 'Home Quote'
    ));
    
    $wp_customize->add_setting('ed_quote_text_area', array(
        'default' => 'QUOTE'
    ));
    
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ed_quote_text_area_control', array(
        'label' => 'Body Text',
        'section' => 'ed_quote_text_section',
        'settings' => 'ed_quote_text_area', 
        'type' => 'textarea'
    )));
}

add_action('customize_register', 'ed_quote_text');

//ADD widget locations

function edWidgetsInit() {
    
    register_sidebar( array(
        'name' => 'Sidebar' ,
        'id' => 'sidebar1'
    ));
    
    register_sidebar( array(
        'name' => 'Gallery Search' ,
        'id' => 'ed_gallery_side'
    ));
}

add_action('widgets_init', 'edWidgetsInit');
