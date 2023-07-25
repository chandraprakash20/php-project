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
            <h4>VIEW NOTICE </h4>
            <a href="index.php" class="btn btn-danger float-end">GO BACK</a>
        </div>
        <div class="card-body">
                      
        <div class="table-responsive">
            <table id="example2" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>NOTICE ID</th>
                    <th>NOTICE TITLE</th>
                    <th>NOTICE DESCRIPTION</th>
                    <th>Image</th>
                    <th>NOTICE DATE</th>
                    </tr>
                </thead>
                <tbody>
                <?php 

                    $notice="SELECT * FROM notice";
                    $notice_run=mysqli_query($con,$notice);
                    if(mysqli_num_rows($notice_run)>0)
                    {
                         foreach($notice_run as $notice)
                        {
                            ?>
                            <tr>
                            <td><?=$notice['notice_id'];?></td>
                            <td><?=$notice['notice_title'];?></td>
                            <td><?=$notice['notice_description'];?></td>    
                            <td>
                                
                                <img src="notice/<?=$notice['image'];?>" width="100px" height="100px"/>                                
                            </td>
                            <td><?=$timestamp=date("d-m-Y",strtotime($notice['notice_date']));?></td>
                            
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
include('admin/includes/scripts.php');
?>