<?php
SESSION_start();
include('admin/config/dbcon.php');

if(isset($_POST['login_btn']))
{
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $password=mysqli_real_escape_string($con,$_POST['password']);

    //$isadmin=$_POST['isadmin'];
    //$isadmin=mysqli_real_escape_string($con,$_POST['isadmin']);
    // echo "<pre>";
    // print_r($_POST);
    
    // echo "</pre>";
    if($email=="prakash@gmail.com")
    {
        //echo "Admin";
        $login_query="SELECT *  FROM users WHERE email='$email'AND password ='$password' LIMIT 1";
        $login_query_run=mysqli_query($con,$login_query);
        if(mysqli_num_rows($login_query_run)>0)
        {
            foreach($login_query_run as $data)
            {
                $user_id =$data['id'];
                $user_name =$data['fname'].''.$data['lname'];
                $user_email =$data['email'];
                $role_as =$data['role_as'];
                
            }
            $_SESSION['auth']=true;
            $_SESSION['auth_role']="$role_as";
            $_SESSION['auth_user']=[
                'user_id'=>$user_id,
                'user_name'=>$user_name,
                'user_email'=>$user_email,
            ];
            
            if($_SESSION['auth_role'] =='1')
            {
                //echo "Admin1:=";
                $_SESSION['Message']="welcome to dashboard";
                header("Location:admin/index.php");
                exit(0);
            }
    
        }
        else
        {
            $_SESSION['Message']="invalid email or password";
            header("Location:login.php");
            exit(0);
        }    
    }
    else if($isadmin==null)
        {
            //echo "User";
            $login_query="SELECT *  FROM member WHERE member_email='$email'AND member_password ='$password' LIMIT 1";
            $login_query_run=mysqli_query($con,$login_query);
            if(mysqli_num_rows($login_query_run)>0)
            {
                foreach($login_query_run as $data)
                {
                    $user_id =$data['member_id'];
                    $user_name =$data['member_name'];
                    $user_email =$data['member_email'];
                    $role_as =0;
                    
                }
                $_SESSION['auth']=true;
                $_SESSION['auth_role']="$role_as";
                $_SESSION['auth_user']=[
                    'user_id'=>$user_id,
                    'user_name'=>$user_name,
                    'user_email'=>$user_email,
                ];
                if($_SESSION['auth_role'] =='0')
                {
                    //echo "User1:=";
                    $_SESSION['Message']="you are logged in";
                    header("Location:index.php");
                    exit(0);
                }
        
            }
            else
            {
                $_SESSION['Message']="invalid email or password";
                header("Location:login.php");
                exit(0);
            }
        }
    
    }

    else
    {
        $_SESSION['Message']="you are not allowed to access this file";
        header("Location:login.php");
        exit(0);
    }

?>