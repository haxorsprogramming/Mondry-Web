<!-- branch list  -->
<div class="col-xl-12" id="divDataBranch">
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h5 class="card-title">List Branch</h5>
            <a class="btn btn-rounded btn-primary" @click="addBranchAtc()">
                <span class="btn-icon-left text-primary"><i class="material-icons">note_add</i></span>Add Branch
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tblBranch" class="table table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Branch Name</th>
                            <th>Address</th>
                            <th>Manager</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dataBranch as $branch)
                        <tr>
                            <td>{{ $loop -> iteration }}</td>
                            <td>{{ $branch -> branch_name }}</td>
                            <td>{{ $branch -> address }}</td>
                            <td>{{ $branch -> employeeData -> name }}</td>
                            <td>{{ $branch -> status }}</td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
        <div class="card-footer border-0 pt-0">
            
        </div>
    </div>
</div>

