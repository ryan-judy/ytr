<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();
?>

<?php
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<div class="wrapper" id="archive-wrapper">
					<div class = "hero-interior" style="background-image: url(<?php the_field('hero'); ?>);">
                    <div class = "hero-interior-cta">
                        <?php the_field('hero_cta_interior'); ?>
                        
                    </div>
                </div>  
<section class = "component">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">


			<!-- Do the left sidebar check -->


				<?php if ( have_posts() ) : ?>

					<div class = "row text-center">
						<div class = "col-md-12">
						<h1 class = "mb-5">What Our Clients Have to Say</h1>
					</div>
					</div>
					<div class = "row">

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', 'testimonial' );
						?>

					<?php endwhile; ?>
				</div>
</section>
				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

		<!-- Do the right sidebar check -->


</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
