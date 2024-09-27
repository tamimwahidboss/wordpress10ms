<?php
// Create an About Page section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'About Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'    => 'about-sec-title-p',
            'type'  => 'text',
            'title' => esc_html__( 'Section Title (Paragraph)', 'wp10ms' ),
            'default' => esc_html__( 'About Company', 'wp10ms' ),
        ),
        array(
            'id'    => 'about-sec-title-h1',
            'type'  => 'text',
            'title' => esc_html__( 'Section Title (Heading)', 'wp10ms' ),
            'default' => esc_html__( 'Get’s IT Solutions For <br>Expert Consultants', 'wp10ms' ),
        ),
        array(
            'id'    => 'about-sec-title-des',
            'type'  => 'textarea',
            'title' => esc_html__( 'Section Description', 'wp10ms' ),
            'default' => esc_html__( 'Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium doloremque laudantium totam.', 'wp10ms' ),
        ),
        array(
            'id'            => 'about-sec-box-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'Icon Box', 'wp10ms' ),
            'button_title'  => esc_html__( 'Add Icon Box', 'wp10ms' ),
            'max'           => '2',
            'fields'        => array(
                array(
                    'id' => 'about-sec-box-icon',
                    'type' => 'icon',
                    'title' => esc_html__( 'Box Icon', 'wp10ms' ),
                    'default' => 'fal fa-users',
                ),
                array(
                    'id' => 'about-sec-box-title',
                    'type' => 'text',
                    'title' => esc_html__( 'Box Title', 'wp10ms' ),
                    'default' => esc_html__( 'Professional Consultants', 'wp10ms' ),
                ),
                array(
                    'id' => 'about-sec-box-des',
                    'type' => 'text',
                    'title' => esc_html__( 'Box Description', 'wp10ms' ),
                    'default' => esc_html__( 'Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque', 'wp10ms' ),
                ),
            ),
        ),
        array(
            'id'    => 'about-sec-banner',
            'type'  => 'media',
            'title' => esc_html__( 'About Banner', 'wp10ms' ),
        ),
        array(
            'id'            => 'about-sec-ft-item-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'Features Item', 'wp10ms' ),
            'button_title'  => esc_html__( 'Add Item', 'wp10ms' ),
            'max'           => '3',
            'fields'        => array(
                array(
                    'id' => 'about-sec-ft-item-icon',
                    'type' => 'icon',
                    'title' => esc_html__( 'Feature Icon', 'wp10ms' ),
                    'default' => 'flaticon-speech-bubble',
                ),
                array(
                    'id' => 'about-sec-ft-item-title',
                    'type' => 'text',
                    'title' => esc_html__( 'Feature Title', 'wp10ms' ),
                    'default' => esc_html__( 'IT Consultancy', 'wp10ms' ),
                ),
                array(
                    'id' => 'about-sec-ft-item-des',
                    'type' => 'text',
                    'title' => esc_html__( 'Feature Description', 'wp10ms' ),
                    'default' => esc_html__( 'Faster & Smarter Solutions', 'wp10ms' ),
                ),
            ),
        ),
    )
) );

    // // Create a about page section
    // CSF::createSection( $prefix, array(
    //     'parent' => 'home-page',
    //     'title'  => 'About Section',
    //     'fields' => array(
    //         array(
    //             'id'    => 'about-sec-title-p',
    //             'type'  => 'text',
    //             'title' => 'Title',
    //             'default' => 'About Company',
    //         ),
    //         array(
    //             'id'    => 'about-sec-title-h1',
    //             'type'  => 'text',
    //             'title' => 'Title',
    //             'default' => 'Get’s IT Solutions For <br>Expert Consultants',
    //         ),
    //         array(
    //             'id'    => 'about-sec-title-des',
    //             'type'  => 'textarea',
    //             'title' => 'Description',
    //             'default' => 'Sed ut perspiciatis unde omnis natus error sit voluptatem accusa ntium doloremque laudantium totam.',
    //         ),
    //         array(
    //             'id'            => 'about-sec-box-rep',
    //             'type'          => 'repeater',
    //             'title'         => 'Icon Box',
    //             'button_title'  => 'Add Icon Box',
    //             'max'           => '2',
    //             'fields'        => array(
    //                 array(
    //                     'id' => 'about-sec-box-icon',
    //                     'type' => 'icon',
    //                     'title' => 'Box Icon',
    //                     'default' => 'fal fa-users',
    //                 ),
    //                 array(
    //                     'id' => 'about-sec-box-title',
    //                     'type' => 'text',
    //                     'title' => 'Box Title',
    //                     'default' => 'Professinoal Consultants',
    //                 ),
    //                 array(
    //                     'id' => 'about-sec-box-des',
    //                     'type' => 'text',
    //                     'title' => 'Description',
    //                     'default' => 'Sed ut perspiciatis unde omnis iste natus error voluptatem accusantium doloremque',
    //                 ),
    //             ),
    //         ),
    //         array(
    //             'id'    => 'about-sec-banner',
    //             'type'  => 'media',
    //             'title' => 'About Banner',
    //         ),
    //         array(
    //             'id'            => 'about-sec-ft-item-rep',
    //             'type'          => 'repeater',
    //             'title'         => 'Features Item',
    //             'button_title'  => 'Add Item',
    //             'max'           => '3',
    //             'fields'        => array(
    //                 array(
    //                     'id' => 'about-sec-ft-item-icon',
    //                     'type' => 'icon',
    //                     'title' => 'Features Icon',
    //                     'default' => 'flaticon-speech-bubble',
    //                 ),
    //                 array(
    //                     'id' => 'about-sec-ft-item-title',
    //                     'type' => 'text',
    //                     'title' => 'Features Title',
    //                     'default' => 'IT Consultancy',
    //                 ),
    //                 array(
    //                     'id' => 'about-sec-ft-item-des',
    //                     'type' => 'text',
    //                     'title' => 'Description',
    //                     'default' => 'Faster & Smarter Solutions',
    //                 ),
    //             ),
    //         ),
    
    //     )
    // ) );

    // // Create a section
    // CSF::createSection( $prefix, array(
    //     'parent' => 'home-page',
    //     'title'  => 'About Section',
    //     'fields' => array(
    //         array(
    //             'id'    => 'v1-about-title-p',
    //             'type'  => 'text',
    //             'title' => 'Hero Title',
    //             'default' => 'Provide Best It Services Your Business',
    //         ),
    //         array(
    //             'id'    => 'v1-about-title-h1',
    //             'type'  => 'text',
    //             'title' => 'Hero Title',
    //             'default' => 'Provide Best It </br> Services For Your Business',
    //         ),
    //         array(
    //             'id'    => 'v1-about-des',
    //             'type'  => 'textarea',
    //             'title' => 'Title',
    //             'default' => 'Provide Best It Services For Your Business',
    //         ),
    //         array(
    //             'id'    => 'v1-about-box-icon',
    //             'type'  => 'icon',
    //             'title' => 'Title',
    //             'default' => 'Provide Best It Services For Your Business',
    //         ),
    //         array(
    //             'id'    => 'v1-about-box-title',
    //             'type'  => 'text',
    //             'title' => 'Title',
    //             'default' => 'Provide Best It Services',
    //         ),
    //         array(
    //             'id'    => 'v1-about-box-p',
    //             'type'  => 'textarea',
    //             'title' => 'Title',
    //             'default' => 'Provide Best It Services For Your Business',
    //         ),
    //         array(
    //             'id'    => 'v1-about-banner',
    //             'type'  => 'media',
    //             'title' => 'Section Banner',
    //         ),
    
    //     )
    // ) );