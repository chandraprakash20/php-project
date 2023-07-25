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
                <h4>VIEW COMPLAINT </h4>
                <a href="complaint-add.php" class="btn btn-primary float-end">ADD COMPLAINT</a>
            </div>
            <div class="card-body">
                          
            <div class="table-responsive">
                <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th>COMPLAINT ID</th>
                        <th>COMPLAINT SUBJECT</th>
                        <th>COMPLAINT DESCRIPTION</th>
                        <th>MEMBER ID</th>
                        <th>COMPLAINT REPLY</th>
                        <th>COMPLAINT STATUS</th>
                        
                        <th>EDIT</th>
                        <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $complaint="SELECT c.*,m.member_name AS member_name From complaint c,member m  WHERE m.member_id=c.member_id ";
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
                                    
                                <td><a href="complaint-edit.php?complaint_id=<?=$complaint['complaint_id']?>" class="btn btn-info">EDIT</a></td>
                                <td>
                                    <form action="code.php" method="POST">
                                    <button type="submit" name="complaint-delete" value="<?=$complaint['complaint_id'];?>"class="btn btn-danger">DELETE</button>
                                
                                    </form>
                                    </td>
                            </tr>
                                <?php

                            }
                        }
                        else
                        {
                            ?>
                            <tr>
                            <td colspan="9">No Record Found</td>
                            
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
include('includes/scripts.php');
?>