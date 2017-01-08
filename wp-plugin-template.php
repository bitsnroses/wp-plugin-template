<?php
/*
Plugin Name: WordPress Plugin Template
Plugin URI:  https://gitlab.com/bitsnroses/wp-plugin-template
Description: Basic WordPress Plugin Header Comment
Version:     0.0.0
Author:      Bits&Roses
Author URI:  https://bitsnroses.com/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wp-plugin-template
Domain Path: /languages
*/

/**
 * Avoid direct calling
 */
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
 * Text domain
 */
load_plugin_textdomain('wp-plugin-template', false, basename( dirname( __FILE__ ) ) . '/languages' );

/**
 * Required files
 *
 * The mapped array determines the code library included in your plugin.
 * Add or remove files to the array as needed.
 */
array_map(function ($file) use ($sage_error) {
  $file = "/includes/{$file}.php";
  if ( file_exists($file) ) {
    require_once $file;
  }
}, ['feature1']);

?>
