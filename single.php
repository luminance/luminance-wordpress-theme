<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h1 class="entry-title"><?php the_title(); ?></h1>

			<div class="entry-content">
				
				<?php the_content(); ?>

			</div>
			
			<?php edit_post_link('Edit this entry','','.'); ?>
			
		</article>

	<?php endwhile; endif; ?>
	

<?php get_footer(); ?>