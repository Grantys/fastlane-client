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
            <div class="pull-left" style='z-index:1;position:relative;'>
                <ul class="info-menu right-links list-inline list-unstyled">
                    <li class="dropdown tab hidden-gxs hidden-xs " dropdown>
                        <a href class="dropdown-toggle toggle" dropdown-toggle>
                            <i class="material-icons">email</i>
                            <span class="badge badge-pink">7</span>
                        </a>
                        <ul class="dropdown-menu  messages animated fadeIn">
                            <li ng-controller="MessagesDropDownCtrl" class="list">
                                <perfect-scrollbar wheel-propagation="true" suppress-scroll-x="true" min-scrollbar-length="20" class='ps-scrollbar'>
                                    <ul class="dropdown-menu-list list-unstyled">
                                        <li class="{{message.read ? 'read' : 'unread'}} status-{{message.status}}" ng-repeat="message in messages">
                                            <a href="javascript:;">
                                                <div class="user-img">
                                                    <img ng-src="{{message.avatar}}" alt="user-image" class="img-circle img-inline">
                                                </div>
                                                <div>
                                                    <span class="name">
                                                            <h4>{{message.name}}</h4>
                                                            <span class="time small">{{message.time}}</span>
                                                    <span class="profile-status {{message.status}} pull-right"></span>
                                                    </span>
                                                    <span class="desc small">
                                                            {{message.description}}
                                                        </span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </perfect-scrollbar>
                            </li>
                            <li class="external">
                                <a href="javascript:;">
                                    <span>Read All Messages</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown tab hidden-gxs hidden-xs " dropdown>
                        <a href class="dropdown-toggle toggle" dropdown-toggle>
                            <i class="material-icons">notifications</i>
                            <span class="badge badge-orange">3</span>
                        </a>
                        <ul class="dropdown-menu  notifications animated fadeIn">
                            <li class="total">
                                <span class="small">
                                        You have <strong>3</strong> new notifications.
                                        <a href="javascript:;" class="pull-right">Mark all as Read</a>
                                    </span>
                            </li>
                            <li ng-controller="NotificationsDropDownCtrl" class="list">
                                <perfect-scrollbar wheel-propagation="true" suppress-scroll-x="true" min-scrollbar-length="20" class='ps-scrollbar'>
                                    <ul class="dropdown-menu-list list-unstyled">
                                        <li class="{{notification.read ? 'read' : 'unread'}} {{notification.status}}" ng-repeat="notification in notifications">
                                            <!-- available: success, warning, info, error -->
                                            <a href="javascript:;">
                                                <div class="notice-icon">
                                                    <i class="material-icons">{{notification.statusicon}}</i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                            <h4>{{notification.message}}</h4>
                                                            <span class="time small">{{notification.time}}</span>
                                                    </span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </perfect-scrollbar>
                            </li>
                            <li class="external">
                                <a href="javascript:;">
                                    <span>Read All Notifications</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-profile-toggle tab hidden-sm hidden-xs ">
                        <a href class="profile_toggle" ng-click="app.settings.menuProfile = !app.settings.menuProfile ">
                            <i class="material-icons">person</i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class='pull-left searchbar'>
                <ul class="info-menu right-links list-inline list-unstyled">
                    <li class="hidden-md hidden-sm hidden-xs searchform" searchgroup>
                        <div class="input-group">
                            <span class="input-group-addon input-focus">
                                    <i class="material-icons">search</i>
                                </span>
                            <form action="search-page.html" method="post">
                                <input type="text" class="form-control animated fadeIn" placeholder="">
                                <input type='submit' value="">
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
            <div class='pull-right'>
                <ul class="info-menu right-links list-inline list-unstyled">

                    <li class="dropdown profile tab" dropdown>
                        <a href class="dropdown-toggle toggle" dropdown-toggle>
                            <img src="data/profile/profile.png" alt="user-image" class="img-circle img-inline">
                            <span class="profile-status available"></span>
                                <!-- <span class='hidden-sm hidden-md hidden-xs'>John Carter </span>  -->
                                <!-- <i class="material-icons hidden-md hidden-sm hidden-xs">expand_more</i> -->
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right profile animated fadeIn">
                            <li>
                                <a ui-sref="app.dashboard">
                                    <i class="material-icons">settings</i> Settings
                                </a>
                            </li>
                            <li>
                                <a ui-sref="app.ui.profile">
                                    <i class="material-icons">person</i> Profile
                                </a>
                            </li>
                            <li>
                                <a ui-sref="app.ui.faq">
                                    <i class="material-icons">help</i> Help
                                </a>
                            </li>
                            <li class="last">
                                <a ui-sref="access.login">
                                    <i class="material-icons">lock</i> Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="chat-toggle-wrapper hidden-xs chat-slant">
                        <a href data-toggle="chatbar" class="toggle_chat" ng-click="app.settings.chatFolded = !app.settings.chatFolded; menuChatToggle('chat',app.settings.chatFolded) ">
                            <i class="material-icons">chat_bubble</i>
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
                                        <span class="title">Tuning</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="nosub">
                                        <i class="material-icons">store</i>
                                        <span class="title">Dealer</span>
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
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding-right-0 padding-left-0">
                                    <div class="r4_counter wid-stats db_box">
                                        <div class='stats-data'>
                                            <i class="material-icons icon-primary pull-left">account_balance</i>
                                            <div class="stats">
                                                <h3>990K</h3>
                                                <span>Profit&nbsp;Gain</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding-right-0 padding-left-0">
                                    <div class="r4_counter wid-stats db_box">
                                        <div class='stats-data'>
                                            <i class="material-icons icon-primary pull-left">public</i>
                                            <div class="stats">
                                                <h3>99.9%</h3>
                                                <span>Server&nbsp;Up</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding-right-0 padding-left-0">
                                    <div class="r4_counter wid-stats db_box">
                                        <div class='stats-data'>
                                            <i class="material-icons icon-primary pull-left">people</i>
                                            <div class="stats">
                                                <h3>3550</h3>
                                                <span>Visitors</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding-right-0 padding-left-0">
                                    <div class="r4_counter wid-stats db_box">
                                        <div class='stats-data'>

                                            <i class="material-icons icon-primary pull-left">store_mall_directory</i>
                                            <div class="stats">
                                                <h3>1240</h3>
                                                <span>New&nbsp;Orders</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </section>
                    <div class="clearfix"></div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
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
                    </div>
                </div>
            </section>
        </section>
        <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->

  <!-- footer -->
  <!-- / footer -->