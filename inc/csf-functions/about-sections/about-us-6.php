<?php
// Create a v6 about section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'About Section', 'wp10ms' ),
    'fields' => array(

        // Media field for image upload
        array(
            'id'    => 'v6-about-sec-media',
            'type'  => 'media',
            'title' => esc_html__( 'Add Image', 'wp10ms' ),
        ),

        // Text field for H6 title
        array(
            'id'      => 'v6-about-sec-h6',
            'type'    => 'text',
            'title'   => esc_html__( 'Add Title', 'wp10ms' ),
            'default' => esc_html__( 'What we do', 'wp10ms' ),
        ),

        // Text field for H2 title
        array(
            'id'      => 'v6-about-sec-h2',
            'type'    => 'text',
            'title'   => esc_html__( 'Add Title', 'wp10ms' ),
            'default' => esc_html__( 'Digital data consulting for your Business Growth', 'wp10ms' ),
        ),

        // Textarea for description
        array(
            'id'      => 'v6-about-sec-des',
            'type'    => 'textarea',
            'title'   => esc_html__( 'Description', 'wp10ms' ),
            'default' => esc_html__( 'Sed ut perspiciatis unde omnis natus error sity voluptatem accusa ntium doloremque laudantie totam rem aperiamea queipsa quae abillonven tore veritatis.', 'wp10ms' ),
        ),

        // Text field for button text
        array(
            'id'      => 'v6-about-sec-btn-text',
            'type'    => 'text',
            'title'   => esc_html__( 'Add Button Text', 'wp10ms' ),
            'default' => esc_html__( 'Know us more', 'wp10ms' ),
        ),

        // Link field for button link
        array(
            'id'      => 'v6-about-sec-btn-link',
            'type'    => 'link',
            'title'   => esc_html__( 'Add Button Link', 'wp10ms' ),
            'default' => '#',
        ),

        // Icon field for button icon
        array(
            'id'      => 'v6-about-sec-btn-icon',
            'type'    => 'icon',
            'title'   => esc_html__( 'Add Button Icon', 'wp10ms' ),
            'default' => 'icon-arrow-right-1',
        ),
    ),
) );

// // Create a v6 about section
// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'About Section',
//     'fields' => array(
//         array(
//             'id' => 'v6-about-sec-media',
//             'type' => 'media',
//             'title' => 'Add Image',
//         ),
//         array(
//             'id' => 'v6-about-sec-h6',
//             'type' => 'text',
//             'title' => 'Add Title',
//             'default' => 'What we do',
//         ),
//         array(
//             'id' => 'v6-about-sec-h2',
//             'type' => 'text',
//             'title' => 'Add Title',
//             'default' => 'Digital data consulting for your Business Growth',
//         ),
//         array(
//             'id' => 'v6-about-sec-des',
//             'type' => 'textarea',
//             'title' => 'Description',
//             'default' => 'Sed ut perspiciatis unde omnis natus error sity voluptatem accusa ntium doloremque laudantie totam rem aperiamea queipsa quae abillonven tore veritatis.',
//         ),

//         array(
//             'id' => 'v6-about-sec-btn-text',
//             'type' => 'text',
//             'title' => 'Add Button Text',
//             'default' => 'Know us more ',
//         ),
//         array(
//             'id' => 'v6-about-sec-btn-link',
//             'type' => 'link',
//             'title' => 'Add Button Link',
//             'default' => '#',
//         ),
//         array(
//             'id' => 'v6-about-sec-btn-icon',
//             'type' => 'icon',
//             'title' => 'Add Button Icon',
//             'default' => 'icon-arrow-right-1',
//         ),
//     ),
// ) );