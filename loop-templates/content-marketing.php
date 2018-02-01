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
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>	

<div id = "about" class = "component-red component-background" style="background-image: url(<?php the_field('statistic_background'); ?>);">

<div class= "row text-center">
	<div class = "col-md-12 text-center">
		<h2 class = "text-white mb-5"><?php the_field('statistic_heading'); ?></span></h2>
	</div>
		<div class = "col-md-4">
			<h2 class = 'text-light sr-number'><span class="count"><?php the_field('statistic_header_1'); ?></span></h2>
			<p class = 'text-light'><?php the_field('statistic_subhead_1'); ?></p>
		</div>
		<div class = "col-md-4">
			<h2 class = 'text-light'><?php the_field('statistic_header_2'); ?></h2>
			<p class = 'text-light'><?php the_field('statistic_subhead_2'); ?></p>
		</div>
		<div class = "col-md-4">
			<h2 class = 'text-light'><?php the_field('statistic_header_3'); ?></h2>
			<p class = 'text-light'><?php the_field('statistic_subhead_3'); ?></p>
		</div>
</div>
</div>
<div class = "component-secondary component-background" style="background-image: url(<?php the_field('component-background'); ?>);">
		<div class = "container">
		<div class = "row text-center">
			<div class = "col-md-12 mt-5">
				<h2 class = "header-dark"><?php the_field('marketing_tactics_header'); ?></h2>
					<h4 class="pt-3 text-dark"><?php the_field('marketing_tactics_subhead'); ?></h4>
					<div class = "row">
					<div class= "col-md-2">
</div>
					<div class = "col-md-8">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<div class = "marketing-slider">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php the_field('marketing_slideshow_1'); ?>" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h3></h3>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php the_field('marketing_slideshow_2'); ?>" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
    <h3></h3>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php the_field('marketing_slideshow_3'); ?>" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
    <h3></h3>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <i class="fa fa-chevron-left fa-3x text-brand"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <i class="fa fa-chevron-right fa-3x text-brand"></i>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
<div class= "col-md-2">
</div>
</div>
					<h4 class="pt-3 text-dark mb-5"><?php the_field('listing_marketing_content'); ?></h4>					
				
			</div>
		</div>
</div>	
</div>
<div class = "component-red component-background" style="background-image: url(<?php the_field('component-background'); ?>);">
		<div class = "row">
			<div class = "col-md-1">
			</div>
			<div class = "col-md-5 pl-5">
				<h2 class = "header-white"><?php the_field('digital_header'); ?></h2>
					<h4 class="pt-3 text-white"><?php the_field('digital_subhead'); ?></h4>
					<h4 class="pt-3 text-white"><?php the_field('digital_content'); ?>

</h4>					
			</div>
			<div class = "col-md-6 text-center d-flex align-items-center">
				<img class = "marketing-module sr-contact" src="<?php the_field('computer_image'); ?>" alt="<?php echo $image['alt']; ?>" />
			</div>			
		</div>
</div>	

<div class = "component-red component-background component-pricing" style="background-image: url(<?php the_field('component-background'); ?>);">
		<div class = "row">
			<div class = "col-md-6">
				<img class = "marketing-module-2 sr-contact" src="<?php the_field('offline_image'); ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
<div class = "col-md-5 pl-5">
				<h2 class = "header-white"><?php the_field('offline_header'); ?>
</h2>
					<h4 class="pt-3 text-white"><?php the_field('offline_subhead'); ?></h4>
					<h4 class="pt-3 text-white"><?php the_field('offline_content'); ?></h4>					
			</div>
			<div class = "col-md-1">
			</div>		
		</div>
</div>	

</div>	
<div class = "component-form mt-5">
	<h1 class = "text-center"><?php the_field('marketing_contact_header'); ?></h1>
	<div class = "col-md-12">
           <?php the_field('marketing_contact_form'); ?>
    </div>

</div>