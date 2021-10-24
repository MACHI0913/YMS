<!--navbar-->
<div class="header">
      <div class="header-left">
        <!--insert logo-->
        <a href="welcome.php" class="logo">
          <img src="assets/img/logo.png" width="40" height="40" alt="">
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
            <form action="search.html">
              <input class="form-control" type="text" placeholder="Search here">
              <button class="btn" type="submit"><i class="fa fa-search"></i></button>
            </form>
          </div>
        </li>
        <!--Notification bell dropdown-->
        <li class="nav-item dropdown">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
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
                  <a href="activities.html">
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
              <a href="activities.html">View all Notifications</a>
            </div>
          </div>
        </li>
        <!--End Notification list-->
        <!--User Profile-->
        <li class="nav-item dropdown has-arrow main-drop">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
            <span class="user-img"><img src="assets/img/profiles/avatar-21.jpg" alt="">
            <span class="status online"></span></span>
            <span>
              <?php echo $_SESSION['username']; ?>
            </span>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="settings.html">Settings</a>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </div>
        </li>
      </ul>
      <!--end user profile-->
    <div class="dropdown mobile-user-menu">
      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
          <a class="dropdown-item" href="profile.html">My Profile</a>
          <a class="dropdown-item" href="settings.html">Settings</a>
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
              <a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li><a class="active" href="welcome.php">Admin Dashboard</a></li>
              </ul>
            </li>
            <li class="submenu">
              <a href="#"><i class="la la-cube"></i> <span> Apps</span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li><a href="chat.html">Move Requests</a></li>
                <li class="submenu">
                  <a href="#"><span> Yard Inventory View</span> <span class="menu-arrow"></span></a>
                </li>
                <li><a href="events.html">Live Load</a></li>
              </ul>
            </li>
            <li class="menu-title">
              <span>Yard</span>
            </li>
            <li class="submenu">
              <a href="#" class="noti-dot"><i class="la la-user"></i> <span> Carrier</span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li><a href="carriers.php">All Carriers</a></li>
                <li><a href="holidays.html">Carrier Type</a></li>
                <li><a href="leaves.html">Leaves (Admin) <span class="badge badge-pill bg-primary float-right">1</span></a></li>
              </ul>
            </li>
            <li class="submenu">
              <a href="#"><i class="la la-rocket"></i> <span>Doors</span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li><a href="projects.html">GOH</a></li>
                <li><a href="tasks.html">Inbound</a></li>
                <li><a href="task-board.html">Facilities</a></li>
                <li><a href="task-board.html">LH-OB</a></li>
                <li><a href="task-board.html">ABL-OB</a></li>
                <li><a href="task-board.html">Shuttles</a></li>
              </ul>
            </li>
            <li>
              <a href="leads.html"><i class="la la-user-secret"></i> <span>Leads</span></a>
            </li>
            <li>
              <a href="tickets.html"><i class="la la-ticket"></i> <span>Tickets</span></a>
            </li>
            <li class="menu-title">
              <span>Moves</span>
            </li> 
            <li class="submenu">
              <a href="#"><i class="la la-files-o"></i> <span> Moves List </span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li><a href="estimates.html">View All</a></li>
                <li><a href="invoices.html">Department Snapshot</a></li>
                <li><a href="payments.html">Pending</a></li>
                <li><a href="payments.html">Completed</a></li>
              </ul>
            </li>
            <li class="submenu">
              <a href="#"><i class="la la-files-o"></i> <span> Accounting </span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li><a href="categories.html">Categories</a></li>
                <li><a href="budgets.html">Budgets</a></li>
                <li><a href="budget-expenses.html">Budget Expenses</a></li>
                <li><a href="budget-revenues.html">Budget Revenues</a></li>
              </ul>
            </li>
            <li class="submenu">
              <a href="#"><i class="la la-money"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
              <ul style="display: none;">
                <li><a href="salary.html"> Employee Salary </a></li>
                <li><a href="salary-view.html"> Payslip </a></li>
                <li><a href="payroll-items.html"> Payroll Items </a></li>
              </ul>
            </li>
            <li>
              <a href="policies.html"><i class="la la-file-pdf-o"></i> <span>Policies</span></a>
            </li>
            <li class="submenu">
            <a href="#"><i class="la la-pie-chart"></i> <span> Reports </span> <span class="menu-arrow"></span></a>
            <ul style="display: none;">
            <li><a href="expense-reports.html"> Expense Report </a></li>
            <li><a href="invoice-reports.html"> Invoice Report </a></li>
            <li><a href="payments-reports.html"> Payments Report </a></li>
            <li><a href="project-reports.html"> Project Report </a></li>
            <li><a href="task-reports.html"> Task Report </a></li>
            <li><a href="user-reports.html"> User Report </a></li>
            <li><a href="employee-reports.html"> Employee Report </a></li>
            <li><a href="payslip-reports.html"> Payslip Report </a></li>
            <li><a href="attendance-reports.html"> Attendance Report </a></li>
            <li><a href="leave-reports.html"> Leave Report </a></li>
            <li><a href="daily-reports.html"> Daily Report </a></li>
            </ul>
            </li>
            <li class="menu-title">
            <span>Performance</span>
            </li>
            <li class="submenu">
            <a href="#"><i class="la la-graduation-cap"></i> <span> Performance </span> <span class="menu-arrow"></span></a>
            <ul style="display: none;">
            <li><a href="performance-indicator.html"> Performance Indicator </a></li>
            <li><a href="performance.html"> Performance Review </a></li>
            <li><a href="performance-appraisal.html"> Performance Appraisal </a></li>
            </ul>
            </li>
            <li class="submenu">
            <a href="#"><i class="la la-crosshairs"></i> <span> Goals </span> <span class="menu-arrow"></span></a>
            <ul style="display: none;">
            <li><a href="goal-tracking.html"> Goal List </a></li>
            <li><a href="goal-type.html"> Goal Type </a></li>
            </ul>
            </li>
            <li class="submenu">
            <a href="#"><i class="la la-edit"></i> <span> Training </span> <span class="menu-arrow"></span></a>
            <ul style="display: none;">
            <li><a href="training.html"> Training List </a></li>
            <li><a href="trainers.html"> Trainers</a></li>
            <li><a href="training-type.html"> Training Type </a></li>
            </ul>
            </li>
            <li><a href="promotion.html"><i class="la la-bullhorn"></i> <span>Promotion</span></a></li>
            <li><a href="resignation.html"><i class="la la-external-link-square"></i> <span>Resignation</span></a></li>
            <li><a href="termination.html"><i class="la la-times-circle"></i> <span>Termination</span></a></li>
            <li class="menu-title">
            <span>Administration</span>
            </li>
            <li>
            <a href="assets.html"><i class="la la-object-ungroup"></i> <span>Assets</span></a>
            </li>
            <li class="submenu">
            <a href="#"><i class="la la-briefcase"></i> <span> Jobs </span> <span class="menu-arrow"></span></a>
            <ul style="display: none;">
            <li><a href="user-dashboard.html"> User Dasboard </a></li>
            <li><a href="jobs-dashboard.html"> Jobs Dasboard </a></li>
            <li><a href="jobs.html"> Manage Jobs </a></li>
            <li><a href="manage-resumes.html"> Manage Resumes </a></li>
            <li><a href="shortlist-candidates.html"> Shortlist Candidates </a></li>
            <li><a href="interview-questions.html"> Interview Questions </a></li>
            <li><a href="offer_approvals.html"> Offer Approvals </a></li>
            <li><a href="experiance-level.html"> Experience Level </a></li>
            <li><a href="candidates.html"> Candidates List </a></li>
            <li><a href="schedule-timing.html"> Schedule timing </a></li>
            <li><a href="apptitude-result.html"> Aptitude Results </a></li>
            </ul>
            </li>
            <li>
            <a href="knowledgebase.html"><i class="la la-question"></i> <span>Knowledgebase</span></a>
            </li>
            <li>
            <a href="activities.html"><i class="la la-bell"></i> <span>Activities</span></a>
            </li>
            <li>
            <a href="users.html"><i class="la la-user-plus"></i> <span>Users</span></a>
            </li>
            <li>
            <a href="settings.html"><i class="la la-cog"></i> <span>Settings</span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!--End Sidebar-->
