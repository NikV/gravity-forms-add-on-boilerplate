<?php
/*
Plugin Name: Gravity Forms Sample Add-On
Plugin URI: http://www.gravityforms.com
Description: A simple add-on to demonstrate the use of the Add-On Framework
Version: 1.0
Author: Rocketgenius
Author URI: http://www.rocketgenius.com
------------------------------------------------------------------------
Copyright 2015 Rocketgenius Inc.

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
*/

// Constant for Version of our Sample Add-on
define('GF_SAMPLE_VERSION', '2.3.7');

// Fire the class when the form is loaded
add_action('gform_loaded', array('GF_Test', 'load'), 5);

/**
 * Class GF_Test is our Bootstrap class, it loads a lot of the important stuff.
 */
class GF_Test {

	public static function load() {
		if( ! method_exists('GFForms', 'include_payment_addon_framework') ) {
			return;
		}

		// Require our class file
		require_once('class.gf-simple-addon.php');

		// Let's register our add-on with Gravity Forms
		GFAddOn::register( 'GFSample' );
	}

}


