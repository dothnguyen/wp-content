<?php
/**
 * Created by PhpStorm.
 * User: voiu
 * Date: 9/21/16
 * Time: 10:03 PM
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