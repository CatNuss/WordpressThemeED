<?php

get_header();

?>

<!--Artist Statement | Image-->

<div class="top-half">

    <div class="top-half-txt">
    
        <h1><span><?php echo get_theme_mod('ed_about_top_half_headline') ?></span></h1>
        
        <p><?php echo wpautop(get_theme_mod('ed_about_top_half_text')) ?></p>
        
    </div>
    
    <div class="top-half-img">
    
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('ed_about_top_half_image')) ?>">
    
    </div>

</div>

<!--Image | Doll Care-->

<div class="bottom-half">
    
    <div class="bottom-half-img" style="margin-top: 20px;">
    
        <img src="<?php echo wp_get_attachment_url(get_theme_mod('ed_about_bottom_half_image')) ?>">
    
    </div>
    
    <div class="bottom-half-txt">
    
        <h1><span><?php echo get_theme_mod('ed_about_bottom_half_headline') ?></span></h1>
        
        <p><?php echo wpautop(get_theme_mod('ed_about_bottom_half_text')) ?></p>
        
    </div>

</div>


<?php

get_footer();

?>
