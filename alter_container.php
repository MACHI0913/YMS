<!--Start of Modals-->
<!--Add Container form button-->       
<div id="add_container" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Container</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"> 
                <form action="insert_container" method="POST" enctype="multipart/form-data">              
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Arrival Date<span class="text-danger">*</span></label>
                                <div name="arrival_date" class="cal-icon"><input class="form-control datetimepicker" type="text" required></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Container Number<span class="text-danger">*</span></label>
                                <input name="container_num" placeholder="Container Num" class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Carrier Name<span class="text-danger">*</span></label>
                                <!--Creates a dynamic dropdown box-->
                                <select id="carrier_type" name="carrier_type" class="select floating" required>
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
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="col-form-label">Location<span class="text-danger">*</span></label>
                                <!--Creates a dynamic dropdown box-->
                                <select id="location" name="location" class="select floating" required>
                                    <option value="">Select Location</option>
                                        <?php
                                        $results = mysqli_query($mysqli, "SELECT * FROM location");
                                        while ($loc = mysqli_fetch_array($results)){
                                            echo "<option value=".$loc['Location_ID'].">" .$loc['Location_name']."</option>";
                                        }
                                        ?>    
                                </select>
                            </div>
                        </div>    
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="col-form-label">Load Status<span class="text-danger">*</span></label>
                                <!--Creates a dynamic dropdown box-->
                                <select id="Load_st" name="Load_st" class="select floating" required>
                                    <option value="">Select Load Status</option>
                                        <?php
                                        $results = mysqli_query($mysqli, "SELECT * FROM load_status");
                                        while ($stat = mysqli_fetch_array($results)){
                                            echo "<option value=".$stat['Load_st_ID'].">" .$stat['Load_st_name']."</option>";
                                        }
                                        ?>    
                                </select>
                            </div>
                        </div>    
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Container Description<span class="text-danger">*</span></label>
                                <!--Creates a dynamic dropdown box-->
                                <select id="Cont_desc" name="Cont_desc" class="select floating" required>
                                    <option value="">Select Container Description</option>
                                        <?php
                                        $results = mysqli_query($mysqli, "SELECT * FROM container_desc");
                                        while ($desc = mysqli_fetch_array($results)){
                                            echo "<option value=".$desc['Cont_desc_ID'].">" .$desc['Cont_desc_name']."</option>";
                                        }
                                        ?>    
                                </select>
                            </div>
                        </div>      
                    </div>
                    <div class="submit-section">
                        <button type="submit" name="Add_container" class="btn btn-primary submit-btn">Submit</button>
                    </div>   
                </form>            
            </div>
            
        </div>
    </div>
</div>
<!--End add modal-->
