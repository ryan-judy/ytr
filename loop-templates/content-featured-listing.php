
<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

 <section class="listing-page-builing">
      <div class="container">
         <div class="row">
               <div class="col-xl-3">
				  <?php $images = get_field('listing_photos');?>
              <?php $image = $images[0]; ?>
				  <a href= <?php
               the_permalink(); ?>><div style="background: url(<?php echo $image['url'] ?>) 0 0 no-repeat; height:35vh; background-size:cover; 
				  background-position:center; border:#ccc 1px solid"></div>	</a>
				</div>
               <div class="col-xl-6">
                  <h4><strong><a href=<?php
					the_permalink()?>><?php the_title()?></a></strong>
                  </h4>
                  <div class="row poperty-details-iob text-center">
                     <div class = "col-xl-3 py-2"><span class = "price">$<?php the_field('price')?></span><br/>
                     </div>
                      <div class = "col-xl-3"><span><?php the_field('sqft')?></span><br/>
                       Sq Ft
                     </div>
                      <div class = "col-xl-3"><span><?php the_field('beds')?></span><br/>
                        Beds
                     </div>
                     <div class = "col-xl-3"><span><?php the_field('baths')?></span><br/>
                        Baths
                     </div>
                  </div>
                  <?php $desc = get_field('description');?>
                  <?php $truncated = substr($desc, 0, 140) . '...'?>
                  <p class= "mt-3">
                     <?php echo $truncated ?>
                     <a href=<?php
               the_permalink()?>>More</a>
                  </p>
               </div>
               <div class="col-xl-3">
                  <ul class="cls-for-btn-listing">
                     <li>
                        <a href=<?php
					the_permalink(); ?>>View Details</a>
                        <a class = "text-light" data-toggle="modal" data-target="#exampleModal">Schedule a Showing</a>
						 </li>
						    
                  </ul>
						
                 
               </div>
            </div>
      </div>
   </section>

