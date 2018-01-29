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
										<a href="#about" class="btn btn-primary btn-lg active header mt-4 js-scroll-trigger" role="button" aria-pressed="true">Learn More</a>

					</div>
				</div>	
<section class = "component text-center" id="about">

<h2 class = "text-dark"><?php the_field('header_cta'); ?></h2>
<div class = "container">
<h4 class = "text-dark"><?php the_field('subheader_content'); ?></h4>
</div>
</section>
<section class = "component">
	<div class="container">
	  <div class="page-header">
	    <h1 id="timeline" class = "text-center"><?php the_field('timeline_heading'); ?></h1>
	  </div>
	  <ul class="timeline">
	    <li>
	      <div class="timeline-badge"><i class="fa fa-check"></i></div>
	      <div class="timeline-panel">
	        <div class="timeline-heading">
	          <h4 class="timeline-title"><?php the_field('timeline_card_heading_1'); ?></h4>
	        </div>
	        <div class="timeline-body">
	          <p><?php the_field('timeline_card_content_1'); ?></p>
	        </div>
	      </div>
	    </li>
	    <li class="timeline-inverted">
	      <div class="timeline-badge warning"><i class="glyphicon glyphicon-credit-card"></i></div>
	      <div class="timeline-panel">
	        <div class="timeline-heading">
	          <h4 class="timeline-title"><?php the_field('timeline_card_heading_2'); ?></h4>
	        </div>
	        <div class="timeline-body">
	          <p><?php the_field('timeline_card_content_2'); ?></p>
	        </div>
	      </div>
	    </li>
	    <li>
	      <div class="timeline-badge danger"><i class="glyphicon glyphicon-credit-card"></i></div>
	      <div class="timeline-panel">
	        <div class="timeline-heading">
	          <h4 class="timeline-title"><?php the_field('timeline_card_heading_3'); ?></h4>
	        </div>
	        <div class="timeline-body">
	          <p><?php the_field('timeline_card_content_3'); ?></p>
	        </div>
	      </div>
	    </li>
	    <li class="timeline-inverted">
	      <div class="timeline-panel">
	        <div class="timeline-heading">
	          <h4 class="timeline-title"><?php the_field('timeline_card_heading_4'); ?></h4>
	        </div>
	        <div class="timeline-body">
	          <p><?php the_field('timeline_card_content_4'); ?></p>
	        </div>
	      </div>
	    </li>
	    <li>
	      <div class="timeline-badge info"><i class="glyphicon glyphicon-floppy-disk"></i></div>
	      <div class="timeline-panel">
	        <div class="timeline-heading">
	          <h4 class="timeline-title"><?php the_field('timeline_card_heading_4'); ?></h4>
	        </div>
	        <div class="timeline-body">
	          <p><?php the_field('timeline_card_content_4'); ?></p>
	          <hr>
	          <div class="btn-group">
	            <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
	              <i class="glyphicon glyphicon-cog"></i> <span class="caret"></span>
	            </button>
	            <ul class="dropdown-menu" role="menu">
	              <li><a href="#">Action</a></li>
	              <li><a href="#">Another action</a></li>
	              <li><a href="#">Something else here</a></li>
	              <li class="divider"></li>
	              <li><a href="#">Separated link</a></li>
	            </ul>
	          </div>
	        </div>
	      </div>
	    </li>
	    <li class="timeline-inverted">
	      <div class="timeline-badge success"><i class="glyphicon glyphicon-thumbs-up"></i></div>
	      <div class="timeline-panel">
	        <div class="timeline-heading">
	          <h4 class="timeline-title"><?php the_field('timeline_card_heading_4'); ?></h4>
	        </div>
	        <div class="timeline-body">
	          <p><?php the_field('timeline_card_content_5'); ?></p>
	        </div>
	      </div>
	    </li>
	  </ul>
	</div>
</section>
<div class = "component-dark component-background" style="background-image: url(<?php the_field('component-background'); ?>);">
					<h2 class = "header-white text-center"><?php the_field('careers_heading'); ?></h2>

	<div class="container">
		<div class = "row">
			<div class = "col-md-6">
				<div class="d-flex align-items-center"><i class = "fa fa-user fa-inverse fa-3x pr-3"></i>
					<h4 class="pt-3 text-white"><?php the_field('career_content_1'); ?></h4>
				</div>
				<div class="d-flex align-items-center"><i class = "fa fa-user fa-inverse fa-3x pr-3"></i>
					<h4 class="pt-3 text-white"><?php the_field('career_content_1'); ?></h4>
				</div>
				<div class="d-flex align-items-center"><i class = "fa fa-user fa-inverse fa-3x pr-3"></i>
					<h4 class="pt-3 text-white"><?php the_field('career_content_1'); ?></h4>
				</div>				
				<a href="<?php the_field('career_button_link'); ?>" class="btn btn-secondary btn-lg active header mt-4 ml-5" role="button" aria-pressed="true"><?php the_field('career_button_cta'); ?></a>
			</div>
			<div class = "col-md-6 text-center">
			</div>			
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
