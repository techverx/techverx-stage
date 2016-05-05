<?php
/*
Template Name: Landing Page Template
*/
// get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Techverx</title>
 <?php wp_head(); ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="shortcut icon" type="image/ico" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico">
<!--<link rel="icon" type="image/png" href="favicon.png">-->
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap-theme.min.css">
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/flexslider.css">
<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/responsive.css">
<!-- 
<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700,400italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Enriqueta:400,700' rel='stylesheet' type='text/css'> -->

</head>
<body class="homepage">

<!-- landing page contents start -->

<h1 class="text-center" style="margin-top: 250px; font-size: 40px; font-weight: 500;
	margin-bottom: 0; padding: 0 15%; 
		text-transform: uppercase;"><?php the_field('heading'); ?></h1>
			<br>
		<p class="text-center" style="color: #2c3e50; font-size: 16px; font-weight: 300;
			margin-top: 20px; padding: 0 18%;"><?php the_field('captions'); ?></p>
			<br>

		<img src="<?php the_field('images'); ?>" style="position: absolute;
    		top: 0; z-index: -1; background-size: cover; width: 100%;" >
			<br>

<div class="btn-all">
 	<center><a class="btn btn-banner" style="padding: 15px; margin-left: 15px; width: 180px; margin-top: 0px;" href="#">Call Now</a>
			<a class="btn btn-banner" style="padding: 15px; margin-left: 15px; width: 180px; margin-top: 0px;" href="#">Get a Free Quote</a>
	</center>
</div>
			<br>


<div class="container" style="margin-top: 280px;">
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
</div>

<!-- landing page contents start -->

<div class="container" >
	<?php echo do_shortcode('[contact-form-7 id="47" title="Contact Main"]'); ?>
</div>

<?php get_footer(); ?>