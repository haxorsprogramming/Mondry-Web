// route 
var rDashboard = server + "app/dashboard";
var rBranch = server + "app/branch";
var rEmployee = server + "app/employee";
var rServiceItem = server + "app/service-item";
var rRawMaterial = server + "app/raw-material";
var rCustomer = server + "app/customer";
var rNewLaundry = server + "app/laundry-card/new";
var rLaundryCard = server + "app/laundry-card";
var rPromoCode = server + "app/promo-code";
var rLogOut = server + "logout";
// vue object
var menuApp = new Vue({
    el: "#divMenu",
    data: {}
});

// inisialisasi
document.addEventListener("DOMContentLoaded", function () {
    NProgress.configure({ showSpinner: false });
    load_page("app/dashboard", "Dashboard");
});

function load_page(page, page_title)
{
    // console.log(page);
    NProgress.start();
    document.querySelector("#divUtama").innerHTML = "<div style='text-align:center;width:100%;margin-top:40px;font-size:20px;'>Loading page ...</div>";
    document.querySelector("#txtTitlePage").innerHTML = page_title;
    // await tidur_bentar(1000);
    $("#divUtama").load(page);
    NProgress.done();
}

function tidur_bentar(ms){
    return new Promise(resolve => { setTimeout(resolve, ms) });
}

function logout()
{
    document.cookie = "MONDRY_TOKEN=";
    window.location.assign(rLogOut);
}

function pesanUmumApp(icon, title, text)
{
  Swal.fire({
    icon : icon,
    title : title,
    text : text
  });
}

function tip(element, isi)
{
    tippy(element, {content: isi});
}

function confirmQuest(icon, title, text, x)
{
    Swal.fire({
        title: title,
        text: text,
        icon: icon,
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes",
        cancelButtonText: "No",
    }).then((result) => {
        if (result.value) {
            x();
        }
    });
}

function ced(elm)
{
    let status = true;
    for (let i = 0; i < elm.length; i++) {
        let vel = document.querySelector("#"+elm[i]).value;
        if(vel.length  === 0){
            status = false;
        }
    }
    if(status === false){
        pesanUmumApp('warning', 'Fill field !!!', 'Harap isi semua field !!!');
        return false;
    }else{
        return true;
    }
}