<?php
// Create a FAQ section
CSF::createSection( $prefix, array(
    'parent' => 'about-page',
    'title'  => esc_html__( 'FAQ Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'    => 'faq-sec-banner',
            'type'  => 'media',
            'title' => esc_html__( 'Section Banner', 'wp10ms' ),
        ),
        array(
            'id'    => 'faq-sec-title-p',
            'type'  => 'text',
            'title' => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'Why choose us', 'wp10ms' ),
        ),
        array(
            'id'    => 'faq-sec-title-h1',
            'type'  => 'text',
            'title' => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'Innovating Solutions <br> Digital Mindset', 'wp10ms' ),
        ),
        array(
            'id'            => 'faq-sec-acc-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'FAQ Item', 'wp10ms' ),
            'button_title'  => esc_html__( 'Add Item', 'wp10ms' ),
            'max'           => '10',
            'fields'        => array(
                array(
                    'id'    => 'faq-sec-acc-title',
                    'type'  => 'text',
                    'title' => esc_html__( 'FAQ Title', 'wp10ms' ),
                    'default' => esc_html__( 'Can I Get Internet In My Area?', 'wp10ms' ),
                ),
                array(
                    'id'    => 'faq-sec-acc-des',
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
    //             'id'    => 'faq-sec-banner',
    //             'type'  => 'media',
    //             'title' => 'Section Banner',
    //         ),
    //         array(
    //             'id'    => 'faq-sec-title-p',
    //             'type'  => 'text',
    //             'title' => 'Title',
    //             'default' => 'Why choose us',
    //         ),
    //         array(
    //             'id'    => 'faq-sec-title-h1',
    //             'type'  => 'text',
    //             'title' => 'Title',
    //             'default' => 'Innovating Solutions <br> Digital Mindset',
    //         ),
    //         array(
    //             'id'            => 'faq-sec-acc-rep',
    //             'type'          => 'repeater',
    //             'title'         => 'FAQ Item',
    //             'button_title'  => 'Add Item',
    //             'max'           => '10',
    //             'fields'        => array(
    //                 array(
    //                     'id' => 'faq-sec-acc-title',
    //                     'type' => 'text',
    //                     'title' => 'FAQ Title',
    //                     'default' => 'Can I Get Internet In My Area?',
    //                 ),
    //                 array(
    //                     'id' => 'faq-sec-acc-des',
    //                     'type' => 'textarea',
    //                     'title' => 'Description',
    //                     'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin',
    //                 ),
    //             ),
    //         ),
    //     ),
    // ) );