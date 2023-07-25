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
            <h4>VIEW EVENT </h4>
            <a href="event.php" class="btn btn-primary float-end">ADD EVENT</a>
            <a href="index.php" class="btn btn-danger float-end">GO BACK</a>
        </div>
        <div class="card-body">
                      
        <div class="table-responsive">
            <table id="example2" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>EVENT ID</th>
                    <th>EVENT SUBJECT</th>
                    <th>EVENT DESCRIPTION</th>
                    <th>Image</th>
                    <th>EVENT DATE</th>
                    <th>EVENT STATUS</th>
                    </tr>
                </thead>
                <tbody>
                <?php 

                    $event="SELECT * FROM event";
                    $event_run=mysqli_query($con,$event);
                    if(mysqli_num_rows($event_run)>0)
                    {
                         foreach($event_run as $event)
                        {
                            ?>
                            <tr>
                            <td><?=$event['event_id'];?></td>
                            <td><?=$event['event_subject'];?></td>
                            <td><?=$event['event_description'];?></td>    
                            <td>
                                <img src="event/<?=$event['image'];?>" width="100px" height="100px"/>
                            </td>
                            <td><?= $timestamp=date("d-m-Y",strtotime($event['event_date']));?></td>
                            <td><?=$event['event_status'];?></td>
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