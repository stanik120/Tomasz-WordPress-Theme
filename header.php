<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tomek
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet"> 
    <link rel="shortcut icon" type="image/png" href="<?php echo(get_template_directory_uri()); ?>/favicon.png"/>
    
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header>
        <div class="wrapper">
            <nav>
                <a href="<?php echo get_site_url(); ?>"><h1><?php echo get_bloginfo('name'); ?></h1></a>
                <div class="social">
                    <a href="https://www.instagram.com/kosiner_official/"><img src="<?php echo(get_template_directory_uri()); ?>/images/Instagram.png"></a>
                    <a href="https://www.facebook.com/TheKosiner"><img src="<?php echo(get_template_directory_uri()); ?>/images/Facebook.png"></a>
                </div>
                
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                ) );
                ?>
            
            </nav><!-- #site-navigation -->
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
