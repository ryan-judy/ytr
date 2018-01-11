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
						<button class="btn btn-primary btn-lg active header mt-5">Learn more
						</button>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>	

<div class = "component-red component-background");">
		<div class = "row">
			<div class = "col-md-1">
			</div>
			<div class = "col-md-5 pl-5">
				<h2 class = "header-white">Our Buyers Guarantee
</h2>
					<h4 class="pt-3 text-white">If you don't love your home, you can leave it.
</h4>
					<h4 class="pt-3 text-white">If You Purchase A Home With The Graham Real Estate Group And Don’t Absolutely Love It After You Move In, We Will Sell It For FREE. That’s right, we will waive our portion of the commission for listing your home.


</h4>					
				<a href="<?php the_field('team_button_page'); ?>" class="btn btn-secondary btn-lg active header mt-4" role="button" aria-pressed="true">go to me</a>
			</div>
			<div class = "col-md-6 text-center d-flex align-items-center">
				<img src="<?php the_field('search_homes'); ?>" alt="<?php echo $image['alt']; ?>" />
			</div>			
		</div>
</div>	
<section class = "component">
	<div class = "container">
		<div class = "row">
			<div class = "col-md-12 text-center">
				<h1 class = "text-center mb-5">Why We Offer This</h1>
			</div>
		</div>
		<div class = "row">
			<div class = "col-md-3 text-center">
				<i class= "fa fa-user  fa-inverse"></i>
				<h4 class = "text-dark">What We Do</h4>
				<p class= "text-dark">Macaroon caramels liquorice. Oat cake gingerbread liquorice brownie lemon drops chupa chups oat cake.</p>
			</div>
			<div class = "col-md-3 text-center">
				<i class= "fa fa-user fa-inverse"></i>
				<h4 class = "text-dark">Next Level</h4>
				<p class= "text-dark">Macaroon caramels liquorice. Oat cake gingerbread liquorice brownie lemon drops chupa chups oat cake.</p>				
			</div>
			<div class = "col-md-3 text-center">
				<i class= "fa fa-user fa-inverse"></i>
				<h4 class = "text-dark">Technology Driven</h4>
				<p class= "text-dark">Macaroon caramels liquorice. Oat cake gingerbread liquorice brownie lemon drops chupa chups oat cake.</p>				
			</div>
			<div class = "col-md-3 text-center">
				<i class= "fa fa-user fa-inverse"></i>
				<h4 class = "text-dark">Client Focused</h4>
				<p class= "text-dark">Macaroon caramels liquorice. Oat cake gingerbread liquorice brownie lemon drops chupa chups oat cake.</p>					
			</div>

		</div>
	</div>
</section>
<div class = "component-form">
	<h1 class = "text-center mt-5">Get Started Today</h1>
           <?php the_field('marketing_contact', 262); ?>
</div>