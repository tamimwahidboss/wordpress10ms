<?php
// Create an About Page section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'About Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'    => 'v2-about-sec-title-p',
            'type'  => 'text',
            'title' => esc_html__( 'Section Title (Paragraph)', 'wp10ms' ),
            'default' => esc_html__( 'About Company', 'wp10ms' ),
        ),
        array(
            'id'    => 'v2-about-sec-title-h1',
            'type'  => 'text',
            'title' => esc_html__( 'Section Title (Heading)', 'wp10ms' ),
            'default' => esc_html__( 'Get’s IT Solutions For <br>Expert Consultants', 'wp10ms' ),
        ),
        array(
            'id'    => 'v2-about-sec-des',
            'type'  => 'textarea',
            'title' => esc_html__( 'Section Description', 'wp10ms' ),
            'default' => esc_html__( 'Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium doloremque laudantium totam.', 'wp10ms' ),
        ),
        array(
            'id'    => 'v2-about-list-banner',
            'type'  => 'media',
            'title' => esc_html__( 'About Banner', 'wp10ms' ),
        ),
        array(
            'id'            => 'v2-about-list-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'List Items', 'wp10ms' ),
            'button_title'  => esc_html__( 'Add List Item', 'wp10ms' ),
            'max'           => '10',
            'fields'        => array(
                array(
                    'id' => 'v2-about-list',
                    'type' => 'text',
                    'title' => esc_html__( 'List Item Title', 'wp10ms' ),
                    'default' => esc_html__( 'Professional Consultants', 'wp10ms' ),
                ),
            ),
        ),
        array(
            'id'    => 'v2-about-sec-banner1',
            'type'  => 'media',
            'title' => esc_html__( 'Banner Left 1', 'wp10ms' ),
        ),
        array(
            'id'    => 'v2-about-sec-banner2',
            'type'  => 'media',
            'title' => esc_html__( 'Banner Left 2', 'wp10ms' ),
        ),
    )
) );

    // // Create a about page section
    // CSF::createSection( $prefix, array(
    //     'parent' => 'home-page',
    //     'title'  => 'About Section',
    //     'fields' => array(
    //         array(
    //             'id'    => 'v2-about-sec-title-p',
    //             'type'  => 'text',
    //             'title' => 'Title',
    //             'default' => 'About Company',
    //         ),
    //         array(
    //             'id'    => 'v2-about-sec-title-h1',
    //             'type'  => 'text',
    //             'title' => 'Title',
    //             'default' => 'Get’s IT Solutions For <br>Expert Consultants',
    //         ),
    //         array(
    //             'id'    => 'v2-about-sec-des',
    //             'type'  => 'textarea',
    //             'title' => 'Description',
    //             'default' => 'Sed ut perspiciatis unde omnis natus error sit voluptatem accusa ntium doloremque laudantium totam.',
    //         ),
    //         array(
    //             'id'    => 'v2-about-list-banner',
    //             'type'  => 'media',
    //             'title' => 'About Banner',
    //         ),
    //         array(
    //             'id'            => 'v2-about-list-rep',
    //             'type'          => 'repeater',
    //             'title'         => 'List Item',
    //             'button_title'  => 'Add List',
    //             'max'           => '10',
    //             'fields'        => array(
    //                 array(
    //                     'id' => 'v2-about-list',
    //                     'type' => 'text',
    //                     'title' => 'Add List Title',
    //                     'default' => 'Professinoal Consultants',
    //                 ),
    //             ),
    //         ),
    //         array(
    //             'id'    => 'v2-about-sec-banner1',
    //             'type'  => 'media',
    //             'title' => 'Banner Left 1',
    //         ),
    //         array(
    //             'id'    => 'v2-about-sec-banner2',
    //             'type'  => 'media',
    //             'title' => 'Banner Left 2',
    //         ),
    //     )
    // ) );