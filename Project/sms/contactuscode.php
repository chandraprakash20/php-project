<?php
SESSION_start();
include('admin/config/dbcon.php');

if(isset($_POST['contactus-add']))
{
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $message=mysqli_real_escape_string($con,$_POST['message']);
    
            $user_query="INSERT INTO contactus (name,email,message) VALUES('$name','$email','$message')";
            $user_query_run=mysqli_query($con,$user_query);
            
            if($user_query_run)
            {
                $_SESSION['Message']="contactus Registered successfully";
                header("Location:index.php");
                exit(0);
            }
            else
            {
                $_SESSION['Message']="something went wrong!";
                header("Location:contactus.php");
                exit(0);
            

            }
        }
    
    
?>