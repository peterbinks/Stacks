<?php get_header (); ?>

<?php putRevSlider("Home Page") ?>

<div class="wrapper">

	<div class="container">

	<div class="col-1">
	<!-- Content From Home Page -->
	<?php if ( have_posts() ): ?>
	<?php while ( have_posts() ) : the_post(); ?>
	  

	      <?php the_content(); ?>

	<?php endwhile; ?>
	<?php endif; ?>
	<?php wp_reset_query() ?>
	</div>

	<div class="col-1">

		<h3 class="box-header"><a href="/news">Library News</a></h3>

	<?php query_posts( 'category_name=news&posts_per_page=3' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<div class="news-item">
			<div class="news-title">
			<h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			</div>
			<div class="news-content">
				<?php the_excerpt(); ?> 
			</div>
		</div>
	<?php endwhile; ?>
	</div>

	<div class="col-2-3">
	<h3 class="box-header"><a href="/events">Upcoming Events</a></h3>

	<?php
	global $post;

	$get_posts = tribe_get_events(array('posts_per_page'=> 3, 'start_date'=>today,) );

	foreach($get_posts as $post) { setup_postdata($post);
	        ?>
	        
			<?php if ( has_post_thumbnail() ) { ?>
			
				<div class="thumbList">
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('thumbnail', array('class' => 'scale-with-grid attachment-thumbnail')); ?></a>
				</div>

				<div class="event-time">
					<span class="front-start-time"><?php echo tribe_get_start_date( $post->ID, false, 'Y M j g:i a' ); ?> </span>
				</div>
	            
				<div class="event-excerpt">
	                <h4 class="event-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<?php the_excerpt(); ?>
				</div>
	            
	            <div class="clear"></div>
			
			<?php } else { ?>
				<div class="event">
							<div class="event-time">
							<span class="front-start-time"><?php echo tribe_get_start_date( $post->ID, false, 'M j' ); ?> </span>
							</div>

							<div class="event-details">
							<h4 class="event-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

							<div class="event-content">
								<?php the_excerpt(); ?>
							</div>
							</div>
	       		</div>
	            <div class="clear"></div>
			
			<?php } ?>
		
				
		<?php } //endforeach ?>
	    <?php wp_reset_query(); ?>
	</div>

	<div class="col-1-3">
	<h3 class="box-header"><a href="/new-items">New Items</a></h3>

	<ul class="tabs" data-tab>
	  <li class="tab-title active"><a href="#books">Books</a></li>
	  <li class="tab-title"><a href="#albums">Albums</a></li>
	  <li class="tab-title"><a href="#movies">Movies</a></li>
	</ul>

<div class="tabs-content">
	<div class="content active" id="books">
	<?php $the_query = new WP_Query(array('post_type' => 'new_books', 'posts_per_page'=> 6, ) ); ?>

	<?php if ( $the_query->have_posts() ) : ?>

		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="new-item">

				<div class="cover-image">
					
					<img src="<?php the_field('cover_image'); ?>" />

					<div class="item-info">
					<div class="title">
						<span class="item-title"><?php the_title(); ?></span>
					</div>
	            
					<div class="author-artist">
		                <span><?php the_field('author_artist'); ?></span>
					</div>
					</div>

				</div>

				
	    </div>
	            <div class="clear"></div>

	    <?php endwhile; ?>

		<?php wp_reset_postdata(); ?>

		<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	<?php endif; ?>
			
	</div>

</div> <!-- .tabs-content -->

</div>

<?php get_footer(); ?>