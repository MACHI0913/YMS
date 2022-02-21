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

<!--Start page-wrapper -->
<div class="page-wrapper">
    <div class="content container-fluid">
        <?php
        if(isset($_SESSION['status']))
        {
            echo "<h4>".$_SESSION['status']."</h4>";
            unset($_SESSION['status']);
        }
        ?>
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title">GOH Locations</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="welcome.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">GOH Locations</li>
                    </ul>
                </div>
            </div> 
        </div>
        <!--End page-header--> 
        
        <div class="row">
            <div class="col-md-4">
                <div class="stats-info">
                    <img alt="Parking icon" srcset="https://img.icons8.com/nolan/40/D9E021/FB872B/parking.png">
                    <h6>Total Spots</h6>
                    <?php
                    $sqlLocation = "SELECT location.Location_ID, location.Location_name, location.Location_desc, 
                    location.Availability_status, department.Dept_name
                    FROM location
                    INNER JOIN department ON location.Dept_ID=department.Department_ID
                    WHERE department.Dept_name='GOH'";
                    if ($result=mysqli_query($mysqli, $sqlLocation))
                    {
                        $rowcount=mysqli_num_rows($result);
                        echo "<h4>" .$rowcount. "</h4>";
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-info">
                    <img alt="Parking icon" srcset="https://img.icons8.com/nolan/40/D9E021/FB872B/parking.png">
                    <h6>Open Doors</h6>
                    <?php
                    $sqlLocation = $sqlLocation = "SELECT location.Location_ID, location.Location_name, location.Location_desc, 
                    location.Availability_status, department.Dept_name
                    FROM location
                    INNER JOIN department ON location.Dept_ID=department.Department_ID
                    WHERE department.Dept_name='GOH' AND Availability_status= 1";
                    if ($result=mysqli_query($mysqli, $sqlLocation))
                    {
                        $rowcount=mysqli_num_rows($result);
                        echo "<h4>" .$rowcount. "</h4>";
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-info">
                    <img alt="Garage Door Part Open icon" srcset="https://img.icons8.com/nolan/40/D9E021/FB872B/garage-door-part-open.png ">
                    <h6>Open Spotss</h6>
                    <?php
                    $sqlLocation = "SELECT location.Location_ID, location.Location_name, location.Location_desc, 
                    location.Availability_status, department.Dept_name
                    FROM location
                    INNER JOIN department ON location.Dept_ID=department.Department_ID
                    WHERE department.Dept_name='GOH' AND Availability_status BETWEEN 2 AND 4";
                    if ($result=mysqli_query($mysqli, $sqlLocation))
                    {
                        $rowcount=mysqli_num_rows($result);
                        echo "<h4>" .$rowcount. "</h4>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <!--End Row-->
        
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-2 d-flex">
                <div class="card flex-fill">
                    <div class="card-body">
                        <h4 class="card-title">Facilies
                            <span class="badge bg-inverse-success ml-1">
                            <?php
                            $sqlLocation = "SELECT location.Location_ID, location.Location_name, location.Location_desc, 
                            location.Availability_status, department.Dept_name
                            FROM location
                            INNER JOIN department ON location.Dept_ID=department.Department_ID
                            WHERE department.Dept_name='GOH' AND Availability_status= 1";
                            if ($result=mysqli_query($mysqli, $sqlLocation))
                            {
                                $rowcount=mysqli_num_rows($result);
                                echo "<h4>" .$rowcount. "</h4>";
                            }
                            ?>
                            </span>
                        </h4>
                        <!--toggle for showing available doors or all doors-->
                        <!--div class="status-toggle">
                            <p><input type="checkbox" id="company_status_2" class="check" checked>
                            <--Checkbox for door availability status>
                            <label for="company_status_2" class="checktoggle">checkbox</label></p>
                        </div-->
                        <!-- add while loop here-->
                        <?php
                        $query = "SELECT location.Location_ID, location.Location_name, location.Location_desc, 
                        location.Availability_status, department.Dept_name
                        FROM location
                        INNER JOIN department ON location.Dept_ID=department.Department_ID
                        WHERE department.Dept_name='GOH'";
                        $query_run = mysqli_query($mysqli, $query);
                        
                        if(mysqli_num_rows($query_run)>0)
                        {
                            while ($row = mysqli_fetch_array($query_run)):
                            {
                        ?>
                        <div class="leave-info-box">
                            <div class="media align-items-center">
                                <!--CHANGE TO ICON-->
                                <img alt="Parking icon" srcset="https://img.icons8.com/nolan/40/D9E021/FB872B/parking.png">
                                <div class="media-body">
                                    <div class="text-sm my-0"><?php echo $row['Location_name']?></div>
                                </div>
                            </div>
                            <div class="row align-items-center mt-3">
                                <div class="col-6">
                                    <span class="text-sm text-muted">Availability Status</span>
                                </div>
                                <div class="col-6 text-right">
                                    <?php
                                    if ($row['Availability_status'] =='1' )
                                    {
                                        echo "<span class='badge bg-inverse-success'>AVAILABLE</span>";
                                    }
                                    elseif($row['Availability_status'] =='2')
                                    {
                                        echo "<span class='badge bg-inverse-danger'>IN-USE</span>";
                                    }
                                    elseif($row['Availability_status'] =='3')
                                    {
                                        echo "<span class='badge bg-inverse-warning'>UNAVAIL</span>";
                                    }
                                    elseif($row['Availability_status'] =='4')
                                    {
                                        echo "<span class='badge bg-inverse-info'>MAINTE..</span>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!--END OF INFO BOX-->
                        <?php
                        }
                        //end of while
                        endwhile;   
                        ?>     
                        <?php
                        }
                        else
                        {
                            echo "No Record Found!";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!--END COLUM-->
        </div>
        <!--End Row-->
    </div>
    <!--End container-fluid-->
</div>
<!--End page wrapper-->

<?php   
    require_once "alter_carrier.php"; //calls the carrier modals
    require_once "scripts.php";
    require_once "footer.php";
?>