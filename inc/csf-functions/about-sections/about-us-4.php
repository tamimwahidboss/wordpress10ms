<?php
// Create an 'About Page' section using CSF framework
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'About Section', 'wp10ms' ), // Escaping the section title
    'fields' => array(

        // Media field for the About section banner
        array(
            'id'    => 'v4-about-banner',
            'type'  => 'media',
            'title' => esc_html__( 'Add Banner', 'wp10ms' ),
        ),

        // Text field for the About section paragraph title
        array(
            'id'      => 'v4-about-p',
            'type'    => 'text',
            'title'   => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'About Company', 'wp10ms' ),
        ),

        // Text field for the About section H1 title
        array(
            'id'      => 'v4-about-h1',
            'type'    => 'text',
            'title'   => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'Get’s IT Solutions For <br>Expert Consultants', 'wp10ms' ),
        ),

        // Textarea field for the description
        array(
            'id'      => 'v4-about-des',
            'type'    => 'textarea',
            'title'   => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'About Company', 'wp10ms' ),
        ),

        // Link field for adding a button
        array(
            'id'    => 'v4-about-btn',
            'type'  => 'link',
            'title' => esc_html__( 'Add Button', 'wp10ms' ),
        ),

        // Icon field for adding an icon next to the button
        array(
            'id'      => 'v4-about-btn-icon',
            'type'    => 'icon',
            'title'   => esc_html__( 'Add Icon', 'wp10ms' ),
            'default' => 'fal fa-users',
        ),

        // Repeater field for icon box items
        array(
            'id'            => 'v4-about-box-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'List Item', 'wp10ms' ),
            'button_title'  => esc_html__( 'Add List', 'wp10ms' ),
            'max'           => 10, // Maximum number of list items
            'fields'        => array(

                // Icon field for each list item
                array(
                    'id'      => 'v4-about-box-icon',
                    'type'    => 'icon',
                    'title'   => esc_html__( 'Add Icon', 'wp10ms' ),
                    'default' => 'fal fa-users',
                ),

                // Link field for the list title and link
                array(
                    'id'    => 'v4-about-box-link',
                    'type'  => 'link',
                    'title' => esc_html__( 'Box Title & Link', 'wp10ms' ),
                ),

                // Text field for the box description
                array(
                    'id'      => 'v4-about-box-p',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Box Description', 'wp10ms' ),
                    'default' => esc_html__( 'Professional Consultants', 'wp10ms' ),
                ),
            ),
        ),

        // Text fields for CTA (Call to Action) section
        array(
            'id'      => 'v4-about-cta-h2',
            'type'    => 'text',
            'title'   => esc_html__( 'CTA Title', 'wp10ms' ),
            'default' => esc_html__( 'Professional Consultants', 'wp10ms' ),
        ),
        array(
            'id'      => 'v4-about-cta-p',
            'type'    => 'text',
            'title'   => esc_html__( 'CTA Description', 'wp10ms' ),
            'default' => esc_html__( 'Professional Consultants', 'wp10ms' ),
        ),

        // Link field for CTA button
        array(
            'id'    => 'v4-about-cta-link',
            'type'  => 'link',
            'title' => esc_html__( 'CTA Title & Link', 'wp10ms' ),
        ),

        // Icon field for the CTA
        array(
            'id'      => 'v4-about-cta-icon',
            'type'    => 'icon',
            'title'   => esc_html__( 'Add CTA Icon', 'wp10ms' ),
            'default' => 'fal fa-users',
        ),
    )
) );


    // // Create a about page section
    // CSF::createSection( $prefix, array(
    //     'parent' => 'home-page',
    //     'title'  => 'About Section',
    //     'fields' => array(
    //         array(
    //             'id'    => 'v4-about-banner',
    //             'type'  => 'media',
    //             'title' => 'Add Banner',
    //         ),
    //         array(
    //             'id'    => 'v4-about-p',
    //             'type'  => 'text',
    //             'title' => 'Title',
    //             'default' => 'About Company',
    //         ),
    //         array(
    //             'id'    => 'v4-about-h1',
    //             'type'  => 'text',
    //             'title' => 'Title',
    //             'default' => 'Get’s IT Solutions For <br>Expert Consultants',
    //         ),
    //         array(
    //             'id'    => 'v4-about-des',
    //             'type'  => 'textarea',
    //             'title' => 'Title',
    //             'default' => 'About Company',
    //         ),
    //         array(
    //             'id' => 'v4-about-btn',
    //             'type' => 'link',
    //             'title' => 'Add Button',
    //         ),
    //         array(
    //             'id' => 'v4-about-btn-icon',
    //             'type' => 'icon',
    //             'title' => 'Add Icon',
    //             'default' => 'fal fa-users',
    //         ),

    //         array(
    //             'id'            => 'v4-about-box-rep',
    //             'type'          => 'repeater',
    //             'title'         => 'List Item',
    //             'button_title'  => 'Add List',
    //             'max'           => '10',
    //             'fields'        => array(
    //                 array(
    //                     'id' => 'v4-about-box-icon',
    //                     'type' => 'icon',
    //                     'title' => 'Add Icon',
    //                     'default' => 'fal fa-users',
    //                 ),
    //                 array(
    //                     'id' => 'v4-about-box-link',
    //                     'type' => 'link',
    //                     'title' => 'Box Title & Link',
    //                 ),
    //                 array(
    //                     'id' => 'v4-about-box-p',
    //                     'type' => 'text',
    //                     'title' => 'Box Description',
    //                     'default' => 'Professinoal Consultants',
    //                 ),
    //             ),
    //         ),
    //         array(
    //             'id' => 'v4-about-cta-h2',
    //             'type' => 'text',
    //             'title' => 'cta Description',
    //             'default' => 'Professinoal Consultants',
    //         ),
    //         array(
    //             'id' => 'v4-about-cta-p',
    //             'type' => 'text',
    //             'title' => 'cta Description',
    //             'default' => 'Professinoal Consultants',
    //         ),
    //         array(
    //             'id' => 'v4-about-cta-link',
    //             'type' => 'link',
    //             'title' => 'cta Title & Link',
    //         ),
    //         array(
    //             'id' => 'v4-about-cta-icon',
    //             'type' => 'icon',
    //             'title' => 'Add CTA Icon',
    //             'default' => 'fal fa-users',
    //         ),
            
    //     )
    // ) );