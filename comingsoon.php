
<?php
/**
 * @package En maintenance
 */
/*
Plugin Name: Cooming Soon
Plugin URI: plugin URL
Description: Montre une page de maintenance avec un compteur à tout les utilisateurs sauf à l'administrateur
Version: 1.0
Author: BERNARD Damien
Author URI: author's url
License: GPL2

*/

//Assure la sécurité
if (!defined('ABSPATH')) {
    die;
  }
//les points d'accroche

add_action( 'wp_loaded', 'comming_soon');



function comming_soon() {
    global $pagenow;
    if ($pagenow !== 'wp-login.php' && !current_user_can('manage_options') && !is_admin()) {

        header($_SERVER["SERVER PROTOCOL"]. '503 Service momentanément indispobible', true, 503);
        header('Content-type: text/html; charset=utf-8');

        if( file_exists( plugin_dir_path( __FILE__) . 'interface/comingsoon.php' ) ) {
            require_once( plugin_dir_path( __FILE__) . 'interface/comingsoon.php');
        }
        die();
    }
}