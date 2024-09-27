<?php
// Create a pricing section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Pricing Section', 'wp10ms' ),
    'fields' => array(

        // Short Title
        array(
            'id'    => 'v1-pricing-p',
            'type'  => 'text',
            'title' => esc_html__( 'Short Title', 'wp10ms' ),
        ),

        // Section Title
        array(
            'id'    => 'v1-pricing-h1',
            'type'  => 'text',
            'title' => esc_html__( 'Section Title', 'wp10ms' ),
        ),

        // Repeater Module
        array(
            'id'           => 'v1-pricing-rep',
            'type'         => 'repeater',
            'title'        => esc_html__( 'Add Client Pricing', 'wp10ms' ),
            'button_title' => esc_html__( 'Add More', 'wp10ms' ),
            'fields'       => array(

                // Plan Name
                array(
                    'id'    => 'v1-pricing-h3',
                    'type'  => 'text',
                    'title' => esc_html__( 'Plan Name', 'wp10ms' ),
                ),

                // Plan Details
                array(
                    'id'    => 'v1-pricing-p',
                    'type'  => 'text',
                    'title' => esc_html__( 'Details', 'wp10ms' ),
                ),

                // Currency
                array(
                    'id'    => 'v1-pricing-sym',
                    'type'  => 'text',
                    'title' => esc_html__( 'Currency($)', 'wp10ms' ),
                ),

                // Plan Price
                array(
                    'id'    => 'v1-pricing-cost',
                    'type'  => 'text',
                    'title' => esc_html__( 'Plan Price', 'wp10ms' ),
                ),

                // Renewal Time
                array(
                    'id'    => 'v1-pricing-sch',
                    'type'  => 'text',
                    'title' => esc_html__( 'Renew Time', 'wp10ms' ),
                ),

                // Plan Features Repeater
                array(
                    'id'           => 'v1-pricing-li-rep',
                    'type'         => 'repeater',
                    'title'        => esc_html__( 'Add Plan Features', 'wp10ms' ),
                    'button_title' => esc_html__( 'Add More', 'wp10ms' ),
                    'fields'       => array(

                        // List Item
                        array(
                            'id'    => 'v1-pricing-li',
                            'type'  => 'text',
                            'title' => esc_html__( 'List Item', 'wp10ms' ),
                        ),

                        // Active/Deactive Switcher
                        array(
                            'id'    => 'v1-price-ft-active',
                            'type'  => 'switcher',
                            'title' => esc_html__( 'Active/Deactive', 'wp10ms' ),
                        ),
                    ),
                ),
            ),
        ),
    ),
) );

    // // Create a pricing section
    // CSF::createSection( $prefix, array(
    //     'parent' => 'home-page',
    //     'title'  => 'Pricing Section',
    //     'fields' => array(
    //         array(
    //             'id' => 'v1-pricing-p',
    //             'type' => 'text',
    //             'title' => 'Short Title'
    //         ),
    //         array(
    //             'id' => 'v1-pricing-h1',
    //             'type' => 'text',
    //             'title' => 'Section Title'
    //         ),
    //         // repeater module
    //         array(
    //             'id' => 'v1-pricing-rep',
    //             'type' => 'repeater',
    //             'title' => 'Add Client pricing',
    //             'button_title' => 'Add more',
    //             'fields' => array(
    //                 array(
    //                     'id' => 'v1-pricing-h3',
    //                     'type' => 'text',
    //                     'title' => 'Plan Name'
    //                 ),
    //                 array(
    //                     'id' => 'v1-pricing-p',
    //                     'type' => 'text',
    //                     'title' => 'Details'
    //                 ),
    //                 array(
    //                     'id' => 'v1-pricing-sym',
    //                     'type' => 'text',
    //                     'title' => 'Currency($)'
    //                 ),
    //                 array(
    //                     'id' => 'v1-pricing-cost',
    //                     'type' => 'text',
    //                     'title' => 'Plan Price'
    //                 ),
    //                 array(
    //                     'id' => 'v1-pricing-sch',
    //                     'type' => 'text',
    //                     'title' => 'Renew Time'
    //                 ),
    //                 array(
    //                     'id' => 'v1-pricing-li-rep',
    //                     'type' => 'repeater',
    //                     'title' => 'Add Plan Features',
    //                     'button_title' => 'Add More',
    //                     'fields' => array(
    //                         array(
    //                             'id' => 'v1-pricing-li',
    //                             'type' => 'text',
    //                             'title' => 'List Item'
    //                         ),
    //                         array(
    //                             'id' => 'v1-price-ft-active',
    //                             'type' => 'switcher',
    //                             'title' => 'Active/Deactive',
    //                         ),
    //                     ),
    //                 ),
    //             ),
    //         ),
    //     ),
        
    // ) );