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
                <h4>EDIT COMMITTEE MEMBERS</h4>
                <a href="committee-view.php" class="btn btn-danger float-end">GO BACK</a>
            </div>
            <div class="card-body">

            <?php
                if(isset($_GET['committee_id']))
                {
                    $committee_id=$_GET['committee_id'];
                    $committee_query="SELECT * FROM committee_members WHERE committee_id='$committee_id' LIMIT 1";
                    
                    $committee_run=mysqli_query($con,$committee_query);
                    if(mysqli_num_rows($committee_run)>0)
                    {
                        $committee_row=mysqli_fetch_array($committee_run);
                      
                        
                        ?>

            <form action="code.php" method="POST" enctype="multipart/form-data">
            <div class="row">
            <div class="col-md-12 mb-3">
                <label for="">COMMITTEE ID</label>
                <input type="text" name="committee_id" value="<?= $committee_row['committee_id']?>"  required class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">MEMBER NAME</label>
                <input type="text" name="member_name"   required class="form-control" value="<?= $committee_row['member_name']?>">
            </div>
            
            <div class="col-md-12 mb-3">
                <label for="">Image</label>
                <img src="../committee/<?= $committee_row['image']?>" width="100px" height="100px"/>
                <input type="file" name="image" value="<?= $committee_row['image']; ?>" required class="form-control">
                
            </div>
            <div class="col-md-12 mb-3">
                <label for="">MEMBER CONTACT NO</label>
                <input type="text" name="member_contact_no"   required class="form-control" value="<?= $committee_row['member_contact_no']?>">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">DESIGNATION</label>
                <input type="text" name="designation"   required class="form-control" value="<?= $committee_row['designation']?>">
            </div>
            <div class="col-md-12 mb-3">
            <button type="submit" name="committee-update" class="btn btn-primary">UPDATE COMMITTEE MEMBERS</button>       
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