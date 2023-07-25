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
                <h4>ADD SOCIETY RULES </h4>
                <a href="societyrules-view.php" class="btn btn-danger float-end">GO BACK</a>
            </div>
            <div class="card-body">
            <form action="code.php" method="POST">
                           
                           <div class="row">
                           
                           <div class="col-md-12 mb-3">
                               <label for="">SOCIETY DESCRIPTION </label>
                               <textarea type="text" name="society_description"  required class="form-control"></textarea>
                           </div>
                           
                           <button type="submit" name="society-add" class="btn btn-primary">ADD SOCIETY RULES</button>       
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