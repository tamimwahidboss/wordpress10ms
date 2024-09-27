<?php
CSF::createSection( $prefix, array(
    'parent' => 'about-page',
    'title'  => esc_html__( 'Team Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'      => 'v4-team-p',
            'type'    => 'text',
            'title'   => esc_html__( 'Section Name', 'wp10ms' ),
            'default' => esc_html__( 'Exclusive Members', 'wp10ms' ),
        ),
        array(
            'id'      => 'v4-team-h1',
            'type'    => 'text',
            'title'   => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'Meet Our Experienced Team Members', 'wp10ms' ),
        ),
        array(
            'id'            => 'v4-team-box-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'Team Member', 'wp10ms' ),
            'button_title'  => esc_html__( 'Add Member', 'wp10ms' ),
            'max'           => 4,
            'fields'        => array(
                array(
                    'id'      => 'v4-team-box-img',
                    'type'    => 'media',
                    'title'   => esc_html__( 'Member Avatar', 'wp10ms' ),
                ),
                array(
                    'id'      => 'v4-team-box-h4',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Name', 'wp10ms' ),
                    'default' => esc_html__( 'Wallace S. Camacho', 'wp10ms' ),
                ),
                array(
                    'id'      => 'v4-team-box-p',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Profession', 'wp10ms' ),
                    'default' => esc_html__( 'Business Manager', 'wp10ms' ),
                ),
                array(
                    'id'            => 'v4-team-social-rep',
                    'type'          => 'repeater',
                    'title'         => esc_html__( 'Social', 'wp10ms' ),
                    'button_title'  => esc_html__( 'Add Link', 'wp10ms' ),
                    'max'           => 4,
                    'fields'        => array(
                        array(
                            'id'      => 'v4-team-social-icon',
                            'type'    => 'icon',
                            'title'   => esc_html__( 'Icon', 'wp10ms' ),
                            'default' => 'fab fa-facebook-f',
                        ),
                        array(
                            'id'      => 'v4-team-social-link',
                            'type'    => 'link',
                            'title'   => esc_html__( 'Social Link', 'wp10ms' ),
                            'default' => '#',
                        ),
                    ),
                ),
            ),
        ),
    ),
));

// // Create a team section
// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'Team Section',
//     'fields' => array(
//         array(
//             'id'    => 'v4-team-p',
//             'type'  => 'text',
//             'title' => 'Section Name',
//             'default' => 'Exclusive Members',
//         ),
//         array(
//             'id'    => 'v4-team-h1',
//             'type'  => 'text',
//             'title' => 'Title',
//             'default' => 'Meet Our Experience Team Members',
//         ),
//         array(
//             'id'            => 'v4-team-box-rep',
//             'type'          => 'repeater',
//             'title'         => 'Team Member',
//             'button_title'  => 'Add Member',
//             'max'           => '4',
//             'fields'        => array(
//                 array(
//                     'id' => 'v4-team-box-img',
//                     'type' => 'media',
//                     'title' => 'Member Avatar',
//                 ),
//                 array(
//                     'id' => 'v4-team-box-h4',
//                     'type' => 'text',
//                     'title' => 'Name',
//                     'default' => 'Wallace S. Camacho',
//                 ),
//                 array(
//                     'id' => 'v4-team-box-p',
//                     'type' => 'text',
//                     'title' => 'Profession',
//                     'default' => 'Business Manager',
//                 ),
//                 array(
//                     'id'            => 'v4-team-social-rep',
//                     'type'          => 'repeater',
//                     'title'         => 'Social',
//                     'button_title'  => 'Add Link',
//                     'max'           => '4',
//                     'fields'        => array(
//                         array(
//                             'id' => 'v4-team-social-icon',
//                             'type' => 'icon',
//                             'title' => 'Icon',
//                             'default' => 'fab fa-facebook-f',
//                         ),
//                         array(
//                             'id' => 'v4-team-social-link',
//                             'type' => 'link',
//                             'title' => 'Social Link',
//                             'default' => '#',
//                         ),
//                     ),
//                 ),
//             ),
//         ),
//     ),
// ) );