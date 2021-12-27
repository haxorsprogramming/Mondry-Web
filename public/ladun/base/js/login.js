// route 
var rLoginProcess = server + "auth/login/process";
var rToDashboard = server + "app";
// vue object 
var appLogin = new Vue({
    el : '#divAppAuth',
    data : {
        titleErrorAuth : '',
        textError : ''
    },
    methods : {
        loginAtc : function()
        {
            let username = document.querySelector("#txtUsername").value;
            let password = document.querySelector("#txtPassword").value;
            let ds = {'username':username, 'password':password}

            axios.post(rLoginProcess, ds).then(function(res){
                let obj = res.data;
                let status = obj.status;
                if(status === 'NO_USER'){
                    setErroAuthStatus("No user !!!", "No user registered!!! please check again ...");
                }else if(status === 'WRONG_PASSWORD'){
                    setErroAuthStatus("Wrong password !!!", "Wrong password!!! please check again ...");
                }else{
                    let token = obj.token;
                    document.cookie = "MONDRY_TOKEN="+token;
                    window.location.assign(rToDashboard);
                }
            });
        }
    }
});
// inisialisasi 
document.querySelector("#txtUsername").focus();

function sleep_wait(ms){
    return new Promise(resolve => { setTimeout(resolve, ms) });
}

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}

function setErroAuthStatus(title, text){
    appLogin.titleErrorAuth = title;
    appLogin.textError = text;
    $("#divAuthStatus").show();
    formReset();
}

function formReset()
{
    document.querySelector("#txtUsername").value = "";
    document.querySelector("#txtPassword").value = "";
    document.querySelector("#txtUsername").focus();
}