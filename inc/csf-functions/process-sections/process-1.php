<?php
// Create a Process Section
CSF::createSection( $prefix, array(
    'parent' => 'about-page',
    'title'  => esc_html__( 'Process Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'    => 'v1-prosess-span',
            'type'  => 'text',
            'title' => esc_html__( 'Section Name', 'wp10ms' ),
            'default' => esc_html__( 'process', 'wp10ms' ),
        ),
        array(
            'id'    => 'v1-prosess-p',
            'type'  => 'text',
            'title' => esc_html__( 'Add Short Title', 'wp10ms' ),
            'default' => esc_html__( 'Our working process', 'wp10ms' ),
        ),
        array(
            'id'    => 'v1-prosess-sec-h1',
            'type'  => 'text',
            'title' => esc_html__( 'Add Title', 'wp10ms' ),
            'default' => esc_html__( 'We Follow 4 steps to Grow Business', 'wp10ms' ),
        ),
        array(
            'id'            => 'v1-prosess-repeater',
            'type'          => 'repeater',
            'title'         => esc_html__( 'Add Single Process', 'wp10ms' ),
            'max'           => '4',
            'button_title'  => esc_html__( 'Add More', 'wp10ms' ),
            'fields'        => array(
                array(
                    'id'    => 'v1-prosess-box-icon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Add Box Icon', 'wp10ms' ),
                    'default' => 'fal fa-mug-hot',
                ),
                array(
                    'id'    => 'v1-single-prosess-h3',
                    'type'  => 'text',
                    'title' => esc_html__( 'Add Single Process Title', 'wp10ms' ),
                    'default' => esc_html__( 'Data Analysis', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v1-single-prosess-p',
                    'type'  => 'textarea',
                    'title' => esc_html__( 'Add Single Process Description', 'wp10ms' ),
                    'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v1-single-prosess-mt',
                    'type'  => 'text',
                    'title' => esc_html__( 'Row Margin Top (e.g., mt-70 or mt-40)', 'wp10ms' ),
                    'default' => esc_html__( '', 'wp10ms' ),
                ),
            ),
        ),
    ),
) );

// // Create a v1 prosess section
// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'Prosess Section',
//     'fields' => array(
//         array(
//             'id' => 'v1-prosess-span',
//             'type' => 'text',
//             'title' => 'Section Name',
//             'default' => 'process',
//         ),
//         array(
//             'id' => 'v1-prosess-p',
//             'type' => 'text',
//             'title' => 'Add Short Title',
//             'default' => 'Our working process',
//         ),
//         array(
//             'id' => 'v1-prosess-sec-h1',
//             'type' => 'text',
//             'title' => 'Add Title',
//             'default' => 'We Follow 4 steps to Grow Business',
//         ),
//         array(
//             'id' => 'v1-prosess-repeater',
//             'type' => 'repeater',
//             'title' => 'Add Single Prosess',
//             'max' => '4',
//             'button_title' => 'Add More',
//             'fields' => array(
//                 array(
//                     'id' => 'v1-prosess-box-icon',
//                     'type' => 'icon',
//                     'title' => 'Add Box Icon',
//                     'default' => 'fal fa-mug-hot',
//                 ),
//                 array(
//                     'id' => 'v1-single-prosess-h3',
//                     'type' => 'text',
//                     'title' => 'Add Single Prosess Icon',
//                     'default' => 'Data Analysis',
//                 ),
//                 array(
//                     'id' => 'v1-single-prosess-p',
//                     'type' => 'textarea',
//                     'title' => 'Add Single Prosess Icon',
//                     'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.',
//                 ),
//                 array(
//                     'id' => 'v1-single-prosess-mt',
//                     'type' => 'text',
//                     'title' => 'Row Margin Top(mt-70 or, mt-40)',
//                     'default' => ' ',
//                 ),
//             ),
//         ),
//     ),
// ) );