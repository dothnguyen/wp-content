<?php

    if ( get_option( 'show_on_front' ) == 'posts' ) {
        get_template_part( 'index' );
    } elseif ( 'page' == get_option( 'show_on_front' ) ) {

 get_header(); ?>

		<?php echo do_shortcode("[image-carousel]"); ?>

		<!--Search form-->
		<?php get_search_form(); ?>


	<div id="primary" class="content-area col-sm-12 col-md-12 col-lg-12">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . __( 'Pages:', 'unite' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->
					<?php edit_post_link( __( 'Edit', 'unite' ), '<footer class="entry-meta"><i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span></footer>' ); ?>
				</article><!-- #post-## -->

					<div class="home-widget-area row">

						<div class="col-sm-6 col-md-4 facebook-feed">
							<div class="fb-page" data-href="https://www.facebook.com/Optimus-Property-311845079176567/" data-tabs="timeline" data-width="375" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Optimus-Property-311845079176567/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Optimus-Property-311845079176567/">Optimus Property</a></blockquote></div>
						</div>

						<div class="col-sm-6 col-md-4 home-widget">
							<?php if( is_active_sidebar('home2') ) dynamic_sidebar( 'home2' ); ?>
						</div>

						<div class="col-sm-6 col-md-4 home-widget">
							<?php if( is_active_sidebar('home3') ) dynamic_sidebar( 'home3' ); ?>
						</div>

					</div>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
	get_footer();
}
?>