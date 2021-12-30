<!-- raw material list  -->
<div class="col-xl-12" id="divDataRawMaterial" v-if="togDivDataItem">
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h5 class="card-title">List Raw Material</h5>
            <a class="btn btn-rounded btn-primary" @click="addRawMaterialAtc()">
                <span class="btn-icon-left text-primary"><i class="material-icons">note_add</i></span>Add Raw Material
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="tblRaw" class="table table-hover">
                    <thead>
                        <tr style="background-color: #dfe6e9;">
                            <th>No</th>
                            <th>Name</th>
                            <th>Desc</th>
                            <th>Stock</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($dataRaw as $raw)
                    <tr>
                        <td>{{ $loop -> iteration }}</td>
                        <td>{{ $raw -> raw_name }}</td>
                        <td>{{ $raw -> deks }}</td>
                        <td>{{ $raw -> stock }}</td>
                        <td>
                            <a class="btn btn-xs btn-warning btnDelete" @click="deleteAtc('{{ $raw -> id_raw }}')">
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