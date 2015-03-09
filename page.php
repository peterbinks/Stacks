<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Stacks
 */

get_header(); ?>

<div class="wrapper">

	<div class="container">

		<div class="page-heading">
		<h2><?php the_title(); ?></h2>
		</div>

	<div class="col-2-3">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

	</div><!-- .col-2-3 -->


	<div class="col-1-3 grid-pad">
	<?php get_sidebar(); ?>
	</div>
	
<?php get_footer(); ?>
