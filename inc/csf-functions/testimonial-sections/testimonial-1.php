<?php
// Create a testimonial section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Testimonial Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'    => 'v1-testimonial-banner',
            'type'  => 'media',
            'title' => esc_html__( 'Section Banner', 'wp10ms' )
        ),
        array(
            'id'          => 'v1-testimonial-rep',
            'type'        => 'repeater',
            'title'       => esc_html__( 'Add Client Testimonial', 'wp10ms' ),
            'button_title' => esc_html__( 'Add more', 'wp10ms' ),
            'fields'      => array(
                array(
                    'id'    => 'v1-testimonial-h2',
                    'type'  => 'text',
                    'title' => esc_html__( 'Plan Name', 'wp10ms' )
                ),
                array(
                    'id'    => 'v1-testimonial-h3',
                    'type'  => 'text',
                    'title' => esc_html__( 'Plan Name', 'wp10ms' )
                ),
                array(
                    'id'    => 'v1-testimonial-p',
                    'type'  => 'text',
                    'title' => esc_html__( 'Details', 'wp10ms' )
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
    //             'id' => 'v1-testimonial-banner',
    //             'type' => 'media',
    //             'title' => 'Section Banner'
    //         ),
    //         array(
    //             'id' => 'v1-testimonial-rep',
    //             'type' => 'repeater',
    //             'title' => 'Add Client testimonial',
    //             'button_title' => 'Add more',
    //             'fields' => array(
    //                 array(
    //                     'id' => 'v1-testimonial-h2',
    //                     'type' => 'text',
    //                     'title' => 'Plan Name'
    //                 ),
    //                 array(
    //                     'id' => 'v1-testimonial-h3',
    //                     'type' => 'text',
    //                     'title' => 'Plan Name'
    //                 ),
    //                 array(
    //                     'id' => 'v1-testimonial-p',
    //                     'type' => 'text',
    //                     'title' => 'Details'
    //                 ),
    //             ),
    //         ),
    //     ),
        
    // ) );