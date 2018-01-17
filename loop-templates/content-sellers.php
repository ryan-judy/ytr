<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */
  wp_enqueue_script( 'chart', get_template_directory_uri() . '/js/chart.js', array ( 'jquery' ), 1.1, true);

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>


<div class = "hero-interior" style="background-image: url(<?php the_field('hero'); ?>);">
	<div class = "header-overlay">
	</div>	
	<div class = "row">
		<div class = "col-sm-12 text-center" style="position: absolute;">
			<div class = "hero-interior-cta-center">
			<?php the_field('hero_cta_interior'); ?>
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


<section class = "component">
	<div class="container">
		<div class = "row no-gutter">
			<div class = "col-md-12 text-center">
				<h2 class = "header-dark"><?php the_field('seller_stats_header'); ?></h2>
			</div>
		</div>
		<div class = "row mt-4">
			<div class = "col-md-6">
				<canvas id="bar-chart" width="800" height="450"></canvas>
			</div>
			<div class = "col-md-6">
				<canvas id="bar-chart-horizontal" width="800" height="450"></canvas>
			</div>
		</div>	  	  
	</div>
</section>

<div class = "component-red component-background" style="background-image: url(<?php the_field('component-background'); ?>);">
	<div class="container">
		<div class = "row">
			<div class = "col-md-6">
				<h2 class = "header-white text-center"><?php the_field('gsp_header'); ?></h2>
				<div class="d-flex align-items-center"><i class = "fa <?php the_field('gsp_subhead_1_icon'); ?> fa-inverse fa-3x pr-3"></i>
					<h4 class="pt-3 text-white"><?php the_field('gsp_subhead_1'); ?></h4>
				</div>
				<div class="d-flex align-items-center"><i class = "fa <?php the_field('gsp_subhead_2_icon'); ?> fa-inverse fa-3x pr-3"></i>
					<h4 class="pt-3 text-white"><?php the_field('gsp_subhead_2'); ?></h4>
				</div>
				<div class="d-flex align-items-center"><i class = "fa <?php the_field('gsp_subhead_3_icon'); ?> fa-inverse fa-3x pr-3"></i>
					<h4 class="pt-3 text-white"><?php the_field('gsp_subhead_3'); ?></h4>
				</div>				
				<a href="<?php the_field('team_button_page'); ?>" class="btn btn-secondary btn-lg active header mt-4 ml-5" role="button" aria-pressed="true"><?php the_field('gsp_button'); ?></a>
			</div>
			<div class = "col-md-6 text-center">
			</div>			
		</div>
	</div>
</div>	
<section class = "component">
	<div class="container">
		<div class = "row no-gutter">
			<div class = "col-md-12 text-center">
				<h2 class = "header-dark pb-2"><?php the_field('seller_process_header'); ?></h2>
				<h4 class="text-dark pb-4"><?php the_field('selling_process_subhead'); ?></h4>
			</div>
		</div>	  
		<div class = "row">
			<div class = "col-md-4">
				<div class="d-flex align-items-top">
					<i class = "fa <?php the_field('module_1_icon'); ?> fa-2x pr-4 mb-3"></i><h4 class ="text-dark inline"><?php the_field('module_1_header'); ?></h4>
				</div>
				<p class = "paragraph pl-5">
					<?php the_field('module_1'); ?>
				</p>
			</div>
			<div class = "col-md-4">
				<div class="d-flex align-items-top">
					<i class = "fa <?php the_field('module_2_icon'); ?> fa-2x pr-4 mb-3"></i><h4 class ="text-dark inline"><?php the_field('module_2_header'); ?></h4>
				</div>
				<p class = "paragraph pl-5">
					<?php the_field('module_2'); ?>
				</p>			
			</div>
			<div class = "col-md-4">
				<div class="d-flex align-items-top">
					<i class = "fa <?php the_field('module_3_icon'); ?> fa-2x pr-4 mb-3"></i><h4 class ="text-dark inline"><?php the_field('module_3_header'); ?></h4>
				</div>
				<p class = "paragraph pl-5">
					<?php the_field('module_3'); ?>
				</p>							
			</div>
		</div>	 
		<div class = "row mt-5">
			<div class = "col-md-4">
				<div class="d-flex align-items-top">
					<i class = "fa <?php the_field('module_4_icon'); ?> fa-2x pr-4 mb-3"></i><h4 class ="text-dark inline"><?php the_field('module_4_header'); ?></h4>
				</div>
				<p class = "paragraph pl-5">
					<?php the_field('module_4'); ?>
				</p>				
			</div>
			<div class = "col-md-4">
				<div class="d-flex align-items-top">
					<i class = "fa <?php the_field('module_5_icon'); ?> fa-2x pr-4 mb-3"></i><h4 class ="text-dark inline"><?php the_field('module_5_header'); ?></h4>
				</div>
				<p class = "paragraph pl-5">
					<?php the_field('module_5'); ?>
				</p>							
			</div>
			<div class = "col-md-4">
				<div class="d-flex align-items-top">
					<i class = "fa <?php the_field('module_6_icon'); ?> fa-2x pr-4 mb-3"></i><h4 class ="text-dark inline"><?php the_field('module_6_header'); ?></h4>
				</div>
				<p class = "paragraph pl-5">
					<?php the_field('module_6'); ?>
				</p>							
			</div>
		</div>
		<div class = "row">
			<div class = "col-md-12 text-center">
			<a href="<?php the_field('team_button_page'); ?>" class="btn btn-primary btn-lg active header mt-4" role="button" aria-pressed="true"><?php the_field('selling_process_button'); ?></a>	
			</div>
		</div>
	</div>
</section>
<div class = "component-red component-background" style="background-image: url(<?php the_field('component-background'); ?>);">
		<div class = "row">
			<div class = "col-md-6">
				<img src="<?php the_field('find_agent'); ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
			<div class = "col-md-5 text-right pr-5">
				<h2 class = "header-white"><?php the_field('easy_exit_header'); ?></h2>

				<h4 class="pt-3 text-white"><?php the_field('easy_exit_content'); ?></h4>

			</div>	
			<div class = "col-md-1">
			</div>		
		</div>
</div>	
<div class = "component-red component-background");">
		<div class = "row">
			<div class = "col-md-1">
			</div>
			<div class = "col-md-5 pl-5">
				<h2 class = "header-white"><?php the_field('pricing_heading'); ?>
</h2>
					<h4 class="pt-3 text-white"><?php the_field('pricing_subhead'); ?>
</h4>
					<h4 class="pt-3 text-white"><?php the_field('pricing_content'); ?></h4>					
				<a href="<?php the_field('team_button_page'); ?>" class="btn btn-secondary btn-lg active header mt-4" role="button" aria-pressed="true"><?php the_field('pricing_button_cta'); ?></a>
			</div>
			<div class = "col-md-6 text-center d-flex align-items-center">
				<img src="<?php the_field('search_homes'); ?>" alt="<?php echo $image['alt']; ?>" />
			</div>			
		</div>
</div>	
<section class = "component-red">
	<div class="container">
		<div class = "row no-gutter">
			<div class = "col-md-12 text-center">
				<h2 class = "header-white pb-4"><?php the_field('home_value_header'); ?></h2>
			</div>
		</div>	  
		<div class = "row no-gutter">
			<div class = "col-md-3">
			</div>
			<div class = "col-md-6 text-center">
				<input type = "text" class = "input" placeholder="Enter Your Address">
				<span class="underline underline-value"></span>
			</div>
			<div class = "col-md-3">
								<button class = "btn btn-secondary"><?php the_field('home_value_button'); ?></button>			

			</div>
		</div>
	</div>
</section>