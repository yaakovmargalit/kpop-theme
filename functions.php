<?php



function add_custom_category_fields() {
    // בדיקה אם התוסף ACF פעיל
    if (function_exists('acf_add_local_field_group')) {
        // הוספת שדות הקטגוריה לפוסט טקסונומיה 'product_cat'
        acf_add_local_field_group(array(
            'key' => 'group_custom_category_fields',
            'title' => 'Custom Category Fields',
            'fields' => array(
                array(
                    'key' => 'field_custom_category_image',
                    'label' => 'Category Image',
                    'name' => 'wooc_category_image',
                    'type' => 'text',
                    'instructions' => 'Enter the custom image for the category',
                    'required' => 0,
                    'conditional_logic' => 0,
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'taxonomy',
                        'operator' => '==',
                        'value' => 'product_cat',
                    ),
                ),
            ),
        ));
    }
}
add_action('init', 'add_custom_category_fields');


function enqueue_kpop_script() {
    wp_enqueue_style( 'main-kpop-style', get_template_directory_uri() . '/build/index.css', array(), null, 'all' );
    wp_enqueue_style( 'adition-kpop-style', get_template_directory_uri() . '/build/style-index.css', array(), null, 'all' );
    wp_enqueue_script( 'main-kpop-script', get_template_directory_uri() . '/build/index.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_kpop_script' );
