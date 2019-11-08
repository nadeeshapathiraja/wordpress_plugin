<?php

?>

<div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">

                <form action="" method="post">
                    <h1>Form Insert</h1>

                    Firstname: <input type="text" name="fname" /><br><br>
                    Lastname: <input type="text" name="lname" /><br><br>
                    Age: <input type="text" name="age" /><br><br>

                    <input type="submit" name="save" value="Submit" />
                    
                </form>
            </div>

            <div class="col-md-3"></div>
		</div>
</div>

<?php
function DBP_insert_data(){
    global $wpdb;
    $table_name= $wpdb->prefix.'dbp_tb_login';

    $DBP_fname=$_POST['fname'];
    $DBP_lname=$_POST['lname'];
    $DBP_age=$_POST['age'];


    if(isset($_POST['save'])){
        $wpdb->insert($table_name,
                    array(
                        'fname'=>$DBP_fname,
                        'lname'=>$DBP_lname,
                        'age'=>$DBP_age
                    ),
                    array(
                        '%s',//'%s' using for string format
                        '%s',
                        '%s',
                    )
        
        );
    }
}
?>
