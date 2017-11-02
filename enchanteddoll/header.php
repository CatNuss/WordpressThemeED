<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width">
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Bilbo+Swash+Caps|Open+Sans+Condensed:300" rel="stylesheet">
        <script src="https://use.fontawesome.com/f6eeb48bdb.js"></script>

        
        <title><?php bloginfo('name'); ?></title>
        
        <?php wp_head(); ?>
    </head>
    
<body <?php body_class(); ?>>
    
    
<div class="container"><!--CONTAINER-->
    
    <header class="site-header">
        
        <div class="header-left">
        
            <h1 id="site-name"><?php bloginfo('name'); ?></h1>
            <h5 id="site-tagline"><?php bloginfo('description'); ?></h5>
        
        </div>
        
        <div class="header-right">
    
            <nav class="site-nav">

                <?php 

                    $args = array(
                        'theme_location' => 'primary'
                    );

                ?>

                <?php wp_nav_menu( $args ); ?>
            </nav>
            
        </div>
        
    </header>