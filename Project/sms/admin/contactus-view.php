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
                <h4>VIEW CONTACT US </h4>
                <a href="contactus-add.php" class="btn btn-primary float-end">ADD CONTACT US</a>
            </div>
            <div class="card-body">
                          
            <div class="table-responsive">
                <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th>CONTACT US ID</th>
                        <th> NAME</th>
                        <th> EMAIL</th>
                        <th> MESSAGE</th>
                        <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $contactus="SELECT * From contactus ";
                        $contactus_run=mysqli_query($con,$contactus);
                        if(mysqli_num_rows($contactus_run)>0)
                        {
                             foreach($contactus_run as $contactus)
                            {
                                ?>
                                <tr>
                                <td><?=$contactus['contactus_id'];?></td>
                                <td><?=$contactus['name'];?></td>
                                <td><?=$contactus['email'];?></td>
                                <td><?=$contactus['message'];?></td>
                                <td>
                                    <form action="code.php" method="POST">
                                    <button type="submit" name="contactus-delete" value="<?=$contactus['contactus_id'];?>"class="btn btn-danger">DELETE</button>
                                
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
                            <td colspan="5">No Record Found</td>
                            
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