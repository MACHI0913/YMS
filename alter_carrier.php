<!--Start of Modals-->
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
                <form action="insert_carrier" method="POST" enctype="multipart/form-data">              
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
                                <select name="carrier_type" class="select floating" required>
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
                                <label class="col-form-label">Carrier ID</label>
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
                                <select id="carrier_type" name="carrier_type" class="select floating">
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
                                <input type="file" name="carrier_logo" class="form-control">
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

<!--Delete carrier button-->
<div id="delete_carrier" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h3>Delete Carrier</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="form-body">
                <form action="delete_carrier" method="POST" enctype="multipart/form-data">              
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Carrier ID</span></label>
                                <input name="carrid" class="form-control" value="" type="text" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Carrier Name</label>
                                <input name="carrname" class="form-control floating" value="" type="text" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Carrier Type</label>
                                <input name="carrier_type" class="form-control floating" value="" type="text" readonly>
                            </div>
                        </div>
                    </div>
                        <div class="submit-section">
                            <button type="submit" name="delete" class="btn btn-primary submit-btn">Delete</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
