<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?><div class = "hero-interior" style="background-image: url(<?php the_field('hero'); ?>);">
  <div class = "header-overlay">
  </div>  
  <div class = "row">
    <div class = "col-sm-12 text-center" style="position: absolute;">
      <div class = "hero-interior-cta-right">
      <?php the_field('hero_cta_interior'); ?>
      </div>
              <div class="row">
          <div class = "col-sm-8">
          </div>
          <div class = "col-sm-4">
				<a href="#about" class="btn btn-primary btn-lg active header mt-4 js-scroll-trigger" role="button" aria-pressed="true">Learn More</a>
            </button>
          </div>
        </div>
    </div>  
  </div>
</div>  
				<div id = "about" class = "component component-background");">
		<div class = "row">
			<div class = "col-md-1">
			</div>
			<div class = "col-md-5 pl-5">
				<h2 class = "header-dark"><?php the_field('team_header'); ?>
				<h5 class = "header-dark"><?php the_field('team_subhead'); ?></h5>


</h2>
					<h4 class="pt-3 text-dark"><?php the_field('team_content'); ?>

</h4>					
				<a href="<?php the_field('team_button_link'); ?>" class="btn btn-primary btn-lg active header sr-button mt-4" role="button" aria-pressed="true"><?php the_field('team_button_cta'); ?></a>
			</div>
			<div class = "col-md-6 text-center d-flex align-items-center content-right">
				<img src="<?php the_field('team_image'); ?>" alt="<?php echo $image['alt']; ?>" />
			</div>			
		</div>
</div>	
<div class = "component component-background" style="background-image: url(<?php the_field('comparison_background'); ?>);">
		<div class = "row text-center">
			<div class = "col-md-12">
											<h2 class = "header-white"><?php the_field('Comparison Header'); ?>
</h2>
</div>
		</div>
		<div class = "container">
		<div class = "row">

			<div class = "col-md-6 content">

					<h3 class="pt-3 text-light text-center"><?php the_field('left_header'); ?></h3>
					<h4 class="pt-3 text-light comparison-paragraph"><?php the_field('left_content'); ?>

</h4>					
			</div>
			<div class = "col-md-6 content-right">
													<h3 class="pt-3 text-light text-center"><?php the_field('right_header'); ?></h3>

<h4 class="pt-3 text-light comparison-paragraph"><?php the_field('right_content'); ?>

</h4>								</div>			
		</div>
	</div>
		<div class = "row">
	<div class = "col-md-12 text-center">
				<a href="<?php the_field('comparison_button_link'); ?>" class="btn btn-primary btn-lg sr-button active header mt-4" role="button" aria-pressed="true"><?php the_field('comparison_button'); ?></a>
	</div>
</div>
</div>	
<div class = "component-background" style="background-color: #751212;">
		<div class = "row">
			<div class = "col-md-6 content">
				<img src="<?php the_field('communication_image'); ?>" alt="<?php echo $image['alt']; ?>" / class="communicate-image">
			</div>
			<div class = "col-md-5 text-right mt-5 pb-5">
				<h2 class = "header-white"><?php the_field('communication_header'); ?></h2>
				<h5 class = "header-white"><?php the_field('communication_subhead'); ?></h5>

				<h4 class="pt-3 text-white"><?php the_field('communication_content'); ?></h4>		
				<a href="<?php the_field('communication_button_link'); ?>" class="btn btn-secondary btn-lg sr-button active header mt-4" role="button" aria-pressed="true"><?php the_field('communication_button'); ?></a>
			</div>	
			<div class = "col-md-1">
			</div>		
		</div>
</div>	
<div class = "component-form">
	<h1 class = "text-center">Get Started Today</h1>
          	<?php the_field('difference_contact'); ?>

</div>

