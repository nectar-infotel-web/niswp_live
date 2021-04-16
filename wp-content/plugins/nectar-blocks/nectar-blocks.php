<?php
/**
 * Plugin Name: Nectar Block
 * Plugin URI: 
 * Description: This plugin creates a simple Gutenberg block
 * Version: 1.0.0
 * Author: 
 * Author URI: 
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: nectar-blocks
 * Domain Path: /languages
 *
 * @package Nectar Blocks
 */

define( 'NB_PLUGIN_URL', plugins_url( 'nectar-blocks' ) );
define( 'NB_PLUGIN_DIR_PATH', plugin_dir_path( __FILE__ ) );

function gutenberg_custom_blocks() {


   // Block front end styles.
   wp_register_style(
      'nb-block-front-end-styles',
      NB_PLUGIN_URL . '/style.css',
      array( 'wp-edit-blocks' ),
      filemtime( NB_PLUGIN_DIR_PATH . 'style.css' ),
      true
   );
   // Block editor styles.
   wp_register_style(
      'nb-block-editor-styles',
      NB_PLUGIN_URL . '/editor.css',
      array( 'wp-edit-blocks' ),
      filemtime( NB_PLUGIN_DIR_PATH . 'editor.css' )
   );

   // Block Editor Script.
   wp_register_script(
      'nb-block-editor-js',
      NB_PLUGIN_URL . '/simple-block.js',
      array( 'wp-blocks', 'wp-element', 'wp-editor', 'wp-components', 'wp-i18n' ),
      filemtime( NB_PLUGIN_DIR_PATH . 'simple-block.js' ),
      true
   );
   register_block_type(
      'nectar-blocks/simple-block',
      array(
         'style'         => 'nb-block-front-end-styles',
         'editor_style'  => 'nb-block-editor-styles',
         'editor_script' => 'nb-block-editor-js',
      )
   );

}

add_action( 'init', 'gutenberg_custom_blocks' );