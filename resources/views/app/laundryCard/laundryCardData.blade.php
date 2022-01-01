<!-- laundry card list  -->
<div class="col-xl-12" id="divDataServiceItem" v-if="togDivDataItem">
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h5 class="card-title">List Laundry Card</h5>
            <a class="btn btn-rounded btn-primary">
                <span class="btn-icon-left text-primary"><i class="material-icons">note_add</i></span>Register new laundry
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tblLaundryCard" class="table table-hover">
                    <thead>
                        <tr style="background-color: #dfe6e9;">
                            <th>No</th>
                            <th>Name</th>
                            <th>Desc</th>
                            <th>Type / Unit</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($cardData as $cd)
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
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