<?php
require(dirname(__FILE__)).'/../controllers/user_controller.php';


if(isset($_GET['deleteid'])){
    $submission_id = $_GET['deleteid'];
    $result = delete_submission_controller($submission_id);

    if($result){
        echo "<script type='text/javascript'> alert('Successfully deleted submission');
                window.history.back();
                </script>";
    }else{
        echo "<script type='text/javascript'> alert('Failed to delete');
        window.history.back();
        </script>";
    }
}
?>