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
                <h4>ADD SELL </h4>
                <a href="sell-view.php" class="btn btn-danger float-end">GO BACK</a>
            </div>
            <div class="card-body">
            <form action="code.php" method="POST" enctype="multipart/form-data">
                           
                           <div class="row">
                           
                           <div class="col-md-12 mb-3">
                               <label for="">SELL AMOUNT </label>
                               <input type="text" name="sell_amount"  required class="form-control">
                           </div>
                           
                       <div class="col-md-12 mb-3">
                        <label for="">MEMBER ID</label>
                    <?php
                    $member ="SELECT * FROM  member ";

                    $member_run = mysqli_query($con,$member);
                    if(mysqli_num_rows($member_run) > 0)
                    {
                        ?>
                        <select name="member_id" class="form-control">
                            <option value="">-------SELECT MEMBER------</option>
                            
                            <?php
                            foreach($member_run as $member_item)
                            {
                                ?>
                                <option value="<?=$member_item['member_id']?>"> <?=$member_item['member_name']?></option>
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
                               <input type="date" name="sell_date"  required class="form-control">
                           </div>
                           <div class="col-md-12 mb-3">
                           <label for="">IMAGE</label>
                               <input type="file" name="image"  required class="form-control">
                            </div>
                           
    <div class="col-md-12 mb-3">
                           <button type="submit" name="sell-add"class="btn btn-primary">ADD SELL</button>       
                       </div>  
                       </div>
                   </form>
            </div>
        </div>
    </div>
    </div>
</div>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>