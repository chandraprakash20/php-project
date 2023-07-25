<?php
SESSION_start();
include('admin/config/dbcon.php');
if(isset($_POST['rent-add']))
{
   
    $rent_id=mysqli_real_escape_string($con,$_POST['rent_id']);
    $rent_amount=mysqli_real_escape_string($con,$_POST['rent_amount']);
    $member_id=mysqli_real_escape_string($con,$_POST['member_id']);
    $rent_date=mysqli_real_escape_string($con,$_POST['rent_date']);
    $image=mysqli_real_escape_string($con,$_FILES['image']['name']);
    $image_extension=mysqli_real_escape_string($con,pathinfo($image,PATHINFO_EXTENSION));
    $filename = mysqli_real_escape_string($con,time().'.'.$image_extension);
    echo "<pre>";
    print_r($_POST);
    echo"</pre>";
    //die;
    $query ="INSERT INTO rent (rent_amount,member_id,rent_date,image) VALUES('$rent_amount','$member_id','$rent_date','$filename')";
    echo $query;
    //die;

    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        
        move_uploaded_file($_FILES['image']['tmp_name'], 'rent/'.$filename);
        $_SESSION['Message']="rent added successfully";
        header("Location: rent-view.php");
        exit(0);

    }
    else
    {
        
        $_SESSION['Message']="something went wrong";
        header("Location: rent-add.php");
          exit(0);


    }
}


?>