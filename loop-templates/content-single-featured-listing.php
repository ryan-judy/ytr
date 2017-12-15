<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>

<div class = "hero-interior listings" style="background-image: url(<?php the_field('hero'); ?>);">
    <div class = "header-overlay">
    </div>  
    <div class = "row">
        <div class = "col-sm-12 text-center" style="position: absolute;">
            <div class = "hero-interior-cta-center">
            <?php the_title( '<h1 class="entry-title text-uppercase">', '</h1>' ); ?>
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
<div class="wrapper" id="single-wrapper">
            <!-- Do the left sidebar check -->

            <main class="site-main" id="main">

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

    <div class = "container mt-4">
        <div class = "row">
            <div class = "col-md-12">

                <header class="entry-header">

                    <h3 class = "header-dark text-center">Tagline</h3>

                </header><!-- .entry-header -->

                <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

                <div class="entry-content mt-5">
                    <div class = "row text-center">
                        <div class = "col-md-2">
                            PRICE
                        </div>
                        <div class = "col-md-2">
                            BEDS
                        </div>
                        <div class = "col-md-2">
                            BATHS
                        </div>
                        <div class = "col-md-2">
                            SQ FT
                        </div>
                        <div class = "col-md-2">
                            ACRES
                        </div>
                        <div class = "col-md-2">
                            YBT
                        </div>
                    </div>

                    <div class="row">
        <div class="col-lg-12 offset-lg-2" id="slider">
<?php 
/* SLIDER CUSTOM FIELD FOR HOMEPAGE */
$images = get_field('listing-photos');
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
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />                
            </div><!-- item -->
        <?php 
        $count1++;        
        endforeach;         
        ?>       
      </div><!-- carousel inner -->

                            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>  

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
    <?php         $count++;
                    $count2++;

 endforeach; ?>
                                </a> 
            </li>

  </div>
        <?php 


        endforeach; ?>
      </ul>

  <a class="carousel-control-prev" href="#myCarousel2" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel2" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
</div>
</div>

    </div><!-- #carousel -->
</div><!--#slider-->
<?php endif; ?>


</div>
</div>
<div class = "row text-center">
    <div class = "col-md-6">
        <iframe width='100%' height='400' src=<?php the_field('matterport-link'); ?> frameborder='0' allowfullscreen></iframe>
    </div>
    <div class = "col-md-6">
        <iframe width="100%" height="400" src=<?php the_field('video-link'); ?> frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
        
    </div>
</div>
<div class = "row">
                    <?php the_content(); ?>


</div>


                        <?php
                        wp_link_pages( array(
                        'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
                        'after'  => '</div>',
                        ) );
                    ?>
                </div><!-- .entry-content -->
            </div>
        </div>
    </div>
</article><!-- #post-## -->



</div><!-- Container end -->
