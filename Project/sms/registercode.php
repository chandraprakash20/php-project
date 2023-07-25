<?php
SESSION_start();
include('admin/config/dbcon.php');

if(isset($_POST['register_btn']))
{
    $fname=mysqli_real_escape_string($con,$_POST['fname']);
    $lname=mysqli_real_escape_string($con,$_POST['lname']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    $confirm_password=mysqli_real_escape_string($con,$_POST['cpassword']);
    
    if($password==$confirm_password)
    {
        //check email
        $checkemail="SELECT email FROM users WHERE email='$email'";
        $checkemail_run=mysqli_query($con,$checkemail);
        if(mysqli_num_rows($checkemail_run)>0)
        {
            //already email exists
            $_SESSION['Message']="Already email exists";
            header("Location:register.php");
            exit(0);

        }
        else
        {
            $user_query="INSERT INTO users (fname,lname,email,password) VALUES('$fname','$lname','$email','$password')";
            $user_query_run=mysqli_query($con,$user_query);
            if($user_query_run)
            {
                $_SESSION['Message']="Registered successfully";
                header("Location:login.php");
                exit(0);
            }
            else
            {
                $_SESSION['Message']="something went wrong!";
                header("Location:register.php");
                exit(0);
            

            }
        }
    }
    else
    {
        $_SESSION['Message']="Password and Confirm password does not match";
        header("Location:register.php");
        exit(0);

    }
   
	 

}
else
{
header("Location:register.php");
exit(0);
}
?>