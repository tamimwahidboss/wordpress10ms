<?php
// Create a v3 Contact section
CSF::createSection( $prefix, array(
    'parent' => 'global',
    'title'  => esc_html__( 'Contact Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'          => 'v3-contact-box-rep',
            'type'        => 'repeater',
            'title'       => esc_html__( 'Add Info Box', 'wp10ms' ),
            'button_title' => esc_html__( 'Add More', 'wp10ms' ),
            'max'         => 3,
            'fields'      => array(
                array(
                    'id'      => 'v3-contact-box-i',
                    'type'    => 'icon',
                    'title'   => esc_html__( 'Info Box Icon', 'wp10ms' ),
                    'default' => 'fal fa-envelope',
                ),
                array(
                    'id'      => 'v3-contact-box-h4',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Info Title', 'wp10ms' ),
                    'default' => esc_html__( 'Email', 'wp10ms' ),
                ),
                array(
                    'id'      => 'v3-contact-box-span',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Info Details', 'wp10ms' ),
                    'default' => esc_html__( 'Email', 'wp10ms' ),
                ),
                array(
                    'id'          => 'v3-contact-box-info-rep',
                    'type'        => 'repeater',
                    'title'       => esc_html__( 'Add Info', 'wp10ms' ),
                    'button_title' => esc_html__( 'Add More', 'wp10ms' ),
                    'max'         => 5,
                    'fields'      => array(
                        array(
                            'id'      => 'v3-contact-box-info',
                            'type'    => 'text',
                            'title'   => esc_html__( 'Info Value', 'wp10ms' ),
                            'default' => esc_html__( 'info@example.com', 'wp10ms' ),
                        ),
                    ),
                ),
            ),
        ),
        array(
            'id'      => 'v3-contact-map',
            'type'    => 'text',
            'title'   => esc_html__( 'Google Map Link', 'wp10ms' ),
            'default' => esc_url( '#' ),
        ),
        array(
            'id'      => 'v3-contact-form-p',
            'type'    => 'text',
            'title'   => esc_html__( 'Short Title', 'wp10ms' ),
        ),
        array(
            'id'      => 'v3-contact-form-h1',
            'type'    => 'text',
            'title'   => esc_html__( 'Form Title', 'wp10ms' ),
        ),
    ),
) );

    // // Create a v3 contact section
    // CSF::createSection( $prefix, array(
    //     'parent' => 'home-page',
    //     'title'  => 'Contact Section',
    //     'fields' => array(
    //         array(
    //             'id' => 'v3-contact-box-rep',
    //             'type' => 'repeater',
    //             'title' => 'Add Info Box',
    //             'button_title' => 'Add More',
    //             'max' => 3,
    //             'fields' => array(
    //                 array(
    //                     'id' => 'v3-contact-box-i',
    //                     'type' => 'icon',
    //                     'title' => 'Info Box Icon',
    //                     'default' => 'fal fa-envelope',
    //                 ),
    //                 array(
    //                     'id' => 'v3-contact-box-h4',
    //                     'type' => 'text',
    //                     'title' => 'Info Title',
    //                     'default' => 'Email',
    //                 ),
    //                 array(
    //                     'id' => 'v3-contact-box-span',
    //                     'type' => 'text',
    //                     'title' => 'Info Details',
    //                     'default' => 'Email',
    //                 ),
    //                 array(
    //                     'id' => 'v3-contact-box-info-rep',
    //                     'type' => 'repeater',
    //                     'title' => 'Add Info',
    //                     'button_title' => 'Add More',
    //                     'max' => 5,
    //                     'fields' => array(
    //                         array(
    //                             'id' => 'v3-contact-box-info',
    //                             'type' => 'text',
    //                             'title' => 'Info Value',
    //                             'default' => 'info@example.com',
    //                         ),
    //                     )
    //                 ),
    //             )
    //         ),
    //         array(
    //             'id' => 'v3-contact-map',
    //             'type' => 'text',
    //             'title' => 'Google Map Link',
    //             'default' => '#',
    //         ),
    //         array(
    //             'id' => 'v3-contact-form-p',
    //             'type' => 'text',
    //             'title' => 'Short Title',
    //         ),
    //         array(
    //             'id' => 'v3-contact-form-h1',
    //             'type' => 'text',
    //             'title' => 'Form Title',
    //         ),
    //     ),
    // ) );