<div id="layoutSidenav_nav">
       <?php $page=substr($_SERVER['SCRIPT_NAME'],strrpos($_SERVER['SCRIPT_NAME'],"/")+1);?>         
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            
                            <a class="nav-link <?= $page =='index.php'?'active':''?>" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            
                            
                            <a class="nav-link collapsed <?= $page =='index.php'?'active':''?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                COMMITTEE MEMBERS
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="committee-add.php">ADD COMMITTEE MEMBERS</a>
                                    <a class="nav-link" href="committee-view.php">VIEW COMMITTEE MEMBERS</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed <?= $page =='index.php'?'active':''?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                SOCIETY RULES
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="societyrules-add.php">ADD SOCIETY RULES</a>
                                    <a class="nav-link" href="societyrules-view.php">VIEW SOCIETY RULES</a>
                                </nav>
                            </div>
                            
                            <a class="nav-link collapsed <?= $page =='index.php'?'active':''?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts2" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                HOUSE
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts2" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="house-add.php">ADD HOUSE</a>
                                    <a class="nav-link" href="house-view.php">VIEW HOUSE</a>
                                </nav>
                            </div>
                            
                            <a class="nav-link collapsed <?= $page =='index.php'?'active':''?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts3" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                MEMBER
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="member-add.php">ADD MEMBER</a>
                                    <a class="nav-link" href="member-view.php">VIEW MEMBER</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed <?= $page =='index.php'?'active':''?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts4" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                NOTICE
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts4" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="notice-add.php">ADD NOTICE</a>
                                    <a class="nav-link" href="notice-view.php">VIEW NOTICE</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed <?= $page =='index.php'?'active':''?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts5" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                EVENT
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts5" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="event-add.php">ADD EVENT</a>
                                    <a class="nav-link" href="event-view.php">VIEW EVENT</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed <?= $page =='index.php'?'active':''?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts6" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                RENT
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts6" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="rent-add.php">ADD RENT</a>
                                    <a class="nav-link" href="rent-view.php">VIEW RENT</a>
                                </nav>
                            </div>
                            
                            <a class="nav-link collapsed <?= $page =='index.php'?'active':''?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts7" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                SELL
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts7" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="sell-add.php">ADD SELL</a>
                                    <a class="nav-link" href="sell-view.php">VIEW SELL</a>
                                </nav>
                            </div>
                            
                            
                            <a class="nav-link collapsed <?= $page =='index.php'?'active':''?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts8" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                MAINTENANCE
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts8" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="maintenance-add.php">ADD MAINTENANCE</a>
                                    <a class="nav-link" href="maintenance-view.php">VIEW MAINTENANCE</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed <?= $page =='index.php'?'active':''?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts9" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                COMPLAINT
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts9" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="complaint-add.php">ADD COMPLAINT</a>
                                    <a class="nav-link" href="complaint-view.php">VIEW COMPLAINT</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed <?= $page =='index.php'?'active':''?>" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts10" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                CONTACT US
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts10" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="contactus-add.php">ADD CONTACT US</a>
                                    <a class="nav-link" href="contactus-view.php">VIEW CONTACT US</a>
                                </nav>
                            </div>
                            
                            
                        </div>
                    </div>
                    
                </nav>
            </div> 