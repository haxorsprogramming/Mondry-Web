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
                <table id="tblCustomer" class="table table-hover">
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
                    </tbody>
                </table>
            </div>

        </div>
        <div class="card-footer border-0 pt-0">

        </div>
    </div>
</div>