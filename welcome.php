<?php
/* === Initialize the session ===*/
session_start();
 
/* ===  Check if the user is logged in, if not then redirect him to login page===*/
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login_form.php"); //redirects to login
    exit;
}
// Include other files may need to change to require_once 
//so that script doesnt continue to run after error
//require_once "config.php";
include "config.php";
include "header.php";
include "Sidenavbar.php";
?>
      
<!--Start main content page-->
<div class="page-wrapper">
  <div class="content container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-sm-12">
          <h3 class="page-title">Welcome
            <?php echo $_SESSION['username']; ?>
          </h3>
          <ul class="breadcrumb">
            <li class="breadcrumb-item active">Dashboard</li>
          </ul>
        </div>
      </div>
    </div>
    <!--Start rows: Row 1-->
    <div class="row">
      <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="card dash-widget">
          <div class="card-body">
            <span class="dash-widget-icon"><img alt="Move icon" srcset="https://img.icons8.com/nolan/40/D9E021/FB872B/move.png"></i></span>
              <div class="dash-widget-info">
                <!--number of pending moves-->
                <h3>112</h3>
                <span>Pending Move Requests</span>
              </div>
            </div>
          </div>
        </div>

      <!--Total trailers card-->  
      <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="card dash-widget">
          <div class="card-body">
            <span class="dash-widget-icon"><img alt="Semi Truck icon" srcset="https://img.icons8.com/nolan/40/D9E021/FB872B/interstate-truck.png"></span>
            <div class="dash-widget-info">
              <!--Number of xpo-->
              <h3>44</h3>
              <span>Available XPOs</span>
            </div>
          </div>
        </div>
      </div>

      <!--Total Live loads card-->
      <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="card dash-widget">
          <div class="card-body">
            <span class="dash-widget-icon"><img alt="Fork Lift icon" srcset="https://img.icons8.com/nolan/40/D9E021/FB872B/fork-lift.png">
            </span>
            <div class="dash-widget-info">
              <!--Live loads-->
              <h3>37</h3>
              <span>Expected Live Loads</span>
            </div>
          </div>
        </div>
      </div>

      <!--Total trailers card-->
      <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
        <div class="card dash-widget">
          <div class="card-body">
            <span class="dash-widget-icon"><img alt="Truck icon" srcset="https://img.icons8.com/nolan/40/D9E021/FB872B/truck.png">
          </span>
            <div class="dash-widget-info">
              <h3>+
              <!--Only counts total containers need a joined stament-->
              <?php
              $sqltrailers = "SELECT * FROM container";
              if ($result=mysqli_query($mysqli, $sqltrailers))
              {
                $rowcount=mysqli_num_rows($result);
                echo $rowcount;
              }
              
              ?>
              </h3>
              <span>Total Trailers in Yard</span>
            </div>
          </div>
        </div>
      </div><!--end of card-->
    </div><!--end of Row-->

    <!--New Row-->
    <div class="row">
      <!--new card-->
      <div class="col-md-12 col-lg-12 col-xl-6 d-flex">
        <div class="card flex-fill dash-statistics">
          <div class="card-body">
            <h5 class="card-title">Yard Statistics</h5>
            <div class="stats-list">
              <div class="stats-info">
                <p>Available spots <strong>4 <small>/ 65</small></strong></p>
                <div class="progress">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="stats-info">
                <p>Pending Invoice <strong>15 <small>/ 92</small></strong></p>
                <div class="progress">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 31%" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="stats-info">
                <p>Completed Projects <strong>85 <small>/ 112</small></strong></p>
                <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="stats-info">
                <p>Open Tickets <strong>190 <small>/ 212</small></strong></p>
                <div class="progress">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="stats-info">
                <p>Closed Tickets <strong>22 <small>/ 212</small></strong></p>
                <div class="progress">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--new card-->
      <div class="col-md-12 col-lg-6 col-xl-6 d-flex">
        <div class="card flex-fill">
          <div class="card-body">
            <h4 class="card-title">Move Statistics</h4>
            <div class="statistics">
              <div class="row">
                <div class="col-md-6 col-6 text-center">
                  <div class="stats-box mb-4">
                    <p>Total Moves</p>
                    <h3>385</h3>
                  </div>
                </div>
              <div class="col-md-6 col-6 text-center">
                <div class="stats-box mb-4">
                    <p>Overdue Tasks</p>
                    <h3>19</h3>
                </div>
              </div>
            </div>
          </div>
            <div class="progress mb-4">
              <div class="progress-bar bg-purple" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%</div>
              <div class="progress-bar bg-warning" role="progressbar" style="width: 22%" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">22%</div>
              <div class="progress-bar bg-success" role="progressbar" style="width: 24%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100">24%</div>
              <div class="progress-bar bg-danger" role="progressbar" style="width: 26%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100">21%</div>
              <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100">10%</div>
            </div>
            <div>
              <p><i class="fa fa-dot-circle-o text-purple mr-2"></i>Completed Moves <span class="float-right">166</span></p>
              <p><i class="fa fa-dot-circle-o text-warning mr-2"></i>In-progress Moves <span class="float-right">115</span></p>
              <p><i class="fa fa-dot-circle-o text-danger mr-2"></i>Pending Moves <span class="float-right">47</span></p>
              <p><i class="fa fa-dot-circle-o text-success mr-2"></i>On Hold Moves <span class="float-right">31</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--New row-->    
    <div class="row">
      <!--new Card-->
      <div class="col-md-12 col-lg-6 col-xl-6 d-flex">
        <div class="card card-table flex-fill">
          <div class="card-header">
            <h3 class="card-title mb-0">Invoices</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-nowrap custom-table mb-0">
                <thead>
                  <tr>
                    <th>Invoice ID</th>
                    <th>Client</th>
                    <th>Due Date</th>
                    <th>Total</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="invoice-view.html">#INV-0001</a></td>
                    <td>
                      <h2><a href="#">Global Technologies</a></h2>
                    </td>
                    <td>11 Mar 2019</td>
                    <td>$380</td>
                    <td>
                      <span class="badge bg-inverse-warning">Partially Paid</span>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="invoice-view.html">#INV-0002</a></td>
                    <td>
                      <h2><a href="#">Delta Infotech</a></h2>
                    </td>
                    <td>8 Feb 2019</td>
                    <td>$500</td>
                    <td>
                      <span class="badge bg-inverse-success">Paid</span>
                    </td>
                  </tr>
                  <tr>
                    <td><a href="invoice-view.html">#INV-0003</a></td>
                    <td>
                      <h2><a href="#">Cream Inc</a></h2>
                    </td>
                    <td>23 Jan 2019</td>
                    <td>$60</td>
                    <td>
                      <span class="badge bg-inverse-danger">Unpaid</span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer">
            <a href="invoices.html">View all invoices</a>
          </div>
        </div>
      </div>

      <!--New card-->
      <div class="col-md-12 col-lg-6 col-xl-6 d-flex">
        <div class="card card-table flex-fill">
          <div class="card-header">
            <h3 class="card-title mb-0">Payments</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table custom-table table-nowrap mb-0">
                <thead>
                  <tr>
                    <th>Invoice ID</th>
                    <th>Client</th>
                    <th>Payment Type</th>
                    <th>Paid Date</th>
                    <th>Paid Amount</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="invoice-view.html">#INV-0001</a></td>
                    <td>
                      <h2><a href="#">Global Technologies</a></h2>
                    </td>
                    <td>Paypal</td>
                    <td>11 Mar 2019</td>
                    <td>$380</td>
                    </tr>
                    <tr>
                    <td><a href="invoice-view.html">#INV-0002</a></td>
                    <td>
                      <h2><a href="#">Delta Infotech</a></h2>
                    </td>
                    <td>Paypal</td>
                    <td>8 Feb 2019</td>
                    <td>$500</td>
                    </tr>
                    <tr>
                    <td><a href="invoice-view.html">#INV-0003</a></td>
                    <td>
                      <h2><a href="#">Cream Inc</a></h2>
                    </td>
                    <td>Paypal</td>
                    <td>23 Jan 2019</td>
                    <td>$60</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer">
            <a href="payments.html">View all payments</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End main page-->

<!--Include other files-->
<?php   
    include "scripts.php";
    include "footer.php";
?>
 