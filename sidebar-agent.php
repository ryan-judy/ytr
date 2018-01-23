<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package understrap
 */

if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}

// when both sidebars turned on reduce col size to 3 from 4.
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<?php if ( 'both' === $sidebar_pos ) : ?>
<div class="col-md-3 widget-area" id="right-sidebar" role="complementary">
	<?php else : ?>
<div class="col-md-4 widget-area" id="right-sidebar" role="complementary">
	<?php endif; ?>

<h5>Meet Our Team</h5>
<hr>

<!-- begin custom related loop, isa -->
 
<?php
$args = array(
  'post_type'   => 'agent',
  'post_status' => 'publish',
  'posts_per_page' => '25'
 );
 
$testimonials = new WP_Query( $args );
if( $testimonials->have_posts() ) :
?>
  <ul class = "fa-ul">
    <?php
      while( $testimonials->have_posts() ) :
        $testimonials->the_post();
        ?>
    <li class = "mt-2"><li class ="mt-2"><i class ="fa-li fa fa-angle-double-right"></i><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php
      endwhile;
      wp_reset_postdata();
    ?>
  </ul>
<?php
else :
  esc_html_e( 'No testimonials in the diving taxonomy!', 'text-domain' );
endif;
?>
 
 
<!-- end custom related loop, isa -->



<?php /* Start the Loop */ ?>


</div><!-- #secondary -->

					