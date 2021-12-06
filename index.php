<?php

/*
 Plugin Name:  {APP-NAME}
 Plugin URI:   {APP-URI}
 Description:  {APP-DESC}
 Author:       {APP-AUTHOR}
 Author URI:   {APP-AUTHOR-URI}
 Version:      {APP-VERSION}
 License:      GNU General Public License v2
 License URI:  http://www.gnu.org/licenses/gpl-2.0.html
 Text Domain:  {APP-DOMAIN}
 Domain Path:  /app/Resources/languages
*/

// Initialization of application
require plugin_dir_path(__FILE__) . '/bootstrap.php';
new __{APP-CLASS}_Bootstrap(array(
    'name'           => '{APP-NAME}', // Application name
    'slug'           => '{APP-SLUG}', // Application slug
    'mode'           => 'plugin', // Application mode
    'rpv'            => '7.2.5', // Required PHP version
    'rwv'            => '4.9', // Required WordPress version
    'dev'            => (defined('WP_DEBUG') ? WP_DEBUG : false),
    'class'          => '{APP-CLASS}\Application',
    'class-alias'    => '{APP-CLASS-ALIAS}',
    'file-load-path' => false,
    'session'        => false,

    # Debugger
    'debug'          => true,
    'email'          => get_option('admin_email', null),
    'log'            => false,
    'log-severity'   => 0,
    'log-max-files'  => 10,
    'strict-mode'    => true,
    'show-bar'       => true,
    'max-depth'      => 40,
    'max-length'     => 150,
    'editor'         => 'vscode://file/%file:%line',
));

/**
 * Beneath this message you can put your functions.
 */
