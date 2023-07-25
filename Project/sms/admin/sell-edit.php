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
                <h4>EDIT SELL </h4>
                <a href="sell-view.php" class="btn btn-danger float-end">GO BACK</a>
            </div>
            <div class="card-body">

            <?php
                if(isset($_GET['sell_id']))
                {
                    $sell_id=$_GET['sell_id'];
                    $sell_query="SELECT * FROM sell WHERE sell_id='$sell_id' LIMIT 1";
                    
                    $sell_run=mysqli_query($con,$sell_query);
                    if(mysqli_num_rows($sell_run)>0)
                    {
                        $sell_row=mysqli_fetch_array($sell_run);
                      
                        
                        ?>

            <form action="code.php" method="POST" enctype="multipart/form-data">
            <div class="row">
            <div class="col-md-12 mb-3">
                <label for="">SELL ID</label>
                <input type="text" name="sell_id" value="<?= $sell_row['sell_id']?>"  required class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">SELL AMOUNT</label>
                <input type="text" name="sell_amount"   required class="form-control" value="<?= $sell_row['sell_amount']?>">
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
                                <option value="<?=$member_item['member_id']?>" <?= $member_item['member_id']==$sell_row['member_id']?'selected':''?>> 
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
                <label for="">SELL DATE</label>
                <input type="date" name="sell_date" value="<?= $timestamp=date("Y-m-d",strtotime($sell_row['sell_date']));?>"  required class="form-control">
            </div>
            <div class="col-md-12 mb-3">
                <label for="">Image</label>
                <img src="../sell/<?= $sell_row['image']?>" width="100px" height="100px"/>
                <input type="file" name="image" value="<?= $sell_row['image']; ?>" required class="form-control">
                
            </div>
            <div class="col-md-12 mb-3">
            <button type="submit" name="sell-update" class="btn btn-primary">UPDATE SELL</button>       
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