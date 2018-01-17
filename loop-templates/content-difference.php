<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
				<div class = "hero-interior" style="background-image: url(<?php the_field('hero'); ?>);">
					<div class = "hero-interior-cta">
						<?php the_field('hero_cta_interior'); ?>
						
					</div>
				</div>	
				<div class = "component-red component-background");">
		<div class = "row">
			<div class = "col-md-1">
			</div>
			<div class = "col-md-5 pl-5">
				<h2 class = "header-white"><?php the_field('team_header'); ?>

</h2>
					<h4 class="pt-3 text-white"><?php the_field('team_content'); ?>

</h4>					
				<a href="<?php the_field('team_button_page'); ?>" class="btn btn-secondary btn-lg active header mt-4" role="button" aria-pressed="true"><?php the_field('team_button_cta'); ?></a>
			</div>
			<div class = "col-md-6 text-center d-flex align-items-center">
				<img src="<?php the_field('search_homes'); ?>" alt="<?php echo $image['alt']; ?>" />
			</div>			
		</div>
</div>	
<div class = "component component-background" style="background-image: url(<?php the_field('component-background'); ?>);">
		<div class = "row text-center">
			<div class = "col-md-12">
											<h2 class = "header-dark"><?php the_field('Comparison Header'); ?>
</h2>
</div>
		</div>
		<div class = "container">
		<div class = "row">

			<div class = "col-md-6">

					<h4 class="pt-3 text-dark"><?php the_field('left_header'); ?></h4>
					<h4 class="pt-3 text-dark"><?php the_field('left_content'); ?>

</h4>					
			</div>
			<div class = "col-md-6">
													<h4 class="pt-3 text-dark"><?php the_field('right_header'); ?></h4>

<h4 class="pt-3 text-dark"><h4 class="pt-3 text-dark"><?php the_field('right_content'); ?>

</h4>								</div>			
		</div>
	</div>
		<div class = "row">
	<div class = "col-md-12 text-center">
				<a href="<?php the_field('team_button_page'); ?>" class="btn btn-secondary btn-lg active header mt-4" role="button" aria-pressed="true"><?php the_field('comparison_button'); ?></a>
	</div>
</div>
</div>	
<div class = "component-red component-background" style="background-image: url(<?php the_field('component-background'); ?>);">
		<div class = "row">
			<div class = "col-md-6">
				<img src="<?php the_field('agent_picture'); ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
			<div class = "col-md-5 text-right pr-5">
				<h2 class = "header-white"><h4 class="pt-3 text-dark"><?php the_field('communication_header'); ?></h2>

				<h4 class="pt-3 text-white"><?php the_field('communication_content'); ?></h4>		
				<a href="<?php the_field('team_button_page'); ?>" class="btn btn-secondary btn-lg active header mt-4" role="button" aria-pressed="true">go to me</a>
			</div>	
			<div class = "col-md-1">
			</div>		
		</div>
</div>	
<div class = "component-form">
	<h1 class = "text-center">Get Started Today</h1>
          	<?php the_field('difference_contact'); ?>

</div>

