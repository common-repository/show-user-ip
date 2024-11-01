<?php
/**
* Plugin Name: Show user IP
* Plugin URI: https://wordtune.me
* Description: Use the shortcode [ip] on any page ore post to show user ip.
* Author: WordTune
* Author URI: https://wordtune.me
* Version:           1.0
* License:           GPL-2.0+
* License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
**/

function show_user_ip(){

echo esc_attr ('User-IP: '. $_SERVER)['REMOTE_ADDR'];

}
add_shortcode( 'ip', 'show_user_ip' );

?>
