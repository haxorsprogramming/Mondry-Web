// route 
var rProcessAddNewPromo = server + "app/promo-code/add/process";
var rProcessDeletePromo = server + "app/promo-code/delete/process";
var rGetDataPromo = server + "app/promo-code/edit/data";
// vue object 
var appPromo = new Vue({
    el : "#divPromoCode",
    data : {

    },
    methods : {
        addPromoCodeAtc : function()
        {
            $("#modalAddPromoCode").modal("show");
            setTimeout(function(){
                document.querySelector("#txtName").focus();
            }, 500);
        },
        processAddNewPromoAtc : function()
        {
            processAddNewPromoCode();
        },
        deleteAtc : function(idCode)
        {
            confirmQuest('info', 'Confirmation', 'Delete promo code ...?', function (x) {confirmDeletePromoCode(idCode)});
        },
        editAtc : function(idCode)
        {
            let ds = {'idCode':idCode}
            axios.post(rGetDataPromo, ds).then(function(res){
                document.querySelector("#txtNameEdit").value = res.data.promo_name;
                document.querySelector("#txtDeksEdit").value = res.data.deks;
                document.querySelector("#txtPromoCodeEdit").value = res.data.promo_code;
                document.querySelector("#txtValueEdit").value = res.data.value;
                document.querySelector("#txtTypeEdit").value = res.data.type;
                document.querySelector("#txtQuotaEdit").value = res.data.quota;
                document.querySelector("#txtExpiredEdit").value = res.data.expired_on;
                $("#modalEditPromo").modal("show");
            });
        }
    }
});
// inisialisasi 
$("#tblPromoCode").dataTable();
tip(".delPromoCode", "Delete promo code");
tip(".editPromoCode", "Edit promo code");

function processAddNewPromoCode()
{
    let name = document.querySelector("#txtName").value;
    let deks = document.querySelector("#txtDeks").value;
    let type = document.querySelector("#txtType").value;
    let value = document.querySelector("#txtValue").value;
    let quota = document.querySelector("#txtQuota").value;
    let expired = document.querySelector("#txtExpired").value;
    let promoCode = document.querySelector("#txtPromoCode").value;

    let del = ['txtName', 'txtDeks', 'txtValue', 'txtPromoCode', 'txtExpired'];
    let cf = ced(del);
    if(cf === true){
        let ds = {'name':name, 'deks':deks, 'type':type, 'value':value, 'quota':quota, 'expired':expired, 'promoCode':promoCode}
        axios.post(rProcessAddNewPromo, ds).then(function(res){
            pesanUmumApp('success', 'Success', 'Success add new promo ...');
            setTimeout(function(){
                $('#modalAddPromoCode').modal('hide');
                load_page('app/promo-code','Promo Code');
            }, 300);
        });
    }
}

function confirmDeletePromoCode(idCode)
{
    let ds = {'idCode':idCode}
    axios.post(rProcessDeletePromo, ds).then(function(res){
        pesanUmumApp('success', 'Success', 'Success delete a promo ...');
        setTimeout(function(){
            $('#modalTambahProduk').modal('hide');
            load_page('app/promo-code','Promo Code');
        }, 300);
    });
}   