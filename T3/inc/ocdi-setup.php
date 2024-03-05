<?php

function watson_ocdi_import_files() {
    return array(
        array(
            'import_file_name'             => 'Dark Image Demo',
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo/01/content.xml',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo/01/customizer.dat',
            'import_preview_image_url'     => get_template_directory_uri() . '/demo/01/preview.jpg',
            'preview_url'                  => esc_url( 'https://watson.cosmos-themes.com/dark' ),
        ),

        array(
            'import_file_name'             => 'Dark Slider Demo',
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo/02/content.xml',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo/02/customizer.dat',
            'import_preview_image_url'     => get_template_directory_uri() . '/demo/02/preview.jpg',
            'preview_url'                  => esc_url( 'https://watson.cosmos-themes.com/dark/slider' ),
        ),

        array(
            'import_file_name'             => 'Dark Particles Demo',
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo/03/content.xml',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo/03/customizer.dat',
            'import_preview_image_url'     => get_template_directory_uri() . '/demo/03/preview.jpg',
            'preview_url'                  => esc_url( 'https://watson.cosmos-themes.com/dark/paritcles' ),
        ),

        array(
            'import_file_name'             => 'Dark Video Demo',
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo/04/content.xml',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo/04/customizer.dat',
            'import_preview_image_url'     => get_template_directory_uri() . '/demo/04/preview.jpg',
            'preview_url'                  => esc_url( 'https://watson.cosmos-themes.com/dark/video' ),
        ),

        array(
            'import_file_name'             => 'Light Image Demo',
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo/05/content.xml',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo/05/customizer.dat',
            'import_preview_image_url'     => get_template_directory_uri() . '/demo/05/preview.jpg',
            'preview_url'                  => esc_url( 'https://watson.cosmos-themes.com/light' ),
        ),

        array(
            'import_file_name'             => 'Light Slider Demo',
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo/06/content.xml',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo/06/customizer.dat',
            'import_preview_image_url'     => get_template_directory_uri() . '/demo/06/preview.jpg',
            'preview_url'                  => esc_url( 'https://watson.cosmos-themes.com/light/slider' ),
        ),

        array(
            'import_file_name'             => 'Light Particles Demo',
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo/07/content.xml',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo/07/customizer.dat',
            'import_preview_image_url'     => get_template_directory_uri() . '/demo/07/preview.jpg',
            'preview_url'                  => esc_url( 'https://watson.cosmos-themes.com/light/particles' ),
        ),

        array(
            'import_file_name'             => 'Light Video Demo',
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'demo/08/content.xml',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'demo/08/customizer.dat',
            'import_preview_image_url'     => get_template_directory_uri() . '/demo/08/preview.jpg',
            'preview_url'                  => esc_url( 'https://watson.cosmos-themes.com/light/video' ),
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'watson_ocdi_import_files' );