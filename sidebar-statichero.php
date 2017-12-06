<?php
/**
 * Static hero sidebar setup.
 *
 * @package understrap
 */

$container   = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'statichero' ) ) : ?>

	<!-- ******************* The Hero Widget Area ******************* -->

	<div class="wrapper" id="wrapper-static-hero">

				<div class = "container">
					<div class="row">
						<div class = "col-lg-7">
					
							<?php dynamic_sidebar( 'statichero' ); ?>

						</div>
					</div>
				</div>

	</div><!-- #wrapper-static-hero -->

<?php endif; ?>
