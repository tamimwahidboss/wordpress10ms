<?php
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Service Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'      => 'v8-work-sec-banner',
            'type'    => 'media',
            'title'   => esc_html__( 'Banner Image', 'wp10ms' ),
            'default' => '', // Changed default to empty string for media field
        ),
        array(
            'id'      => 'v8-work-sec-vid',
            'type'    => 'link',
            'title'   => esc_html__( 'Popup Video Link', 'wp10ms' ),
            'default' => '', // Changed default to empty string for link field
        ),
        array(
            'id'      => 'v8-work-sec-vid-icon',
            'type'    => 'icon',
            'title'   => esc_html__( 'Video Icon', 'wp10ms' ),
            'default' => 'fas fa-play',
        ),
        array(
            'id'      => 'v8-work-sec-h6',
            'type'    => 'text',
            'title'   => esc_html__( 'Subtitle', 'wp10ms' ),
            'default' => esc_html__( 'Our working process', 'wp10ms' ),
        ),
        array(
            'id'      => 'v8-work-sec-h2',
            'type'    => 'text',
            'title'   => esc_html__( 'Main Title', 'wp10ms' ),
            'default' => esc_html__( 'We Follow 3 Steps to Grow Your Business', 'wp10ms' ),
        ),
        array(
            'id'      => 'v8-work-sec-des',
            'type'    => 'textarea',
            'title'   => esc_html__( 'Description', 'wp10ms' ),
            'default' => esc_html__( 'Sed ut perspiciatis unde omnis natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'wp10ms' ),
        ),
        array(
            'id'            => 'v8-work-box-repeater',
            'type'          => 'repeater',
            'title'         => esc_html__( 'Progress Bars', 'wp10ms' ),
            'max'           => 2,
            'button_title'  => esc_html__( 'Add More', 'wp10ms' ),
            'fields'        => array(
                array(
                    'id'    => 'v8-work-prog-h4',
                    'type'  => 'text',
                    'title' => esc_html__( 'Technology', 'wp10ms' ),
                    'default' => esc_html__( 'Technology', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v8-work-prog-count',
                    'type'  => 'text',
                    'title' => esc_html__( 'Progress Percentage', 'wp10ms' ),
                    'default' => esc_html__( '79%', 'wp10ms' ),
                ),
            ),
        ),
    ),
));

// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'Service Section',
//     'fields' => array(
//         array(
//             'id' => 'v8-work-sec-banner',
//             'type' => 'media',
//             'title' => 'Add Banner',
//             'default' => '#',
//         ),
//         array(
//             'id' => 'v8-work-sec-vid',
//             'type' => 'link',
//             'title' => 'Poppup Video Link',
//             'default' => '#',
//         ),
//         array(
//             'id' => 'v8-work-sec-vid-icon',
//             'type' => 'icon',
//             'title' => 'Video Icon',
//             'default' => 'fas fa-play',
//         ),
//         array(
//             'id' => 'v8-work-sec-h6',
//             'type' => 'text',
//             'title' => 'Title',
//             'default' => 'Our working process',
//         ),
//         array(
//             'id' => 'v8-work-sec-h2',
//             'type' => 'text',
//             'title' => 'Title',
//             'default' => 'We Follow 3 steps to Grow Business',
//         ),
//         array(
//             'id' => 'v8-work-sec-des',
//             'type' => 'textarea',
//             'title' => 'Description',
//             'default' => 'Sed ut perspiciatis unde omnis natus error sity voluptatem accusa ntium doloremque laudantie totam rem aperiamea queipsa quae abillonven tore veritatis.',
//         ),
//         array(
//             'id' => 'v8-work-box-repeater',
//             'type' => 'repeater',
//             'title' => 'Progress Bar',
//             'max' => '2',
//             'button_title' => 'Add More',
//             'fields' => array(
//                 array(
//                     'id' => 'v8-work-prog-h4',
//                     'type' => 'text',
//                     'title' => 'Tech',
//                     'default' => 'Technology',
//                 ),
//                 array(
//                     'id' => 'v8-work-prog-count',
//                     'type' => 'text',
//                     'title' => 'Count',
//                     'default' => '79%',
//                 ),
//             ),
//         ),
//     ),
// ));