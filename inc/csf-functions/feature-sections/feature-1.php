<?php
// Create a section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Feature Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'    => 'v1-feature-title-p',
            'type'  => 'text',
            'title' => esc_html__( 'Hero Title', 'wp10ms' ),
            'default' => esc_html__( 'Provide Best IT Services Your Business', 'wp10ms' ),
        ),
        array(
            'id'    => 'v1-feature-title-h1',
            'type'  => 'text',
            'title' => esc_html__( 'Hero Title', 'wp10ms' ),
            'default' => esc_html__( 'Provide Best IT Services For Your Business', 'wp10ms' ),
        ),
        array(
            'id'    => 'v1-feature-banner',
            'type'  => 'media',
            'title' => esc_html__( 'Feature Banner', 'wp10ms' ),
        ),
        array(
            'id'    => 'v1-feature-box-rep',
            'type'  => 'repeater',
            'button_title' => esc_html__( 'Add Box', 'wp10ms' ),
            'max' => '4',
            'fields' => array(
                array(
                    'id'    => 'v1-feature-box-icon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Title', 'wp10ms' ),
                    'default' => 'flaticon-speech-bubble',
                ),
                array(
                    'id'    => 'v1-feature-box-h3',
                    'type'  => 'text',
                    'title' => esc_html__( 'Title', 'wp10ms' ),
                    'default' => esc_html__( 'Provide Best IT', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v1-feature-box-p',
                    'type'  => 'text',
                    'title' => esc_html__( 'Title', 'wp10ms' ),
                    'default' => esc_html__( 'Provide Best IT Services', 'wp10ms' ),
                ),
            ),
        ),
        array(
            'id'    => 'v1-feature-cta-p',
            'type'  => 'textarea',
            'title' => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'Provide Best IT Services For Your Business', 'wp10ms' ),
        ),
    )
) );

    // // Create a section
    // CSF::createSection( $prefix, array(
    //     'parent' => 'home-page',
    //     'title'  => 'Feature Section',
    //     'fields' => array(
    //         array(
    //             'id'    => 'v1-feature-title-p',
    //             'type'  => 'text',
    //             'title' => 'Hero Title',
    //             'default' => 'Provide Best It Services Your Business',
    //         ),
    //         array(
    //             'id'    => 'v1-feature-title-h1',
    //             'type'  => 'text',
    //             'title' => 'Hero Title',
    //             'default' => 'Provide Best It Services For Your Business',
    //         ),
    //         array(
    //             'id'    => 'v1-feature-banner',
    //             'type'  => 'media',
    //             'title' => 'Feature Banner',
    //         ),
    //         array(
    //             'id'    => 'v1-feature-box-rep',
    //             'type'  => 'repeater',
    //             'button_title' => 'Add Box',
    //             'max' => '4',
    //             'fields' => array(
    //                 array(
    //                     'id'    => 'v1-feature-box-icon',
    //                     'type'  => 'icon',
    //                     'title' => 'Title',
    //                     'default' => 'flaticon-speech-bubble',
    //                 ),
    //                 array(
    //                     'id'    => 'v1-feature-box-h3',
    //                     'type'  => 'text',
    //                     'title' => 'Title',
    //                     'default' => 'Provide Best It',
    //                 ),
    //                 array(
    //                     'id'    => 'v1-feature-box-p',
    //                     'type'  => 'text',
    //                     'title' => 'Title',
    //                     'default' => 'Provide Best It Services',
    //                 ),
    //             ),
    //         ),
    //         array(
    //             'id'    => 'v1-feature-cta-p',
    //             'type'  => 'textarea',
    //             'title' => 'Title',
    //             'default' => 'Provide Best It Services For Your Business',
    //         ),
    
    //     )
    // ) );