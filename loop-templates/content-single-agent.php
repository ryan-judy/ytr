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

          			<div class = "text-center text-white pt-4">
          				<p><?php echo(types_render_field( 'tagline', array() ));?></p>
          			</div>
          			<?php echo types_render_field( "profile-image", array( "alt" => "blue bird", "width" => "300", "height" => "200", "proportional" => "true" ) ) ; ?>
          		<div class="card-body" style="overflow-y: auto">

					<p class="card-text text-muted"><?php echo(types_render_field( 'bio', array() ));?>
					</p>
          		</div>
          		<div class="card-footer" style="background: inherit; border-color: inherit;">

            		<a class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Contact</a>
            		<a href= <?php
					the_permalink();
					?> class="btn btn-outline-primary">Learn Moree</a>
          		</div>
			  

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>
                <?php understrap_post_nav(); ?>


	</div><!-- .entry-content -->

</article><!-- #post-## -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Get Started Today</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class = "component-form">
                    <?php the_field('agent_contact', 121); ?>
</div>
</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

