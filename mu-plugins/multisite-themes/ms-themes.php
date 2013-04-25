<?php
/*
Plugin Name: Multisite Themes
Plugin URI: http://playforward.net/multisite-themes.html
Description: Adds the ability to have different themes for different networks in a multisite atmoshpere.
Author: Dustin Dempsey
Version: 1.3
Author URI: http://playforward.net/
*/

/* 

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License (Version 2 - GPLv2) as published by
the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

//------------------------------------------------------------------------//
//---Hook-----------------------------------------------------------------//
//------------------------------------------------------------------------//

add_action("plugins_loaded", "multisite_themes");

//------------------------------------------------------------------------//
//---Functions------------------------------------------------------------//
//------------------------------------------------------------------------//


function multisite_themes() {

	// get current site information
	global $current_site;

	// define multisite themes directory
	$ms_themes = "ms-themes";

	// add to wp-content directory
	$dir = WP_CONTENT_DIR . "/" . $ms_themes;

	// define index.php locations
	$filename = $dir . "/index.php";
	$filenamesite = $dir . "/" . $current_site->id . "/index.php";

	// text for ms-themes index.php
	$filetext = "<?php \n // Created using the Multisite Themes WordPress plugin \n ?>";

	// get date and define text for site specific index.php with redirect
	$date = date('l jS \of F Y h:i:s A');
	$filetextsite = "<?php \n // Created: $date \n header('Location: http://$current_site->domain'); \n ?>";

	// check if directory exists and create it if it does not
	// add index.php file to the directory so it cannot be indexed
	if ( ! is_dir($dir) ) {
		mkdir($dir);
		file_put_contents($filename, $filetext);
	} elseif (!file_exists($filename)) {
		file_put_contents($filename, $filetext);
	}

	// register theme directory for current site
	register_theme_directory($dir . '/' . $current_site->id);

	// create index.php in site folder for redirect and to prevent directory from being indexed
	if ( is_dir($dir . '/' . $current_site->id) && !file_exists($filenamesite) ) {
		file_put_contents($filenamesite, $filetextsite);
	}
}

?>