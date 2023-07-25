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
                <h4>EDIT NOTICE </h4>
                <a href="notice-view.php" class="btn btn-danger float-end">GO BACK</a>
            </div>
            <div class="card-body">

            <?php
                if(isset($_GET['notice_id']))
                {
                    $notice_id=$_GET['notice_id'];
                    $notice_query="SELECT * FROM notice WHERE notice_id='$notice_id' LIMIT 1";
                    
                    $notice_run=mysqli_query($con,$notice_query);
                    if(mysqli_num_rows($notice_run)>0)
                    {
                        $notice_row=mysqli_fetch_array($notice_run);

                        ?>

            <form action="code.php" method="POST" enctype="multipart/form-data">
            <div class="row">
            <div class="col-md-12 mb-3">
                <label for="">NOTICE ID</label>
                <input type="text" name="notice_id" value="<?= $notice_row['notice_id']?>"  required class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">NOTICE TITLE</label>
                <input type="text" name="notice_title" value="<?= $notice_row['notice_title']?>"  required class="form-control">
            </div>
            
            <div class="col-md-12 mb-3">
                <label for="">NOTICE DESCRIPTION</label>
                <textarea type="text" name="notice_description"   required class="form-control"> <?= $notice_row['notice_description']?></textarea>
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Image</label>
                <img src="../notice/<?= $notice_row['image']?>" width="100px" height="100px"/>
                <input type="file" name="image"  value="<?= $notice_row['image']; ?>" required class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">NOTICE DATE</label>
                <input type="date" name="notice_date" value="<?=$timestamp=date("Y-m-d",strtotime($notice_row['notice_date']));?>"  required class="form-control">
            </div>
            <div class="col-md-12 mb-3">
            <button type="submit" name="notice-update" class="btn btn-primary">UPDATE NOTICE</button>       
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