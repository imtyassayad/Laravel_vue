<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!-- Plugins CSS -->
    <link href="/web/css/plugins.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/web/css/style.css" rel="stylesheet">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/web/images/favicon.ico">
    @inertiaHead

</head>

<body>
    <div id="dvLoading"></div>
    <div class="wrapper">
      <!-- header -->
      <div class="header-bg">
        <header class="main-header">
          <div class="container_header phone_view border_top_bott">
            <div class="row">
              <div class="col-md-12 d-flex justify-content-between align-items-center">
                <div class="menu-icon"> <a href="javascript:void(0)" class="menu-toggler sidebar-toggler"></a> </div>
                <div class="logo d-flex align-items-center justify-content-center"> <a href="javascript:void(0)"> <strong
                      class="logo_icon"> <img src="/web/images/small-logo.png" alt=""> </strong> <span class="logo-default">
                      <img src="/web/images/small-logo.png" alt=""> </span> </a> </div>
                <div class="right_detail">
                  <div class="row d-flex align-items-center justify-content-end">
                    <div class="col-xl-12 col-12 d-flex justify-content-end">
                      <div class="right_bar_top d-flex align-items-center">

                        <!-- notification_Start -->
                        <div class="dropdown dropdown-notification"> <a href="javascript:void(0)" class="dropdown-toggle"
                            data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="false">
                            <i class="fa fa-bell"></i> <span class="badge_coun"> 6 </span> </a>
                          <ul class="dropdown-menu scroll_auto height_fixed">
                            <li class="bigger">
                              <h3><span class="bold">Notifications</span></h3>
                              <span class="notification-label">New 6</span>
                            </li>
                            <li>
                              <ul class="dropdown-menu-list">
                                <li> <a href="javascript:void(0)"> <span class="time">just now</span> <span
                                      class="details"> <span class="notification-icon deepPink-bgcolor"> <i
                                          class="fa fa-check"></i> </span> Congratulations!. </span> </a> </li>
                                <li> <a href="javascript:void(0)"> <span class="time">3 mins</span> <span class="details">
                                      <span class="notification-icon purple-bgcolor"> <i class="fa fa-user o"></i> </span>
                                      <b>John Micle </b>is now following you. </span> </a> </li>
                                <li> <a href="javascript:void(0)"> <span class="time">7 mins</span> <span class="details">
                                      <span class="notification-icon blue-bgcolor"> <i class="fa fa-comments-o"></i>
                                      </span> <b>Sneha Jogi </b>sent you a message. </span> </a> </li>
                                <li> <a href="javascript:void(0)"> <span class="time">12 mins</span> <span
                                      class="details"> <span class="notification-icon pink"> <i class="fa fa-heart"></i>
                                      </span> <b>Ravi Patel </b>like your photo. </span> </a> </li>
                                <li> <a href="javascript:void(0)"> <span class="time">15 mins</span> <span
                                      class="details"> <span class="notification-icon yellow"> <i
                                          class="fa fa-warning"></i> </span> Warning! </span> </a> </li>
                                <li> <a href="javascript:void(0)"> <span class="time">10 hrs</span> <span class="details">
                                      <span class="notification-icon red"> <i class="fa fa-times"></i> </span> Application
                                      error. </span> </a> </li>
                              </ul>
                            </li>
                          </ul>
                        </div>
                        <!-- notification_End -->

                        <!-- Dropdown_User -->
                        <div class="dropdown dropdown-user"> <a href="javascript:void(0)" class="dropdown-toggle"
                            data-toggle="dropdown" data-hover="dropdown" data-close-others="true" aria-expanded="true">
                            <img class="img-circle pro_pic" src="/web/images/user3.png" alt=""> </a>
                          <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                              <div class="user-panel">
                                <div class="user_image"> <img src="/web/images/user3.png" class="img-circle mCS_img_loaded"
                                    alt=""> </div>
                                <div class="info">
                                  <p> James Vince </p>
                                  <a href="#"> info@sbtechnosoft.com</a>
                                </div>
                              </div>
                            </li>
                            <li> <a href="#"> <i class="icon-user"></i> Profile </a> </li>
                            <li> <a href="#"> <i class="icon-settings"></i> Settings </a> </li>
                            <li> <a href="#"> <i class="icon-directions"></i> Help </a> </li>
                            <li class="divider"></li>
                            <li> <a href="404.html"> <i class="icon-lock"></i> Lock </a> </li>
                            <li> <a href="#"> <i class="icon-logout"></i> Log Out </a> </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
      </div>
      <!-- header_End -->
      <!-- Content_right -->
      <div class="container_full">
        <div class="side_bar scroll_auto">
            <div class="user-panel">
              <div class="user_image"> <img src="/web/images/about-1.jpg" class="img-circle mCS_img_loaded" alt=""> </div>
              <div class="info">
                <p> Less Williams</p>
                <a href="#"> <i class="fa fa-circle text-success"></i> Online</a>
              </div>
            </div>
            <ul id="dc_accordion" class="sidebar-menu tree">
              <li> <a href="/" class=" active nav-link" > <i class="ti-home "></i> <span>Dashboard</span></a> </li>
              <li> <a href="/category" class="nav-link "> <i class="ti-home"></i> <span>Categories</span></a> </li>
              <li> <a href="/item" class=" nav-link"> <i class="ti-home"></i> <span>Items</span></a> </li>

              <li class="menu_sub"> <a href="#"> <i class="ti-blackboard"></i> <span>UI Elements </span> <span
                    class="badge badge-pill badge-danger float-right">New</span> </a>
                <ul class="down_menu">
                  <li><a href="alerts.html">Alerts</a></li>
                  <li><a href="badges.html">Badges</a></li>
                  <li><a href="buttons.html">Buttons</a></li>
                  <li><a href="cards.html">Cards</a></li>
                  <li><a href="carousel.html">Carousel</a></li>
                  <li><a href="collapse.html">Collapse</a></li>
                  <li><a href="dropdowns.html">Dropdowns</a></li>
                  <li><a href="embeds.html">Embeds</a></li>
                  <li><a href="grids.html">Grids</a></li>
                  <li><a href="images.html">Images</a></li>
                  <li><a href="media.html">Media</a></li>
                  <li><a href="modals.html">Modals</a></li>
                  <li><a href="paginations.html">Paginations</a></li>
                  <li><a href="popovers.html">Popovers</a></li>
                  <li><a href="progressbars.html">Progress Bars</a></li>
                  <li><a href="spinners.html">Spinners</a></li>
                  <li><a href="tabs.html">Tabs</a></li>
                  <li><a href="toasts.html">Toasts</a></li>
                  <li><a href="tooltips.html">Tooltips</a></li>
                  <li><a href="typography.html">Typography</a></li>
                </ul>
              </li>
              <li class="menu_sub"> <a href="#"> <i class="ti-pencil-alt"></i> <span>Icons</span> <span
                    class="ti ti-angle-down styleicon"></span> </a>
                <ul class="down_menu">
                  <li><a href="themify.html">Themify</a></li>
                  <li><a href="font-awesome.html">Font Awesome</a></li>
                  <li><a href="dripicons.html">Dripicons</a></li>
                  <li><a href="feather.html">Feather</a></li>

                  <li><a href="ionicons.html">Ion</a></li>
                  <li><a href="line-awesome.html">Line Awesome</a></li>
                  <li><a href="material-design.html">Material Design</a></li>
                  <li><a href="remixicon.html">Remixicon</a></li>
                  <li><a href="simple-line.html">Simple Line</a></li>
                  <li><a href="socicon.html">Socicon</a></li>
                  <li><a href="typicons.html">Typicons</a></li>
                </ul>
              </li>
              <li class="menu_sub"> <a href="#"> <i class="fa fa-table"></i> <span>Widgets </span> <span
                    class="ti ti-angle-down styleicon"></span> </a>
                <ul class="down_menu">
                  <li> <a href="widgets-base.html">Widgets Base</a> </li>
                  <li> <a href="widgets-chart.html">Widgets Chart</a> </li>
                </ul>
              </li>
              <li class="menu_sub"> <a href="#"> <i class="fa fa-envelope-o"></i> <span>Email </span> <span
                    class="badge badge-pill badge-info float-right">New</span> </a>
                <ul class="down_menu">
                  <li> <a href="inbox.html">Inbox</a> </li>
                  <li> <a href="inbox-details.html">Email Read</a> </li>
                  <li> <a href="inbox-compose.html">Email Compose</a> </li>
                </ul>
              </li>
              <li class="menu_sub"> <a href="#"> <i class="icon-calendar"></i> <span>Calendar </span> <span
                    class="ti ti-angle-down styleicon"></span> </a>
                <ul class="down_menu">
                  <li> <a href="calendar-basic.html">Basic Calendar</a> </li>
                  <li> <a href="calendar-external-events.html">External Events Calendar</a> </li>
                  <li> <a href="calendar-list.html">List Calendar</a> </li>
                </ul>
              </li>
              <li class="menu_sub"> <a href="#"> <i class="icon-speech"></i> <span>Forms</span> <span
                    class="ti ti-angle-down styleicon"></span> </a>
                <ul class="down_menu">
                  <li><a href="form-elements.html">Form Elements</a></li>
                  <li><a href="form-validation.html">Form Validation</a></li>
                  <li><a href="form-pickers.html">Form Pickers</a></li>
                  <li><a href="form-wizard.html">Form Wizard</a></li>
                  <li><a href="form-mask.html">Form Masks</a></li>
                  <li><a href="form-x-editable.html">X Editable</a></li>
                  <li><a href="form-uploads.html">Multiple File Upload</a></li>
                </ul>
              </li>
              <li class="menu_sub"> <a href="#"> <i class="ti-layout-cta-center"></i> <span>Apps </span> <span
                    class="ti ti-angle-down styleicon"></span> </a>
                <ul class="down_menu">
                  <li><a href="apps-calendar.html">Calendar</a></li>
                  <li><a href="apps-contacts.html">Contacts</a></li>
                  <li><a href="apps-todo.html">Todo List</a></li>

                </ul>
              </li>
              <li class="menu_sub"> <a href="#"> <i class="icon-grid"></i> <span>Tables</span> <span
                    class="ti ti-angle-down styleicon"></span> </a>
                <ul class="down_menu">
                  <li><a href="tables-basic.html">Basic Tables</a></li>
                  <li><a href="tables-datatable.html">Data Tables</a></li>
                  <li><a href="tables-responsive.html">Responsive Table</a></li>
                  <li><a href="tables-tablesaw.html">Tablesaw Tables</a></li>
                  <li><a href="tables-foo.html">Foo Tables</a></li>
                </ul>
              </li>
              <li class="menu_sub"> <a href="#"> <i class="ti-pie-chart"></i> <span>Charts</span> <span
                    class="ti ti-angle-down styleicon"></span> </a>
                <ul class="down_menu">
                  <li><a href="chart-flot.html">Flot Chart</a></li>
                  <li><a href="chart-morris.html">Morris Chart</a></li>
                  <li><a href="chart-google.html">Google Chart</a></li>
                  <li><a href="chart-chartist.html">Chartist Chart</a></li>
                  <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                  <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                  <li><a href="chart-knob.html">Jquery Knob</a></li>
                </ul>
              </li>
              <li class="menu_sub"> <a href="#"> <i class="icon-equalizer"></i> <span>Extra Pages</span> <span
                    class="ti ti-angle-down styleicon"></span> </a>
                <ul class="down_menu">
                  <li> <a href="profile.html">User Profile</a> </li>
                  <li> <a href="page-login.html">Sign In</a> </li>
                  <li> <a href="page-register.html">Sign Up</a> </li>
                  <li> <a href="invoice.html">Invoice</a> </li>
                  <li> <a href="page_404.html">404</a> </li>
                </ul>
              </li>
            </ul>
        </div>
          @inertia
          <div class="row">
            <div class="col-lg-12">
                <!-- Start Footerbar -->
                <div class="footerbar">
                    <footer class="footer">
                    <p class="mb-0">© <span id="year"></span> Multinod - All Rights Reserved.</p>
                    </footer>
                </div>
                <!-- End Footerbar -->
            </div>
        </div>
      </div>
    </div>


    <!--jquery js -->
    <script type="" src="{{ asset('web/js/jquery-min.js') }}"></script>
    <script src="{{ asset('web/js/popper.min.js') }}"></script>
    <!--jquery js -->
    <script src="{{ asset('web/js/bootstrap.min.js') }}"></script>
    <!--jquery js -->
    <script src="{{ asset('web/js/plugins.js') }}"></script>
    <!--mCustomScrollbar js -->
    <script src="{{ asset('web/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <!--Fontawesome js -->
    <script src="{{ asset('web/js/fontawesome.js') }}"></script>
    <!--Dcjqaccordion js -->
    <script src="{{ asset('web/js/jquery.dcjqaccordion.js') }}"></script>
    <!--Charts js -->
    <script src="{{ asset('web/js/apexcharts.min.js') }}"></script>
    <!--Custom Dashboard js -->
    <script src="{{ asset('web/js/custom-dashboard.js') }}"></script>
    <!--jquery js -->
    <script src="{{asset('web/js/custom.js')}}"></script>



   @vite('resources/js/app.js')

</body>

</html>
