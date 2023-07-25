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
                <h4>VIEW COMMITTEE MEMBERS </h4>
                <a href="committee-add.php" class="btn btn-primary float-end">ADD COMMITTEE MEMBERS</a>
            </div>
            <div class="card-body">
                          
            <div class="table-responsive">
                <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th>COMMITTEE ID</th>
                        <th>MEMBER NAME</th>
                        <th>IMAGE</th>
                        <th>MEMBER CONTACT NO</th>
                        <th>DESIGNATION</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 

                        $committee="SELECT * From committee_members ";
                        $committee_run=mysqli_query($con,$committee);
                        if(mysqli_num_rows($committee_run)>0)
                        {
                             foreach($committee_run as $committee)
                            {
                                ?>
                                <tr>
                                <td><?=$committee['committee_id'];?></td>
                                <td><?=$committee['member_name'];?></td>    
                                
                                <td>
                                    <img src="../committee/<?=$committee['image'];?>" width="100px" height="100px"/>
                                </td>
                                <td><?=$committee['member_contact_no'];?></td>
                                <td><?=$committee['designation'];?></td>
                                
                                <td><a href="committee-edit.php?committee_id=<?=$committee['committee_id']?>" class="btn btn-info">EDIT</a></td>
                                <td>
                                    <form action="code.php" method="POST">
                                    <button type="submit" name="committee-delete" value="<?=$committee['committee_id'];?>"class="btn btn-danger">DELETE</button>
                                
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
                            <td colspan="7">No Record Found</td>
                            
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