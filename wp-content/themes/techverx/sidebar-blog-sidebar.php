<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'blog-sidebar' )  ) : ?>
    <?php dynamic_sidebar( 'blog-sidebar' ); ?>
<?php endif; ?>


<div class="wgt-box">
    <h3 class="side-widget-title">Follow Us</h3>
    <div>
        <a href="https://www.facebook.com/TechVerx" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/blog/blog-fb.jpg"></a> 
        <a href="https://twitter.com/TechVerx" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/blog/blog-twit.jpg"></a> 
        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/blog/blog-goog.jpg"></a> 
    </div>
</div>
