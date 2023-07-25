<?php
include('authentication.php');
if(isset($_POST['contactus-delete']))
{
   
    $contactus_id=$_POST['contactus-delete'];
    
    
    
  $query ="DELETE  FROM contactus  WHERE contactus_id=$contactus_id LIMIT 1 "; 
  $query_run=mysqli_query($con,$query);
         if($query_run)
     {
             
         
         
         $_SESSION['Message']="contactus deleted successfully";
         header('Location: contactus-view.php');
         exit(0);
 
     }
     else
     {
         $_SESSION['Message']="something went wrong";
         header('Location: contactus-view.php');
           exit(0);
 
 
     }
}
if(isset($_POST['contactus-add']))
{
   
    $contactus_id=$_POST['contactus_id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    
    $query ="INSERT INTO contactus (name,email,message) VALUES('$name','$email','$message')";
   echo $query;
   //die; 

    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        
        $_SESSION['Message']="contactus  added successfully";
        header("Location: contactus-view.php");
        exit(0);

    }
    else
    {
        
        $_SESSION['Message']="something went wrong";
        header("Location: contactus-add.php");
        exit(0);


    }
}

if(isset($_POST['society-delete']))
{
   
    $society_id=$_POST['society-delete'];
    
    
    
  $query ="DELETE  FROM society_rules  WHERE society_id=$society_id LIMIT 1 "; 
  $query_run=mysqli_query($con,$query);
         if($query_run)
     {
             
         
         
         $_SESSION['Message']="society deleted successfully";
         header('Location: societyrules-view.php');
         exit(0);
 
     }
     else
     {
         $_SESSION['Message']="something went wrong";
         header('Location: societyrules-view.php');
           exit(0);
 
 
     }
}
if(isset($_POST['society-update']))
{
  
    $society_id=$_POST['society_id'];
    $society_description=$_POST['society_description'];
    
     $query ="UPDATE society_rules SET society_description='$society_description' WHERE society_id=$society_id" ;
 
    $query_run=mysqli_query($con,$query);
     
    if($query_run)
    {
        
        
        $_SESSION['Message']="society rules updated successfully";
        header("Location: societyrules-view.php?society__id=".$society_id);
        exit(0);

    }
    else
    {
        echo $mysqli -> error;
        $_SESSION['Message']="something went wrong";
        header("Location: societyrules-edit.php?society_id=".$society_id);
          exit(0);


    }

}

if(isset($_POST['society-add']))
{
   
    $society_id=$_POST['society_id'];
    $society_description=$_POST['society_description'];
    
    $query ="INSERT INTO society_rules (society_description) VALUES('$society_description')";
   echo $query;
   //die; 

    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        
        $_SESSION['Message']="society rules added successfully";
        header("Location: societyrules-view.php");
        exit(0);

    }
    else
    {
        
        $_SESSION['Message']="something went wrong";
        header("Location: societyrules-add.php");
        exit(0);


    }
}

if(isset($_POST['committee-delete']))
{
   
    $committee_id=$_POST['committee-delete'];
    
    
    $check_img_query="SELECT * From committee_members WHERE committee_id=$committee_id LIMIT 1 ";
    $img_res=mysqli_query($con,$check_img_query);
    $res_data = mysqli_fetch_array($img_res);
  $image=  $res_data['image'];
  
  $query ="DELETE  FROM committee_members  WHERE committee_id=$committee_id LIMIT 1 "; 
  $query_run=mysqli_query($con,$query);
         if($query_run)
     {
             if(file_exists('../committee/'.$image))
             {
                 unlink("'../committee/'".$image);
             }
             
         
         
         $_SESSION['Message']="committee members deleted successfully";
         header('Location: committee-view.php');
         exit(0);
 
     }
     else
     {
         $_SESSION['Message']="something went wrong";
         header('Location: committee-view.php');
           exit(0);
 
 
     }
}
if(isset($_POST['committee-update']))
{
    
    $committee_id=$_POST['committee_id'];
    $member_name=$_POST['member_name'];
    $old_filename=$_POST['old_image'];
    $image=$_FILES['image']['name'];
    $update_filename="";
    if($image !=NULL)
    {
        $image_extension= pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_extension;
        $update_filename=$filename;

    }
    else
    {
        $update_filename=$old_filename;

    }
    $member_contact_no=$_POST['member_contact_no'];
    $designation=$_POST['designation'];
    
     $query ="UPDATE committee_members SET member_name='$member_name',image='$update_filename',member_contact_no='$member_contact_no',designation='$designation' WHERE committee_id=$committee_id" ;
 
    $query_run=mysqli_query($con,$query);
     
    if($query_run)
    {
        if($image != NULL)
        {
            if(file_exists('../committee/'.$old_filename))
            {
                unlink("'../committee/'".$old_filename);
            }
            move_uploaded_file($_FILES['image']['tmp_name'], '../committee/'.$update_filename);
           
        }
        
        
        $_SESSION['Message']="committee members updated successfully";
        header("Location: committee-view.php?committee_id=".$committee_id);
        exit(0);

    }
    else
    {
        echo $mysqli -> error;
        $_SESSION['Message']="something went wrong";
        header("Location: committee-edit.php?committee_id=".$committee_id);
          exit(0);


    }

}

