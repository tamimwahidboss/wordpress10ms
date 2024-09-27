<?php
// Create an 'About Page' section using CSF framework
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'About Section', 'wp10ms' ), // Escaping the section title
    'fields' => array(

        // Media field for the About section banner
        array(
            'id'    => 'v5-about-banner',
            'type'  => 'media',
            'title' => esc_html__( 'Add Banner', 'wp10ms' ),
        ),

        // Link field for adding a YouTube video link
        array(
            'id'    => 'v5-about-yt',
            'type'  => 'link',
            'title' => esc_html__( 'Add Video Link', 'wp10ms' ),
        ),

        // Text field for the About section title
        array(
            'id'      => 'v5-about-a',
            'type'    => 'text',
            'title'   => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'About Company', 'wp10ms' ),
        ),

        // Text field for the About section H1 title
        array(
            'id'      => 'v5-about-h1',
            'type'    => 'text',
            'title'   => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'Get’s IT Solutions For <br>Expert Consultants', 'wp10ms' ),
        ),

        // Textarea field for the description
        array(
            'id'      => 'v5-about-p',
            'type'    => 'textarea',
            'title'   => esc_html__( 'Description', 'wp10ms' ),
            'default' => esc_html__( 'About Company', 'wp10ms' ),
        ),

        // Repeater field for rating items
        array(
            'id'            => 'v5-about-rate-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'List Item', 'wp10ms' ),
            'button_title'  => esc_html__( 'Add List', 'wp10ms' ),
            'max'           => 10, // Maximum number of list items
            'fields'        => array(

                // Text field for rating count
                array(
                    'id'      => 'v5-about-rate-h3',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Count', 'wp10ms' ),
                    'default' => esc_html__( '300', 'wp10ms' ),
                ),

                // Text field for the rate description
                array(
                    'id'      => 'v5-about-rate-p',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Rate Description', 'wp10ms' ),
                    'default' => esc_html__( 'Professional Consultants', 'wp10ms' ),
                ),
            ),
        ),

        // Repeater field for buttons
        array(
            'id'            => 'v5-about-btn-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'About Button', 'wp10ms' ),
            'button_title'  => esc_html__( 'Add Button', 'wp10ms' ),
            'max'           => 10, // Maximum number of buttons
            'fields'        => array(

                // Link field for button
                array(
                    'id'    => 'v5-about-btn',
                    'type'  => 'link',
                    'title' => esc_html__( 'Add Button', 'wp10ms' ),
                ),

                // Icon field for button icon
                array(
                    'id'      => 'v5-about-btn-icon',
                    'type'    => 'icon',
                    'title'   => esc_html__( 'Icon', 'wp10ms' ),
                    'default' => 'icon-arrow-right-1',
                ),
            ),
        ),
    )
) );


// // Create a about page section
// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'About Section',
//     'fields' => array(
//         array(
//             'id'    => 'v5-about-banner',
//             'type'  => 'media',
//             'title' => 'Add Banner',
//         ),
//         array(
//             'id'    => 'v5-about-yt',
//             'type'  => 'link',
//             'title' => 'Add Video Link',
//         ),
//         array(
//             'id'    => 'v5-about-a',
//             'type'  => 'text',
//             'title' => 'Title',
//             'default' => 'About Company',
//         ),
//         array(
//             'id'    => 'v5-about-h1',
//             'type'  => 'text',
//             'title' => 'Title',
//             'default' => 'Get’s IT Solutions For <br>Expert Consultants',
//         ),
//         array(
//             'id'    => 'v5-about-p',
//             'type'  => 'textarea',
//             'title' => 'Title',
//             'default' => 'About Company',
//         ),
//         array(
//             'id'            => 'v5-about-rate-rep',
//             'type'          => 'repeater',
//             'title'         => 'List Item',
//             'button_title'  => 'Add List',
//             'max'           => '10',
//             'fields'        => array(
//                 array(
//                     'id' => 'v5-about-rate-h3',
//                     'type' => 'text',
//                     'title' => 'Count',
//                     'default' => '300',
//                 ),
//                 array(
//                     'id' => 'v5-about-rate-p',
//                     'type' => 'text',
//                     'title' => 'rate Description',
//                     'default' => 'Professinoal Consultants',
//                 ),
//             ),
//         ),
//         array(
//             'id'            => 'v5-about-btn-rep',
//             'type'          => 'repeater',
//             'title'         => 'About Button',
//             'button_title'  => 'Add List',
//             'max'           => '10',
//             'fields'        => array(
//                 array(
//                     'id' => 'v5-about-btn',
//                     'type' => 'link',
//                     'title' => 'Add Button',
//                 ),
//                 array(
//                     'id' => 'v5-about-btn-icon',
//                     'type' => 'icon',
//                     'title' => 'rate Description',
//                     'default' => 'icon-arrow-right-1',
//                 ),
//             ),
//         ),
        
//     )
// ) );