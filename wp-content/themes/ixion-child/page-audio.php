<?php
/* Template name: Audios */

get_header(); 
query_posts(array( 
    'post_type' => 'audio',
    'showposts' => 10 
) );  
?>

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-body">
						<header class="entry-header">
							<?php

								if ( ! is_single() ) {
									if ( 'post' === get_post_type() ) {
										get_template_part( 'components/post/content', 'meta' );
									}
									the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
								}
							?>
						</header>
					</div> <!-- .entry-body -->
				</article><!-- #post-## -->
				
				<?php

			endwhile;

			wp_pagenavi();

		else :

			get_template_part( 'components/post/content', 'none' );

		endif; ?>

<?php
get_footer();
