<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

get_header();
?>

<?php
$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<div class="wrapper" id="archive-wrapper">
<section class = "component component-pricing">


  <div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">



      <!-- Do the left sidebar check -->
      
      <main class="site-main" id="main">


        <?php if ( have_posts() ) : ?>

          <header class="page-header">
            <h1 class="page-title">Our <?php $terms = get_the_terms($post->ID, 'status');foreach($terms as $term){echo $term->name;} ?> Listings</h1>
          </header><!-- .page-header -->
          <div class = "row">
          <?php /* Start the Loop */ ?>
          <?php while ( have_posts() ) : the_post(); ?>

            <?php

            /*
             * Include the Post-Format-specific template for the content.
             * If you want to override this in a child theme, then include a file
             * called content-___.php (where ___ is the Post Format name) and that will be used instead.
             */
            get_template_part( 'loop-templates/content', 'featured-listing' );
            ?>

          <?php endwhile; ?>
        </div>

        <?php else : ?>

          <?php get_template_part( 'loop-templates/content', 'none' ); ?>

        <?php endif; ?>

      </main><!-- #main -->

      <!-- The pagination component -->
      <?php understrap_pagination(); ?>

    </div><!-- #primary -->

    <!-- Do the right sidebar check -->

  </div> <!-- .row -->

  </div> <!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->
</section>
<?php get_footer(); ?>


