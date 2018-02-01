<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>


<div class = "hero-interior" style="background-image: url(<?php the_field('hero'); ?>);">
	<div class = "header-overlay">
	</div>	
	<div class = "row">
		<div class = "col-sm-12 text-center" style="position: absolute;">
			<div class = "hero-interior-cta-center">
			<?php the_field('hero_cta_interior'); ?>
				<div class="row">
					<div class = "col-sm-12 text-center">
				<a href="#about" class="btn btn-primary btn-lg active header mt-4 js-scroll-trigger" role="button" aria-pressed="true">Learn More</a>
						</button>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>	

<div id = "about" class = "component-red component-background");">
		<div class = "row">
			<div class = "col-md-1">
			</div>
			<div class = "col-md-5 pl-5">
				<h2 class = "header-white"><?php the_field('component_1_heading'); ?>
</h2>
					<h4 class="text-white text-uppercase"><?php the_field('component_1_subhead'); ?>
</h4>
					<h4 class="pt-3 text-white"><?php the_field('component_1_content'); ?>


</h4>					
			</div>
			<div class = "col-md-6 text-center d-flex align-items-center pl-5">
				<img src="<?php the_field('component_1_image'); ?>" alt="<?php echo $image['alt']; ?>" class="communicate-image"/>
			</div>			
		</div>
</div>	
<section class = "component">
	<div class = "container">
		<div class = "row">
			<div class = "col-md-12 text-center">
				<h2 class = "text-center mb-5"><?php the_field('component_2_heading'); ?></h2>
			</div>
		</div>
		<div class = "row">
			<div class = "col-md-3 text-center">
				<i class= "fa fa-percent sr-icons fa-3x"></i>
				<h4 class = "text-dark font-weight-light"><?php the_field('module_1_heading'); ?></h4>
				<p class= "text-dark"><?php the_field('module_1_subhead'); ?></p>
			</div>
			<div class = "col-md-3 text-center">
				<i class= "fa fa-briefcase sr-icons fa-3x"></i>
				<h4 class = "text-dark font-weight-light"><?php the_field('module_2_heading'); ?></h4>
				<p class= "text-dark"><?php the_field('module_2_subhead'); ?></p>				
			</div>
			<div class = "col-md-3 text-center">
				<i class= "fa fa-user sr-icons fa-3x"></i>
				<h4 class = "text-dark font-weight-light"><?php the_field('module_3_heading'); ?></h4>
				<p class= "text-dark"><?php the_field('module_3_subhead'); ?></p>				
			</div>
			<div class = "col-md-3 text-center">
				<i class= "fa fa-handshake-o sr-icons fa-3x"></i>
				<h4 class = "text-dark font-weight-light"><?php the_field('module_4_heading'); ?></h4>
				<p class= "text-dark"><?php the_field('module_4_subhead'); ?></p>					
			</div>

		</div>
	</div>
</section>
<div class = "component-form mt-5">
	<h2 class = "text-center mt-5">Get Started Today</h2>
           <?php the_field('contact_form'); ?>
</div>