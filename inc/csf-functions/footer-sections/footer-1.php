<?php
if ( isset( $options['ft-select'] ) && $options['ft-select'] === 'ft-1' ) {
    
    // Create a footer section
    CSF::createSection( $prefix, array(
        'parent' => 'footer-section',
        'title'  => esc_html__( 'Footer Section', 'wp10ms' ),
        'fields' => array(
            // Footer copyright text
            array(
                'id'    => 'ft-cp-text',
                'type'  => 'text',
                'title' => esc_html__( 'Copyright Text', 'wp10ms' ),
                'default' => esc_html__( '© 2022-2024 WP10MS. All Rights Reserved', 'wp10ms' ),
            ),
        )
    ) );
}


    // if ( isset( $options['ft-select'] ) && $options['ft-select'] === 'ft-1' ) {
        
    //     // Create a footer section
    //     CSF::createSection( $prefix, array(
    //         'parent' => 'footer-section',
    //         'title'  => 'Footer Section',
    //         'fields' => array(
    //             // Footer copyright text
    //             array(
    //                 'id'    => 'ft-cp-text',
    //                 'type'  => 'text',
    //                 'title' => 'Copyright Text',
    //                 'default' => '© 2022-2024 WP10MS. All Rights Reserved',
    //             ),
    //         )
    //     ) );
    // }


