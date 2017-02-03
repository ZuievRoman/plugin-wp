<?php
/**
 * Created by PhpStorm.
 * User: Roman
 * Date: 01.02.2017
 * Time: 22:01
 */
function plugin_admin_menu()
{
	add_options_page('shortcodes-api', 'shortcodes-api', 8, basename(__FILE__), 'admin_form');
}