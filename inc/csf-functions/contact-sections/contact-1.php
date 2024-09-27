<?php
// Create a v6 Contact section
CSF::createSection( $prefix, array(
    'parent' => 'global',
    'title'  => esc_html__( 'Contact Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'      => 'v1-contact-sec-h1',
            'type'    => 'text',
            'title'   => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'Contacts', 'wp10ms' ),
        ),
        array(
            'id'      => 'v1-contact-sec-p',
            'type'    => 'text',
            'title'   => esc_html__( 'Subtitle', 'wp10ms' ),
            'default' => esc_html__( 'What people say About Techex', 'wp10ms' ),
        ),
        array(
            'id'            => 'v1-contact-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'Info Details', 'wp10ms' ),
            'max'           => '3',
            'button_title'  => esc_html__( 'Add More', 'wp10ms' ),
            'fields'        => array(
                array(
                    'id'    => 'v1-contact-info-icon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Info Icon', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v1-contact-info-span',
                    'type'  => 'text',
                    'title' => esc_html__( 'Info Title', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v1-contact-info-a',
                    'type'  => 'link',
                    'title' => esc_html__( 'Info Value & Link', 'wp10ms' ),
                ),
            ),
        ),
        array(
            'id'      => 'v1-contact-p',
            'type'    => 'text',
            'title'   => esc_html__( 'Subtitle', 'wp10ms' ),
            'default' => esc_html__( 'What people say About Techex', 'wp10ms' ),
        ),
        array(
            'id'      => 'v1-contact-h1',
            'type'    => 'text',
            'title'   => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'Title', 'wp10ms' ),
        ),
    ),
) );

    // // Create a v6 Contact section
    // CSF::createSection( $prefix, array(
    //     'parent' => 'home-page',
    //     'title'  => 'Contact Section',
    //     'fields' => array(
    //         array(
    //             'id' => 'v1-contact-sec-h1',
    //             'type' => 'text',
    //             'title' => 'Title',
    //             'default' => 'Contacts',
    //         ),
    //         array(
    //             'id' => 'v1-contact-sec-p',
    //             'type' => 'text',
    //             'title' => 'Title',
    //             'default' => 'What people say About Techex',
    //         ),
    //         array(
    //             'id'            => 'v1-contact-rep',
    //             'type'          => 'repeater',
    //             'title'         => 'Info Details',
    //             'max'           => '3',
    //             'button_title'  => 'Add More',
    //             'fields'        => array(
    //                 array(
    //                     'id' => 'v1-contact-info-icon',
    //                     'type' => 'icon',
    //                     'title' => 'Info Icon',
    //                 ),
    //                 array(
    //                     'id' => 'v1-contact-info-span',
    //                     'type' => 'text',
    //                     'title' => 'Info Title',
    //                 ),
    //                 array(
    //                     'id' => 'v1-contact-info-a',
    //                     'type' => 'link',
    //                     'title' => 'Info Value & Link',
    //                 ),
    //             ),
    //         ),
    //         array(
    //             'id' => 'v1-contact-p',
    //             'type' => 'text',
    //             'title' => 'Title',
    //             'default' => 'What people say About Techex',
    //         ),
    //         array(
    //             'id' => 'v1-contact-h1',
    //             'type' => 'text',
    //             'title' => 'Title',
    //             'default' => 'Title',
    //         ),
    //     ),
    // ) );