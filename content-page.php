<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Stacks
 */
?>
		

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'stacks' ),
				'after'  => '</div>',
			) );
		?>
