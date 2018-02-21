<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */
  wp_enqueue_script( 'chart-2', get_template_directory_uri() . '/js/chart-2.js', array ( 'jquery' ), 1.1, true);

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>


<div class = "hero-interior" style="background-image: url(<?php the_field('hero'); ?>);">
	<div class = "header-overlay">
	</div>	
	<div class = "row">
		<div class = "col-sm-12 text-center">
			<div class = "hero-interior-cta-center">
			<?php the_field('hero_cta_interior'); ?>
				<div class="row">
					<div class = "col-sm-12 text-center">
				<a href="#apply" class="btn btn-primary btn-lg active header mt-4 js-scroll-trigger" role="button" aria-pressed="true">Apply Now</a>
						</button>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>	
<div id = "about" class = "component-red component-background");">
	<div class = "container">
		<div class = "row text-center">
			<div class = "col-lg-12">
				<h2 class = "header-white"><?php the_field('component_1_heading'); ?>
</h2>
					<h4 class="text-white text-uppercase"><?php the_field('component_1_subhead'); ?>
</h4>
					<h4 class="pt-3 text-white"><?php the_field('component_1_content'); ?>


</h4>					
			</div>
		
		</div>
	</div>
</div>	
<section class = "component">
	<div class = "container">
				<div class = "row">
			<div class = "col-lg-6">
				<h2 class = "header-dark"><?php the_field('component_2_heading'); ?>
</h2>
					<h4 class="text-dark text-uppercase"><?php the_field('component_2_subhead'); ?>
</h4>
					<h4 class="pt-3 text-dark"><?php the_field('component_2_content'); ?>


</h4>					
			</div>
			<div class = "col-lg-6 text-center d-flex align-items-center pl-5 pt-3">
				<canvas id="bar-chart" width="800" height="450"></canvas>
			</div>			
		</div>
	</div>
</section>
<div class = "container">
<div id = "apply" class = "component-form mt-5">
	<h2 class = "text-center mt-5"><?php the_field('contact_header'); ?></h2>
	<p class = "text-muted text-center pt-3"><?php the_field('contact_subhead'); ?></p>
           <?php the_field('contact_form'); ?>
</div>
</div>