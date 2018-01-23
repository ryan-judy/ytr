
<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */
  wp_enqueue_script( 'card', get_template_directory_uri() . '/js/card.js');

?>

<?php

$cats = get_the_terms( $post->ID, 'category' );

if ( $cats && ! is_wp_error( $cats ) ) :

   $actors = array();

   foreach ( $cats as $cat ) {
      $actors[] = $cat->name;
   }

   $actors = join( ", ", $actors );

   ?>

   
   
<?php endif; ?>
<?php
$thumb_id = get_post_thumbnail_id();
$thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true);

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<div class="row px-2">
          <div class="post-module my-3"> 
            <!-- Thumbnail-->
            <div class="thumbnail">
              <div class="date"> <a href=<?php the_permalink();?>>
                <div class="day"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                </a> </div>
              <a href= <?php the_permalink();?>><img src=<?php echo $thumb_url[0]; ?> class="img-responsive" alt=""></a></div>
            <!-- Post Content-->
            <div class="post-content">
              <div class="category"><?php echo $actors; ?></div>
              <h1 class="title"><?php the_title()?></h1>
              <h2 class="sub_title"> <?php the_author(); ?> </h2>
              <div class="description">
                           <?php $desc = the_excerpt();?>
              </div>
              <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-"></i><?php the_date();?></span><span class="comments"><i class="fa fa-comments"></i><a href=<?php the_permalink();?>><?php comments_number();?></span><span class="timestamp ml-2"><i class="fa fa-arrow-right"></i>Read More</a></span></div>
            </div>
          </div>
        </div>
</article><!-- #post-## -->
