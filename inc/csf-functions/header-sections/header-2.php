<?php
// Create an offset menu section
CSF::createSection( $prefix, array(
    'parent' => 'header-section',
    'title'  => esc_html__( 'Offset Menu', 'wp10ms' ),
    'fields' => array(
        array(
            'id'    => 'v2-head-off-logo',
            'type'  => 'media',
            'title' => esc_html__( 'Offset Brand Logo', 'wp10ms' ),
        ),
        array(
            'id'    => 'v2-head-off-1h3',
            'type'  => 'text',
            'title' => esc_html__( 'Offset Title 1', 'wp10ms' ),
        ),
        array(
            'id'    => 'v2-head-off-p',
            'type'  => 'textarea',
            'title' => esc_html__( 'About Your Business', 'wp10ms' ),
        ),
        array(
            'id'    => 'v2-head-off-btn',
            'type'  => 'link',
            'title' => esc_html__( 'Set Offset Button', 'wp10ms' ),
            'default' => '#',
        ),
        array(
            'id'    => 'v2-head-off-2h3',
            'type'  => 'text',
            'title' => esc_html__( 'Offset Title 2', 'wp10ms' ),
        ),
        array(
            'id'            => 'v2-head-off-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'Offset Brand Info', 'wp10ms' ),
            'max'           => 5,
            'button_title'  => esc_html__( 'Add More', 'wp10ms' ),
            'fields'        => array(
                array(
                    'id'    => 'v2-head-off-info',
                    'type'  => 'text',
                    'title' => esc_html__( 'Brand Info', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v2-head-off-info-icon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Info Icon', 'wp10ms' ),
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
        array(
            'id'    => 'v2-header-notice',
            'type'  => 'text',
            'title' => esc_html__( 'Header Notice', 'wp10ms' ),
            'default' => esc_html__( 'Welcome to Techex IT Services Company. <a href="#">Setting &amp; Parivacy, Faq</a>', 'wp10ms' ),
        ),
        array(
            'id'    => 'v2-header-logo',
            'type'  => 'media',
            'title' => esc_html__( 'Brand Logo', 'wp10ms' ),
        ),
        array(
            'id'            => 'v2-main-header-info-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'Business Information', 'wp10ms' ),
            'max'           => '3',
            'button_title'  => esc_html__( 'Add More', 'wp10ms' ),
            'fields'        => array(
                array(
                    'id'    => 'v2-main-header-info-icon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Icon', 'wp10ms' ),
                    'default' => 'icon-location-dot',
                ),
                array(
                    'id'    => 'v2-main-header-info-h3',
                    'type'  => 'text',
                    'title' => esc_html__( 'Link', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v2-main-header-info-text',
                    'type'  => 'text',
                    'title' => esc_html__( 'Text', 'wp10ms' ),
                    'default' => esc_html__( '55 Clark St, Brooklyn, NY 11201, USA', 'wp10ms' ),
                ),
            ),
        ),
        array(
            'id'            => 'v2-top-header-social-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'Social Connect (Header-Footer)', 'wp10ms' ),
            'max'           => '5',
            'button_title'  => esc_html__( 'Add More', 'wp10ms' ),
            'fields'        => array(
                array(
                    'id'    => 'v2-top-header-social-icon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Add Icon', 'wp10ms' ),
                    'default' => 'fab fa-facebook',
                ),
                array(
                    'id'    => 'v2-top-header-social-link',
                    'type'  => 'text',
                    'title' => esc_html__( 'Add Social Link', 'wp10ms' ),
                    'default' => '#',
                ),
            ),
        ),
        array(
            'id'    => 'v2-header-btn',
            'type'  => 'link',
            'title' => esc_html__( 'Header Button', 'wp10ms' ),
        ),
    )
) );

    // // Create a offset menu section
    // CSF::createSection( $prefix, array(
    //     'parent' => 'header-section',
    //     'title'  => 'Offset Menu',
    //     'fields' => array(
    //         array(
    //             'id'    => 'v2-head-off-logo',
    //             'type'  => 'media',
    //             'title' => 'Offset Brand Logo',
    //         ),
    //         array(
    //             'id'    => 'v2-head-off-1h3',
    //             'type'  => 'text',
    //             'title' => 'Offset Title 1',
    //         ),
    //         array(
    //             'id'    => 'v2-head-off-p',
    //             'type'  => 'textarea',
    //             'title' => 'About Your Business',
    //         ),
    //         array(
    //             'id'    => 'v2-head-off-btn',
    //             'type'  => 'link',
    //             'title' => 'Set Offset Button',
    //             'default' => '#',
    //         ),
    //         array(
    //             'id'    => 'v2-head-off-2h3',
    //             'type'  => 'text',
    //             'title' => 'Offset Title 2',
    //         ),
    //         array(
    //             'id'            => 'v2-head-off-rep',
    //             'type'          => 'repeater',
    //             'title'         => 'Offset Brand Info',
    //             'max'           => 5,
    //             'button_title'  => 'Add More',
    //             'fields'        => array(
    //                 array(
    //                     'id'            => 'v2-head-off-info',
    //                     'type'          => 'text',
    //                     'title'         => 'Brand Info',
    //                 ),
    //                 array(
    //                     'id'            => 'v2-head-off-info-icon',
    //                     'type'          => 'icon',
    //                     'title'         => 'Info Icon',
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
    //         array(
    //             'id'    => 'v2-header-notice',
    //             'type'  => 'text',
    //             'title' => 'Header Notice',
    //             'default' => 'Welcome to Techex  IT Services Company. <a href="#">Setting &amp; Parivacy, Faq</a>',
    //         ),

    //         // Main header logo
    //         array(
    //             'id'    => 'v2-header-logo',
    //             'type'  => 'media',
    //             'title' => 'Brand Logo',
    //         ),

    //         // Create a main header info repeater
    //         array(
    //             'id'            => 'v2-main-header-info-rep',
    //             'type'          => 'repeater',
    //             'title'         => 'Business Information',
    //             'max'           => '3',
    //             'button_title'  => 'Add More',
    //             'fields'        => array(

    //                 // main header info icon
    //                 array(
    //                     'id'    => 'v2-main-header-info-icon',
    //                     'type'  => 'icon',
    //                     'title' => 'Icon',
    //                     'default' => 'icon-location-dot',
    //                 ),

    //                 // main header info link
    //                 array(
    //                     'id'    => 'v2-main-header-info-h3',
    //                     'type'  => 'text',
    //                     'title' => 'Link',
    //                 ),

    //                 // main header info text
    //                 array(
    //                     'id'    => 'v2-main-header-info-text',
    //                     'type'  => 'text',
    //                     'title' => 'Text',
    //                     'default' => '55 Clark St, Brooklyn, NY 11201, USA',
    //                 ),
            
    //             ),
    //         ),

    //         // Create a header social repeater
    //         array(
    //             'id'            => 'v2-top-header-social-rep',
    //             'type'          => 'repeater',
    //             'title'         => 'Social Connect(Header-Footer)',
    //             'max'           => '5',
    //             'button_title'  => 'Add More',
    //             'fields'        => array(
            
    //                 // Top header social icon
    //                 array(
    //                     'id'    => 'v2-top-header-social-icon',
    //                     'type'  => 'icon',
    //                     'title' => 'Add Icon',
    //                     'default' => 'fab fa-facebook',
    //                 ),

    //                 // Top header social link
    //                 array(
    //                     'id'    => 'v2-top-header-social-link',
    //                     'type'  => 'text',
    //                     'title' => 'Add Social Link',
    //                     'default' => '#',
    //                 ),
            
    //             ),
    //         ),

    //         // Header Button
    //         array(
    //             'id'    => 'v2-header-btn',
    //             'type'  => 'link',
    //             'title' => 'Header Button',
    //         ),
    
    //     )
    // ) );