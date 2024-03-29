<?php
/** 
 *Plugin Name: New Plugin
 *Description: This Is php plugin  
 *Author: Nadeesha Pathiraja
**/

//add custom page
function DBP_add_front_page(){
    // include file
    include_once("DBP_insert_form.php");
    DBP_insert_data();
}

define('DBP_dir',dirname(__FILE__));
define('DBP_url',plugins_url('',__FILE__));



add_action('admin_menu','function1');

function function1(){

    add_menu_page(
        'page_title',//page title
        'Manage Database',//menu title
        'manage_options',//capability
        'DBP_custom_plugin_page',//menu slug
        'DBP_add_front_page'
       
    );
}

//define path
if(!defined('ABSPATH')){
    define('ABSPATH',dirname(__FILE__) . '/');
}

//include database file
include_once("DBP_db_file.php");

//register hook
register_activation_hook(__FILE__,'DBP_tb_create');
?>