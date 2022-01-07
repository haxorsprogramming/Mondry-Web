<h4 class="text-primary mb-4">Payment Summary</h4>
<div class="row" id="divPaymentMethod" v-if="togPaymentNow">
    <div class="form-group col-md-6">
        <label>Cash</label>
        <input type="text" class="form-control" onkeyup="countPayment()" id="txtCash"/>
    </div>
    <div class="form-group col-md-6">
        <label>Promo Code</label>
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="txtPromoCode">
            <div class="input-group-append">
                <a class="btn btn-primary" href="javascript:void(0)" @click="checkPromoAtc()">Check</a>
            </div>
        </div>
    </div>
</div>
<div class="row" v-if="togPaymentNow">
    <div class="col-12">
        <div class="profile-personal-info">
            <h4 class="text-primary mb-4">Summary</h4>
            <div class="row mb-2">
                <div class="col-sm-3 col-5">
                    <h5 class="f-w-500">Customer Name <span class="pull-right">:</span>
                    </h5>
                </div>
                <div class="col-sm-9 col-7"><span>@{{ customerSelected }}</span>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-5">
                    <h5 class="f-w-500">Email <span class="pull-right">:</span>
                    </h5>
                </div>
                <div class="col-sm-9 col-7"><span>-</span>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-5">
                    <h5 class="f-w-500">Total service <span class="pull-right">:</span>
                    </h5>
                </div>
                <div class="col-sm-9 col-7"><span>{{ env('CURRENCY') }}. @{{ Number(totalPrice).toLocaleString() }}</span>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-5">
                    <h5 class="f-w-500">Disc <span class="pull-right">:</span>
                    </h5>
                </div>
                <div class="col-sm-9 col-7"><span>{{ env('CURRENCY') }}. @{{ Number(totalDisc).toLocaleString() }}</span>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-5">
                    <h5 class="f-w-500">FInal Price <span class="pull-right">:</span>
                    </h5>
                </div>
                <div class="col-sm-9 col-7"><span>{{ env('CURRENCY') }}. @{{ Number(finalPrice).toLocaleString() }}</span>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-5">
                    <h5 class="f-w-500">Cash <span class="pull-right">:</span>
                    </h5>
                </div>
                <div class="col-sm-9 col-7"><span>{{ env('CURRENCY') }}. @{{ Number(cash).toLocaleString() }}</span>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-3 col-5">
                    <h5 class="f-w-500">Back <span class="pull-right">:</span>
                    </h5>
                </div>
                <div class="col-sm-9 col-7"><span>{{ env('CURRENCY') }}. @{{ Number(back).toLocaleString() }}</span>
                </div>
            </div>
        </div>
    </div>

</div>