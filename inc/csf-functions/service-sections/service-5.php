<?php
// Create a service section version 5
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Service Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'    => 'v5-service-p',
            'type'  => 'text',
            'title' => esc_html__( 'Section Subtitle', 'wp10ms' ),
            'default' => esc_html__( 'How Can We Help You', 'wp10ms' ),
        ),
        array(
            'id'    => 'v5-service-h1',
            'type'  => 'text',
            'title' => esc_html__( 'Section Title', 'wp10ms' ),
            'default' => esc_html__( 'We Provide Awesome Solutions To Grow Your Business', 'wp10ms' ),
        ),
        array(
            'id'     => 'v5-service-box-rep',
            'type'   => 'repeater',
            'title'  => esc_html__( 'Service Items', 'wp10ms' ),
            'button_title' => esc_html__( 'Add Service', 'wp10ms' ),
            'max'    => 6,
            'fields' => array(
                array(
                    'id'    => 'v5-service-box-img',
                    'type'  => 'media',
                    'title' => esc_html__( 'Service Background Image', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v5-service-box-icon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Service Icon', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v5-service-box-link',
                    'type'  => 'link',
                    'title' => esc_html__( 'Service Title & Link', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v5-service-box-p',
                    'type'  => 'textarea',
                    'title' => esc_html__( 'Service Description', 'wp10ms' ),
                    'default' => esc_html__( 'Quis autem vel eum reprehenderit qui in voluptate velit esse quam nihil molestiae consequatur.', 'wp10ms' ),
                ),
            ),
        ),
    )
));

// // Create a service section version 5
// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'Service Section',
//     'fields' => array(
//         array(
//             'id' => 'v5-service-p',
//             'type' => 'text',
//             'title' => 'Section Subtitle',
//             'default' => 'How can help you',
//         ),
//         array(
//             'id' => 'v5-service-h1',
//             'type' => 'text',
//             'title' => 'Section Title',
//             'default' => 'We Provide Awesome Solutions To Growth Your Business',
//         ),
//         array(
//             'id'            => 'v5-service-box-rep',
//             'type'          => 'repeater',
//             'title'         => 'Service Items',
//             'button_title'  => 'Add Service',
//             'max'           => '6',
//             'fields'        => array(
//                 array(
//                     'id'    => 'v5-service-box-img',
//                     'type'  => 'media',
//                     'title' => 'Service Background Image',
//                 ),
//                 array(
//                     'id'    => 'v5-service-box-icon',
//                     'type'  => 'icon',
//                     'title' => 'Service Icon',
//                 ),
//                 array(
//                     'id'    => 'v5-service-box-link',
//                     'type'  => 'link',
//                     'title' => 'Service Title & Link',
//                 ),
//                 array(
//                     'id' => 'v5-service-box-p',
//                     'type' => 'textarea',
//                     'title' => 'Service Description',
//                     'default' => 'Quis autem veleum reprehenderit quin volupta esse quam.',
//                 ),
//             ),
//         ),
//     )
// ));
