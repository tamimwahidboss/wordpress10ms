<?php
// Create an About Page section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'About Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'    => 'v3-about-p',
            'type'  => 'text',
            'title' => esc_html__( 'Section Title (Paragraph)', 'wp10ms' ),
            'default' => esc_html__( 'About Company', 'wp10ms' ),
        ),
        array(
            'id'    => 'v3-about-span',
            'type'  => 'text',
            'title' => esc_html__( 'Section Title (Span)', 'wp10ms' ),
            'default' => esc_html__( 'About Company', 'wp10ms' ),
        ),
        array(
            'id'    => 'v3-about-h1',
            'type'  => 'text',
            'title' => esc_html__( 'Section Title (Heading)', 'wp10ms' ),
            'default' => esc_html__( 'Get’s IT Solutions For <br>Expert Consultants', 'wp10ms' ),
        ),
        array(
            'id'            => 'v3-about-box-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'List Items', 'wp10ms' ),
            'button_title'  => esc_html__( 'Add List Item', 'wp10ms' ),
            'max'           => '10',
            'fields'        => array(
                array(
                    'id' => 'v3-about-box-icon',
                    'type' => 'icon',
                    'title' => esc_html__( 'Box Icon', 'wp10ms' ),
                    'default' => 'fal fa-users',
                ),
                array(
                    'id' => 'v3-about-box-h3',
                    'type' => 'text',
                    'title' => esc_html__( 'Box Title', 'wp10ms' ),
                    'default' => esc_html__( 'Professional Consultants', 'wp10ms' ),
                ),
                array(
                    'id' => 'v3-about-box-p',
                    'type' => 'text',
                    'title' => esc_html__( 'Box Description', 'wp10ms' ),
                    'default' => esc_html__( 'Professional Consultants', 'wp10ms' ),
                ),
            ),
        ),
        array(
            'id'    => 'v3-about-form-p',
            'type'  => 'text',
            'title' => esc_html__( 'Form Short Title (Paragraph)', 'wp10ms' ),
        ),
        array(
            'id'    => 'v3-about-form-h1',
            'type'  => 'text',
            'title' => esc_html__( 'Form Short Title (Heading)', 'wp10ms' ),
        ),
    )
) );

    // // Create a about page section
    // CSF::createSection( $prefix, array(
    //     'parent' => 'home-page',
    //     'title'  => 'About Section',
    //     'fields' => array(
    //         array(
    //             'id'    => 'v3-about-p',
    //             'type'  => 'text',
    //             'title' => 'Title',
    //             'default' => 'About Company',
    //         ),
    //         array(
    //             'id'    => 'v3-about-span',
    //             'type'  => 'text',
    //             'title' => 'Title',
    //             'default' => 'About Company',
    //         ),
    //         array(
    //             'id'    => 'v3-about-h1',
    //             'type'  => 'text',
    //             'title' => 'Title',
    //             'default' => 'Get’s IT Solutions For <br>Expert Consultants',
    //         ),
    //         array(
    //             'id'            => 'v3-about-box-rep',
    //             'type'          => 'repeater',
    //             'title'         => 'List Item',
    //             'button_title'  => 'Add List',
    //             'max'           => '10',
    //             'fields'        => array(
    //                 array(
    //                     'id' => 'v3-about-box-icon',
    //                     'type' => 'icon',
    //                     'title' => 'Add Icon',
    //                     'default' => 'fal fa-users',
    //                 ),
    //                 array(
    //                     'id' => 'v3-about-box-h3',
    //                     'type' => 'text',
    //                     'title' => 'Add Box Title',
    //                     'default' => 'Professinoal Consultants',
    //                 ),
    //                 array(
    //                     'id' => 'v3-about-box-p',
    //                     'type' => 'text',
    //                     'title' => 'Box Description',
    //                     'default' => 'Professinoal Consultants',
    //                 ),
    //             ),
    //         ),
    //         array(
    //             'id'    => 'v3-about-form-p',
    //             'type'  => 'text',
    //             'title' => 'Form Short Title',
    //         ),
    //         array(
    //             'id'    => 'v3-about-form-h1',
    //             'type'  => 'text',
    //             'title' => 'Form Short Title',
    //         ),
    //     )
    // ) );