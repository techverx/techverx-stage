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
                
                <div class="post-block">
                    <div class="title"><a href="#">This is the title of your first post</a></div>
                    <div class="date">July 1, 2015 | Jane Doe</div>
                    <div class="post-image"><img src="<?php bloginfo('template_directory'); ?>/images/blog/blog-image-1.png" class="img-responsive center-block"></div>
                    <div class="post-excerpt">To create your first blog post, click here to open the Blog Manager.  Edit your Published Post entitled 'This is the title of your first post’, add your own text, images or videos, and click 'Publish'! From the Blog Manager you can also add a brand new post in a breeze...</div>
                    <div class="more text-center"><a href="#">Read More</a></div>
                </div>

                <div class="post-block">
                    <div class="title"><a href="#">This is the title of your first post</a></div>
                    <div class="date">July 1, 2015 | Jane Doe</div>
                    <div class="post-image"><img src="<?php bloginfo('template_directory'); ?>/images/blog/blog-image-2.png" class="img-responsive center-block"></div>
                    <div class="post-excerpt">To create your first blog post, click here to open the Blog Manager.  Edit your Published Post entitled 'This is the title of your first post’, add your own text, images or videos, and click 'Publish'! From the Blog Manager you can also add a brand new post in a breeze...</div>
                    <div class="more text-center"><a href="#">Read More</a></div>
                </div>

                <div class="post-block">
                    <div class="title"><a href="#">This is the title of your first post</a></div>
                    <div class="date">July 1, 2015 | Jane Doe</div>
                    <div class="post-image"><img src="<?php bloginfo('template_directory'); ?>/images/blog/blog-image-3.png" class="img-responsive center-block"></div>
                    <div class="post-excerpt">To create your first blog post, click here to open the Blog Manager.  Edit your Published Post entitled 'This is the title of your first post’, add your own text, images or videos, and click 'Publish'! From the Blog Manager you can also add a brand new post in a breeze...</div>
                    <div class="more text-center"><a href="#">Read More</a></div>
                </div>

                <div class="post-block">
                    <div class="title"><a href="#">This is the title of your first post</a></div>
                    <div class="date">July 1, 2015 | Jane Doe</div>
                    <div class="post-image"><img src="<?php bloginfo('template_directory'); ?>/images/blog/blog-image-1.png" class="img-responsive center-block"></div>
                    <div class="post-excerpt">To create your first blog post, click here to open the Blog Manager.  Edit your Published Post entitled 'This is the title of your first post’, add your own text, images or videos, and click 'Publish'! From the Blog Manager you can also add a brand new post in a breeze...</div>
                    <div class="more text-center"><a href="#">Read More</a></div>
                </div>


                <div class="post-block">
                    <div class="title"><a href="#">This is the title of your first post</a></div>
                    <div class="date">July 1, 2015 | Jane Doe</div>
                    <div class="post-image"><img src="<?php bloginfo('template_directory'); ?>/images/blog/blog-image-2.png" class="img-responsive center-block"></div>
                    <div class="post-excerpt">To create your first blog post, click here to open the Blog Manager.  Edit your Published Post entitled 'This is the title of your first post’, add your own text, images or videos, and click 'Publish'! From the Blog Manager you can also add a brand new post in a breeze...</div>
                    <div class="more text-center"><a href="#">Read More</a></div>
                </div>                                                

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

                <div class="wgt-box">
                    <h3 class="side-widget-title">Recent Posts</h3>
                    
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-4 no-padding-right">
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/blog/blog-image-1.png" class="img-responsive center-block"></a>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-8">

                            <div class="recent-block">
                                <a href="#" class="title">This is the title of your first post</a>
                                <div class="date">July 1, 2015</div>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-4 no-padding-right">
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/blog/blog-image-2.png" class="img-responsive center-block"></a>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-8">

                            <div class="recent-block">
                                <a href="#" class="title">This is the title of your first post</a>
                                <div class="date">July 1, 2015</div>
                            </div>

                        </div>
                    </div>                    

                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-4 no-padding-right">
                            <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/blog/blog-image-3.png" class="img-responsive center-block"></a>
                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-8">

                            <div class="recent-block">
                                <a href="#" class="title">This is the title of your first post</a>
                                <div class="date">July 1, 2015</div>
                            </div>

                        </div>
                    </div>                    

                </div>

                <div class="wgt-box">
                    <h3 class="side-widget-title">Archive</h3>
                    <div class="archive-box">
                        <ul class="list-unstyled">
                            <li><a href="#">July 2015 (1)</a></li>
                            <li><a href="#">June 2015 (10)</a></li>
                            <li><a href="#">May 2015 (150)</a></li>
                        </ul>
                    </div>
                </div>

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
