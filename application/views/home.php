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
                            <span class="badge badge-primary">7</span>
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
                    <div class="profile-info" ng-show="app.settings.menuProfile">
                        <div class="profile-image col-md-12 col-sm-12 col-xs-12 text-center">
                            <a ui-sref="app.ui.profile">
                                <img src="data/profile/profile.png" class="img-responsive">
                                <span class="profile-status available"></span>
                            </a>
                        </div>
                        <div class="profile-details col-md-12 col-sm-12 col-xs-12">
                            <h3>
                                    <a ui-sref="app.ui.profile">John Carter</a>

                                    <!-- Available statuses: online, idle, busy, away and offline -->
                                </h3>
                            <p class="profile-title">Developer</p>
                        </div>
                    </div>
                    <!-- USER INFO - END -->
                    <!-- nav -->
                    <nav>
                        <!-- list -->
                            <ul class="wraplist wrapper-menu">

                                <li ui-sref-active="active">
                                    <a ui-sref="app.dashboard" class="nosub">
                                        <i class="material-icons">dashboard</i>
                                        <span class="title">Dashboard</span>
                                    </a>
                                </li>
                                                    <li href class="auto"> 
                                                        <a href="javascript:;">
                                                            <i class="material-icons">apps</i>
                                                            <span class="title">APPS</span>
                                                            <span class="arrow material-icons">keyboard_arrow_right</span>
                                                        </a>
                                                        <ul class="wraplist wraplist-sub sub-menu dk" >
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.mail.list">Mailbox</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.ui.calendar">Calendar</a>
                                                            </li>
                                                            <!-- <li ui-sref-active="active">
                                                                <a ui-sref="app.widgets">Widgets</a>
                                                            </li> -->

                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href class="auto">
                                                            <i class="material-icons">work</i>
                                                            <span class="title">User Interface</span>
                                                            <span class="arrow material-icons">keyboard_arrow_right</span> <!-- <span class="label label-orange">NEW</span> -->
                                                        </a>
                                                        <ul class="wraplist wraplist-sub wraplist wraplist-sub sub-menu dk dk">
                                                            <li class="wraplist-sub-header">
                                                                <a href>User Interface</a>
                                                            </li>
                                                                                <li ui-sref-active="active">
                                                                                    <a ui-sref="app.ui.typography">Typography</a>
                                                                                </li>
                                                                                <li ui-sref-active="active">
                                                                                    <a ui-sref="app.ui.progress">Progress Bars</a>
                                                                                </li>
                                                                                <li ui-sref-active="active">
                                                                                    <a ui-sref="app.ui.modals">Modals</a>
                                                                                </li>
                                                                                <li ui-sref-active="active">
                                                                                    <a ui-sref="app.ui.icons">Icons</a>
                                                                                </li>
                                                                                <li ui-sref-active="active">
                                                                                    <a ui-sref="app.ui.sortable">Sortable & Nestable</a>
                                                                                </li>
                                                                                <li ui-sref-active="active">
                                                                                    <a ui-sref="app.ui.imagecrop">Image cropper</a>
                                                                                </li>
                                                                                <li ui-sref-active="active">
                                                                                    <a ui-sref="app.ui.tooltips">Tooltips & Popovers</a>
                                                                                </li>
                                                                                <li ui-sref-active="active">
                                                                                    <a ui-sref="app.ui.buttons">Buttons</a>
                                                                                </li>
                                                                                <li ui-sref-active="active">
                                                                                    <a ui-sref="app.ui.notifications">Alert Notifications</a>
                                                                                </li>
                                                                                <li ui-sref-active="active">
                                                                                    <a ui-sref="app.ui.carousel">Carousel Slider</a>
                                                                                </li>
                                                                               <!--  <li ui-sref-active="active">
                                                                                    <a ui-sref="app.ui.navbars">Nav & Dropdowns</a>
                                                                                </li> -->
                                                                                <li ui-sref-active="active">
                                                                                    <a ui-sref="app.ui.grids">Grids</a>
                                                                                </li>
                                                                                <!-- <li ui-sref-active="active">
                                                                                    <a ui-sref="app.ui.extra">Other</a>
                                                                                </li> -->
                                                                                <li ui-sref-active="active">
                                                                                    <a ui-sref="app.ui.pagination">Pagination</a>
                                                                                </li>
                                                                                <li ui-sref-active="active">
                                                                                    <a ui-sref="app.ui.accordion">Accordions & Tabs</a>
                                                                                </li>
                                                                                <li ui-sref-active="active">
                                                                                    <a ui-sref="app.ui.panels">Section Panels</a>
                                                                                </li>
                                                                                <li ui-sref-active="active">
                                                                                    <a ui-sref="app.ui.tiles">Tiles</a>
                                                                                </li>
                                                                                <li ui-sref-active="active">
                                                                                    <a ui-sref="app.ui.breadcrumb">Breadcrumbs</a>
                                                                                </li>
                                                        </ul>
                                                    </li>
                                                    <li href class="auto"> 
                                                        <a href="javascript:;">
                                                            <i class="material-icons">tune</i>
                                                            <span class="title">Forms</span>
                                                            <span class="arrow material-icons">keyboard_arrow_right</span>
                                                        </a>
                                                        <ul class="wraplist wraplist-sub sub-menu dk" >
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.form.elements">Elements</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.form.components">Components</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.form.validation">Validations</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.form.wizard">Wizard</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.form.masks">Input Masks</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.form.editable">Xeditable</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.form.slider">Slider</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.form.editors">Editors</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.form.fileupload">File Upload</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.form.premade">Pre Made</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li  href class="auto"> 
                                                        <a href="javascript:;">
                                                            <i class="material-icons">redeem</i>
                                                            <span class="title">Pages</span>
                                                            <span class="arrow material-icons">keyboard_arrow_right</span><!-- <span class="label label-orange">NEW</span> -->
                                                        </a>
                                                        <ul class="wraplist wraplist-sub sub-menu dk" >
                                                            <li class='subgroup'><span>Generic</span></li>

                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.ui.timeline">Timeline</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.ui.invoice">Invoice</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.ui.members">Members</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.ui.search">Search</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.ui.blogs">Blogs</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.ui.pricing">Pricing tables</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.ui.profile">Profile</a>
                                                            </li>
                                                            <!-- <li ui-sref-active="active">
                                                                <a ui-sref="app.ui.faq">FAQ</a>
                                                            </li> -->

                                                            <li class='subgroup'><span>User Access</span></li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="access.login">Login</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="access.register">Registration</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="access.forgotpwd">Forgot Password</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="access.lockscreen">Lock Screen</a>
                                                            </li>

                                                            <li class='subgroup'><span>Error</span></li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="access.404">404</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="access.500">500</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li href class="auto"> 
                                                        <a href="javascript:;">
                                                            <i class="material-icons">equalizer</i>
                                                            <span class="title">Charts</span>
                                                            <span class="arrow material-icons">keyboard_arrow_right</span>
                                                        </a>
                                                        <ul class="wraplist wraplist-sub sub-menu dk" >
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.charts.chartjs">Chart JS</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.charts.sparkline">Sparkline</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.charts.flot">Flot</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.charts.morris">Morris</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.charts.rickshaw">Rickshaw</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.charts.easypiechart">PIE & Knobs</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li href class="auto"> 
                                                        <a href="javascript:;">
                                                            <i class="material-icons">list</i>
                                                            <span class="title">Tables</span>
                                                            <span class="arrow material-icons">keyboard_arrow_right</span>
                                                        </a>
                                                        <ul class="wraplist wraplist-sub sub-menu dk" >
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.tables.basic">Basic</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.tables.data">DataTables</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.tables.footable">Footable</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.tables.smart">Smart</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.tables.uigrid">uiGrid</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.tables.editable">Editable</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.tables.nggrid">ngGrid</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li href class="auto"> 
                                                        <a href="javascript:;">
                                                            <i class="material-icons">view_quilt</i>
                                                            <span class="title">Layouts</span>
                                                            <span class="arrow material-icons">keyboard_arrow_right</span>
                                                        </a>
                                                        <ul class="wraplist wraplist-sub sub-menu dk">
                                                            <li ui-sref-active="active">
                                                                <a class="active" ui-sref="app.layout.default">Default</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.layout.collapsed">Collapsed Menu</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.layout.chat">Chat Open</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.layout.boxed">Boxed</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li href class="auto"> 
                                                        <a href="javascript:;">
                                                            <i class="material-icons">map</i>
                                                            <span class="title">Maps</span>
                                                            <span class="arrow material-icons">keyboard_arrow_right</span>
                                                        </a>
                                                        <ul class="wraplist wraplist-sub sub-menu dk" >
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.ui.vectormaps">Vector</a>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a ui-sref="app.ui.googlemapfull">Google</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li href class="auto"> 
                                                        <a href="javascript:;">
                                                            <i class="material-icons">filter_list</i>
                                                            <span class="title">Menu Levels</span>
                                                            <span class="arrow material-icons">keyboard_arrow_right</span>
                                                        </a>
                                                        <ul class="wraplist wraplist-sub sub-menu dk" >
                                                            <li ui-sref-active="active">
                                                                <a>Level 1.1<span class="arrow material-icons">keyboard_arrow_right</span></a>
                                                                <ul class="wraplist wraplist-sub sub-menu dk" >
                                                                    <li ui-sref-active="active">
                                                                        <a>Level 2.1</a>
                                                                    </li>
                                                                    <li ui-sref-active="active">
                                                                        <a>Level 2.2</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li ui-sref-active="active">
                                                                <a>Level 1.2</a>
                                                            </li>

                                                        </ul>
                                                    </li>
                            </ul>
                            <!-- / list -->
                    </nav>
                    <!-- nav -->
                    <div class="sidebar-graphs col-md-12">
                        <h5>
                              Milestone
                              <span class="pull-right">50%</span>
                            </h5>
                        <progressbar value="50" class="progress progress-sm orange"></progressbar>
                        <h5>
                              Time Consumed
                              <span class="pull-right">65%</span>
                            </h5>
                        <progressbar value="65" class="progress progress-sm warning"></progressbar>
                    </div>
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
                                                <div class="" ng-controller="DashboardRadarCtrl">
                                                    <canvas id="radar" class="chart chart-radar" data="data" labels="labels" options="options" colours="colours"></canvas>
                                                </div>
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