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
            <h4>VIEW SELL </h4>
            <a href="sell.php" class="btn btn-primary float-end">ADD SELL</a>
            <a href="index.php" class="btn btn-danger float-end">GO BACK</a>

        </div>
        <div class="card-body">
                      
        <div class="table-responsive">
            <table  id="example2" class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th>SELL ID</th>
                    <th>SELL AMOUNT</th>
                    <th>MEMBER ID</th>
                    <th>SELL DATE</th>
                    <th>IMAGE</th>
                    
                    </tr>
                </thead>
                <tbody>
                <?php 

                    $sell="SELECT s.*,m.member_name AS member_name From sell s,member m  WHERE m.member_id=s.member_id ";;
                    $sell_run=mysqli_query($con,$sell);
                    if(mysqli_num_rows($sell_run)>0)
                    {
                         foreach($sell_run as $sell)
                        {
                            ?>
                            <tr>
                            <td><?=$sell['sell_id'];?></td>
                            <td><?='Rs.'.$sell['sell_amount'];?></td>
                            <td><?=$sell['member_name'];?></td>    
                            <td><?= $timestamp=date("d-m-Y",strtotime($sell['sell_date']));?></td>
                            <td>
                                <img src="sell/<?=$sell['image'];?>" width="100px" height="100px"/>
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