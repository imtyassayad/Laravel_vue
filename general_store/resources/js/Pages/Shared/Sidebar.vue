<template>
     <div class="side_bar scroll_auto">
        <div class="user-panel">
          <div class="user_image"> <img src="/web/images/about-1.jpg" class="img-circle mCS_img_loaded" alt=""> </div>
          <div class="info">
            <p> Less Williams</p>
            <a href="#"> <i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <ul id="dc_accordion" class="sidebar-menu tree">
          <li> <Link href="/" class=" active nav-link" > <i class="ti-home "></i> <span>Dashboard</span></Link> </li>
          <li> <Link href="/category" class="nav-link "> <i class="ti-home"></i> <span>Categories</span></Link> </li>
          <li> <Link href="/item" class=" nav-link"> <i class="ti-home"></i> <span>Items</span></Link> </li>

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
</template>

<script setup>
import { Link } from '@inertiajs/vue3';



</script>

<style lang="scss" scoped>

</style>
