<?php

include('authentication.php');
include('includes/header.php');
?>
 <div class="container-fluid px-4">
 <h1 class="mt-4">users</h1>
 <ol class="breadcrumb mb-4">
 <li class="breadcrumb-item active">Dashboard</li>
 <li class="breadcrumb-item ">users</li>
 </ol>
    <div class="row">
    <div class="col-md-12">
    <?php include('message.php');  ?>    
    <div class="card">
        
            <div class="card-header">
                <h4>Registered user</h4>
                <a href="register-add.php" class="btn btn-primary float-end">ADD ADMIN</a>
                <a href="index.php" class="btn btn-danger float-end">GO BACK</a>
            </div>
            <div class="card-body">
                <table id="example2" class="table table-bordered">
                    <thead>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Roles</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                        <?php 
                        $query="SELECT * From users";
                        $query_run=mysqli_query($con,$query);
                        
                        if(mysqli_num_rows($query_run)>0)
                        {
                            foreach($query_run as $row)
                            {
                                ?>
                                <tr>
                                <td><?=$row['id'];?></td>
                                <td><?=$row['fname'];?></td>
                                <td><?=$row['lname'];?></td>
                                <td><?=$row['email'];?></td>
                                <td>
                                    <?php
                                    if($row['role_as']=='1')
                                    {
                                        echo'Admin';
                                    }elseif($row['role_as']=='0'){
                                        echo'User';
                                    }
                                    ?>
                                    </td>
                                <td><a href="register-edit.php?id=<?=$row['id']?>" class="btn btn-success">edit</a></td>
                                <td>
                                    <form action="code.php" method="POST">
                                    <button type="submit" name="user_delete" value="<?=$row['id'];?>"class="btn btn-danger">delete</button>
                                
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
<?php
include('includes/footer.php');
include('includes/scripts.php');
?>