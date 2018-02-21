<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<div class="wrapper" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row mt-5">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check', 'none' ); ?>

			<main class="site-main" id="main">


				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single' ); ?>


				<?php endwhile; // end of the loop. ?>
		</main>
	</div>

		<!-- Do the right sidebar check -->
		<?php if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>

			<?php get_sidebar( 'right' ); ?>

		<?php endif; ?>


	</div><!-- .row -->


</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
