<!-- service item list  -->
<div class="col-xl-12" id="divDataServiceItem" v-if="togDivDataItem">
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h5 class="card-title">List Service Item</h5>
            <a class="btn btn-rounded btn-primary" @click="addItemAtc()">
                <span class="btn-icon-left text-primary"><i class="material-icons">note_add</i></span>Add Item
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tblServiceItem" class="table table-hover">
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
                        @foreach($dataItem as $item)
                        <tr>
                            <td>{{ $loop -> iteration }}</td>
                            <td>{{ $item -> name }}</td>
                            <td>{{ $item -> deks }}</td>
                            <td>{{ $item ->  unit}}</td>
                            <td>Rp. {{ number_format($item -> price_at) }}</td>
                            <td>
                                <a class="btn btn-xs btn-warning btnDelete" @click="deleteAtc('{{ $item -> id_item }}')">
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