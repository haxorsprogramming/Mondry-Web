// route 
var rProcessAddRawMaterial = server + "app/raw-material/add/process";
var rProcessDeleteRawMaterial = server + "app/raw-material/delete/process";
// vue object 
var appRaw = new Vue({
    el : "#divRawMaterial",
    data : {
        togDivDataItem : true
    },
    methods : {
        addRawMaterialAtc : function()
        {
            appRaw.togDivDataItem = false;
            $("#divAddServiceItem").show();
            document.querySelector("#txtName").focus();
        },
        processAddRawMaterialAtc : function()
        {
            confirmQuest('info', 'Confirm', 'Process add raw material ...?', function (x) {addConfirm()});
        },
        deleteAtc : function(idRaw)
        {
            confirmQuest('info', 'Confirm', 'Delete raw material ...?', function (x) {deleteConfirm(idRaw)});
        },
        editAtc : function(idRaw)
        {
            var rToEditRawMaterial = "app/raw-material/"+idRaw+"/edit";
            load_page(rToEditRawMaterial, "Edit Raw Material");
        }
    }
});
// inisialisasi 
$("#tblRaw").dataTable();
tip(".btnDelete", "Delete");
tip(".btnEdit", "Edit");

function deleteConfirm(idRaw)
{
    let ds = {'idRaw':idRaw}
    axios.post(rProcessDeleteRawMaterial, ds).then(function(res){
        pesanUmumApp('success', 'Success', 'Success delete raw material ...');
        load_page(rRawMaterial, "Raw Material");
    });
}

function addConfirm()
{
    let name = document.querySelector("#txtName").value;
    let deks = document.querySelector("#txtDeks").value;
    let unit = document.querySelector("#txtUnit").value;
    let stock = document.querySelector("#txtStock").value;
    let ds = {'name':name, 'deks':deks, 'unit':unit, 'stock':stock}
    axios.post(rProcessAddRawMaterial, ds).then(function(res){
        let obj = res.data;
        pesanUmumApp('success', 'Success', 'Success add raw material ...');
        load_page(rRawMaterial, "Raw Material");
    });
}