<?php
/**
 * Blank content partial template.
 *
 * @package understrap
 */
  wp_enqueue_script( 'header', get_template_directory_uri() . '/js/header.js', array ( 'jquery' ), 1.1, true);

?>

<div class="hfeed site" id="page">
<div class = "hero-banner-image" style="background-image: url(<?php the_field('hero_image'); ?>" alt="<?php echo $image['alt']; ?>");">
	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">
    <div class="d-flex justify-content-end header-home px-5 p-2">
    <div class="mr-5 pt-2"><i class = "fa fa-phone"></i> 216-378-9618</div>
   <ul class="nav">
                    <li class="nav-item"><a href="https://www.facebook.com/youngteamsells" class="nav-link"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li class="nav-item"><a href="https://twitter.com/YoungTeamSells/" class="nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li class="nav-item"><a href="https://www.youtube.com/channel/UCJGFnReXndjiS5LVXzM8YAw" class="nav-link"><i class="fa fa-youtube fa-lg"></i></a></li>
                    <li class="nav-item"><a href="https://www.instagram.com/youngteamrealtors/" class="nav-link"><i class="fa fa-instagram fa-lg"></i></a></li>
    </ul>
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
            <a href="/" class="navbar-brand custom-logo-link home-logo" rel="home" itemprop="url"><img width="200" height="73" src="<?php the_field('white_logo'); ?>" class="navbar-brand" alt="Young Team Realtors" itemprop="logo"></a>
                        <a href="/" class="navbar-brand custom-logo-link image2" rel="home" itemprop="url"><img width="200" height="73" src="<?php the_field('color_logo'); ?>" class="navbar-brand mobile image2" alt="Young Team Realtors" itemprop="logo"></a>
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
                            <div class = "mt-4">
                                <?php the_field('sell_form');?>
                            </div>
    					  	</div>
					  	<div role="tabpanel" class="tab-pane fade" id="buzz">
            <div class = "select-drops scrollable-menu">

			          <select ng-model='minPriceSelect' class='min-price'>
            <option value='total'>Min Price</option>
            <option value='50000'>$50,000</option>
            <option value='75000'>$75,000</option>
            <option value='100000'>$100,000</option>
            <option value='125000'>$125,000</option>
            <option value='150000'>$150,000</option>
            <option value='175000'>$175,000</option>
            <option value='200000'>$200,000</option>
            <option value='225000'>$225,000</option>
            <option value='250000'>$250,000</option>
            <option value='275000'>$275,000</option>
            <option value='300000'>$300,000</option>
            <option value='325000'>$325,000</option>
            <option value='350000'>$350,000</option>
            <option value='375000'>$375,000</option>
            <option value='400000'>$400,000</option>
            <option value='425000'>$425,000</option>
            <option value='450000'>$450,000</option>
            <option value='475000'>$475,000</option>
            <option value='500000'>$500,000</option>
            <option value='550000'>$550,000</option>
            <option value='600000'>$600,000</option>
            <option value='650000'>$650,000</option>
            <option value='700000'>$700,000</option>
            <option value='750000'>$750,000</option>
            <option value='800000'>$800,000</option>
            <option value='850000'>$850,000</option>
            <option value='90000'>$900,000</option>
            <option value='950000'>$950,000</option> 
            <option value='1000000'>$1+</option>            
            <option value='2000000'>$2+</option>            
            <option value='3000000'>$3+</option>            
          </select>		  							
          <select ng-model='maxPriceSelect' class='form-control max-price'>
            <option value='total'>Max Price</option>
            <option value='50000'>$50,000</option>
            <option value='75000'>$75,000</option>
            <option value='100000'>$100,000</option>
            <option value='125000'>$125,000</option>
            <option value='150000'>$150,000</option>
            <option value='175000'>$175,000</option>
            <option value='200000'>$200,000</option>
            <option value='225000'>$225,000</option>
            <option value='250000'>$250,000</option>
            <option value='275000'>$275,000</option>
            <option value='300000'>$300,000</option>
            <option value='325000'>$325,000</option>
            <option value='350000'>$350,000</option>
            <option value='375000'>$375,000</option>
            <option value='400000'>$400,000</option>
            <option value='425000'>$425,000</option>
            <option value='450000'>$450,000</option>
            <option value='475000'>$475,000</option>
            <option value='500000'>$500,000</option>
            <option value='550000'>$550,000</option>
            <option value='600000'>$600,000</option>
            <option value='650000'>$650,000</option>
            <option value='700000'>$700,000</option>
            <option value='750000'>$750,000</option>
            <option value='800000'>$800,000</option>
            <option value='850000'>$850,000</option>
            <option value='90000'>$900,000</option>
            <option value='950000'>$950,000</option> 
            <option value='1000000'>$1+</option>            
            <option value='2000000'>$2+</option>            
            <option value='3000000'>$3+</option>            
          </select>
          <select ng-model='bedsSelect' class='form-control beds'>
            <option value='total'>Beds</option>
            <option value='1'>1+</option>
            <option value='2'>2+</option>
            <option value='3'>3+</option>
            <option value='4'>4+</option>
            <option value='5'>5+</option>
            <option value='6'>6+</option>
          </select>
          <select ng-model='bathsSelect' class='form-control baths'>
            <option value='total'>Baths</option>
            <option value='1'>1+</option>
            <option value='1.5'>1.5+</option>
            <option value='2'>2+</option>
            <option value='2.5'>2.5+</option>
            <option value='3'>3+</option>
            <option value='3.5'>3.5+</option>
            <option value='4'>4+</option>
            <option value='4.5'>4.5+</option>
            <option value='5'>5+</option>            
          </select>
      </div>
           <button class="btn btn-primary btn-md btn-search" type="submit" style="outline: none; cursor: inherit;" data-selector="a.btn, button.btn, button"><?php the_field('buy_form_button');?></button>
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
	<div class = "featured-listings-car">
