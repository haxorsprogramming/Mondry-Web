<!-- employee list  -->
<div class="col-xl-12" id="divAddBranch" style="display: none;">
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h5 class="card-title">Add New Branch</h5>
            <a class="btn btn-rounded btn-dark">
                <span class="btn-icon-left text-dark"><i class="material-icons">arrow_back</i></span>Back
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Branch Name</label>
                            <input type="text" class="form-control" placeholder="Name" id="txtName">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="Address" id="txtAddress">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Owner Name</label>
                            <input type="text" class="form-control" placeholder="Username for login" id="txtUsername">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" placeholder="Phone number" id="txtPhoneNumber">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Main Branch</label>
                            <select class="form-control" id="txtMainBranch">
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Manager</label>
                            <select class="form-control" id="txtManager">
                                <option value="none"> -- Choose manager for branch --</option>
                                @foreach($dataManager as $manager)
                                <option value="{{ $manager -> username }}">{{ $manager -> name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">

                    

                </div>
            </div>
            <div>
                <a class="btn btn-rounded btn-primary" href="javascript:void(0)">
                    <span class="btn-icon-left text-success"><i class="material-icons">how_to_reg</i></span>Add new branch
                </a>
            </div>
        </div>
    </div>
</div>