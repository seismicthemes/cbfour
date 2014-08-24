<?php
/**
 * The template for the footer.
 *
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div id="site-generator">
			<?php do_action( 'cbfour_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'cbfour' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'cbfour' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'cbfour' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( '%1$s by %2$s.', 'cbfour' ), 'CBFour', '<a href="http://www.vaultfour.com/" rel="designer">Vault Four</a>' ); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>