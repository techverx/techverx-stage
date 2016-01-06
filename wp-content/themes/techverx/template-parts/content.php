<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
 <div class="post-block">
    <div class="title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></div>
    <div class="date"><?php echo get_the_date(); ?> | <?php echo get_the_author(); ?> </div>
    <div class="post-image"><?php the_post_thumbnail(array(860,361), array('class' => "img-responsive center-block") ) ?> </div>
    <div class="post-excerpt"> <?php the_excerpt() ?></div>
    <div class="more text-center"><a href="<?php the_permalink(); ?>">Read More</a></div>
  </div>
