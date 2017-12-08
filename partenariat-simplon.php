<?php
/*
Plugin Name: Simplon
Plugin URI: https://github.com/Gosuhan/partenariat-simplon/edit/master/partenariat-simplon.php
Description: Un plugin d'introduction pour le développement sous WordPress
Version: 1.0
Author: Gosuhan
Author URI: https://github.com/Gosuhan
License: LPS2
*/

function SimplonShortcode() {
	return '<p>La publication de cet article est possible grâce à mon super partenaire <a href="https://simplon.co/">simplon.co</a> - une entreprise de
    l’économie sociale et solidaire et un réseau de « fabriques » (écoles) qui propose
    des formations GRATUITES pour devenir développeur web.</p>';
}
add_shortcode('Simplon', 'SimplonShortcode');
?>
