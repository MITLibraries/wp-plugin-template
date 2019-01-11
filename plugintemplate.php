<?php
/**
 * Plugin Name: Plugin Template
 * Plugin URI: https://github.com/MITLibraries/wp-plugin-template
 * Description: This is a sample plugin
 * Version: 1.0.0
 * Author: Matt Bernhardt
 * Author URI: https://github.com/matt-bernhardt
 * License: GPLv2
 *
 * @package Plugin Template
 * @author Matt Bernhardt
 * @link https://github.com/MITLibraries/wp-plugin-template
 */

/**
 * Plugin Template is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * Plugin Template is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Plugin Template. If not, see https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html.
 */

// Don't call the file directly!
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Defines base widget.
 */
class Plugin_Template extends WP_Widget {

	/**
	 * Constructor
	 */
	function __construct() {
		$widget_ops = array(
			'classname' => 'plugin-template-widget',
			'description' => __( 'Template class for plugin','plugintemplate' ),
		);
		parent::__construct( 'plugin-template', __( 'Base Widget Template','plugintemplate' ), $widget_ops );
	}

	/**
	 * Widget() builds the output
	 *
	 * @param array $args See WP_Widget in Developer documentation.
	 * @param array $instance See WP_Widget in Developer documentation.
	 * @link https://developer.wordpress.org/reference/classes/wp_widget/
	 */
	function widget( $args, $instance ) {
		$args = null;
		$instance = null;
		echo '<p>This is my widget.</p>';
	}
}

/**
 * Registers base widget.
 */
function register_template_widget() {
	register_widget( 'Plugin_Template' );
}
add_action( 'widgets_init', 'register_template_widget' );

/**
 * Stretch goal: This defines an extended widget, which overrides specific
 * methods of the base class. This is the heart of the "child plugin"
 * concept.
 */
class Plugin_Template_Extension extends Plugin_Template {

	/**
	 * Widget() builds the output.
	 *
	 * @param array $args no idea.
	 * @param array $instance no idea.
	 */
	function widget( $args, $instance ) {
		$args = null;
		$instance = null;
		echo '<p>This is my <em>extended</em> widget.</p>';
	}
}

/**
 * Registers extended widget.
 */
function register_extended_widget() {
	register_widget( 'Plugin_Template_Extension' );
}
add_action( 'widgets_init', 'register_extended_widget' );

?>
