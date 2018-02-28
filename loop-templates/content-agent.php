<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */
  wp_enqueue_script( 'card', get_template_directory_uri() . '/js/card.js');

?>
<div class = "col-lg-3 sr-icons px-4">

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	    	<div class="agent-module card card-custom bg-white border-white border-0">
          		<div class="card-custom-img">
          			<div class = "tagline text-center text-white pt-4">
                  <div class = "description">
          				  <p><?php the_field('agent_tagline'); ?></p>
                  </div>
          			</div>
          		</div>
          		<div class="card-custom-avatar"><img/>
          		<img src="<?php the_field('agent_picture'); ?>">
          		</div>
          		<div class="card-body" style="overflow-y: auto">
					<?php the_title( sprintf( '<h3 class="card-title">', esc_url( get_permalink() ) ),
					'</h3>' ); ?>
					<div class="card-text text-muted">
             <?php $desc = get_field('agent_bio');?>
             <?php $truncated = substr($desc, 0, 200) . '...'?>
            <?php echo $truncated ?>  <a href= <?php
          the_permalink();
          ?>>Read More</a>
					</div>
          		</div>
          		<div class="card-footer" style="background: inherit; border-color: inherit;">

            		<a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Contact</a>
            		<a href= <?php
					the_permalink();
					?> class="btn btn-outline-primary">Learn More</a>
          		</div>
			  </div>
</article><!-- #post-## -->

</div>

