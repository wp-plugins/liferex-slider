<?php

/**
 * Plugin Name:       Liferex Slider
 * Plugin URI:        http://wordpress.org/plugins/liferex slider/
 * Description:       A WordPress plugin wonderful image slider which help you to display image  into your theme.
 * Version:           1.0
 * Author:            Md. Kamruzzman, Nadia Afrin, Abdur Rahim
 * Author URI:        http://smkjiboncse2nd89@gmail.com
 * Text Domain:       liferex-slider
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-nivo-image-slider-activator.php
 */
function activate_nivo_image_slider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/Nivo_Image_Slider_Activator.php';
	Nivo_Image_Slider_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-nivo-image-slider-deactivator.php
 */
function deactivate_nivo_image_slider() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/Nivo_Image_Slider_Deactivator.php';
	Nivo_Image_Slider_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_nivo_image_slider' );
register_deactivation_hook( __FILE__, 'deactivate_nivo_image_slider' );

/**
 * The core plugin class that is used to define internationalization,
 * dashboard-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/Nivo_Image_Slider.php';


function run_nivo_image_slider() {

	$plugin = new Nivo_Image_Slider();
	$plugin->run();

}
run_nivo_image_slider();
