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
                            <label>Customer</label>
                            <select id="single-select" class="form-control">
                                <option value="none">--- Choose Customer ---</option>
                                @foreach($cusData as $cus)
                                <option value="{{ $cus -> id_customer }}">{{ $cus -> name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Service Item</label><br />
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
                                        <td>Rp. @{{ Number(id.priceAt).toLocaleString() }}</td>
                                        <td>
                                            <input type="number" class="form-control" maxlength="5"/>
                                        </td>
                                        <td>Rp. @{{ Number(id.total).toLocaleString() }}</td>
                                        <td>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div style="margin-top: 20px;">
                <a class="btn btn-rounded btn-primary" href="javascript:void(0)">
                    <span class="btn-icon-left text-success"><i class="material-icons">how_to_reg</i></span>Registration New Laundry
                </a>
            </div>
        </div>
    </div>

    @include('app.laundryCard.modalNewLaundry')

</div>



<script src="{{ asset('ladun/base/js/newLaundryCard.js') }}"></script>