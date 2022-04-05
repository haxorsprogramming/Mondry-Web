// route 
var rProcessUpdateRawMaterial = server + "app/raw-material/edit/process";

// vue object 
var appEdit = new Vue({
    el : '#divEditRawMaterial',
    data : {

    },
    methods : {
        processUpdateRawMaterialAtc : function()
        {
            confirmQuest('info', 'Confirm', 'Update data raw material ...?', function (x) {updateConfirm()});
        }
    }
});

// insialisasi 
function updateConfirm()
{
    let name = document.querySelector("#txtName").value;
    let deks = document.querySelector("#txtDeks").value;
    let unit = document.querySelector("#txtUnit").value;
    let stock = document.querySelector("#txtStock").value;
    let ds = {'name':name, 'deks':deks, 'unit':unit, 'stock':stock, 'idRaw':idRaw}
    axios.post(rProcessUpdateRawMaterial, ds).then(function(res){
        pesanUmumApp('success', 'Success', 'Success update raw material ...');
        load_page("app/raw-material", "Raw Material");
    });
}