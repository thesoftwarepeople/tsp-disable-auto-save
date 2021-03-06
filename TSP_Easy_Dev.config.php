<?php									
/* @group Easy Dev Package settings, all plugins use the same settings, DO NOT EDIT */
if ( !defined( 'TSP_PARENT_NAME' )) define('TSP_PARENT_NAME', 			'tsp_plugins');
if ( !defined( 'TSP_PARENT_TITLE' )) define('TSP_PARENT_TITLE', 		'LAPDI Plugins');
if ( !defined( 'TSP_PARENT_MENU_POS' )) define('TSP_PARENT_MENU_POS', 	2617638.180);
/* @end */

/**
* Every plugin that uses Easy Dev must define the DS variable that sets the path deliminter
*
* @var string
*/
if (!defined('DS')) {
    if (strpos(php_uname('s') , 'Win') !== false) define('DS', '\\');
    else define('DS', '/');
}//endif

$easy_dev_settings = get_plugin_data( TSPDAS_PLUGIN_FILE, false, false );
$easy_dev_settings['parent_name']		= TSP_PARENT_NAME;
$easy_dev_settings['parent_title']		= TSP_PARENT_TITLE;
$easy_dev_settings['menu_pos'] 			= TSP_PARENT_MENU_POS;

$easy_dev_settings['name'] 				= TSPDAS_PLUGIN_NAME;
$easy_dev_settings['title'] 			= TSPDAS_PLUGIN_TITLE;
$easy_dev_settings['file']	 			= TSPDAS_PLUGIN_FILE;
$easy_dev_settings['base_name']	 		= TSPDAS_PLUGIN_BASE_NAME;

$easy_dev_settings['smarty_template_dirs']	= array( TSPDAS_PLUGIN_PATH . 'templates', TSP_EASY_DEV_ASSETS_TEMPLATES_PATH );
$easy_dev_settings['smarty_compiled_dir']  	= TSP_EASY_DEV_TMP_PATH . TSPDAS_PLUGIN_NAME . DS . 'compiled';
$easy_dev_settings['smarty_cache_dir'] 		= TSP_EASY_DEV_TMP_PATH . TSPDAS_PLUGIN_NAME . DS . 'cache';

$easy_dev_settings['plugin_options']	= array(
    'category_fields'			=> array(),
    'post_fields'				=> array(),
    'widget_fields'				=> array(),
    'settings_fields'			=> array(),
);

$easy_dev_settings['plugin_options']['shortcode_fields'] = $easy_dev_settings['plugin_options']['widget_fields'];
$easy_dev_settings['required_plugins']	     = array(
    'tsp-easy-dev' => array(
        'title'     => 'LAPDI Easy Dev',
        'version'   => '2.0.0',
        'operator'  => '>='
    )
);
$easy_dev_settings['incompatible_plugins']	 = array();
$easy_dev_settings['automations']	         = array();
$easy_dev_settings['endpoints']	             = array();