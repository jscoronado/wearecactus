<?php
/**
 * Eventos Caninos Cactus
 *
 * Plugin Name: Eventos Caninos Cactus
 * Description: Creación de un CPT personalizado llamado Eventos Caninos.
 * Version:     1.0
 * Author:      Jose M. Coronado
 * Author URI:  https://github.com/jscoronado/wearecactus
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Text Domain: eventos-caninos
 * Domain Path: /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Invalid request.' );
}

include_once( plugin_dir_path(__FILE__) .'/includes/post-types/eventos.php');

add_filter( 'single_template', 'override_single_cactus' );
function override_single_cactus( $single_template ){
    global $post;

    $file = dirname(__FILE__) .'/includes/single-'. $post->post_type .'.php';
    if( file_exists( $file ) ) $single_template = $file;
    return $single_template;
}

add_filter( 'archive_template', 'override_archive_cactus' );
function override_archive_cactus( $single_template ){
    global $post;

    $file = dirname(__FILE__) .'/includes/archive-'. $post->post_type .'.php';
    if( file_exists( $file ) ) $archive_template = $file;
    return $archive_template;
}