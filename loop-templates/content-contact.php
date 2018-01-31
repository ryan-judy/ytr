<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */
  wp_enqueue_script( 'google-maps-contact', get_template_directory_uri() . '/js/google-maps-contact.js', array ( 'jquery' ), 1.1, true);


?>
<div class = "hero-interior" style="background-image: url(<?php the_field('hero'); ?>);">
  <div class = "header-overlay">
  </div>  
  <div class = "row">
    <div class = "col-sm-12 text-center" style="position: absolute;">
      <div class = "hero-interior-cta-center mt-5">
      <?php the_field('hero_cta_interior'); ?>
      </div>
    </div>  
  </div>
</div>  

       <section class = "component-form-2">    
       <div class = "container">     
                <div class="row">
                    <div class="col-md-8 mt-5">
                              <div class = "component-form-2">
                                <div class="about_our_company" style="margin-bottom: 20px;">
                        <h1> <?php the_field('contact_header'); ?></h1>
                        <p> <?php the_field('contact_subhead'); ?></p>
                    </div>
                                    <?php the_field('contact_form'); ?>
                                  </div>
                     </div>
                    <div class="col-md-4 mt-5">
                        <p>
                            <strong><i class="fa fa-map-marker"></i> Address</strong><br>
                            <?php the_field('address');?>
                        </p> 
                        <p><strong><i class="fa fa-phone text-muted"></i> Phone Number</strong><br>
                            <?php the_field('contact_number');?></p>
                        <p>
                            <strong><i class="fa fa-envelope"></i>  Email Address</strong><br>
                            <?php the_field('contact_email');?></p>
                        <p></p>
                          <div id="google-container" style="height:250px;"></div>
  <div id="cd-zoom-in"></div>
  <div id="cd-zoom-out"></div>
                </div>
              </div>
              </div>

  
<input class = "lat" value = "<?php the_field('address_lat');?>" type="hidden">
<input class = "lon" value = "<?php the_field('address_lon');?>" type="hidden">
<input class = "loc" value = "<?php the_field('business_name');?>" type="hidden">
</div>
<script>
var newArr = [];
var locations = [[1]];

for(var i=0;i<newArr.length;i++){
  console.log([i+1])
  locations.push([i+1]);
}


$('.lon').each(function(index,data) {
   var lon = $(this).val().trim();
   console.log(lon);
    locations[index].unshift(lon);
});

$('.lat').each(function(index,data) {
   var lat = $(this).val().trim();
   console.log(lat);
    locations[index].unshift(lat);
});

$('.loc').each(function(index,data) {
   var loc = $(this).val().trim();
   console.log(loc);
    locations[index].unshift(loc);
});

console.log(locations)
  
</script>