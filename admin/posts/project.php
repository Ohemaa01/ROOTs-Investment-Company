<?php
session_start();
require(dirname(__FILE__)).'/../../controllers/user_controller.php';

if(isset($_SESSION['id']) && isset($_SESSION['role'])){
    if($_SESSION['role'] == 1){
        $all_users = select_track_project_controller();
        $img = '../../images/track/';

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
    <title>Admin Section- Manage Projects</title>
    <!-- linking css file to html code -->
    <link rel="stylesheet" href="../../views/css/style.css"> 
    <link rel="stylesheet" href="../posts/admin.css"> 
     
</head>
<body id="pbody">
    <header class= "header admin">
        <nav class= "navbar navbar-style top">
            <div class= "container">
                <div class= "navbar-header">
                    <!-- adding logo to nav bar -->
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
                    <li><a href="#">Manage Projects</a></li>
                    <li><a href="#" onclick="document.location.href='../posts/add_project.php'">Add Project</a></li>
                    <li><a href="#" onclick="document.location.href='../posts/add_investment.php'">Add Investment</a></li>
                    <li><a href="#" onclick="document.location.href='../posts/add_company.php'">Add Comapny</a></li>
                    <li><a href="#" onclick="document.location.href='../posts/trackproject.php'">Track Project</a></li>
                    
                </ul>

                
            </div>
            <!-- admin content -->
            <div class="admin-content">
                    <h2 class="page-title">Manage Projects</h2>
                    <table>
                        <!-- creating the table head -->
                        <thead>
                            <th>Project name</th>
                            <th>Description</th>
                            <th>Images</th>
                            <th>Investor</th>
                            <th>Investment Type</th>
                            <th>Company name</th>
                            <th>Location</th>
                            <th>Number</th>
                            <th colspan="2">Action</th>
                        </thead>
                        <!-- creating the table body -->
                        <tbody>
                            <!-- table row -->
                            <?php 
                            foreach($all_users as $user){
                                ?>
                                <tr>
                                <!-- data for the table -->
                                    <td><?php echo $user['project_name']  ?></td>
                                    <td><?php echo $user['description']  ?></td>
                                    <td><img src="<?php echo $img . basename($user['image']);  ?>" alt="" width="50"></td>
                                    <td><?php echo $user['investor']  ?></td>
                                    <td><?php echo $user['investment_type']  ?></td>
                                    <td><?php echo $user['company_name']  ?></td>
                                    <td><?php echo $user['location']  ?></td>
                                    <td><?php echo $user['number']  ?></td>
                                    <td><a href="./editTrack.php?t_id=<?php echo $user['t_id']?>" class="edit">Edit</a></td>
                                    <td><a href="../../actions/updateTrack.php?del_id=<?php echo $user['t_id']?>" class="delete">Delete</a></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                        

                    </table>

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
