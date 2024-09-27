<?php
// Control core classes to avoid errors
if ( class_exists( 'CSF' ) ) {

  // Set a unique slug-like ID
  $prefix = 'wp10ms_metabox';

  // Create a metabox
  CSF::createMetabox( $prefix, array(
    'title'     => esc_html__( 'Project Options', 'wp10ms' ),
    'post_type' => 'project',
  ) );

  // Create a section
  CSF::createSection( $prefix, array(
    'title'  => esc_html__( 'Project Details', 'wp10ms' ),
    'fields' => array(
      array(
        'id'           => 'v6-project-img-rep',
        'type'         => 'repeater',
        'title'        => esc_html__( 'Project Showcase', 'wp10ms' ),
        'max'          => 4,
        'button_title' => esc_html__( 'Add More', 'wp10ms' ),
        'fields'       => array(
          array(
            'id'    => 'v6-project-img',
            'type'  => 'media',
            'title' => esc_html__( 'Project Showcase Image', 'wp10ms' ),
          ),
        ),
      ),
      array(
        'id'    => 'v6-project-data-1',
        'type'  => 'text',
        'title' => esc_html__( 'Client Name', 'wp10ms' ),
        'default' => esc_html__( 'Robert C. Saavedra', 'wp10ms' ),
      ),
      array(
        'id'    => 'v6-project-data-2',
        'type'  => 'text',
        'title' => esc_html__( 'Project Name', 'wp10ms' ),
        'default' => esc_html__( 'Project Title', 'wp10ms' ),
      ),
      array(
        'id'    => 'v6-project-data-3',
        'type'  => 'text',
        'title' => esc_html__( 'Service Type', 'wp10ms' ),
        'default' => esc_html__( 'Service Description', 'wp10ms' ),
      ),
      array(
        'id'    => 'v6-project-data-4',
        'type'  => 'select',
        'title' => esc_html__( 'Category', 'wp10ms' ),
        'taxonomy' => 'project-category',
        'options'  => 'project-category',
        'default'  => esc_html__( 'Default Category', 'wp10ms' ),
      ),
      array(
        'id'    => 'v6-project-data-5',
        'type'  => 'date',
        'title' => esc_html__( 'Project Date', 'wp10ms' ),
      ),
    ),
  ) );

}

// // Control core classes for avoid errors
// if( class_exists( 'CSF' ) ) {

//   //
//   // Set a unique slug-like ID
//   $prefix = 'wp10ms_metabox';

//   //
//   // Create a metabox
//   CSF::createMetabox( $prefix, array(
//     'title'     => 'Project Options',
//     'post_type' => 'project',
//   ) );

//   //
//   // Create a section
//   CSF::createSection( $prefix, array(
//     'title'  => 'Project Details',
//     'fields' => array(
//       array(
//         'id'           => 'v6-project-img-rep',
//         'type'         => 'repeater',
//         'title'        => 'Project Showcase',
//         'max'          => 4,
//         'button_title' => 'Add More',
//         'fields'       => array(
//           array(
//             'id'    => 'v6-project-img',
//             'type'  => 'media',
//             'title' => 'Project Showcase',
//           ),
//         ),
//       ),
//       array(
//         'id'    => 'v6-project-data-1',
//         'type'  => 'text',
//         'title' => 'Client Name',
//         'default' => 'Robert C. Saavedra',
//       ),
//       array(
//         'id'    => 'v6-project-data-2',
//         'type'  => 'text',
//         'title' => 'Project Name',
//         'default' => 'Robert C. Saavedra',
//       ),
//       array(
//         'id'    => 'v6-project-data-3',
//         'type'  => 'text',
//         'title' => 'Service Type',
//         'default' => 'Robert C. Saavedra',
//       ),
//       array(
//         'id'    => 'v6-project-data-4',
//         'type'  => 'select',
//         'title' => 'Category',
//         'taxonomy' => '',
//         'options'     => 'project-category',
//         'default' => 'Robert C. Saavedra',
//       ),
//       array(
//         'id'    => 'v6-project-data-5',
//         'type'  => 'date',
//         'title' => 'Add Date',
//       ),
//     )
//   ) );

// }
