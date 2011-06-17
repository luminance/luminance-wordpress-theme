<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h2 class="sub-title">Attachment</h2>
			<h1 class="entry-title"><?php the_title(); ?></h1>

			<div class="entry-content entry">
			<p>
				<?php
				function format_bytes($size) {
				    $units = array(' B', ' KB', ' MB', ' GB', ' TB');
				    for ($i = 0; $size >= 1024 && $i < 4; $i++) $size /= 1024;
				    return round($size, 2).$units[$i];
				}
				
				$args = array( 'post_type' => 'attachment', 'numberposts' => 1, 'post_status' => null, 'post_parent' => null ); 
				$attachments = get_posts( $args );
				if ($attachments) {
					foreach ( $attachments as $post ) {
						setup_postdata($post);
						the_excerpt();
						the_content();
						echo "File type: ";
						print_r($post->post_mime_type);
						echo "<br/>File size: ";
						print(format_bytes(filesize(get_attached_file($post->ID, true ))));
						echo "<br/>";
						echo wp_get_attachment_link( $post->ID, '' , false, false, 'Download' );
						
					}
				}
				?>
				
			</p>
			</div>
			
			<?php edit_post_link('Edit this entry','','.'); ?>
			
		</article>

	<?php endwhile; endif; ?>
	

<?php get_footer(); ?>