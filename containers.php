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
                    <h3 class="page-title">Containers</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="welcome.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Containers</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                <button type="button" class="btn add-btn" data-toggle="modal" data-target="#add_container">
                    <i class="fa fa-plus"></i> Add Container</button>
                </div>
            </div> 
        </div>
        <!--End page-header--> 
        
        <!--Start Cards row-->
        <div class="row">
            <div class="col-md-4">
                <div class="stats-info">
                    <img alt="Parking icon" srcset="https://img.icons8.com/nolan/40/D9E021/FB872B/parking.png">
                    <h6>Total Spots</h6>
                    <?php
                    $sqlLocation = "SELECT * FROM location";
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
                    <h6>Open Spots</h6>
                    <?php
                    $sqlLocation = "SELECT * FROM location WHERE Availability_status= 1 AND Location_desc='SPOT'";
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
                    <h6>Open Doors</h6>
                    <?php
                    $sqlLocation = "SELECT * FROM location WHERE Availability_status= 1 AND Location_desc='DOOR'";
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

        <!--Start table-->
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0 datatable">
                        <?php
                        $query = "SELECT container_info.*, container.Container_ID, container.Container_num, 
                        DATE_FORMAT(container_info.Arrival_date, '%m-%d-%Y') AS Arrival,
                        datediff(Arrival_date, now()) AS dif,
                        load_status.Load_st_name, container_desc.Cont_desc_name, location.Location_name, 
                        carrier.Carrier_name 
                        FROM container_info
                        INNER JOIN container ON container_info.Container_ID=container.Container_ID
                        INNER JOIN load_status ON container_info.load_status_ID=load_status.Load_st_ID
                        INNER JOIN container_desc ON container_info.Cont_desc_ID=container_desc.Cont_desc_ID
                        INNER JOIN location ON container_info.Current_loc_ID=location.Location_ID
                        INNER JOIN carrier ON container.Carrier_ID=carrier.Carrier_ID";
                        $query_run = mysqli_query($mysqli, $query);
                        
                        if(mysqli_num_rows($query_run)>0)
                        {
                        ?>    
                        <thead>
                            <tr>
                                <th>Arrival Date</th>
                                <th>Departure Date</th>
                                <th>Cotainer Status</th>
                                <th>Location</th>
                                <th>Container</th>
                                <th>Carrier</th>
                                <th class="text-center">Load Status</th>
                                <th>Container Desc</th>
                                <th class="text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($query_run)):
                            {
                                $id =$row['Container_ID'];   
                            ?>
                            <tr>
                                <td><?php echo $row['Arrival'];?></td>
                                <td>
                                    <?php
                                    if($row['Departure_date'] == "0000-00-00 00:00:00")
                                    {
                                        $query1 ="UPDATE container_info SET Departure = 0
                                        WHERE Container_ID = $id";
                                        $run1= mysqli_query($mysqli, $query1);
                                        echo " ";
                                    }
                                    else
                                    {
                                        $query2 ="UPDATE container_info SET Departure = 1
                                        WHERE Container_ID = $id";
                                        $run2= mysqli_query($mysqli, $query2);
                                        echo $row['Departure_date'];
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if($row['Departure'] == "0")
                                    {
                                        echo "HERE";
                                    }
                                    else
                                    {
                                        echo "GONE";
                                    }
                                    ?>
                                </td>
                                <td><?php echo $row['Location_name']?></td>
                                <td><a href="#" data-toggle="modal" data-target="#show_container" data-id="<?php echo $row['Container_ID']; ?>"
                                    data-contnum="<?php echo $row['Container_num']; ?>" data-adate="<?php echo $row['Arrival']; ?>"
                                    data-carrname="<?php echo $row['Carrier_name']; ?>" data-location="<?php echo $row['Location_name']; ?>" 
                                    data-loadstatus="<?php echo $row['Load_st_name']; ?>" data-contdesc="<?php echo $row['Cont_desc_name']; ?>"
                                    data-dif="<?php echo $row['dif']; ?>" data-arrival="<?php echo $row['Arrival']; ?>" data-created="<?php echo $row['Created_on']; ?>"
                                    data-departure="<?php echo $row['Departure_date']; ?>" data-updated="<?php echo $row['Modified_on']; ?>">
                                    <?php echo $row['Container_num']?></a></td>
                                <td><?php echo $row['Carrier_name']?></td>
                                <td class="text-center"><?php echo $row['Load_st_name']?></td>
                                <td><?php echo $row['Cont_desc_name']?></td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false" ><img alt="Menu Vertical icon" srcset="https://img.icons8.com/nolan/30/D9E021/FB872B/menu-2.png"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#edit_container" data-toggle="modal" data-target="#edit_container"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#delete_container" data-toggle="modal" data-target="#delete_container"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                        </div>
                                    </div> 
                                </td>
                            </tr>
                            <!--end first row-->
                            <?php   
                            }
                            //end of while
                            endwhile;    
                            ?>
                        </tbody>
                        <?php
                        }//end of if state
                        else
                        {
                            echo "No Record Found!";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <!--End of row table-->
    </div>
    <!--End container-fluid-->
</div>
<!--End page wrapper-->



<?php   
    //require_once ""; //calls the carrier modals
    require_once "display_container.php";
    require_once "alter_container.php";
    require_once "scripts.php";
    require_once "footer.php";
?>