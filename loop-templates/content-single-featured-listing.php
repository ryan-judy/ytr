<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */
?>
<?php $images = get_field('listing_photos');?>
<?php $image = $images[0]; ?>
<div class = "hero-interior listings" style="background-image: url(<?php echo $image['url'] ?>);">
    <div class = "header-overlay">
    </div>  
    <div class = "row">
        <div class = "col-sm-12 text-center" style="position: absolute;">
            <div class = "hero-interior-cta-center">
            <?php the_title( '<h1 class="address text-uppercase">', '</h1>' ); ?>
        </div>
                <div class="row">
                    <div class = "col-sm-12 text-center">
                <a href="#about" class="btn btn-primary btn-lg active header mt-4 js-scroll-trigger" role="button" aria-pressed="true">Learn More</a>
                <a data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-lg active header mt-4 js-scroll-trigger" role="button" aria-pressed="true">Request a Showing</a>                    
                </div>
                </div>
            </div>
        </div>  
    </div>
</div>  
<div class="wrapper" id="single-wrapper">
            <!-- Do the left sidebar check -->

<main class="site-main" id="main">

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
<section class = "component-red" id= "about">
    <div class = "container">
        <div class = "row">
            <div class = "col-md-12">

                    <h3 class = "listing-tagline text-center text-light"><?php the_field('tagline')?></h3>

                <div class="entry-content mt-5">
                    <div class = "row text-center">
                        <div class = "col-md-2">
                            <p class = "text-white">PRICE</p>
                            <h3 class="text-white">$<?php the_field('price')?></h3>
                        </div>
                        <div class = "col-md-2">
                            <p class = "text-white">BEDS</p>
                            <h3 class="text-white"><?php the_field('beds')?></h3>
                        </div>
                        <div class = "col-md-2">
                            <p class = "text-white">BATHS</p>
                            <h3 class="text-white"><?php the_field('baths')?></h3>
                        </div>
                        <div class = "col-md-2">
                            <p class = "text-white">SQ. FT</p>
                            <h3 class="text-white"><?php the_field('sqft')?></h3>
                        </div>
                        <div class = "col-md-2">
                            <p class = "text-white">ACRES</p>
                            <h3 class="text-white"><?php the_field('acres')?></h3>
                        </div>
                        <div class = "col-md-2">
                            <p class = "text-white">YBT</p>
                            <h3 class="text-white"><?php the_field('year-built')?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
 <div class="row no-gutter text-center mt-3">
    <div class="col-lg-12 offset-lg-2 my-5" id="slider">
        <h3 class = "mb-4">Gallery</h3>
<?php 
/* SLIDER CUSTOM FIELD FOR HOMEPAGE */
$images = get_field('listing_photos');
$count=0;
$count1=0;
$count2=0;
if($images) : ?>
<div class="col-lg-12 offset-lg-2" id="slider">
    <div id="carousel" class="carousel slide">

      <!-- Wrapper for slides -->
      <div class="carousel-inner">
        <?php foreach( $images as $image ): ?>
            <div class="item<?php if($count1==0) : echo ' active'; endif; ?> carousel-item">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid gallery-photo" />                
            </div><!-- item -->
        <?php 
        $count1++;        
        endforeach;         
        ?>       
      </div><!-- carousel inner -->
            <div class = gallery-slider>

  <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
    <i class="fa fa-chevron-left fa-3x text-brand"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
    <i class="fa fa-chevron-right fa-3x text-brand"></i>
    <span class="sr-only">Next</span>
  </a>
              </div>

      <!-- Indicators -->

           <div id="myCarousel2" class="carousel slide">
             <!-- Carousel items -->
                <div class="carousel-inner">
            
                    <?php $chunks = array_chunk($images, 3); ?>
                    <?php foreach($chunks as $chunk): ?>

                    <div class="carousel-item<?php if($count2==0) : echo ' active'; endif; ?>">
                        <ul class="carousel-indicators list-inline mt-3">
                        
                        <?php foreach($chunk as $image): ?>  

                            <li class="list-inline-item">
                                <a id="carousel-selector-<?php echo $count; ?>" data-target="#carousel" data-slide-to="<?php echo $count; ?>" <?php if($count==0) : ?>class="selected"<?php endif; ?>>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="img-fluid listing-photo"/>
                        <?php
                        $count++;
                        $count2++;
                        endforeach; ?>
                                </a> 
                            </li>

                    </div>
                    <?php 
                    endforeach; ?>
                        </ul>
                        <div class = "thumbnail-slider">
                        <a class="carousel-control-prev" href="#myCarousel2" role="button" data-slide="prev"><i class="fa fa-angle-left fa-3x"></i></a>
                        <a class="carousel-control-next" href="#myCarousel2" role="button" data-slide="next"><i class="fa fa-angle-right fa-3x"></i></a>
                        </div>
                </div>
            </div>
        </div>

    </div><!-- #carousel -->
</div><!--#slider-->
<?php endif; ?>
</div>
<div class = "container">
<div class = "row text-center mb-5">
    <div class = "col-md-6">
        <h3 class = "text-dark mb-4">Virtual Tour</h3>
        <?php the_field('matterport_link'); ?>
    </div>
    <div class = "col-md-6">
        <h3 class = "text-dark mb-4">Video Guide</h3>
        <?php the_field('matterport_link_copy'); ?>
        
    </div>
</div>
</div>
                </div><!-- .entry-content -->
            </div>
                <section class= "component">
<div class = "container">
<div class = "row text-center">
<div class = "col-md-12">

    <h3 class = "text-center">About This Home</h3>
    <div class = listing-description>
      <?php the_field('description'); ?>
    </div>
                    <a data-toggle="modal" data-target="#exampleModal" class="btn btn-primary btn-lg active header mt-4 to-the-top" role="button" aria-pressed="true">Request a Showing</a>

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

</article><!-- #post-## -->
</main>

<div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Request a Showing for <?php the_title()?></h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class = "component-form">
                <?php echo do_shortcode("[contact-form-7 id='1279' title='Showing Request]"); ?>
          </div>
     </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>