<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>



<section>
	<div class="content">

		<div class="clear40"></div>

		<div class="container">

			<div class="row">
				<div class="col-md-9">
					<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			endwhile;
?>
				</div>
				  <div class="col-md-3">
          
                 <?php get_sidebar('blog-sidebar'); ?>
                 </div> 
			</div>
		</div>
	</div>
            </section>
<?php get_footer(); ?>
