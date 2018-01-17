<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<div class="col-lg-6">

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

            <div id="tb-testimonial" class="testimonial testimonial-info-filled">
                <div class="testimonial-section">
                    <h3 class= "text-center"><?php the_field('testimonial_pull_quote'); ?></h3>
                    <?php the_field('testimonial_content'); ?>
                </div>
                <div class="testimonial-desc">
                <img src="<?php the_field('testimonial_picture'); ?>">
                    <div class="testimonial-writer">
                      <div class="testimonial-writer-name"><?php the_field('testimonial_author'); ?></div>
                      <div class="testimonial-writer-designation"><?php the_field('testimonial_city'); ?></div>
                    </div>
                </div>
            </div>   
    </div>
        

</article><!-- #post-## -->

