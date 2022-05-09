<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Register</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body style="background-image: url(assets/img/counts-bg.png);">
    <div class="page-wrapper p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-body">
                    <div style="text-align: center; color: white; margin-bottom: 20px;">
                        <h3 class="text-center">Welcome</h3><br>
                        <p class="text-center" style="color: white;">Access your sim information by entering the information below</p>
                    </div>
                    <?php
                        include "connect.php";
//if all values are correctly set in the form, fetch them and store them in the variables
                        if(isset($_POST["register"])){
                            $fname=$_POST["fname"];
                            $lname=$_POST["lname"];
                            $email=$_POST["email"];
                            $phone=$_POST["phone"];                          
                            $pwd=$_POST["pwd"];
                            $cpwd=$_POST["cpwd"];
                            
                            if($pwd!=$cpwd){
                                echo"<p style='color:red;'>";
                                echo"password missmatch";
                                echo"</p>";
                            }else{
                                $sql="SELECT * FROM `users` WHERE 'email'='$email'";
                                $results=mysqli_query($conn,$sql);
                                $row=mysqli_fetch_array($results);
                                if($row["email"]==$email){
                                    echo"<p style='color:red;'>";
                                    echo"email already exist!!";
                                    echo"</p>";
                                }else{
                                    $pwd=md5($pwd);
                                    $sql2="INSERT INTO `users`(`fname`, `lname`, `email`, `phone`,`pwd`) 
                                    VALUES ('$fname','$lname','$email','$phone','$pwd')";
                                  
                                    $result=mysqli_query($conn,$sql2);
                                    if($result){
                                        echo"<p style='color:green;'>";
                                    echo"registered successfully";
                                    echo"</p>";
                                    }else{
                                        echo"Oops! something went wrong";
                                    }
                                }
                            }
                        }
                        

                        ?>
                    <form action="register.php" method="POST" >
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="First Name" name="fname" style="border-bottom:1px solid white; ">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Last Name" name="lname" style="border-bottom:1px solid white; ">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email" style="border-bottom:1px solid white; ">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="text" placeholder="Phone" name="phone" style="border-bottom:1px solid white; ">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="pwd" style="border-bottom:1px solid white; ">
                        </div>
                        <div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Confirm Password" name="cpwd" style="border-bottom:1px solid white; ">
                        </div>

                        <div class="p-t-10">
                            <button id="btn" class="btn" name="register" type="submit">Register</button>

                        </div>
                        <div style="color: white; margin-top: 15px;">
                            Already have an account?... <a href="login.html" style="text-decoration-line: none;"><span style="color: orange;">Login</span></a>
                            <a href="home.html">
                                <i class="fa fa-home fa-2x" aria-hidden="true" style="float: right; color: white;"></i>
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>
<style>
    #btn {
        background-color: transparent;
        color: white;
        border: 2px solid white;
        border-radius: 6px;
        width: 100%;
    }
    
    #btn:hover {
        background-color: white;
        color: blue;
    }
</style>

</html>
<!-- end document-->