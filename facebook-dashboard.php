<?php
/*
Plugin Name: Facebook Dashboard Widget
Plugin URI: http://www.jumping-duck.com/wordpress/
Description: Adds a widget to the WordPress dashboard that lets you view and interact with Facebook.
Version: 1.0.1
Author: Eric Mann
Author URI: http://www.eamann.com
*/

/*  Copyright 2010  ERIC MANN  (email : eric@eamann.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; version 2 of the License.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

/*  This plug-in embeds the Facebook for iGoogle gadget originally published by Google
	into your WordPress dashboard.  Facebook, Google, and iGoogle are trademarks of their
	respective organizations.
*/

/* Define Variables */
if( ! defined( 'FD_BASE' ))
	define( 'FD_BASE' , dirname(__FILE__) );
if( ! defined( 'FD_DIRECTORY' ))
	define( 'FD_DIRECTORY' , get_option('siteurl') . '/wp-content/plugins/facebook-dashboard' );
if( ! defined( 'FD_INC' ))
	define( 'FD_INC' , FD_DIRECTORY . '/includes' );
if( ! defined( 'FD_BASE_INC' ))
	define( 'FD_BASE_INC', FD_BASE . '/includes' );

/*
 * Sets admin warnings regarding required WordPress versions.
 */
function _fd_wp_warning() {
	$data = get_plugin_data(__FILE__);
	
	echo '<div class="error"><p><strong>' . __('Warning:') . '</strong> '
		. sprintf(__('The active plugin %s is not compatible with your WordPress version.') .'</p><p>',
			'&laquo;' . $data['Name'] . ' ' . $data['Version'] . '&raquo;')
		. sprintf(__('%s is required for this plugin.'), 'WordPress 2.8 ');
	if($reported)
		sprintf('This error has been reported.');
	echo '</p></div>';
}

// START PROCEDURE

// Check required WordPress version.
if ( version_compare(get_bloginfo('version'), '2.8', '<')) {
	add_action('admin_notices', '_fd_wp_warning');
} else {
	include_once ( FD_BASE_INC . '/core.php' );
}

?>