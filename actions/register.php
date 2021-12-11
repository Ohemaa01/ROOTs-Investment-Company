<?php
require(dirname(__FILE__)).'/../controllers/user_controller.php';



if(isset($_POST['submit'])){
    // Post records
    $fullname= $_POST['fullname'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $phone= $_POST['number'];

    $check_email = check_email_controller($email);
    if($check_email){
        echo "
        <script>
            alert('Email already exists');
            window.history.back();
        </script>
    ";
    }else{
         // echo $fullname." ".$email." ".$password." ".$phone;
         $result = add_user_controller($fullname, $email, $password, $phone);

         if($result){
             echo "
                 <script>
                     alert('Registration successful');
                     document.location.href='../views/login:signup.html';
                 </script>
             ";
         }else{
             echo "
             <script>
                 alert('Registration successful');
             </script>
             window.history.back();
         ";
         }
    }
    
 
}


?>