<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */
  wp_enqueue_script( 'google-maps-ind', get_template_directory_uri() . '/js/google-maps-ind.js', array ( 'jquery' ), 1.1, true);


get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

<?php 

$countPosts = $wp_the_query->post_count;


?>

<input class = countPost value=<?php echo $countPosts ?> type="hidden">

 <article id="cd-google-map">

  <div class = "container">
                <h1 class="page-title mt-5 text-dark" style="position:absolute; z-index:5;"><?php the_field('header'); ?></h1>
</div>
  <div id="google-container"></div>
  <div id="cd-zoom-in"></div>
  <div id="cd-zoom-out"></div>
</article>

<div class="wrapper mt-4" id="single-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check', 'none' ); ?>

			<main class="site-main" id="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single-community' ); ?>


				<?php endwhile; // end of the loop. ?>


			</main><!-- #main -->

		</div><!-- #primary -->

						<!-- Do the right sidebar check -->

	<?php if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>

			<?php get_sidebar( 'community' ); ?>

		<?php endif; ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

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

</script>

