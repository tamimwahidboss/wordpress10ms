<?php
// Create a top header sub-section
CSF::createSection( $prefix, array(
    'parent' => 'header-section',
    'title'  => esc_html__( 'Top Header', 'wp10ms' ),
    'fields' => array(
        // Create a top header info repeater
        array(
            'id'            => 'v3-top-header-info-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'Business Information', 'wp10ms' ),
            'max'           => '3',
            'button_title'  => esc_html__( 'Add More', 'wp10ms' ),
            'fields'        => array(
                // Top header info icon
                array(
                    'id'    => 'v3-top-header-info-icon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Icon', 'wp10ms' ),
                    'default' => 'icon-location-dot',
                ),
                // Top header info link
                array(
                    'id'    => 'v3-top-header-info-link',
                    'type'  => 'link',
                    'title' => esc_html__( 'Link', 'wp10ms' ),
                    'default' => '#',
                ),
                // Top header info text
                array(
                    'id'    => 'v3-top-header-info-text',
                    'type'  => 'text',
                    'title' => esc_html__( 'Text', 'wp10ms' ),
                    'default' => esc_html__( '55 Clark St, Brooklyn, NY 11201, USA', 'wp10ms' ),
                ),
            ),
        ),
        // Create a top header and footer social repeater
        array(
            'id'            => 'v3-top-header-social-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'Social Connect (Header-Footer)', 'wp10ms' ),
            'max'           => '5',
            'button_title'  => esc_html__( 'Add More', 'wp10ms' ),
            'fields'        => array(
                // Top header social icon
                array(
                    'id'    => 'v3-top-header-social-icon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Add Icon', 'wp10ms' ),
                    'default' => 'fab fa-facebook',
                ),
                // Top header social link
                array(
                    'id'    => 'v3-top-header-social-link',
                    'type'  => 'link',
                    'title' => esc_html__( 'Add Social Link', 'wp10ms' ),
                    'default' => '#',
                ),
            ),
        ),
    )
) );

// Create a main header sub-section
CSF::createSection( $prefix, array(
    'parent' => 'header-section',
    'title'  => esc_html__( 'Main Header', 'wp10ms' ),
    'fields' => array(
        // Brand logo
        array(
            'id'    => 'v3-header-logo',
            'type'  => 'media',
            'title' => esc_html__( 'Brand Logo', 'wp10ms' ),
        ),
        // Header Button
        array(
            'id'    => 'v3-header-btn',
            'type'  => 'link',
            'title' => esc_html__( 'Header Button', 'wp10ms' ),
        ),
    )
) );

// // Create a top header sub-section
// CSF::createSection( $prefix, array(
//     'parent' => 'header-section',
//     'title'  => 'Top Header',
//     'fields' => array(

//         // Create a top header info repeater
//         array(
//             'id'            => 'v3-top-header-info-rep',
//             'type'          => 'repeater',
//             'title'         => 'Business Information',
//             'max'           => '3',
//             'button_title'  => 'Add More',
//             'fields'        => array(

//                 // Top header info icon
//                 array(
//                     'id'    => 'v3-top-header-info-icon',
//                     'type'  => 'icon',
//                     'title' => 'Icon',
//                     'default' => 'icon-location-dot',
//                 ),

//                 // Top header info link
//                 array(
//                     'id'    => 'v3-top-header-info-link',
//                     'type'  => 'link',
//                     'title' => 'Link',
//                     'default' => '#',
//                 ),

//                 // Top header info text
//                 array(
//                     'id'    => 'v3-top-header-info-text',
//                     'type'  => 'text',
//                     'title' => 'Text',
//                     'default' => '55 Clark St, Brooklyn, NY 11201, USA',
//                 ),
        
//             ),
//         ),

//         // Create a top header and footer social repeater
//         array(
//             'id'            => 'v3-top-header-social-rep',
//             'type'          => 'repeater',
//             'title'         => 'Social Connect(Header-Footer)',
//             'max'           => '5',
//             'button_title'  => 'Add More',
//             'fields'        => array(
        
//                 // Top header social icon
//                 array(
//                     'id'    => 'v3-top-header-social-icon',
//                     'type'  => 'icon',
//                     'title' => 'Add Icon',
//                     'default' => 'fab fa-facebook',
//                 ),

//                 // Top header social link
//                 array(
//                     'id'    => 'v3-top-header-social-link',
//                     'type'  => 'link',
//                     'title' => 'Add Social Link',
//                     'default' => '#',
//                 ),
        
//             ),
//         ),

//     )
// ) );

// // Create a main header sub-section
// CSF::createSection( $prefix, array(
//     'parent' => 'header-section',
//     'title'  => 'Main Header',
//     'fields' => array(

//     // Brand logo
//     array(
//         'id'    => 'v3-header-logo',
//         'type'  => 'media',
//         'title' => 'Brand Logo',
//     ),

//     // Header Button
//     array(
//         'id'    => 'v3-header-btn',
//         'type'  => 'link',
//         'title' => 'Header Button',
//     ),

//     )
// ) );