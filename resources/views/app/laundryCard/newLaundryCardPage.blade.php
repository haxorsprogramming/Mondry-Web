<!-- form add new laundry card  -->
<div class="col-xl-12" id="divAddLaundryCard">
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h5 class="card-title">Add New Laundry</h5>
            <a class="btn btn-rounded btn-dark">
                <span class="btn-icon-left text-dark"><i class="material-icons">arrow_back</i></span>Back
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row">
                        <div class="form-group col-md-6">
                        <h4 class="text-primary mb-4">Customer</h4>
                            <div style="margin-bottom: 20px;">
                                <span v-if="togCusData" style="font-size: 20px;">(@{{ customerSelected }})</span>
                            </div>
                            <a href="javascript:void(0)" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#customerModal">@{{ txtBtnSelectCustomer }}</a>
                        </div>
                    </div>
                    <hr />
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="form-group col-md-6">
                                <h4 class="text-primary mb-4">Service Item</h4><br />
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
                                        <th>Item Service</th>
                                        <th>Price (@)</th>
                                        <th>Qt</th>
                                        <th>Total</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="id in itemData">
                                        <td>@{{ id.no }}</td>
                                        <td>@{{ id.itemName }}</td>
                                        <td>{{ env('CURRENCY') }}. @{{ Number(id.priceAt).toLocaleString() }}</td>
                                        <td>
                                            <input type="number" class="form-control" maxlength="5" v-on:keyup="setPrice(id.idItem)" v-bind:id="'qt_'+id.idItem" value="0" />
                                        </td>
                                        <td>{{ env('CURRENCY') }}. @{{ Number(id.total).toLocaleString() }}</td>
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-sm btn-warning btnDelete" @click='deleteItem(id.idItem)'>Delete</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4"><b>Total</b></td>
                                        <td>{{ env('CURRENCY') }}. @{{ Number(totalPrice).toLocaleString() }}</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Payment Options</label>
                            <select id="txtPayment" class="form-control" onchange="setPayment()">
                                <option value="none">--- Choose payment type ---</option>
                                <option value="now">Pay now</option>
                                <option value="later">Pay after done</option>
                            </select>
                        </div>
                    </div>
                    <hr />
                    @include('app.laundryCard.payment.paymentSummary')
                </div>
            </div>
            <hr />
            <div style="margin-top: 20px;">
                <a class="btn btn-rounded btn-primary" href="javascript:void(0)" @click="processRegisNewLaundryCardAtc()">
                    <span class="btn-icon-left text-success"><i class="material-icons">how_to_reg</i></span>Registration New Laundry
                </a>
            </div>
        </div>
    </div>

    @include('app.laundryCard.modalNewLaundry')

</div>



<script src="{{ asset('ladun/base/js/newLaundryCard.js') }}"></script>