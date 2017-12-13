<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

				<header class="entry-header">

					<?php the_title( '<h1 class="entry-title text-uppercase">', '</h1>' ); ?>
					<h3 class = "header-dark text-muted">The place to be yo</h3>

				</header><!-- .entry-header -->

				<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

				<div class="entry-content mt-5">


					<?php the_content(); ?>
					<nav class="nav nav-tabs" id="myTab" role="tablist">
  <a class="nav-item active text-dark" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
  <a class="nav-item text-dark" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
  <a class="nav-item text-dark" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">Keffiyeh try-hard put a bird on it seitan, whatever fashion axe pinterest aesthetic prism. Gluten-free migas brunch meh PBR&B etsy forage YOLO hoodie. Williamsburg PBR&B enamel pin bespoke, poke jean shorts mlkshk gastropub af try-hard vaporware lo-fi whatever. Deep v man bun 3 wolf moon mustache forage franzen trust fund raw denim 8-bit messenger bag bushwick tousled semiotics. XOXO YOLO knausgaard butcher.

</div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">Forage retro cardigan, blog man braid offal polaroid. Snackwave williamsburg art party cloud bread farm-to-table chambray. Polaroid migas ramps, tbh occupy hella paleo messenger bag. Tattooed beard church-key squid taiyaki.

</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">Cray cold-pressed meditation enamel pin live-edge tousled narwhal, yr four dollar toast VHS snackwave air plant. DIY meh ethical gastropub, trust fund four loko viral fanny pack meggings shabby chic lomo gluten-free drinking vinegar vape normcore. Bicycle rights forage tattooed skateboard. Single-origin coffee gochujang selfies dreamcatcher ennui intelligentsia pickled fanny pack tattooed hella wolf man braid. Venmo kogi pickled, brooklyn tumeric single-origin coffee listicle fam scenester. Hot chicken synth jean shorts four loko. Truffaut organic chambray taiyaki cray disrupt synth snackwave cold-pressed beard.

</div>
</div>

						<?php
						wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
						'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->

</article><!-- #post-## -->
