<?php

    if ( get_option( 'show_on_front' ) == 'posts' ) {
        get_template_part( 'index' );
    } elseif ( 'page' == get_option( 'show_on_front' ) ) {

 get_header(); ?>


		<!--carousel slide show -->

		<div id="cptbc_1" class="carousel slide" data-interval="5000">

			<ol class="carousel-indicators">
				<li data-target="#cptbc_1" data-slide-to="0" class="active"></li>
				<li data-target="#cptbc_1" data-slide-to="1" class=""></li>
				<li data-target="#cptbc_1" data-slide-to="2" class=""></li>
				<li data-target="#cptbc_1" data-slide-to="3" class=""></li>
			</ol>

			<div class="carousel-inner">

				<div class="item" id="cptbc-item-1">

					<div class="carousel-caption">
						<h4>House</h4>
						<p>Beautifully presented this extensively renovated highset residence is situated in a commanding corner position, in the highly sought-after suburb of Wishart.

							The upper level is a traditional layout with great spaces and flowing hardwood timber flooring continuing into 3 very generous bedrooms; the large main with built in wardrobes.

							The downstairs portion of the home is a greatly versatile</p>
					</div>
				</div>

				<div class="item" id="cptbc-item-2">
					<div class="carousel-caption">
						<h4>Apartment</h4>
						<p>This fully furnished, two bedroom , two Bathroom Apartment,features designer kitchen and spacious living area. The large bedrooms with
							built in robes with luxurious bathrooms including corner bath tub. Superb views of the Botanical Garden, Brisbane River, Brisbane City &amp; Southbank are seen from this spectacular Apartment.</p></div>				</div>

				<div class="item active" id="cptbc-item-3">
					<div class="carousel-caption">
						<h4>Town House</h4>
						<p>MODERN RESIDENCE AND CLOSE TO ALL AMENITIES
							<br>
							3 generous bedrooms with BIRís all upstairs.<br>
							Master bedroom with en-suite, separate living, separate dining area.<br>
							Modern kitchen with gas cooking and dishwasher with sliding door which opening onto a private undercover pergola<br>
							European style laundry<br>
							Main modern bathroom with bath tub and separate shower and 2 WCís/</p>
					</div>
				</div>

				<div class="item" id="cptbc-item-4">

					<div class="carousel-caption">
						<h4>Villa</h4>
						<p>Boasting Ocean views this top floor apartment brings you the best of both Surfers Paradise and Broadbeach. You won't need to get out of bed to check the surf!

							You will have access to your own spa as well as the building's pool, sauna, gym, BBQ and tennis court.</p>
					</div>
				</div>
			</div>

			<a class="left carousel-control" href="#cptbc_1" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#cptbc_1" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>

		</div>

		<script type="text/javascript">
			jQuery(document).ready(function() {
				jQuery('#cptbc_1').carousel({
					interval: 4000				});
			});
		</script>

		<!--Search form-->
		<?php get_template_part("searchform", "property") ?>


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

						<div class="col-sm-6 col-md-8 home-widget">
							<?php echo "PROPERTY" , do_shortcode("[property_overview]"); ?>
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