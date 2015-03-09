<?php
/**
 * The template for displaying all single posts.
 *
 * @package Stacks
 */

get_header(); ?>

<div class="wrapper">

	<div class="container">

<div class="col-2-3">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

		<?php endwhile; // end of the loop. ?>
</div>

<div class="col-1-3 grid-pad">
	<?php get_sidebar(); ?>
</div>


<?php get_footer(); ?>
