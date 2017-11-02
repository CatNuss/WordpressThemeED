<?php


get_header();

//gets posts
if (have_posts()) :
    while (have_posts()) : the_post(); ?>


<div id="blogwrap">    
<!--[*]DYNAMIC-->

    <article class="post">
        <h2><?php the_title(); ?></h2>
        
        <!--BLOG info to top of each post-->
        <p class="post-info"> <?php the_time('F jS, Y g:i a'); ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a> | Posted in 
            
            
            <?php 
            //output category to blog post title
                $categories = get_the_category();
            
                $separator = ", ";
            
                $output = '';
            
            if ($categories) {
                
                foreach ($categories as $category){
                    
                    $output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>'  . $separator;
                    
                }
                //remove comma from end of list
                echo trim($output, $separator);
                
            }
            
            ?>
        
        </p>
        
        <p><?php the_content(); ?></p>
    </article>

    <div class="blog-nav-wrap">
        
        <?php dynamic_sidebar('sidebar1'); ?>

    </div>

</div>

<?php
    endwhile;

    else :
        echo '<p>no content found</p>';

    endif;

get_footer();

?>
