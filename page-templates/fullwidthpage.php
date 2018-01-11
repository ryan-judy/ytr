<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">

		<div class="row">

			<div class="col-md-12 content-area" id="primary">


				<main class="site-main" id="main" role="main">

					<?php 
					if ( is_page('young-team-difference') ) {
					  get_template_part( 'loop-templates/content', 'difference' );
					} else {
					  get_template_part( 'loop-templates/content', 'page' );
					}

					?>

					<?php 
					if ( is_page('about') ) {
					  get_template_part( 'loop-templates/content', 'about' );
					} else {
					  get_template_part( 'loop-templates/content', 'page' );
					}

					?>

					<?php 
					if ( is_page('agents') ) {
					  get_template_part( 'loop-templates/content', 'agents' );
					} else {
					  get_template_part( 'loop-templates/content', 'page' );
					}

					?>

					<?php 
					if ( is_page('search-results') ) {
					  get_template_part( 'loop-templates/content', 'results' );
					} else {
					  get_template_part( 'loop-templates/content', 'page' );
					}

					?>

					<?php 
					if ( is_page('selling-your-home') ) {
					  get_template_part( 'loop-templates/content', 'sellers' );
					} else {
					  get_template_part( 'loop-templates/content', 'page' );
					}

					?>

					<?php 
					if ( is_page('buyers') ) {
					  get_template_part( 'loop-templates/content', 'buyers' );
					} else {
					  get_template_part( 'loop-templates/content', 'page' );
					}

					?>


					<?php 
					if ( is_page('contact') ) {
					  get_template_part( 'loop-templates/content', 'contact' );
					} else {
					  get_template_part( 'loop-templates/content', 'page' );
					}

					?>

					<?php 
					if ( is_page('marketing-plan') ) {
					  get_template_part( 'loop-templates/content', 'marketing' );
					} else {
					  get_template_part( 'loop-templates/content', 'page' );
					}

					?>
					<?php 
					if ( is_page('guaranteed-sold') ) {
					  get_template_part( 'loop-templates/content', 'guaranteed-sold' );
					} else {
					  get_template_part( 'loop-templates/content', 'page' );
					}

					?>
					<?php 
					if ( is_page('love-it-or-leave-it-program') ) {
					  get_template_part( 'loop-templates/content', 'love-leave' );
					} else {
					  get_template_part( 'loop-templates/content', 'page' );
					}

					?>					

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>

