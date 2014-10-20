<?php
/**
 * The template for displaying the header.
 *
 * Contains the opening tag for the page structure
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title>
<?php wp_title(''); ?>
</title>
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-icon-touch.png">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
<!--[if IE]><link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico"><![endif]-->
<meta name="msapplication-TileColor" content="#f01d4f">
<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/images/win8-tile-icon.png">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

<!--[if lt IE 9]>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv-printshiv.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="container">
<header id="masthead" class="header" role="banner">
    <div class="col-sm-12 social-bar">
        <div id="inner-header" class="wrap clearfix">
            <div class="col-sm-6 col-xs-6">
                <p>WNY Largest Emergency Vehicle Up-fItter | <a href="http://empirefiretrucks.localedgecustomsites.com/fire/">Fire Division</a></p>
            </div>
            <div class="col-sm-6 col-xs-6 text-right">
                <p><a href="https://www.facebook.com/pages/Empire-Emergency-Apparatus-Inc/161637047186111" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a> <a href="https://twitter.com/EmpireEmergency" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a> <a href="https://plus.google.com/100875403560519831358/about" target="_blank"><i class="fa fa-google-plus-square fa-2x"></i></a> <a href="http://www.youtube.com/channel/UC_SWE7PfN2E-x0sWqwCb1rg" target="_blank"><i class="fa fa-youtube-square fa-2x"></i></a></p>
            </div>
        </div>
    </div>
    <div id="inner-header" class="wrap clearfix header-cont">
        <div class="col-sm-1 col-xs-6">
            <div id="logo"><a href="http://empirefiretrucks.localedgecustomsites.com/" rel="home" title=""><img src="<?php echo get_template_directory_uri(); ?>/images/police-logo.png"></a></div>
        </div>
        <div class="col-sm-8 col-xs-6 menu-cont">
            <nav id="main-navigation" class="clearfix" role="navigation">
                <?php scaffolding_main_nav(); ?>
            </nav>
        </div>
        <div class="col-sm-3 col-xs-12">
        	<?php dynamic_sidebar( 'header-sidebar' ); ?> 
        </div>
    </div>
</header>
<a class="skip-link screen-reader-text" href="#content">
<?php _e( 'Skip to content', 'test' ); ?>
</a>
<?php // Interior Header Image ?>

<div id="content">
<div id="inner-content" class="wrap clearfix">
<?php // Test for active sidebars to set the main content width
					if(is_active_sidebar( 'left-sidebar' ) && is_active_sidebar( 'right-sidebar' )) { //both sidebars
						$main_class = 'col-sm-6 col-sm-push-3';
					}
					elseif(is_active_sidebar( 'left-sidebar' ) && !is_active_sidebar( 'right-sidebar' )) { //left sidebar
						$main_class = 'col-sm-9 col-sm-push-3';
					}
					elseif(!is_active_sidebar( 'left-sidebar' ) && is_active_sidebar( 'right-sidebar' )) { //right sidebar
						$main_class = 'col-sm-9';
					}
					else { //no sidebar
						$main_class = 'col-sm-12';
					}
				?>
<div id="main" class="<?php echo $main_class;?> clearfix" role="main">
<div class="row">
<div class="col-sm-6">
</div>
<div class="col-sm-6 cta-cont">
<?php dynamic_sidebar( 'cta' ); ?> 
</div>
</div>
