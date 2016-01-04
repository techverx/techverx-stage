<?php
/*
Template Name: Blog Template
*/

get_header();
?>


<div class="clear"></div>

<section>
    <div class="content">

    <div class="clear40"></div>
        
    <div class="container">
        
        <div class="row">
            <div class="col-md-9">

            <?php 
$args = array('post_type' => 'post', 'numberposts' => '5');

query_posts($args);

?>

<?php if(have_posts()) : while(have_posts()): the_post();
  ?>

  <div class="post-block">
    <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></div>
    <div class="date"><?php echo get_the_date(); ?> | <?php echo get_the_author(); ?> </div>
    <div class="post-image"><?php the_post_thumbnail(array(860,361), array('class' => "img-responsive center-block") ) ?> </div>
    <div class="post-excerpt"> <?php the_content() ?></div>
    <div class="more text-center"><a href="<?php the_permalink(); ?>">Read More</a></div>
  </div>

<?php endwhile;?>
<?php endif;?>
                                                

            </div>
            <div class="col-md-3">
                
                <div class="wgt-box">
                    <h3 class="side-widget-title">Featured Posts</h3>




                    <!-- ########## SLIDER STARTS ########## -->
                    <div class="flexslider">
                        <ul class="slides">

                            <li>
                                <img src="<?php bloginfo('template_directory'); ?>/images/blog/blog-image-1.png">
                                <a href="#" class="title">This is the title of your first post</a>
                                <div class="date">July 1, 2015</div>
                            </li>

                            <li>
                                <img src="<?php bloginfo('template_directory'); ?>/images/blog/blog-image-2.png">
                                <a href="#" class="title">This is the title of your first post</a>
                                <div class="date">July 1, 2015</div>
                            </li>    
                           
                        </ul>
                    </div>
                    <!-- ########## SLIDER ENDS ########## -->




                </div>
                
                <?php get_sidebar('blog-sidebar'); ?>

                <div class="wgt-box">
                    <h3 class="side-widget-title">Search by Tags</h3>
                    <div class="tags">
                        <a href="#">New York</a> 
                        <a href="#">Sightseeing</a> 
                        <a href="#">Vacation</a>
                    </div>
                </div>

                <div class="wgt-box">
                    <h3 class="side-widget-title">Follow Us</h3>
                    <div>
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/blog/blog-fb.jpg"></a> 
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/blog/blog-twit.jpg"></a> 
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/blog/blog-goog.jpg"></a> 
                    </div>
                </div>

            </div>
        </div>

    </div>    
</div>
</section>


<?php get_footer();?>
