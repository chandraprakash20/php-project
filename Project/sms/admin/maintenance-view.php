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
                <h4>VIEW MAINTENANCE </h4>
                <a href="maintenance-add.php" class="btn btn-primary float-end">ADD MAINTENANCE</a>
            </div>
            <div class="card-body">
                          
            <div class="table-responsive">
                <table  id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th>MAINTENANCE ID</th>
                        <th>MAINTENANCE YEAR</th>
                        <th>MAINTENANCE MONTH</th>
                        <th>MAINTENANCE CHARGES</th>
                        <th>MAINTENANCE TITLE</th>
                        <th>MAINTENANCE DESCRIPTION</th>
                        <th>MAINTENANCE STATUS</th>
                        <th>MAINTENANCE DATE</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 

                        $maintenance="SELECT * FROM maintenance";
                        $maintenance_run=mysqli_query($con,$maintenance);
                        if(mysqli_num_rows($maintenance_run)>0)
                        {
                             foreach($maintenance_run as $maintenance)
                            {
                                ?>
                                <tr>
                                <td><?=$maintenance['maintenance_id'];?></td>
                                <td><?= $timestamp=date("Y",strtotime($maintenance['maintenance_year']));?></td>
                                <td><?= $timestamp=date("m",strtotime($maintenance['maintenance_month']));?></td>
                                <td><?=$maintenance['maintenance_charges'];?></td>
                                <td><?=$maintenance['maintenance_title'];?></td>
                                <td><?=$maintenance['maintenance_description'];?></td>    
                                <td><?=$maintenance['maintenance_status'];?></td>
                                <td><?= $timestamp=date("d-m-Y",strtotime($maintenance['maintenance_date']));?></td>
                                <td><a href="maintenance-edit.php?maintenance_id=<?=$maintenance['maintenance_id']?>" class="btn btn-info">EDIT</a></td>
                                <td>
                                    <form action="code.php" method="POST">
                                    <button type="submit" name="maintenance-delete" value="<?=$maintenance['maintenance_id'];?>"class="btn btn-danger">DELETE</button>
                                
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
                            <td colspan="10">No Record Found</td>
                            
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