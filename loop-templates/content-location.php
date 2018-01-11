<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */


?>

<input class="loc" value="<?php the_title()?>" type="hidden">
<input class="lat" value=<?php echo(types_render_field( 'latitude', array()));?> type="hidden">
<input class="lon" value=<?php echo(types_render_field( 'longitude', array()));?> type="hidden">
