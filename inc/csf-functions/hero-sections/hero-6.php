<?php
// Create a hero section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Hero Section', 'wp10ms' ),
    'fields' => array(

        // Hero Title
        array(
            'id'      => 'v6-hero-h2',
            'type'    => 'text',
            'title'   => esc_html__( 'Hero Title', 'wp10ms' ),
            'default' => 'Provide Best IT <br> Services For Your <br> Business',
        ),

        // Hero Button Text
        array(
            'id'      => 'v6-hero-btn-text',
            'type'    => 'text',
            'title'   => esc_html__( 'Hero Button Text', 'wp10ms' ),
            'default' => esc_html__( 'Discover More', 'wp10ms' ),
        ),

        // Hero Button link
        array(
            'id'      => 'v6-hero-btn-link',
            'type'    => 'link',
            'title'   => esc_html__( 'Hero Button Link', 'wp10ms' ),
            'default' => '#',
        ),

        // Hero Button icon
        array(
            'id'      => 'v6-hero-btn-icon',
            'type'    => 'icon',
            'title'   => esc_html__( 'Hero Button Icon', 'wp10ms' ),
            'default' => 'icon-arrow-right-1',
        ),

        // Hero banner
        array(
            'id'      => 'v6-hero-banner',
            'type'    => 'media',
            'title'   => esc_html__( 'Hero Banner', 'wp10ms' ),
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
    //             'id'    => 'v6-hero-h2',
    //             'type'  => 'text',
    //             'title' => 'Hero Title',
    //             'default' => 'Provide Best It <br> Services For Your <br> Business',
    //         ),

    //         // Hero Button Text
    //         array(
    //             'id'    => 'v6-hero-btn-text',
    //             'type'  => 'text',
    //             'title' => 'Hero Button Text',
    //             'default' => 'Discover More ',
    //         ),

    //         // Hero Button link
    //         array(
    //             'id'    => 'v6-hero-btn-link',
    //             'type'  => 'link',
    //             'title' => 'Hero Button link',
    //             'default' => '#',
    //         ),

    //         // Hero Button icon
    //         array(
    //             'id'    => 'v6-hero-btn-icon',
    //             'type'  => 'icon',
    //             'title' => 'Hero Button icon',
    //             'default' => 'icon-arrow-right-1',
    //         ),

    //         // Hero banner
    //         array(
    //             'id'    => 'v6-hero-banner',
    //             'type'  => 'media',
    //             'title' => 'Hero Banner',
    //         ),
  
    //   )
    // ) );