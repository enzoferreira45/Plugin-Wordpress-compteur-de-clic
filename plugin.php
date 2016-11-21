<?php
/*
Plugin Name: Compteur de clic
Plugin URI:  https://developer.wordpress.org/plugins/the-basics/
Description: Basic WordPress Plugin Header Comment
Version:     20160911
Author:      WordPress.org
Author URI:  https://developer.wordpress.org/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: wporg
Domain Path: /languages
*/


/**
 * Save post metadata when a post is saved.
 *
 * @param int $post_id The post ID.
 * @param post $post The post object.
 * @param bool $update Whether this is an existing post being updated or not.
 */




function compteur_de_clic () { 
	
	echo "<p id='compteur_clique'>0</p><div><a href='#' id='compt'></a><input type='submit' id='like' value='Clic !'/></div>";
	wp_enqueue_script( 'my-js', plugin_dir_url('plugin_compteur_de_clic') . 'plugin_compteur_de_clic/js/compteur.js', array("jquery"),NULL, true );
} 
	add_action('the_content', 'compteur_de_clic') ;