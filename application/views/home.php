<!-- header --> 
  <div class="page-topbar">
      <!-- START TOPBAR -->
        <div class='logo-area'>
        </div>
        <div class='quick-area'>
            <div class='pull-left slantit'>
                <ul class="info-menu left-links list-inline list-unstyled">
                    <li class="sidebar-toggle-wrap">
                        <a href data-toggle="sidebar" class="sidebar_toggle" ng-click="app.settings.menuFolded = !app.settings.menuFolded; menuChatToggle('menu',app.settings.menuFolded) ">
                            <i class="material-icons">menu</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="pull-left pagetitle">
                <span class='line'></span>
                <h1>Dealer</h1>
                <div></div>
            </div>
            <div class='pull-right'>
                <ul class="info-menu right-links list-inline list-unstyled">
                  <li class="dropdown tab hidden-gxs hidden-xs " dropdown>
                        <a href class="dropdown-toggle toggle" dropdown-toggle>
                            <i class="material-icons">notifications</i>
                            <span class="badge badge-orange">3</span>
                        </a> 
                   </li>
                   <li class="menu-profile-toggle tab hidden-sm hidden-xs ">
                        <a href class="profile_toggle" ng-click="app.settings.menuProfile = !app.settings.menuProfile ">
                            <i class="material-icons">settings</i>
                        </a>
                    </li>
                    <li class="menu-profile-toggle tab hidden-sm hidden-xs ">
                        <a href class="profile_toggle" ng-click="app.settings.menuProfile = !app.settings.menuProfile ">
                            <i class="material-icons">help</i>
                        </a>
                    </li>
                    <li class="menu-profile-toggle tab hidden-sm hidden-xs ">
                        <a href class="profile_toggle" ng-click="app.settings.menuProfile = !app.settings.menuProfile ">
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
              <div class="page-sidebar">
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
                                <li ui-sref-active="active">
                                    <a class="nosub">
                                        <i class="material-icons">home</i>
                                        <span class="title">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="nosub">
                                        <i class="material-icons">directions_car</i>
                                        <span class="title">Race</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="nosub">
                                        <i class="material-icons">build</i>
                                        <span class="title">Garage</span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a class="nosub">
                                        <i class="material-icons">store</i>
                                        <span class="title">Dealer</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="nosub">
                                        <i class="material-icons">equalizer</i>
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
	<section id="main-content">
            <section class="wrapper" style='margin-top:60px;display:inline-block;width:100%;padding:0px 0px 0 0px;' ui-view>
                <div class="content-wrapper">
                    <section class="box nobox margin-top-15 margin-bottom-0">
                        <div class="content-body">
                            <div class="col-md-12 col-sm-12 col-xs-12 padding-right-30 padding-left-20">
                            <ol class="breadcrumb border">
                            <li>
                                <a><i class="fa fa-home"></i>Dealer</a>
                            </li>
                            <li class="active">
                                <strong>Limited</strong>
                            </li>
                            </ol>
                            </div>
                        </div>
                    </section>
                    <div class="clearfix"></div>
<!--                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <section class="box">
                            <header class="panel_header">
                                <h2 class="title pull-left"> '71 Hemi Super Cuda</h2>
                                <div class="actions panel_actions pull-right">
                                    <i class="box_toggle material-icons">money_off</i>
                                    <h5>75,000</h5>
                                </div>
                            </header>
                            <div class="content-body padding-top-45">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="r1_maingraph db_box" ng-init="chartjs={show:'line'}">
                                            <div class='graph-wrapper'>
                                                <img src="/custom/img/Lexus.png" class="img-responsive">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>-->
                </div>
            </section>
        </section>
        <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->

  <!-- footer -->
  <!-- / footer -->