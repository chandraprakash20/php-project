<?php
SESSION_start();
include('admin/config/dbcon.php');
include('includes/header.php');

?>
 <div class="container-fluid px-4">

    <div class="row mt-4">
    <div class="col-md-12">
    <?php include('message.php');  ?>  
        <div class="card">
            <div class="card-header">
                <h4>ADD COMPLAINT </h4>
                <a href="index.php" class="btn btn-danger float-end">GO BACK</a>
            </div>
            <div class="card-body">
            <form action="complaintcode.php" method="POST">
                           
                           <div class="row">
                           <div class="col-md-12 mb-3">
                               <label for="">COMPLAINT ID</label>
                               <input type="text" name="complaint_id"   class="form-control">
                           </div>
                           <div class="col-md-12 mb-3">
                               <label for="">COMPLAINT SUBJECT </label>
                               <input type="text" name="complaint_subject"  required class="form-control">
                           </div>
                           <div class="col-md-12 mb-3">
                           <label >COMPLAINT DESCRIPTION</label>
                           <textarea name="complaint_description"  required class="form-control" rows=""></textarea>
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
                            <option value="">-------SELECT MEMBER------</option>
                            
                            <?php
                            foreach($member_run as $member_item)
                            {
                                ?>
                                <option value="<?=$member_item['member_id']?>"> <?=$member_item['member_name']?></option>
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
                           <button type="submit" name="complaint-add"class="btn btn-primary">ADD COMPLAINT</button>       
                       </div>  
                       </div>
                   </form>
            </div>
        </div>
    </div>
    </div>
</div>
<?php
include('includes/footer.php');

?>