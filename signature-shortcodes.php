<?php
/*
Plugin Name: signature-shortcodes
Plugin URI: https://github.com/ZuievRoman/plugin-wp/tree/plugin-01
Description: Plug-in for the signature of articles and publications
Version: 1.0
Author: Roman Zuiev
Author URI: https://ua.linkedin.com/in/roman-zuiev-357268100
Text Domain: signature-shortcodes
Domain Path: /languages/

License: A "Slug" license name e.g. GPL2
    Copyright 2017  Copyright 2017  Roman Zuiev  (email: zuevro@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
require_once plugin_dir_path(__FILE__) . '/config-path.php';
require_once SS_PlUGIN_DIR.'/includes/common/SSAutoload.php';
require_once SS_PlUGIN_DIR.'/includes/SSPlugin.php';

function signatureShortcode() {
    ob_start(); ?>
    <div class="cta">
        <p>Call us on 999-9999 or email <a href="mailto:sales@example.com">zuevro@gmail.com</a></p>
    </div>
    <?php	return ob_get_clean();
}
add_shortcode( 'SS', 'signatureShortcode' );


add_filter( 'the_content', 'signContent' );

function signContent($content){
    if( !is_single() ) return $content;
    $wfm_sign = '<div class="alignright"><em>Подпись к статье, добавленная плагином...</em></div>';
    return $content . $wfm_sign;
}