if(isset($_POST['committee-add']))
{
    
    $committee_id=$_POST['committee_id'];
    $member_name=$_POST['member_name'];
    $image=$_FILES['image']['name'];
    $image_extension=pathinfo($image,PATHINFO_EXTENSION);
    $filename = time().'.'.$image_extension;
    $member_contact_no=$_POST['member_contact_no'];
    $designation=$_POST['designation'];
    
    
    $query ="INSERT INTO committee_members (member_name,image,member_contact_no,designation) VALUES('$member_name','$filename','$member_contact_no','$designation')";
    echo $query;
    //die;

    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], '../committee/'.$filename);
        $_SESSION['Message']="committee members added successfully";
        header("Location: committee-view.php");
        exit(0);

    }
    else
    {
        
        $_SESSION['Message']="something went wrong";
        header("Location: committee-add.php");
          exit(0);


    }
}

if(isset($_POST['amentities-delete']))
{
   
    $amentities_id=$_POST['amentities-delete'];
    
    
    $check_img_query="SELECT * From amentities WHERE amentities_id=$amentities_id LIMIT 1 ";
    $img_res=mysqli_query($con,$check_img_query);
    $res_data = mysqli_fetch_array($img_res);
  $image=  $res_data['image'];
  
  $query ="DELETE  FROM amentities  WHERE amentities_id=$amentities_id LIMIT 1 "; 
  $query_run=mysqli_query($con,$query);
         if($query_run)
     {
             if(file_exists('../amentities/'.$image))
             {
                 unlink("'../amentities/'".$image);
             }
             
         
         
         $_SESSION['Message']="amentities deleted successfully";
         header('Location: amentities-view.php');
         exit(0);
 
     }
     else
     {
         $_SESSION['Message']="something went wrong";
         header('Location: amentities-view.php');
           exit(0);
 
 
     }
}

if(isset($_POST['amentities-update']))
{
    $amentities_id=$_POST['amentities_id'];
    $amentities_name=$_POST['amentities_name'];
    $old_filename=$_POST['old_image'];
    $image=$_FILES['image']['name'];
    $update_filename="";
    if($image !=NULL)
    {
        $image_extension= pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_extension;
        $update_filename=$filename;

    }
    else
    {
        $update_filename=$old_filename;

    }
     $query ="UPDATE amentities SET amentities_name='$amentities_name',image='$update_filename' WHERE amentities_id=$amentities_id" ;
       echo $query;
      // die;
    $query_run=mysqli_query($con,$query);
     
    if($query_run)
    {
        if($image != NULL)
        {
            if(file_exists('../amentities/'.$old_filename))
            {
                unlink("'../amentities/'".$old_filename);
            }
            move_uploaded_file($_FILES['image']['tmp_name'], '../amentities/'.$update_filename);
           
        }
        
        
        $_SESSION['Message']="amentities updated successfully";
        header("Location: amentities-view.php?amentities_id=".$amentities_id);
        exit(0);

    }
    else
    {
        echo $mysqli -> error;
        $_SESSION['Message']="something went wrong";
        header("Location: amentities-edit.php?amentities_id=".$amentities_id);
          exit(0);


    }

}
if(isset($_POST['amentities-add']))
{
    
    echo "<pre>";
    print_r($_POST);
    print_r($_FILES);
    echo "</pre>";
    $amentities_name=$_POST['amentities_name'];
    
    $image=$_FILES['image']['name'];
    $image_extension=pathinfo($image,PATHINFO_EXTENSION);
    $filename = time().'.'.$image_extension;
    echo $filename;
    
    $query ="INSERT INTO amentities (amentities_name,image) VALUES('$amentities_name','$filename')";
    
    $query_run=mysqli_query($con,$query); //or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($con), E_USER_ERROR);
    echo $query_run;
    //die;
    if($query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], '../amentities/'.$filename);
        $_SESSION['Message']="amentities added successfully";
        header("Location: amentities-view.php");
        exit(0);

    }
    else
    {
       // echo $mysqli -> error;
        $_SESSION['Message']="something went wrong";
        header("Location: amentities-add.php");
          exit(0);


    }
}
if(isset($_POST['sell-delete']))
{
   
    $sell_id=$_POST['sell-delete'];
    
    
    $check_img_query="SELECT * From sell WHERE sell_id=$sell_id LIMIT 1 ";
    $img_res=mysqli_query($con,$check_img_query);
    $res_data = mysqli_fetch_array($img_res);
  $image=  $res_data['image'];
  
  $query ="DELETE  FROM sell  WHERE sell_id=$sell_id LIMIT 1 "; 
  $query_run=mysqli_query($con,$query);
         if($query_run)
     {
             if(file_exists('../sell/'.$image))
             {
                 unlink("'../sell/'".$image);
             }
             
         
         
         $_SESSION['Message']="sell deleted successfully";
         header('Location: sell-view.php');
         exit(0);
 
     }
     else
     {
         $_SESSION['Message']="something went wrong";
         header('Location: sell-view.php');
           exit(0);
 
 
     }
}
if(isset($_POST['sell-update']))
{
  
    $sell_id=$_POST['sell_id'];
    $sell_amount=$_POST['sell_amount'];
    $member_id=$_POST['member_id'];
    $sell_date=$_POST['sell_date'];
    $old_filename=$_POST['old_image'];
    $image=$_FILES['image']['name'];
    $update_filename="";
    if($image !=NULL)
    {
        $image_extension= pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_extension;
        $update_filename=$filename;

    }
    else
    {
        $update_filename=$old_filename;

    }
    
     $query ="UPDATE sell SET sell_amount='$sell_amount',member_id='$member_id',sell_date='$sell_date',image='$update_filename' WHERE sell_id=$sell_id" ;
 
    $query_run=mysqli_query($con,$query);
     
    if($query_run)
    {
        if($image != NULL)
        {
            if(file_exists('../sell/'.$old_filename))
            {
                unlink("'../sell/'".$old_filename);
            }
            move_uploaded_file($_FILES['image']['tmp_name'], '../sell/'.$update_filename);
           
        }
        
        
        $_SESSION['Message']="sell updated successfully";
        header("Location: sell-view.php?sell_id=".$sell_id);
        exit(0);

    }
    else
    {
        echo $mysqli -> error;
        $_SESSION['Message']="something went wrong";
        header("Location: sell-edit.php?sell_id=".$sell_id);
          exit(0);


    }

}

