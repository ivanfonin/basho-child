<?php
/**
 * Basho child theme engine.
 */

/**
 * Enqueue theme scripts and styles.
 */
function basho_child_scripts_and_styles() {
    $parent_style = 'eisai-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'basho_child_scripts_and_styles' );

add_filter( 'basho_archive_tag_title_prefix', function() {
    return '#';
} );

add_filter( 'basho_the_tags_post_meta_filter', function() {
    return array( '<ul><li>#', '</li><li>#', '</li></ul>' );
} );