<div class="container-fluid">
	<h2 class = "mb-4">Featured Listings</h2>
    <div id="carouselExample2" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-100 mx-2" role="listbox">
				

             <!-- Carousel items -->
<?php
$count2=0;
 $loop = new WP_Query( array( 'post_type' => 'featured-listing', 'posts_per_page' => 10) ); ?>
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		               <div class="carousel-item col-md-4<?php if($count2==0) : echo ' active'; endif; ?>">

		   <div class="img-fluid d-block card-custom-listing">
	
        	<a href="<?php the_permalink(); ?>">
        				<?php 
			$photosValues = get_post_meta( $post->ID, 'listing_photos');
			$first = true;
				foreach ( $photosValues as $photoItem) { 
				foreach ( $photoItem as $photoID) { 
					if ( $first )
   					 {				
        				$photoURL = wp_get_attachment_url($photoID); // gets photo URL
						echo "<img src=" . $photoURL . ">"; 
						$first = false;
   					 }	
					
				} 
			}
			?>
			<h4 class = "text-dark mt-2"><?php echo get_the_title(); ?></h4>
        	<?php $price = get_post_meta(get_the_ID(),'price',true);?>
			$<?php echo $price ?>
			                </div></a>
            </div>
<?php $count2++; ?>
<?php endwhile; wp_reset_query(); ?>

        </div>
        <a class="carousel-control-prev" href="#carouselExample2" role="button" data-slide="prev">
            <i class="fa fa-chevron-left fa-lg text-muted"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample2" role="button" data-slide="next">
            <i class="fa fa-chevron-right fa-lg text-muted"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
