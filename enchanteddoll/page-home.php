<?php

get_header();

?>

<div class="user-header-option">
    
    <img class="header-image" src=" <?php echo wp_get_attachment_url(get_theme_mod('ed-home-header-image')) ?>"><!--[*]DYNAMIC-->

</div>

<!--QUOTE-->
    <div id="quote">
       
        <div id="quotebox">
            
            
                <p><img id="quoteimg" src="http://localhost:8082/wordpress/wp-content/uploads/2017/10/quote.png">More than mere playthings, Enchanted Dolls are a brand of elegantly sculpted and articulated works of art. Adorned with elaborate costumes and graced with precious gemstones, metals, and rare found objects, each ball-jointed porcelain doll intricately conveys an aspect of our humanity.</p>
            

            
        </div>
        
    </div>
<!--/QUOTE-->

<div class="gallery-index clearfix">
    
            <div id="nude">
                
                   <img id="nudeimg" src="http://localhost:8082/wordpress/wp-content/uploads/2017/10/nude-1.jpg"><!--[ ]DYNAMIC-->
                
                    <div id="nude_txt">
                        <p class="overtext"><a class="buttonlink" href="<?php echo get_permalink( get_page_by_path( 'gallery' ) ) ?>">Nude Dolls</a></p><!--[ ]DYNAMIC-->
                    </div>
            </div>
            
            <div id="costumed">
                
                   <img id="costumeimg" src="http://localhost:8082/wordpress/wp-content/uploads/2017/10/costumed-1.jpg"><!--[ ]DYNAMIC-->
                
                    <div id="costumed_txt">
                        <p class="overtext"><a class="buttonlink" href="<?php echo get_permalink( get_page_by_path( 'gallery' ) ) ?>">Costumed Dolls</a></p><!--[ ]DYNAMIC-->
                    </div>
            </div>

            <div id="tattoo">  
                
                    <img id="tattooimg" src="http://localhost:8082/wordpress/wp-content/uploads/2017/10/tattooed.jpg"><!--[ ]DYNAMIC-->

                    <div id="tattoo_txt">
                        <p class="overtext"><a class="buttonlink" href="<?php echo get_permalink( get_page_by_path( 'gallery' ) ) ?>">Tattooed Dolls</a></p><!--[ ]DYNAMIC-->
                    </div>  
            </div>

</div>

<div class="button-position">
    <button class="mybutton"><a class="buttonlink" href="<?php echo get_permalink( get_page_by_path( 'gallery' ) ) ?>">Full Gallery</a></button>
</div>
    
<div class="button-position">
    <button class="mybutton"><a class="buttonlink" href="<?php echo get_permalink( get_page_by_path( 'blog' ) ) ?>">Go to Blog</a></button>
</div>
    
<div class="button-position">
    <button class="mybutton"><a class="buttonlink" href="<?php echo get_permalink( get_page_by_path( 'about' ) ) ?>">About</a></button>
</div>

<?php

get_footer();

?>

