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
            <h4>VIEW SOCIETY RULES </h4>
            <a href="index.php" class="btn btn-danger float-end">GO BACK</a>
        </div>
        <div class="card-body">
                      
        <div class="table-responsive">
            <table id="example2" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>SOCIETY ID</th>
                    <th>SOCIETY DESCRIPTION</th>
                    
                    </tr>
                </thead>
                <tbody>
                <?php 

                    $society="SELECT * From society_rules ";
                    $society_run=mysqli_query($con,$society);
                    if(mysqli_num_rows($society_run)>0)
                    {
                         foreach($society_run as $society)
                        {
                            ?>
                            <tr>
                            <td><?=$society['society_id'];?></td>
                            <td><?=$society['society_description'];?></td>
                            
                        
                        </tr>
                            <?php

                        }
                    }
                    else
                    {
                        ?>
                        <tr>
                        <td colspan="4">No Record Found</td>
                        
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