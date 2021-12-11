<?php
session_start();

require(dirname(__FILE__)).'/../controllers/user_controller.php';

if(isset($_POST['submit'])){
    $email= $_POST['email'];
    $password= $_POST['password'];

    $check_login = user_login_controller($email, $password);

    if($check_login){
        // set session
        $_SESSION['id'] = $check_login['r_id'];
        $_SESSION['role'] = $check_login['r_role'];
        if($_SESSION['role'] == 1){
            echo "
            <script>
                alert('Login successful');
                document.location.href='../admin/posts/adminpage.php';
            </script>
            ";
        }
        else{
            echo "
            <script>
                alert('Login successful');
                document.location.href='../views/unika/unika-html/index.php';
            </script>
            ";
        }

    }
    else{
        echo "
        <script>
            alert('Login failed');
            window.history.back();
        </script>
        ";
    }
}