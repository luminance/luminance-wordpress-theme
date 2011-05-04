<?php get_header(); ?>

<?php
if ( is_home() ) {
     if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php 
				
				echo get_the_post_thumbnail($id, 'full', array(
															
															'class'	=> "attachment-$size",
															'alt'	=> trim(strip_tags( $post->post_title )),
															'title'	=> trim(strip_tags( $post->post_title )),
														)); 
			?>
			


			<div class="entry">
				<?php the_content(); ?>
			</div>

			<footer class="postmetadata">
				
			</footer>

		</article>

	<?php endwhile; ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; 

} else {?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<div class="entry">
				<?php the_content(); ?>
			</div>

		</article>

	<?php endwhile; ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif;

}
?>

<?php get_footer(); ?>
