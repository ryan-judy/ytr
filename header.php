<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
	<?php 
  wp_enqueue_script( 'nav', get_template_directory_uri() . '/js/nav.js', array ( 'jquery' ), 1.1, true);
  wp_head(); ?>
</head>

<body <?php body_class(); ?> style="background-image:url(http:<?php the_field('hero_banner_image'); ?>);" alt="young team realtors homepage">

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">
    <div class="d-flex justify-content-between header-home pt-1">
        <div class="pt-2 header-number"><i class = "fa fa-phone"></i> 216-378-9618</div>
   <ul class="nav icon-wrapper">
                    <li class="nav-item"><a href="https://www.facebook.com/youngteamsells" class="nav-link"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li class="nav-item"><a href="https://twitter.com/YoungTeamSells/" class="nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li class="nav-item"><a href="https://www.youtube.com/channel/UCJGFnReXndjiS5LVXzM8YAw" class="nav-link"><i class="fa fa-youtube fa-lg"></i></a></li>
                    <li class="nav-item"><a href="https://www.instagram.com/youngteamrealtors/" class="nav-link"><i class="fa fa-instagram fa-lg"></i></a></li>
    </ul>
    </div>
		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>

	<nav class="navbar navbar-interior navbar-expand-lg" id="menu">
            <!-- Your site title as branding in the menu -->
          <?php if ( ! has_custom_logo() ) { ?>

            <?php if ( is_front_page() && is_home() ) : ?>

              <h1 class="navbar-brand"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
              
            <?php else : ?>

              <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
            
            <?php endif; ?>
            
          
          <?php } else {

$id = '3'; //(string) (required) Menu 'id','name' or 'slug'
$menu = wp_get_nav_menu_object( $id );
$logo = get_field('secondary_logo', $menu);


          } ?>
          <a href="/" class="navbar-brand custom-logo-link" rel="home" itemprop="url"><img width="1728" height="630" src="<?php echo $logo['url'];?>" class="navbar-brand" alt="Young Team Realtors" itemprop="logo" srcset="<?php echo $logo['url'];?> 1728w, <?php echo $logo['url'];?> 300w, <?php echo $logo['url'];?> 768w, <?php echo $logo['url'];?> 1024w" sizes="(max-width: 1728px) 100vw, 1728px"></a>
          <?php the_custom_logo(); ?>




  <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target=".collapse" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse collapse">

  </div>
        <!-- The WordPress Menu goes here -->
          <?php wp_nav_menu(
          array(
            'theme_location'  => 'primary',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'navbarNavDropdown',
            'menu_class'      => 'navbar-nav',
            'fallback_cb'     => '',
            'menu_id'         => 'main-menu',
            'walker'          => new WP_Bootstrap_Navwalker(),
          )
        ); ?>
</nav>

	</div><!-- .wrapper-navbar end -->
