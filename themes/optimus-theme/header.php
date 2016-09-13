<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package rootstrap
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- favicon -->

    <?php if (rootstrap_get_option('custom_favicon')) { ?>
        <link rel="icon" href="<?php echo rootstrap_get_option('custom_favicon'); ?>"/>
    <?php } ?>

    <!--[if IE]><?php if ( rootstrap_get_option( 'custom_favicon' ) ) { ?>
    <link rel="shortcut icon" href="<?php echo rootstrap_get_option( 'custom_favicon' ); ?>"/><?php } ?><![endif]-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action('before'); ?>
<div id="page" class="hfeed site">
    <?php do_action('nav-before'); ?>
    <header class="site-header">
        <div class="middle-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-8 col-xs-8">
                        <h1 class="logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>"
                               title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/Optimus_Logo.jpg">
                            </a>
                        </h1>
                    </div>
                    <div class="col-md-8 col-sm-4 col-xs-4">
                        <div class="contact-info-blocks hidden-sm hidden-xs">
                            <div>
                                <i class="fa fa-phone"></i> Free Line For You
                                <span>08037867890</span>
                            </div>
                            <div>
                                <i class="fa fa-envelope"></i> Email Us
                                <span>sales@realspaces.com</span>
                            </div>
                            <div>
                                <i class="fa fa-clock-o"></i> Working Hours
                                <span>09:00 to 17:00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="undefined-sticky-wrapper" class="sticky-wrapper" style="height: 100px;">
            <div class="main-menu-wrapper" style="display: block;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="navigation">
                                <ul id="menu-main-menu" class="sf-menu sf-js-enabled">
                                    <li id="menu-item-208"
                                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-has-children menu-item-208">
                                        <a class="sf-with-ul">Home <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu" style="display: none;">
                                            <li id="menu-item-232"
                                                class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-223 current_page_item menu-item-232">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/">Home Version 1</a>
                                            </li>
                                            <li id="menu-item-255"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-255">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/version-2/">Home
                                                    Version 2</a></li>
                                            <li id="menu-item-602"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-602">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/rev-slider-home/">Rev
                                                    Slider Home <span class="label label-default">New</span></a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-209"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-209">
                                        <a class="sf-with-ul">Pages <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu" style="display: none;">
                                            <li id="menu-item-236"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-236">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/about-us/">About Us</a>
                                            </li>
                                            <li id="menu-item-238"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-238">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/agents/">Agents</a>
                                            </li>
                                            <li id="menu-item-210"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-210">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/author/mia-kennedy/">Agent
                                                    Single</a></li>
                                            <li id="menu-item-237"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-237">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/agent-properties/">Agent
                                                    Properties</a></li>
                                            <li id="menu-item-249"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-249">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/register-as-agent/">Register
                                                    as Agent</a></li>
                                            <li id="menu-item-245"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-245">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/list-a-property/">List
                                                    a Property</a></li>
                                            <li id="menu-item-599"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-599">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/pricing-plans/">Pricing
                                                    Plans</a></li>
                                            <li id="menu-item-256"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-256">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/register-as-agent/">Login/Register</a>
                                            </li>
                                            <li id="menu-item-211"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-211">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/?author=677">404</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-283"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-283">
                                        <a class="sf-with-ul">dsIDXPress <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu" style="display: none;">
                                            <li id="menu-item-284"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-284">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/dsidxpress-listing/">dsIDXPress
                                                    Listing</a></li>
                                            <li id="menu-item-285"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-285">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/idx/mls-20649490-82_sunny_st_mission_viejo_ca_92692">Single
                                                    Property</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-212"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-212">
                                        <a class="sf-with-ul">Properties <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu" style="display: none;">
                                            <li id="menu-item-406"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-406">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/compare-properties/">Compare
                                                    Properties</a></li>
                                            <li id="menu-item-213"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-213">
                                                <a href="http://s" class="sf-with-ul">Listing <i
                                                        class="fa fa-caret-right"></i></a>
                                                <ul class="sub-menu" style="display: none;">
                                                    <li id="menu-item-251"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-251">
                                                        <a href="http://wp1.imithemes.com/real-spaces-wp/simple-listing/">Simple
                                                            Listing</a></li>
                                                    <li id="menu-item-252"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-252">
                                                        <a href="http://wp1.imithemes.com/real-spaces-wp/simple-listing-with-map/">Simple
                                                            Listing with Map</a></li>
                                                    <li id="menu-item-242"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-242">
                                                        <a href="http://wp1.imithemes.com/real-spaces-wp/full-width-listing/">Full
                                                            Width Listing</a></li>
                                                    <li id="menu-item-243"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-243">
                                                        <a href="http://wp1.imithemes.com/real-spaces-wp/grid-listing/">Grid
                                                            Listing</a></li>
                                                    <li id="menu-item-244"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-244">
                                                        <a href="http://wp1.imithemes.com/real-spaces-wp/grid-listing-with-map/">Grid
                                                            Listing with map</a></li>
                                                    <li id="menu-item-241"
                                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-241">
                                                        <a href="http://wp1.imithemes.com/real-spaces-wp/full-width-grid/">Full
                                                            Width Grid</a></li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-214"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-214">
                                                <a href="http://s" class="sf-with-ul">Types <i
                                                        class="fa fa-caret-right"></i></a>
                                                <ul class="sub-menu" style="display: none;">
                                                    <li id="menu-item-215"
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-property-type menu-item-215">
                                                        <a href="http://wp1.imithemes.com/real-spaces-wp/?property-type=villa">Villa</a>
                                                    </li>
                                                    <li id="menu-item-216"
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-property-type menu-item-216">
                                                        <a href="http://wp1.imithemes.com/real-spaces-wp/?property-type=single-home">Single
                                                            Home</a></li>
                                                    <li id="menu-item-217"
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-property-type menu-item-217">
                                                        <a href="http://wp1.imithemes.com/real-spaces-wp/?property-type=cottage">Cottage</a>
                                                    </li>
                                                    <li id="menu-item-218"
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-property-type menu-item-218">
                                                        <a href="http://wp1.imithemes.com/real-spaces-wp/?property-type=family-house">Family
                                                            House</a></li>
                                                    <li id="menu-item-219"
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-property-type menu-item-219">
                                                        <a href="http://wp1.imithemes.com/real-spaces-wp/?property-type=apartment">Apartment</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-220"
                                                class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-220">
                                                <a href="http://s" class="sf-with-ul">Contract Type <i
                                                        class="fa fa-caret-right"></i></a>
                                                <ul class="sub-menu" style="display: none;">
                                                    <li id="menu-item-221"
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-property-contract-type menu-item-221">
                                                        <a href="http://wp1.imithemes.com/real-spaces-wp/?property-contract-type=rent">Rent</a>
                                                    </li>
                                                    <li id="menu-item-224"
                                                        class="menu-item menu-item-type-taxonomy menu-item-object-property-contract-type menu-item-224">
                                                        <a href="http://wp1.imithemes.com/real-spaces-wp/?property-contract-type=sale">Sale</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li id="menu-item-257"
                                                class="menu-item menu-item-type-post_type menu-item-object-property menu-item-257">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/?property=116-waverly-place">Single
                                                    Property</a></li>
                                            <li id="menu-item-258"
                                                class="menu-item menu-item-type-post_type menu-item-object-property menu-item-258">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/?property=228-park-ave-s">Single
                                                    Property Full Width</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-225"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-225">
                                        <a class="sf-with-ul">Features <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu" style="display: none;">
                                            <li id="menu-item-250"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-250">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/shortcodes/">Shortcodes</a>
                                            </li>
                                            <li id="menu-item-254"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-254">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/typography/">Typography</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-226"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-226">
                                        <a class="sf-with-ul">Gallery <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu" style="display: none;">
                                            <li id="menu-item-233"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-233">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/2-columns/">Gallery 2
                                                    Columns</a></li>
                                            <li id="menu-item-234"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-234">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/3-columns/">Gallery 3
                                                    Columns</a></li>
                                            <li id="menu-item-235"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-235">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/4-columns/">Gallery 4
                                                    Columns</a></li>
                                            <li id="menu-item-247"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-247">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/masonry-grid/">Gallery
                                                    Masonry Grid</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-227"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-227">
                                        <a class="sf-with-ul">Blog <i class="fa fa-angle-down"></i></a>
                                        <ul class="sub-menu" style="display: none;">
                                            <li id="menu-item-246"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-246">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/masonry/">Blog
                                                    Masonry</a></li>
                                            <li id="menu-item-253"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-253">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/timeline/">Blog
                                                    Timeline</a></li>
                                            <li id="menu-item-239"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-239">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/classic/">Blog
                                                    Classic</a></li>
                                            <li id="menu-item-259"
                                                class="menu-item menu-item-type-post_type menu-item-object-post menu-item-259">
                                                <a href="http://wp1.imithemes.com/real-spaces-wp/blog-post-with-featured-image-3/">Single
                                                    Post</a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-240"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-240">
                                        <a href="http://wp1.imithemes.com/real-spaces-wp/contact/">Contact</a></li>
                                    <li id="menu-item-289"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-289">
                                        <a href="http://wp1.imithemes.com/real-spaces-wp/list-a-property/">List a
                                            Property</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<?php do_action('nav-after'); ?>