<?php
// Create a feature section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Feature Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'    => 'v2-feature-icon-rep',
            'type'  => 'repeater',
            'title' => esc_html__( 'Feature Icons', 'wp10ms' ),
            'max'   => '9',
            'button_title' => esc_html__( 'Add Icon', 'wp10ms' ),
            'fields' => array(
                array(
                    'id'    => 'v2-feature-box-icon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Box Icon', 'wp10ms' ),
                    'default' => 'icon-arrow-right-1',
                ),
                array(
                    'id'    => 'v2-feature-box-link',
                    'type'  => 'link',
                    'title' => esc_html__( 'Button Link', 'wp10ms' ),
                    'default' => '#',
                ),
            ),
        ),
        array(
            'id'    => 'v2-feature-top-title',
            'type'  => 'text',
            'title' => esc_html__( 'Top Text', 'wp10ms' ),
        ),
        array(
            'id'    => 'v2-feature-h1',
            'type'  => 'text',
            'title' => esc_html__( 'Main Title', 'wp10ms' ),
        ),
        array(
            'id'    => 'v2-feature-p',
            'type'  => 'text',
            'title' => esc_html__( 'Description', 'wp10ms' ),
        ),
        array(
            'id'    => 'v2-feature-btn',
            'type'  => 'link',
            'title' => esc_html__( 'Button Link', 'wp10ms' ),
            'default' => '#',
        ),
        array(
            'id'    => 'v2-feature-btn-icon',
            'type'  => 'icon',
            'title' => esc_html__( 'Button Icon', 'wp10ms' ),
            'default' => 'flaticon flaticon-monitor',
        ),
    )
) );

// // Create a feature section
// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'feature Section',
//     'fields' => array(
//         array(
//             'id'    => 'v2-feature-icon-rep',
//             'type'  => 'repeater',
//             'title' => 'feature icon',
//             'max'   => '9',
//             'button_title' => 'Add Icon',
//             'fields' => array(
//                 array(
//                     'id'    => 'v2-feature-box-icon',
//                     'type'  => 'icon',
//                     'title' => 'Box Icon',
//                     'default' => 'icon-arrow-right-1',
//                 ),
//                 array(
//                     'id'    => 'v2-feature-box-link',
//                     'type'  => 'link',
//                     'title' => 'Button link',
//                     'default' => '#',
//                 ),
//             ),
//         ),
//         array(
//             'id'    => 'v2-feature-top-title',
//             'type'  => 'text',
//             'title' => 'Top Text',
//         ),
//         array(
//             'id'    => 'v2-feature-h1',
//             'type'  => 'text',
//             'title' => 'Main Title',
//         ),
//         array(
//             'id'    => 'v2-feature-p',
//             'type'  => 'text',
//             'title' => 'Description',
//         ),
//         array(
//             'id'    => 'v2-feature-btn',
//             'type'  => 'link',
//             'title' => 'Button link',
//             'default' => '#',
//         ),
//         array(
//             'id'    => 'v2-feature-btn-icon',
//             'type'  => 'icon',
//             'title' => 'Button Icon',
//             'default' => 'flaticon flaticon-monitor',
//         ),




        
        
        

//   )
// ) );