if(isset($_POST['sell-add']))
{
   
    $sell_id=$_POST['sell_id'];
    $sell_amount=$_POST['sell_amount'];
    $member_id=$_POST['member_id'];
    $sell_date=$_POST['sell_date'];
    $image=$_FILES['image']['name'];
    $image_extension=pathinfo($image,PATHINFO_EXTENSION);
    $filename = time().'.'.$image_extension;
    
    $query ="INSERT INTO sell (sell_amount,member_id,sell_date,image) VALUES('$sell_amount','$member_id','$sell_date','$filename')";
   echo $query;
   //die; 

    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], '../sell/'.$filename);
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

if(isset($_POST['rent-delete']))
{
   
    $rent_id=$_POST['rent-delete'];
    
    
    $check_img_query="SELECT * From rent WHERE rent_id=$rent_id LIMIT 1 ";
    $img_res=mysqli_query($con,$check_img_query);
    $res_data = mysqli_fetch_array($img_res);
  $image=  $res_data['image'];
  
  $query ="DELETE  FROM rent  WHERE rent_id=$rent_id LIMIT 1 "; 
  $query_run=mysqli_query($con,$query);
         if($query_run)
     {
             if(file_exists('../rent/'.$image))
             {
                 unlink("'../rent/'".$image);
             }
             
         
         
         $_SESSION['Message']="rent deleted successfully";
         header('Location: rent-view.php');
         exit(0);
 
     }
     else
     {
         $_SESSION['Message']="something went wrong";
         header('Location: rent-view.php');
           exit(0);
 
 
     }
}
if(isset($_POST['rent-update']))
{
  
    $rent_id=$_POST['rent_id'];
    $rent_amount=$_POST['rent_amount'];
    $member_id=$_POST['member_id'];
    $rent_date=$_POST['rent_date'];
    $old_filename=$_POST['old_image'];
    $image=$_FILES['image']['name'];
    $update_filename="";
    if($image !=NULL)
    {
        $image_extension= pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_extension;
        $update_filename=$filename;

    }
    else
    {
        $update_filename=$old_filename;

    }
    
     $query ="UPDATE rent SET rent_amount='$rent_amount',member_id='$member_id',rent_date='$rent_date',image='$update_filename' WHERE rent_id=$rent_id" ;
 
    $query_run=mysqli_query($con,$query);
     
    if($query_run)
    {
        if($image != NULL)
        {
            if(file_exists('../rent/'.$old_filename))
            {
                unlink("'../rent/'".$old_filename);
            }
            move_uploaded_file($_FILES['image']['tmp_name'], '../rent/'.$update_filename);
           
        }
        
        
        $_SESSION['Message']="rent updated successfully";
        header("Location: rent-view.php?rent_id=".$rent_id);
        exit(0);

    }
    else
    {
        echo $mysqli -> error;
        $_SESSION['Message']="something went wrong";
        header("Location: rent-edit.php?rent_id=".$rent_id);
          exit(0);


    }

}

if(isset($_POST['rent-add']))
{
   
    $rent_id=$_POST['rent_id'];
    $rent_amount=$_POST['rent_amount'];
    $member_id=$_POST['member_id'];
    $rent_date=$_POST['rent_date'];
    $image=$_FILES['image']['name'];
    $image_extension=pathinfo($image,PATHINFO_EXTENSION);
    $filename = time().'.'.$image_extension;
    
    $query ="INSERT INTO rent (rent_amount,member_id,rent_date,image) VALUES('$rent_amount','$member_id','$rent_date','$filename')";

    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], '../rent/'.$filename);
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
if(isset($_POST['logout_btn']))
{
    //session_destroy();
    unset($_SESSION['auth']);
    unset($_SESSION['auth_role']);
    unset($_SESSION['auth_user']);
    $_SESSION['Message']="Logged Out Successfully";
    header("Location:../login.php");
    exit(0);
}

