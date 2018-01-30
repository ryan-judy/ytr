<?php
/**
 * The right sidebar containing the main widget area.
 *
 * @package understrap
 */
  wp_enqueue_script( 'search', get_template_directory_uri() . '/js/search.js', array ( 'jquery' ), 1.1, true);

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

 <div class = "select-drops scrollable-menu">

			          <select ng-model='minPriceSelect' class='min-price'>
            <option value='total'>Min Price</option>
            <option value='50000'>$50,000</option>
            <option value='75000'>$75,000</option>
            <option value='100000'>$100,000</option>
            <option value='125000'>$125,000</option>
            <option value='150000'>$150,000</option>
            <option value='175000'>$175,000</option>
            <option value='200000'>$200,000</option>
            <option value='225000'>$225,000</option>
            <option value='250000'>$250,000</option>
            <option value='275000'>$275,000</option>
            <option value='300000'>$300,000</option>
            <option value='325000'>$325,000</option>
            <option value='350000'>$350,000</option>
            <option value='375000'>$375,000</option>
            <option value='400000'>$400,000</option>
            <option value='425000'>$425,000</option>
            <option value='450000'>$450,000</option>
            <option value='475000'>$475,000</option>
            <option value='500000'>$500,000</option>
            <option value='550000'>$550,000</option>
            <option value='600000'>$600,000</option>
            <option value='650000'>$650,000</option>
            <option value='700000'>$700,000</option>
            <option value='750000'>$750,000</option>
            <option value='800000'>$800,000</option>
            <option value='850000'>$850,000</option>
            <option value='90000'>$900,000</option>
            <option value='950000'>$950,000</option> 
            <option value='1000000'>$1+</option>            
            <option value='2000000'>$2+</option>            
            <option value='3000000'>$3+</option>            
          </select>		  							
          <select ng-model='maxPriceSelect' class='form-control max-price'>
            <option value='total'>Max Price</option>
            <option value='50000'>$50,000</option>
            <option value='75000'>$75,000</option>
            <option value='100000'>$100,000</option>
            <option value='125000'>$125,000</option>
            <option value='150000'>$150,000</option>
            <option value='175000'>$175,000</option>
            <option value='200000'>$200,000</option>
            <option value='225000'>$225,000</option>
            <option value='250000'>$250,000</option>
            <option value='275000'>$275,000</option>
            <option value='300000'>$300,000</option>
            <option value='325000'>$325,000</option>
            <option value='350000'>$350,000</option>
            <option value='375000'>$375,000</option>
            <option value='400000'>$400,000</option>
            <option value='425000'>$425,000</option>
            <option value='450000'>$450,000</option>
            <option value='475000'>$475,000</option>
            <option value='500000'>$500,000</option>
            <option value='550000'>$550,000</option>
            <option value='600000'>$600,000</option>
            <option value='650000'>$650,000</option>
            <option value='700000'>$700,000</option>
            <option value='750000'>$750,000</option>
            <option value='800000'>$800,000</option>
            <option value='850000'>$850,000</option>
            <option value='90000'>$900,000</option>
            <option value='950000'>$950,000</option> 
            <option value='1000000'>$1+</option>            
            <option value='2000000'>$2+</option>            
            <option value='3000000'>$3+</option>            
          </select>
          <select ng-model='bedsSelect' class='form-control beds'>
            <option value='total'>Beds</option>
            <option value='1'>1+</option>
            <option value='2'>2+</option>
            <option value='3'>3+</option>
            <option value='4'>4+</option>
            <option value='5'>5+</option>
            <option value='6'>6+</option>
          </select>
          <select ng-model='bathsSelect' class='form-control baths'>
            <option value='total'>Baths</option>
            <option value='1'>1+</option>
            <option value='1.5'>1.5+</option>
            <option value='2'>2+</option>
            <option value='2.5'>2.5+</option>
            <option value='3'>3+</option>
            <option value='3.5'>3.5+</option>
            <option value='4'>4+</option>
            <option value='4.5'>4.5+</option>
            <option value='5'>5+</option>            
          </select>
      </div>
           <button class="btn btn-primary btn-md btn-search mb-5" type="submit" style="outline: none; cursor: inherit;" data-selector="a.btn, button.btn, button">Search</button>

</div><!-- #secondary -->

                    