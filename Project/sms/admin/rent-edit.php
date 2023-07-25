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
                <h4>EDIT RENT </h4>
                <a href="rent-view.php" class="btn btn-danger float-end">GO BACK</a>
            </div>
            <div class="card-body">

            <?php
                if(isset($_GET['rent_id']))
                {
                    $rent_id=$_GET['rent_id'];
                    $rent_query="SELECT * FROM rent WHERE rent_id='$rent_id' LIMIT 1";
                    
                    $rent_run=mysqli_query($con,$rent_query);
                    if(mysqli_num_rows($rent_run)>0)
                    {
                        $rent_row=mysqli_fetch_array($rent_run);
                      
                        
                        ?>

            <form action="code.php" method="POST" enctype="multipart/form-data">
            <div class="row">
            <div class="col-md-12 mb-3">
                <label for="">RENT ID</label>
                <input type="text" name="rent_id" value="<?= $rent_row['rent_id']?>"  required class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">RENT AMOUNT</label>
                <input type="text" name="rent_amount"   required class="form-control" value="<?= $rent_row['rent_amount']?>">
            </div>
            <div class="col-md-12 mb-3">
                        <label for="">MEMBER LIST</label>
                    <?php
                    $member ="SELECT * FROM  member ";

                    $member_run = mysqli_query($con,$member);
                    if(mysqli_num_rows($member_run) > 0)
                    {
                        ?>
                        <select name="member_id" class="form-control">
                            <option value="">-------SELECT MEMBER ------</option>
                            
                            <?php
                            foreach($member_run as $member_item)
                            {
                                ?>
                                <option value="<?=$member_item['member_id']?>" <?= $member_item['member_id']==$rent_row['member_id']?'selected':''?>> 
                                <?=$member_item['member_name']?></option>
                                <?php
                            }
                            ?>
                        </select>

                        <?php
                    }
                    else
                    {
                        ?>
                        <h5>NO MEMBER AVAILABLE</h5>
                        <?php
                    }
                    ?>
                </select>
               </div>
            
            <div class="col-md-12 mb-3">
                <label for="">RENT DATE</label>
                <input type="date" name="rent_date" value="<?= $timestamp=date("Y-m-d",strtotime($rent_row['rent_date']));?>"  required class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Image</label>
                <img src="../rent/<?= $rent_row['image']?>" width="100px" height="100px"/>
                <input type="file" name="image" value="<?= $rent_row['image']; ?>" required class="form-control">
                
            </div>
            <div class="col-md-12 mb-3">
            <button type="submit" name="rent-update" class="btn btn-primary">UPDATE RENT</button>       
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