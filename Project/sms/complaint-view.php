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
            <h4>VIEW COMPLAINT </h4>
            <a href="complaint.php" class="btn btn-primary float-end">ADD COMPLAINT</a>
            <a href="index.php" class="btn btn-danger float-end">GO BACK</a>
        </div>
        <div class="card-body">
                      
        <div class="table-responsive">
            <table  id="example2" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>COMPLAINT ID</th>
                    <th>COMPLAINT SUBJECT</th>
                    <th>COMPLAINT DESCRIPTION</th>
                    <th>MEMBER ID</th>
                    <th>COMPLAINT REPLY</th>
                    <th>COMPLAINT STATUS</th>
                    
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $complaint="SELECT c.*,m.member_id AS member_name From complaint c,member m  WHERE m.member_id=c.member_id ";
                    $complaint_run=mysqli_query($con,$complaint);
                    if(mysqli_num_rows($complaint_run)>0)
                    {
                         foreach($complaint_run as $complaint)
                        {
                            ?>
                            <tr>
                            <td><?=$complaint['complaint_id'];?></td>
                            <td><?=$complaint['complaint_subject'];?></td>
                            <td><?=$complaint['complaint_description'];?></td>
                            <td><?=$complaint['member_name'];?></td>
                            <td><?=$complaint['complaint_reply'];?></td>
                            <td><?=$complaint['complaint_status'];?></td>
                                
                            
                        </tr>
                            <?php

                        }
                    }
                    else
                    {
                        ?>
                        <tr>
                        <td colspan="6">No Record Found</td>
                        
                    </tr>
                        <?php

                    }
                    ?>
                    
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
</div>
</div>
<?php
include('includes/footer.php');
include('admin/includes/scripts.php');
?>