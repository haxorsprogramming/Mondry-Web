<!-- form add new laundry card  -->
<div class="col-xl-12" id="divAddServiceItem">
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h5 class="card-title">Add New Laundry</h5>
            <a class="btn btn-rounded btn-dark">
                <span class="btn-icon-left text-dark"><i class="material-icons">arrow_back</i></span>Back
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Customer</label>
                            <select id="single-select" class="form-control">
                                <option value="none">--- Choose Customer ---</option>
                                @foreach($cusData as $cus)
                                <option value="{{ $cus -> id_customer }}">{{ $cus -> name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Service Item</label><br />
                                    <a href="javascript:void(0)" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#basicModal">

                                        Add new service
                                    </a>
                                    </select>
                                </div>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Item Serviice</th>
                                        <th>Price (@)</th>
                                        <th>Qt</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                    Preview
                </div>
            </div>
            <hr />
            <div style="margin-top: 20px;">
                <a class="btn btn-rounded btn-primary" href="javascript:void(0)">
                    <span class="btn-icon-left text-success"><i class="material-icons">how_to_reg</i></span>Registration New Laundry
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="basicModal">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Service</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">Modal body text goes here.</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('ladun/base/js/newLaundryCard.js') }}"></script>
