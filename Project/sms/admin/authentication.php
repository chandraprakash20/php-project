<?php
session_start();
include('config/dbcon.php');
if(!isset($_SESSION['auth']))
{
    $_SESSION['Message']="Login to access to dashboard";
    header("Location:../login.php");
    exit(0);
}
else
{
    if($_SESSION['auth_role']!="1")
    {
        $_SESSION['Message']="you are not authorized as admin";
        header("Location:../login.php");
        exit(0);
    }
    elseif($_SESSION['auth_role'] =='0')
    {
            $_SESSION['Message']="you are logged in";
            header("Location:index.php");
            exit(0);
        }
}
?>