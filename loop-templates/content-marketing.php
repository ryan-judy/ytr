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

<div class = "component-red component-background" style="background-image: url(<?php the_field('component-background'); ?>);">

<div class= "row text-center">
	<div class = "col-md-12 text-center">
		<?php the_field('statistic_header_1'); ?>
	</div>
		<div class = "col-md-4">
			<h2><?php the_field('statistic_header_1'); ?></h2>
			<?php the_field('statistic_subhead_1'); ?>
		</div>
		<div class = "col-md-4">
			<h2><?php the_field('statistic_header_2'); ?></h2>
			<?php the_field('statistic_subhead_2'); ?>
		</div>
		<div class = "col-md-4">
			<h2><?php the_field('statistic_header_3'); ?></h2>
			<?php the_field('statistic_subhead_3'); ?>
		</div>
</div>

<div class = "row text-center">
	<div class = "col-md-12">
		            		<a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Contact</a>
</div>
	</div>

</div>
<div class = "component component-background" style="background-image: url(<?php the_field('component-background'); ?>);">
		<div class = "row">
			<div class = "col-md-1">
			</div>
			<div class = "col-md-5 pl-5">
				<h2 class = "header-dark"><?php the_field('digital_header'); ?></h2>
					<h4 class="pt-3 text-dark"><?php the_field('digital_subhead'); ?></h4>
					<h4 class="pt-3 text-dark"><?php the_field('digital_content'); ?>

</h4>					
				<a href="<?php the_field('team_button_page'); ?>" class="btn btn-secondary btn-lg active header mt-4" role="button" aria-pressed="true">go to me</a>
			</div>
			<div class = "col-md-6 text-center d-flex align-items-center">
				<img src="<?php the_field('search_homes'); ?>" alt="<?php echo $image['alt']; ?>" />
			</div>			
		</div>
</div>	
<div class = "component-red component-background" style="background-image: url(<?php the_field('component-background'); ?>);">
		<div class = "container">
		<div class = "row text-center">
			<div class = "col-md-12">
				<h2 class = "header-white"><?php the_field('marketing_tactics_header'); ?></h2>
					<h4 class="pt-3 text-white"><?php the_field('marketing_tactics_subhead'); ?></h4>
					<div class = "row">
					<div class= "col-md-2">
</div>
					<div class = "col-md-8">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="http://via.placeholder.com/350x150" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h3>...</h3>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://via.placeholder.com/350x150" alt="Second slide">
          <div class="carousel-caption d-none d-md-block">
    <h3>...</h3>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="http://via.placeholder.com/350x150" alt="Third slide">
          <div class="carousel-caption d-none d-md-block">
    <h3>...</h3>
  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div class= "col-md-2">
</div>
</div>
					<h4 class="pt-3 text-white"><?php the_field('listing_marketing_content'); ?></h4>					
				
			</div>
		</div>
</div>	
</div>

<div class = "component component-background" style="background-image: url(<?php the_field('component-background'); ?>);">
		<div class = "row">
			<div class = "col-md-1">
			</div>
			<div class = "col-md-5 pl-5">
				<h2 class = "header-dark"><?php the_field('offline_header'); ?>
</h2>
					<h4 class="pt-3 text-dark"><?php the_field('offline_subhead'); ?></h4>
					<h4 class="pt-3 text-dark"><?php the_field('offline_content'); ?></h4>					
				<a href="<?php the_field('team_button_page'); ?>" class="btn btn-secondary btn-lg active header mt-4" role="button" aria-pressed="true">go to me</a>
			</div>
			<div class = "col-md-6 text-center d-flex align-items-center">
				<img src="<?php the_field('search_homes'); ?>" alt="<?php echo $image['alt']; ?>" />
			</div>			
		</div>
</div>	
<div class = "component-form">
	<h1 class = "text-center"><?php the_field('marketing_contact_header'); ?></h1>
	<div class = "col-md-12">
           <?php the_field('marketing_contact_form'); ?>
    </div>

</div>