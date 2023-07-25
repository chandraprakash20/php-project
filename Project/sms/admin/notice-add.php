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
                <h4>ADD NOTICE </h4>
                <a href="notice-view.php" class="btn btn-danger float-end">GO BACK</a>
            </div>
            <div class="card-body">
            <form action="code.php" method="POST" enctype="multipart/form-data">
                           
                           <div class="row">
                           <div class="col-md-12 mb-3">
                               
                           <div class="col-md-12 mb-3">
                               <label for="">NOTICE TITLE</label>
                               <input type="text" name="notice_title"  required class="form-control">
                           </div>
                           <div class="col-md-12 mb-3">
                           <div class="col-md-12 mb-3">
                               <label for="">NOTICE DESCRIPTION</label>
                               <textarea type="text" name="notice_description"  required class="form-control"></textarea>
                           </div>
                           <div class="col-md-12 mb-3">
                           <label for="">IMAGE</label>
                               <input type="file" name="image"  required class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                               <label for="">NOTICE DATE</label>
                               <input type="date" name="notice_date"  required class="form-control">
                           </div>
                           <div class="col-md-12 mb-3">
                           
                           <div class="col-md-12 mb-3">
                           <button type="submit" name="notice-add"class="btn btn-primary">ADD NOTICE</button>       
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