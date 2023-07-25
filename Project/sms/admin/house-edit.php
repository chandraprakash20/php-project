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
                <h4>EDIT HOUSE </h4>
                <a href="house-view.php" class="btn btn-danger float-end">GO BACK</a>
            </div>
            <div class="card-body">

            <?php
                if(isset($_GET['house_id']))
                {
                    $house_id=$_GET['house_id'];
                    $house_query="SELECT * FROM house WHERE house_id='$house_id' LIMIT 1";
                    
                    $house_run=mysqli_query($con,$house_query);
                    if(mysqli_num_rows($house_run)>0)
                    {
                        $house_row=mysqli_fetch_array($house_run);

                        ?>

            <form action="code.php" method="POST" enctype="multipart/form-data">
            <div class="row">
            <div class="col-md-12 mb-3">
                <label for="">HOUSE ID</label>
                <input type="text" name="house_id" value="<?= $house_row['house_id']?>"  required class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">HOUSE NO</label>
                <input type="text" name="house_no" value="<?= $house_row['house_no']?>"  required class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Image</label>
                <img src="../house/<?= $house_row['image']?>" width="100px" height="100px"/>
                <input type="file" name="image" value="<?= $house_row['image']; ?>" required class="form-control">
                
            </div>
        
            <div class="col-md-12 mb-3">
                               <label for="">House Type</label>
                               <select name="house_type" required class="form-control">
                                   <option value="">---Select----</option>
                                   <option value="1BHK" <?= $house_row['house_type'] =='1BHK' ? 'selected':''?> >1BHK</option>
                                   <option value="2BHK" <?= $house_row['house_type'] =='2BHK' ? 'selected':''?>>2BHK</option>
                           </select>
                       </div>
          <div class="col-md-12 mb-3">
            <button type="submit" name="house-update" class="btn btn-primary">UPDATE HOUSE</button>       
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