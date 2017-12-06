<?php
/**
 * Template Name: Blank Page Template
 *
 * Template for displaying a blank page.
 *
 * @package understrap
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title"
		content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  	<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
  	<script src="wp-content/themes/understrap/js/header.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> style="background-image:url(http:<?php the_field('hero_banner_image'); ?>);" alt="young team realtors homepage">
	<?php get_template_part( 'loop-templates/content', 'blank' ); ?>

<?php get_footer(); ?>
</body>
</html>
