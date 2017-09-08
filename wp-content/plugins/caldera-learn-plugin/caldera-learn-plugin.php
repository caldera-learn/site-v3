<?php
/*
  Plugin Name: Caldera Learn
  Plugin URI: https://calderalearn.com
  Description: Plugin for extra functionality for Caldera Learn v3
  Author: Caldera Labs
  Version: 3.0.0
  Author URI: http://CalderaLabs.org
  Text Domain: caldera-learn
 */

define( 'CL_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'CL_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
require 'classes/autoloader.php';

// EDD SLUG
define('EDD_SLUG', 'caldera-learn-courses');

// Setup Teachers CPT
$CalderaLearnTeachers = CalderaLearn\Content\Teachers::instance();