if(isset($_POST['maintenance-delete']))
{
   
    $maintenance_id=$_POST['maintenance-delete'];
  $query ="DELETE  FROM maintenance  WHERE maintenance_id=$maintenance_id LIMIT 1 "; 
  $query_run=mysqli_query($con,$query);
         if($query_run)
     {
         
         $_SESSION['Message']="maintenance deleted successfully";
         header('Location: maintenance-view.php');
         exit(0);
 
     }
     else
     {
         $_SESSION['Message']="something went wrong";
         header('Location: maintenance-view.php');
           exit(0);
 
 
     }
}
if(isset($_POST['maintenance-update']))
{
  
    $maintenance_id=$_POST['maintenance_id'];
    $maintenance_year=$_POST['maintenance_year'];
    $maintenance_month=$_POST['maintenance_month']; 
    $maintenance_charges=$_POST['maintenance_charges'];
    $maintenance_title=$_POST['maintenance_title'];
    $maintenance_description=$_POST['maintenance_description'];
    $maintenance_status=$_POST['maintenance_status'];
    $maintenance_date=$_POST['maintenance_date'];
 
     $query ="UPDATE maintenance SET maintenance_year='$maintenance_year',maintenance_month='$maintenance_month',maintenance_charges='$maintenance_charges',maintenance_title='$maintenance_title',maintenance_description='$maintenance_description',maintenance_status='$maintenance_status',maintenance_date='$maintenance_date' WHERE maintenance_id=$maintenance_id" ;
 
    $query_run=mysqli_query($con,$query);
     echo $query;
     
    if($query_run)
    {
        
        
        $_SESSION['Message']="maintenance updated successfully";
        header("Location: maintenance-view.php?maintenance_id=".$maintenance_id);
        exit(0);

    }
    else
    {
        
        $_SESSION['Message']="something went wrong";
        header("Location: maintenance-edit.php?maintenance_id=".$maintenance_id);
          exit(0);


    }

}

if(isset($_POST['maintenance-add']))
{
   
    $maintenance_id=$_POST['maintenance_id'];
    $maintenance_year=$_POST['maintenance_year'];
    $maintenance_month=$_POST['maintenance_month']; 
    $maintenance_charges=$_POST['maintenance_charges'];
    $maintenance_title=$_POST['maintenance_title'];
    $maintenance_description=$_POST['maintenance_description'];
    $maintenance_status=$_POST['maintenance_status'];
    $maintenance_date=$_POST['maintenance_date'];
 
    
    $query ="INSERT INTO maintenance (maintenance_year,maintenance_month,maintenance_charges,maintenance_title,maintenance_description,maintenance_status,maintenance_date) VALUES('$maintenance_year','$maintenance_month','$maintenance_charges','$maintenance_title','$maintenance_description','$maintenance_status','$maintenance_date')";
    

    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
       
        $_SESSION['Message']="maintenance added successfully";
        header("Location: maintenance-view.php");
        exit(0);

    }
    else
    {
        
        $_SESSION['Message']="something went wrong";
        header("Location: maintenance-add.php");
          exit(0);


    }
}
if(isset($_POST['event-delete']))
{
   
    $event_id=$_POST['event-delete'];
    
    
    $check_img_query="SELECT * From event WHERE event_id=$event_id LIMIT 1 ";
    $img_res=mysqli_query($con,$check_img_query);
    $res_data = mysqli_fetch_array($img_res);
  $image=  $res_data['image'];
  
  $query ="DELETE  FROM event  WHERE event_id=$event_id LIMIT 1 "; 
  $query_run=mysqli_query($con,$query);
         if($query_run)
     {
             if(file_exists('../event/'.$image))
             {
                 unlink("'../event/'".$image);
             }
             
         
         
         $_SESSION['Message']="event deleted successfully";
         header('Location: event-view.php');
         exit(0);
 
     }
     else
     {
         $_SESSION['Message']="something went wrong";
         header('Location: event-view.php');
           exit(0);
 
 
     }
}
if(isset($_POST['event-update']))
{
  
    $event_id=$_POST['event_id'];
    $event_subject=$_POST['event_subject'];
    $event_description=$_POST['event_description'];
    $old_filename=$_POST['old_image'];
    $image=$_FILES['image']['name'];
    $update_filename="";
    if($image !=NULL)
    {
        $image_extension= pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_extension;
        $update_filename=$filename;

    }
    else
    {
        $update_filename=$old_filename;

    }
    $event_date=$_POST['event_date'];
    $event_status=$_POST['event_status'];
     $query ="UPDATE event SET event_subject='$event_subject',event_description='$event_description',image='$update_filename',event_date='$event_date',event_status='$event_status' WHERE event_id=$event_id" ;
 
    $query_run=mysqli_query($con,$query);
     
    if($query_run)
    {
        if($image != NULL)
        {
            if(file_exists('../event/'.$old_filename))
            {
                unlink("'../event/'".$old_filename);
            }
            move_uploaded_file($_FILES['image']['tmp_name'], '../event/'.$update_filename);
           
        }
        
        
        $_SESSION['Message']="event updated successfully";
        header("Location: event-view.php?event_id=".$event_id);
        exit(0);

    }
    else
    {
        echo $mysqli -> error;
        $_SESSION['Message']="something went wrong";
        header("Location: event-edit.php?event_id=".$event_id);
          exit(0);


    }

}

