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
                <h4>VIEW MEMBER </h4>
                <a href="member-add.php" class="btn btn-primary float-end">ADD MEMBER</a>
            </div>
            <div class="card-body">
                          
            <div class="table-responsive">
                <table  id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th>MEMBER ID</th>
                        <th>MEMBER NAME</th>
                        <th>MEMBER EMAIL</th>
                        <th>MEMBER PASSWORD</th>
                        <th>MEMBER CONTACT NO</th>
                        <th>HOUSE ID</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $member="SELECT m.*,h.house_no AS house_no From member m,house h  WHERE h.house_id=m.house_id ";
                        $member_run=mysqli_query($con,$member);
                        if(mysqli_num_rows($member_run)>0)
                        {
                             foreach($member_run as $member)
                            {
                                ?>
                                <tr>
                                <td><?=$member['member_id'];?></td>
                                <td><?=$member['member_name'];?></td>
                                <td><?=$member['member_email'];?></td>
                                <td><?=$member['member_password'];?></td>
                                <td><?=$member['member_contact_no'];?></td>
                                <td><?=$member['house_no'];?></td>    
                                <td><a href="member-edit.php?member_id=<?=$member['member_id']?>" class="btn btn-info">EDIT</a></td>
                                <td>
                                    <form action="code.php" method="POST">
                                    <button type="submit" name="member-delete" value="<?=$member['member_id'];?>"class="btn btn-danger">DELETE</button>
                                
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
                            <td colspan="8">No Record Found</td>
                            
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