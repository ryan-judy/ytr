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

            		<a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Contact</a>
            		<a href= <?php
					the_permalink();
					?> class="btn btn-outline-primary">Learn More</a>
          		</div>
			  </div>

</article><!-- #post-## -->

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>
  $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>