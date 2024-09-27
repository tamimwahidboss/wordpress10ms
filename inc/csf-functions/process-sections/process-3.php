<?php
// Create a v3 Process Section
CSF::createSection( $prefix, array(
    'parent' => 'about-page',
    'title'  => esc_html__( 'Process Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'    => 'v3-prosess-sec-h6',
            'type'  => 'text',
            'title' => esc_html__( 'Section Title', 'wp10ms' ),
            'default' => esc_html__( 'Our working process', 'wp10ms' ),
        ),
        array(
            'id'    => 'v3-prosess-sec-h2',
            'type'  => 'text',
            'title' => esc_html__( 'Main Title', 'wp10ms' ),
            'default' => esc_html__( 'We Follow 4 steps to Grow Business', 'wp10ms' ),
        ),
        array(
            'id'            => 'v3-prosess-repeater',
            'type'          => 'repeater',
            'title'         => esc_html__( 'Single Process', 'wp10ms' ),
            'max'           => '4',
            'button_title'  => esc_html__( 'Add More', 'wp10ms' ),
            'fields'        => array(
                array(
                    'id'    => 'v3-single-prosess-icon',
                    'type'  => 'media',
                    'title' => esc_html__( 'Add SVG Icon', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v3-single-prosess-h4',
                    'type'  => 'text',
                    'title' => esc_html__( 'Process Title', 'wp10ms' ),
                    'default' => esc_html__( 'Data Analysis', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v3-single-prosess-des',
                    'type'  => 'textarea',
                    'title' => esc_html__( 'Process Description', 'wp10ms' ),
                    'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v3-single-prosess-step',
                    'type'  => 'text',
                    'title' => esc_html__( 'Step Identifier', 'wp10ms' ),
                    'default' => esc_html__( 'Step-1', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v3-single-prosess-mt',
                    'type'  => 'text',
                    'title' => esc_html__( 'Row Margin Top (e.g., mt-70 or mt-40)', 'wp10ms' ),
                    'default' => esc_html__( '', 'wp10ms' ),
                ),
            ),
        ),
    ),
) );

// // Create a v3 prosess section
// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'Prosess Section',
//     'fields' => array(
//         array(
//             'id' => 'v3-prosess-sec-h6',
//             'type' => 'text',
//             'title' => 'Add Title',
//             'default' => 'Our working process',
//         ),
//         array(
//             'id' => 'v3-prosess-sec-h2',
//             'type' => 'text',
//             'title' => 'Add Title',
//             'default' => 'We Follow 4 steps to Grow Business',
//         ),
//         array(
//             'id' => 'v3-prosess-repeater',
//             'type' => 'repeater',
//             'title' => 'Single Prosess',
//             'max' => '4',
//             'button_title' => 'Add More',
//             'fields' => array(
//                 array(
//                     'id' => 'v3-single-prosess-icon',
//                     'type' => 'media',
//                     'title' => 'Add SVG Icon',
//                 ),
//                 array(
//                     'id' => 'v3-single-prosess-h4',
//                     'type' => 'text',
//                     'title' => 'Add Single Prosess Icon',
//                     'default' => 'Data Analysis',
//                 ),
//                 array(
//                     'id' => 'v3-single-prosess-des',
//                     'type' => 'textarea',
//                     'title' => 'Add Single Prosess Icon',
//                     'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.',
//                 ),
//                 array(
//                     'id' => 'v3-single-prosess-step',
//                     'type' => 'text',
//                     'title' => 'Add Step',
//                     'default' => 'Step-1',
//                 ),
//                 array(
//                     'id' => 'v3-single-prosess-mt',
//                     'type' => 'text',
//                     'title' => 'Row Margin Top(mt-70 or, mt-40)',
//                     'default' => ' ',
//                 ),
//             ),
//         ),
//     ),
// ) );