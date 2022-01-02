<!-- form add new promo code  -->
<div class="col-xl-12" id="divAddPromoCode" style="display: none;">
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h5 class="card-title">Add Promo Code</h5>
            <a class="btn btn-rounded btn-dark">
                <span class="btn-icon-left text-dark"><i class="material-icons">arrow_back</i></span>Back
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Promo Name</label>
                            <input type="text" class="form-control" placeholder="Promo name" id="txtName">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Description</label>
                            <textarea class="form-control" style="resize: none;" placeholder="Description" id="txtDeks"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Type</label>
                            <select class="form-control" id="txtType">
                                <option value="P">Percent</option>
                                <option value="V">Value</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Value</label>
                            <input type="number" class="form-control" id="txtValue"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Quota</label>
                            <small>(Leave blank if quota not set)</small>
                            <input type="number" class="form-control" id="txtQuota"/>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Expired On</label>
                            <input type="date" class="form-control" id="txtExpired"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12"></div>
            </div>
            <div>
                <a class="btn btn-rounded btn-primary" href="javascript:void(0)" @click="processAddNewPromoAtc()">
                    <span class="btn-icon-left text-success"><i class="material-icons">add_task</i></span>Add new promo
                </a>
            </div>
        </div>
    </div>
</div>