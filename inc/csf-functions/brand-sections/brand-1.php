<?php
// Create a client brand section
CSF::createSection( $prefix, array(
    'parent' => 'global',
    'title'  => esc_html__( 'Brand Section', 'wp10ms' ),
    'fields' => array(

        // Repeater module for adding client brands
        array(
            'id'          => 'v1-brand-rep',
            'type'        => 'repeater',
            'title'       => esc_html__( 'Add Client Brand', 'wp10ms' ),
            'button_title' => esc_html__( 'Add more', 'wp10ms' ),
            'fields'      => array(

                // Add client brand logo
                array(
                    'id'    => 'v1-brand-logo',
                    'type'  => 'media',
                    'title' => esc_html__( 'Brand Logo', 'wp10ms' ),
                ),
            ),
        ),
    ),
) );

    // // Create a client brand section
    // CSF::createSection( $prefix, array(
    //     'parent' => 'home-page',
    //     'title'  => 'Brand Section',
    //     'fields' => array(
    //         // repeater module
    //         array(
    //             'id' => 'v1-brand-rep',
    //             'type' => 'repeater',
    //             'title' => 'Add Client Brand',
    //             'button_title' => 'Add more',
    //             'fields' => array(
    //                 // Add client brand logo
    //                 array(
    //                     'id' => 'v1-brand-logo',
    //                     'type' => 'media',
    //                     'title' => 'Brand Logo'
    //                 ),
    //             ),
    //         ),
    //     ),
        
    // ) );