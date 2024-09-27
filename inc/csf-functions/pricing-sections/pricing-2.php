<?php
// Create a v2 price section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Price Section', 'wp10ms' ),
    'fields' => array(

        // Section Name
        array(
            'id'      => 'v2-price-span',
            'type'    => 'text',
            'title'   => esc_html__( 'Section Name', 'wp10ms' ),
            'default' => esc_html__( 'Section', 'wp10ms' ),
        ),

        // Short Title
        array(
            'id'      => 'v2-price-p',
            'type'    => 'text',
            'title'   => esc_html__( 'Short Title', 'wp10ms' ),
            'default' => esc_html__( 'Short Title', 'wp10ms' ),
        ),

        // Section Title
        array(
            'id'      => 'v2-price-h1',
            'type'    => 'text',
            'title'   => esc_html__( 'Section Title', 'wp10ms' ),
            'default' => esc_html__( 'Section Title', 'wp10ms' ),
        ),

        // Description
        array(
            'id'      => 'v2-price-des',
            'type'    => 'text',
            'title'   => esc_html__( 'Description', 'wp10ms' ),
            'default' => esc_html__( 'Description', 'wp10ms' ),
        ),

        // Button Link
        array(
            'id'      => 'v2-price-btn',
            'type'    => 'link',
            'title'   => esc_html__( 'Button Link', 'wp10ms' ),
            'default' => '#',
        ),

        // Price Plan Repeater
        array(
            'id'           => 'v2-price-rep',
            'type'         => 'repeater',
            'title'        => esc_html__( 'Price Plan', 'wp10ms' ),
            'button_title' => esc_html__( 'Add More', 'wp10ms' ),
            'max'          => '2',
            'fields'       => array(

                // Plan Name
                array(
                    'id'      => 'v2-price-plan-h3',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Plan Name', 'wp10ms' ),
                    'default' => esc_html__( 'Section Title', 'wp10ms' ),
                ),

                // Plan Details
                array(
                    'id'      => 'v2-price-plan-p',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Plan Details', 'wp10ms' ),
                    'default' => esc_html__( 'Section Title', 'wp10ms' ),
                ),

                // Currency Symbol
                array(
                    'id'      => 'v2-price-simble',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Currency Symbol', 'wp10ms' ),
                    'default' => esc_html__( '$', 'wp10ms' ),
                ),

                // Plan Price
                array(
                    'id'      => 'v2-price-cost',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Price', 'wp10ms' ),
                    'default' => '19.00',
                ),

                // Renewal Schedule
                array(
                    'id'      => 'v2-price-schedule',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Schedule', 'wp10ms' ),
                    'default' => esc_html__( '/Per Month', 'wp10ms' ),
                ),

                // Plan Features Repeater
                array(
                    'id'           => 'v2-price-ft-rep',
                    'type'         => 'repeater',
                    'title'        => esc_html__( 'Plan Features', 'wp10ms' ),
                    'button_title' => esc_html__( 'Add More Features', 'wp10ms' ),
                    'max'          => '10',
                    'fields'       => array(

                        // Single Feature
                        array(
                            'id'      => 'v2-price-ft',
                            'type'    => 'text',
                            'title'   => esc_html__( 'Single Feature', 'wp10ms' ),
                            'default' => esc_html__( 'Advanced Custom Fields', 'wp10ms' ),
                        ),

                        // Active/Deactive Switch
                        array(
                            'id'    => 'v2-price-ft-active',
                            'type'  => 'switcher',
                            'title' => esc_html__( 'Active/Deactive', 'wp10ms' ),
                        ),
                    ),
                ),

                // Plan Button Link
                array(
                    'id'      => 'v2-price-plan-btn',
                    'type'    => 'link',
                    'title'   => esc_html__( 'Plan Button Link', 'wp10ms' ),
                    'default' => '#',
                ),
            ),
        ),
    ),
) );

    // // Create a v2 price section
    // CSF::createSection( $prefix, array(
    //     'parent' => 'home-page',
    //     'title'  => 'Price Section',
    //     'fields' => array(
    //         array(
    //             'id' => 'v2-price-span',
    //             'type' => 'text',
    //             'title' => 'Section Name',
    //             'default' => 'Section',
    //         ),
    //         array(
    //             'id' => 'v2-price-p',
    //             'type' => 'text',
    //             'title' => 'Title',
    //             'default' => 'Short Title',
    //         ),
    //         array(
    //             'id' => 'v2-price-h1',
    //             'type' => 'text',
    //             'title' => 'Title',
    //             'default' => 'Section Title',
    //         ),
    //         array(
    //             'id' => 'v2-price-des',
    //             'type' => 'text',
    //             'title' => 'Title',
    //             'default' => 'Description',
    //         ),
    //         array(
    //             'id' => 'v2-price-btn',
    //             'type' => 'link',
    //             'title' => 'Button Link',
    //             'default' => '#',
    //         ),
    //         array(
    //             'id'            => 'v2-price-rep',
    //             'type'          => 'repeater',
    //             'title'         => 'Price Plan',
    //             'button_title'  => 'Add More',
    //             'max' => '2',
    //             'fields'        => array(
    //                 array(
    //                     'id' => 'v2-price-plan-h3',
    //                     'type' => 'text',
    //                     'title' => 'Title',
    //                     'default' => 'Section Title',
    //                 ),
    //                 array(
    //                     'id' => 'v2-price-plan-p',
    //                     'type' => 'text',
    //                     'title' => 'Title',
    //                     'default' => 'Section Title',
    //                 ),
    //                 array(
    //                     'id' => 'v2-price-simble',
    //                     'type' => 'text',
    //                     'title' => 'Money Simble',
    //                     'default' => '$',
    //                 ),
    //                 array(
    //                     'id' => 'v2-price-cost',
    //                     'type' => 'text',
    //                     'title' => 'Price',
    //                     'default' => '19.00',
    //                 ),
    //                 array(
    //                     'id' => 'v2-price-schedule',
    //                     'type' => 'text',
    //                     'title' => 'Schedule',
    //                     'default' => '/Per Month',
    //                 ),
    //                 array(
    //                     'id'            => 'v2-price-ft-rep',
    //                     'type'          => 'repeater',
    //                     'title'         => 'Plan Features',
    //                     'button_title'  => 'Add More Features',
    //                     'max' => '10',
    //                     'fields'        => array(
    //                         array(
    //                             'id' => 'v2-price-ft',
    //                             'type' => 'text',
    //                             'title' => 'Single Features',
    //                             'default' => 'Advanced Custom Fileds',
    //                         ),
    //                         array(
    //                             'id' => 'v2-price-ft-active',
    //                             'type' => 'switcher',
    //                             'title' => 'Active/Deactive',
    //                         ),
    //                     ),
    //                 ),
    //                 array(
    //                     'id' => 'v2-price-plan-btn',
    //                     'type' => 'link',
    //                     'title' => 'Button Link',
    //                     'default' => '#',
    //                 ),
    //             ),
    //         ),
    //     ),
    // ) );