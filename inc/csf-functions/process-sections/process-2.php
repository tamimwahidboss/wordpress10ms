<?php
// Create a Process Section
CSF::createSection( $prefix, array(
    'parent' => 'about-page',
    'title'  => esc_html__( 'Process Section', 'wp10ms' ),
    'fields' => array(
        array(
            'id'    => 'v2-process-p',
            'type'  => 'text',
            'title' => esc_html__( 'Add Short Title', 'wp10ms' ),
            'default' => esc_html__( 'Our working process', 'wp10ms' ),
        ),
        array(
            'id'    => 'v2-process-h1',
            'type'  => 'text',
            'title' => esc_html__( 'Add Title', 'wp10ms' ),
            'default' => esc_html__( 'We Follow 4 steps to Grow Business', 'wp10ms' ),
        ),
        array(
            'id'            => 'v2-process-repeater',
            'type'          => 'repeater',
            'title'         => esc_html__( 'Add Single Process', 'wp10ms' ),
            'max'           => 3,
            'button_title'  => esc_html__( 'Add More', 'wp10ms' ),
            'fields'        => array(
                array(
                    'id'    => 'v2-process-box-icon',
                    'type'  => 'icon',
                    'title' => esc_html__( 'Add Box Icon', 'wp10ms' ),
                    'default' => 'fal fa-mug-hot',
                ),
                array(
                    'id'    => 'v1-single-prosess-h3',
                    'type'  => 'text',
                    'title' => esc_html__( 'Add Single Process Title', 'wp10ms' ),
                    'default' => esc_html__( 'Data Analysis', 'wp10ms' ),
                ),
                array(
                    'id'    => 'v1-single-prosess-p',
                    'type'  => 'textarea',
                    'title' => esc_html__( 'Add Single Process Description', 'wp10ms' ),
                    'default' => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.', 'wp10ms' ),
                ),
            ),
        ),
    ),
) );