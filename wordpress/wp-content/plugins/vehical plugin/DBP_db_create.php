<?php

    function DBP_tb_create_vehical(){
        global $wpdb;

        $DBP_tb_name=$wpdb->prefix."vehical_infomation";

        $DBP_query=" CREATE TABLE $DBP_tb_name(
            id int (10) NOT NULL AUTO_INCREMENT,
            imagefile varchar(100) DEFAULT '',
            price varchar(100) DEFAULT '',
            pasengers varchar(100) DEFAULT '',
            suitcases varchar(100) DEFAULT '',
            PRIMARY KEY (id)
        )";
        require_once(ABSPATH."wp-admin/includes/upgrade.php");
        dbDelta($DBP_query);
    }
?>