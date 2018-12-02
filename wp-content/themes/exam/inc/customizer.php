<?php
/**
 * exam Theme Customizer
 *
 * @package exam
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function exam_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial('blogname', array(
            'selector' => '.site-title a',
            'render_callback' => 'exam_customize_partial_blogname',
        ));
        $wp_customize->selective_refresh->add_partial('blogdescription', array(
            'selector' => '.site-description',
            'render_callback' => 'exam_customize_partial_blogdescription',
        ));
    }
    //////Header section
    $wp_customize->add_section('header_settings', array(
        'title' => __('Header settings'),
        'description' => __('Add settings here'),
        'panel' => '', // Not typically needed.
        'priority' => 20,
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
    ));

    // add  header background
    $wp_customize->add_setting('set_background', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
    ));
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'set_background', array(
        'label' => __('Featured Home Page Image', 'exam'),
        'section' => 'header_settings',
        'type' => 'background',
    )));
    // add header button

    $wp_customize->add_setting('text_button', array(
        'default' => __('Read more', 'exam'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('text_button', array(
        'label' => __('Text button', 'exam'),
        'section' => 'header_settings',
        'settings' => 'text_button',
        'type' => 'text',
    ));
    $wp_customize->add_setting('url_button', array(
        'default' => __('Url button', 'exam'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('url_button', array(
        'label' => __('Button url', 'exam'),
        'section' => 'header_settings',
        'settings' => 'url_button',
        'type' => 'text',
    ));

    //add section 'process'
    $wp_customize->add_section('process', array(
        'title' => __('Process'),
        'description' => __('Add settings here'),
        'panel' => '', // Not typically needed.
        'priority' => 30,
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
    ));

    // add "process"  heading
    $wp_customize->add_setting('process_heading', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => 'What’s the process?',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
    ));
    $wp_customize->add_control('process_heading', array(
        'label' => __('Section heading', 'exam'),
        'section' => 'process',
        'settings' => 'process_heading',
        'type' => 'text',
    ));
    ///lite - header

    //////Lite - header
    $wp_customize->add_section('lite_header_settings', array(
        'title' => __('Lite header settings'),
        'description' => __('Add settings here'),
        'panel' => '', // Not typically needed.
        'priority' => 20,
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
    ));
    /// // add lite-header background color
    $wp_customize->add_setting('lite_header_backgr_color', array(
        'default' => '#2d2620',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lite_header_backgr_color', array(
        'label' => 'Blog Bg Color',
        'section' => 'lite_header_settings',
        'settings' => 'lite_header_backgr_color',
    )));

    /////////// add section "about us"////////////
    $wp_customize->add_section('about', array(
        'title' => __('About us'),
        'description' => __('Add settings here'),
        'panel' => '', // Not typically needed.
        'priority' => 30,
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
    ));

    // add "about"  heading
    $wp_customize->add_setting('about_heading', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => 'About',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
    ));
    $wp_customize->add_control('about_heading', array(
        'label' => __('Section heading', 'exam'),
        'section' => 'about',
        'settings' => 'about_heading',
        'type' => 'text',
    ));
    // add about background color
    $wp_customize->add_setting('backgr_about_color', array(
        'default' => '#fbf7f4',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'backgr_about_color', array(
        'label' => 'Bg Color',
        'section' => 'about',
        'settings' => 'backgr_about_color',
    )));
    //about img
    $wp_customize->add_setting('about_img', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'about_img', array(
        'label' => 'Bg Logo',
        'section' => 'about',
        'settings' => 'about_img',
    )));

    ///////// add section "candidate"//////////
    $wp_customize->add_section('candidate', array(
        'title' => __('Candidate'),
        'description' => __('Add settings here'),
        'panel' => '', // Not typically needed.
        'priority' => 30,
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
    ));

    // add "candidate"  heading
    $wp_customize->add_setting('candidate_heading', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => 'Candidate families',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
    ));
    $wp_customize->add_control('candidate_heading', array(
        'label' => __('Section heading', 'exam'),
        'section' => 'candidate',
        'settings' => 'candidate_heading',
        'type' => 'text',
    ));

    ///////////// add section build/////////////////

    $wp_customize->add_section('build', array(
        'title' => __('Build'),
        'description' => __('Add settings here'),
        'panel' => '', // Not typically needed.
        'priority' => 30,
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
    ));
    // add  build background
    $wp_customize->add_setting('set_build_background', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
    ));
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'set_build_background', array(
        'label' => __('Section Build Background', 'exam'),
        'section' => 'build',
        'type' => 'background',
    )));
    // add "build"  heading
    $wp_customize->add_setting('build_heading', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => 'Build a home',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
    ));
    $wp_customize->add_control('build_heading', array(
        'label' => __('Section heading', 'exam'),
        'section' => 'build',
        'settings' => 'build_heading',
        'type' => 'text',
    ));

    //add "build" description
    $wp_customize->add_setting('build_description', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => 'You can become a part of someone’s life changing. Let’s give these people a hand and a brighter future by building a beautiful home for their families.',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
    ));
    $wp_customize->add_control('build_description', array(
        'label' => __('Section description', 'exam'),
        'section' => 'build',
        'settings' => 'build_description',
        'type' => 'textarea',
    ));
    // add build button

    $wp_customize->add_setting('text_build_button', array(
        'default' => __('Learn more', 'exam'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('text_build_button', array(
        'label' => __('Text button', 'exam'),
        'section' => 'build',
        'settings' => 'text_build_button',
        'type' => 'text',
    ));
    $wp_customize->add_setting('url_build_button', array(
        'default' => __('Url button', 'exam'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('url_build_button', array(
        'label' => __('Button url', 'exam'),
        'section' => 'build',
        'settings' => 'url_build_button',
        'type' => 'text',
    ));

    ////footer/////
    $wp_customize->add_section('footer', array(
        'title' => __('Footer'),
        'description' => __('Add settings here'),
        'panel' => '', // Not typically needed.
        'priority' => 30,
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
    ));
    //footer img
    $wp_customize->add_setting('footer_img', array(
        'default' => '',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'footer_img', array(
        'label' => 'Bg Logo',
        'section' => 'footer',
        'settings' => 'footer_img',
    )));
    // add footer newsletter
    $wp_customize->add_setting('footer_newsletter', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => 'Join our newsletter',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
    ));
    $wp_customize->add_control('footer_newsletter', array(
        'label' => __('Footer newsletter', 'exam'),
        'section' => 'footer',
        'settings' => 'footer_newsletter',
        'type' => 'text',
    ));

    ///add footer copy

    $wp_customize->add_setting('footer_copy', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => '© Dwellings, 2017',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
    ));
    $wp_customize->add_control('footer_copy', array(
        'label' => __('Footer copy', 'exam'),
        'section' => 'footer',
        'settings' => 'footer_copy',
        'type' => 'text',
    ));
    ///add footer design

    $wp_customize->add_setting('footer_design', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => 'Design by Maria Osadcha',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
    ));
    $wp_customize->add_control('footer_design', array(
        'label' => __('Footer design', 'exam'),
        'section' => 'footer',
        'settings' => 'footer_design',
        'type' => 'text',
    ));
    ///add footer design

    $wp_customize->add_setting('footer_develop', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
        'default' => 'Developed by Geekhub geekhub.ck.ua',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => '',
        'sanitize_js_callback' => '', // Basically to_json.
    ));
    $wp_customize->add_control('footer_develop', array(
        'label' => __('Footer develop', 'exam'),
        'section' => 'footer',
        'settings' => 'footer_develop',
        'type' => 'text',
    ));
    ///add blog page


    $wp_customize->add_section('blog', array(
        'title' => __('Blog'),
        'description' => __('Add settings here'),
        'panel' => '', // Not typically needed.
        'priority' => 50,
        'capability' => 'edit_theme_options',
        'theme_supports' => '', // Rarely needed.
    ));
    /// // add blog background color
    $wp_customize->add_setting('blog_backgr_color', array(
        'default' => '#fbf7f4',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'blog_backgr_color', array(
        'label' => 'Blog Bg Color',
        'section' => 'blog',
        'settings' => 'blog_backgr_color',
    )));

}

add_action('customize_register', 'exam_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function exam_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function exam_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function exam_customize_preview_js()
{
    wp_enqueue_script('exam-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20151215', true);
}

add_action('customize_preview_init', 'exam_customize_preview_js');
