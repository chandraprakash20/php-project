<?php
SESSION_start();
if(isset($_SESSION['auth']))
{
    if(!isset($_SESSION['Mesaage']))
    {
        $_SESSION['Message']="you are already loggined in";
    }
    
    header("Location:index.php");
    exit(0);
}
include('includes/header.php');

?>
<div class="py-5">
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-5">
            <?php include('message.php');  ?>
               <div class="card">
                   <div class="card-header">
                       <h4>Login</h4>
                   </div>
                   <div class="card-body">
                       <form action="logincode.php" method="POST">
                       <div class="form-group mb-3">
                           <label >Email Id</label>
                           <input type="email" name="email" placeholder="Enter Email Address" class="form-control">
                       </div>
                       <div class="form-group mb-3">
                           <label >password</label>
                           <input type="password" name="password" placeholder="Enter password" class="form-control">
                       </div>
                       <!-- <div class="form-check mb-3">
                            <input class="form-check-input" name="isadmin" type="checkbox" value="1" />
                            <label class="form-check-label" for="inputRememberPassword">Admin</label>
                        </div>-->
                       <div class="form-group mb-3"> 
                     <button type="submit" name="login_btn" class="btn btn-primary"> Login Now</button>      
                    </div>
                    </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/footer.php');

?>