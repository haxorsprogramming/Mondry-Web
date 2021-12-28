// route 
var rProcessAddEmployee = server + "app/employee/add/process";
// vue object 
var employeeApp = new Vue({
    el : '#divEmployee',
    data : {
        employeeName : '-',
        roleSelected : '-',
        toogleBranch : false
    },
    methods : {
        addEmployeeAtc : function()
        {
            $("#divDataEmployee").hide();
            $("#divAddEmployee").show();
            document.querySelector("#txtName").focus();
        },
        addNewEmployeeProcessAtc : function()
        {
            let name = document.querySelector("#txtName").value;
            let address = document.querySelector("#txtAddress").value;
            let username = document.querySelector("#txtUsername").value;
            let phoneNumber = document.querySelector("#txtPhoneNumber").value;
            let password = document.querySelector("#txtPassword").value;
            let email = document.querySelector("#txtEmail").value;
            let role = document.querySelector("#txtRole").value;
            let roleArr = role.split("|");

            let imgPicData = document.querySelector("#txtPreviewUpload").getAttribute("src");
            // if(name === ''){
            //     pesanUmumApp('warning', 'Complete field !!!', 'Please complete all field !!!');
            // }else{

            // }
            let ds = {'name':name, 'address' : address, 'username':username, 'phoneNumber':phoneNumber, 'password':password, 'email':email, 'role':roleArr[0]}
            axios.post(rProcessAddEmployee, ds).then(function(res){
                let obj = res.data;
                if(obj.status === 'SUCCESS'){
                    pesanUmumApp('success', 'Success', 'Success add new employee');
                }else{

                }
            });
        }
    }
});
// inisialisasi 
function setEmployeeName()
{
    let employeeName = document.querySelector("#txtName").value;
    employeeApp.employeeName = employeeName;
}

function setRole()
{
    let role = document.querySelector("#txtRole").value;
    let roleArr = role.split("|");
    employeeApp.roleSelected = roleArr[1];
    if(roleArr[0] === "1" || roleArr[0] === "2" || role === "none"){
        employeeApp.toogleBranch = false;
    }else{
        employeeApp.toogleBranch = true;
    }

}

function setImg()
{
    var citraInput = document.querySelector('#txtFoto');
    var preview = document.querySelector('#txtPreviewUpload');
    var fileGambar = new FileReader();
    fileGambar.readAsDataURL(citraInput.files[0]);
    fileGambar.onload = function(e){
        let hasil = e.target.result;
        preview.src = hasil;
    }
}

tip('.btnEdit', 'Edit employee');
// tippy('#btnEdit', {content: "Edit"});