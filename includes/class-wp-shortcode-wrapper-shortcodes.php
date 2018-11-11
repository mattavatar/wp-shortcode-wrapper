<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://www.linkedin.com/in/matt-kirk-b281a1122
 * @since      1.0.0
 *
 * @package    Wp_Shortcode_Wrapper
 * @subpackage Wp_Shortcode_Wrapper/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Wp_Shortcode_Wrapper
 * @subpackage Wp_Shortcode_Wrapper/includes
 * @author     Matt Kirk <vp@myagame.net>
 */
class Wp_Shortcode_Wrapper_Shortcodes {

    /**
     * The loader that's responsible for maintaining and registering all hooks that power
     * the plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      Wp_Shortcode_Wrapper_Loader    $loader    Maintains and registers all hooks for the plugin.
     */
    protected $loader;

    /**
     * The unique identifier of this plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      string    $plugin_name    The string used to uniquely identify this plugin.
     */
    protected $plugin_name;

    /**
     * The current version of the plugin.
     *
     * @since    1.0.0
     * @access   protected
     * @var      string    $version    The current version of the plugin.
     */
    protected $version;

    /**
     * Define the core functionality of the plugin.
     *
     * Set the plugin name and the plugin version that can be used throughout the plugin.
     * Load the dependencies, define the locale, and set the hooks for the admin area and
     * the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function __construct( $plugin_name, $version ) 
    {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    function shortcode_wrapper( $atts, $content = null ) 
    {
        extract( shortcode_atts( array('shortcode' => '', 'filter' => '' ), $atts ) );
        
    }

}
