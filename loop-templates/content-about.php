<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>
				<div class = "hero-interior about-us" style="background-image: url(<?php the_field('hero'); ?>);">
					  <div class = "header-overlay">
  </div>  
					<div class = "hero-interior-cta-center text-center">
			<?php the_field('hero_cta_interior'); ?>
				<div class="row">
					<div class = "col-sm-12 text-center">
				<a href="#about" class="btn btn-primary btn-lg active header mt-4 js-scroll-trigger" role="button" aria-pressed="true">Learn More</a>
					</div>
				</div>
			</div>
				</div>	
<section class = "component text-center" id="about">

<h2 class = "text-dark"><?php the_field('header_cta'); ?></h2>
<div class = "container">
<h4 class = "text-dark"><?php the_field('subheader_content'); ?></h4>
</div>
</section>
<section class = "component timelines">
	<div class="container">
	  <div class="page-header">
	    <h2 id="timeline" class = "text-center"><?php the_field('timeline_heading'); ?></h2>
	  </div>
	  <ul class="timeline">
	    <li>
	      <div class="timeline-badge danger"><i class="fa fa-building"></i></div>
	      <div class="timeline-panel">
	        <div class="timeline-heading">
	          <h4 class="timeline-title"><?php the_field('timeline_card_heading_1'); ?></h4>
	          	          <hr>
	        </div>
	        <div class="timeline-body">
	          <p><?php the_field('timeline_card_content_1'); ?></p>
	        </div>
	      </div>
	    </li>
	    <li class="timeline-inverted">
	      <div class="timeline-badge"><i class="fa fa-users"></i></div>
	      <div class="timeline-panel">
	        <div class="timeline-heading">
	          <h4 class="timeline-title"><?php the_field('timeline_card_heading_2'); ?></h4>
	          	          <hr>
	        </div>
	        <div class="timeline-body">
	          <p><?php the_field('timeline_card_content_2'); ?></p>
	        </div>
	      </div>
	    </li>
	    <li>
	      <div class="timeline-badge primary"><i class="fa fa-id-card"></i></div>
	      <div class="timeline-panel">
	        <div class="timeline-heading">
	          <h4 class="timeline-title"><?php the_field('timeline_card_heading_3'); ?></h4>
	          	          <hr>
	        </div>
	        <div class="timeline-body">
	          <p><?php the_field('timeline_card_content_3'); ?></p>
	        </div>
	      </div>
	    </li>
 <li class="timeline-inverted">
	      <div class="timeline-badge warning"><i class="fa fa-home"></i></div>
	      <div class="timeline-panel">
	        <div class="timeline-heading">
	          <h4 class="timeline-title"><?php the_field('timeline_card_heading_4'); ?></h4>
	          	          <hr>
	        </div>
	        <div class="timeline-body">
	          <p><?php the_field('timeline_card_content_4'); ?></p>
	        </div>
	      </div>
	    </li>
	   	    <li>
	      <div class="timeline-badge info"><i class="fa fa-bookmark"></i></div>
	      <div class="timeline-panel">
	        <div class="timeline-heading">
	          <h4 class="timeline-title"><?php the_field('timeline_card_heading_5'); ?></h4>
	          	        	<hr>
	        </div>
	        <div class="timeline-body">
	          <p><?php the_field('timeline_card_content_5'); ?></p>
	        </div>
	      </div>
	    </li>
	    <li class="timeline-inverted">
	      <div class="timeline-badge success"><i class="fa fa-line-chart"></i></div>
	      <div class="timeline-panel">
	        <div class="timeline-heading">
	          <h4 class="timeline-title"><?php the_field('timeline_card_heading_6'); ?></h4>
	          <hr>
	        </div>
	        <div class="timeline-body">
	          <p><?php the_field('timeline_card_content_6'); ?></p>
	        </div>
	      </div>
	    </li>
	  </ul>
	</div>
</section>
<section class = "component-red component-background">
		<h2 class = "header-white text-center mb-5"><?php the_field('vendors_heading'); ?></h2>
		<div class = "row">
			<div class = "col-md-1">
			</div>
			<div class = "col-md-2 text-center pt-4">
				<img src="<?php the_field('vendor_image_1'); ?>" alt="<?php echo $image['alt']; ?>"
				 />
			</div>
			<div class = "col-md-2 text-center pt-4">
				<img src="<?php the_field('vendor_image_2'); ?>" alt="<?php echo $image['alt']; ?>"/>
			</div>
			<div class = "col-md-2 text-center pt-4">
				<img src="<?php the_field('vendor_image_3'); ?>" alt="<?php echo $image['alt']; ?>"/>
			</div>
			<div class = "col-md-2 text-center pt-4">
				<img src="<?php the_field('vendor_image_4'); ?>" alt="<?php echo $image['alt']; ?>"/>
			</div>
			<div class = "col-md-2 text-center pt-4">
				<img src="<?php the_field('vendor_image_5'); ?>" alt="<?php echo $image['alt']; ?>"/>
			</div>
			<div class = "col-md-1">
			</div>
		</div>
	</section>
<div class = "component component-background" style="background-image: url(<?php the_field('component-background'); ?>);">
					<h2 class = "header-dark text-center mb-5"><?php the_field('careers_heading'); ?></h2>

		<div class = "row">
						<div class = "col-md-1">
			</div>
			<div class = "col-md-5 pl-5 pr-2">
				<div class="d-flex align-items-center"><i class = "fa fa-bullhorn fa-3x pr-3 text-brand"></i>
					<h4 class="pt-3 text-dark"><?php the_field('career_content_1'); ?></h4>
				</div>
				<div class="d-flex align-items-center"><i class = "fa fa-heartbeat fa-3x pr-3 text-brand"></i>
					<h4 class="pt-3 text-dark"><?php the_field('career_content_2'); ?></h4>
				</div>
				<div class="d-flex align-items-center pl-3"><i class = "fa fa-dollar fa-3x pr-3 text-brand"></i>
					<h4 class="pt-3 text-dark"><?php the_field('career_content_3'); ?></h4>
				</div>				
				<a href="<?php the_field('career_button_link'); ?>" class="btn btn-primary btn-lg mt-4 ml-5" role="button" aria-pressed="true"><?php the_field('career_button_cta'); ?></a>
			</div>
			<div class = "col-md-6 text-center d-flex align-items-center">
				<img src="<?php the_field('career_image'); ?>" alt="<?php echo $image['alt']; ?>" class="career-image" />
			</div>			
		</div>
</div>		
<section class = "newsletter-cta">
	<div class = "container">
		<div class = "row no-gutter">
			<div class = "col-md-6">
				<h6 class= "pt-2"><?php the_field('newsletter_content'); ?></h6>
			</div>
			<div class = "col-md-4">
				 <?php echo do_shortcode("[acme_mailchimp_form]"); ?>
		</div>
	</div>
</section>
