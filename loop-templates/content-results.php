<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

                <div class = "hero-interior" style="background-image: url(<?php the_field('hero'); ?>);">
                    <div class = "hero-interior-cta">
                        <?php the_field('hero_cta_interior'); ?>
                        
                    </div>
                </div>  

                        <?php the_field('search_results'); ?>
                        

