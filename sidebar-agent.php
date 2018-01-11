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
<div class="col-md-4 widget-area mt-5" id="right-sidebar" role="complementary">
	<?php endif; ?>

<h5>Our Agents</h5>

<!-- begin custom related loop, isa -->
 
<?php
$args = array(
  'post_type'   => 'agent',
  'post_status' => 'publish'
 );
 
$testimonials = new WP_Query( $args );
if( $testimonials->have_posts() ) :
?>
  <ul>
    <?php
      while( $testimonials->have_posts() ) :
        $testimonials->the_post();
        ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
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


<hr>
<h5>Search Homes for Sale</h5>

<?php /* Start the Loop */ ?>


</div><!-- #secondary -->

					