<?php

define("SS_PlUGIN_DIR", plugin_dir_path(__FILE__));
define("SS_PlUGIN_URL", plugin_dir_url( __FILE__ ));
define("SS_PlUGIN_SLUG", preg_replace( '/[^\da-zA-Z]/i', '_',  basename(SS_PlUGIN_DIR)));
define("SS_PlUGIN_TEXTDOMAIN", str_replace( '_', '-', SS_PlUGIN_SLUG ));
define("SS_PlUGIN_OPTION_VERSION", SS_PlUGIN_SLUG.'_version');
define("SS_PlUGIN_OPTION_NAME", SS_PlUGIN_SLUG.'_options');
define("SS_PlUGIN_AJAX_URL", admin_url('admin-ajax.php'));

if ( ! function_exists( 'get_plugins' ) ) {
    require_once ABSPATH . 'wp-admin/includes/plugin.php';
}
$TPOPlUGINs = get_plugin_data(SS_PlUGIN_DIR.'/'.basename(SS_PlUGIN_DIR).'.php', false, false);

define("SS_PlUGIN_VERSION", $TPOPlUGINs['Version']);
define("SS_PlUGIN_NAME", $TPOPlUGINs['Name']);

//define("SS_PlUGIN_DIR_LOCALIZATION", plugin_basename(SS_PlUGIN_DIR.'/languages/'));
define("SS_PlUGIN_DIR_LOCALIZATION", dirname( plugin_basename( __FILE__ ) ).'/languages/');



