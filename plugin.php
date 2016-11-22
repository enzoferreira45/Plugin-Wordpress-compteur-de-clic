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
	
	echo "	<div id='all'>
				<div id='contener-timer'>

			  	  <p id='duree-timer'>Durée du Timer: </p>
		      	  <div id='secondes'>

					<div>

						 <select id='timer'>
							<option> 5  </option>
							<option> 10  </option>
							<option> 15  </option>
							<option> 20  </option>
						</select>

					</div>
					<div>

					  <p>Secondes</p>

					</div>

				  </div>
			 </div>
			  <p id='compteur_clique'>0</p>
			  <div>
			  	<a href='#' id='compt'>Recommencer</a>
			  	<input type='submit' id='like' value='Clic !'/>
			  </div>
			</div>";
	wp_enqueue_script( 'my-js', plugin_dir_url('plugin_compteur_de_clic-master') . 'plugin_compteur_de_clic-master/js/compteur.js', array("jquery"),NULL, true );
	wp_enqueue_style( 'my-css', plugin_dir_url('plugin_compteur_de_clic-master') . 'plugin_compteur_de_clic-master/css/compteur.css');
} 
	add_action('the_content', 'compteur_de_clic') ;

