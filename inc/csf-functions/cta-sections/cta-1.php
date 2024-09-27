<?php
// Create a v1 CTA section
CSF::createSection( $prefix, array(
    'parent' => 'global',
    'title'  => esc_html__( 'CTA Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'      => 'v1-cta-sec-h1',
            'type'    => 'text',
            'title'   => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'Ready To Get Free Consultations For <br> Any Kind Of IT Solutions?', 'wp10ms' ),
        ),
        array(
            'id'      => 'v1-cta-btn',
            'type'    => 'link',
            'title'   => esc_html__( 'CTA Button', 'wp10ms' ),
        ),
    ),
) );

    // // Create a v1 CTA section
    // CSF::createSection( $prefix, array(
    //     'parent' => 'home-page',
    //     'title'  => 'CTA Section',
    //     'fields' => array(
    //         array(
    //             'id' => 'v1-cta-sec-h1',
    //             'type' => 'text',
    //             'title' => 'Title',
    //             'default' => 'Ready To Get Free Consulations For <br> Any Kind Of It Solutions ?',
    //         ),
    //         array(
    //             'id' => 'v1-cta-btn',
    //             'type' => 'link',
    //             'title' => 'CTA Button',
    //         ),
    //     ),
    // ) );