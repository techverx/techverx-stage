<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

                
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

<?php if ( is_active_sidebar( 'blog-sidebar' )  ) : ?>
    <?php dynamic_sidebar( 'blog-sidebar' ); ?>
<?php endif; ?>

<!-- 
     <div class="wgt-box">
                    <h3 class="side-widget-title">Search by Tags</h3>
                    <div class="tags">
                        <a href="#">New York</a> 
                        <a href="#">Sightseeing</a> 
                        <a href="#">Vacation</a>
                    </div>
                </div> -->

                <div class="wgt-box">
                    <h3 class="side-widget-title">Follow Us</h3>
                    <div>
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/blog/blog-fb.jpg"></a> 
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/blog/blog-twit.jpg"></a> 
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/blog/blog-goog.jpg"></a> 
                    </div>
                </div>
