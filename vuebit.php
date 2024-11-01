<?php
/*
Plugin Name: Vuebit
Plugin URI:  https://vuebit.com
Description: Adds one line of code in the head section of a page in order to load the vuebit.js script
Version:     1.0.1
Author:      info@vuebit.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

defined( 'ABSPATH' ) or die( 'Nope, not accessing this' );


function embed_vuebit_script() {
        wp_register_script('vuebitjs', 'https://vuebit.com/vuebit.js');
        wp_enqueue_script('vuebitjs');
}



add_action('wp_enqueue_scripts', 'embed_vuebit_script');