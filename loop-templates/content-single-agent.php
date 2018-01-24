<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">


	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
<div class = "card-custom-bio">
	<div class="entry-content">






                            <div class="d-flex align-items-center">
                                            <div class="card-custom-avatar-full mr-3">
                <img src="<?php the_field('agent_picture'); ?>">
              </div>
                          <div class="d-flex flex-column">
                            <div class="pl-1 agent-title"><?php the_title( sprintf( '<h1>', esc_url( get_permalink() ) ),
          '</h1>' ); ?></div>
  <div class="pl-1 font-weight-light"><span class = 'agent text-muted'><?php the_field('agent_position'); ?></span></div>
  <div class="pt-1 pl-1"><h4 class ="text-dark font-weight-light"><?php the_field('agent_tagline'); ?></h4></div>
                  <a class="btn btn-primary agent-contact" data-toggle="modal" data-target="#exampleModal">Contact</a>

        </div>
      </div>
          		<div class="card-body" style="overflow-y: auto">

					<p class="card-text text-muted"><?php the_field('agent_bio'); ?>
					</p>

          <p class="card-text text-muted"><?php the_field('agent_questionnaire'); ?>
          </p>
              </div>

			  

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>


	</div><!-- .entry-content -->
</div>
                <?php understrap_post_nav(); ?>

</article><!-- #post-## -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Connect with an Agent Today</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class = "component-form">
         <?php the_field('agent_contact'); ?>
          </div>
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>