<?php
// Create a service section version 4
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Service', 'wp10ms' ),
    'fields' => array(
        array(
            'id'    => 'v4-service-p',
            'type'  => 'text',
            'title' => esc_html__( 'Section Name', 'wp10ms' ),
            'default' => esc_html__( 'How Can We Help You', 'wp10ms' ),
        ),
        array(
            'id'    => 'v4-service-h1',
            'type'  => 'text',
            'title' => esc_html__( 'Service Title', 'wp10ms' ),
            'default' => esc_html__( 'We Provide Best IT Solutions For Business for 25 Years', 'wp10ms' ),
        ),
        array(
            'id'     => 'v4-service-box-rep',
            'type'   => 'repeater',
            'title'  => esc_html__( 'Service Items', 'wp10ms' ),
            'button_title' => esc_html__( 'Add Service', 'wp10ms' ),
            'max'    => 6,
            'fields' => array(
                array(
                    'id'    => 'v4-service-box-icon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Service Icon', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v4-service-box-title',
                    'type'  => 'text',
                    'title' => esc_html__( 'Service Title', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v4-service-box-link',
                    'type'  => 'link',
                    'title' => esc_html__( 'Service Link', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v4-service-box-p',
                    'type'  => 'textarea',
                    'title' => esc_html__( 'Service Description', 'wp10ms' ),
                    'default' => esc_html__( 'Sed perspiciatis unde omnis natus sit voluptatem.', 'wp10ms' ),
                ),
            ),
        ),
    )
));

// // Create a service section version 4
// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'Service',
//     'fields' => array(
//         array(
//             'id' => 'v4-service-p',
//             'type' => 'text',
//             'title' => 'Section Name',
//             'default' => 'How can help you',
//         ),
//         array(
//             'id' => 'v4-service-h1',
//             'type' => 'text',
//             'title' => 'Service Title',
//             'default' => 'We Provide Best IT Solutions For Business 25 Years',
//         ),
//         array(
//             'id'            => 'v4-service-box-rep',
//             'type'          => 'repeater',
//             'title'         => 'Service Items',
//             'button_title'  => 'Add Service',
//             'max'           => '6',
//             'fields'        => array(
//                 array(
//                     'id'    => 'v4-service-box-icon',
//                     'type'  => 'icon',
//                     'title' => 'Service Icon',
//                 ),
//                 array(
//                     'id'    => 'v4-service-box-title',
//                     'type'  => 'text',
//                     'title' => 'Service Title',
//                 ),
//                 array(
//                     'id'    => 'v4-service-box-link',
//                     'type'  => 'link',
//                     'title' => 'Service Link',
//                 ),
//                 array(
//                     'id' => 'v4-service-box-p',
//                     'type' => 'textarea',
//                     'title' => 'Service Description',
//                     'default' => 'Sed perspe unde omnis natus sit voluptatem.',
//                 ),
//             ),
//         ),
//     )
// ));
