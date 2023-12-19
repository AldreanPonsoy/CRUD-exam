<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                <div class="modal-body">
                <div class="container-fluid">
                <form id="addForm">
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Item:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="productname" id="productname" placeholder="Item name">
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Unit:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="unit" id="unit" placeholder="unit?">
                        </div>
                    </div>                
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Price:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="price" id="price" placeholder="Cost">
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Expired:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="expired" id="expired">
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Inventory:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="inventory" id="inventory" placeholder="pcs    ">
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">sales:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="sales" id="sales">
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Image:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="image" id="image">
                        </div>
                    </div>
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="addbutton" class="btn btn-primary"> Save</a>
                </form>
                </div>
                 
            </div>
        </div>
    </div>
 
<!-- Edit -->
    <div class="modal fade" id="editmem" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
                <form id="editForm">
                <div class="row">
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Item:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="eproductname" id="eproductname">
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Unit:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="eunit" id="eunit">
                        </div>
                    </div>                
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Price:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="eprice" id="eprice">
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Expired:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="eexpired" id="eexpired">
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Inventory:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="einventory" id="einventory">
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">sales:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="esales" id="esales">
                        </div>
                    </div>
                    <div style="height:10px;"></div>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="control-label" style="position:relative; top:7px;">Image:</label>
                        </div>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="eimage" id="eimage">
                        </div>
                    </div>
                    
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="editbutton" class="btn btn-warning"> Update</a>
                </form>
                </div>
                 
            </div>
        </div>
    </div>
 
<!-- Delete -->
    <div class="modal fade" id="delmem" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Member</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                <div class="container-fluid">
                    <h5><center>Item: <strong><span id="dproductname"></span></strong></center></h5> 
                </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" id="delbutton" class="btn btn-danger"> Delete</button>
                </div>
                 
            </div>
        </div>
    </div>