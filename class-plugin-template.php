<?php
/**
 * Class that defines the template widget.
 *
 * @package Plugin template
 * @since 1.1
 */

namespace mitlib;

/**
 * Defines base widget.
 */
class Plugin_Template extends \WP_Widget {

	/**
	 * Constructor
	 */
	public function __construct() {
		$widget_ops = array(
			'classname' => 'plugin-template-widget',
			'description' => __( 'Template class for plugin', 'plugintemplate' ),
		);
		parent::__construct( 'plugin-template', __( 'Base Widget Template', 'plugintemplate' ), $widget_ops );
	}

	/**
	 * Widget() builds the output
	 *
	 * @param array $args See WP_Widget in Developer documentation.
	 * @param array $instance See WP_Widget in Developer documentation.
	 * @link https://developer.wordpress.org/reference/classes/wp_widget/
	 */
	public function widget( $args, $instance ) {
		$args = null;
		$instance = null;
		echo '<p>This is my widget.</p>';
	}
}
