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
                    <label class="focus-label">Carrier ID</label>
                </div>           
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus">
                    <input type="search" name="term" class="form-control floating">
                    <label class="focus-label">Carrier Name</label>
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

    <!--start carrier grid view-->
    <div class="row staff-grid-row">
        <!--While loop will create cards for all carriers in table-->  
        <?php
        $query = "SELECT * FROM carrier";
        $query_run = mysqli_query($mysqli, $query);
        
        if(mysqli_num_rows($query_run)>0)
        {
        while ($row = mysqli_fetch_array($query_run)):
            
        ?>
        <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
            <div class="profile-widget">
                <!--added-->
                <div class="profile-img">
                    <!--will display carrier logo-->  
                    <a href="#" class="avatar">
                        <?php echo '<img src="assets/img/profiles/' .$row['Logo_url'].'" height="60px"; width="50px"; alt="logo">'?>                    
                    </a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!--edit/delete buttons-->
                    <a class="dropdown-item" data-toggle="modal" data-target="#edit_Carrier" data-id="<?php echo $row['Carrier_ID']; ?>"
                    data-name="<?php echo $row['Carrier_name']; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>    
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_carrier"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                </div>
            </div>
                <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="profile.php"><?php echo $row['Carrier_name']?></a></h4> 
                <div class="small text-muted"><?php echo $row['Carrier_ID']?></div>
        </div>
    </div>
    <!--end 1st card-->
    <?php
        endwhile; 
    }
    else
    {
        echo "No Record Found!";
    }
    ?>
    <!--End of if else statemments-->
    </div>
</div>
<!--end page wrapper-->

</div>
<!--End main wrapper-->

<!--Start modal section-->
<!--Add Carrier form button-->       
<div id="add_carrier" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Carrier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"> 
                <form action="insert_carrier.php" method="POST" enctype="multipart/form-data">              
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Carrier Name <span class="text-danger">*</span></label>
                                <input name="carrier_name" placeholder="Carrier Name" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Carrier Type <span class="text-danger">*</span></label>
                                <!--Creates a dynamic dropdown box-->
                                <select name='carrier_type' class="select floating" required>
                                    <option value="" >Select Carrier Type</option>
                                    <?php
                                    $results = mysqli_query($mysqli, "SELECT * FROM carrier_type");
                                    while ($carriers = mysqli_fetch_array($results)){
                                        echo "<option value='".$carriers['Carr_type_ID']."'>" .$carriers['Carr_type_name']."</option>";
                                    }
                                    ?>    
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label>Upload image</label>
                                <input type="file" name="carrier_logo" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button type="submit" name="Add_carrier" class="btn btn-primary submit-btn">Submit</button>
                    </div>   
                </form>            
            </div>
            
        </div>
    </div>
</div>

<!--End add modal-->

<!--Edit Modal-->
<div id="edit_Carrier" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Carrier</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="update_carr" method="POST" enctype="multipart/form-data">              
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Carrier ID <span class="text-danger">*</span></label>
                                <input name="carrid" class="form-control" value="" type="text" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Carrier Name <span class="text-danger">*</span></label>
                                <input name="carrname" class="form-control floating" value="" type="text">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Carrier Type <span class="text-danger">*</span></label>                                
                                <!--Creates a dynamic dropdown box-->
                                <select name="carr_type" class="select floating">
                                    <option value="">Select Carrier Type</option>
                                        <?php
                                        $results = mysqli_query($mysqli, "SELECT * FROM carrier_type");
                                        while ($carriers = mysqli_fetch_array($results)){
                                            echo "<option value=".$carriers['Carr_type_ID'].">" .$carriers['Carr_type_name']."</option>";
                                        }                      
                                        ?>    
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Upload image</label>
                                <input type="file" name="carr_logo" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button type="submit" name="save" class="btn btn-primary submit-btn">Save</button>
                    </div> 
                </form>
            </div>
        </div>
    </div>
</div>
<!--End edit modal-->

<!--Delete carrier button-->
<div class="modal custom-modal fade" id="delete_carrier" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h3>Delete Carrier</h3>
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="modal-btn delete-action">
                    <div class="row">
                        <div class="col-6">
                            <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                        </div>
                        <div class="col-6">
                            <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!--Include other files-->
<?php   
    include "scripts.php";
    include "footer.php";
?>


