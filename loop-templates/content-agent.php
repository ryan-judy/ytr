<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>
<div class = "col-md-3">

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	    	<div class="card card-custom bg-white border-white border-0">
          		<div class="card-custom-img">
          			<div class = "text-center text-white pt-4">
          				<p><?php the_field('agent_tagline'); ?></p>
          			</div>
          		</div>
          		<div class="card-custom-avatar"><img/>
          		<img src="<?php the_field('agent_picture'); ?>">
          		</div>
          		<div class="card-body" style="overflow-y: auto">
					<?php the_title( sprintf( '<h4 class="card-title">', esc_url( get_permalink() ) ),
					'</h4>' ); ?>
					<p class="card-text text-muted"><?php the_field('agent_bio'); ?>
					</p>
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

