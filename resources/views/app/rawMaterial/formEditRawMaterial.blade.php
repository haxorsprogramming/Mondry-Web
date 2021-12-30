<!-- form edit raw material  -->
<div class="col-xl-12" id="divEditRawMaterial">
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h5 class="card-title">Edit Raw Material ({{ $dataRaw -> raw_name }})</h5>
            <a class="btn btn-rounded btn-dark">
                <span class="btn-icon-left text-dark"><i class="material-icons">arrow_back</i></span>Back
            </a>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Raw Name</label>
                            <input type="text" class="form-control" placeholder="Item Name" id="txtName" value="{{ $dataRaw -> raw_name }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Description</label>
                            <textarea class="form-control" style="resize: none;" placeholder="Description" id="txtDeks">{{ $dataRaw -> deks }}</textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Unit</label>
                            <select class="form-control" id="txtUnit">
                                <option value="kg" @if($dataRaw -> unit == 'kg')  selected @endif >Kg</option>
                                <option value="pcs" @if($dataRaw -> unit == 'pcs')  selected @endif >Pcs</option>
                                <option value="ltr" @if($dataRaw -> unit == 'ltr')  selected @endif >Litre</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Stock</label>
                            <input type="number" class="form-control" id="txtStock" value="{{ $dataRaw -> stock }}"/>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                </div>
            </div>
            <div>
                <a class="btn btn-rounded btn-primary" href="javascript:void(0)" @click="processUpdateRawMaterialAtc()">
                    <span class="btn-icon-left text-success"><i class="material-icons">add_task</i></span>Update raw material
                </a>
            </div>
        </div>
    </div>
</div>
<script>var idRaw = "{{ $dataRaw -> id_raw }}";</script>
<script src="{{ asset('ladun/base/js/edit/rawMaterial.js') }}"></script>