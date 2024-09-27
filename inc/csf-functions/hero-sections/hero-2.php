<?php
// Create a Hero Section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Hero Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'    => 'v2-hero-slide-rep',
            'type'  => 'repeater',
            'title' => esc_html__( 'Hero Slider', 'wp10ms' ),
            'max'   => '10',
            'button_title' => esc_html__( 'Add Slider', 'wp10ms' ),
            'fields' => array(
                array(
                    'id'    => 'v2-hero-slide-banner',
                    'type'  => 'media',
                    'title' => esc_html__( 'Hero Slide Banner', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v2-hero-slide-h1',
                    'type'  => 'text',
                    'title' => esc_html__( 'Hero Slide Title', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v2-hero-slide-p',
                    'type'  => 'text',
                    'title' => esc_html__( 'Hero Slide Description', 'wp10ms' ),
                ),
                array(
                    'id'            => 'v2-hero-btn-rep',
                    'type'          => 'repeater',
                    'title'         => esc_html__( 'Hero Button', 'wp10ms' ),
                    'max'           => '2',
                    'button_title'  => esc_html__( 'Add Button', 'wp10ms' ),
                    'fields'        => array(
                        array(
                            'id'    => 'v2-hero-btn',
                            'type'  => 'link',
                            'title' => esc_html__( 'Hero Button Link', 'wp10ms' ),
                            'default' => esc_url( '#' ),
                        ),
                        array(
                            'id'    => 'v2-hero-btn-icon',
                            'type'  => 'icon',
                            'title' => esc_html__( 'Hero Button Icon', 'wp10ms' ),
                            'default' => 'icon-arrow-right-1',
                        ),
                    ),
                ),
            ),
        ),
    )
) );

// // Create a hero section
// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'Hero Section',
//     'fields' => array(
//         array(
//             'id'    => 'v2-hero-slide-rep',
//             'type'  => 'repeater',
//             'title' => 'Hero Slider',
//             'max'   => '10',
//             'button_title' => 'Add Slider',
//             'fields' => array(
//                 array(
//                     'id'    => 'v2-hero-slide-banner',
//                     'type'  => 'media',
//                     'title' => 'Hero Slide Banner',
//                 ),
//                 array(
//                     'id'    => 'v2-hero-slide-h1',
//                     'type'  => 'text',
//                     'title' => 'Hero Slide Title',
//                 ),
//                 array(
//                     'id'    => 'v2-hero-slide-p',
//                     'type'  => 'text',
//                     'title' => 'Hero Slide Description',
//                 ),
//                 array(
//                     'id'    => 'v2-hero-btn-rep',
//                     'type'  => 'repeater',
//                     'title' => 'Hero Button',
//                     'max'   => '2',
//                     'button_title' => 'Add Button',
//                     'fields' => array(
            
//                         // Hero Button link
//                         array(
//                             'id'    => 'v2-hero-btn',
//                             'type'  => 'link',
//                             'title' => 'Hero Button link',
//                             'default' => '#',
//                         ),
            
//                         // Hero Button icon
//                         array(
//                             'id'    => 'v2-hero-btn-icon',
//                             'type'  => 'icon',
//                             'title' => 'Hero Button icon',
//                             'default' => 'icon-arrow-right-1',
//                         ),
//                     ),
//                 ),
//             ),
//         ),

//     )
// ) );