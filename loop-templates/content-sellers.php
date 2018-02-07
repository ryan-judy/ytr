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
    <div class = "col-sm-12 text-center">
      <div class = "hero-interior-cta-right">
      <?php the_field('hero_cta_interior'); ?>
      </div>
              <div class="row">
          <div class = "col-lg-7">
          </div>
          <div class = "col-lg-5">
				<a href="#about" class="btn btn-primary btn-lg active header mt-4  mr-2 js-scroll-trigger" role="button" aria-pressed="true">Learn More</a>
          </div>
        </div>
    </div>  
  </div>

</div>  

<section class = "component" id="about">
	<div class="container">
		<div class = "row no-gutter">
			<div class = "col-lg-12 text-center">
				<h2 class = "header-dark"><?php the_field('seller_stats_header'); ?></h2>
				<p class = "text-dark"><?php the_field('seller_stats_content');?>
			</div>
		</div>
		<div class = "row mt-4">
			<div class = "col-lg-6 sr-logo">
				<canvas id="bar-chart" width="800" height="450"></canvas>
			</div>
			<div class = "col-lg-6 sr-logo">
				<canvas id="bar-chart-horizontal" width="800" height="450"></canvas>
			</div>
		</div>	  	  
	</div>
</section>

<div class = "component-red component-background" style="background-image: url(<?php the_field('gsp_background'); ?>);">
	<div class="container">
		<div class = "row">
			<div class = "col-lg-6">
				<h2 class = "header-white text-center pl-5"><?php the_field('gsp_header'); ?></h2>
				<div class="d-flex align-items-center"><i class = "fa <?php the_field('gsp_subhead_1_icon'); ?> fa-inverse fa-3x sr-icons pr-3"></i>
					<h4 class="pt-3 text-white"><?php the_field('gsp_subhead_1'); ?></h4>
				</div>
				<div class="d-flex align-items-center sr-icon"><i class = "fa <?php the_field('gsp_subhead_2_icon'); ?> fa-inverse fa-3x sr-icons pr-3"></i>
					<h4 class="pt-3 text-white"><?php the_field('gsp_subhead_2'); ?></h4>
				</div>
				<div class="d-flex align-items-center sr-icon "><i class = "fa <?php the_field('gsp_subhead_3_icon'); ?> fa-inverse fa-3x sr-icons pr-3"></i>
					<h4 class="pt-3 text-white"><?php the_field('gsp_subhead_3'); ?></h4>
				</div>				
				<a href="<?php the_field('gsp_button_link'); ?>" class="btn btn-secondary btn-lg active header sr-button mt-4 ml-5" role="button" aria-pressed="true"><?php the_field('gsp_button'); ?></a>
			</div>
			<div class = "col-lg-6 text-center">
			</div>			
		</div>
	</div>
