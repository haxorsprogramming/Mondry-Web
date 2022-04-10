<!-- promo code list  -->
<div class="col-xl-12" id="divDataPromoCode">
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h5 class="card-title">List Promo Code</h5>
            <a class="btn btn-rounded btn-primary" @click="addPromoCodeAtc()">
                <span class="btn-icon-left text-primary"><i class="material-icons">note_add</i></span>Add Promo Code
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tblPromoCode" class="table table-hover">
                    <thead>
                        <tr style="background-color: #dfe6e9;">
                            <th>No</th>
                            <th>Promo Name</th>
                            <th>Description</th>
                            <th>Type / Value</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dataPromo as $promo)
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        <td>{{ $promo -> promo_name }}</td>
                        <td>{{ $promo -> deks }}</td>
                        <td>{{ $promo -> type }}</td>
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