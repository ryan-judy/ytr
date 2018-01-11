<?php
/**
 * Content empty partial template.
 *
 * @package understrap
 */

?>

<h1><?php the_title(); ?></h1>

<?php if( get_field('sub_heading') ): ?>
    <h2><?php the_field('sub_heading'); ?></h2>
<?php endif; ?>

<div class="hero">
    <?php $image = get_field('hero_banner_image'); ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
</div>

<?php if( have_rows('event') ): ?>
    <ul>
    <?php while( have_rows('event') ): the_row(); ?>
        <li>
            <a href="<?php the_sub_field('url'); ?>"><?php the_sub_field('title'); ?></a>
