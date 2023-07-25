<?php
SESSION_start();
include('includes/header.php');
include('admin/config/dbcon.php');
?>
<div class="banner" >
    <div class="container">
      <h1 class="font-weight-semibold">Ambika Row House </h1>
      <h6 class="font-weight-normal text-muted pb-3"></h6>
      <div class="d-md-flex justify-content-between">
          <div class="owl-carousel owl-theme grid-margin">
          <div>
      <img src="images/house4.jfif" alt="" class="img-fluid">  
      </div>
    
     
          <div>
      <img src="images/house4.jfif" alt="" class="img-fluid">  
      </div>
        
          <div>
      <img src="images/house4.jfif" alt="" class="img-fluid">  
      </div>
              <div>
      <img src="images/house4.jfif" alt="" class="img-fluid">  
      </div>

              <div>
      <img src="images/house4.jfif" alt="" class="img-fluid">  
      
    </div>
      
    </div>
</div>
<div class="content-wrapper">
<div class="container">
	    <section class="features-overview"  >
	        <div class="content-header" id="features-section">
	          <h2>Amentities</h2>
	          <h6 class="section-subtitle text-muted"></h6>
	        </div>
	        <div class="d-md-flex justify-content-between">
	          <div class="grid-margin d-flex justify-content-start">
	            <div class="features-width">
	              <img src="images/parking.jfif" alt="" class="img-icons">
	              <h5 class="py-3">Parking Area</h5>
	             
	            </div>
	          </div>
	          <div class="grid-margin d-flex justify-content-center">
	            <div class="features-width">
	              <img src="images/playground.png" alt="" class="img-icons">
	              <h5 class="py-3">Childrens Playground</h5>
	       
	              
	            </div>
	          </div>
	          <div class="grid-margin d-flex justify-content-end">
	            <div class="features-width">
	              <img src="images/play.png" alt="" class="img-icons">
	              <h5 class="py-3">Garden</h5>
	              
	            </div>
	          </div>
	        </div>
	    </section>     
	    <section class="gallery " id="gallery-section">
	        <h1 class="font-weight-semibold">Gallery </h1>
	        <div class="owl-carousel owl-theme grid-margin" >
	        <div>
	      	<img src="images/house4.jfif" alt="" class="img-fluid">  
	      	</div>
	    
	     
	        <div>
	      	<img src="images/house4.jfif" alt="" class="img-fluid">  
	      	</div>
	        
	        <div>
	      	<img src="images/house4.jfif" alt="" class="img-fluid">  
	      	</div>
	        <div>
	      	<img src="images/house4.jfif" alt="" class="img-fluid">  
	      	</div>

	        <div>
	      	<img src="images/house4.jfif" alt="" class="img-fluid">  
	      
	    	</div>
	    </section>     
           
    <section class="CommitteeMembers" >
        <div class="row" >
          <div class="col-12 text-center pb-5" id="committee-section" >
            <h2>Committee Members</h2>
            <h6 class="section-subtitle text-muted m-0">society members</h6>
          </div>
          <div class="owl-carousel owl-theme grid-margin">
             <?php 

                $committee="SELECT * From committee_members ";
                $committee_run=mysqli_query($con,$committee);
              
                if(mysqli_num_rows($committee_run)>0)
                {
                    foreach($committee_run as $committee)
                    {
                        ?>
                         <div class="card Committee-cards">
                          <div class="card-body">
                            <div class="text-center">
                              <img src="committee/<?=$committee['image'];?>" width="89" height="89" alt="" class="img-customer">
                              <div class="content-divider m-auto"></div>
                              <h6 class="card-title pt-3"><?=$committee['member_name'];?></h6>
                              <h5 class="card-contact pt-4"><?=$committee['member_contact_no'];?></h5>
                              <h6 class="Committee-designation text-muted m-0"><?=$committee['designation'];?></h6>
                            </div>
                          </div>
                        </div>
                        <?php

                    }
                } 
                ?>
              </div>
          </div>
    </section>
    <section class="Rent" >
        <div class="row" >
          <div class="col-12 text-center pb-5" id="Rent-section" >
            <h2>Rent House</h2>
            
          </div>
          <div class="owl-carousel owl-theme grid-margin">
             <?php 

              $rent="SELECT r.*,m.member_name AS member_name From rent r,member m  WHERE m.member_id=r.member_id";
              $rent_run=mysqli_query($con,$rent);
              if(mysqli_num_rows($rent_run)>0)
              {
                  foreach($rent_run as $rent)
                  {
                      ?>
                         <div class="card rent-cards">
                          <div class="card-body">
                            <div class="text-center">
                            <img src="rent/<?=$rent['image'];?>" width="89" height="89" alt="" class="img-customer">
                              <div class="content-divider m-auto"></div>
                              <h6 class="card-price pt-3"><?='Rs.'.$rent['rent_amount'];?></h6>
                              <h5 class="card-name pt-4"><?=$rent['member_name'];?></h5>
                              </div>
                          </div>
                        </div>
                        <?php

                    }
                } 
                ?>
              </div>
          </div>
    </section>
    <section class="Sell" >
        <div class="row" >
          <div class="col-12 text-center pb-5" id="Sell-section" >
            <h2>Sell house</h2>
          </div>
          <div class="owl-carousel owl-theme grid-margin">
             <?php 

              $sell="SELECT s.*,m.member_name AS member_name From sell s,member m  WHERE m.member_id=s.member_id ";;
              $sell_run=mysqli_query($con,$sell);
              if(mysqli_num_rows($sell_run)>0)
              {
                  foreach($sell_run as $sell)
                  {
                      ?>
                         <div class="card sell-cards">
                          <div class="card-body">
                            <div class="text-center">
                            <img src="sell/<?=$sell['image'];?>" width="89" height="89" alt="" class="img-customer">
                              <div class="content-divider m-auto"></div>
                              <h6 class="card-price pt-3"><?='Rs.'.$sell['sell_amount'];?></h6>
                              <h5 class="card-name pt-4"><?=$sell['member_name'];?></h5>
                              
                            </div>
                          </div>
                        </div>
                        <?php

                    }
                } 
                ?>
              </div>
          </div>
    </section>

<?php
include('includes/footer.php');

?>

    
