<?php
// store the post type from the URL string
$post_type = $_GET['post_type'];
// check to see if there was a post type in the
// URL string and if a results template for that
// post type actually exists
if ( isset( $post_type ) && locate_template( 'search-' . $post_type . '.php' ) ) {
	// if so, load that template
	get_template_part( 'search', $post_type );

	// and then exit out
	exit;
}
?>

<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package unite
 */

get_header(); ?>

<!--Search form-->
<?php get_template_part("searchform", "property"); ?>

	<section id="primary" class="content-area col-sm-12 col-md-8 <?php echo of_get_option( 'site_layout' ); ?>">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'unite' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				$post = get_post();
				if ($post) {
				?>

					<?php get_template_part( 'content', 'property' ); ?>

				<?php } ?>

			<?php endwhile; ?>

			<?php unite_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
