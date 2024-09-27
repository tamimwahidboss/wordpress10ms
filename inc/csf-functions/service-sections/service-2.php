<?php
// Create an about page section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Service Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'    => 'v2-service-p',
            'type'  => 'text',
            'title' => esc_html__( 'Service Short Title', 'wp10ms' ),
            'default' => esc_html__( 'Professional Consultants', 'wp10ms' ),
        ),
        array(
            'id'    => 'v2-service-h1',
            'type'  => 'text',
            'title' => esc_html__( 'Service Title', 'wp10ms' ),
        ),
        array(
            'id'     => 'v2-service-box-rep',
            'type'   => 'repeater',
            'title'  => esc_html__( 'List Item', 'wp10ms' ),
            'button_title' => esc_html__( 'Add Service', 'wp10ms' ),
            'max'    => 6,
            'fields' => array(
                array(
                    'id'    => 'v2-service-box-icon',
                    'type'  => 'media',
                    'title' => esc_html__( 'Add Service Icon', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v2-service-box-h4',
                    'type'  => 'text',
                    'title' => esc_html__( 'Service Title', 'wp10ms' ),
                    'default' => esc_html__( 'Professional Consultants', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v2-service-box-p',
                    'type'  => 'text',
                    'title' => esc_html__( 'Service Description', 'wp10ms' ),
                    'default' => esc_html__( 'Professional Consultants', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v2-service-box-pop-link',
                    'type'  => 'link',
                    'title' => esc_html__( 'Service Link', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v2-service-box-pop-p',
                    'type'  => 'text',
                    'title' => esc_html__( 'Service Popup Description', 'wp10ms' ),
                    'default' => esc_html__( 'Professional Consultants', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v2-service-box-popupBtn-icon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Popup Button Icon', 'wp10ms' ),
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
//             'id' => 'v2-service-p',
//             'type' => 'text',
//             'title' => 'Service Short Title',
//             'default' => 'Professinoal Consultants',
//         ),
//         array(
//             'id' => 'v2-service-h1',
//             'type' => 'text',
//             'title' => 'Service Title',
//         ),
//         array(
//             'id'            => 'v2-service-box-rep',
//             'type'          => 'repeater',
//             'title'         => 'List Item',
//             'button_title'  => 'Add Service',
//             'max'           => '6',
//             'fields'        => array(
//                 array(
//                     'id'    => 'v2-service-box-icon',
//                     'type'  => 'media',
//                     'title' => 'Add Service Icon',
//                 ),
//                 array(
//                     'id' => 'v2-service-box-h4',
//                     'type' => 'text',
//                     'title' => 'Service Title',
//                     'default' => 'Professinoal Consultants',
//                 ),
//                 array(
//                     'id' => 'v2-service-box-p',
//                     'type' => 'text',
//                     'title' => 'Service Description',
//                     'default' => 'Professinoal Consultants',
//                 ),
//                 array(
//                     'id'    => 'v2-service-box-pop-link',
//                     'type'  => 'link',
//                     'title' => 'Service Link',
//                 ),
//                 array(
//                     'id' => 'v2-service-box-pop-p',
//                     'type' => 'text',
//                     'title' => 'Service Poppup Description',
//                     'default' => 'Professinoal Consultants',
//                 ),
//                 array(
//                     'id'    => 'v2-service-box-popupBtn-icon',
//                     'type'  => 'icon',
//                     'title' => 'Poppup BTN Icon',
//                 ),
                
//             ),
//         ),
//     )
// ) );