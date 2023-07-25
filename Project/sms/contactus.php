<?php
SESSION_start();
include('admin/config/dbcon.php');
include('includes/header.php');

?>
 <div class="container-fluid px-4">

<div class="row mt-4">
<div class="col-md-12">
<?php include('message.php');  ?>  
    <div class="card">
        <div class="card-header">
            <h4>ADD CONTACT US </h4><a href="index.php" class="btn btn-danger float-end">GO BACK</a>
</div>
        <div class="card-body">
        <form action="contactuscode.php" method="POST">
                       
                       <div class="row">
                       
                       <div class="col-md-12 mb-3">
                           <label for="">NAME </label>
                           <input type="text" name="name"  required class="form-control">
                       </div>
                       <div class="col-md-12 mb-3">
                           <label for="">EMAIL </label>
                           <input type="text" name="email"  required class="form-control">
                       </div>
                       <div class="col-md-12 mb-3">
                       <label >MESSAGE</label>
                       <textarea type="text" name="message"  required class="form-control"></textarea>
                   </div>
                    
                     
                     <div class="col-md-12 mb-3">
                       <button type="submit" name="contactus-add" class="btn btn-primary">ADD CONTACT US</button>       
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

?>