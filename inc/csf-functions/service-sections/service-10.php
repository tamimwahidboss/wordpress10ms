<?php
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Service Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'      => 'v10-service-p',
            'type'    => 'text',
            'title'   => esc_html__( 'Section Subtitle', 'wp10ms' ),
            'default' => esc_html__( 'How We Can Help You', 'wp10ms' ),
        ),
        array(
            'id'      => 'v10-service-h1',
            'type'    => 'text',
            'title'   => esc_html__( 'Section Title', 'wp10ms' ),
            'default' => esc_html__( 'We Provide Awesome Solutions To Grow Your Business', 'wp10ms' ),
        ),
        array(
            'id'      => 'v10-service-des',
            'type'    => 'textarea',
            'title'   => esc_html__( 'Description', 'wp10ms' ),
            'default' => esc_html__( 'Discover how we can assist in achieving your business goals.', 'wp10ms' ),
        ),
        array(
            'id'            => 'v10-service-box-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'Service Items', 'wp10ms' ),
            'button_title'  => esc_html__( 'Add Service', 'wp10ms' ),
            'max'           => 4,
            'fields'        => array(
                array(
                    'id'    => 'v10-service-box-h4',
                    'type'  => 'text',
                    'title' => esc_html__( 'Skill Bar Title', 'wp10ms' ),
                ),
                array(
                    'id'      => 'v10-service-box-span',
                    'type'    => 'number',
                    'title'   => esc_html__( 'Skill Bar Progress (Number)', 'wp10ms' ),
                    'default' => 70,
                ),
            ),
        ),
        array(
            'id'      => 'v10-service-banner',
            'type'    => 'media',
            'title'   => esc_html__( 'Service Banner', 'wp10ms' ),
        ),
        array(
            'id'      => 'v10-service-ytv-link',
            'type'    => 'link',
            'title'   => esc_html__( 'YouTube Video Link', 'wp10ms' ),
        ),
        array(
            'id'      => 'v10-service-ytv-thumb',
            'type'    => 'media',
            'title'   => esc_html__( 'YouTube Video Thumbnail', 'wp10ms' ),
        ),
    ),
));

// // Create a service section version 5
// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'Service Section',
//     'fields' => array(
//         array(
//             'id' => 'v10-service-p',
//             'type' => 'text',
//             'title' => 'Section Subtitle',
//             'default' => 'How can help you',
//         ),
//         array(
//             'id' => 'v10-service-h1',
//             'type' => 'text',
//             'title' => 'Section Title',
//             'default' => 'We Provide Awesome Solutions To Growth Your Business',
//         ),
//         array(
//             'id' => 'v10-service-des',
//             'type' => 'textarea',
//             'title' => 'Description',
//             'default' => 'How can help you',
//         ),
//         array(
//             'id'            => 'v10-service-box-rep',
//             'type'          => 'repeater',
//             'title'         => 'Service Items',
//             'button_title'  => 'Add Service',
//             'max'           => 4,
//             'fields'        => array(
//                 array(
//                     'id'    => 'v10-service-box-h4',
//                     'type'  => 'text',
//                     'title' => 'Skill Bar Title',
//                 ),
//                 array(
//                     'id' => 'v10-service-box-span',
//                     'type' => 'number',
//                     'title' => 'Skill Bar Prgress(Number)',
//                     'default' => '70',
//                 ),
//             ),
//         ),
//         array(
//             'id' => 'v10-service-banner',
//             'type' => 'media',
//             'title' => 'Service Banner',
//         ),
//         array(
//             'id' => 'v10-service-ytv-link',
//             'type' => 'link',
//             'title' => 'YouTube Video Link',
//         ),
//         array(
//             'id' => 'v10-service-ytv-thumb',
//             'type' => 'media',
//             'title' => 'YT Video Thumbnail',
//         ),
    
//     )
// ));
