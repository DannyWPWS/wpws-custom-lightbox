<?php
/**
 * Plugin Name:       WPWS Custom Lightbox
 * Description:       A simple custom lightbox plugin.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Danny Jones
 * Author URI:        https://www.wpwhitesecurity.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wpws-custom-lightbox
 * Domain Path:       /languages
 */

 function wpws_custom_lightbox_scripts_and_styles() {
     wp_enqueue_style( 'wpws-lightbox-css', plugin_dir_url( __FILE__ ) . 'assets/css/simpleLightbox.min.css' );
     wp_enqueue_script( 'custom-gallery-lightbox', plugin_dir_url( __FILE__ ) . 'assets/js/simpleLightbox.min.js', array( 'jquery' ), '1.0', true );
 }

 add_action( 'wp_enqueue_scripts', 'wpws_custom_lightbox_scripts_and_styles' );
