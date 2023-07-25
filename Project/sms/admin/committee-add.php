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
                <h4>ADD COMMITTEE MEMBERS</h4>
                <a href="committee-view.php" class="btn btn-danger float-end">GO BACK</a>
            </div>
            <div class="card-body">
            <form action="code.php" method="POST" enctype="multipart/form-data">
                           
                           <div class="row">
                           
                           <div class="col-md-12 mb-3">
                               <label for="">MEMBER NAME </label>
                               <input type="text" name="member_name"  required class="form-control">
                           </div>
                           <div class="col-md-12 mb-3">
                           <label for="">IMAGE</label>
                               <input type="file" name="image"  required class="form-control">
                            </div>
                           
                           <div class="col-md-12 mb-3">
                               <label for="">MEMBER CONTACT NO </label>
                               <input type="text" name="member_contact_no"  required class="form-control">
                           </div>
                           <div class="col-md-12 mb-3">
                               <label for="">DESIGNATION </label>
                               <input type="text" name="designation"  required class="form-control">
                           </div>
                           
                           
                        <div class="col-md-12 mb-3">
                           <button type="submit" name="committee-add"class="btn btn-primary">ADD COMMITTEE MEMBERS</button>       
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