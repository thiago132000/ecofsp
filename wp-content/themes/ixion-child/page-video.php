<?php
/* Template name: Videos */

get_header(); 
query_posts(array( 
    'post_type' => 'video',
	'showposts' => 10,
	'posts_per_page' => 10,
    'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)
) );  
?>

		<?php
		if ( have_posts() ) :

 		?>
		<h1>Vídeos Recomendados</h1>
			<?php

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

								echo the_title('<h3>-', '</h3>');
								echo the_content();
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
