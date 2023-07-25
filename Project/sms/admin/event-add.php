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
                <h4>ADD EVENT </h4>
                <a href="event-view.php" class="btn btn-danger float-end">GO BACK</a>
            </div>
            <div class="card-body">
            <form action="code.php" method="POST" enctype="multipart/form-data">
                           
                           <div class="row">
                           
                           <div class="col-md-12 mb-3">
                               <label for="">EVENT SUBJECT</label>
                               <select name="event_subject"  required class="form-control">
                                   <option value="">---SELECT  EVENTS----</option>
                                   <option value="marriage ceremony">Marriage Ceremony</option>
                                   <option value="birthday ceremony">Birthday Ceremony</option>
                                   <option value="ring ceremony">Ring Ceremony</option>
                                   <option value="baby shower ceremony">Baby Shower Ceremony</option>
                           </select>
                       </div>
                           
                           <div class="col-md-12 mb-3">
                               <label for="">EVENT DESCRIPTION</label>
                               <textarea type="text" name="event_description"  required class="form-control"></textarea>
                           </div>
                           <div class="col-md-12 mb-3">
                           <label for="">IMAGE</label>
                               <input type="file" name="image"  required class="form-control">
                            </div>
                            <div class="col-md-12 mb-3">
                               <label for="">EVENT DATE</label>
                               <input type="date" name="event_date"  required class="form-control">
                           </div>
                           <div class="col-md-12 mb-3">
                           <label for="">EVENT STATUS</label>
                           <select name="event_status"  required class="form-control">
                               <option value="">---STATUS----</option>
                               <option value="pending">PENDING</option>
                               <option value="confirmed">CONFIRMED</option>
                       </select>
                   </div>
                           
                           <div class="col-md-12 mb-3">
                           <button type="submit" name="event-add"class="btn btn-primary">ADD EVENT</button>       
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