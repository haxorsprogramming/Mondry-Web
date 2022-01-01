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
    data: {},
    methods: {
        dashboardAtc : function ()
        {
            load_page(rDashboard, "Dashboard");
        },
        branchAtc : function()
        {
            load_page(rBranch, "Branch");
        },
        employeeAtc : function()
        {
            load_page(rEmployee, "Employee");
        },
        serviceItemAtc : function()
        {
            load_page(rServiceItem, "Service Item");
        },
        rawMaterialAtc : function()
        {
            load_page(rRawMaterial, "Raw Material");
        },
        customerAtc : function()
        {
            load_page(rCustomer, "Customer");
        },
        newLaundryAtc : function()
        {
            load_page(rNewLaundry, "New Laundry");
        },
        laundryCardAtc : function()
        {
            load_page(rLaundryCard, "Laundry Card");
        },
        promoCode : function()
        {
            load_page(rPromoCode, "Promo Code");
        },
        logOutAtc : function()
        {
            document.cookie = "MONDRY_TOKEN=";
            window.location.assign(rLogOut);
        }
    },
});

// inisialisasi
document.addEventListener("DOMContentLoaded", function () {
    NProgress.configure({ showSpinner: false });
    load_page(rDashboard, "Dashboard");
});

async function load_page(page, page_title)
{
    NProgress.start();
    document.querySelector("#divUtama").innerHTML = "<div style='text-align:center;width:100%;margin-top:40px;font-size:20px;'>Loading page ...</div>";
    document.querySelector("#txtTitlePage").innerHTML = page_title;
    await tidur_bentar(1000);
    $("#divUtama").load(page);
    NProgress.done();
}

function tidur_bentar(ms){
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