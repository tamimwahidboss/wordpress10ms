<?php
// Create a v6 project section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Project Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'      => 'v6-project-sec-h6',
            'type'    => 'text',
            'title'   => esc_html__( 'Add Title', 'wp10ms' ),
            'default' => esc_html__( 'Completed Projects', 'wp10ms' ),
        ),
        array(
            'id'      => 'v6-project-sec-h2',
            'type'    => 'text',
            'title'   => esc_html__( 'Add Title', 'wp10ms' ),
            'default' => esc_html__( 'We Have Successfully Completed One IT Solutions Project', 'wp10ms' ),
        ),
        array(
            'id'      => 'v6-project-sec-btn-text',
            'type'    => 'text',
            'title'   => esc_html__( 'Button Title', 'wp10ms' ),
            'default' => esc_html__( 'View All Work', 'wp10ms' ),
        ),
        array(
            'id'      => 'v6-project-sec-btn-link',
            'type'    => 'link',
            'title'   => esc_html__( 'Button Link', 'wp10ms' ),
            'default' => '#',
        ),
        array(
            'id'      => 'v6-project-sec-btn-icon',
            'type'    => 'icon',
            'title'   => esc_html__( 'Button Icon', 'wp10ms' ),
            'default' => 'icon-arrow-right-1',
        ),
    ),
) );

// // Create a v6 project section
// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'Project Section',
//     'fields' => array(
//         array(
//             'id' => 'v6-project-sec-h6',
//             'type' => 'text',
//             'title' => 'Add Title',
//             'default' => 'Completed Projects',
//         ),
//         array(
//             'id' => 'v6-project-sec-h2',
//             'type' => 'text',
//             'title' => 'Add Title',
//             'default' => 'We Have Successfully Completed One IT Solutions Project',
//         ),
//         array(
//             'id' => 'v6-project-sec-btn-text',
//             'type' => 'text',
//             'title' => 'Button Title',
//             'default' => 'View All Work',
//         ),
//         array(
//             'id' => 'v6-project-sec-btn-link',
//             'type' => 'link',
//             'title' => 'Button link',
//             'default' => '#',
//         ),
//         array(
//             'id' => 'v6-project-sec-btn-icon',
//             'type' => 'icon',
//             'title' => 'Button Icon',
//             'default' => 'icon-arrow-right-1',
//         ),
//     ),
// ) );