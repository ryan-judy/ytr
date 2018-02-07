<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

<footer class="footer pb-2">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="row">
                    <div class="col-6">
                    <img src="/wp-content/uploads/2018/01/KellerWilliams_Greater_Cleveland_Logo_rev-W.png" class="mb-3">
                 <ul class="nav nav-footer mt-5">
                    <li class="nav-item"><a href="https://www.facebook.com/youngteamsells" class="nav-link"><i class="fa fa-facebook fa-lg"></i></a></li>
                    <li class="nav-item"><a href="https://twitter.com/YoungTeamSells/" class="nav-link"><i class="fa fa-twitter fa-lg"></i></a></li>
                    <li class="nav-item"><a href="https://www.youtube.com/channel/UCJGFnReXndjiS5LVXzM8YAw" class="nav-link"><i class="fa fa-youtube fa-lg"></i></a></li>
                    <li class="nav-item"><a href="https://www.instagram.com/youngteamrealtors/" class="nav-link"><i class="fa fa-instagram fa-lg"></i></a></li>
                </ul>
                    </div>
                    <div class="col-6 pl-4">
                        <ul class="list-unstyled">
                            <li><a href="/about/">About</a></li>
                            <li><a href="/about/agents/">Agents</a></li>
                            <li><a href="/about/client-testimonials/">Testimonials</a></li>
                            <li><a href="/contact/">Contact</a></li>
                            <li><a href="http://www.clevelandhotproperties.com/">Search Homes For Sale</a></li>
                            <li><a href="/featured-listings/">Featured Listings</a></li>
                            <li><a href="https://www.itrustryan.com">Guaranteed Sale Program</a></li>
                            <li><a href="http://www.clevelandhotproperties.com/what-is-my-home-worth">Home Evaluaton</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 footer-center">
                <h2 class="text-md-right">Contact Us</h5>
                <p class="text-md-right">
                216-378-9618<br>
                info@youngteamrealtors.com<br>
                29225 Chagrin Blvd. #300,<br> Pepper Pike, OH 44122<br>
                <hr>
            </div>
            <div class="col-md-4">
            <?php echo do_shortcode("[contact-form-7 id='1278' title='Footer Form']");?>
            </div>
        </div>
    </div>
</footer>


</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

