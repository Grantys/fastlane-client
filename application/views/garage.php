<!-- header --> 
  <div class="page-topbar">
      <!-- START TOPBAR -->
        <div class='logo-area'>
        </div>
        <div class='quick-area'>
            <div class='pull-left slantit'>
                <ul class="info-menu left-links list-inline list-unstyled">
                    <li class="sidebar-toggle-wrap">
                        <a class="sidebar_toggle" data-toggle="sidebar" data-target=".page-sidebar">
                            <i class="material-icons">menu</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="pull-left pagetitle">
                <span class='line'></span>
                <h1>Garage</h1>
                <div></div>
            </div>
            <div class='pull-right'>
                <ul class="info-menu right-links list-inline list-unstyled">
                  <li class="dropdown">
                        <a class="dropdown-toggle toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">notifications</i>
                            <span class="badge badge-orange">3</span>
                        </a> 
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="home.php">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                       </ul>
                   </li>
                   <li class="dropdown">
                        <a class="dropdown-toggle toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">settings</i>
                        </a> 
                        <ul class="dropdown-menu">
                            <li><a href="#">Profile</a></li>
                            <li><a href="home.php">Language</a></li>
                       </ul>
                   </li>
                   <li class="dropdown">
                        <a class="dropdown-toggle toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">help</i>
                        </a> 
                        <ul class="dropdown-menu">
                            <li><a href="#">Help</a></li>
                            <li><a href="home.php">F.A.Q</a></li>
                            <li><a href="home.php">T&C</a></li>
                       </ul>
                   </li>
                    <li class="menu-profile-toggle tab hidden-sm hidden-xs ">
                        <a href class="profile_toggle">
                            <i class="material-icons">lock</i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END TOPBAR -->
  </div>
  <!-- / header -->

  
<!-- START CONTAINER -->

<div class="page-container row-fluid">

      <!-- leftbar -->
              <!-- to collapse change to collapseit -->
              <div class="page-sidebar expandit">
                  <!-- SIDEBAR - START -->
                <!-- MAIN MENU - START -->
                <perfect-scrollbar class="page-sidebar-wrapper" id="main-menu-wrapper" wheel-propagation="true" suppress-scroll-x="true" min-scrollbar-length="20" menuheight>
                    <!-- USER INFO - START -->
                    <div class="profile-info">
                        <div class="profile-image col-md-12 col-sm-12 col-xs-12 text-center">
                            <a>
                                <img src="data/profile/profile.png" class="img-responsive">
                                <span class="profile-status available"></span>
                            </a>
                        </div>
                        <div class="profile-details col-md-12 col-sm-12 col-xs-12">
                            <h3><a>Gergo Illes</a></h3>
                            <p class="profile-title">Pro Racer</p>
                        </div>
                    </div>
                    <!-- USER INFO - END -->
                    <!-- nav -->
                    <nav>
                        <!-- list -->
                            <ul class="wraplist wrapper-menu">
                                <li>
                                    <a href="welcome" class="nosub">
                                        <i class="fa fa-dashboard"></i>
                                        <span class="title">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="race" class="nosub">
                                        <i class="fa fa-flag-checkered"></i>
                                        <span class="title">Race</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="garage" class="nosub">
                                        <i class="material-icons">build</i>
                                        <span class="title">Garage</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="dealer" class="nosub">
                                        <i class="material-icons">store</i>
                                        <span class="title">Dealer</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="market" class="nosub">
                                        <i class="fa fa-shopping-cart"></i>
                                        <span class="title">Market</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="forum" class="nosub">
                                        <i class="material-icons">forum</i>
                                        <span class="title">Forum</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="topscores" class="nosub">
                                        <i class="fa fa-bar-chart"></i>
                                        <span class="title">Top Scores</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- / list -->
                    </nav>
                    <!-- nav -->
                </perfect-scrollbar>
                <!-- MAIN MENU - END -->
                <!--  SIDEBAR - END -->
              </div>
      <!-- / leftbar -->


	<!-- START CONTENT -->
        <!-- If collapsed add class="sidebar_shift" -->
	<section id="main-content">
            <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:0px 0px 0 0px;' ui-view>
                <div class="content-wrapper">
                    <section class="box nobox margin-top-15 margin-bottom-0">
                        <div class="content-body">
                            <div class="col-md-12 col-sm-12 col-xs-12 padding-right-30 padding-left-20">
                            <ol class="breadcrumb border">
                            <li>
                                <a><i class="fa fa-home"></i>Garage</a>
                            </li>
                            <li class="active">
                                <strong>Profile</strong>
                            </li>
                            </ol>
                            </div>
                        </div>
                    </section>
                    <div class="clearfix"></div>
            </section>
        </section>
        <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->

  <!-- footer -->
  <!-- / footer -->