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


<!-- begin custom related loop, isa -->
 
<?php 
 
// get the custom post type's taxonomy terms
 
$custom_taxterms = wp_get_object_terms( $post->ID, 'locations', array('fields' => 'ids') );
// arguments
$args = array(
'post_type' => 'community',
'post_status' => 'publish',
'posts_per_page' => 35, // you may edit this number
'order' => 'ASC',
'tax_query' => array(
    array(
        'taxonomy' => 'locations',
        'field' => 'id',
        'terms' => $custom_taxterms
    )
),
'post__not_in' => array ($post->ID),
);

?>
<h5 class = "community-transform mt-4"><?php $terms = get_the_terms($post->ID, 'locations');foreach($terms as $term){echo $term->name;} ?>
 Communities</h5>


<?php
$related_items = new WP_Query( $args );
// loop over query
if ($related_items->have_posts()) :
echo '<ul class = "fa-ul">';
while ( $related_items->have_posts() ) : $related_items->the_post();
?>
    <li class ="mt-2"><i class ="fa-li fa fa-angle-double-right"></i><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
<?php
endwhile;
echo '</ul>';
endif;
// Reset Post Data
wp_reset_postdata();
?>
 
 
<!-- end custom related loop, isa -->


<hr>
<h5>Search Homes for Sale</h5>

<?php /* Start the Loop */ ?>


</div><!-- #secondary -->

                    