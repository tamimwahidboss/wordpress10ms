<?php
// Create a feature section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Feature Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'    => 'v3-feature-a',
            'type'  => 'text',
            'title' => esc_html__( 'Top Text', 'wp10ms' ),
        ),
        array(
            'id'    => 'v3-feature-h1',
            'type'  => 'text',
            'title' => esc_html__( 'Main Title', 'wp10ms' ),
        ),
        array(
            'id'    => 'v3-feature-box-rep',
            'type'  => 'repeater',
            'title' => esc_html__( 'Feature Box', 'wp10ms' ),
            'max'   => '8',
            'button_title' => esc_html__( 'Add Box', 'wp10ms' ),
            'fields' => array(
                array(
                    'id'    => 'v3-feature-box-img',
                    'type'  => 'media',
                    'title' => esc_html__( 'Box Icon', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v3-feature-box-link',
                    'type'  => 'link',
                    'title' => esc_html__( 'Box Link', 'wp10ms' ),
                    'default' => '#',
                ),
                array(
                    'id'    => 'v3-feature-box-h3',
                    'type'  => 'text',
                    'title' => esc_html__( 'Title', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v3-feature-box-p',
                    'type'  => 'text',
                    'title' => esc_html__( 'Description', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v3-feature-btn-icon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Box Icon', 'wp10ms' ),
                    'default' => 'icon-arrow-right-1',
                ),
            ),
        ),
    )
) );

    // // Create a feature section
    // CSF::createSection( $prefix, array(
    //     'parent' => 'home-page',
    //     'title'  => 'feature Section',
    //     'fields' => array(
    //         array(
    //             'id'    => 'v3-feature-a',
    //             'type'  => 'text',
    //             'title' => 'Top Text',
    //         ),
    //         array(
    //             'id'    => 'v3-feature-h1',
    //             'type'  => 'text',
    //             'title' => 'Main Title',
    //         ),
    //         array(
    //             'id'    => 'v3-feature-box-rep',
    //             'type'  => 'repeater',
    //             'title' => 'Feature Box',
    //             'max'   => '8',
    //             'button_title' => 'Add Box',
    //             'fields' => array(
    //                 array(
    //                     'id'    => 'v3-feature-box-img',
    //                     'type'  => 'media',
    //                     'title' => 'Box Icon',
    //                 ),
    //                 array(
    //                     'id'    => 'v3-feature-box-link',
    //                     'type'  => 'link',
    //                     'title' => 'Box Link',
    //                     'default' => '#',
    //                 ),
    //                 array(
    //                     'id'    => 'v3-feature-box-h3',
    //                     'type'  => 'text',
    //                     'title' => 'Title',
    //                 ),
    //                 array(
    //                     'id'    => 'v3-feature-box-p',
    //                     'type'  => 'text',
    //                     'title' => 'Description',
    //                 ),
    //                 array(
    //                     'id'    => 'v3-feature-btn-icon',
    //                     'type'  => 'icon',
    //                     'title' => 'Box Icon',
    //                     'default' => 'icon-arrow-right-1',
    //                 ),
    //             ),
    //         ),
  
    //   )
    // ) );