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
    <div class="post-excerpt"> <?php the_excerpt() ?></div>
    <div class="more text-center"><a href="<?php the_permalink(); ?>">Read More</a></div>
  </div>

<?php endwhile;?>
<?php endif;?>
                                                

            </div>
            <div class="col-md-3">
          
                 <?php get_sidebar('blog-sidebar'); ?>
                 </div>

           
        </div>

    </div>    
</div>
</section>


<?php get_footer();?>
