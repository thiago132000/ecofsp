<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Ixion
 */

get_header();
while ( have_posts() ) : the_post();

	the_title( '<h1 class="entry-title">', '</h1>' );

?>

	<?php

        get_template_part( 'components/post/content', get_post_format() );

	?>
<?php
endwhile; // End of the loop.

get_footer();
