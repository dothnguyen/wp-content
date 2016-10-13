<?php

    if ( get_option( 'show_on_front' ) == 'posts' ) {
        get_template_part( 'index' );
    } elseif ( 'page' == get_option( 'show_on_front' ) ) {

 get_header(); ?>

<div class="ui-widget-shadow">

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
						<a class="button" href="http://thanhnguyend.sgedu.site/optimus_wp/appointment/">Make An Appointment Now!</a>
					</div>

				</div>

				<div class="item" id="cptbc-item-2">
					<div class="carousel-caption">
						<h4>Apartment</h4>
						<p>This fully furnished, two bedroom , two Bathroom Apartment,features designer kitchen and spacious living area. The large bedrooms with
							built in robes with luxurious bathrooms including corner bath tub. Superb views of the Botanical Garden, Brisbane River, Brisbane City &amp; Southbank are seen from this spectacular Apartment.</p>
						<a class="button" href="http://thanhnguyend.sgedu.site/optimus_wp/appointment/">Make An Appointment Now!</a>
					</div>
				</div>

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
						<a class="button" href="http://thanhnguyend.sgedu.site/optimus_wp/appointment/">Make An Appointment Now!</a>
					</div>
				</div>

				<div class="item" id="cptbc-item-4">

					<div class="carousel-caption">
						<h4>Villa</h4>
						<p>Boasting Ocean views this top floor apartment brings you the best of both Surfers Paradise and Broadbeach. You won't need to get out of bed to check the surf!

							You will have access to your own spa as well as the building's pool, sauna, gym, BBQ and tennis court.</p>
						<a class="button" href="http://thanhnguyend.sgedu.site/optimus_wp/appointment/">Make An Appointment Now!</a>
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
							<div class="fb-page" data-href="https://www.facebook.com/Optimus-Property-311845079176567/" data-tabs="timeline" data-height="1000px" data-small-header="false" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Optimus-Property-311845079176567/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Optimus-Property-311845079176567/">Optimus Property</a></blockquote></div>
						</div>

						<div class="col-sm-6 col-md-8 home-widget">
							<div class="wpp_row_view wpp_property_view_result">
								<div class="all-properties">

									<div class="property_div property clearfix">

										<div class="wpp_overview_left_column" style="width:180px; height: 180px; float:left; ">
											<div class="property_image">
												<a href="http://thanhnguyend.sgedu.site/optimus_wp/for-rent/" title="Apartment for Rent" class="property_overview_thumb property_overview_thumb_tiny_thumb fancybox_image thumbnail" rel="apartment-for-rent">
													<img width="200" height="200" src="http://thanhnguyend.sgedu.site/optimus_wp/wp-content/uploads/2016/09/appartment.jpg" alt="Apartment for Rent" style="width:170px;height:170px;">
												</a>
											</div>
										</div>

										<div class="wpp_overview_right_column" style="margin-left:200px; ">

											<ul class="wpp_overview_data">
												<li class="property_title"><a href="http://thanhnguyend.sgedu.site/optimus_wp/for-rent/">Apartment for Rent</a></li>
												<li class="property_discription"><b>Unit 2 Bedrooms, 2 Bathrooms, full furniture</b></li>
												<li class="property_prices">$600 / per week</li>
												<li class="property_tagline"> </li>
												<li class="property_address">14 Le Grand st, Macgregor, QLD 4109</li>
												<li class="property_phone_number">0432 382 386</li>
											</ul>

										</div>
									</div>

									<div class="property_div property clearfix">

										<div class="wpp_overview_left_column" style="width:180px; height: 180px; float:left;">
											<div class="property_image">
												<a href="http://thanhnguyend.sgedu.site/optimus_wp/for-rent/" title="House for Rent" class="property_overview_thumb property_overview_thumb_tiny_thumb fancybox_image thumbnail" rel="house-for-rent">
													<img width="150" height="150" src="http://thanhnguyend.sgedu.site/optimus_wp/wp-content/uploads/2016/09/Richards_House.jpg" alt="House for Rent" style="width:170px;height:170px;">
												</a>
											</div>
										</div>

										<div class="wpp_overview_right_column" style="margin-left:200px; ">

											<ul class="wpp_overview_data">
												<li class="property_title">
													<a href="http://thanhnguyend.sgedu.site/optimus_wp/for-rent/">House for Rent</a></li>
												<li class="property_discription"><b>Single Room Available!</b> </li>
												<li class="property_prices">$150 / per week</li>
												<li class="property_tagline"> </li>
												<li class="property_address">14 Le Grand st, Macgregor, QLD 4109</li>
												<li class="property_phone_number">0432 382 386</li>
											</ul>

										</div>
									</div>

									<div class="property_div property clearfix">

										<div class="wpp_overview_left_column" style="width:180px; height: 180px; float:left;">
											<div class="property_image">
												<a href="http://thanhnguyend.sgedu.site/optimus_wp/for-rent/" title="House for Rent" class="property_overview_thumb property_overview_thumb_tiny_thumb fancybox_image thumbnail" rel="house-for-rent">
													<img width="150" height="150" src="http://thanhnguyend.sgedu.site/optimus_wp/wp-content/uploads/2016/09/townhouse.jpg" alt="House for Rent" style="width:170px;height:170px;">
												</a>
											</div>
										</div>

										<div class="wpp_overview_right_column" style="margin-left:200px; ">

											<ul class="wpp_overview_data">
												<li class="property_title">
													<a href="http://thanhnguyend.sgedu.site/optimus_wp/for-rent/">Town House for Rent</a></li>
												<li class="property_discription"><b>MODERN RESIDENCE AND CLOSE TO ALL AMENITIES</b> </li>
												<li class="property_prices">$500 / per week</li>
												<li class="property_tagline"> </li>
												<li class="property_address">14 Le Grand st, Macgregor, QLD 4109</li>
												<li class="property_phone_number">0432 382 386</li>
											</ul>

										</div>
									</div>

									<div class="property_div property clearfix">

										<div class="wpp_overview_left_column" style="width:180px; height: 180px; float:left;">
											<div class="property_image">
												<a href="http://thanhnguyend.sgedu.site/optimus_wp/for-sale/" title="House for Rent" class="property_overview_thumb property_overview_thumb_tiny_thumb fancybox_image thumbnail" rel="house-for-rent">
													<img width="150" height="150" src="http://thanhnguyend.sgedu.site/optimus_wp/wp-content/uploads/2016/09/villas4.jpg" alt="House for Rent" style="width:170px;height:170px;">
												</a>
											</div>
										</div>

										<div class="wpp_overview_right_column" style="margin-left:200px; ">

											<ul class="wpp_overview_data">
												<li class="property_title">
													<a href="http://thanhnguyend.sgedu.site/optimus_wp/for-sale/">Villa For Sale</a></li>
												<li class="property_discription"><b>Boasting Ocean View</b> </li>
												<li class="property_prices">$5,000,000</li>
												<li class="property_tagline"> </li>
												<li class="property_address">14 Le Grand st, Macgregor, QLD 4109</li>
												<li class="property_phone_number">0432 382 386</li>
											</ul>

										</div>
									</div>
								</div>	</div>
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
</div>

<?php
	get_footer();
}
?>