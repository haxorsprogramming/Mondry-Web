<!-- form add new customer  -->
<div class="col-xl-12" id="divAddCustomer" style="display: none;">
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h5 class="card-title">Add Customer</h5>
            <a class="btn btn-rounded btn-dark">
                <span class="btn-icon-left text-dark"><i class="material-icons">arrow_back</i></span>Back
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Customer Name</label>
                            <input type="text" class="form-control" placeholder="Customer Name" id="txtName">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Address</label>
                            <textarea class="form-control" style="resize: none;" placeholder="Address" id="txtAddress"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Email" id="txtEmail">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" placeholder="Phone Number" id="txtPhoneNumber">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">

                    

                </div>
            </div>
            <div>
                <a class="btn btn-rounded btn-primary" href="javascript:void(0)" @click="processAddNewCustomerAtc()">
                    <span class="btn-icon-left text-success"><i class="material-icons">add_task</i></span>Add new customer
                </a>
            </div>
        </div>
    </div>
</div>