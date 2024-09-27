<?php

// Create a global settings section
CSF::createSection( $prefix, array(
    'parent' => 'global',
    'title'  => esc_html__( 'Breadcrumb Section', 'wp10ms' ),
    'fields' => array(
        // Breadcrumb Banner
        array(
            'id'    => 'breadcrumb-banner',
            'type'  => 'media',
            'title' => esc_html__( 'Breadcrumb Banner', 'wp10ms' ),
        ),
    ),
) );

    // // Create a global settings tab
    // CSF::createSection( $prefix, array(
    //     'id'    => 'global',
    //     'title' => 'Global Settings',
    // ) );
    // // Create a global settings
    // CSF::createSection( $prefix, array(
    //     'parent' => 'global',
    //     'title'  => 'Breadcrumb Section',
    //     'fields' => array(

    //         // Breadcrumb Banner
    //         array(
    //             'id'    => 'breadcrumb-banner',
    //             'type'  => 'media',
    //             'title' => 'Breadcrumb Banner',
    //         ),
    
    //     )
    // ) );