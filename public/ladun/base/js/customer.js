// route 
var rProcessAddCustomer = server + "app/customer/add/process";
var rProcessDeleteCustomer = server + "app/customer/delete/process";
// vue object 
var appCustomer = new Vue({
    el : '#divCustomer',
    data : {
        togDivDataCustomer : true
    },
    methods : {
        addCustomerAtc : function()
        {
            appCustomer.togDivDataCustomer = false;
            $("#divAddCustomer").show();
            document.querySelector("#txtName").focus();
        },
        processAddNewCustomerAtc : function()
        {
            confirmQuest('info', 'Confirm', 'Add new customer ...?', function (x) {addConfirm()});
        },
        deleteAtc : function(idCustomer)
        {
            confirmQuest('info', 'Confirm', 'Delete customer ...?', function (x) {deleteConfirm(idCustomer)});
        }
    }
});
// inisialisasi 
$("#tblCustomer").dataTable();
tip('.btnDelete', 'Delete');
tip('.btnDetail', 'Detail');

function addConfirm()
{
    let name = document.querySelector("#txtName").value;
    let address = document.querySelector("#txtAddress").value;
    let email = document.querySelector("#txtEmail").value;
    let phone = document.querySelector("#txtPhoneNumber").value;
    let ds = {'name':name, 'address':address, 'email':email, 'phone':phone}
    axios.post(rProcessAddCustomer, ds).then(function(res){
        pesanUmumApp('success', 'Success', 'Success add new customer ...');
        load_page(rCustomer, "Customer");
    });
}

function deleteConfirm(idCustomer)
{
    let ds = {'idCustomer':idCustomer}
    axios.post(rProcessDeleteCustomer, ds).then(function(res){
        pesanUmumApp('success', 'Success', 'Success delete customer ...');
        load_page(rCustomer, "Customer");
    });
}