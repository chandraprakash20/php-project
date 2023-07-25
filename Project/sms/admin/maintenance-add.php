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
                <h4>ADD MAINTENANCE </h4>
                <a href="maintenance-view.php" class="btn btn-danger float-end">GO BACK</a>
            </div>
            <div class="card-body">
            <form action="code.php" method="POST" enctype="multipart/form-data">
                           
                           <div class="row">
                           
                           <div class="col-md-12 mb-3">
                               <label for="">MAINTENANCE YEAR</label>
                               <input type="date" name="maintenance_year"  required class="form-control">
                           </div>
                           <div class="col-md-12 mb-3">
                               <label for="">MAINTENANCE MONTH</label>
                               <input type="date" name="maintenance_month"  required class="form-control">
                           </div>
                           <div class="col-md-12 mb-3">
                               <label for="">MAINTENANCE CHARGES</label>
                               <input type="text" name="maintenance_charges"  required class="form-control">
                           </div>
                           <div class="col-md-12 mb-3">
                               <label for="">MAINTENANCE TITLE</label>
                               <select name="maintenance_title"  required class="form-control">
                                   <option value="">---SELECT  MAINTENANCE----</option>
                                   <option value="sweepers salary">SWEEPERS SALARY</option>
                                   <option value="watchman salary">WATCHMAN SALARY</option>
                                   <option value="street lights bill">STREET LIGHTS BILL</option>
                                   <option value="water bill">WATER BILL</option>
                                   <option value="maintenance">MAINTENANCE</option>
                           </select>
                       </div>
                           <div class="col-md-12 mb-3">
                               <label for="">MAINTENANCE DESCRIPTION</label>
                               <textarea type="text" name="maintenance_description"  required class="form-control"></textarea>
                           </div>
                           <div class="col-md-12 mb-3">
                               <label for="">MAINTENANCE STATUS</label>
                               <select name="maintenance_status"   class="form-control">
                                   <option value="">---SELECT   STATUS----</option>
                                   <option value="pending">PENDING</option>
                                   <option value="confirmed">CONFIRMED</option>
                                   
                           </select>
                       </div>
                           
                            <div class="col-md-12 mb-3">
                               <label for="">MAINTENANCE DATE</label>
                               <input type="date" name="maintenance_date"  required class="form-control">
                           </div>
                           
                           <div class="col-md-12 mb-3">
                           <button type="submit" name="maintenance-add"class="btn btn-primary">ADD MAINTENANCE</button>       
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