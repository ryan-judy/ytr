<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>



				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single-featured-listing' ); ?>

   					<a href="<?php echo get_post_type_archive_link( 'featured-listing' ); ?>">Go Back</a>

				<?php endwhile; // end of the loop. ?>




<?php get_footer(); ?>


<script>
	$('#recipeCarousel').carousel({
  interval: false
})

$('.carousel .carousel-item').each(function(){
    var next = $(this).next();
    
    if (!next.length) {
      next = $(this).siblings(':first');
    }
  
    next.children(':first-child').clone().appendTo($(this));
  
    if (next.next().length>0) {
      next.next().children(':first-child').clone().appendTo($(this));
    }
    else {
      $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
    }
    
    next.next().next().children(':first-child').clone().appendTo($(this));
    
    if (next.next().next().length>0) {
      next.next().next().children(':first-child').clone().appendTo($(this));
    }
    else {
       $(this).siblings(':first').next().children(':first-child').clone().appendTo($(this));
    }
    
});
</script>