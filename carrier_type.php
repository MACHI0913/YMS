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
require_once "config.php";
require_once "header.php";
require_once "Sidenavbar.php";
?>
<!--Start page-warpper-->
<div class="page-wrapper">
    <div class="content container-fluid">
        <?php
        if(isset($_SESSION['status']))
        {
            echo $_SESSION['status'];
            unset($_SESSION['status']);
        }
        ?>
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="page-title">Carrier</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="welcome.php">Dashboard</a></li>
                    <li class="breadcrumb-item active">Carrier Type</li>
                </ul>
            </div>
            <div class="col-auto float-right ml-auto">
                <button type="button" class="btn add-btn" data-toggle="modal" data-target="#add_carrtype"><i class="fa fa-plus"></i> Add Carrier Type</button>
            </div>
        </div>
    </div>
    <!--start carrier table list view-->
    <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <?php
                    $query = "SELECT * FROM carrier_type";
                    $query_run = mysqli_query($mysqli, $query);
                    
                    if(mysqli_num_rows($query_run)>0)
                    {
                    ?>
                    <table class="table table-striped custom-table datatable">
                        <thead>
                            <tr>
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
                                    <?php echo $row['Carr_type_ID']?>
                                </td>
                                <td>
                                    <?php echo $row['Carr_type_name']?>
                                </td>
                                <td>
                                    <?php echo $row['Created_on']?>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><img alt="Menu Vertical icon" srcset="https://img.icons8.com/nolan/30/D9E021/FB872B/menu-2.png"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_carrtype" data-id="<?php echo $row['Carr_type_ID']; ?>" 
                                                data-name="<?php echo $row['Carr_type_name']; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_carrtype" data-id="<?php echo $row['Carr_type_ID']; ?>"
                                                data-name="<?php echo $row['Carr_type_name']; ?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
                    </table>
                    <?php
                    }//end of if state
                    else
                    {
                        echo "No Record Found!";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!--end page wrapper-->
</div>
<!--End main wrapper-->
<!--Include other files-->
<?php 
    require_once "alter_carrtype.php"; //calls the modals
    require_once "scripts.php";
    require_once "footer.php";
?>