</div>	
<section class = "component">
	<div class="container">
		<div class = "row no-gutter">
			<div class = "col-lg-12 text-center">
				<h2 class = "header-dark pb-2"><?php the_field('seller_process_header'); ?></h2>
				<h4 class="text-dark pb-4"><?php the_field('selling_process_subhead'); ?></h4>
			</div>
		</div>	  
		<div class = "row">
			<div class = "col-lg-4">
				<div class="d-flex align-items-top">
					<i class = "fa <?php the_field('module_1_icon'); ?> fa-2x sr-icons pr-4 mb-3"></i><h4 class ="text-dark inline"><?php the_field('module_1_header'); ?></h4>
				</div>
				<p class = "paragraph pl-5">
					<?php the_field('module_1'); ?>
				</p>
			</div>
			<div class = "col-lg-4">
				<div class="d-flex align-items-top">
					<i class = "fa <?php the_field('module_2_icon'); ?> fa-2x sr-icons pr-4 mb-3"></i><h4 class ="text-dark inline"><?php the_field('module_2_header'); ?></h4>
				</div>
				<p class = "paragraph pl-5">
					<?php the_field('module_2'); ?>
				</p>			
			</div>
			<div class = "col-lg-4">
				<div class="d-flex align-items-top">
					<i class = "fa <?php the_field('module_3_icon'); ?> fa-2x sr-icons pr-4 mb-3"></i><h4 class ="text-dark inline"><?php the_field('module_3_header'); ?></h4>
				</div>
				<p class = "paragraph pl-5">
					<?php the_field('module_3'); ?>
				</p>							
			</div>
		</div>	 
		<div class = "row mt-5">
			<div class = "col-lg-4">
				<div class="d-flex align-items-top">
					<i class = "fa <?php the_field('module_4_icon'); ?> fa-2x sr-icons pr-4 mb-3"></i><h4 class ="text-dark inline"><?php the_field('module_4_header'); ?></h4>
				</div>
				<p class = "paragraph pl-5">
					<?php the_field('module_4'); ?>
				</p>				
			</div>
			<div class = "col-lg-4">
				<div class="d-flex align-items-top">
					<i class = "fa <?php the_field('module_5_icon'); ?> fa-2x sr-icons pr-4 mb-3"></i><h4 class ="text-dark inline"><?php the_field('module_5_header'); ?></h4>
				</div>
				<p class = "paragraph pl-5">
					<?php the_field('module_5'); ?>
				</p>							
			</div>
			<div class = "col-lg-4">
				<div class="d-flex align-items-top">
					<i class = "fa <?php the_field('module_6_icon'); ?> fa-2x sr-icons pr-4 mb-3"></i><h4 class ="text-dark inline"><?php the_field('module_6_header'); ?></h4>
				</div>
				<p class = "paragraph pl-5">
					<?php the_field('module_6'); ?>
				</p>							
			</div>
		</div>
		<div class = "row">
			<div class = "col-lg-12 text-center">
			<a href="<?php the_field('selling_process_link'); ?>" class="btn btn-primary btn-lg active header sr-button mt-4" role="button" aria-pressed="true"><?php the_field('selling_process_button'); ?></a>	
			</div>
		</div>
	</div>
</section>
<div class = "component-red component-background" style="background-image: url(<?php the_field('component-background'); ?>);">
	<div class = "container">
		<div class = "row">
			<div class = "col-lg-6">
				<img src="<?php the_field('easy_exit_image'); ?>" alt="<?php echo $image['alt']; ?>" class="sr-contact"/>
			</div>
			<div class = "col-lg-6 text-right">
				<h2 class = "header-white"><?php the_field('easy_exit_header'); ?></h2>
			<h4 class = 'text-light'><?php the_field('easy_exit_subhead'); ?></h4>

				<h4 class="pt-3 text-white"><?php the_field('easy_exit_content'); ?></h4>

			</div>		
		</div>
	</div>
</div>	
<div class = "component-red component-background component-pricing");">
		<div class = "row">
			<div class = "col-lg-1">
			</div>
			<div class = "col-lg-5">
				<h2 class = "header-white"><?php the_field('pricing_heading'); ?>
</h2>
					<h4 class="text-white"><?php the_field('pricing_subhead'); ?>
</h4>
					<h4 class="pt-3 text-white"><?php the_field('pricing_content'); ?></h4>					
				<a href="<?php the_field('pricing_button_link'); ?>" class="btn btn-secondary btn-lg sr-button active header  sr-button mt-4" role="button" aria-pressed="true"><?php the_field('pricing_button_cta'); ?></a>
			</div>
			<div class = "col-lg-6 text-center d-flex align-items-center">
				<img src="<?php the_field('pricing_image'); ?>" alt="<?php echo $image['alt']; ?>" class="pricing-photo sr-contact" />
			</div>			
		</div>
</div>	
<div class = "component-form mt-5">
	<h1 class = "text-center"><?php the_field('selling_contact_header'); ?></h1>
	<div class = "col-lg-12">
           <?php the_field('selling_contact_form'); ?>
    </div>

</div>