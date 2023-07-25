<?php
SESSION_start();
include('admin/config/dbcon.php');
if(isset($_POST['sell-add']))
{
   
    $sell_id=mysqli_real_escape_string($con,$_POST['sell_id']);
    $sell_amount=mysqli_real_escape_string($con,$_POST['sell_amount']);
    $member_id=mysqli_real_escape_string($con,$_POST['member_id']);
    $sell_date=mysqli_real_escape_string($con,$_POST['sell_date']);
    $image=mysqli_real_escape_string($con,$_FILES['image']['name']);
    $image_extension=mysqli_real_escape_string($con,pathinfo($image,PATHINFO_EXTENSION));
    $filename = mysqli_real_escape_string($con,time().'.'.$image_extension);
    
    $query ="INSERT INTO sell (sell_amount,member_id,sell_date,image) VALUES('$sell_amount','$member_id','$sell_date','$filename')";
   echo $query;
   //die; 

    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], 'sell/'.$filename);
        $_SESSION['Message']="sell added successfully";
        header("Location: sell-view.php");
        exit(0);

    }
    else
    {
        
        $_SESSION['Message']="something went wrong";
        header("Location: sell-add.php");
        exit(0);


    }
}


?>