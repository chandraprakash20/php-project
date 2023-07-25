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
                <h4>EDIT SOCIETY RULES </h4>
                <a href="societyrules-view.php" class="btn btn-danger float-end">GO BACK</a>
            </div>
            <div class="card-body">

            <?php
                if(isset($_GET['society_id']))
                {
                    $society_id=$_GET['society_id'];
                    $society_query="SELECT * FROM society_rules WHERE society_id='$society_id' LIMIT 1";
                    
                    $society_run=mysqli_query($con,$society_query);
                    if(mysqli_num_rows($society_run)>0)
                    {
                        $society_row=mysqli_fetch_array($society_run);
                      
                        
                        ?>

            <form action="code.php" method="POST" enctype="multipart/form-data">
            <div class="row">
            <div class="col-md-12 mb-3">
                <label for="">SOCIETY ID</label>
                <input type="text" name="society_id" value="<?= $society_row['society_id']?>"  required class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">SOCIETY DESCRIPTION</label>
                <textarea type="text" name="society_description"   required class="form-control" ><?= $society_row['society_description']?></textarea>
            </div>
            
            <div class="col-md-12 mb-3">
            <button type="submit" name="society-update" class="btn btn-primary">UPDATE SOCIETY RULES</button>       
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