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
            <h4>VIEW RENT </h4>
            <a href="rent.php" class="btn btn-primary float-end">ADD RENT</a>
            <a href="index.php" class="btn btn-danger float-end">GO BACK</a>
        </div>
        <div class="card-body">
                      
        <div class="table-responsive">
            <table id="example2" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>RENT ID</th>
                    <th>RENT AMOUNT</th>
                    <th>MEMBER ID</th>
                    <th>RENT DATE</th>
                    <th>IMAGE</th>
                    </tr>
                </thead>
                <tbody>
                <?php 

                    $rent="SELECT r.*,m.member_name AS member_name From rent r,member m  WHERE m.member_id=r.member_id";
                    $rent_run=mysqli_query($con,$rent); 
                    if(mysqli_num_rows($rent_run)>0)
                    {
                         foreach($rent_run as $rent)
                        {
                            ?>
                            <tr>
                            <td><?=$rent['rent_id'];?></td>
                            <td><?='Rs.'.$rent['rent_amount'];?></td>
                            <td><?=$rent['member_name'];?></td>    
                            <td><?= $timestamp=date("d-m-Y",strtotime($rent['rent_date']));?></td>
                            <td>
                                <img src="rent/<?=$rent['image'];?>" width="100px" height="100px"/>
                            </td>
                            
                            
                        </tr>
                            <?php

                        }
                    }
                    else
                    {
                        ?>
                        <tr>
                        <td colspan="5">No Record Found</td>
                        
                    </tr>
                        <?php

                    }
                    ?>
                    
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
</div>
</div>
<?php
include('includes/footer.php');
include('admin/includes/scripts.php');
?>