</div>
</section>




		<div class = "row">
			<div class = "col-md-6 text-left component-red">
				<div class = "container">
					<div class ="row px-3">
						<div class = "col-md-2">
						</div>
						<div class = "col-md-8">
							<h2 class ="text-light"><?php the_field('sell_heading'); ?></h2>
							<p class= "text-light"><?php the_field('sell_cta'); ?></p>	
							<a href="<?php the_field('team_button_page'); ?>" class="btn btn-primary btn-lg active header mt-4" role="button" aria-pressed="true"><?php the_field('sell_button_cta'); ?></a>
						</div>	
						<div class = "col-md-2">
						</div>					
					</div>
				</div>
			</div>
			<div class = "col-md-6 text-left component-dark">
				<div class = "container">
					<div class ="row px-3">
						<div class = "col-md-2">
						</div>
						<div class = "col-md-8">
							<h2 class ="text-light"><?php the_field('buy_heading'); ?></h2>
							<p class= "text-light"><?php the_field('buy_cta'); ?></p>	
							<a href="<?php the_field('team_button_page'); ?>" class="btn btn-primary btn-lg active header mt-4" role="button" aria-pressed="true"><?php the_field('buy_button_cta'); ?></a>
						</div>	
						<div class = "col-md-2">
						</div>					
					</div>
				</div>
			</div>

		</div>

<section class = "component team">
	<div class = "container">
		<div class = "row">
			<div class = "col-md-6">
				<h2 class = "header-dark"><?php the_field('team_header'); ?></h2>
				<h4 class="pt-3 text-dark"><?php the_field('team_subhead'); ?></h4>
				<a href="<?php the_field('team_button_page'); ?>" class="btn btn-primary btn-lg active header mt-4" role="button" aria-pressed="true"><?php the_field('team_button'); ?></a>
			</div>
			<div class = "col-md-6 text-center">
				<img class="team-image" src="<?php the_field('team_image'); ?>" alt="<?php echo $image['alt']; ?>" />
			</div>			
		</div>
	</div>
</section>

<section class = "reviews component">
	<div class = "container">
		<div class = "row">
			<div class = "col-md-6">
				<?php the_field('testimonial_video') ?>
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
						Combined Years of Experience
					</div>
				</div>
					<h4 class="pt-3 text-dark"><?php the_field('client_subhead'); ?></h4>
					<div class = testimonial>
						<?php the_field('client_testimonials_content') ?>
					</div>
					<a href="<?php the_field('client_review_button_page'); ?>" class="btn btn-primary btn-lg active header" role="button" aria-pressed="true"><?php the_field('client_review_button'); ?></a>
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
				<h4 class="pt-1 communities-subhead"><?php the_field('communities_subhead'); ?></h4>
			</div>	
			<div class ="col-md-1">
			</div>
		</div>
		<div class="row no-gutter mt-4">
          <div class="col-lg-3 col-sm-6">
            <a class="portfolio-box" href="#">
              <img class="img-fluid community" src="<?php the_field('communities_module_1_image'); ?>" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    <?php the_field('communities_module_1_caption'); ?>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-sm-6">
            <a class="portfolio-box" href="#">
              <img class="img-fluid community" src="<?php the_field('communities_module_2_image'); ?>" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    <?php the_field('communities_module_2_caption'); ?>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-sm-6">
            <a class="portfolio-box" href="#">
              <img class="img-fluid community" src="<?php the_field('communities_module_3_image'); ?>" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    <?php the_field('communities_module_3_caption'); ?>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-sm-6">
            <a class="portfolio-box" href="#">
              <img class="img-fluid community" src="<?php the_field('communities_module_4_image'); ?>" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    <?php the_field('communities_module_4_caption'); ?>
                  </div>
                </div>
              </div>
            </a>
          </div>          
        </div>
	</div>
</section>

