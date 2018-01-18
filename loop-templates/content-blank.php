<?php
/**
 * Blank content partial template.
 *
 * @package understrap
 */

?>

<div class="hfeed site" id="page">
<div class = "hero-banner-image" style="background-image: url(<?php the_field('hero_image'); ?>" alt="<?php echo $image['alt']; ?>");">
	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">
    <div class="d-flex justify-content-end header px-5 p-2">
    <div class="mr-5 pt-1"><i class = "fa fa-phone"></i> 216-378-9618</div>
    <button href="#" class="btn btn-primary btn-sm active header mr-3" role="button" aria-pressed="true">Sign In/Sign Up</button>
    </div>


	<nav class="navbar navbar-expand-lg px-5" id="menu">
            <!-- Your site title as branding in the menu -->
          <?php if ( ! has_custom_logo() ) { ?>

            <?php if ( is_front_page() && is_home() ) : ?>

              <h1 class="navbar-brand"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
              
            <?php else : ?>

              <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
            
            <?php endif; ?>
            
          
          <?php } else { ?>
            <a href="/" class="navbar-brand custom-logo-link" rel="home" itemprop="url"><img width="200" height="73" src="<?php the_field('white_logo'); ?>" class="navbar-brand" alt="Young Team Realtors" itemprop="logo"></a>
          <?php } ?><!-- end custom logo -->
  <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target=".collapse" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse collapse">

  </div>
        <!-- The WordPress Menu goes here -->
          <?php wp_nav_menu(
          array(
            'theme_location'  => 'primary',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'navbarNavDropdown',
            'menu_class'      => 'navbar-nav',
            'fallback_cb'     => '',
            'menu_id'         => 'main-menu',
            'walker'          => new WP_Bootstrap_Navwalker(),
          )
        ); ?>
</nav>

	</div><!-- .wrapper-navbar end -->

<div class="entry-content">

<section class="hero">
	<div class = "hero-banner-image">
		<div class = "container">
			<div class = "row">
				<div class = "col-md-8">
					<div class = "hero-cta mb-4">
		    			<?php the_field('hero_cta'); ?>
		    		</div>
					<ul class="nav nav-tabs" role="tablist">
					  <li class="nav-item switch">
					    <a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Sell My Home</a>
					  </li>
					  <li class="nav-item switch">
					    <a class="nav-link" href="#buzz" role="tab" data-toggle="tab">Buy a Home</a>
					  </li>
					  <li class="nav-item switch">
					    <a class="nav-link" href="#references" role="tab" data-toggle="tab">Home Evaluation</a>
					  </li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="profile">
							<form id="form-contact1" method="post" class="form form-contact mt-4" role="form">
                           		<div class="row">
                                    <div class="col-xs-6 col-md-6 form-group">
                                    	<input class="form-control contact_street_address" id="contact1_street_address" name="contact1_street_address" placeholder="Address, City, Zip" required="" autofocus="" type="text">
									</div>
                                    <div class="col-xs-6 col-md-6 form-group">
                                    	<input class="form-control contact_email" id="contact1_email" name="contact1_email" placeholder="Email" required="" type="email">
									</div>
                               	</div>
                                <div class="row">
                                    <div class="col-xs-8 col-md-8 form-group">
                                    	<input class="form-control contact_fullname" id="contact1_fullname" name="contact1_fullname" placeholder="Name" required="" autofocus="" type="text">
									</div>
                                    <div class="col-xs-4 col-md-4 form-group">
                                        <input class="form-control contact_phone" id="contact1_phone" name="contact1_phone" placeholder="Phone Number" required="" type="phone">
									</div>
                                </div>
                                <div class="footing">
                                    <button class="btn btn-primary btn-md" type="submit" style="outline: none; cursor: inherit;" data-selector="a.btn, button.btn, button">NEXT STEP</button>
                                </div>
                             </form>	
					  	</div>
					  	<div role="tabpanel" class="tab-pane fade" id="buzz">							
<div class="slider mt-5">
					  			<input type = "range" min="0" max="6" onchange="rangevalue.value=value"/>
									<output id="rangevalue">50</output>
					  		</div>
					  	</div>
					  	<div role="tabpanel" class="tab-pane fade" id="references">
					  		<div class="container-fluid mt-4">
                                    <div class="row">
                                        <form class="form-inline quick-search-form">
                                            <div id="custom-search-11">
                                                <div class="input-group col-xs-12">
                                                    <input id="search_address" name="search_address" autocomplete="off" class="form-control input-lg ui-autocomplete-input" placeholder="Enter Your Street Address" type="text"><span class="input-group-btn">
                                                    </span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="row">
                                        <h4 class="text-light mt-2">Find out how much your home is worth based on the latest market data.</p>
                                        
                                                                        <div class="footing">
                                    <button class="btn btn-primary btn-md" type="submit" style="outline: none; cursor: inherit;" data-selector="a.btn, button.btn, button">SEE YOUR EVALUATION</button>
                                </div>
                                    </div>
                                </div>
					  	</div>
					</div>
	    	</div>
	    	<div class = "col-md-4">
	    	</div>
		</div>
	</div>
