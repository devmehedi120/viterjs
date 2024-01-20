<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://www.fiverr.com/wpdevmehedi
 * @since             1.0.0
 * @package           ViterJs
 *
 * @wordpress-plugin
 * Plugin Name:       Viterjs
 * Plugin URI:        https://https://www.fiverr.com/wpdevmehedi
 * Description:       This is a description of the plugin.
 * Version:           1.0.0
 * Author:            Mehedi Hasan
 * Author URI:        https://https://www.fiverr.com/wpdevmehedi/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       viterjs
 * Domain Path:       /languages
 */

 define('VITERJS_DEV_MOOD', false);

 add_action( "wp_enqueue_scripts", function(){
    if(defined('VITERJS_DEV_MOOD') && VITERJS_DEV_MOOD){
        add_action( "wp_head", function(){
            ?>
            <script type="module" crossorigin src="http://localhost:3000/src/main.js"></script>
            <?php
        } );
    }else{
        wp_enqueue_style( 'viterjs', plugin_dir_url(__FILE__).'dist/assets/main-m0DGwFy9.css', array(), '1.0.0', 'all' );
        wp_enqueue_script( 'viterjs', plugin_dir_url(__FILE__).'dist/assets/main-7kmqk901.js', array('jquery'), '1.0.0', true );
    }
 } );

 add_shortcode("viterjs", function(){
    ob_start();
    ?>
    <div id="viterjsApp"></div>
    <?php
    return ob_get_clean();
 });