<?php
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Service Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'    => 'v7-secvice-sec-h6',
            'type'  => 'text',
            'title' => esc_html__( 'Section Subtitle', 'wp10ms' ),
            'default' => esc_html__( 'Our Services', 'wp10ms' ),
        ),
        array(
            'id'    => 'v7-secvice-sec-h2',
            'type'  => 'text',
            'title' => esc_html__( 'Section Title', 'wp10ms' ),
            'default' => esc_html__( 'Our Proposition Data Science and Analytics Services', 'wp10ms' ),
        ),
        array(
            'id'            => 'v7-service-repeater',
            'type'          => 'repeater',
            'title'         => esc_html__( 'Single Service', 'wp10ms' ),
            'button_title'  => esc_html__( 'Add More', 'wp10ms' ),
            'max'           => 3,
            'fields'        => array(
                array(
                    'id'    => 'v7-single-service-icon',
                    'type'  => 'media',
                    'title' => esc_html__( 'Service Icon', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v7-single-service-h4',
                    'type'  => 'text',
                    'title' => esc_html__( 'Service Title', 'wp10ms' ),
                    'default' => esc_html__( 'Product Engineering', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v7-single-service-des',
                    'type'  => 'textarea',
                    'title' => esc_html__( 'Service Description', 'wp10ms' ),
                    'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v7-single-service-btn-text',
                    'type'  => 'text',
                    'title' => esc_html__( 'Button Title', 'wp10ms' ),
                    'default' => esc_html__( 'Read More', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v7-single-service-btn-link',
                    'type'  => 'link',
                    'title' => esc_html__( 'Button Link', 'wp10ms' ),
                    'default' => esc_url( '#' ),
                ),
                array(
                    'id'    => 'v7-single-service-btn-icon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Button Icon', 'wp10ms' ),
                    'default' => 'far fa-long-arrow-right',
                ),
            ),
        ),
    ),
));

// // Create a v7 secvice section
// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'Service Section',
//     'fields' => array(
//         array(
//             'id' => 'v7-secvice-sec-h6',
//             'type' => 'text',
//             'title' => 'Add Title',
//             'default' => 'Our Services',
//         ),
//         array(
//             'id' => 'v7-secvice-sec-h2',
//             'type' => 'text',
//             'title' => 'Add Title',
//             'default' => 'Our Proposition Data Science and Analytics Services',
//         ),
//         array(
//             'id' => 'v7-service-repeater',
//             'type' => 'repeater',
//             'title' => 'Single Service',
//             'button_title' => 'Add More',
//             'max' => '3',
//             'fields' => array(
//                 array(
//                     'id' => 'v7-single-service-icon',
//                     'type' => 'media',
//                     'title' => 'Add Service Icon',
//                 ),
//                 array(
//                     'id' => 'v7-single-service-h4',
//                     'type' => 'text',
//                     'title' => 'Add Title',
//                     'default' => 'Product Engineering',
//                 ),
//                 array(
//                     'id' => 'v7-single-service-des',
//                     'type' => 'textarea',
//                     'title' => 'Add Description',
//                     'default' => 'Lorem ipsum dolor sitconsectetur adipiscing eiusmod tempor.',
//                 ),
//                 array(
//                     'id' => 'v7-single-service-btn-text',
//                     'type' => 'text',
//                     'title' => 'Button Title',
//                     'default' => 'Read More ',
//                 ),
//                 array(
//                     'id' => 'v7-single-service-btn-link',
//                     'type' => 'link',
//                     'title' => 'Button Link',
//                     'default' => '#',
//                 ),
//                 array(
//                     'id' => 'v7-single-service-btn-icon',
//                     'type' => 'icon',
//                     'title' => 'Button Icon',
//                     'default' => 'far fa-long-arrow-right',
//                 ),
//             ),
//         ),
//     ),
// ) );