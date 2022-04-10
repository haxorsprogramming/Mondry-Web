// route 
var rProcessAddNewPromo = server + "app/promo-code/add/process";
// vue object 
var appPromo = new Vue({
    el : "#divPromoCode",
    data : {
        togDataPromoCode : true
    },
    methods : {
        addPromoCodeAtc : function()
        {
            $("#modalTambahProduk").modal("show");
            setInterval(function(){
                document.querySelector("#txtName").focus();
            }, 300);
        },
        processAddNewPromoAtc : function()
        {
            let name = document.querySelector("#txtName").value;
            let deks = document.querySelector("#txtDeks").value;
            let type = document.querySelector("#txtType").value;
            let value = document.querySelector("#txtValue").value;
            let quota = document.querySelector("#txtQuota").value;
            let expired = document.querySelector("#txtExpired").value;
            if(quota === ""){ quota = null }
            let ds = {'name':name, 'deks':deks, 'type':type, 'value':value, 'quota':quota, 'expired':expired}
            axios.post(rProcessAddNewPromo, ds).then(function(res){
                let obj = res.data;
                console.log(obj);
            });
        }
    }
});
// inisialisasi 
$("#tblPromoCode").dataTable();