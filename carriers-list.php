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
                    <h3 class="page-title">Carrier</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="welcome.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Carrier</li>
                    </ul>
                </div>
                <div class="col-auto float-right ml-auto">
                    <button type="button" class="btn add-btn" data-toggle="modal" data-target="#add_carrier"><i class="fa fa-plus"></i> Add Carrier</button>
                    <div class="view-icons">
                        <a href="carriers.php" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
                        <a href="carriers-list.php" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!--Filter Row-->
        <form action="" method="POST">
            <div class="row filter-row">
                <div class="col-sm-6 col-md-3">             
                    <div class="form-group form-focus">
                        <input type="search" name="id_search" class="form-control floating">
                        <label class="focus-label">Carrier Name</label>
                    </div>           
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus">
                        <input type="search" name="term" class="form-control floating">
                        <label class="focus-label">Carrier ID</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus select-focus">
                        <select name="carrier_type" class="select floating">
                        <!--Creates a dynamic dropdown box-->
                        <option value="">Select Carrier Type</option>
                            <?php
                            $results = mysqli_query($mysqli, "SELECT * FROM carrier_type");
                            while ($carriers = mysqli_fetch_array($results)){
                                echo "<option value='".$carriers['Carr_type_ID']."'>" .$carriers['Carr_type_name']."</option>";
                            }
                            ?>
                        </select>
                        <label class="focus-label">Carrier Type</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#" class="btn btn-success btn-block"> Search </a>
                </div>
            </div>
        </form>

        <!--start carrier table list view-->
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table datatable">
                        <?php
                        $query = "SELECT * FROM carrier";
                        $query_run = mysqli_query($mysqli, $query);
                        
                        if(mysqli_num_rows($query_run)>0)
                        {
                        ?>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Carrier ID</th>
                                <th>Carrier Type</th>
                                <th class="text-nowrap">Created Date</th>
                                <th class="text-right no-sort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($query_run)):
                            {
                            ?>
                            <tr>
                                <td>
                                    <h2 class="table-avatar">
                                    <a href="#" class="avatar">
                                        <?php echo '<img src="/assets/img/profiles/' .$row['Logo_url'].'" height="35px"; width="35px"; alt="logo">'?>
                                    </a>
                                    <a href="#"><?php echo $row['Carrier_name']?></a>
                                </td>
                                <td>
                                    <?php echo $row['Carrier_ID']?>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a href="" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><?php echo $row['Carrier_type_id']?> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item">
                                                <?php
                                                $results = mysqli_query($mysqli, "SELECT * FROM carrier_type");
                                                    while ($carriers = mysqli_fetch_array($results))
                                                    {
                                                        echo "<option value='".$carriers['Carr_type_ID']."'>" .$carriers['Carr_type_name']."</option>";
                                                    }
                                                ?>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <?php echo $row['Created_on']?>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><img alt="Menu Vertical icon" srcset="https://img.icons8.com/nolan/30/D9E021/FB872B/menu-2.png"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_Carrier" data-id="<?php echo $row['Carrier_ID']; ?>" 
                                                data-name="<?php echo $row['Carrier_name']; ?>" data-type="<?php echo $row['Carrier_type_id']; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_carrier" data-id="<?php echo $row['Carrier_ID']; ?>"
                                                data-name="<?php echo $row['Carrier_name']; ?>" data-typeid="<?php echo $row['Carrier_type_id']; ?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
        <!--end row-->
        
    </div>
    <!--End page-wrapper-->
</div>
<!--End main wrapper-->

<?php   
    require_once "alter_carrier.php"; //calls the carrier modals
    require_once "scripts.php";
    require_once "footer.php";
?>