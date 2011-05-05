<?php get_header(); ?>

<?php


     if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php 
				if(has_post_thumbnail()) {
					echo get_the_post_thumbnail($id, 'full', array(
															
															'class'	=> "attachment-$size",
															'alt'	=> trim(strip_tags( $post->post_title )),
															'title'	=> trim(strip_tags( $post->post_title )),
														)); 
				}
			?>
			


			<div class="entry">
				<?php if(is_front_page()) {
					
					}
					else {
						echo '<h1 class="entry-title">';
						the_title(); 
						echo '</h1>';
					}
				?>
				
				<?php the_content(); ?>
			</div>

		</article>

	<?php endwhile; ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

<?php get_footer(); ?>
