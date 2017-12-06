<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">

			    	<div class="card card-custom bg-white border-white border-0">
          		<div class="card-custom-img">
          			<div class = "text-center text-white pt-4">
          				<p><?php echo(types_render_field( 'tagline', array() ));?></p>
          			</div>
          		</div>
          		<div class="card-custom-avatar"><img/>
          			<?php echo types_render_field( "profile-image", array( "alt" => "blue bird", "width" => "300", "height" => "200", "proportional" => "true" ) ) ; ?>
          		</div>
          		<div class="card-body" style="overflow-y: auto">
					<?php the_title( sprintf( '<h4 class="card-title">', esc_url( get_permalink() ) ),
					'</h4>' ); ?>
					<p class="card-text text-muted"><?php echo(types_render_field( 'bio', array() ));?>
					</p>
          		</div>
          		<div class="card-footer" style="background: inherit; border-color: inherit;">

            		<a href="" class="btn btn-primary">Contact</a>
            		<a href= <?php
					the_permalink();
					?> class="btn btn-outline-primary">Learn More</a>
          		</div>
			  </div>

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
