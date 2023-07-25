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
                <h4>VIEW EVENT </h4>
                <a href="event-add.php" class="btn btn-primary float-end">ADD EVENT</a>
            </div>
            <div class="card-body">
                          
            <div class="table-responsive">
                <table  id="example2"class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th>EVENT ID</th>
                        <th>EVENT SUBJECT</th>
                        <th>EVENT DESCRIPTION</th>
                        <th>Image</th>
                        <th>EVENT DATE</th>
                        <th>EVENT STATUS</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
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
                                    <img src="../event/<?=$event['image'];?>" width="100px" height="100px"/>
                                </td>
                                <td><?= $timestamp=date("d-m-Y",strtotime($event['event_date']));?></td>
                                <td><?=$event['event_status'];?></td>
                                <td><a href="event-edit.php?event_id=<?=$event['event_id']?>" class="btn btn-info">EDIT</a></td>
                                <td>
                                    <form action="code.php" method="POST">
                                    <button type="submit" name="event-delete" value="<?=$event['event_id'];?>"class="btn btn-danger">DELETE</button>
                                
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