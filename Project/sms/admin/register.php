<?php
include("config.php");
if (isset($_POST['s1'])=="Insert")
{
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];

    $sql="insert into usermst values($firstname,$lastname,$username,$password,$confirmpassword)";
 $res=mysqli_query($con,$sql);

    if($res==1)
 {
     
     header("Location:login.php");
 }else
    {
        echo "sorry";
    }
}



?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register Form</title>

        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="firstname" class="form-control " 
                                            placeholder="firstname">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="lastname" class="form-control " 
                                            placeholder="lastname">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control " 
                                        placeholder="username">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="password">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="confirmpassword" class="form-control"
                                             placeholder="confirmpassword">
                                    </div>
                                </div>
                                <button type="submit" name="s1" class="btn btn-primary " value="Insert"> Register Account</button>  
                                        
                                
                                   
                                
                                <hr>
                                
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>