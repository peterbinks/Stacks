<?php
/*
Template Name: No Sidebar Page
*/

get_header(); ?>

<div class="wrapper">

	<div class="container">

		<div class="page-heading">
		<h2><?php the_title(); ?></h2>
		</div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
