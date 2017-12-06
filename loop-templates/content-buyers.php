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
						<button class="btn btn-primary btn-lg active header mt-5">Learn more
						</button>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>	

<div class = "component-red component-background" style="background-image: url(<?php the_field('component-background'); ?>);">
		<div class = "row">
			<div class = "col-md-1">
			</div>
			<div class = "col-md-5 pl-5">
				<h2 class = "header-white">Start Your Home Search</h2>
					<h4 class="pt-3 text-white">When buying a home, start by making a wish list and setting a budget. We can help you choose a lender to get you pre-approved for a loan, and then you're ready to start house hunting. Search for your dream home from any device on our website. You can even compare walk scores, school ratings, and neighborhood demographics for different listings.</h4>
					<h4 class="pt-3 text-white">When buying a home, start by making a wish list and setting a budget. We can help you choose a lender to get you pre-approved for a loan, and then you're ready to start house hunting. Search for your dream home from any device on our website. You can even compare walk scores, school ratings, and neighborhood demographics for different listings.</h4>					
				<a href="<?php the_field('team_button_page'); ?>" class="btn btn-secondary btn-lg active header mt-4" role="button" aria-pressed="true">go to me</a>
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
				<h2 class = "header-white">Find the Right Agent To Guide You</h2>

				<h4 class="pt-3 text-white">When buying a home, start by making a wish list and setting a budget. We can help you choose a lender to get you pre-approved for a loan, and then you're ready to start house hunting. Search for your dream home from any device on our website. You can even compare walk scores, school ratings, and neighborhood demographics for different listings.</h4>
					<h4 class="pt-3 text-white">When buying a home, start by making a wish list and setting a budget. We can help you choose a lender to get you pre-approved for a loan, and then you're ready to start house hunting. Search for your dream home from any device on our website. You can even compare walk scores, school ratings, and neighborhood demographics for different listings.</h4>					
				<a href="<?php the_field('team_button_page'); ?>" class="btn btn-secondary btn-lg active header mt-4" role="button" aria-pressed="true">go to me</a>
			</div>	
			<div class = "col-md-1">
			</div>		
		</div>
</div>	

<div class = "component-red component-background" style="background-image: url(<?php the_field('cta_background'); ?>);">
	<div class = "container">
		<div class = "row">
			<div class = "col-md-12">
				<div class = "pull-out text-center">
				dfklasjf
				</div>
			</div>
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
		<p><button id="btncalculate">Calculate Payments</button>
		<hr>
		<p><b>TOTAL MONTHLY PAYMENT: <span id="outmonthly"></span></br> </p>
	</div>
</section>
