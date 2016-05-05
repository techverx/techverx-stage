<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
<div class=" php-bg " style="background: url(<?php echo $feat_image ?>)">
    <div class="container">
        <div class="text-center caption"> PHP <br> Test Abdul Basit</div>
    </div>
</div>

<section>
    <div class="content">
    <div class="clear40"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-9 php-page">
                <div class="post-block noborder">
            <div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">
    <?php
    while ( have_posts() ) : the_post();
      // Include the page content template.
      get_template_part( 'template-parts/content', 'page' );
      // If comments are open or we have at least one comment, load up the comment template.
      if ( comments_open() || get_comments_number() ) {
        comments_template();
      }
    endwhile;
    ?>
  </main><!-- .site-main -->
  <?php get_sidebar( 'content-bottom' ); ?>
</div><!-- .content-area -->
                 </div>
                <div class="clear20"></div>
            </div>
            <div class="col-md-3">
                <div class="wgt-box">
                    <h3 class="side-widget-title">Get Free Quote</h3>
                </div>
                <div class="lg-fields2">
                  <?php echo do_shortcode( '[contact-form-7 id="64" title="php quotes"]' ); ?>
                </div>
 <div class="clear20"></div>
                <div class="wgt-box">
                    <h3 class="side-widget-title">Other Useful Resources</h3>
               </div>
               <div class="clear20"></div>
               
              </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
