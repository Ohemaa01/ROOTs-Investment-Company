<?php
session_start();
require(dirname(__FILE__)).'/../../controllers/user_controller.php';

if(isset($_SESSION['id']) && isset($_SESSION['role'])){
    if($_SESSION['role'] == 1){

        $all_users = select_all_users_controller();
        $allprojects = select_projects_controller();
        $allcompany = select_company_controller();
        $allinvest = select_investments_controller();


        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Amin Page- Track Investments</title>
    <!-- linking css file to html code -->
    <link rel="stylesheet" href="../../views/css/style.css"> 
    <link rel="stylesheet" href="../posts/admin.css"> 
     
</head>
<body id="pbody">
    <header class= "header admin">
        <nav class= "navbar navbar-style top">
            <div class= "container">
                <div class= "navbar-header">

                    <a href= ""><img class= "logo" src="../../views/unika/unika-html/img/pngwing.com (41).png"></a>
                </div>
                
                <ul class= "nav navbar-nav navbar-right">
                                
                    <li><a href="../../actions/logout.php" class="logout">Logout</a></li>
                                
                </ul>
                    
                
            </div>


        </nav>
    </header>
        
       <!-- admin page admin-wrapper -->
        <div class="admin-wrapper">
            <!-- left side bar -->
            <div class="left-sidebar">
                <h3 class="dashboard">Dashboard</h3>
                <ul>
                    <li><a href="#" onclick="document.location.href='../posts/adminpage.php'">Manage Investments</a></li>
                    <li><a href="#" onclick="document.location.href='../posts/users.php'">Manage Users</a></li>
                    <li><a href="#" onclick="document.location.href='../posts/project.php'">Manage Projects</a></li>
                    <li><a href="#" onclick="document.location.href='../posts/add_project.php'">Add Project</a></li>
                    <li><a href="#" onclick="document.location.href='../posts/add_investment.php'">Add Investment</a></li>
                    <li><a href="#" onclick="document.location.href='../posts/add_company.php'">Add Comapny</a></li>
                    <li><a href="#">Admin page-Track Project</a></li>
                </ul>

                
            </div>
            <!-- admin content -->
            <div class="admin-content">
                    <h2 class="page-title">Track projects</h2>
                    <form action="../../actions/tracking.php" method="POST" enctype="multipart/form-data">
                        <div class="form-control">
                            <label for="">Project Name</label>
                            <input type="text" name="pname">
                        </div>
                        
                        <div class="form-control">
                            <label for="">Description</label> 
                            <input type="text" name="description">
                         
                        </div>

                        <div class="form-control">
                            <label for="">Image</label>
                            <input type="file" name="image" id="">
                        </div>

                        <div class="form-control">
                            <label for="">Investor</label>
                            <input type="text" name="investor">
                        </div>

                        <div class="form-control">
                            <label for="">Investment Type</label>
                            <input type="text" name="itype">
                        </div>

                        <div class="form-control">
                            <label for="">Company Name</label>
                            <input type="text" name="cname">
                        </div>
                        <div class="form-control">
                            <label for="">Location</label>
                            <input type="text" name="location">
                        </div>
                        <div class="form-control">
                            <label for="">Number</label>
                            <input type="text" name="num">
                        </div>

                        <button type="submit" name="submit">Submit</button>
                    </form>

            </div>

        </div>
       
    
</body>
</html>
<?php
    }
    else{
        echo "
        <script>
        alert('Admin not logged in');
        
        </script>
        ";
        header('location: ../../views/login:signup.html');
    }
}
else{
    echo "
    <script>alert('Admin not logged in');</script>
    
    ";
    header('location: ../../views/login:signup.html');
}
