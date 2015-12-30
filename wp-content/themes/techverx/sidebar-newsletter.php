<?php
/**
 * The template for the content bottom widget areas on posts and pages
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */


// If we get this far, we have widgets. Let's do this.
?>

<?php if ( is_active_sidebar( 'newsletter' )  ) : ?>
    <?php dynamic_sidebar( 'newsletter' ); ?>
<?php endif; ?>
