<!--Show Container Info button-->       
<div id="show_container" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Container Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"> 
                <form action="#" method="POST" enctype="multipart/form-data">              
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="col-form-label">Container ID</label>
                                <input name="containerid" class="form-control" value="" type="text" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Container Number</label>
                                <input name="container_num" placeholder="Container Num" class="form-control" type="text" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Arrival Date</label>
                                <input name="arrival_date" class="form-control" type="text" readonly>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="col-form-label">Location</label>
                                <input name="location" placeholder="Location" class="form-control" type="text" readonly>
                            </div>
                        </div>    
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="col-form-label">Load Status</label>
                                <input name="load_status" placeholder="Load Satus" class="form-control" type="text" readonly>
                            </div>
                        </div>    
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="col-form-label">Carrier Name</label>
                                <input name="carrier_name" placeholder="Carrier Name" class="form-control" type="text" readonly>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="col-form-label">Days In Yard</label>
                                <input name="dif" placeholder="DIY" class="form-control" type="text" readonly>    
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Container Description</label>
                                <input name="cont_desc" placeholder="Container Description" class="form-control" type="text" readonly>
                            </div>
                        </div> 
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Departure Date</label>
                                <input name="departure_date" class="form-control" type="text" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Created On</label>
                                <input name="created_date" class="form-control" type="text" readonly>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Updated On</label>
                                <input name="updated_date" class="form-control" type="text" readonly>
                            </div>
                        </div>                         
                    </div>
                    <div class="table-responsive m-t-15">
                        <div class="modal-header">
                            <h5 class="modal-title">Container Movement tracker</h5>
                        </div>
                        <table class="table table-striped custom-table" style="position: sticky;top: 0">
                            <thead>
                                <tr>
                                    <th class="header" scope="col">Req #</th>
                                    <th class="header" scope="col">Current Location</th>
                                    <th class="header" scope="col">Destination</th>
                                    <th class="header" scope="col">Move Status</th>
                                    <th class="header" scope="col">Department</th>
                                    <th class="header" scope="col">User</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>