<section class = "component-trans">
	<div class = "container mb-5">
		<div class="row">
			<div class = "col-md-12 text-center">
				<h2 class = "header-dark mb-5"><?php the_field('social_heading'); ?></h2>
			</div>
		</div>
		<div class = "row align-center">
			<div class="col-md-2 connect">
				<a class="portfolio-box" href="<? the_field('module_1_link') ?>">
              <img class="img-fluid" src="<?php the_field('module_1_image'); ?>" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	              	  <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    <?php the_field('module_1_caption'); ?>
                  </div>
                </div>
              </div>
            </a>
			</div>
			<div class="col-md-2 connect">
			<a class="portfolio-box" href="<? the_field('module_2_link') ?>">
              <img class="img-fluid" src="<?php the_field('module_2_image'); ?>" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	   <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    <?php the_field('module_2_caption'); ?>
                  </div>
                </div>
              </div>
            </a>
			</div>
			<div class="col-md-2 connect">
			<a class="portfolio-box" href="<? the_field('module_3_link') ?>">
              <img class="img-fluid" src="<?php the_field('module_3_image'); ?>" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	    <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                     <?php the_field('module_3_caption'); ?>
                  </div>
                </div>
              </div>
            </a>	
			</div>
			<div class="col-md-2 connect">
			<a class="portfolio-box" href="<? the_field('module_4_link') ?>">
              <img class="img-fluid" src="<?php the_field('module_4_image'); ?>" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	   <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                     <?php the_field('module_4_caption'); ?>
                  </div>
                </div>
              </div>
            </a>	
			</div>
			<div class="col-md-2 connect">
			<a class="portfolio-box" href="<? the_field('module_5_link') ?>">
              <img class="img-fluid" src="<?php the_field('module_5_image'); ?>" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	   <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                     <?php the_field('module_5_caption'); ?>
                  </div>
                </div>
              </div>
            </a>	
			</div>
			<div class="col-md-2 connect">
			<a class="portfolio-box" href="<? the_field('module_6_link') ?>">
              <img class="img-fluid" src="<?php the_field('module_6_image'); ?>" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	   <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                     <?php the_field('module_6_caption'); ?>
                  </div>
                </div>
              </div>
            </a>	
			</div>
		</div>
		<div class="row align-center mt-4">
		<div class="col-md-2 connect">
		<a class="portfolio-box" href="<? the_field('module_7_link') ?>">
              <img class="img-fluid" src="<?php the_field('module_7_image'); ?>" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	  <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                     <?php the_field('module_7_caption'); ?>
                  </div>
                </div>
              </div>
            </a>
			</div>
			<div class="col-md-2 connect">
				 <a class="portfolio-box" href="<? the_field('module_8_link') ?>">
              <img class="img-fluid" src="<?php the_field('module_8_image'); ?>" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	 <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                     <?php the_field('module_8_caption'); ?>
                  </div>
                </div>
              </div>
            </a>
			</div>
			<div class="col-md-2 connect">
			<a class="portfolio-box" href="<? the_field('module_9_link') ?>">
              <img class="img-fluid" src="<?php the_field('module_9_image'); ?>" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	              	  <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                     <?php the_field('module_9_caption'); ?>
                  </div>
                </div>
              </div>
            </a>	
			</div>
			<div class="col-md-2 connect">
			<a class="portfolio-box" href="<? the_field('module_10_link') ?>">
              <img class="img-fluid" src="<?php the_field('module_10_image'); ?>" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	              	  <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                     <?php the_field('module_10_caption'); ?>
                  </div>
                </div>
              </div>
            </a>	
			</div>
			<div class="col-md-2 connect">
			<a class="portfolio-box" href="<? the_field('module_11_link') ?>">
              <img class="img-fluid" src="<?php the_field('module_11_image'); ?>" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	 <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    <?php the_field('module_11_caption'); ?>
                  </div>
                </div>
              </div>
            </a>	
			</div>
			<div class="col-md-2 connect">
			<a class="portfolio-box" href="<? the_field('module_12_link') ?>">
              <img class="img-fluid" src="<?php the_field('module_12_image'); ?>" alt="" style = "width: 100%;">
              <div class="portfolio-box-caption">
              	  <div class="project-icon">
                    <i class = "fa fa-user"></i>
                  </div>
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                     <?php the_field('module_12_caption'); ?>
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
                <?php echo do_shortcode("[acme_mailchimp_form]"); ?>

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

<script type="text/javascript">

$('#carouselExample2').on('slide.bs.carousel', function (e) {

    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $('.carousel-item').length;
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});

$(function($){
	$('#mailchimp').submit(function(){
		var mailchimpform = $(this);
		$.ajax({
			url:mailchimpform.attr('action'),
			type:'POST',
			data:mailchimpform.serialize(),
			success:function(data){
				alert(data);
			}
		});
		return false;
	});
});
</script>