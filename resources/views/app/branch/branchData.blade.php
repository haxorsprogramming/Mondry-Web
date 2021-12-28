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
        <div>
            <nav>
                <ul class="pagination pagination-gutter">
                    <li class="page-item page-indicator">
                        <a class="page-link" href="javascript:void(0)">
                            <i class="la la-angle-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                    <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                    <li class="page-item page-indicator">
                        <a class="page-link" href="javascript:void(0)">
                            <i class="la la-angle-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="card-footer border-0 pt-0">
            
        </div>
    </div>
</div>

