<?php get_header();?>

	<div class="container">
		
	<div class="box">
		<h3>Search results : </h3>
	</div>

		<?php if(have_posts()) : ?>

			<ul>
			<?php while(have_posts()) : the_post(); ?>
				<li><?php the_title();?></li>
			<?php endwhile; ?>
			</ul>

		<?php else : ?>
			<h3>There is not match</h3>	
		 	<?php endif;?>

		 	<?php global $wp_query;
				if($wp_query->max_num_pages > 1) : ?>
				<div class="box align-center portfolio-nav">
					<ul class="inline">
						<li class="btn"><?php previous_posts_link('&larr; Previous Page',$wp_query->max_num_pages);?></li>
						<li class="btn"><?php next_posts_link('Next Page &rarr;',$wp_query->max_num_pages);?></li>
					</ul>
				</div> <!-- end cta -->
			<?php endif; ?>
	</div>

<?php get_footer();?>