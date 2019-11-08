<?php
/** 
 *Plugin Name: Vehicle Store Plugin
 *Description: This is php plugin for vehicle  
 *Author: Nadeesha Pathiraja
**/

//add custom page
function DBP_add_front_page1(){
    // include file
    include_once("DBP_insert_form.php");
    DBP_insert_vehicle_data();
}
function DBP_add_front_page2(){
    // include file
    include_once("DBP_display_data.php");
    
}

define('DBP_dir',dirname(__FILE__));
define('DBP_url',plugins_url('',__FILE__));



add_action('admin_menu','myFirstfunction');

function myFirstfunction(){

    add_menu_page(
        'page_title',//page title
        'Manage Vehicle',//menu title
        'manage_options',//capability
        'DBP_custom_plugin_page',//menu slug
        'DBP_add_front_page1'
       
    );
}

//define path
if(!defined('ABSPATH')){
    define('ABSPATH',dirname(__FILE__) . '/');
}

//include database file
include_once("DBP_db_create.php");

//register hook
register_activation_hook(__FILE__,'DBP_tb_create_vehical');
?>