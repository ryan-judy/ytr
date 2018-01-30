<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<?php 
$image = get_field('gallery_image_1');
$image2 = get_field('gallery_image_2');
$image3 = get_field('gallery_image_3');
$url = $image['url'];
  $title = $image['title'];
  $alt = $image['alt'];
  $caption = $image['caption'];
  $url2 = $image2['url'];
  $title2 = $image2['title'];
  $alt2 = $image2['alt'];
  $caption2 = $image2['caption'];
$url3 = $image3['url'];
  $title3 = $image3['title'];
  $alt3 = $image3['alt'];
  $caption3 = $image3['caption'];
  // thumbnail
  $size = 'large';
  $thumb = $image['sizes'][ $size ];
  $thumb2 = $image2['sizes'][ $size ];
  $thumb3 = $image3['sizes'][ $size ];

?>

<div class = "card-custom-community">
  <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

				<header class="entry-header">

					<?php the_title( '<h1 class="entry-title text-uppercase header-brand">', '</h1>' ); ?>
					<h3 class = "header-dark text-muted"><?php the_field('community_tagline');?></h3>

				</header><!-- .entry-header -->
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class = "aspect aspect--16x9">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?php echo $thumb; ?>" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $thumb2; ?>" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?php echo $thumb3; ?>" alt="Third slide">
    </div>
  </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <i class="fa fa-chevron-left fa-3x"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <i class="fa fa-chevron-right fa-3x"></i>
    <span class="sr-only">Next</span>
  </a>
</div>

				<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

				<div class="entry-content mt-3">
	
<input class="lat" value=<?php echo(types_render_field( 'latitude', array()));?> type="hidden">
<input class="lon" value=<?php echo(types_render_field( 'longitude', array()));?> type="hidden">

					<nav class="nav nav-tabs mb-3" id="myTab" role="tablist">
  <a class="nav-item-community text-light" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><?php the_field('community_tab_1_name')?></a>
  <a class="nav-item-community text-light" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><?php the_field('community_tab_2_name')?></a>
  <a class="nav-item-community text-light" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"><?php the_field('community_tab_3_name')?></a>
</nav>
<div class="tab-content mt-4 active" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"><?php the_field('community_tab_3_content')?>

</div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"><?php the_field('community_tab_2_content')?>

</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"><?php the_field('community_tab_1_content')?>

</div>
</div>

						<?php
						wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
						'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->

</article><!-- #post-## -->
</div>
