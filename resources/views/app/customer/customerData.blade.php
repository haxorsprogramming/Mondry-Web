<!-- customer list  -->
<div class="col-xl-12" id="divDataCustomer" v-if="togDivDataCustomer">
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h5 class="card-title">List Customer</h5>
            <a class="btn btn-rounded btn-primary" @click="addCustomerAtc()">
                <span class="btn-icon-left text-primary"><i class="material-icons">note_add</i></span>Add Customer
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tblCustomer" class="table">
                    <thead>
                        <tr style="background-color: #dfe6e9;">
                            <th>No</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cusData as $cus)
                        <tr>
                            <td>{{ $loop -> iteration }}</td>
                            <td>{{ $cus -> name }}</td>
                            <td>{{ $cus -> address }}</td>
                            <td>{{ $cus -> phone_number }}</td>
                            <td>
                                <a class="btn btn-xs btn-primary btnDetail">
                                    <i class="material-icons">edit_note</i>
                                </a>
                                <a class="btn btn-xs btn-warning btnDelete" @click="deleteAtc('{{ $cus -> id_customer }}')">
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