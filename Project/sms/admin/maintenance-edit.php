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
                <h4>EDIT MAINTENANCE </h4>
                <a href="maintenance-view.php" class="btn btn-danger float-end">GO BACK</a>
            </div>
            <div class="card-body">

            <?php
                if(isset($_GET['maintenance_id']))
                {
                    $maintenance_id=$_GET['maintenance_id'];
                    $maintenance_query="SELECT * FROM maintenance WHERE maintenance_id='$maintenance_id' LIMIT 1";
                    
                    $maintenance_run=mysqli_query($con,$maintenance_query);
                    if(mysqli_num_rows($maintenance_run)>0)
                    {
                        $maintenance_row=mysqli_fetch_array($maintenance_run);
                      
                        
                        ?>

            <form action="code.php" method="POST" enctype="multipart/form-data">
            <div class="row">
            <div class="col-md-12 mb-3">
                <label for="">MAINTENANCE ID</label>
                <input type="text" name="maintenance_id" value="<?= $maintenance_row['maintenance_id']?>"  required class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">MAINTENANCE YEAR</label>
                <input type="date" name="maintenance_year" value="<?= $timestamp=date("Y-m-d",strtotime($maintenance_row['maintenance_year']));?>"  required class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">MAINTENANCE MONTH</label>
                <input type="date" name="maintenance_month" value="<?= $timestamp=date("Y-m-d",strtotime($maintenance_row['maintenance_month']));?>"  required class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">MAINTENANCE CHARGES</label>
                <input type="text" name="maintenance_charges" value="<?= $maintenance_row['maintenance_charges']?>"  required class="form-control">
            </div>
            <div class="col-md-12 mb-3">
            <label for="">MAINTENANCE TITLE</label>
            <select name="maintenance_title"  required class="form-control">
            <option value="">---SELECT  MAINTENANCE----</option>
            <option value="sweepers salary" <?= $maintenance_row['maintenance_title'] =='sweepers salary' ? 'selected':''?>>SWEEPERS SALARY</option>
            <option value="watchman salary" <?= $maintenance_row['maintenance_title'] =='watchman salary' ? 'selected':''?>>WATCHMAN SALARY</option>
            <option value="street lights bill" <?= $maintenance_row['maintenance_title'] =='street lights bill' ? 'selected':''?>>STREET LIGHTS BILL</option>
            <option value="water bill" <?= $maintenance_row['maintenance_title'] =='water bill' ? 'selected':''?>>WATER BILL</option>
            <option value="maintenance" <?= $maintenance_row['maintenance_title'] =='maintenance' ? 'selected':''?>>MAINTENANCE</option>
            </select>
            </div>
            <div class="col-md-12 mb-3">
                <label for="">MAINTENANCE DESCRIPTION</label>
                <textarea type="text" name="maintenance_description"   required class="form-control"> <?= $maintenance_row['maintenance_description']?></textarea>
            </div>
            <div class="col-md-12 mb-3">
            <label for="">MAINTENANCE STATUS</label>
            <select name="maintenance_status" required class="form-control">
            <option value="">---SELECT  MAINTENANCE----</option>
            <option value="pending" <?= $maintenance_row['maintenance_status'] =='pending' ? 'selected':''?> >PENDING</option>
            <option value="confirmed" <?= $maintenance_row['maintenance_status'] =='confirmed' ? 'selected':''?>>CONFIRMED</option>
            </select>
            </div>
            <div class="col-md-12 mb-3">
                <label for="">MAINTENANCE DATE</label>
                <input type="date" name="maintenance_date" value="<?= $timestamp=date("Y-m-d",strtotime($maintenance_row['maintenance_date']));?>"  required class="form-control">
            </div>
            <div class="col-md-12 mb-3">
            <button type="submit" name="maintenance-update" class="btn btn-primary">UPDATE MAINTENANCE</button>       
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