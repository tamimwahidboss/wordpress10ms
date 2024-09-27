<?php
// Create a v3 price section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Price Section', 'wp10ms' ),
    'fields' => array(

        // Section Title (H6)
        array(
            'id'      => 'v3-price-sec-h6',
            'type'    => 'text',
            'title'   => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'Pricing Package', 'wp10ms' ),
        ),

        // Section Title (H2)
        array(
            'id'      => 'v3-price-sec-h2',
            'type'    => 'text',
            'title'   => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'Choose Your Best Plan', 'wp10ms' ),
        ),

        // Price Plan Repeater
        array(
            'id'           => 'v3-price-rep',
            'type'         => 'repeater',
            'title'        => esc_html__( 'Price Plan', 'wp10ms' ),
            'button_title' => esc_html__( 'Add More', 'wp10ms' ),
            'max'          => '3',
            'fields'       => array(

                // Currency Symbol
                array(
                    'id'      => 'v3-price-simble',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Currency Symbol', 'wp10ms' ),
                    'default' => esc_html__( '$', 'wp10ms' ),
                ),

                // Plan Price
                array(
                    'id'      => 'v3-price-count',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Price', 'wp10ms' ),
                    'default' => '19.00',
                ),

                // Schedule
                array(
                    'id'      => 'v3-price-schedule',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Schedule', 'wp10ms' ),
                    'default' => esc_html__( '/Per Month', 'wp10ms' ),
                ),

                // Plan Name
                array(
                    'id'      => 'v3-price-plan',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Plan Name', 'wp10ms' ),
                    'default' => esc_html__( 'Basic', 'wp10ms' ),
                ),

                // Button Text
                array(
                    'id'      => 'v3-price-btn-text',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Button Name', 'wp10ms' ),
                    'default' => esc_html__( 'Get Started', 'wp10ms' ),
                ),

                // Button Link
                array(
                    'id'      => 'v3-price-btn-link',
                    'type'    => 'link',
                    'title'   => esc_html__( 'Button Link', 'wp10ms' ),
                    'default' => '#',
                ),

                // Plan Features Repeater
                array(
                    'id'           => 'v3-price-ft-rep',
                    'type'         => 'repeater',
                    'title'        => esc_html__( 'Plan Features', 'wp10ms' ),
                    'button_title' => esc_html__( 'Add More Features', 'wp10ms' ),
                    'max'          => '10',
                    'fields'       => array(

                        // Single Feature
                        array(
                            'id'      => 'v3-price-ft',
                            'type'    => 'text',
                            'title'   => esc_html__( 'Single Feature', 'wp10ms' ),
                            'default' => esc_html__( 'Advanced Custom Fields', 'wp10ms' ),
                        ),

                        // Feature Active/Deactive Switcher
                        array(
                            'id'    => 'v3-price-ft-active',
                            'type'  => 'switcher',
                            'title' => esc_html__( 'Active/Deactive', 'wp10ms' ),
                        ),
                    ),
                ),
            ),
        ),
    ),
) );

    // // Create a v3 price section
    // CSF::createSection( $prefix, array(
    //     'parent' => 'home-page',
    //     'title'  => 'Price Section',
    //     'fields' => array(
    //         array(
    //             'id' => 'v3-price-sec-h6',
    //             'type' => 'text',
    //             'title' => 'Title',
    //             'default' => 'Pricing Package',
    //         ),
    //         array(
    //             'id' => 'v3-price-sec-h2',
    //             'type' => 'text',
    //             'title' => 'Title',
    //             'default' => 'Choose Your Best Plan',
    //         ),
    //         array(
    //             'id'            => 'v3-price-rep',
    //             'type'          => 'repeater',
    //             'title'         => 'Price Plan',
    //             'button_title'  => 'Add More',
    //             'max' => '3',
    //             'fields'        => array(
    //                 array(
    //                     'id' => 'v3-price-simble',
    //                     'type' => 'text',
    //                     'title' => 'Money Simble',
    //                     'default' => '$',
    //                 ),
    //                 array(
    //                     'id' => 'v3-price-count',
    //                     'type' => 'text',
    //                     'title' => 'Price',
    //                     'default' => '19.00',
    //                 ),
    //                 array(
    //                     'id' => 'v3-price-schedule',
    //                     'type' => 'text',
    //                     'title' => 'Schedule',
    //                     'default' => '/Per Month',
    //                 ),
    //                 array(
    //                     'id' => 'v3-price-plan',
    //                     'type' => 'text',
    //                     'title' => 'Plan Name',
    //                     'default' => 'Basic',
    //                 ),
    //                 array(
    //                     'id' => 'v3-price-btn-text',
    //                     'type' => 'text',
    //                     'title' => 'Button Name',
    //                     'default' => 'Get Started',
    //                 ),
    //                 array(
    //                     'id' => 'v3-price-btn-link',
    //                     'type' => 'link',
    //                     'title' => 'Button Link',
    //                     'default' => '#',
    //                 ),
    //                 array(
    //                     'id'            => 'v3-price-ft-rep',
    //                     'type'          => 'repeater',
    //                     'title'         => 'Plan Features',
    //                     'button_title'  => 'Add More Features',
    //                     'max' => '10',
    //                     'fields'        => array(
    //                         array(
    //                             'id' => 'v3-price-ft',
    //                             'type' => 'text',
    //                             'title' => 'Single Features',
    //                             'default' => 'Advanced Custom Fileds',
    //                         ),
    //                         array(
    //                             'id' => 'v3-price-ft-active',
    //                             'type' => 'switcher',
    //                             'title' => 'Active/Deactive',
    //                         ),
    //                     ),
    //                 ),
    //             ),
    //         ),
    //     ),
    // ) );