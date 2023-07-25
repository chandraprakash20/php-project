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
                <h4>VIEW HOUSE </h4>
                <a href="house-add.php" class="btn btn-primary float-end">ADD HOUSE</a>
            </div>
            <div class="card-body">
                          
            <div class="table-responsive">
                <table id="example2" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th>HOUSE ID</th>
                        <th>HOUSE NO</th>
                        <th>Image</th>
                        <th>HOUSE TYPE</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 

                        $house="SELECT * FROM house";
                        $house_run=mysqli_query($con,$house);
                        if(mysqli_num_rows($house_run)>0)
                        {
                             foreach($house_run as $house)
                            {
                                ?>
                                <tr>
                                <td><?=$house['house_id'];?></td>
                                <td><?=$house['house_no'];?></td>    
                                
                                
                                <td>
                                    <img src="../house/<?=$house['image'];?>" width="100px" height="100px"/>
                                </td>
                                <td><?=$house['house_type'];?></td>
                                <td><a href="house-edit.php?house_id=<?=$house['house_id']?>" class="btn btn-info">EDIT</a></td>
                                <td>
                                    <form action="code.php" method="POST">
                                    <button type="submit" name="house-delete" value="<?=$house['house_id'];?>"class="btn btn-danger">DELETE</button>
                                
                                    </form>
                                    </td>
                            </tr>
                                <?php

                            }
                        }
                        else
                        {
                            ?>
                            <tr>
                            <td colspan="6">No Record Found</td>
                            
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
include('includes/scripts.php');
?>