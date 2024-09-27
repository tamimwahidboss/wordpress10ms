<?php
// Create a v4 count bar section
CSF::createSection( $prefix, array(
    'parent' => 'about-page',
    'title'  => esc_html__( 'Count Bar Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'            => 'v4-count-sec-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'Add Count Bar', 'wp10ms' ),
            'max'           => '4',
            'button_title'  => esc_html__( 'Add More', 'wp10ms' ),
            'fields'        => array(
                array(
                    'id'    => 'v4-count-sec-h3',
                    'type'  => 'text',
                    'title' => esc_html__( 'Count', 'wp10ms' ),
                    'default' => esc_html__( '320', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v4-count-sec-p',
                    'type'  => 'text',
                    'title' => esc_html__( 'Title', 'wp10ms' ),
                    'default' => esc_html__( 'Project Completed', 'wp10ms' ),
                ),
            ),
        ),
    ),
) );

    // // Create a v4 count bar section
    // CSF::createSection( $prefix, array(
    //     'parent' => 'home-page',
    //     'title'  => 'Funfact Section',
    //     'fields' => array(
    //         array(
    //             'id' => 'v4-count-sec-rep',
    //             'type' => 'repeater',
    //             'title' => 'Add Count Bar',
    //             'max' => '4',
    //             'button_title' => 'Add More',
    //             'fields' => array(
    //                 array(
    //                     'id' => 'v4-count-sec-h3',
    //                     'type' => 'text',
    //                     'title' => 'Count',
    //                     'default' => '320',
    //                 ),
    //                 array(
    //                     'id' => 'v4-count-sec-p',
    //                     'type' => 'text',
    //                     'title' => 'Title',
    //                     'default' => 'Project Completed',
    //                 ),
    //             ),
    //         ),
    //     ),
    // ) );