<?php
CSF::createSection( $prefix, array(
    'parent' => 'about-page',
    'title'  => esc_html__( 'Team Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'      => 'v1-team-p',
            'type'    => 'text',
            'title'   => esc_html__( 'Section Subtitle', 'wp10ms' ),
            'default' => esc_html__( 'Meet Our Team', 'wp10ms' ),
        ),
        array(
            'id'      => 'v1-team-h1',
            'type'    => 'text',
            'title'   => esc_html__( 'Section Title', 'wp10ms' ),
            'default' => esc_html__( 'Can I Get Internet In My Area?', 'wp10ms' ),
        ),
        array(
            'id'      => 'v1-team-btn',
            'type'    => 'link',
            'title'   => esc_html__( 'Button Link', 'wp10ms' ),
            'default' => '#',
        ),
        array(
            'id'            => 'v1-team-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'Team Members', 'wp10ms' ),
            'button_title'  => esc_html__( 'Add Team Member', 'wp10ms' ),
            'max'           => 8,
            'fields'        => array(
                array(
                    'id'      => 'v1-team-box-avatar',
                    'type'    => 'media',
                    'title'   => esc_html__( 'Avatar', 'wp10ms' ),
                    'default' => '#',
                ),
                array(
                    'id'      => 'v1-team-box-h4',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Name', 'wp10ms' ),
                    'default' => esc_html__( 'John Doe', 'wp10ms' ),
                ),
                array(
                    'id'      => 'v1-team-box-p',
                    'type'    => 'textarea',
                    'title'   => esc_html__( 'Description', 'wp10ms' ),
                    'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin.', 'wp10ms' ),
                ),
                array(
                    'id'            => 'v1-team-soc-rep',
                    'type'          => 'repeater',
                    'title'         => esc_html__( 'Social Media Links', 'wp10ms' ),
                    'button_title'  => esc_html__( 'Add Social Media', 'wp10ms' ),
                    'max'           => 4,
                    'fields'        => array(
                        array(
                            'id'      => 'v1-team-socLink',
                            'type'    => 'link',
                            'title'   => esc_html__( 'Social Media Link', 'wp10ms' ),
                        ),
                        array(
                            'id'      => 'v1-team-box-icon',
                            'type'    => 'icon',
                            'title'   => esc_html__( 'Social Media Icon', 'wp10ms' ),
                            'default' => 'fas fa-envelope-open-text',
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
//             'id' => 'v1-team-p',
//             'type' => 'text',
//             'title' => 'team Title',
//             'default' => 'Can I Get Internet In My Area?',
//         ),
//         array(
//             'id' => 'v1-team-h1',
//             'type' => 'text',
//             'title' => 'team Title',
//             'default' => 'Can I Get Internet In My Area?',
//         ),
//         array(
//             'id' => 'v1-team-btn',
//             'type' => 'link',
//             'title' => 'team Title',
//             'default' => 'Can I Get Internet In My Area?',
//         ),

//         array(
//             'id'            => 'v1-team-rep',
//             'type'          => 'repeater',
//             'title'         => 'team Left Item',
//             'button_title'  => 'Add Item',
//             'max'           => '8',
//             'fields'        => array(
//                 array(
//                     'id' => 'v1-team-box-avatar',
//                     'type' => 'media',
//                     'title' => 'Avatar',
//                     'default' => '#',
//                 ),
//                 array(
//                     'id' => 'v1-team-box-h4',
//                     'type' => 'text',
//                     'title' => 'team Title',
//                     'default' => 'Can I Get Internet In My Area?',
//                 ),
//                 array(
//                     'id' => 'v1-team-box-p',
//                     'type' => 'textarea',
//                     'title' => 'Description',
//                     'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rhoncus dolor at libero ultricies ullamcorper vel ut dui. Maecenas sollicitudin',
//                 ),
//                 array(
//                     'id'            => 'v1-team-soc-rep',
//                     'type'          => 'repeater',
//                     'title'         => 'Social Media',
//                     'button_title'  => 'Add Item',
//                     'max'           => '4',
//                     'fields'        => array(
//                         array(
//                             'id' => 'v1-team-socLink',
//                             'type' => 'link',
//                             'title' => 'Social Link',
//                         ),
//                         array(
//                             'id' => 'v1-team-box-icon',
//                             'type' => 'icon',
//                             'title' => 'Social Icon',
//                             'default' => 'fas fa-envelope-open-text',
//                         ),
//                     ),
//                 ),
//             ),
//         ),
//     ),
// ) );