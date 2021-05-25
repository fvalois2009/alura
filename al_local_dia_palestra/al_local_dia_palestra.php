<?php
/*
 * Plugin Name: Cadastar Local e data da palestra
 * Description: Plugin para cadastrar Local e data da próxima palestra realizada pela Alura
 * Version: 1.0.0
 * Author: Felix Valois
 */

if(!defined('ABSPATH')){

    die;
}

load_plugin_textdomain(
    'al_local_dia_palestra',
    false,
    plugin_rel_path: basename(dirname(__FILE__)).'/languages'
);

require_once plugin_dir_path(__FILE__) .'/includes/al_local_dia_palestra_settings.php';
require_once plugin_dir_path(__FILE__) .'/includes/al_local__dia_palestra_shortcode.php';
require_once plugin_dir_path(__FILE__) .'/includes/al_local_dia_palestra_scripts.php';

