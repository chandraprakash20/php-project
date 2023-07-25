<?php

include('authentication.php');
include('includes/header.php');
?>
 <div class="container-fluid px-4">
 <h1 class="mt-4">Dashboard</h1>
 <ol class="breadcrumb mb-4">
 
 </ol>
    <div class="row">
    <div class="col-xl-3 col-md-6">
                                        <div class="card bg-primary text-white mb-4">
                                            <div class="card-body">Member
                                                <?php
                                                $dash_member_query ="SELECT * From member";
                                                $dash_member_query_run = mysqli_query($con,$dash_member_query);
                                                if($member_total =mysqli_num_rows($dash_member_query_run))
                                                {
                                                    echo '<h4 class="mb-0"> '.$member_total.'</h4>';
                                                }
                                                else
                                                {
                                                    echo '<h4 class="mb-0"> No Data</h4>';
                                               }
                                                ?>
                                            </div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                                <a class="small text-white stretched-link" href="member-view.php">View Details</a>
                                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                            </div>
                                        </div>
    </div>
    <div class="col-xl-3 col-md-6">
                                        <div class="card bg-warning text-white mb-4">
                                            <div class="card-body">Rent
                                            <?php
                                                $dash_rent_query ="SELECT * From rent";
                                                $dash_rent_query_run = mysqli_query($con,$dash_rent_query);
                                                if($rent_total =mysqli_num_rows($dash_rent_query_run))
                                                {
                                                    echo '<h4 class="mb-0"> '.$rent_total.'</h4>';
                                                }
                                                else
                                                {
                                                    echo '<h4 class="mb-0"> No Data</h4>';
                                               }
                                                ?>
                                            </div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                                <a class="small text-white stretched-link" href="rent-view.php">View Details</a>
                                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                            </div>
                                        </div>
    </div>
    <div class="col-xl-3 col-md-6">
                                        <div class="card bg-success text-white mb-4">
                                            <div class="card-body">Sell
                                            <?php
                                                $dash_sell_query ="SELECT * From sell";
                                                $dash_sell_query_run = mysqli_query($con,$dash_sell_query);
                                                if($sell_total =mysqli_num_rows($dash_sell_query_run))
                                                {
                                                    echo '<h4 class="mb-0"> '.$sell_total.'</h4>';
                                                }
                                                else
                                                {
                                                    echo '<h4 class="mb-0"> No Data</h4>';
                                               }
                                                ?>  
                                            </div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                                <a class="small text-white stretched-link" href="sell-view.php">View Details</a>
                                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                            </div>
                                        </div>
    </div>
    <div class="col-xl-3 col-md-6">
                                        <div class="card bg-danger text-white mb-4">
                                            <div class="card-body">Maintenance
                                            <?php
                                                $dash_maintenance_query ="SELECT * From maintenance";
                                                $dash_maintenance_query_run = mysqli_query($con,$dash_maintenance_query);
                                                if($maintenance_total =mysqli_num_rows($dash_maintenance_query_run))
                                                {
                                                    echo '<h4 class="mb-0"> '.$maintenance_total.'</h4>';
                                                }
                                                else
                                                {
                                                    echo '<h4 class="mb-0"> No Data</h4>';
                                               }
                                                ?>  
                                            
                                            </div>
                                            <div class="card-footer d-flex align-items-center justify-content-between">
                                                <a class="small text-white stretched-link" href="maintenance-view.php">View Details</a>
                                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                            </div>
                                        </div>
    </div>
    </div>
</div>
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>