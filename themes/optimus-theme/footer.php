<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package unite
 */
?>
            </div><!-- row -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<div class="home-widget-area row">

				<div class="col-sm-4 col-md-4 home-widget">
					<?php if( is_active_sidebar('home1') ) dynamic_sidebar( 'home1' ); ?>
				</div>

				<div class="col-sm-4 col-md-4 home-widget">
					<?php if( is_active_sidebar('home2') ) dynamic_sidebar( 'home2' ); ?>
				</div>

				<div class="col-sm-4 col-md-4 home-widget">
					<?php if( is_active_sidebar('home3') ) dynamic_sidebar( 'home3' ); ?>
				</div>

			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>