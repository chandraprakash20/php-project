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
                <h4>ADD MEMBER </h4>
                <a href="member-view.php" class="btn btn-danger float-end">GO BACK</a>
            </div>
            <div class="card-body">
            <form action="code.php" method="POST">
                           
                           <div class="row">
                           <div class="col-md-12 mb-3">
                               <label for="">MEMBER NAME </label>
                               <input type="text" name="member_name"  required class="form-control">
                           </div>
                           <div class="col-md-12 mb-3">
                           <label >MEMBER EMAIL ID</label>
                           <input  type="email" name="member_email"  required class="form-control">
                       </div>
                        <div class="col-md-12 mb-3">
                           <label >MEMBER PASSWORD</label>
                           <input  type="password" name="member_password" required class="form-control">
                       </div>
                       <div class="col-md-12 mb-3">
                           <label >MEMBER CONTACT NO</label>
                           <input  type="text" name="member_contact_no" required class="form-control">
                       </div>
                       <div class="col-md-12 mb-3">
                        <label for="">HOUSE LIST</label>
                    <?php
                    $house ="SELECT * FROM  house ";

                    $house_run = mysqli_query($con,$house);
                    if(mysqli_num_rows($house_run) > 0)
                    {
                        ?>
                        <select name="house_id" class="form-control">
                            <option value="">-------SELECT HOUSE------</option>
                            
                            <?php
                            foreach($house_run as $house_item)
                            {
                                ?>
                                <option value="<?=$house_item['house_id']?>"> <?=$house_item['house_no']?></option>
                                <?php
                            }
                            ?>
                        </select>

                        <?php
                    }
                    else
                    {
                        ?>
                        <h5>NO HOUSE AVAILABLE</h5>
                        <?php
                    }
                    ?>
                </select>
               </div>    
    <div class="col-md-12 mb-3">
                           <button type="submit" name="member-add"class="btn btn-primary">ADD MEMBER</button>       
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