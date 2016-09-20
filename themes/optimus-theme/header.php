<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package unite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

	<!--Start of Facebook Feed Script-->
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.7&appId=935498279906777";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
	</script>
	<!--End of Facebook Feed Script-->

	<!--Start of Zopim Live Chat Script-->
	<script type="text/javascript">
		window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
			d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
		_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
			$.src="//v2.zopim.com/?4C7HTSYHKksYLDHTyAKX96IPwgKB9eOL";z.t=+new Date;$.
				type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
	</script>
	<!--End of Zopim Live Chat Script-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<div class="container header-area">
		<?php do_action( 'before' ); ?>
		<header id="masthead" class="site-header col-sm-12" role="banner">

				<div class="site-branding col-md-4">
					<?php /*if( get_header_image() != '' ) : ?>

						<div id="logo">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
							<h4 class="site-description"><?php bloginfo( 'description' ); ?></h4>
						</div><!-- end of #logo -->

					<?php endif; */ // header image was removed ?>

					<div id="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Optimus_Logo.jpg"  alt="<?php bloginfo( 'name' ); ?>"/></a>
					</div><!-- end of #logo -->

					<?php if( !get_header_image() ) : /*?>

						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<h4 class="site-description"><?php bloginfo( 'description' ); ?></h4>

					<?php */ endif; // header image was removed (again) ?>
				</div>

			<div class="social-header col-md-8">
				<div class="contact-info-blocks hidden-sm hidden-xs">
					<div>
						<i class="fa fa-phone"></i> Free Line For You
							<span>08037867890</span>
						</div>
					<div>
						<i class="fa fa-envelope"></i> Email Us
						<span>admin_wp@thanhnguyend.sgedu.site</span>
					</div>
					<div>
						<i class="fa fa-clock-o"></i> Working Hours
						<span>09:00 to 17:00</span>
					</div>
				</div>
			</div>

		</header><!-- #masthead -->
	</div>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>

		        </div>

				<?php
		            wp_nav_menu( array(
		                'theme_location'    => 'primary',
		                'depth'             => 2,
		                'container'         => 'div',
		                'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
		                'menu_class'        => 'nav navbar-nav',
		                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
		                'walker'            => new wp_bootstrap_navwalker())
		            );
		        ?>
		    </div>
		</nav><!-- .site-navigation -->

	<div id="content" class="site-content container"><?php
            global $post;
            if( is_singular() && get_post_meta($post->ID, 'site_layout', true) ){
                $layout_class = get_post_meta($post->ID, 'site_layout', true);
            }
            else{
                $layout_class = of_get_option( 'site_layout' );
            }
            ?>
            <div class="row <?php echo $layout_class; ?>">
