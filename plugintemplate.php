<?php
/**
 * Plugin Name: Plugin Template
 * Plugin URI: https://github.com/MITLibraries/wp-plugin-template
 * Description: This is a sample plugin
 * Version: 1.1
 * Author: Matt Bernhardt
 * Author URI: https://github.com/matt-bernhardt
 * License: GPL2
 *
 * @package Plugin Template
 * @author Matt Bernhardt
 * @link https://github.com/MITLibraries/wp-plugin-template
 */

/**
 * {Plugin Name} is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * {Plugin Name} is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with {Plugin Name}. If not, see {URI to Plugin License}.
 */

namespace mitlib;

// Don't call the file directly!
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Include the necessary classes.
include_once( 'class-plugin-template.php' );
include_once( 'class-plugin-template-extension.php' );

/**
 * Registers template widgets.
 */
function register_template_widget() {
	register_widget( 'mitlib\Plugin_Template' );
	register_widget( 'mitlib\Plugin_Template_Extension' );
}
add_action( 'widgets_init', 'mitlib\register_template_widget' );
