<?php
CSF::createSection( $prefix, array(
    'parent' => 'about-page',
    'title'  => esc_html__( 'Team Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'      => 'v5-team-img',
            'type'    => 'media',
            'title'   => esc_html__( 'Member Avatar', 'wp10ms' ),
        ),
        array(
            'id'      => 'v5-team-h4',
            'type'    => 'text',
            'title'   => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'Meet Our Experienced Team Members', 'wp10ms' ),
        ),
        array(
            'id'      => 'v5-team-p',
            'type'    => 'text',
            'title'   => esc_html__( 'Description', 'wp10ms' ),
            'default' => esc_html__( 'Exclusive Members', 'wp10ms' ),
        ),
        array(
            'id'            => 'v5-team-social-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'Social Media Links', 'wp10ms' ),
            'button_title'  => esc_html__( 'Add Link', 'wp10ms' ),
            'max'           => 4,
            'fields'        => array(
                array(
                    'id'      => 'v5-team-social-icon',
                    'type'    => 'icon',
                    'title'   => esc_html__( 'Icon', 'wp10ms' ),
                    'default' => 'fab fa-facebook-f',
                ),
                array(
                    'id'      => 'v5-team-social-link',
                    'type'    => 'link',
                    'title'   => esc_html__( 'Social Link', 'wp10ms' ),
                    'default' => '#',
                ),
            ),
        ),
        array(
            'id'      => 'v5-team-ele1-h2',
            'type'    => 'text',
            'title'   => esc_html__( 'Element 1 Title', 'wp10ms' ),
            'default' => esc_html__( 'Meet Our Experience', 'wp10ms' ),
        ),
        array(
            'id'      => 'v5-team-ele1-p',
            'type'    => 'textarea',
            'title'   => esc_html__( 'Element 1 Description', 'wp10ms' ),
            'default' => esc_html__( 'Detailed description for the first element.', 'wp10ms' ),
        ),
        array(
            'id'      => 'v5-team-ele2-h2',
            'type'    => 'text',
            'title'   => esc_html__( 'Element 2 Title', 'wp10ms' ),
            'default' => esc_html__( 'Meet Our Experience', 'wp10ms' ),
        ),
        array(
            'id'            => 'v5-team-about-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'About Section', 'wp10ms' ),
            'button_title'  => esc_html__( 'Add Link', 'wp10ms' ),
            'max'           => 4,
            'fields'        => array(
                array(
                    'id'      => 'v5-team-about-icon',
                    'type'    => 'icon',
                    'title'   => esc_html__( 'Icon', 'wp10ms' ),
                    'default' => 'fab fa-facebook-f',
                ),
                array(
                    'id'      => 'v5-team-about-info',
                    'type'    => 'text',
                    'title'   => esc_html__( 'About Info', 'wp10ms' ),
                    'default' => esc_html__( 'info@example.com', 'wp10ms' ),
                ),
            ),
        ),
        array(
            'id'      => 'v5-team-ele3-h2',
            'type'    => 'text',
            'title'   => esc_html__( 'Element 3 Title', 'wp10ms' ),
            'default' => esc_html__( 'Meet Our Experience', 'wp10ms' ),
        ),
        array(
            'id'      => 'v5-team-ele3-p',
            'type'    => 'textarea',
            'title'   => esc_html__( 'Element 3 Description', 'wp10ms' ),
            'default' => esc_html__( 'Detailed description for the third element.', 'wp10ms' ),
        ),
        array(
            'id'            => 'v5-team-skill-rep',
            'type'          => 'repeater',
            'title'         => esc_html__( 'Skills', 'wp10ms' ),
            'button_title'  => esc_html__( 'Add Skill', 'wp10ms' ),
            'max'           => 4,
            'fields'        => array(
                array(
                    'id'      => 'v5-team-ele4-h4',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Skill Title', 'wp10ms' ),
                    'default' => esc_html__( 'Meet Our Experience', 'wp10ms' ),
                ),
                array(
                    'id'      => 'v5-team-ele4-span',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Skill Level (%)', 'wp10ms' ),
                    'default' => esc_html__( '65', 'wp10ms' ),
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
//             'id' => 'v5-team-img',
//             'type' => 'media',
//             'title' => 'Member Avatar',
//         ),
//         array(
//             'id'    => 'v5-team-h4',
//             'type'  => 'text',
//             'title' => 'Title',
//             'default' => 'Meet Our Experience Team Members',
//         ),
//         array(
//             'id'    => 'v5-team-p',
//             'type'  => 'text',
//             'title' => 'Description',
//             'default' => 'Exclusive Members',
//         ),
//         array(
//             'id'            => 'v5-team-social-rep',
//             'type'          => 'repeater',
//             'title'         => 'Social',
//             'button_title'  => 'Add Link',
//             'max'           => '4',
//             'fields'        => array(
//                 array(
//                     'id' => 'v5-team-social-icon',
//                     'type' => 'icon',
//                     'title' => 'Icon',
//                     'default' => 'fab fa-facebook-f',
//                 ),
//                 array(
//                     'id' => 'v5-team-social-link',
//                     'type' => 'link',
//                     'title' => 'Social Link',
//                     'default' => '#',
//                 ),
//             ),
//         ),
//         array(
//             'id'    => 'v5-team-ele1-h2',
//             'type'  => 'text',
//             'title' => 'Title',
//             'default' => 'Meet Our Experience',
//         ),
//         array(
//             'id'    => 'v5-team-ele1-p',
//             'type'  => 'textarea',
//             'title' => 'Title',
//             'default' => 'Meet Our Experience',
//         ),
//         array(
//             'id'    => 'v5-team-ele2-h2',
//             'type'  => 'text',
//             'title' => 'Title',
//             'default' => 'Meet Our Experience',
//         ),
//         array(
//             'id'            => 'v5-team-about-rep',
//             'type'          => 'repeater',
//             'title'         => 'about',
//             'button_title'  => 'Add Link',
//             'max'           => '4',
//             'fields'        => array(
//                 array(
//                     'id' => 'v5-team-about-icon',
//                     'type' => 'icon',
//                     'title' => 'Icon',
//                     'default' => 'fab fa-facebook-f',
//                 ),
//                 array(
//                     'id' => 'v5-team-about-info',
//                     'type' => 'text',
//                     'title' => 'about Link',
//                     'default' => 'info@example.com',
//                 ),
//             ),
//         ),
//         array(
//             'id'    => 'v5-team-ele3-h2',
//             'type'  => 'text',
//             'title' => 'Title',
//             'default' => 'Meet Our Experience',
//         ),
//         array(
//             'id'    => 'v5-team-ele3-p',
//             'type'  => 'textarea',
//             'title' => 'Title',
//             'default' => 'Meet Our Experience',
//         ),
//         array(
//             'id'            => 'v5-team-skill-rep',
//             'type'          => 'repeater',
//             'title'         => 'skill',
//             'button_title'  => 'Add Link',
//             'max'           => '4',
//             'fields'        => array(
//                 array(
//                     'id'    => 'v5-team-ele4-h4',
//                     'type'  => 'text',
//                     'title' => 'Title',
//                     'default' => 'Meet Our Experience',
//                 ),
//                 array(
//                     'id'    => 'v5-team-ele4-span',
//                     'type'  => 'text',
//                     'title' => 'Title',
//                     'default' => '65',
//                 ),
//             ),
//         ),

//     ),
// ) );