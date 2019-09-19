<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ixion
 */

get_header();

echo do_shortcode('[rev_slider alias="banner"][/rev_slider]');
if ( have_posts() ) : ?>

	<header class="page-header">
		<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="taxonomy-description">', '</div>' );
		?>
	</header>

<?php endif; ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		if ( have_posts() ) :

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
								if ( has_post_thumbnail() && ! is_single() ) : ?>

								<div class="post-thumbnail">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail( 'ixion-featured-image' ); ?>
									</a>
								</div>

							<?php
								endif;

								if ( ! is_single() ) {
									if ( 'post' === get_post_type() ) {
										get_template_part( 'components/post/content', 'meta' );
									}
									the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
								}
							?>
						</header>
						<div class="entry-content">
							<?php
								the_excerpt();

								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ixion' ),
									'after'  => '</div>',
								) );
							?>
						</div><!-- .entry-content -->
					</div> <!-- .entry-body -->
				</article><!-- #post-## -->
				
				<?php

			endwhile;

			wp_pagenavi();
		else :

			get_template_part( 'components/post/content', 'none' );

		endif; ?>

		</main>
	</div>
<?php
get_sidebar();
get_footer();
