<?php

    function DBP_db_create_ride(){
        global $wpdb;

        $DBP_tb_name=$wpdb->prefix."ride_details";

        $DBP_query=" CREATE TABLE $DBP_tb_name(
            id int (10) NOT NULL AUTO_INCREMENT,
            firstname varchar(100) DEFAULT '',
            lastname varchar(100) DEFAULT '',
            email varchar(100) DEFAULT '',
            phone varchar(100) DEFAULT '',
            dob varchar(100) DEFAULT '',
            passportId varchar(100) DEFAULT '',
            comments varchar(100) DEFAULT '',
            pickupdate varchar(100) DEFAULT '',
            pickuptime varchar(100) DEFAULT '',
            pickUpLocation varchar(100) DEFAULT '',
            dropOffLocation varchar(100) DEFAULT '',
            payment varchar(100) DEFAULT '',
            imagefile varchar(100) DEFAULT '',
            pasengers varchar(100) DEFAULT '',
            suitcases varchar(100) DEFAULT '',
            PRIMARY KEY (id)
        )";

        require_once(ABSPATH."wp-admin/includes/upgrade.php");
        dbDelta($DBP_query);
    }
?>