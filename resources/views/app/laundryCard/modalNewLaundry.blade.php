<!-- Modal service item-->
<div class="modal fade" id="basicModal">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Service</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table" id="tblNewService">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Service Name</th>
                            <th>Unit</th>
                            <th>Price (@)</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($serviceItem as $item)
                        <tr>
                            <td>{{ $loop -> iteration }}</td>
                            <td>{{ $item -> name }}</td>
                            <td>{{ $item -> unit }}</td>
                            <td>{{ env('CURRENCY') }}. {{ number_format($item -> price_at) }}</td>
                            <td>
                                <a href="javascript:void(0)" class="btn btn-sm btn-primary" @click="chooseAtc('{{ $item -> id_item }}|{{ $item -> name }}|{{ $item -> price_at }}')">Add</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

<!-- modal customer  -->
<div class="modal fade" id="customerModal">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Select customer</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <table class="table" id="tblCustomer">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Customer Name</th>
                            <th>Phone Number</th>
                            <th>Total Transaction</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($cusData as $cus)
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        <td>{{ $cus -> name }}</td>
                        <td>{{ $cus -> phone_number }}</td>
                        <td></td>
                        <td>
                        <a href="javascript:void(0)" class="btn btn-sm btn-primary" @click="chooseCustomerAtc('{{ $cus -> id_customer }}|{{ $cus -> name }}')">Choose</a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
