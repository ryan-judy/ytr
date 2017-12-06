<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<section id="contact" style="">
            <div class="container">
                <div class="row">
                  <div class= "col-md-8">
                    <div class="about_our_company" style="margin-bottom: 20px;">
                        <h1 style="color:#fff;">Write Your Message</h1>
                        <p style="color:#fff;">Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                    </div>
                  </div>
                  <div class= "col-md-4">
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                    <?php the_field('contact_form'); ?>
                    </div>
                    <div class="col-md-4 pl-5">
                        <p style="color:#fff;">
                            <strong><i class="fa fa-map-marker"></i> Address</strong><br>
                            <?php the_field('address');?>
                        </p>
                        <p style="color:#fff;"><strong><i class="fa fa-phone"></i> Phone Number</strong><br>
                            <?php the_field('number');?></p>
                        <p style="color:#fff;">
                            <strong><i class="fa fa-envelope"></i>  Email Address</strong><br>
                            <?php the_field('email');?></p>
                        <p></p>
                    </div>
                </div>
            </div>
</section>

</div>
  <div id="google-container" style="height:300px;"></div>
  <div id="cd-zoom-in"></div>
  <div id="cd-zoom-out"></div>
</article>

<input class = "lat" value = "<?php the_field('address_lat');?>" type="hidden">
<input class = "lon" value = "<?php the_field('address_lon');?>" type="hidden">
<input class = "loc" value = "<?php the_field('business_name');?>" type="hidden">

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