<?php
/*
Plugin Name: _ANDYP - Page Builder - Video Rotator
Plugin URI: http://londonparkour.com
Description: <em>Page Builder - Video Rotator</em>
Version: 1.0
Author: Andy Pearson
Author URI: http://londonparkour.com
*/

define( 'ANDYP_ROTATOR_PATH', __DIR__ );
define( 'ANDYP_ROTATOR_URL', plugins_url( '/', __FILE__ ) );
    
//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                    Register with ANDYP Plugins                          │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/andyp_plugin_register.php';

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                         Use composer autoloader                         │
// └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/vendor/autoload.php';

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                        	   Initialise    		                     │
// └─────────────────────────────────────────────────────────────────────────┘
new andyp\pagebuilder\rotator\initialise;
