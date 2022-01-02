<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Http\Controllers\C_Helper;

use App\Models\M_Promo_Code;

class C_Promo_Code extends Controller
{
    protected $helperCtr;

    public function __construct(C_Helper $helperCtr)
    {
        $this -> helperCtr = $helperCtr;
        $this -> branchData = $helperCtr -> getBranchData();
    }

    public function promoCodePage()
    {
        return view('app.promoCode.promoCodePage');
    }
    public function processAddNewPromoCode(Request $request)
    {
        // {'name':name, 'deks':deks, 'type':type, 'value':value, 'quota':quota, 'expired':expired}
        $dataUser = $this -> helperCtr -> getUserLoginData();
        $promo = new M_Promo_Code();
        $promo -> id_code = Str::uuid();
        $promo -> id_branch = $this -> branchData -> id_branch;
        $promo -> promo_name = $request -> name;
        $promo -> deks = $request -> deks;
        $promo -> type = $request -> type;
        $promo -> value = $request -> value;
        $promo -> quota = $request -> quota;
        $promo -> expired_on = $request -> expired;
        $promo -> active = "1";
        $promo -> save();
        $dr = ['status' => 'success'];
        return \Response::json($dr);
    }
}
