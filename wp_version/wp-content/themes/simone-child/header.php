<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Simone
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
            <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'simone' ); ?></a>
                <?php if ( get_header_image() && ('blank' == get_header_textcolor()) ) { ?>
                <figure class="header-image">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <img alt="" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" />
                    </a>
                </figure>
                <?php } // End header image check. ?>
            <?php
                if ( get_header_image() && !('blank' == get_header_textcolor()) ) {
                    echo '<div id="bannerBkg "class="site-branding header-background-image" style="background-image: url(' . get_header_image() . ')">';
                } else {
                    echo '<div class="site-branding">';
                }
            ?>
                    <div id="title-box" class="title-box">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 id="site-description" class="site-description"><?php bloginfo( 'description' ); ?></h2>
                    </div>
		</div>




        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#lander-nav" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><h1>Gleneden <span class="subhead">Cavachon</span></h1></a>
                </div><!-- END .navbar-header -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="lander-nav">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'top_menu',
                        'depth' => 2,
                        'container' => false,
                        'menu_class' => 'nav navbar-nav navbar-right',
                        'fallback_cb' => 'wp_page_menu',
                        //Process nav menu using our custom nav walker
                        'walker' => new wp_bootstrap_navwalker())
                    );
                    ?>
                </div><!-- /.navbar-collapse --> 
            </div><!-- END container -->
        </nav>

        <!-- <div class="bannerBkg">
            
        </div> -->

    <!-- <div class="carousel fade" data-ride="carousel" id="featured">

        <ol class="carousel-indicators">
        </ol>

        <div class="carousel-inner fullheight">
          <div class="item active"><img src="/images/header-black.jpg" alt="Lifestyle Photo"></div>
          <div class="item"><img src="/images/header-black.jpg" alt="Mission"></div>
          <div class="item"><img src="http://placehold.it/3000x2000" alt="Vaccinations"></div>
          <div class="item"><img src="http://placehold.it/3000x2000" alt="Fish"></div>
          <div class="item"><img src="http://placehold.it/3000x2000" alt="Exotic Animals"></div>      
        </div>

        <a class="left carousel-control" href="#featured" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#featured" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div> -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
