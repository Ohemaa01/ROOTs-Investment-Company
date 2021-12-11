<?php

session_start();

require(dirname(__FILE__)).'/../controllers/user_controller.php';

//check if the submit button is clicked
if(isset($_POST["submit"])){

    // Post records
    $company= $_POST['company'];
    $location= $_POST['location'];
    $number= $_POST['number'];

    $result = user_admin_company_controller($company, $location, $number);

    if($result){
        echo "<script type='text/javascript'> alert('Successfully added company');
                window.history.back();
                </script>";
    }
    else{
        echo "<script type='text/javascript'> alert('Successfully added company');
                window.history.back();
                </script>";
    }
    
}