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
