<?php
// Create a hero section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Hero Section', 'wp10ms' ),
    'fields' => array(

        // Hero Title
        array(
            'id'    => 'v1-hero-h2',
            'type'  => 'text',
            'title' => esc_html__( 'Hero Title', 'wp10ms' ),
            'default' => esc_html__( 'Solutions For', 'wp10ms' ),
        ),

        // Hero Main Title
        array(
            'id'    => 'v1-hero-h1',
            'type'  => 'text',
            'title' => esc_html__( 'Hero Main Title', 'wp10ms' ),
            'default' => esc_html__( 'IT Business', 'wp10ms' ),
        ),
        array(
            'id'    => 'v1-hero-p',
            'type'  => 'text',
            'title' => esc_html__( 'Hero Description', 'wp10ms' ),
            'default' => esc_html__( 'We Have 25 Years Of Experience In IT Solutions', 'wp10ms' ),
        ),

        // Hero Button Text
        array(
            'id'    => 'v1-hero-btn-rep',
            'type'  => 'repeater',
            'title' => esc_html__( 'Hero Button Text', 'wp10ms' ),
            'max'   => '2',
            'button_title' => esc_html__( 'Add Button', 'wp10ms' ),
            'fields' => array(
                array(
                    'id'    => 'v1-hero-btn-text',
                    'type'  => 'text',
                    'title' => esc_html__( 'Hero Button Text', 'wp10ms' ),
                    'default' => esc_html__( 'Service we provide ', 'wp10ms' ),
                ),
        
                // Hero Button link
                array(
                    'id'    => 'v1-hero-btn-link',
                    'type'  => 'link',
                    'title' => esc_html__( 'Hero Button Link', 'wp10ms' ),
                    'default' => '#',
                ),
        
                // Hero Button icon
                array(
                    'id'    => 'v1-hero-btn-icon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Hero Button Icon', 'wp10ms' ),
                    'default' => 'icon-arrow-right-1',
                ),
            ),
        ),

        // Hero Banner Images
        array(
            'id'    => 'v1-hero-banner1',
            'type'  => 'media',
            'title' => esc_html__( 'Hero Banner Image 1', 'wp10ms' ),
        ),
        array(
            'id'    => 'v1-hero-banner2',
            'type'  => 'media',
            'title' => esc_html__( 'Hero Banner Image 2', 'wp10ms' ),
        ),

    )
) );

    // // Create a hero section
    // CSF::createSection( $prefix, array(
    //     'parent' => 'home-page',
    //     'title'  => 'Hero Section',
    //     'fields' => array(

    //         // Hero Title
    //         array(
    //             'id'    => 'v1-hero-h2',
    //             'type'  => 'text',
    //             'title' => 'Hero Title',
    //             'default' => 'Solutions For',
    //         ),

    //         // Hero Title
    //         array(
    //             'id'    => 'v1-hero-h1',
    //             'type'  => 'text',
    //             'title' => 'Hero Title',
    //             'default' => 'IT Business',
    //         ),
    //         array(
    //             'id'    => 'v1-hero-p',
    //             'type'  => 'text',
    //             'title' => 'Hero Title',
    //             'default' => 'We Have 25 Years Of Experience In IT Solutions',
    //         ),

    //         // Hero Button Text
    //         array(
    //             'id'    => 'v1-hero-btn-rep',
    //             'type'  => 'repeater',
    //             'title' => 'Hero Button Text',
    //             'max'   => '2',
    //             'button_title' => 'Add Button',
    //             'fields' => array(
    //                 array(
    //                     'id'    => 'v1-hero-btn-text',
    //                     'type'  => 'text',
    //                     'title' => 'Hero Button Text',
    //                     'default' => 'Service we provide ',
    //                 ),
        
    //                 // Hero Button link
    //                 array(
    //                     'id'    => 'v1-hero-btn-link',
    //                     'type'  => 'link',
    //                     'title' => 'Hero Button link',
    //                     'default' => '#',
    //                 ),
        
    //                 // Hero Button icon
    //                 array(
    //                     'id'    => 'v1-hero-btn-icon',
    //                     'type'  => 'icon',
    //                     'title' => 'Hero Button icon',
    //                     'default' => 'icon-arrow-right-1',
    //                 ),
    //             ),
    //         ),

    //         // Hero banner
    //         array(
    //             'id'    => 'v1-hero-banner1',
    //             'type'  => 'media',
    //             'title' => 'Hero Banner',
    //         ),
    //         array(
    //             'id'    => 'v1-hero-banner2',
    //             'type'  => 'media',
    //             'title' => 'Hero Banner',
    //         ),
  
    //   )
    // ) );