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
                <h4>ADD HOUSE </h4>
                <a href="house-view.php" class="btn btn-danger float-end">GO BACK</a>
            </div>
            <div class="card-body">
            <form action="code.php" method="POST" enctype="multipart/form-data">
                           
                           <div class="row">
                          
                           <div class="col-md-12 mb-3">
                               <label for="">HOUSE NO</label>
                               <input type="text" name="house_no"  required class="form-control">
                           </div>
                           <div class="col-md-12 mb-3">
                           <label for="">IMAGE</label>
                               <input type="file" name="image"  required class="form-control">
                            </div><div class="col-md-12 mb-3">
                           
                               <label for="">HOUSE TYPE</label>
                               <select name="house_type"  required class="form-control">
                                   <option value="">---SELECT  HOUSE TYPE----</option>
                                   <option value="1bhk">1BHK</option>
                                   <option value="2bhk">2BHK</option>
                           </select>
                       </div>
                           <div class="col-md-12 mb-3">
                           <button type="submit" name="house-add"class="btn btn-primary">ADD HOUSE</button>       
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