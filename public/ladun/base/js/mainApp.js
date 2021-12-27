// route 
var rDashboard = server + "app/dashboard";
var rEmployee = server + "app/employee";
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

        },
        employeeAtc : function()
        {
            load_page(rEmployee, "Employee");
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
