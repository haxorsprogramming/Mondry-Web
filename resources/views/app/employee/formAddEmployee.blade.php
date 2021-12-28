<!-- employee list  -->
<div class="col-xl-12" id="divAddEmployee" style="display: none;">
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h5 class="card-title">Add Employee</h5>
            <a class="btn btn-rounded btn-dark">
                <span class="btn-icon-left text-dark"><i class="material-icons">arrow_back</i></span>Back
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" id="txtName" ref="nameEmployee" onkeyup="setEmployeeName()">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="Address" id="txtAddress">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Username</label>
                            <input type="text" class="form-control" placeholder="Username for login" id="txtUsername">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" placeholder="Phone number" id="txtPhoneNumber">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password for login" id="txtPassword">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Email" id="txtEmail">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Role</label>
                            <select class="form-control" id="txtRole" onchange="setRole()">
                                <option value="none">--- Choose Role ---</option>
                                @foreach($role as $role)
                                <option value="{{ $role -> kd_role }}|{{ $role -> role_name }}">{{ $role -> role_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md6" v-if="toogleBranch">
                            <label>Branch</label>
                            <select class="form-control">
                                <option>--- Choose branch ---</option>
                                @foreach($dataBranch as $branch)
                                <option value="{{ $branch -> id_branch }}">{{ $branch -> branch_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">

                    <div class="card overflow-hidden">
                        <div class="card-body">
                            <div class="text-center">
                                <div class="profile-photo">
                                    <img src="{{ asset('/ladun/lib/acara') }}/images/profile/profile.png" width="100" class="img-fluid rounded-circle" alt="Profile Pic" id="txtPreviewUpload">
                                </div>
                                <h3 class="mt-4 mb-1">@{{ employeeName }}</h3>
                                <p class="text-muted">@{{ roleSelected }}</p>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="txtFoto" onchange="setImg()">
                                        <label class="custom-file-label">Choose pic</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer pt-0 pb-0 text-center">

                        </div>
                    </div>

                </div>
            </div>
            <div>
                <a class="btn btn-rounded btn-primary" href="javascript:void(0)" @click="addNewEmployeeProcessAtc()">
                    <span class="btn-icon-left text-success"><i class="material-icons">how_to_reg</i></span>Add new employee
                </a>
            </div>
        </div>
    </div>
</div>