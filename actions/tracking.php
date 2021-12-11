<?php
require(dirname(__FILE__)).'/../controllers/user_controller.php';

if(isset($_POST['submit'])){

    $pname= $_POST['pname'];
    $description= $_POST['description'];
    $location= $_POST['location'];
    $type= $_POST['itype'];
    $investor= $_POST['investor'];
    $company= $_POST['cname'];
    $contact= $_POST['num'];

    echo $pname." ".$description." ".$location." ".$type." ".$investor." ".$company." ".$contact;

    // image

    $target_dir = "../images/track/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $imgFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    if (empty($_FILES["image"]["name"])) {
        echo "Must insert an Image";
    } else {
        $img_size = getimagesize($_FILES["image"]["tmp_name"]);
        if ($img_size == false) {
            echo "The file is not a valid image";
        }
        if ($_FILES["image"]["size"] > 5000000000) {
            echo "Image file is too large";
        }
        if ($imgFileType != "jpg" && $imgFileType != "png" && $imgFileType != "jpeg" && $imgFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }

        $image_upload = move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        if ($image_upload) {
            $addProject = track_project_controller($pname, $description, $target_file, $investor, $type, $company, $location, $contact);
            if ($addProject) {
                echo "<script type='text/javascript'> alert('Successfully added Project');
                window.history.back();
                </script>";
            } else {
                echo "<script type='text/javascript'> alert('Failed to insert');              
                window.history.back();
                </script>";
            }
        } else {
            echo "<script type='text/javascript'> alert('Upload Failed');              
            window.history.back();
            </script>";
        }
    }
}
?>