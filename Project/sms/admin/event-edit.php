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
                <h4>EDIT EVENT </h4>
                <a href="event-view.php" class="btn btn-danger float-end">GO BACK</a>
            </div>
            <div class="card-body">

            <?php
                if(isset($_GET['event_id']))
                {
                    $event_id=$_GET['event_id'];
                    $event_query="SELECT * FROM event WHERE event_id='$event_id' LIMIT 1";
                    
                    $event_run=mysqli_query($con,$event_query);
                    if(mysqli_num_rows($event_run)>0)
                    {
                        $event_row=mysqli_fetch_array($event_run);
                      
                        
                        ?>

            <form action="code.php" method="POST" enctype="multipart/form-data">
            <div class="row">
            <div class="col-md-12 mb-3">
                <label for="">EVENT ID</label>
                <input type="text" name="event_id" value="<?= $event_row['event_id']?>"  required class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                               <label for="">EVENT SUBJECT</label>
                               <select name="event_subject" required class="form-control">
                                   <option value="">---SELECT  EVENTS----</option>
                                   <option value="marriage ceremony" <?= $event_row['event_subject'] =='marriage ceremony' ? 'selected':''?> >Marriage Ceremony</option>
                                   <option value="birthday ceremony" <?= $event_row['event_subject'] =='birthday ceremony' ? 'selected':''?>>Birthday Ceremony</option>
                                   <option value="ring ceremony" <?= $event_row['event_subject'] =='ring ceremony' ? 'selected':''?>>Ring Ceremony</option>
                                   <option value="baby shower ceremony" <?= $event_row['event_subject'] ==' baby shower ceremony' ? 'selected':''?>>Baby Shower Ceremony</option>
                           </select>
                       </div>
          
            <div class="col-md-12 mb-3">
                <label for="">EVENT DESCRIPTION</label>
                <textarea type="text" name="event_description"   required class="form-control"> <?= $event_row['event_description']?></textarea>
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Image</label>
                <img src="../event/<?= $event_row['image']?>" width="100px" height="100px"/>
                <input type="file" name="image" value="<?= $event_row['image']; ?>" required class="form-control">
                
            </div>
            <div class="col-md-12 mb-3">
                <label for="">EVENT DATE</label>
                <input type="date" name="event_date" value="<?= $timestamp=date("Y-m-d",strtotime($event_row['event_date']));?>"  required class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                               <label for="">EVENT STATUS</label>
                               <select name="event_status" required class="form-control">
                                   <option value="">---STATUS----</option>
                                   <option value="pending" <?= $event_row['event_status'] =='pending' ? 'selected':''?> >PENDING</option>
                                   <option value="confirmed" <?= $event_row['event_status'] =='confirmed' ? 'selected':''?>>CONFIRMED</option>
                           </select>
                       </div>
          
            <div class="col-md-12 mb-3">
            <button type="submit" name="event-update" class="btn btn-primary">UPDATE EVENT</button>       
        </div>  
        </div>
    </form>
    <?php
                        }
                    }
                    else
                    {
                        ?>
                        <h4>No Record Found</h4>
                        <?php
                    }
                
                ?>
    
            </div>
        </div>
    </div>
    </div>
</div>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>