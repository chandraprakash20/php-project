<?php
SESSION_start();
include('admin/config/dbcon.php');

/*if(isset($_POST['member-delete']));
{
   
    $member_id=mysqli_real_escape_string($con,$_POST['member-delete']);
    $query ="DELETE  FROM member  WHERE member_id=$member_id LIMIT 1 "; 
    $query_run=mysqli_query($con,$query);
    if($query_run)
     {
            
         $_SESSION['Message']="member deleted successfully";
         header('Location: index.php');
         exit(0);
 
     }
     else
     {
         $_SESSION['Message']="something went wrong";
         header('Location: index.php');
           exit(0);
 
 
     }
}
*/
if(isset($_POST['member-update']))
{
    $member_id=mysqli_real_escape_string($con,$_POST['member_id']);
    $member_name=mysqli_real_escape_string($con,$_POST['member_name']);
    $member_email=mysqli_real_escape_string($con,$_POST['member_email']);
    $member_password=mysqli_real_escape_string($con,$_POST['member_password']);
    $member_contact_no=mysqli_real_escape_string($con,$_POST['member_contact_no']);
    
    
     $query ="UPDATE member SET member_name='$member_name',member_email='$member_email',member_password='$member_password',member_contact_no=$member_contact_no WHERE member_id=$member_id" ;
       
    $query_run=mysqli_query($con,$query);
     
    if($query_run)
    {
       
        
        
        $_SESSION['Message']="member updated successfully";
        header("Location: member-view.php?member_id=".$member_id);
        exit(0);

    }
    else
    {
        
        $_SESSION['Message']="something went wrong";
        header("Location: member-edit.php?member_id=".$member_id);
          exit(0);


    }

}

if(isset($_POST['member']))
{
    //$member_id=mysqli_real_escape_string($con,$_POST['member_id']);
    $member_name=mysqli_real_escape_string($con,$_POST['member_name']);
    $member_email=mysqli_real_escape_string($con,$_POST['member_email']);
    $member_password=mysqli_real_escape_string($con,$_POST['member_password']);
    $member_contact_no=mysqli_real_escape_string($con,$_POST['member_contact_no']);
   
    
    $query ="INSERT INTO member (member_name,member_email,member_password,member_contact_no) VALUES('$member_name','$member_email','$member_password','$member_contact_no');";
    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['Message']="member added successfully";
        header("Location: index.php");
        exit(0);

    }
    else
    {
        $_SESSION['Message']="something went wrong";
        header("Location: member.php");
          exit(0);


    }
}

?>