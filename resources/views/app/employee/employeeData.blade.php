<!-- employee list  -->
<div class="col-xl-12" id="divDataEmployee" v-if="togDivDataBranch">
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h5 class="card-title">List Employee</h5>
            <a class="btn btn-rounded btn-primary" @click="addEmployeeAtc()">
                <span class="btn-icon-left text-primary"><i class="material-icons">note_add</i></span>Add Employee
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tblEmployee" class="table table-hover">
                    <thead>
                        <tr style="background-color: #dfe6e9;">
                            <th>No</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Branch</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($dataEmployee as $employee)
                        <tr>
                            <td>{{ $loop -> iteration }}</td>
                            <td>{{ $employee -> name }}</td>
                            <td>{{ $employee -> roleData -> role_name }}</td>
                            @if($employee -> id_branch == NULL)
                            <td><small class="text-muted">Not set yet</small></td>
                            @else
                            <td>{{ $employee -> branchData -> branch_name }}</td>
                            @endif
                            <td>
                                <a class="btn btn-xs btn-success btnDetail" @click="detailAtc('{{ $employee -> username }}')">
                                    <i class="material-icons">info</i>
                                </a>
                                <a class="btn btn-xs btn-warning btnDelete" @click="deleteAtc('{{ $employee -> username }}')">
                                    <i class="material-icons">delete</i>
                                </a>
                            </td>
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