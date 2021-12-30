<!-- form add new raw material  -->
<div class="col-xl-12" id="divAddServiceItem" style="display: none;">
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h5 class="card-title">Add Raw Material</h5>
            <a class="btn btn-rounded btn-dark">
                <span class="btn-icon-left text-dark"><i class="material-icons">arrow_back</i></span>Back
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Raw Name</label>
                            <input type="text" class="form-control" placeholder="Item Name" id="txtName">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Description</label>
                            <textarea class="form-control" style="resize: none;" placeholder="Description" id="txtDeks"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Unit</label>
                            <select class="form-control" id="txtUnit">
                                <option value="kg">Kg</option>
                                <option value="pcs">Pcs</option>
                                <option value="pcs">Litre</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>First Stock</label>
                            <input type="number" class="form-control" id="txtStock"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">

                    

                </div>
            </div>
            <div>
                <a class="btn btn-rounded btn-primary" href="javascript:void(0)" @click="processAddRawMaterialAtc()">
                    <span class="btn-icon-left text-success"><i class="material-icons">add_task</i></span>Add new item
                </a>
            </div>
        </div>
    </div>
</div>