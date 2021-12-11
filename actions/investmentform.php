<?php

session_start();

require(dirname(__FILE__)).'/../controllers/user_controller.php';

//check if the submit button is clicked
if(isset($_POST["submit"])){

    // Post records
    $name= $_POST['name'];
    $investor= $_POST['investor'];
    $location= $_POST['location'];
    $type= $_POST['type'];
    $project= $_POST['project'];
    $description= $_POST['description'];
    $start= $_POST['start'];
    $end= $_POST['end'];


    // echo $name;
    // echo $investor;
    // echo $location;
    // echo $type;
    // echo $project;
    // echo $description;
    // echo $start;
    // echo $end;

    $check_form = user_form_controller($name, $investor, $location, $type, $project, $description, $start, $end);

    if($check_form){
        echo "
        <script>
            alert('Form succesfully submitted');
            document.location.href='../views/unika/unika-html/index.php';
        </script>
    ";
    }
    else{
        echo "
        <script>
            alert('Something went wrong. Form not submitted');
            window.history.back();
        </script>
    ";
    }

    

}