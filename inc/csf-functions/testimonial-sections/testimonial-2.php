<?php
// Create a testimonial section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Testimonial Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'          => 'v2-testimonial-rep',
            'type'        => 'repeater',
            'title'       => esc_html__( 'Add Client Testimonial', 'wp10ms' ),
            'button_title' => esc_html__( 'Add More', 'wp10ms' ),
            'fields'      => array(
                array(
                    'id'    => 'v2-testimonial-h2',
                    'type'  => 'text',
                    'title' => esc_html__( 'Testimonial', 'wp10ms' )
                ),
                array(
                    'id'    => 'v2-testimonial-img',
                    'type'  => 'media',
                    'title' => esc_html__( 'Client Avatar', 'wp10ms' )
                ),
                array(
                    'id'    => 'v2-testimonial-h3',
                    'type'  => 'text',
                    'title' => esc_html__( 'Client Name', 'wp10ms' )
                ),
                array(
                    'id'    => 'v2-testimonial-p',
                    'type'  => 'text',
                    'title' => esc_html__( 'Client Profession', 'wp10ms' )
                ),
            ),
        ),
    ),
) );

// // Create a testimonial section
// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'Testimonial Section',
//     'fields' => array(
//         array(
//             'id' => 'v2-testimonial-rep',
//             'type' => 'repeater',
//             'title' => 'Add Client Testimonial',
//             'button_title' => 'Add More',
//             'fields' => array(
//                 array(
//                     'id' => 'v2-testimonial-h2',
//                     'type' => 'text',
//                     'title' => 'Testimonial'
//                 ),
//                 array(
//                     'id' => 'v2-testimonial-img',
//                     'type' => 'media',
//                     'title' => 'Client Avatar'
//                 ),
//                 array(
//                     'id' => 'v2-testimonial-h3',
//                     'type' => 'text',
//                     'title' => 'Client Name'
//                 ),
//                 array(
//                     'id' => 'v2-testimonial-p',
//                     'type' => 'text',
//                     'title' => 'Client Profession'
//                 ),
//             ),
//         ),
//     ),
    
// ) );