</section>
</div>
</div>
<section class = "component text-center">

<h2 class = "header-dark">Hello! This could be a CTA text box or nice intro after the Hero.</h2>

</section>

<section class = "component-red">
	<div class = "container">
		<div class = "row">
			<div class = "col-md-3 text-center">
				<i class= "fa fa-user  fa-inverse"></i>
				<h4>What We Do</h4>
				<p class= "text-light">Macaroon caramels liquorice. Oat cake gingerbread liquorice brownie lemon drops chupa chups oat cake.</p>
			</div>
			<div class = "col-md-3 text-center">
				<i class= "fa fa-user fa-inverse"></i>
				<h4>Next Level</h4>
				<p class= "text-light">Macaroon caramels liquorice. Oat cake gingerbread liquorice brownie lemon drops chupa chups oat cake.</p>				
			</div>
			<div class = "col-md-3 text-center">
				<i class= "fa fa-user fa-inverse"></i>
				<h4>Technology Driven</h4>
				<p class= "text-light">Macaroon caramels liquorice. Oat cake gingerbread liquorice brownie lemon drops chupa chups oat cake.</p>				
			</div>
			<div class = "col-md-3 text-center">
				<i class= "fa fa-user fa-inverse"></i>
				<h4>Client Focused</h4>
				<p class= "text-light">Macaroon caramels liquorice. Oat cake gingerbread liquorice brownie lemon drops chupa chups oat cake.</p>					
			</div>

		</div>
	</div>
</section>

<section class = "component team">
	<div class = "container">
		<div class = "row">
			<div class = "col-md-6">
				<h2 class = "header-dark"><?php the_field('team_header'); ?></h2>
				<h4 class="pt-3 text-dark"><?php the_field('team_subhead'); ?></h4>
				<a href="<?php the_field('team_button_page'); ?>" class="btn btn-primary btn-lg active header mt-4" role="button" aria-pressed="true"><?php the_field('team_button'); ?></a>
			</div>
			<div class = "col-md-6 text-center">
				<img src="<?php the_field('team_image'); ?>" alt="<?php echo $image['alt']; ?>" />
			</div>			
		</div>
	</div>
</section>

<section class = "component reviews">
	<div class = "container">
		<div class = "row">
			<div class = "col-md-6">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				  <ol class="carousel-indicators">
				    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				  </ol>
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img class="d-block w-100" src="<?php the_field('client_review_image_1'); ?>" alt="First slide">
				        <div class="carousel-caption d-none d-md-block">
				    		<h3><?php the_field('client_review_head_1'); ?></h3>
				    		<p><?php the_field('client_review_subhead_1'); ?></p>
				  		</div>
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="<?php the_field('client_review_image_2'); ?>" alt="Second slide">
				      	<div class="carousel-caption d-none d-md-block">
				    		<h3><?php the_field('client_review_head_2'); ?></h3>
				    		<p><?php the_field('client_review_subhead_2'); ?></p>
				  		</div>
				    </div>
				    <div class="carousel-item">
				      <img class="d-block w-100" src="<?php the_field('client_review_image_3'); ?>" alt="Third slide">
				      	<div class="carousel-caption d-none d-md-block">
				    		<h3><?php the_field('client_review_head_3'); ?></h3>
				    		<p><?php the_field('client_review_subhead_3'); ?></p>
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
			<div class = "col-md-6 text-center">
				<div class = "row">
					<div class = "col-sm-4">
						<h2 class = "text-brand"><span class="count"><?php the_field('client_sold'); ?></span></h2>
						Homes Sold
					</div>
					<div class = "col-sm-4">
						<h2 class = "text-brand "><span class="count"><?php the_field('client_reviews'); ?></span></h2>
						5 Star Reviews
					</div>
					<div class = "col-sm-4">
						<h2 class = "text-brand "><span class="count"><?php the_field('client_experience'); ?></span></h2>
						Years of Experience
					</div>
				</div>
					<h4 class="pt-3 text-dark"><?php the_field('client_subhead'); ?></h4>
					<div class="img-wrapper text-center">
						<img src= "./wp-content/uploads/2017/10/zillow-logo-5-star-e1507134842280.png" class="responsive">
					</div>
					<a href="<?php the_field('client_review_button_page'); ?>" class="btn btn-primary btn-lg active header mt-4" role="button" aria-pressed="true"><?php the_field('client_review_button'); ?></a>
			</div>			
		</div>
	</div>
</section>

