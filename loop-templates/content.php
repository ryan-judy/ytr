
<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */
  wp_enqueue_script( 'card', get_template_directory_uri() . '/js/card.js');

?>


<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

<div class="row">
          <div class="post-module my-3"> 
            <!-- Thumbnail-->
            <div class="thumbnail">
              <div class="date"> <a href="#0">
                <div class="day"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                </a> </div>
              <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/photo-1429043794791-eb8f26f44081.jpeg" class="img-responsive" alt=""> </div>
            <!-- Post Content-->
            <div class="post-content">
              <div class="category">Categories</div>
              <h1 class="title"><?php the_title()?></h1>
              <h2 class="sub_title">Author</h2>
              <p class="description">New York, the largest city in the U.S., is an architectural marvel with plenty of historic monuments, magnificent buildings and countless dazzling skyscrapers.</p>
              <div class="post-meta"><span class="timestamp"><i class="fa fa-clock-">o</i> 6 mins ago</span><span class="comments"><i class="fa fa-comments"></i><a href="#"> 39 comments</span><span class="timestamp ml-2"><i class="fa fa-arrow-right"></i> Read More</span></div>
            </div>
          </div>
        </div>
</article><!-- #post-## -->
