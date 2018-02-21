<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */
  wp_enqueue_script( 'google-maps', get_template_directory_uri() . '/js/google-maps.js', array ( 'jquery' ), 1.1, true);

get_header();
?>
<?php 

$countPosts = $wp_the_query->post_count;


?>

<input class = countPost value=<?php echo $countPosts ?> type="hidden">


<?php
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

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


				<?php if ( have_posts() ) : ?>


<div class="container my-4">

          <?php /* Start the Loop */ ?>
          <?php while ( have_posts() ) : the_post(); ?>

            <?php

            /*
             * Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'loop-templates/content', 'location' );
            ?>

          <?php endwhile; ?>

  <div class="row">
  </div>
  <div class="row mb-3">
    <div class="col">
      <div class="btn-group" data-toggle="buttons">
        <label class="btn btn-outline-primary active">
          <input type="radio" name="shuffle-filter" value="all" checked="checked"/>All
        </label>
        <label class="btn btn-outline-primary">
          <input type="radio" name="shuffle-filter" value="eastside"/>Eastside
        </label>
        <label class="btn btn-outline-primary">
          <input type="radio" name="shuffle-filter" value="westside"/>Westside
        </label>
        <label class="btn btn-outline-primary">
          <input type="radio" name="shuffle-filter" value="southside"/>Southside
        </label>
      </div>
    </div>
  </div>
  <div class="row my-shuffle">

    <div class="col-md-1 my-sizer-element"></div>

					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', 'community' );
						?>

					<?php endwhile; ?>
				</div>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		<?php if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>


		<?php endif; ?>

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

