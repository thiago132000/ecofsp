<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Ixion
 */

get_header(); 

echo do_shortcode('[rev_slider alias="banner"][/rev_slider]');
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

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
