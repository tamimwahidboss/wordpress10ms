<?php
// Create a FAQ section
CSF::createSection( $prefix, array(
    'parent' => 'about-page',
    'title'  => esc_html__( 'FAQ Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'            => 'v2-faq-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'FAQ Left Item', 'wp10ms' ),
            'button_title'  => esc_html__( 'Add Item', 'wp10ms' ),
            'max'           => '10',
            'fields'        => array(
                array(
                    'id'    => 'v2-faq-title',
                    'type'  => 'text',
                    'title' => esc_html__( 'FAQ Title', 'wp10ms' ),
                    'default' => esc_html__( 'Can I Get Internet In My Area?', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v2-faq-des',
                    'type'  => 'textarea',
                    'title' => esc_html__( 'Description', 'wp10ms' ),
                    'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin', 'wp10ms' ),
                ),
            ),
        ),
        array(
            'id'            => 'v2-faq-r8-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'FAQ Right Item', 'wp10ms' ),
            'button_title'  => esc_html__( 'Add Item', 'wp10ms' ),
            'max'           => '10',
            'fields'        => array(
                array(
                    'id'    => 'v2-faq-r8-title',
                    'type'  => 'text',
                    'title' => esc_html__( 'FAQ Title', 'wp10ms' ),
                    'default' => esc_html__( 'Can I Get Internet In My Area?', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v2-faq-r8-des',
                    'type'  => 'textarea',
                    'title' => esc_html__( 'Description', 'wp10ms' ),
                    'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin', 'wp10ms' ),
                ),
            ),
        ),
    ),
) );

// // Create a faq section
// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'FAQ Section',
//     'fields' => array(
//         array(
//             'id'            => 'v2-faq-rep',
//             'type'          => 'repeater',
//             'title'         => 'FAQ Left Item',
//             'button_title'  => 'Add Item',
//             'max'           => '10',
//             'fields'        => array(
//                 array(
//                     'id' => 'v2-faq-title',
//                     'type' => 'text',
//                     'title' => 'FAQ Title',
//                     'default' => 'Can I Get Internet In My Area?',
//                 ),
//                 array(
//                     'id' => 'v2-faq-des',
//                     'type' => 'textarea',
//                     'title' => 'Description',
//                     'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin',
//                 ),
//             ),
//         ),
//         array(
//             'id'            => 'v2-faq-r8-rep',
//             'type'          => 'repeater',
//             'title'         => 'FAQ Right Item',
//             'button_title'  => 'Add Item',
//             'max'           => '10',
//             'fields'        => array(
//                 array(
//                     'id' => 'v2-faq-r8-title',
//                     'type' => 'text',
//                     'title' => 'FAQ Title',
//                     'default' => 'Can I Get Internet In My Area?',
//                 ),
//                 array(
//                     'id' => 'v2-faq-r8-des',
//                     'type' => 'textarea',
//                     'title' => 'Description',
//                     'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin',
//                 ),
//             ),
//         ),
//     ),
// ) );