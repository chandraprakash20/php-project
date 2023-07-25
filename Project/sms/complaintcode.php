<?php
SESSION_start();
include('admin/config/dbcon.php');

if(isset($_POST['complaint-add']))
{
    $complaint_subject=mysqli_real_escape_string($con,$_POST['complaint_subject']);
    $complaint_description=mysqli_real_escape_string($con,$_POST['complaint_description']);
    $member_id=mysqli_real_escape_string($con,$_POST['member_id']);
    
            $user_query="INSERT INTO complaint (complaint_subject,complaint_description,member_id) VALUES('$complaint_subject','$complaint_description',$member_id)";
            $user_query_run=mysqli_query($con,$user_query);
            if($user_query_run)
            {
                $_SESSION['Message']="complaint Registered successfully";
                header("Location:index.php");
                exit(0);
            }
            else
            {
                $_SESSION['Message']="something went wrong!";
                header("Location:index.php");
                exit(0);
            

            }
        }
    
    
?>