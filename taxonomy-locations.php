<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();

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


<div class="wrapper" id="archive-wrapper">
 <article id="cd-google-map">
  <div class = "container">
                <h1 class="page-title mt-5 text-white" style="position:absolute; z-index:5;"><?php the_field('hero_cta_interior', 76); ?></h1>
</div>
  <div id="google-container"></div>
  <div id="cd-zoom-in"></div>
  <div id="cd-zoom-out"></div>
</article>

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

			<main class="site-main" id="main">


<div class="container mt-3">

  
  <div class="row mb-3">
    <div class="col">
      <div class="btn-group">
      	        <a href="/communities" class="btn btn-outline-primary" role="button" aria-pressed="true">All Communities</a>
        <a href="/communities/locations/eastside" class="btn btn-outline-primary" role="button" aria-pressed="true">Eastside</a>
        <a href="/communities/locations/westside" class="btn btn-outline-primary" role="button" aria-pressed="true">Westside</a>

        <a href="/communities/locations/southside" class="btn btn-outline-primary" role="button" aria-pressed="true">Southside</a>
      </div>
    </div>
  </div>

  <div class="row my-shuffle">

					
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




	</div> <!-- .row -->
	  </div>
</div>

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>

    <script src='https://unpkg.com/shufflejs@5'></script>

<script>
  var Count = $(".countPost").val();

Count = parseInt(Count);

console.log(Count);

var newArr = [];
var locations = [];

newArr = new Array(Count).fill([]);

for(var i=0;i<newArr.length;i++){
  console.log([i+1])
  locations.push([i+1]);
}


$('.lon').each(function(index,data) {
   var lon = $(this).val().trim();
   console.log(lon);
    locations[index].unshift(lon);
});

$('.lat').each(function(index,data) {
   var lat = $(this).val().trim();
   console.log(lat);
    locations[index].unshift(lat);
});
  
$('.loc').each(function(index,data) {
   var name = $(this).val();
   console.log(name);
    locations[index].unshift(name);
});

console.log(locations)
  var Shuffle = window.Shuffle;
 
var myShuffle = new Shuffle(document.querySelector('.my-shuffle'), {
  itemSelector: '.image-item',
  sizer: '.my-sizer-element',
  buffer: 1,
});
 
window.jQuery('input[name="shuffle-filter"]').on('change', function (evt) {
  var input = evt.currentTarget;
  if (input.checked) {
    myShuffle.filter(input.value);
  }
});
</script>



