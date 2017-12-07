<?php
/*
Plugin Name: Simplon
Plugin URI: https://simplon.co/
Description: Un plugin d'introduction pour le développement sous WordPress
Version: 0.1
Author: Midnight Falcon
Author URI: http://f0934b588e4940988af29ea7620a04e6.yatu.ws/
License: GPL2
*/

function SimplonShortcode() {
	return '<p>La publication de cet article est possible grâce à mon super partenaire <a href="https://simplon.co/">simplon.co</a> - une entreprise de
    l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
    des formations GRATUITES pour devenir développeur web.</p>';
}
add_shortcode('Simplon', 'SimplonShortcode');
?>
