<?php
// Create a v5 blog section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Blog Section', 'wp10ms' ),
    'fields' => array(

        // Text field for section subtitle
        array(
            'id'      => 'v5-blog-sec-h6',
            'type'    => 'text',
            'title'   => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'ARTICLES & TIPES', 'wp10ms' ),
        ),

        // Text field for section main title
        array(
            'id'      => 'v5-blog-sec-h2',
            'type'    => 'text',
            'title'   => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'Get Every Single Updates', 'wp10ms' ),
        ),
    ),
) );

// // Create a v5 blog section
// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'Blog Section',
//     'fields' => array(
//         array(
//             'id' => 'v5-blog-sec-h6',
//             'type' => 'text',
//             'title' => 'Title',
//             'default' => 'ARTICLES & TIPES',
//         ),
//         array(
//             'id' => 'v5-blog-sec-h2',
//             'type' => 'text',
//             'title' => 'Title',
//             'default' => 'Get Every Single Updates',
//         ),
//     ),
// ) );