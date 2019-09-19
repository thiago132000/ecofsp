<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ixion
 */

?>

	</div>
	<footer id="colophon" class="site-footer" role="contentinfo">>
		<div class="maps">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29217.06655027708!2d-46.533906!3d-23.7426248!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59974bdcc55d%3A0xf2760870cde6742c!2sR.%20Afonso%20de%20Freitas%2C%2049%20-%20Para%C3%ADso%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2004006-050!5e0!3m2!1spt-BR!2sbr!4v1568864419933!5m2!1spt-BR!2sbr"  height="450" frameborder="0" style="border:0; width:100%;" allowfullscreen=""></iframe>
		</div>
		<?php get_template_part( 'components/footer/widgets' ); ?>
		<?php get_template_part( 'components/footer/site', 'info' ); ?>
	</footer>
</div>
<?php wp_footer(); ?>

</body>
</html>
