<?php
// Create a funfact section
CSF::createSection( $prefix, array(
    'parent' => 'about-page',
    'title'  => esc_html__( 'Funfact Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'    => 'v3-funfact-p',
            'type'  => 'text',
            'title' => esc_html__( 'Short Title', 'wp10ms' ),
            'default' => esc_html__( 'Project Completed', 'wp10ms' ),
        ),
        array(
            'id'    => 'v3-funfact-h1',
            'type'  => 'text',
            'title' => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'Project Completed', 'wp10ms' ),
        ),
        array(
            'id'    => 'v3-funfact-des',
            'type'  => 'textarea',
            'title' => esc_html__( 'Description', 'wp10ms' ),
            'default' => esc_html__( 'Project Completed', 'wp10ms' ),
        ),
        array(
            'id'    => 'v3-funfact-btn',
            'type'  => 'link',
            'title' => esc_html__( 'Button Title & Link', 'wp10ms' ),
        ),
        array(
            'id'    => 'v3-funfact-btn-icon',
            'type'  => 'icon',
            'title' => esc_html__( 'Button Icon', 'wp10ms' ),
        ),
        array(
            'id'     => 'v3-funfact-box-rep',
            'type'   => 'repeater',
            'title'  => esc_html__( 'Repeater', 'wp10ms' ),
            'max'    => '4',
            'button_title' => esc_html__( 'Add Box', 'wp10ms' ),
            'fields' => array(
                array(
                    'id'    => 'v3-funfact-box-icon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Box Icon', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v3-funfact-box-h3',
                    'type'  => 'number',
                    'title' => esc_html__( 'Number Count', 'wp10ms' ),
                    'default' => '368',
                ),
                array(
                    'id'    => 'v3-funfact-box-p',
                    'type'  => 'text',
                    'title' => esc_html__( 'Description', 'wp10ms' ),
                    'default' => esc_html__( 'Project Completed', 'wp10ms' ),
                ),
            ),
        ),
    )
) );

    // // Create a funfact section
    // CSF::createSection( $prefix, array(
    //     'parent' => 'home-page',
    //     'title'  => 'Funfact Section',
    //     'fields' => array(
    //         array(
    //             'id'    => 'v3-funfact-p',
    //             'type'  => 'text',
    //             'title' => 'Short Title',
    //             'default' => 'Project Completed',
    //         ),
    //         array(
    //             'id'    => 'v3-funfact-h1',
    //             'type'  => 'text',
    //             'title' => 'Title',
    //             'default' => 'Project Completed',
    //         ),
    //         array(
    //             'id'    => 'v3-funfact-des',
    //             'type'  => 'textarea',
    //             'title' => 'Description',
    //             'default' => 'Project Completed',
    //         ),
    //         array(
    //             'id'    => 'v3-funfact-btn',
    //             'type'  => 'link',
    //             'title' => 'Button Title & Link',
    //         ),
    //         array(
    //             'id'    => 'v3-funfact-btn-icon',
    //             'type'  => 'icon',
    //             'title' => 'Title',
    //         ),
    //         array(
    //             'id'     => 'v3-funfact-box-rep',
    //             'type'   => 'repeater',
    //             'title'  => 'Repeater',
    //             'max'   => '4',
    //             'button_title' => 'Add Box',
    //             'fields' => array(
    //                 array(
    //                     'id'    => 'v3-funfact-box-icon',
    //                     'type'  => 'icon',
    //                     'title' => 'Title',
    //                 ),
    //                 array(
    //                     'id'    => 'v3-funfact-box-h3',
    //                     'type'  => 'number',
    //                     'title' => 'Number Count',
    //                     'default' => '368',
    //                 ),
    //                 array(
    //                     'id'    => 'v3-funfact-box-p',
    //                     'type'  => 'text',
    //                     'title' => 'Title',
    //                     'default' => 'Project Completed',
    //                 ),
    //             ),
    //         ),
    //     )
    // ) );