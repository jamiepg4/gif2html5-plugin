<?php
/**
 * Plugin Name: Gif2html5
 * Version: v0.1-alpha
 * Description: Convert animated gifs to mp4s.
 * Author: Fusion Engineering and community
 * Author URI: http://next.fusion.net/tag/gif2html5/
 * Text Domain: gif2html5
 * License: GPL v2 or later
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 */

define( 'GIF2HTML5_VERSION', '0.1-alpha' );

require_once dirname( __FILE__ ) . '/inc/class-gif2html5.php';

add_action( 'init', function() {
	$gif2html5 = Gif2Html5::get_instance();
} );
