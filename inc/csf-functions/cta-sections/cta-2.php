<?php
// Create a v6 CTA section
CSF::createSection( $prefix, array(
    'parent' => 'global',
    'title'  => esc_html__( 'CTA Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'      => 'v6-cta-sec-h1',
            'type'    => 'text',
            'title'   => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'Ready To Get Free Consultations For <br> Any Kind Of IT Solutions?', 'wp10ms' ),
        ),
        array(
            'id'            => 'v6-cta-sec-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'CTA Button', 'wp10ms' ),
            'button_title'  => esc_html__( 'Add CTA', 'wp10ms' ),
            'max'           => '2',
            'fields'        => array(
                array(
                    'id'    => 'v6-cta-btn-link',
                    'type'  => 'link',
                    'title' => esc_html__( 'CTA Button', 'wp10ms' ),
                ),
                array(
                    'id'      => 'v6-cta-btn-icon',
                    'type'    => 'icon',
                    'title'   => esc_html__( 'CTA Icon', 'wp10ms' ),
                    'default' => 'icon-arrow-right-1',
                ),
            ),
        ),
    ),
) );

    // // Create a v6 CTA section
    // CSF::createSection( $prefix, array(
    //     'parent' => 'home-page',
    //     'title'  => 'CTA Section',
    //     'fields' => array(
    //         array(
    //             'id' => 'v6-cta-sec-h1',
    //             'type' => 'text',
    //             'title' => 'Title',
    //             'default' => 'Ready To Get Free Consulations For <br> Any Kind Of It Solutions ?',
    //         ),
    //         array(
    //             'id'            => 'v6-cta-sec-rep',
    //             'type'          => 'repeater',
    //             'title'         => 'CTA Button',
    //             'button_title'  => 'Add CTA',
    //             'max' => '2',
    //             'fields'        => array(
    //                 array(
    //                     'id' => 'v6-cta-btn-link',
    //                     'type' => 'link',
    //                     'title' => 'CTA Button',
    //                 ),
    //                 array(
    //                     'id' => 'v6-cta-btn-icon',
    //                     'type' => 'icon',
    //                     'title' => 'CTA Icon',
    //                     'default' => 'icon-arrow-right-1',
    //                 ),
    //             ),
    //         ),
    //     ),
    // ) );