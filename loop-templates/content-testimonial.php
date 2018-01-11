<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>


<div class="col-sm-6">
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

            <div id="tb-testimonial" class="testimonial testimonial-info-filled">
                <div class="testimonial-section">
                    <?php echo(types_render_field( 'testimonial-content', array() ));?>
                </div>
                <div class="testimonial-desc">
                <?php echo types_render_field( "client-image", array( "alt" => "blue bird", "width" => "300", "height" => "200", "proportional" => "true" ) ) ; ?>
                    <div class="testimonial-writer">
                      <div class="testimonial-writer-name"><?php echo(types_render_field( 'client-name', array() ));?></div>
                      <div class="testimonial-writer-designation"><?php echo(types_render_field( 'client-address', array() ));?></div>
                    </div>
                </div>
            </div>           

</article><!-- #post-## -->
</div>
