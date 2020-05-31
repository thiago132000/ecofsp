<?php
/* Template name: Podcasts */

get_header(); 
query_posts(array( 
    'post_type' => 'podcasts',
	'showposts' => 10,
	'posts_per_page' => 10,
    'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1)
) );  
?>

		<?php
		if ( have_posts() ) :

 		?>
		<h1>Nossos Podcasts</h1>
		<div class="podcast_list">
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
						<div class="podcast_row">
							<div class="podcast_img">
							<a href="<?php the_permalink() ?>">
								<?php the_post_thumbnail(false,'full') ?>
							</a>
							</div>
							<div class="podcast_informacoes">
								<div class="podcast_titulo">
									<a href="<?php the_permalink() ?>">
										<h4><?php the_title(); ?></h4>
									</a>
								</div>
								<div class="podcast_data">
									<time datetime="<?php echo get_the_date( 'Y-m-d' ) ?>"><?php echo "".get_the_date( 'd' )." de ".get_the_date( 'F' ).", ".get_the_date( 'Y' )."" ?></time>
								</div>
								<div class="podcast_resumo">
										<p><?php echo substr(get_the_excerpt(), 0, 180) ?>...</p>
								</div>
								<div class="podcast_link">
									<a href="<?php the_permalink() ?>">Acesse Aqui</a>
								</div>
							</div>
						</div>
					</div> <!-- .entry-body -->
				</article><!-- #post-## -->
				
				<?php

			endwhile;

			wp_pagenavi();

		else :

			get_template_part( 'components/post/content', 'none' );

		endif; ?>
</div>
<aside id="secondary" class="widget-area" role="complementary">
	<?php echo do_shortcode('[ca-sidebar id="191"]'); ?>
</aside>

<?php
get_footer();
