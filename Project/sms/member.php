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
            <h4>Register Account </h4>
            <a href="index.php" class="btn btn-danger float-end">GO BACK</a>
        </div>
        <div class="card-body">
        <form action="membercode.php" method="POST">
                       
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
                       <button type="submit" name="member"class="btn btn-primary">ADD MEMBER</button>       
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