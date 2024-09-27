<?php
// Create a v6 Testimonial section
CSF::createSection( $prefix, array(
    'parent' => 'home-page',
    'title'  => esc_html__( 'Testimonial Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'      => 'v4-testimonial-sec-h6',
            'type'    => 'text',
            'title'   => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'Testimonials', 'wp10ms' ),
        ),
        array(
            'id'      => 'v4-testimonial-sec-h2',
            'type'    => 'text',
            'title'   => esc_html__( 'Title', 'wp10ms' ),
            'default' => esc_html__( 'What people say About Techex', 'wp10ms' ),
        ),
        array(
            'id'          => 'v4-testimonial-rep',
            'type'        => 'repeater',
            'title'       => esc_html__( 'Testimonial Feedback', 'wp10ms' ),
            'max'         => '6',
            'button_title' => esc_html__( 'Add More', 'wp10ms' ),
            'fields'      => array(
                array(
                    'id'      => 'v4-testimonial-img',
                    'type'    => 'media',
                    'title'   => esc_html__( 'Testimonial Image', 'wp10ms' ),
                    'default' => '#',
                ),
                array(
                    'id'      => 'v4-testimonial-h4',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Testimonial Name', 'wp10ms' ),
                    'default' => esc_html__( 'Elizabeth Linda', 'wp10ms' ),
                ),
                array(
                    'id'      => 'v4-testimonial-prof',
                    'type'    => 'text',
                    'title'   => esc_html__( 'Testimonial Profession', 'wp10ms' ),
                    'default' => esc_html__( 'Company Manager', 'wp10ms' ),
                ),
                array(
                    'id'      => 'v4-testimonial-feed',
                    'type'    => 'textarea',
                    'title'   => esc_html__( 'Testimonial Feedback', 'wp10ms' ),
                    'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'wp10ms' ),
                ),
                array(
                    'id'      => 'v4-testimonial-comp-logo',
                    'type'    => 'media',
                    'title'   => esc_html__( 'Testimonial Company Logo', 'wp10ms' ),
                    'default' => '#',
                ),
            ),
        ),
    ),
) );

// // Create a v6 Testimonial section
// CSF::createSection( $prefix, array(
//     'parent' => 'home-page',
//     'title'  => 'Testimonial Section',
//     'fields' => array(
//         array(
//             'id' => 'v4-testimonial-sec-h6',
//             'type' => 'text',
//             'title' => 'Title',
//             'default' => 'Testimonials',
//         ),
//         array(
//             'id' => 'v4-testimonial-sec-h2',
//             'type' => 'text',
//             'title' => 'Title',
//             'default' => 'What people say About Techex',
//         ),
//         array(
//             'id'            => 'v4-testimonial-rep',
//             'type'          => 'repeater',
//             'title'         => 'Testimonial Feedback',
//             'max'           => '6',
//             'button_title'  => 'Add More',
//             'fields'        => array(
//                 array(
//                     'id' => 'v4-testimonial-img',
//                     'type' => 'media',
//                     'title' => 'Testimonial Image',
//                     'default' => '#',
//                 ),
//                 array(
//                     'id' => 'v4-testimonial-h4',
//                     'type' => 'text',
//                     'title' => 'Testimonial Name',
//                     'default' => 'Elizabeth Linda',
//                 ),
//                 array(
//                     'id' => 'v4-testimonial-prof',
//                     'type' => 'text',
//                     'title' => 'Testimonial Profession',
//                     'default' => 'Company Manager',
//                 ),
//                 array(
//                     'id' => 'v4-testimonial-feed',
//                     'type' => 'textarea',
//                     'title' => 'Testimonial FeedBack',
//                     'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.',
//                 ),
//                 array(
//                     'id' => 'v4-testimonial-comp-logo',
//                     'type' => 'media',
//                     'title' => 'Testimonial Company Logo',
//                     'default' => '#',
//                 ),
//             ),
//         ),
//     ),
// ) );