// route 
var rProsesAddBranch = server + "app/branch/add/process";
// vue object 
var appBranch = new Vue({
    el : '#divBranch',
    data : {

    },
    methods : {
        addBranchAtc : function()
        {
            $("#divDataBranch").hide();
            $("#divAddBranch").show();
            document.querySelector("#txtBranchName").focus();
        },
        processAddBranchAtc : function()
        {
            let name = document.querySelector("#txtBranchName").value;
            let address = document.querySelector("#txtAddress").value;
            let owner = document.querySelector("#txtOwnerName").value;
            let phone = document.querySelector("#txtPhoneNumber").value;
            let main = document.querySelector("#txtMainBranch").value;
            let manager = document.querySelector("#txtManager").value;
            let ds = {'name':name, 'address':address, 'owner':owner, 'phone':phone, 'main':main, 'manager':manager}
            axios.post(rProsesAddBranch, ds).then(function(res){
                let obj = res.data;
                console.log(obj);
            });
        }
    }
});
// inisialisasi 