<section class = "component-red">
	<div class = "container-fluid">
		<div class = "row no-gutter">
			<div class = "col-md-12 text-center">
				<h2 class = "header-white"><?php the_field('communities_header'); ?></h2>
			</div>
		</div>
		<div class = "row">
			<div class ="col-md-1">
			</div>
			<div class = "col-md-10 text-center">
				<h4 class="pt-3"><?php the_field('communities_subhead'); ?></h4>
			</div>	
			<div class ="col-md-1">
			</div>
		</div>
		<div class="row no-gutter mt-4">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="#">
              <img class="img-fluid" src="http://localhost:8888/wp-content/uploads/2017/09/placeimg_410_280_any.jpg" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Eastside
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="#">
              <img class="img-fluid" src="http://localhost:8888/wp-content/uploads/2017/09/placeimg_410_280_any.jpg" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Westside
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="#">
              <img class="img-fluid" src="http://localhost:8888/wp-content/uploads/2017/09/placeimg_410_280_any.jpg" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Southside
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
	</div>
</section>

<section class = "component-trans">
	<div class = "container">
		<div class="row">
			<div class = "col-md-12 text-center">
				<h2 class = "header-white"><?php the_field('social_heading'); ?></h2>
			</div>
		</div>
		<div class = "row align-center">
			<div class="col-md-2 connect">
				<a class="portfolio-box" href="#">
              <img class="img-fluid" src="http://localhost:8888/wp-content/uploads/2017/09/placeimg_410_280_any.jpg" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	              	  <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Southside
                  </div>
                </div>
              </div>
            </a>
			</div>
			<div class="col-md-2 connect">
			<a class="portfolio-box" href="#">
              <img class="img-fluid" src="http://via.placeholder.com/350x250" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	   <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Westside
                  </div>
                </div>
              </div>
            </a>
			</div>
			<div class="col-md-2 connect">
			<a class="portfolio-box" href="#">
              <img class="img-fluid" src="http://via.placeholder.com/350x250" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	    <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    souithside
                  </div>
                </div>
              </div>
            </a>	
			</div>
			<div class="col-md-2 connect">
			<a class="portfolio-box" href="#">
              <img class="img-fluid" src="http://via.placeholder.com/350x250" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	   <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    souithside
                  </div>
                </div>
              </div>
            </a>	
			</div>
			<div class="col-md-2 connect">
			<a class="portfolio-box" href="#">
              <img class="img-fluid" src="http://via.placeholder.com/350x250" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	   <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    souithside
                  </div>
                </div>
              </div>
            </a>	
			</div>
			<div class="col-md-2 connect">
			<a class="portfolio-box" href="#">
              <img class="img-fluid" src="http://via.placeholder.com/350x250" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	   <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    souithside
                  </div>
                </div>
              </div>
            </a>	
			</div>
		</div>
		<div class="row align-center mt-4">
		<div class="col-md-2 connect">
		<a class="portfolio-box" href="#">
              <img class="img-fluid" src="http://localhost:8888/wp-content/uploads/2017/09/placeimg_410_280_any.jpg" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	  <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Southside
                  </div>
                </div>
              </div>
            </a>
			</div>
			<div class="col-md-2 connect">
				 <a class="portfolio-box" href="#">
              <img class="img-fluid" src="http://via.placeholder.com/350x250" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	 <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Westside
                  </div>
                </div>
              </div>
            </a>
			</div>
			<div class="col-md-2 connect">
			<a class="portfolio-box" href="#">
              <img class="img-fluid" src="http://via.placeholder.com/350x250" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	              	  <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    souithside
                  </div>
                </div>
              </div>
            </a>	
			</div>
			<div class="col-md-2 connect">
			<a class="portfolio-box" href="#">
              <img class="img-fluid" src="http://via.placeholder.com/350x250" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	              	  <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    souithside
                  </div>
                </div>
              </div>
            </a>	
			</div>
			<div class="col-md-2 connect">
			<a class="portfolio-box" href="#">
              <img class="img-fluid" src="http://via.placeholder.com/350x250" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	 <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    souithside
                  </div>
                </div>
              </div>
            </a>	
			</div>
			<div class="col-md-2 connect">
			<a class="portfolio-box" href="#">
              <img class="img-fluid" src="http://via.placeholder.com/350x250" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	  <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    souithside
                  </div>

                </div>
              </div>
            </a>	
			</div>
		</div>
	</div>

</section>

<section class = "newsletter-cta">
	<div class = "container">
		<div class = "row no-gutter">
			<div class = "col-md-6">
				<h6 class= "pt-2"><?php the_field('newsletter_cta'); ?></h6>
			</div>
			<div class = "col-md-4">
				<input type = "text" class = "input" placeholder="Enter Your Email">
				<span class="underline"></span>
			</div>
			<div class = "col-md-2">
				<button class = "btn btn-secondary"><?php the_field('newsletter_button'); ?></button>
			</div>
		</div>
	</div>
</section>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->
