// route 
var rProcessAddServiceItem = server + "app/service-item/add/process";
var rProcessDeleteServiceItem = server + "app/service-item/delete/process";
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
            confirmQuest('info', 'Confirm', 'Add new service item ...?', function (x) {addConfirm()});
        },
        deleteAtc : function(idItem)
        {
            confirmQuest('info', 'Confirm', 'Delete service item ...?', function (x) {deleteConfirm(idItem)});
        }
    }
});

// inisialisasi 
$("#tblServiceItem").dataTable();
tip('.btnDelete', 'Delete');

function addConfirm()
{
    let itemName = document.querySelector("#txtItemName").value;
    let deks = document.querySelector("#txtDeks").value;
    let unit = document.querySelector("#txtUnit").value;
    let type = document.querySelector("#txtType").value;
    let price = document.querySelector("#txtPrice").value;
    let ds = {'itemName':itemName, 'deks':deks, 'unit':unit, 'type':type, 'price':price}
    axios.post(rProcessAddServiceItem, ds).then(function(res){
        pesanUmumApp('success', 'Success', 'Success add new service item ...');
        load_page(rServiceItem, "Service Item");
    });
}

function deleteConfirm(idItem)
{
    let ds = {'idItem':idItem}
    axios.post(rProcessDeleteServiceItem, ds).then(function(res){
        pesanUmumApp('success', 'Success', 'Success delete service item ...');
        load_page(rServiceItem, "Service Item");
    });
}