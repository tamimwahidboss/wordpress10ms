<?php
// Create a section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Service Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'    => 'v1-service-title-p',
            'type'  => 'text',
            'title' => esc_html__( 'Hero Title', 'wp10ms' ),
            'default' => esc_html__( 'Provide Best IT Services Your Business', 'wp10ms' ),
        ),
        array(
            'id'    => 'v1-service-title-h1',
            'type'  => 'text',
            'title' => esc_html__( 'Hero Title', 'wp10ms' ),
            'default' => esc_html__( 'Provide Best IT </br> Services For Your Business', 'wp10ms' ),
        ),
        array(
            'id'     => 'v1-service-box-rep',
            'type'   => 'repeater',
            'title'  => esc_html__( 'Service Boxes', 'wp10ms' ),
            'max'    => 4,
            'button_title' => esc_html__( 'Add Box', 'wp10ms' ),
            'fields' => array(
                array(
                    'id'    => 'v1-service-box-icon',
                    'type'  => 'media',
                    'title' => esc_html__( 'Box Icon', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v1-service-box-title',
                    'type'  => 'text',
                    'title' => esc_html__( 'Box Title', 'wp10ms' ),
                    'default' => esc_html__( 'Provide Best IT Services', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v1-service-box-p',
                    'type'  => 'text',
                    'title' => esc_html__( 'Box Description', 'wp10ms' ),
                    'default' => esc_html__( 'Provide Best IT Services For Your Business', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v1-service-box-btn',
                    'type'  => 'link',
                    'title' => esc_html__( 'Button Link', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v1-service-box-btn-icon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Button Icon', 'wp10ms' ),
                ),
            ),
        ),
    )
) );

// // Create a section
// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'Service Section',
//     'fields' => array(
//         array(
//             'id'    => 'v1-service-title-p',
//             'type'  => 'text',
//             'title' => 'Hero Title',
//             'default' => 'Provide Best It Services Your Business',
//         ),
//         array(
//             'id'    => 'v1-service-title-h1',
//             'type'  => 'text',
//             'title' => 'Hero Title',
//             'default' => 'Provide Best It </br> Services For Your Business',
//         ),
//         array(
//             'id'     => 'v1-service-box-rep',
//             'type'   => 'repeater',
//             'title'  => 'Repeater',
//             'max'   => '4',
//             'button_title' => 'Add Box',
//             'fields' => array(
//                 array(
//                     'id'    => 'v1-service-box-icon',
//                     'type'  => 'media',
//                     'title' => 'Title',
//                 ),
//                 array(
//                     'id'    => 'v1-service-box-title',
//                     'type'  => 'text',
//                     'title' => 'Title',
//                     'default' => 'Provide Best It Services',
//                 ),
//                 array(
//                     'id'    => 'v1-service-box-p',
//                     'type'  => 'text',
//                     'title' => 'Title',
//                     'default' => 'Provide Best It Services For Your Business',
//                 ),
//                 array(
//                     'id'    => 'v1-service-box-btn',
//                     'type'  => 'link',
//                     'title' => 'Title',
//                 ),
//                 array(
//                     'id'    => 'v1-service-box-btn-icon',
//                     'type'  => 'icon',
//                     'title' => 'Title',
//                 ),
//             ),
//         ),
//     )
// ) );