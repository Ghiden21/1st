<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */
define('WP_SITEURL', 'http://Ghiden.io/' . $_SERVER['SERVER_NAME'] . '/wordpress');
define('WP_HOME',    'http://Ghiden.io/index.php' . $_SERVER['SERVER_NAME']);
/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require('./wordpress/wp-blog-header.php');
?>
