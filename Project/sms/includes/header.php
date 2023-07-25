<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">    
    <link rel="stylesheet" href="assests/css/bootstrap5.min.css">
    <link rel="stylesheet" href="assests/css/custom.css">
    <title>Ambika Row House</title>
  <link rel="stylesheet" href="assests/vendors/owl-carousel/css/owl.carousel.min.css">
  <link rel="stylesheet" href="assests/vendors/owl-carousel/css/owl.theme.default.css">
  <link rel="stylesheet" href="assests/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assests/vendors/aos/css/aos.css">
  <link rel="stylesheet" href="assests/css/style.min.css">
</head>
<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
  
<div id="google_translate_element"></div> 
<header id="header-section">
    <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
    <div class="container">
      <div class="navbar-brand-wrapper d-flex w-100">
        <img src="images/logo.png" height="100" width="100" alt="">
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="mdi mdi-menu navbar-toggler-icon"></span>
        </button> 
      </div>
      <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
        <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
          <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
            <div class="navbar-collapse-logo">
              <img src="images/logo.png" height="100" width="100"alt="">
            </div>
            <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
            </button>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#header-section">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#features-section">About</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="#gallery-section">Gallery</a>  
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#committee-section">CommitteeMembers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Rent-section">Rent</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Sell-section">Sell</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="contactus.php">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="member.php">Register</a>
          </li>
          
         
          <li class="nav-item btn-contact-us pl-4 pl-lg-0">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        
          <?php if(isset($_SESSION['auth_user'])) : ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?= $_SESSION['auth_user']['user_name']; ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

          <li><a class="dropdown-item" >
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                My Account &raquo;
                </a>
          <ul class="submenu dropdown-menu" aria-labelledby="navbarDropdown">
            
            <li>
            <a class="dropdown-item" href="member-view.php">View Member</a>
            </li>
            </ul>
        </li>
        

            <li><a class="dropdown-item" >
            <li><a class="dropdown-item" ><li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                SOCIETY RULES &raquo;
                </a>
                <ul class="submenu dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
            <a class="dropdown-item" href="societyrules-view.php">VIEW SOCIETY RULES</a>
            </li>
            </ul>
          
        </li>
        
            </a></li>
            <li><a class="dropdown-item" ><li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                COMMITTEE MEMBERS &raquo;
                </a>
          <ul class="submenu dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
            <a class="dropdown-item" href="committee-view.php">VIEW COMMITTEE MEMBERS</a>
            </li>
            </ul>
        </li>
        </a></li>
            <li><a class="dropdown-item" >
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                COMPLAINT &raquo;
                </a>
          <ul class="submenu dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="complaint.php">Add Complaint</a></li>
            <li>
            <a class="dropdown-item" href="complaint-view.php">View Complaint</a>
            </li>
            </ul>
        </li>
        
          </a></li>
            <li><a class="dropdown-item" >
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                NOTICE &raquo;
                </a>
          <ul class="submenu dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
            <a class="dropdown-item" href="notice-view.php">View NOTICE</a>
            </li>
            </ul>
        </li>
        
            </a></li>
            <li><a class="dropdown-item" >
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                MAINTENANCE &raquo; 
                </a>
          <ul class="submenu dropdown-menu" aria-labelledby="navbarDropdown">
            <li>
            <a class="dropdown-item" href="maintenance-view.php">View MAINTENANCE</a>
            </li>
            </ul>
        </li>
        
            </a></li>
            <li><a class="dropdown-item" >
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                EVENT &raquo;
                </a>
          <ul class="submenu dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="event.php">Add EVENT</a></li>
            <li>
            <a class="dropdown-item" href="event-view.php">View EVENT</a>
            </li>
            </ul>
        </li>
        
            </a></li>
            <li><a class="dropdown-item" >
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                RENT &raquo;
                </a>
          <ul class="submenu dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="rent.php">Add RENT</a></li>
            <li>
            <a class="dropdown-item" href="rent-view.php">View RENT</a>
            </li>
            </ul>
        </li>
        
            </a></li>
            <li><a class="dropdown-item" >
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                SELL &raquo;
                </a>
          <ul class="submenu dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="sell.php">Add SELL</a></li>
            <li>
            <a class="dropdown-item" href="sell-view.php">View SELL</a>
            </li>
          </ul>
        </li>
            </a></li>
            </ul>
        </li>
      
            
        
         
            
          </li>
          <li class="nav-item btn-contact-us pl-4 pl-lg-0">
          <form action="allcode.php" method="POST">
            
          <?php
          if($_SESSION)
            {?>
            <button type="submit" name="logout_btn" class="btn btn-info">logout</button>


<?php            }?>
                          </form>
          </li>
          
        </ul>
        <?php else :?>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Log In</a>
        </li>
        
        <?php endif;?>
      </ul>
      
      </div>
    </div> 
    </nav>   
  </header>    
