<?php
/**
 * Plugin Name: Custom Post Type Widgets
 * Plugin URI:  https://github.com/thingsym/custom-post-type-widgets
 * Description: This plugin adds default custom post type widgets.
 * Version:     1.2.1
 * Author:      thingsym
 * Author URI:  http://www.thingslabo.com/
 * License:     GPL2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: custom-post-type-widgets
 * Domain Path: /languages/
 *
 * @package         Custom_Post_Type_Widgets
 */

/**
 * Core class Custom_Post_Type_Widgets
 *
 * @since 1.0.0
 */
class Custom_Post_Type_Widgets {

	/**
	 * Sets up a new widget instance.
	 *
	 * @access public
	 *
	 * @since 1.0.0
	 */
	public function __construct() {
		add_action( 'plugins_loaded', array( $this, 'load' ) );
		add_action( 'widgets_init', array( $this, 'init' ) );
		register_uninstall_hook( __FILE__, array( __CLASS__, 'uninstall' ) );
	}

	/**
	 * File loader
	 *
	 * @access public
	 *
	 * @since 1.0.0
	 */
	public function load() {
		$dir = plugin_dir_path( __FILE__ );

		include_once $dir . 'inc/widget-custom-post-type-recent-posts.php';
		include_once $dir . 'inc/widget-custom-post-type-archive.php';
		include_once $dir . 'inc/widget-custom-post-type-categories.php';
		include_once $dir . 'inc/widget-custom-post-type-calendar.php';
		include_once $dir . 'inc/widget-custom-post-type-recent-comments.php';
		include_once $dir . 'inc/widget-custom-post-type-tag-cloud.php';
		include_once $dir . 'inc/widget-custom-post-type-search.php';
	}

	/**
	 * Regist widget
	 *
	 * @access public
	 *
	 * @since 1.0.0
	 */
	public function init() {
		if ( ! is_blog_installed() ) {
			return;
		}

		load_plugin_textdomain(
			'custom-post-type-widgets',
			false,
			'custom-post-type-widgets/languages'
		);

		register_widget( 'WP_Custom_Post_Type_Widgets_Recent_Posts' );
		register_widget( 'WP_Custom_Post_Type_Widgets_Archives' );
		register_widget( 'WP_Custom_Post_Type_Widgets_Categories' );
		register_widget( 'WP_Custom_Post_Type_Widgets_Calendar' );
		register_widget( 'WP_Custom_Post_Type_Widgets_Recent_Comments' );
		register_widget( 'WP_Custom_Post_Type_Widgets_Tag_Cloud' );
		register_widget( 'WP_Custom_Post_Type_Widgets_Search' );
	}

	/**
	 * Uninstall.
	 *
	 * Hooks to uninstall_hook
	 *
	 * @access public static
	 *
	 * @return void
	 *
	 * @since 1.0.0
	 */
	public static function uninstall() {}
}

$custom_post_type_widgets = new Custom_Post_Type_Widgets();
