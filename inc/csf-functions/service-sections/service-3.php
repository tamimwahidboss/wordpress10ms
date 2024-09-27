<?php
// Create a about page section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Service Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'    => 'v3-service-span',
            'type'  => 'text',
            'title' => esc_html__( 'Section Name', 'wp10ms' ),
            'default' => esc_html__( 'Professional Consultants', 'wp10ms' ),
        ),
        array(
            'id'    => 'v3-service-p',
            'type'  => 'text',
            'title' => esc_html__( 'Service Short Title', 'wp10ms' ),
            'default' => esc_html__( 'Professional Consultants', 'wp10ms' ),
        ),
        array(
            'id'    => 'v3-service-h1',
            'type'  => 'text',
            'title' => esc_html__( 'Service Title', 'wp10ms' ),
        ),
        array(
            'id'     => 'v3-service-box-rep',
            'type'   => 'repeater',
            'title'  => esc_html__( 'Service Item', 'wp10ms' ),
            'button_title' => esc_html__( 'Add Service', 'wp10ms' ),
            'max'    => 6,
            'fields' => array(
                array(
                    'id'    => 'v3-service-box-img',
                    'type'  => 'media',
                    'title' => esc_html__( 'Add Service Image', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v3-service-box-icon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Service Icon', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v3-service-box-link',
                    'type'  => 'link',
                    'title' => esc_html__( 'Service Title', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v3-service-box-p',
                    'type'  => 'text',
                    'title' => esc_html__( 'Service Description', 'wp10ms' ),
                    'default' => esc_html__( 'Professional Consultants', 'wp10ms' ),
                ),
            ),
        ),
    )
) );

// // Create a about page section
// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'Service Section',
//     'fields' => array(
//         array(
//             'id' => 'v3-service-span',
//             'type' => 'text',
//             'title' => 'Section Name',
//             'default' => 'Professinoal Consultants',
//         ),
//         array(
//             'id' => 'v3-service-p',
//             'type' => 'text',
//             'title' => 'Service Short Title',
//             'default' => 'Professinoal Consultants',
//         ),
//         array(
//             'id' => 'v3-service-h1',
//             'type' => 'text',
//             'title' => 'Service Title',
//         ),
//         array(
//             'id'            => 'v3-service-box-rep',
//             'type'          => 'repeater',
//             'title'         => 'Service Item',
//             'button_title'  => 'Add Service',
//             'max'           => '6',
//             'fields'        => array(
//                 array(
//                     'id'    => 'v3-service-box-img',
//                     'type'  => 'media',
//                     'title' => 'Add Service Image',
//                 ),
//                 array(
//                     'id'    => 'v3-service-box-icon',
//                     'type'  => 'icon',
//                     'title' => 'Service Icon',
//                 ),
//                 array(
//                     'id'    => 'v3-service-box-link',
//                     'type'  => 'link',
//                     'title' => 'Service Title',
//                 ),
//                 array(
//                     'id' => 'v3-service-box-p',
//                     'type' => 'text',
//                     'title' => 'Service Description',
//                     'default' => 'Professinoal Consultants',
//                 ),
//             ),
//         ),
//     )
// ) );