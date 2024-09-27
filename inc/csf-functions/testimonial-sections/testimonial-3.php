<?php
// Create a testimonial section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Testimonial Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'    => 'v3-testimonial-p',
            'type'  => 'text',
            'title' => esc_html__( 'Top Title', 'wp10ms' )
        ),
        array(
            'id'    => 'v3-testimonial-h1',
            'type'  => 'text',
            'title' => esc_html__( 'Section Title', 'wp10ms' )
        ),
        array(
            'id'          => 'v3-testimonial-rep',
            'type'        => 'repeater',
            'title'       => esc_html__( 'Add Client Testimonial', 'wp10ms' ),
            'button_title' => esc_html__( 'Add More', 'wp10ms' ),
            'fields'      => array(
                array(
                    'id'    => 'v3-testimonial-h2',
                    'type'  => 'text',
                    'title' => esc_html__( 'Testimonial', 'wp10ms' )
                ),
                array(
                    'id'    => 'v3-testimonial-details',
                    'type'  => 'textarea',
                    'title' => esc_html__( 'Company Details', 'wp10ms' ),
                    'default' => '<a href="#">Symash Petel,</a> CEO-Aliner',
                ),
            ),
        ),
        array(
            'id'    => 'v3-testimonial-banner',
            'type'  => 'media',
            'title' => esc_html__( 'Section Banner', 'wp10ms' )
        ),
    ),
) );

// // Create a testimonial section
// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'Testimonial Section',
//     'fields' => array(
//         array(
//             'id' => 'v3-testimonial-p',
//             'type' => 'text',
//             'title' => 'Top Title'
//         ),
//         array(
//             'id' => 'v3-testimonial-h1',
//             'type' => 'text',
//             'title' => 'Section Title'
//         ),
//         array(
//             'id' => 'v3-testimonial-rep',
//             'type' => 'repeater',
//             'title' => 'Add Client Testimonial',
//             'button_title' => 'Add More',
//             'fields' => array(
//                 array(
//                     'id' => 'v3-testimonial-h2',
//                     'type' => 'text',
//                     'title' => 'Testimonial'
//                 ),
//                 array(
//                     'id' => 'v3-testimonial-details',
//                     'type' => 'textarea',
//                     'title' => 'Company Details',
//                     'default' => '<a href="#">Symash Petel,</a> CEO-Aliner',
//                 ),
//             ),
//         ),
//         array(
//             'id' => 'v3-testimonial-banner',
//             'type' => 'media',
//             'title' => 'Section Banner'
//         ),
//     ),
    
// ) );