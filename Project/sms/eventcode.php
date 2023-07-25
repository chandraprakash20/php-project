<?php
SESSION_start();
include('admin/config/dbcon.php');

if(isset($_POST['event-add']))
{
   
    $event_id=mysqli_real_escape_string($con,$_POST['event_id']);
    $event_subject=mysqli_real_escape_string($con,$_POST['event_subject']);
    $event_description=mysqli_real_escape_string($con,$_POST['event_description']);
    $image=mysqli_real_escape_string($con,$_FILES['image']['name']);
    $image_extension=mysqli_real_escape_string($con,pathinfo($image,PATHINFO_EXTENSION));
    $filename = mysqli_real_escape_string($con,time().'.'.$image_extension);
    $event_date=mysqli_real_escape_string($con,$_POST['event_date']);
    $event_status=mysqli_real_escape_string($con,$_POST['event_status']);
    
    $query ="INSERT INTO event (event_subject,event_description,image,event_date,event_status) VALUES('$event_subject','$event_description','$filename','$event_date','$event_status')";
    

    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], 'event/'.$filename);
        $_SESSION['Message']="event added successfully";
        header("Location: event-view.php");
        exit(0);

    }
    else
    {
        
        $_SESSION['Message']="something went wrong";
        header("Location: event.php");
          exit(0);


    }
}
?>