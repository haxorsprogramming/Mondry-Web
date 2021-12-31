<!-- Modal -->
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
                            <td>Rp. {{ number_format($item -> price_at) }}</td>
                            <td>
                                <a href="javascript:void(0)" class="btn btn-sm btn-primary" @click="chooseAtc('{{ $item -> id_item }}|{{ $item -> name }}|{{ $item -> price_at }}')">Choose</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>