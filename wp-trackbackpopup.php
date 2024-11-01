<?php
/*   
Plugin Name: wp-TrackbackPopup
Plugin URI: http://kingdesk.com/projects/wp-trackbackpopup/
Description: From the authors of wp-Typography (http://wordpress.org/extend/plugins/wp-typography/) comes wp-TrackbackPopup. It fixes the default trackback link behavior to act as a user would expect.  Specifically, it links to a page that has the text version of the trackback url that is easily copied by the user.  The popup window may be styled to match your existing theme.
Author: Jeffrey D. King
Author URI: http://kingdesk.com
Version: 1.1.1

	Copyright 2008, Jeffrey D. King. Licensed under the GNU General Public License 2.0. If you use, modify and/or redistribute this software, you must leave the Jeffrey D. King copyright information, the request for a link to http://kingdesk.com, and the web design services contact information unchanged. If you redistribute this software, or any derivative, it must be released under the GNU General Public License 2.0. This program is distributed without warranty (implied or otherwise) of suitability for any particular purpose. See the GNU General Public License for full license terms <http://creativecommons.org/licenses/GPL/2.0/>.

	WE DON'T WANT YOUR MONEY: NO TIPS NECESSARY!  If you enjoy this plugin, a link to http://kingdesk.com from your website would be appreciated.
	
	For web design services, please contact jeff@kingdesk.com.
*/

require_once(WP_PLUGIN_DIR.'/wp-trackbackpopup/class-wpTrackbackPopup.php');
$wptp = new wpTrackbackPopup();