if(isset($_POST['event-add']))
{
   
    $event_id=$_POST['event_id'];
    $event_subject=$_POST['event_subject'];
    $event_description=$_POST['event_description'];
    $image=$_FILES['image']['name'];
    $image_extension=pathinfo($image,PATHINFO_EXTENSION);
    $filename = time().'.'.$image_extension;
    $event_date=$_POST['event_date'];
    $event_status=$_POST['event_status'];
    
    $query ="INSERT INTO event (event_subject,event_description,image,event_date,event_status) VALUES('$event_subject','$event_description','$filename','$event_date','$event_status')";
    

    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], '../event/'.$filename);
        $_SESSION['Message']="event added successfully";
        header("Location: event-view.php");
        exit(0);

    }
    else
    {
        
        $_SESSION['Message']="something went wrong";
        header("Location: event-add.php");
          exit(0);


    }
}

if(isset($_POST['notice-delete']))
{
   
    $notice_id=$_POST['notice-delete'];
    
    
    $check_img_query="SELECT * From notice WHERE notice_id=$notice_id LIMIT 1 ";
    $img_res=mysqli_query($con,$check_img_query);
    $res_data = mysqli_fetch_array($img_res);
  $image=  $res_data['image'];
  
  $query ="DELETE  FROM notice  WHERE notice_id=$notice_id LIMIT 1 "; 
  $query_run=mysqli_query($con,$query);
         if($query_run)
     {
             if(file_exists('../notice/'.$image))
             {
                 unlink("'../notice/'".$image);
             }
             
         
         
         $_SESSION['Message']="notice deleted successfully";
         header('Location: notice-view.php');
         exit(0);
 
     }
     else
     {
         $_SESSION['Message']="something went wrong";
         header('Location: notice-view.php');
           exit(0);
 
 
     }
}

if(isset($_POST['notice-update']))
{
    $notice_id=$_POST['notice_id'];
    $notice_title=$_POST['notice_title'];
    $notice_description=$_POST['notice_description'];
    $old_filename=$_POST['old_image'];
    $image=$_FILES['image']['name'];
    $update_filename="";
    if($image !=NULL)
    {
        $image_extension= pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_extension;
        $update_filename=$filename;

    }
    else
    {
        $update_filename=$old_filename;

    }
    $notice_date=$_POST['notice_date'];
     $query ="UPDATE notice SET notice_title='$notice_title',notice_description='$notice_description',image='$update_filename',notice_date='$notice_date' WHERE notice_id=$notice_id" ;
       
    $query_run=mysqli_query($con,$query);
     
    if($query_run)
    {
        if($image != NULL)
        {
            if(file_exists('../notice/'.$old_filename))
            {
                unlink("'../notice/'".$old_filename);
            }
            move_uploaded_file($_FILES['image']['tmp_name'], '../notice/'.$update_filename);
           
        }
        
        
        $_SESSION['Message']="notice updated successfully";
        header("Location: notice-view.php?notice_id=".$notice_id);
        exit(0);

    }
    else
    {
        echo $mysqli -> error;
        $_SESSION['Message']="something went wrong";
        header("Location: notice-edit.php?notice_id=".$notice_id);
          exit(0);


    }

}

if(isset($_POST['notice-add']))
{
   
    $notice_id=$_POST['notice_id'];
    $notice_title=$_POST['notice_title'];
    $notice_description=$_POST['notice_description'];
    $image=$_FILES['image']['name'];
    $image_extension=pathinfo($image,PATHINFO_EXTENSION);
    $filename = time().'.'.$image_extension;

    $notice_date=$_POST['notice_date'];
    $query ="INSERT INTO notice (notice_title,notice_description,image,notice_date) VALUES('$notice_title','$notice_description','$filename','$notice_date')";
    echo $query;
    
    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], '../notice/'.$filename);
        $_SESSION['Message']="notice added successfully";
        header("Location: notice-view.php");
        exit(0);

    }
    else
    {
        
        $_SESSION['Message']="something went wrong";
        header("Location: notice-add.php");
          exit(0);


    }
}

if(isset($_POST['complaint-delete']))
{
   
    $complaint_id=$_POST['complaint-delete'];
    $query ="DELETE  FROM complaint  WHERE complaint_id=$complaint_id LIMIT 1 "; 
    $query_run=mysqli_query($con,$query);
    if($query_run)
     {
            
         $_SESSION['Message']="complaint deleted successfully";
         header('Location: complaint-view.php');
         exit(0);
 
     }
     else
     {
         $_SESSION['Message']="something went wrong";
         header('Location: complaint-view.php');
           exit(0);
 
 
     }
}
if(isset($_POST['complaint-update']))
{
    $complaint_id=$_POST['complaint_id'];
    $complaint_subject=$_POST['complaint_subject'];
    $complaint_description=$_POST['complaint_description'];
    $member_id=$_POST['member_id'];
    $complaint_reply=$_POST['complaint_reply'];
    $complaint_status=$_POST['complaint_status'];
    
     $query ="UPDATE complaint SET complaint_subject='$complaint_subject',complaint_description='$complaint_description',member_id=$member_id,complaint_reply='$complaint_reply',complaint_status='$complaint_status' WHERE complaint_id=$complaint_id " ;
       
    $query_run=mysqli_query($con,$query) or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($con), E_USER_ERROR);
     
    if($query_run)
    {
       
        
        
        $_SESSION['Message']="complaint updated successfully";
        header("Location: complaint-view.php?complaint_id=".$complaint_id);
        exit(0);

    }
    else
    {
        echo $mysqli -> error;
        $_SESSION['Message']="something went wrong";
        header("Location: complaint-edit.php?complaint_id=".$complaint_id);
          exit(0);


    }

}


