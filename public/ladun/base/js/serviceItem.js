// route 
var rProcessAddServiceItem = server + "app/service-item/add/process";
// vue object 
var appItem = new Vue({
    el : '#divServiceItem',
    data : {
        togDivDataItem : true
    },
    methods : {
        addItemAtc : function()
        {
            appItem.togDivDataItem = false;
            $("#divAddServiceItem").show();
            document.querySelector("#txtItemName").focus();
        },
        processAddItemAtc : function()
        {
            let itemName = document.querySelector("#txtItemName").value;
            let deks = document.querySelector("#txtDeks").value;
            let unit = document.querySelector("#txtUnit").value;
            let type = document.querySelector("#txtType").value;
            let price = document.querySelector("#txtPrice").value;
            let ds = {'itemName':itemName, 'deks':deks, 'unit':unit, 'type':type, 'price':price}
            axios.post(rProcessAddServiceItem, ds).then(function(res){
                let obj = res.data;
                pesanUmumApp('success', 'Success', 'Success add new service item ...');
                load_page(rServiceItem, "Service Item");
            });
        }
    }
});

// inisialisasi 
$("#tblServiceItem").dataTable();