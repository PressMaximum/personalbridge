<?php
get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main mt-6 mb-24">
			<?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content/content', 'single' );
				if ( is_singular( 'attachment' ) ) {
					// Parent post navigation.
					the_post_navigation(
						array(
							/* translators: %s: Parent post link. */
							'prev_text' => sprintf( __( '<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'personalbridge' ), '%title' ),
						)
					);
				} elseif ( is_singular( 'post' ) ) {
					// Previous/next post navigation.
					the_post_navigation(
						array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'personalbridge' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'personalbridge' ) . '</span> <br/>' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'personalbridge' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'personalbridge' ) . '</span> <br/>' .
								'<span class="post-title">%title</span>',
						)
					);
				}

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