if(isset($_POST['complaint-add']))
{
    //$complaint_id=$_POST['complaint_id'];
    $complaint_subject=$_POST['complaint_subject'];
    $complaint_description=$_POST['complaint_description'];
    $member_id=$_POST['member_id'];
    $complaint_reply=$_POST['complaint_reply'];
    $complaint_status=$_POST['complaint_status'];
    $query ="INSERT INTO complaint (complaint_subject,complaint_description,member_id,complaint_reply,complaint_status)
     VALUES('$complaint_subject','$complaint_description',$member_id,'$complaint_reply','$complaint_status')";
    $query_run=mysqli_query($con,$query); 

    if($query_run)
    {
        $_SESSION['Message']="complaint added successfully";
        header("Location: complaint-view.php");
        exit(0);

    }
    else
    {
        
        $_SESSION['Message']="something went wrong";
        header("Location: complaint-add.php");
          exit(0);


    }
}
if(isset($_POST['member-delete']))
{
   
    $member_id=$_POST['member-delete'];
    $query ="DELETE  FROM member  WHERE member_id=$member_id LIMIT 1 "; 
    $query_run=mysqli_query($con,$query);
    if($query_run)
     {
            
         $_SESSION['Message']="member deleted successfully";
         header('Location: member-view.php');
         exit(0);
 
     }
     else
     {
         $_SESSION['Message']="something went wrong";
         header('Location: member-view.php');
           exit(0);
 
 
     }
}
if(isset($_POST['member-update']))
{
    $member_id=$_POST['member_id'];
    $member_name=$_POST['member_name'];
    $member_email=$_POST['member_email'];
    $member_password=$_POST['member_password'];
    $member_contact_no=$_POST['member_contact_no'];
    $house_id=$_POST['house_id'];
    
     $query ="UPDATE member SET member_name='$member_name',member_email='$member_email',member_password='$member_password',member_contact_no=$member_contact_no,house_id=$house_id WHERE member_id=$member_id" ;
       
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
if(isset($_POST['member-add']))
{
    //$member_id=$_POST['member_id'];
    $member_name=$_POST['member_name'];
    $member_email=$_POST['member_email'];
    $member_password=$_POST['member_password'];
    $member_contact_no=$_POST['member_contact_no'];
    $house_id=$_POST['house_id'];

    $query ="INSERT INTO member (member_name,member_email,member_password,member_contact_no,house_id) VALUES('$member_name','$member_email','$member_password','$member_contact_no',$house_id)";
    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['Message']="member added successfully";
        header("Location: member-view.php");
        exit(0);

    }
    else
    {
        $_SESSION['Message']="something went wrong";
        header("Location: member-add.php");
          exit(0);


    }
}

if(isset($_POST['house-delete']))
{
   
    $house_id=$_POST['house-delete'];
    
    
    $check_img_query="SELECT * From house WHERE house_id=$house_id LIMIT 1 ";
    $img_res=mysqli_query($con,$check_img_query);
    $res_data = mysqli_fetch_array($img_res);
  $image=  $res_data['image'];
  
  $query ="DELETE  FROM house  WHERE house_id=$house_id LIMIT 1 "; 
  $query_run=mysqli_query($con,$query);
         if($query_run)
     {
             if(file_exists('../house/'.$image))
             {
                 unlink("'../house/'".$image);
             }
             
         
         
         $_SESSION['Message']="house deleted successfully";
         header('Location: house-view.php');
         exit(0);
 
     }
     else
     {
         $_SESSION['Message']="something went wrong";
         header('Location: house-view.php');
           exit(0);
 
 
     }
}

