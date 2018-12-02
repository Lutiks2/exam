<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package exam
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="main-header"
        style="background: url('<?php echo get_theme_mod('set_background'); ?>') no-repeat center/cover">

    <div class="container">
        <div class="logo-nav clearfix">
            <div class="site-branding">
                <h1><?php the_custom_logo(); ?></h1>
            </div><!-- .site-branding -->
            <nav class="main-navigation">
                <a class="menu-bat" href="#">
                    <span class="fa fa-bars"></span>
                </a>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header',
                    'menu_id' => 'header',
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'menu_class' => 'welcome-list clearfix',
                ));
                ?>
            </nav><!-- #site-navigation -->
        </div>
        <div class="content-header">
            <h2 class="site-name"><?php bloginfo('name'); ?></h2>
            <p class="welcome-description"><?php echo get_bloginfo('description', 'display'); ?></p>
            <div class="welcome-button">
                <a class="button button-header"
                   href="<?php echo get_theme_mod('url_button'); ?>">
                    <?php echo get_theme_mod('text_button'); ?>
                </a>
            </div>
        </div>
    </div>
</header>

<div id="content" class="site-content">
