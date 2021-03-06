<?php
/**
 * @package unite
 */

$price = get_post_meta(get_the_ID(), 'price', true);

$bedrooms =  get_post_meta(get_the_ID(), 'bedrooms', true);
$bathrooms = get_post_meta(get_the_ID(), 'bathrooms', true);
$garage = get_post_meta(get_the_ID(), 'car_park', true);

$formatted_address = get_post_meta(get_the_ID(), 'formatted_address', true);

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="col-md-5">
		<div class="row">
			<div class="col-md-12">
				<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'unite-featured', array( 'class' => 'thumbnail' )); ?></a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4"><i class="fa fa-bed icon-text "> <?php echo $bedrooms ?></i></div>
			<div class="col-xs-4 col-sm-4 col-md-4"><i class="fa fa-tint icon-text center-block" > <?php echo $bathrooms ?></i></div>
			<div class="col-xs-4 col-sm-4 col-md-4"><i class="fa fa-car icon-text center-block" > <?php echo $garage ?></i></div>
		</div>
	</div>
	<div class="col-md-7">
		<header class="entry-header page-header">
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

			<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php unite_posted_on(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="address-row">
			<span class="fa fa-map-marker"> <?php echo $formatted_address?></span>
		</div>

		<div class="price-row">
			<span class="price-text"><?php echo '$' . $price ?></span>
		</div>

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
			<p><a class="btn btn-primary read-more" href="<?php the_permalink(); ?>"><?php _e( 'Details', 'unite' ); ?> <i class="fa fa-chevron-right"></i></a></p>
		</div><!-- .entry-summary -->
		<?php endif; ?>

		<footer class="entry-meta">
			<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
				<span class="comments-link"><i class="fa fa-comment-o"></i><?php comments_popup_link( __( 'Leave a comment', 'unite' ), __( '1 Comment', 'unite' ), __( '% Comments', 'unite' ) ); ?></span>
			<?php endif; ?>

			<?php edit_post_link( __( 'Edit', 'unite' ), '<i class="fa fa-pencil-square-o"></i><span class="edit-link">', '</span>' ); ?>
		</footer>
	</div>
	<div class="col-md-12">
		<hr class="section-divider">
	</div>
</article>