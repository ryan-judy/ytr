<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */
  wp_enqueue_script( 'calculator', get_template_directory_uri() . '/js/calculator.js', array ( 'jquery' ), 1.1, true);

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
				<a href="#about" class="btn btn-primary btn-lg active header mt-4 js-scroll-trigger" role="button" aria-pressed="true">Learn More</a>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>	

<div class = "component-red component-background" id = "about" style="background-image: url(<?php the_field('component-background'); ?>);">
		<div class = "row">
			<div class = "col-md-1">
			</div>
			<div class = "col-md-5 pl-5">
				<h2 class = "header-white"><?php the_field('search_header'); ?></h2>
					<h4 class="pt-3 text-white"><?php the_field('search_content'); ?>		
				<a href="<?php the_field('search_button_link'); ?>" class="btn btn-secondary btn-lg active header mt-4" role="button" aria-pressed="true"><?php the_field('search_button_cta') ?></a>
			</div>
			<div class = "col-md-6 text-center d-flex align-items-center">
				<img src="<?php the_field('search_homes'); ?>" alt="<?php echo $image['alt']; ?>" />
			</div>			
		</div>
</div>	
<div class = "component-red component-background" style="background-image: url(<?php the_field('component-background'); ?>);">
		<div class = "row">
			<div class = "col-md-6">
				<img src="<?php the_field('find_agent'); ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
			<div class = "col-md-5 text-right pr-5">
				<h2 class = "header-white"><?php the_field('agent_header'); ?></h2>

				<h4 class="pt-3 text-white"><?php the_field('agent_content'); ?></h4>			
				<a href="<?php the_field('agent_button_link'); ?>" class="btn btn-secondary btn-lg active header mt-4" role="button" aria-pressed="true"><?php the_field('agent_button_cta'); ?></a>
			</div>	
			<div class = "col-md-1">
			</div>		
		</div>
</div>	

<section class = "component">
	<div class="container">
		<div class = "row no-gutter">
			<div class = "col-md-12 text-center">
				<h2 class = "header-dark mb-4"><?php the_field('mortgage_calculator_header'); ?></h2>
			</div>
		</div>
		<div class = "row text-center">
			<div class = "col-md-2">
			</div>
			<div class = "col-md-4 mt-3">
				<p>COST OF HOUSE:</p> <input type ="text" class = "form-control text-center" id="incost"/>
			</div>
			<div class = "col-md-4 mt-3">			
				<p>DOWN PAYMENT:</p> <input type ="text" class = "form-control text-center" id="indown"/></p>
			</div>
			<div class = "col-md-2">
			</div>
		</div>
		<div class = "row text-center">
			<div class = "col-md-2">
			</div>
			<div class = "col-md-4 mt-3">
				<p>APR (ANNUAL PERCENTAGE RATE):</p> <input type ="text" class = "form-control text-center" id="inapr"/></p>
			</div>
			<div class = "col-md-4 mt-3">
				<p>PERIOD (HOW LONG):</p> <input type ="text" class = "form-control text-center" id="inperiod"/></p>
			</div>
			<div class = "col-md-2">
			</div>
		</div>
		<div class ="row text-center">
			<div class = "col-md-12">
				<a id="btncalculate" class="btn btn-primary btn-lg active header mt-4" role="button" aria-pressed="true">Calculate</a>
				<hr>
			</div>
		</div>
		<div class ="row text-center">
			<div class = "col-md-12">
				TOTAL MONTHLY PAYMENT: <span id="outmonthly"></span></br>
			</div>
		</div>		
	</div>
</section>
<div class = "component component-background" style="background-image: url(<?php the_field('cta_popout_image'); ?>); background-position: center">
	<div class = "container">
		<div class = "row">
			<div class = "col-md-12">
				<div class = "pull-out text-center">
				<h2><?php the_field('cta_popout_text'); ?></h2>
				</div>
			</div>
		</div>
	</div>
</div>
<div class = "component-form mt-5">
	<h1 class = "text-center"><?php the_field('buyer_contact_header'); ?></h1>
	<div class = "col-md-12">
           <?php the_field('buyer_contact_form'); ?>
    </div>

</div>