<?php

include('authentication.php');
include('includes/header.php');
?>
 <div class="container-fluid px-4">

    <div class="row mt-4">
    <div class="col-md-12">
    <?php include('message.php');  ?>  
        <div class="card">
            <div class="card-header">
                <h4>EDIT COMPLAINT </h4>
                <a href="complaint-view.php" class="btn btn-danger float-end">GO BACK</a>
            </div>
            <div class="card-body">
            <?php
                if(isset($_GET['complaint_id']))
                {
                    $complaint_id=$_GET['complaint_id'];
                    $complaint_query="SELECT * FROM complaint WHERE complaint_id='$complaint_id' LIMIT 1";
                    
                    $complaint_run=mysqli_query($con,$complaint_query);
                    if(mysqli_num_rows($complaint_run)>0)
                    {
                        $complaint_row=mysqli_fetch_array($complaint_run );

                        ?>

            <form action="code.php" method="POST">
                           
                           <div class="row">
                           <div class="col-md-12 mb-3">
                               <label for="">COMPLAINT ID</label>
                               <input type="text" name="complaint_id" value="<?=$complaint_row['complaint_id'];?>"  required class="form-control">
                           </div>
                           <div class="col-md-12 mb-3">
                               <label for="">COMPLAINT SUBJECT </label>
                               <input type="text" name="complaint_subject"   value="<?=$complaint_row['complaint_subject'];?>" required class="form-control">
                           </div>
                           <div class="col-md-12 mb-3">
                           <label >COMPLAINT DESCRIPTION</label>
                           <input  type="text" name="complaint_description" value="<?=$complaint_row['complaint_description'];?>" required class="form-control">
                       </div>
                        
                       <div class="col-md-12 mb-3">
                        <label for="">MEMBER LIST</label>
                    <?php
                    $member ="SELECT * FROM  member ";

                    $member_run = mysqli_query($con,$member);
                    if(mysqli_num_rows($member_run) > 0)
                    {
                        ?>
                        <select name="member_id" class="form-control">
                            <option value="">-------SELECT MEMBER ------</option>
                            
                            <?php
                            foreach($member_run as $member_item)
                            {
                                ?>
                                <option value="<?=$member_item['member_id']?>" <?= $member_item['member_id']==$complaint_row['member_id']?'selected':''?>> 
                                <?=$member_item['member_name']?></option>
                                <?php
                            }
                            ?>
                        </select>

                        <?php
                    }
                    else
                    {
                        ?>
                        <h5>NO MEMBER AVAILABLE</h5>
                        <?php
                    }
                    ?>
                </select>
               </div>    
               <div class="col-md-12 mb-3">
                           <label >COMPLAINT REPLY</label>
                           <input  type="text" name="complaint_reply" value="<?=$complaint_row['complaint_reply'];?>" required class="form-control">
                       </div>
                       <div class="col-md-12 mb-3">
            
                <label for="">COMPLAINT STATUS</label>
                <select name="complaint_status"  required class="form-control">
                    <option value="confirmed"  <?= $complaint_row['complaint_status']=='confirmed' ? 'selected':'' ?>>CONFIRMED</option>
                    <option  value="pending" <?= $complaint_row['complaint_status'] =='pending' ? 'selected':''?>>PENDING</option>
            </select>
        </div>
                <div class="col-md-12 mb-3">
                           <button type="submit" name="complaint-update"class="btn btn-primary">UPDATE COMPLAINT</button>       
                       </div>  
                       </div>
                   </form>
                   <?php
                        }
                    }
                    else
                    {
                        ?>
                        <h4>NO MEMBER RECORD FOUND</h4>
                        <?php
                    }
                
                ?>
    
            </div>
        </div>
    </div>
    </div>
</div>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>