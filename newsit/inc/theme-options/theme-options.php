<?php

function newsit_theme_options( $wp_customize ) {
    $wp_customize->add_panel( 'newsit_theme_options_panel', array(
        'title' => __( 'Newsit Theme Options', 'newsit' ),
    ));
    

    // Footer Options
    $wp_customize->add_section( 'newsit_footer_options_section', array(
        'title' => __( 'Footer Options', 'newsit' ),
        'panel' => 'newsit_theme_options_panel',
    ));
    $wp_customize->add_setting( 'newsit_footer_desc', array(
        'default' => '',
        'transport' =>'refresh',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));
    $wp_customize->add_control( 'newsit_footer_desc', array(
        'label' => __( 'Description Under Logo', 'newsit' ),
        'section' => 'newsit_footer_options_section',
        'type'   => 'textarea',
    ));

    $wp_customize->add_setting( 'newsit_footer_phone', array(
        'default' => '',
        'transport' =>'refresh',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));
    $wp_customize->add_control( 'newsit_footer_phone', array(
        'label' => __( 'Phone Number', 'newsit' ),
        'section' => 'newsit_footer_options_section',
        'type'   => 'text',
    ));

    $wp_customize->add_setting( 'newsit_footer_email', array(
        'default' => '',
        'transport' =>'refresh',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));
    $wp_customize->add_control( 'newsit_footer_email', array(
        'label' => __( 'Email Address', 'newsit' ),
        'section' => 'newsit_footer_options_section',
        'type'   => 'text',
    ));

    $wp_customize->add_setting( 'newsit_footer_location', array(
        'default' => '',
        'transport' =>'refresh',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));
    $wp_customize->add_control( 'newsit_footer_location', array(
        'label' => __( 'Location', 'newsit' ),
        'section' => 'newsit_footer_options_section',
        'type'   => 'text',
    ));

    $wp_customize->add_setting( 'newsit_footer_copyright', array(
        'default' => '',
        'transport' =>'refresh',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));
    $wp_customize->add_control( 'newsit_footer_copyright', array(
        'label' => __( 'Copyright Text', 'newsit' ),
        'section' => 'newsit_footer_options_section',
        'type'   => 'textarea',
    ));


    // Social Media
    $wp_customize->add_section( 'newsit_social_media_section', array(
        'title'   => 'Social Media',
        'panel'   => 'newsit_theme_options_panel',
    ));

    $wp_customize->add_setting( 'newsit_facebook_link', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));
    $wp_customize->add_control( 'newsit_facebook_link', array(
        'label'  => 'Facebook Link',
        'section' => 'newsit_social_media_section',
        'type'  => 'text',
    ));

    $wp_customize->add_setting( 'newsit_twitter_link', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));
    $wp_customize->add_control( 'newsit_twitter_link', array(
        'label'  => 'Twitter Link',
        'section' => 'newsit_social_media_section',
        'type'  => 'text',
    ));

    $wp_customize->add_setting( 'newsit_linkedin_link', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));
    $wp_customize->add_control( 'newsit_linkedin_link', array(
        'label'  => 'LinkedIn Link',
        'section' => 'newsit_social_media_section',
        'type'  => 'text',
    ));

    $wp_customize->add_setting( 'newsit_youtube_link', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));
    $wp_customize->add_control( 'newsit_youtube_link', array(
        'label'  => 'YouTube Link',
        'section' => 'newsit_social_media_section',
        'type'  => 'text',
    ));

    $wp_customize->add_setting( 'newsit_instagram_link', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));
    $wp_customize->add_control( 'newsit_instagram_link', array(
        'label'  => 'Instagram Link',
        'section' => 'newsit_social_media_section',
        'type'  => 'text',
    ));

    $wp_customize->add_setting( 'newsit_pinterest_link', array(
        'default' => '',
        'transport' => 'refresh',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ));
    $wp_customize->add_control( 'newsit_pinterest_link', array(
        'label'  => 'Pinterest Link',
        'section' => 'newsit_social_media_section',
        'type'  => 'text',
    ));
}
add_action( 'customize_register', 'newsit_theme_options' );