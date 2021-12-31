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
        }
    }
});
// inisialisasi 
$("#tblCustomer").dataTable();