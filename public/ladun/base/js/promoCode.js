// route 
var rProcessAddNewPromo = server + "app/promo-code/add/process";
// vue object 
var appPromo = new Vue({
    el : "#divPromoCode",
    data : {

    },
    methods : {
        addPromoCodeAtc : function()
        {
            $("#modalTambahProduk").modal("show");
            // setTimeout(function(){
            //     document.querySelector("#txtName").focus();
            // }, 300);
        },
        processAddNewPromoAtc : function()
        {
            let name = document.querySelector("#txtName").value;
            let deks = document.querySelector("#txtDeks").value;
            let type = document.querySelector("#txtType").value;
            let value = document.querySelector("#txtValue").value;
            let quota = document.querySelector("#txtQuota").value;
            let expired = document.querySelector("#txtExpired").value;
            let promoCode = document.querySelector("#txtPromoCode").value;

            let del = ['txtName', 'txtDeks', 'txtType'];
            let cf = ced(del);
            if(cf === true){
                let ds = {'name':name, 'deks':deks, 'type':type, 'value':value, 'quota':quota, 'expired':expired, 'promoCode':promoCode}
                axios.post(rProcessAddNewPromo, ds).then(function(res){
                    let obj = res.data;
                    pesanUmumApp('success', 'Success', 'Success add new promo ...');
                });
            }
            // 
            
        }
    }
});
// inisialisasi 
$("#tblPromoCode").dataTable();