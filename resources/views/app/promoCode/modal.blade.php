<!-- modal add promo code  -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalAddPromoCode">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Promo Code</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
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
                                <label>Promo Code</label>
                                <input type="text" class="form-control" placeholder="Promo code" id="txtPromoCode">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Type</label>
                                <select class="form-control" id="txtType">
                                    <option value="P">Percent</option>
                                    <option value="V">Value</option>
                                </select>
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Value</label>
                                <input type="number" class="form-control" id="txtValue" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Quota</label>
                                <small>(Leave blank if quota not set)</small>
                                <input type="number" class="form-control" id="txtQuota" />
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Expired On</label>
                                <input type="date" class="form-control" id="txtExpired" />
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
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- modal edit promo code  -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalEditPromo">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Promo Code</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Promo Name</label>
                                <input type="text" class="form-control" placeholder="Promo name" id="txtNameEdit">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Description</label>
                                <textarea class="form-control" style="resize: none;" placeholder="Description" id="txtDeksEdit"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Promo Code</label>
                                <input type="text" class="form-control" placeholder="Promo code" id="txtPromoCodeEdit">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Type</label>
                                <select class="form-control" id="txtTypeEdit">
                                    <option value="P">Percent</option>
                                    <option value="V">Value</option>
                                </select>
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Value</label>
                                <input type="number" class="form-control" id="txtValueEdit" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Quota</label>
                                <small>(Leave blank if quota not set)</small>
                                <input type="number" class="form-control" id="txtQuotaEdit" />
                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label>Expired On</label>
                                <input type="date" class="form-control" id="txtExpiredEdit" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-12"></div>
                </div>
                <div>
                    <a class="btn btn-rounded btn-primary" href="javascript:void(0)">
                        <span class="btn-icon-left text-success"><i class="material-icons">add_task</i></span>Save promo
                    </a>
                </div>
            </div>
            <div class="modal-footer bg-whitesmoke br">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>