<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>

<div class = "hero-interior listings" style="background-image: url(<?php the_field('hero'); ?>);">
	<div class = "header-overlay">
	</div>	
	<div class = "row">
		<div class = "col-sm-12 text-center" style="position: absolute;">
			<div class = "hero-interior-cta-center">
			<?php the_title( '<h1 class="entry-title text-uppercase">', '</h1>' ); ?>
				<div class="row">
					<div class = "col-sm-12 text-center">
						<button class="btn btn-primary btn-lg active header mt-5">Learn more
						</button>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>	
<div class="wrapper" id="single-wrapper">
			<!-- Do the left sidebar check -->

			<main class="site-main" id="main">

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class = "container mt-4">
		<div class = "row">
			<div class = "col-md-12">

				<header class="entry-header">

					<h3 class = "header-dark text-center">Tagline</h3>

				</header><!-- .entry-header -->

				<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

				<div class="entry-content mt-5">
					<div class = "row text-center">
						<div class = "col-md-2">
							PRICE
						</div>
						<div class = "col-md-2">
							BEDS
						</div>
						<div class = "col-md-2">
							BATHS
						</div>
						<div class = "col-md-2">
							SQ FT
						</div>
						<div class = "col-md-2">
							ACRES
						</div>
						<div class = "col-md-2">
							YBT
						</div>
					</div>

					<div class="row">
        <div class="col-lg-12 offset-lg-2" id="slider">
                <div id="myCarousel" class="carousel slide">
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                        <div class="active item carousel-item" data-slide-number="0">
                            <img src="http://placehold.it/1200x480&amp;text=one" class="img-fluid">
                        </div>
                        <div class="item carousel-item" data-slide-number="1">
                            <img src="http://placehold.it/1200x480/888/FFF" class="img-fluid">
                        </div>
                        <div class="item carousel-item" data-slide-number="2">
                            <img src="http://placehold.it/1200x480&amp;text=three" class="img-fluid">
                        </div>
                        <div class="item carousel-item" data-slide-number="3">
                            <img src="http://placehold.it/1200x480&amp;text=four" class="img-fluid">
                        </div>
                        <div class="item carousel-item" data-slide-number="4">
                            <img src="http://placehold.it/1200x480&amp;text=five" class="img-fluid">
                        </div>
                        <div class="item carousel-item" data-slide-number="5">
                            <img src="http://placehold.it/1200x480&amp;text=six" class="img-fluid">
                        </div>
                        <div class="item carousel-item" data-slide-number="6">
                            <img src="http://placehold.it/1200x480&amp;text=seven" class="img-fluid">
                        </div>
                        <div class="item carousel-item" data-slide-number="7">
                            <img src="http://placehold.it/1200x480&amp;text=eight" class="img-fluid">
                        </div>
                        <div class="item carousel-item" data-slide-number="8">
                            <img src="http://placehold.it/1200x480&amp;text=nine" class="img-fluid">
                        </div>
                        <div class="item carousel-item" data-slide-number="9">
                            <img src="http://placehold.it/1200x480&amp;text=ten" class="img-fluid">
                        </div>


                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
 						   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
 						   <span class="sr-only">Previous</span>
 						</a>
 						<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
 						   <span class="carousel-control-next-icon" aria-hidden="true"></span>
 						   <span class="sr-only">Next</span>
 						</a>	
						
                    </div>
                    <!-- main slider carousel nav controls -->

			<div id="myCarousel2" class="carousel slide">
                
                <!-- Carousel items -->
                <div class="carousel-inner">
                   <div class="carousel-item active">
                    <ul class="carousel-indicators list-inline mt-3">
                        <li class="list-inline-item">
                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                                <img src="http://placehold.it/220x160&amp;text=one" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                                <img src="http://placehold.it/220x160&amp;text=two" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-2" data-slide-to="2" data-target="#myCarousel">
                                <img src="http://placehold.it/220x160&amp;text=three" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel">
                                <img src="http://placehold.it/220x160&amp;text=four" class="img-fluid">
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel">
                                <img src="http://placehold.it/220x160&amp;text=five" class="img-fluid">
                            </a>
                        </li>
                    </ul>
                   </div>    
				<div class="carousel-item">
					 <ul class="carousel-indicators list-inline mt-3">
                        <li class="list-inline-item">
                            <a id="carousel-selector-5" data-slide-to="5" data-target="#myCarousel">
                                <img src="http://placehold.it/220x160&amp;text=six" class="img-fluid">
                            </a>
                        </li>
                                                <li class="list-inline-item">
                            <a id="carousel-selector-6" data-slide-to="6" data-target="#myCarousel">
                                <img src="http://placehold.it/220x160&amp;text=seven" class="img-fluid">
                            </a>
                        </li>
                                                <li class="list-inline-item">
                            <a id="carousel-selector-7" data-slide-to="7" data-target="#myCarousel">
                                <img src="http://placehold.it/220x160&amp;text=eight" class="img-fluid">
                            </a>
                        </li>
                                                <li class="list-inline-item">
                            <a id="carousel-selector-8" data-slide-to="8" data-target="#myCarousel">
                                <img src="http://placehold.it/220x160&amp;text=nine" class="img-fluid">
                            </a>
                        </li>
                                                <li class="list-inline-item">
                            <a id="carousel-selector-9" data-slide-to="9" data-target="#myCarousel">
                                <img src="http://placehold.it/220x160&amp;text=ten" class="img-fluid">
                            </a>
                        </li>
                     </ul>
            	</div>
                        <a class="carousel-control-prev" href="#myCarousel2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>


    </div>

</div>
</div>
</div>
<div class = "row text-center">
	<div class = "col-md-6">
	matterport
	</div>
	<div class = "col-md-6">
		video
	</div>
					<?php the_content(); ?>
	

						<?php
						wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
						'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
			</div>
		</div>
	</div>
</article><!-- #post-## -->



</div><!-- Container end -->
