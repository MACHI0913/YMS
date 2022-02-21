<!--Start of Modals-->
<!--Add Carrier form button-->       
<div id="add_carrtype" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Carrier Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"> 
                <form action="insert_carrtype" method="POST" enctype="multipart/form-data">              
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-form-label">Carrier Type Name <span class="text-danger">*</span></label>
                                <input name="carrtype_name" placeholder="Carrier Name" class="form-control" type="text" required>
                            </div>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button type="submit" name="Add_carrtype" class="btn btn-primary submit-btn">Submit</button>
                    </div>   
                </form>            
            </div>
            
        </div>
    </div>
</div>
<!--End add modal-->

<!--Edit Modal-->
<div id="edit_carrtype" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Carrier Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="update_carrtype" method="POST" enctype="multipart/form-data">              
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="col-form-label">Carrier Type ID</label>
                                <input name="carrtypeid" class="form-control" value="" type="text" readonly>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label class="col-form-label">Carrier Name <span class="text-danger">*</span></label>
                                <input name="carrtypename" class="form-control floating" value="" type="text">
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
<div id="delete_carrtype" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h3>Delete Carrier Type</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="form-body">
                    <form action="delete_carrtype" method="POST" enctype="multipart/form-data">              
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="col-form-label">Carrier Type ID</span></label>
                                    <input name="carrtypeid" class="form-control" value="" type="text" readonly>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label class="col-form-label">Carrier Type Name</label>
                                    <input name="carrtypename" class="form-control floating" value="" type="text" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button type="submit" name="delete" class="btn btn-primary submit-btn">Delete</button>
                        </div>     
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