if(isset($_POST['house-update']))
{
    $house_id=$_POST['house_id'];
    $house_no=$_POST['house_no'];
    $old_filename=$_POST['old_image'];
    $image=$_FILES['image']['name'];
    $update_filename="";
    if($image !=NULL)
    {
        $image_extension= pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_extension;
        $update_filename=$filename;

    }
    else
    {
        $update_filename=$old_filename;

    }
    $house_type=$_POST['house_type'];
     $query ="UPDATE house SET house_no=$house_no,image='$update_filename',house_type='$house_type' WHERE house_id=$house_id" ;
       
    $query_run=mysqli_query($con,$query);
     
    if($query_run)
    {
        if($image != NULL)
        {
            if(file_exists('../house/'.$old_filename))
            {
                unlink("'../house/'".$old_filename);
            }
            move_uploaded_file($_FILES['image']['tmp_name'], '../house/'.$update_filename);
           
        }
        
        
        $_SESSION['Message']="house updated successfully";
        header("Location: house-view.php?house_id=".$house_id);
        exit(0);

    }
    else
    {
        echo $mysqli -> error;
        $_SESSION['Message']="something went wrong";
        header("Location: house-edit.php?house_id=".$house_id);
          exit(0);


    }

}
if(isset($_POST['house-add']))
{
    
    echo "<pre>";
    print_r($_POST);
    print_r($_FILES);
    echo "</pre>";
    $house_no=$_POST['house_no'];
    
    $image=$_FILES['image']['name'];
    $image_extension=pathinfo($image,PATHINFO_EXTENSION);
    $filename = time().'.'.$image_extension;
echo $filename;
    $house_type=$_POST['house_type'];
    
    $query ="INSERT INTO house (house_no,image,house_type) VALUES($house_no,'$filename','$house_type')";
    echo $query;
    $query_run=mysqli_query($con,$query) or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($con), E_USER_ERROR);

    if($query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], '../house/'.$filename);
        $_SESSION['Message']="house added successfully";
        header("Location: house-view.php");
        exit(0);

    }
    else
    {
        echo $mysqli -> error;
        $_SESSION['Message']="something went wrong";
        header("Location: house-add.php");
          exit(0);


    }
}


if(isset($_POST['post_delete']))
{
   
    $post_id=$_POST['post_delete'];
    
    
    $check_img_query="SELECT * From posts WHERE id=$post_id LIMIT 1 ";
    $img_res=mysqli_query($con,$check_img_query);
    $res_data = mysqli_fetch_array($img_res);
  $image=  $res_data['image'];
  
  $query ="DELETE  FROM posts  WHERE id=$post_id LIMIT 1 "; 
  $query_run=mysqli_query($con,$query);
         if($query_run)
     {
             if(file_exists('../Uploads/Posts'.$image))
             {
                 unlink("'../Uploads/Posts'".$image);
             }
             
         
         
         $_SESSION['Message']="post deleted successfully";
         header('Location: post-view.php');
         exit(0);
 
     }
     else
     {
         $_SESSION['Message']="something went wrong";
         header('Location: post-view.php');
           exit(0);
 
 
     }
}
if(isset($_POST['post_update']))
{
    
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $post_id=$_POST['post_id'];
    $category_id=$_POST['category_id'];
    $name=$_POST['name'];
    $slug=$_POST['slug'];
    $description=$_POST['description'];
    $old_filename=$_POST['old_image'];
    $image=$_FILES['image']['name'];
    $update_filename="";
    if($image !=NULL)
    {
        $image_extension= pathinfo($image, PATHINFO_EXTENSION);
        $filename = time().'.'.$image_extension;
        $update_filename=$filename;

    }
    else
    {
        $update_filename=$old_filename;

    }
    $meta_title=$_POST['meta_title'];
    $meta_description=$_POST['meta_description'];
    $meta_keyword=$_POST['meta_keyword'];
    
    $status=$_POST['status'] == true ? 1 : 0 ;
    
     $query ="UPDATE posts SET category_id=$category_id,name='$name', slug='$slug',description='$description',image='$update_filename',meta_title='$meta_title',meta_description='$meta_description',meta_keyword='$meta_keyword',status=$status
       WHERE id=$post_id" ;
       echo "$query";
    $query_run=mysqli_query($con,$query) or trigger_error("Query Failed! SQL: $query - Error: ".mysqli_error($con), E_USER_ERROR);
     
    if($query_run)
    {
        if($image != NULL)
        {
            if(file_exists('../Uploads/Posts'.$old_filename))
            {
                unlink("'../Uploads/Posts'".$old_filename);
            }
            move_uploaded_file($_FILES['image']['tmp_name'], '../Uploads/Posts'.$update_filename);
           
        }
        
        
        $_SESSION['Message']="post updated successfully";
        header("Location: post-view.php?id=".$post_id);
        exit(0);

    }
    else
    {
        echo $mysqli -> error;
        $_SESSION['Message']="something went wrong";
        header("Location: post-edit.php?id=".$post_id);
          exit(0);


    }

}
if(isset($_POST['post_add']))
{
    
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $category_id=$_POST['category_id'];

    $name=$_POST['name'];
    $slug=$_POST['slug'];
    $description=$_POST['description'];
 
    $image=$_FILES['image']['name'];
    $image_extension= pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_extension;

    $meta_title=$_POST['meta_title'];
    $meta_description=$_POST['meta_description'];
    $meta_keyword=$_POST['meta_keyword'];
    
    $status=$_POST['status'] == true ? 1 : 0 ;

    $query ="INSERT INTO posts (category_id,name,slug,description,image,meta_title,meta_description,meta_keyword,status) 
    VALUES($category_id,'$name','$slug','$description','$filename','$meta_title','$meta_description','$meta_keyword',$status)";
    echo "$query";
    
    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], '../Uploads/Posts'.$filename);
        $_SESSION['Message']="post added successfully";
        header("Location: post-add.php");
        exit(0);

    }
    else
    {
        $_SESSION['Message']="something went wrong";
        header("Location: post-add.php");
          exit(0);


    }
}

