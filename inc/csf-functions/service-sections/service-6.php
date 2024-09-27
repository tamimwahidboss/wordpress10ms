<?php
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Service Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'    => 'v6-service-title-span',
            'type'  => 'text',
            'title' => esc_html__( 'Service Button Text', 'wp10ms' ),
            'default' => esc_html__( 'What We Do', 'wp10ms' ),
        ),
        array(
            'id'    => 'v6-service-h1',
            'type'  => 'text',
            'title' => esc_html__( 'Main Service Title', 'wp10ms' ),
            'default' => esc_html__( 'We Provide Best Solutions For IT Business', 'wp10ms' ),
        ),
        array(
            'id'            => 'v6-service-box-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'Service Items', 'wp10ms' ),
            'button_title'  => esc_html__( 'Add Service Item', 'wp10ms' ),
            'max'           => 6,
            'fields'        => array(
                array(
                    'id'    => 'v6-service-box-img',
                    'type'  => 'media',
                    'title' => esc_html__( 'Service Background Image', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v6-service-box-icon',
                    'type'  => 'media', // Can use 'icon' or 'media'
                    'title' => esc_html__( 'Service Icon Image', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v6-service-box-h3',
                    'type'  => 'text',
                    'title' => esc_html__( 'Service Title', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v6-service-box-p',
                    'type'  => 'textarea',
                    'title' => esc_html__( 'Service Description', 'wp10ms' ),
                    'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v6-service-box-link',
                    'type'  => 'link',
                    'title' => esc_html__( 'Service Link', 'wp10ms' ),
                ),
            ),
        ),
    ),
));

// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'Service Section',
//     'fields' => array(
//         array(
//             'id'    => 'v6-service-title-span',
//             'type'  => 'text',
//             'title' => 'Service Button Text',
//             'default' => 'What we Do',
//         ),
//         array(
//             'id'    => 'v6-service-h1',
//             'type'  => 'text',
//             'title' => 'Main Service Title',
//             'default' => 'We Provide Best Solutions For IT Business',
//         ),
//         array(
//             'id'            => 'v6-service-box-rep',
//             'type'          => 'repeater',
//             'title'         => 'Service Items',
//             'button_title'  => 'Add Service Item',
//             'max'           => '6',
//             'fields'        => array(
//                 array(
//                     'id'    => 'v6-service-box-img',
//                     'type'  => 'media',
//                     'title' => 'Service Background Image',
//                 ),
//                 array(
//                     'id'    => 'v6-service-box-icon',
//                     'type'  => 'media', // can use icon or media
//                     'title' => 'Service Icon Image',
//                 ),
//                 array(
//                     'id'    => 'v6-service-box-h3',
//                     'type'  => 'text',
//                     'title' => 'Service Title',
//                 ),
//                 array(
//                     'id'    => 'v6-service-box-p',
//                     'type'  => 'textarea',
//                     'title' => 'Service Description',
//                     'default' => 'Lorem ipsum dolor sit consectetur adipiscing eiusmod tempor.',
//                 ),
//                 array(
//                     'id'    => 'v6-service-box-link',
//                     'type'  => 'link',
//                     'title' => 'Service Link',
//                 ),
//             ),
//         ),
//     ),
// ));
