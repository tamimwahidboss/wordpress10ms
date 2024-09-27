<?php
// Create a v2 Contact section
CSF::createSection( $prefix, array(
    'parent' => 'global',
    'title'  => esc_html__( 'Contact Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'      => 'v2-contact-sec-h6',
            'type'    => 'text',
            'title'   => esc_html__( 'Subtitle', 'wp10ms' ),
            'default' => esc_html__( 'Let\'s Talk With Us', 'wp10ms' ),
        ),
        array(
            'id'      => 'v2-contact-sec-h2',
            'type'    => 'text',
            'title'   => esc_html__( 'Main Title', 'wp10ms' ),
            'default' => esc_html__( 'Title', 'wp10ms' ),
        ),
        array(
            'id'      => 'v2-contact-sec-h2-right',
            'type'    => 'text',
            'title'   => esc_html__( 'Subtitle (Right)', 'wp10ms' ),
            'default' => esc_html__( 'Don’t Hesitate To Contact With Us, We’ve Very Friendly', 'wp10ms' ),
        ),
        array(
            'id'      => 'v2-contact-sec-des',
            'type'    => 'text',
            'title'   => esc_html__( 'Description', 'wp10ms' ),
            'default' => esc_html__( 'Sed ut perspiciatis unde omnis natus error sity voluptatem accusa ntium doloremque laudantie totam rem aperiamea queipsa quae abillonven tore veritatis.', 'wp10ms' ),
        ),
        array(
            'id'      => 'v2-contact-sec-icon',
            'type'    => 'media',
            'title'   => esc_html__( 'Add Icon', 'wp10ms' ),
            'default' => esc_url( '#' ),
        ),
        array(
            'id'      => 'v2-contact-sec-p',
            'type'    => 'text',
            'title'   => esc_html__( 'Text', 'wp10ms' ),
            'default' => esc_html__( 'Call Any Time', 'wp10ms' ),
        ),
        array(
            'id'      => 'v2-contact-sec-email',
            'type'    => 'link',
            'title'   => esc_html__( 'Email Link', 'wp10ms' ),
            'default' => esc_html__( '+254 (487) 25654', 'wp10ms' ),
        ),
    ),
) );

    // // Create a v2 contact section
    // CSF::createSection( $prefix, array(
    //     'parent' => 'home-page',
    //     'title'  => 'Contact Section',
    //     'fields' => array(
    //         array(
    //             'id' => 'v2-contact-sec-h6',
    //             'type' => 'text',
    //             'title' => 'Title',
    //             'default' => 'Let\'s Talk With Us',
    //         ),
    //         array(
    //             'id' => 'v2-contact-sec-h2',
    //             'type' => 'text',
    //             'title' => 'Title',
    //             'default' => 'Title',
    //         ),
    //         array(
    //             'id' => 'v2-contact-sec-h2-right',
    //             'type' => 'text',
    //             'title' => 'Title',
    //             'default' => 'Don\’t Hesitate To Contact With Us, We\’ve Very Friendly',
    //         ),
    //         array(
    //             'id' => 'v2-contact-sec-des',
    //             'type' => 'text',
    //             'title' => 'Title',
    //             'default' => 'Sed ut perspiciatis unde omnis natus error sity voluptatem accusa ntium doloremque laudantie totam rem aperiamea queipsa quae abillonven tore veritatis.',
    //         ),
    //         array(
    //             'id' => 'v2-contact-sec-icon',
    //             'type' => 'media',
    //             'title' => 'Add Icon',
    //             'default' => '#',
    //         ),
    //         array(
    //             'id' => 'v2-contact-sec-p',
    //             'type' => 'text',
    //             'title' => 'text',
    //             'default' => 'Call Any Time',
    //         ),
    //         array(
    //             'id' => 'v2-contact-sec-email',
    //             'type' => 'link',
    //             'title' => 'Link Email',
    //             'default' => '+254 (487) 25654',
    //         ),
    //     ),
    // ) );