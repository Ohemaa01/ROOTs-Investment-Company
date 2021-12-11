<?php

session_start();

require(dirname(__FILE__)).'/../controllers/user_controller.php';

//check if the submit button is clicked
if(isset($_POST["submit"])){

    // Post records
    $investor= $_POST['investor'];
    $itype= $_POST['itype'];
    

    $result = user_admin_investments_controller($investor, $itype);

    if($result){
        echo "<script type='text/javascript'> alert('Successfully added Investment');
                window.history.back();
                </script>";
    }else{
        echo "<script type='text/javascript'> alert('Insertion failed');
                window.history.back();
                </script>";
    }
}