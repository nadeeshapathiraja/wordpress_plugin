<?php

?>

    <div class="container">
            <form method="post" name="form" action="" enctype="multipart/form-data">

                    <div class="form-group">
                        <h1>Add Vehical Details</h1>
                    </div>

                    <div class="form-group">
                        <label>Image:</label>
                        <input name="imagefile" type="file" placeholder="Browse" class="form-control">
                    </div>

                    <div class="form-group">
                        <label> Price:</label>
                        <input name="price" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Max Pasengers:</label>
                        <input name="pasengers" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Max Suitcases:</label>
                        <input name="suitcases" type="text" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <input name="submit" type="submit" value="Submit" >
                    </div>
            
                <!-- <script>history.pushState({}, "", "")</script> -->

            </form>
    </div>

<?php
function DBP_insert_vehicle_data(){

    $DBP_imagefile = $_FILES['imagefile']['name'];
    $DBP_price=$_POST['price'];
    $DBP_pasengers=$_POST['pasengers'];
    $DBP_suitcases=$_POST['suitcases'];

    //echo $DBP_imagefile."<br/>";

    // echo $DBP_price."<br/>";
    // echo $DBP_pasengers."<br/>";
    // echo $DBP_suitcases."<br/>";

    if(isset($_POST['submit'])){
        
        global $wpdb;
        $table_name= $wpdb->prefix.'vehical_infomation';
        $path_array = wp_upload_dir(); // normal format start
        $file_name   =   pathinfo($DBP_imagefile ,PATHINFO_FILENAME).time().".".pathinfo($DBP_imagefile ,PATHINFO_EXTENSION);  
        $imgtype     =   strtolower(pathinfo($DBP_imagefile,PATHINFO_EXTENSION));                
        $targetpath =  $path_array["images/"].$file_name;

        move_uploaded_file($_FILES["imgfile"]["tmp_name"], $targetpath );


        $wpdb->insert($table_name,
                    array(
                        'imagefile'=>$DBP_imagefile,
                        'price'=>$DBP_price,
                        'pasengers'=>$DBP_pasengers,
                        'suitcases'=>$DBP_suitcases
                    ),
                    array(
                        '%s',//'%s' using for string format
                        '%s',
                        '%s',
                        '%s',
                    )
        
        );
        return "Data inserted";
    }
}
?>