if(isset($_POST['student_delete']))
{
   
    $student_id=$_POST['student_delete'];
    
    
    $query ="DELETE FROM student WHERE id=$student_id"; 
     $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['Message']="student deleted successfully";
        header("Location: student-view.php");
        exit(0);

    }
    else
    {
        $_SESSION['Message']="something went wrong";
        header("Location: student-view.php");
          exit(0);


    }
}
if(isset($_POST['update-student']))
{
    $student_id=$_POST['student_id'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $semester=$_POST['semester'];
    $course=$_POST['course'];
    

    $query ="UPDATE student SET first_name='$first_name', last_name='$last_name',semester=$semester,course='$course' WHERE id=$student_id" ;


    $query_run=mysqli_query($con,$query);
    
    if($query_run)
    {
        $_SESSION['Message']="updated successfully";
        header("Location: student-view.php");
        exit(0);

    }

}
if(isset($_POST['add-student']))
{  
     echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $semester=$_POST['semester'];
    $course=$_POST['course'];
    
    $query ="INSERT INTO student (first_name,last_name,semester,course) VALUES('$first_name','$last_name','$semester','$course')";
    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['Message']="student added successfully";
        header("Location: student-view.php");
        exit(0);

    }
    else
    {
        $_SESSION['Message']="something went wrong";
        header("Location: student-view.php");
          exit(0);


    }
}

if(isset($_POST['category_delete']))
{
   
    $category_id=$_POST['category_delete'];
    
    
    $query ="UPDATE categories SET STATUS='2'  WHERE id=$category_id LIMIT 1 "; 
     $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['Message']="category deleted successfully";
        header("Location: category-view.php");
        exit(0);

    }
    else
    {
        $_SESSION['Message']="something went wrong";
        header("Location: category-view.php");
          exit(0);


    }
}
if(isset($_POST['category_update']))
{
    $category_id=$_POST['category_id'];
    $name=$_POST['name'];
    $slug=$_POST['slug'];
    $description=$_POST['description'];
    $meta_title=$_POST['meta_title'];
    $meta_description=$_POST['meta_description'];
    $meta_keyword=$_POST['meta_keyword'];
    $navbar_status=$_POST['navbar_status'] == true ? 1 : 0 ;
    $status=$_POST['status'] == true ? 1 : 0 ;

    $query ="UPDATE categories SET name='$name', slug='$slug',description='$description',meta_title='$meta_title',meta_description='$meta_description',meta_keyword='$meta_keyword',navbar_status=$navbar_status,status=$status
      WHERE id=$category_id" ;
    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['Message']="category updated successfully";
        header("Location: category-edit.php?id=".$category_id);
        exit(0);

    }
    else
    {
        $_SESSION['Message']="something went wrong";
        header("Location: category-view.php?id=".$category_id);
          exit(0);


    }

}

if(isset($_POST['category_add']))
{
    echo "<pre>";
   print_r($_POST);
   echo "</pre>";
    $name=$_POST['name'];
    $slug=$_POST['slug'];
    $description=$_POST['description'];

    $meta_title=$_POST['meta_title'];
    $meta_description=$_POST['meta_description'];
    $meta_keyword=$_POST['meta_keyword'];
    
    $navbar_status=$_POST['navbar_status'] == true ? 1 : 0 ;
    $status=$_POST['status'] == true ? 1 : 0 ;

    $query ="INSERT INTO categories (name,slug,description,meta_title,meta_description,meta_keyword,navbar_status,status) VALUES('$name','$slug','$description','$meta_title','$meta_description','$meta_keyword',$navbar_status,$status)";
    echo $query;
    
    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['Message']="category added successfully";
        header("Location: category-add.php");
        exit(0);

    }
    else
    {
        $_SESSION['Message']="something went wrong";
        header("Location: category-add.php");
          exit(0);


    }
}
if(isset($_POST['user_delete']))
{
   
    $user_id=$_POST['user_delete'];
    $lname=$_POST['lname'];
    
    $query ="DELETE FROM USERS WHERE id=$user_id"; 
     $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['Message']="user/admin deleted successfully";
        header("Location: view-register.php");
        exit(0);

    }
    else
    {
        $_SESSION['Message']="something went wrong";
        header("Location: view-register.php");
          exit(0);


    }
}

if(isset($_POST['add-user']))
{
   
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $role_as=$_POST['role_as'];
    $status=$_POST['status'] == true ? 1 : 0 ;

    $query ="INSERT INTO USERS (fname,lname,email,password,role_as,status) VALUES('$fname','$lname','$email','$password','$role_as',$status)";
    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['Message']="Admin or user added successfully";
        header("Location: view-register.php");
        exit(0);

    }
    else
    {
        $_SESSION['Message']="something went wrong";
        header("Location: view-register.php");
          exit(0);


    }
}
if(isset($_POST['update-user']))
{
    $user_id=$_POST['user_id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $role_as=$_POST['role_as'];
    $status=$_POST['status'] == true ? 1 : 0 ;

    $query ="UPDATE users SET fname='$fname', lname='$lname',email='$email',password='$password', role_as='$role_as',status=$status WHERE id=$user_id" ;
    $query_run=mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['Message']="updated successfully";
        header("Location: view-register.php");
        exit(0);

    }

}
?>