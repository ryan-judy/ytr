<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */


?>

<?php

$terms = get_the_terms( $post->ID, 'locations' );

if ( $terms && ! is_wp_error( $terms ) ) :

   $actors = array();

   foreach ( $terms as $term ) {
      $actors[] = $term->name;
   }

   $actors = join( ", ", $actors );

   ?>

   
   
<?php endif; ?>


       <figure class="image-item col-3" data-groups="[&quot;<?php echo $actors; ?>&quot;]">
  <a class="portfolio-box" href=<?php the_permalink(); ?>>
          <div class="aspect aspect--16x9">

        <div class="aspect__inner">
          <img src="https://images.unsplash.com/photo-1430026996702-608b84ce9281?ixlib=rb-0.3.5&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=600&amp;h=338&amp;fit=crop&amp;s=363a88755a7b87635641969a8d66f7aa" obj.alt="obj.alt"/></div>
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    <?php the_title()?>
                  </div>
                </div>
              </div>
                    </div>

            </a>



    </figure>

