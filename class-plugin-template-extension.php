<?php
/**
 * Class that defines the template widget.
 *
 * @package Plugin template
 * @since 1.1
 */

namespace mitlib;

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
	public function widget( $args, $instance ) {
		$args = null;
		$instance = null;
		echo '<p>This is my <em>extended</em> widget.</p>';
	}
}
