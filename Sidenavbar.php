<!--navbar-->
    <div class="header">
      <div class="header-left">
        <!--insert logo-->
        <a href="welcome.php" class="logo">
          <img src="assets/img/YMS_logo.png" width="40" height="40" alt="">
        </a>
      </div>

      <!--Toggle collapsable-->
      <a id="toggle_btn" href="javascript:void(0);">
        <span class="bar-icon">
        <span></span>
        <span></span>
        <span></span>
        </span>
      </a>

      <!--Toggle button collapsable-->
      <div class="page-title-box">
        <h3>YMS Dashboard</h3>
      </div>
      <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

      <!--Navbar List menu-->
      <ul class="nav user-menu">
        <li class="nav-item">
          <div class="top-nav-search">
            <a href="javascript:void(0);" class="responsive-search">
              <i class="fa fa-search"></i>
            </a>
            <!--Search bar-->
            <form action="#">
              <input class="form-control" type="text" placeholder="Search here">
              <button class="btn" type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </li>
        <!--Notification bell dropdown-->
        <li class="nav-item dropdown">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <img alt="Bell icon" srcset="https://img.icons8.com/nolan/30/D9E021/FB872B/bell.png">
            <span class="badge badge-pill">3</span>
          </a>
          <!--Notification list-->
          <div class="dropdown-menu notifications">
            <div class="topnav-dropdown-header">
              <span class="notification-title">Notifications</span>
              <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
            </div>
            <div class="noti-content">
              <ul class="notification-list">
                <li class="notification-message">
                  <a href="#">
                  <div class="media">
                    <span class="avatar">
                      <img alt="" src="assets/img/profiles/avatar-02.jpg">
                    </span>
                    <div class="media-body">
                      <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                      <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                    </div>
                  </div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="topnav-dropdown-footer">
              <a href="#">View all Notifications</a>
            </div>
          </div>
        </li>
        <!--End Notification list-->
        <!--User Profile-->
        <li class="nav-item dropdown has-arrow main-drop">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <span class="user-img"><div data-v-57ef97ca="" draggable="true" class="app-icon grid-icon__icon is-nolan"><img srcset="https://img.icons8.com/nolan/30/D9E021/FB872B/unisex.png" loading="lazy"></div>
            <span class="status online"></span></span>
            <span>
              <?php echo $_SESSION['username']; ?>
            </span>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">My Profile</a>
            <a class="dropdown-item" href="#">Settings</a>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </div>
        </li>
      </ul>
      <!--end user profile-->
    <div class="dropdown mobile-user-menu">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="#">My Profile</a>
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
    </div>
    <!--End Navbar List-->
  </div>
  <!--End Navbar-->

    <!--Begin Sidebar-->
    <div class="sidebar" id="sidebar">
      <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
          <ul>
            <li class="menu-title">
              <span>Main</span>
            </li>
            <li class="submenu">
              <a href="#"><div data-v-57ef97ca="" draggable="true" class="app-icon grid-icon__icon is-nolan"><img srcset="https://img.icons8.com/nolan/30/D9E021/FB872B/speed.png"><!----></div></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li><a class="active" href="welcome.php">Admin Dashboard</a></li>
              </ul>
            </li>
            <li class="submenu">
              <a href="#"><img alt="Element Level icon" srcset="https://img.icons8.com/nolan/30/D9E021/FB872B/element-level.png"></i> <span> Apps</span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li class="submenu">
                  <a href="#"><span> Yard Inventory View</span> <span class="menu-arrow"></span></a>
                  <ul style="display: none;">
                    <li><a href="containers.php">Containers</a></li>
                  </ul>
                </li>
                <li><a href="#">Move Requests</a></li>
                <li><a href="#">LineHaul Schedule</a></li>
                <li><a href="LL_scheduler.php">Live Load Scheduler</a></li>
              </ul>
            </li>
            <li class="menu-title">
              <span>Yard</span>
            </li>
            <li class="submenu">
              <a href="#" class="noti-dot"><img srcset="https://img.icons8.com/nolan/30/D9E021/FB872B/traffic-jam.png"><span> Carrier</span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li><a href="carriers.php">All Carriers</a></li>
                <li><a href="carrier_type.php">Carrier Type</a></li>
              </ul>
            </li>
            <li class="submenu">
              <a href="#"><img alt="Marker icon" srcset="https://img.icons8.com/nolan/30/D9E021/FB872B/marker.png"><span>Locations</span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
              <li><a href="all_locations.php">All locations</a></li>
                <li><a href="RWOB_locations.php">RW-OB</a></li>
                <li><a href="AWOB_locations.php">AW-OB</a></li>
                <!--li><a href="#">Shuttles</a></li-->
                <li><a href="Storing_locations.php">Storing</a></li>
                <li><a href="facilities_locations.php">Facilities</a></li>
                <li><a href="Inbound_locations.php">Inbound</a></li>
                <li><a href="GOH_locations.php">GOH</a></li>
                <li><a href="NCG_locations.php">NCG</a></li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="la la-user-secret"></i> <span>Leads</span></a>
            </li>
            <li>
              <a href="#"><i class="la la-ticket"></i> <span>Tickets</span></a>
            </li>
            <li class="menu-title">
              <span>Moves</span>
            </li> 
            <li class="submenu">
              <a href="#"><img alt="Tracking icon" srcset="https://img.icons8.com/nolan/30/D9E021/FB872B/order-on-the-way.png"><span> Moves List </span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li><a href="#">View All</a></li>
                <li><a href="#">Department Snapshot</a></li>
                <li><a href="#">Pending</a></li>
                <li><a href="#">Completed</a></li>
              </ul>
            </li>
            <li class="submenu">
              <a href="#"><i class="la la-files-o"></i> <span> Accounting </span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li><a href="#">Categories</a></li>
                <li><a href="#">Budgets</a></li>
                <li><a href="#">Budget Expenses</a></li>
                <li><a href="#">Budget Revenues</a></li>
              </ul>
            </li>
            <li class="submenu">
              <a href="#"><i class="la la-money"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li><a href="#"> Employee Salary </a></li>
                <li><a href="#"> Payslip </a></li>
                <li><a href="#"> Payroll Items </a></li>
              </ul>
            </li>
            <li>
              <a href="#"><i class="la la-file-pdf-o"></i> <span>Policies</span></a>
            </li>  
          </ul>
        </div>
      </div>
    </div>
    <!--End Sidebar-->
