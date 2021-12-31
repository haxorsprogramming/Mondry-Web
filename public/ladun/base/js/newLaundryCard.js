// vue object 
var appLaundry = new Vue({
    el : "#divAddLaundryCard",
    data : {
        itemData : [],
        stateIdItemInTemp : false
    },
    methods : {
        chooseAtc : function(itemData)
        {
            appLaundry.stateIdItemInTemp = false;
            let itemEx = itemData.split("|");
            for(i = 0; i < appLaundry.itemData.length; i++){
                let idItem = appLaundry.itemData[i].idItem;
                if(idItem === itemEx[0]){
                    appLaundry.stateIdItemInTemp = true;
                }
            }
            if(appLaundry.stateIdItemInTemp === true){
                pesanUmumApp('warning', 'Double item', 'Double item for service, please check again');
            }else{
                appLaundry.itemData.push({ 
                    no : no,
                    idItem : itemEx[0],
                    itemName : itemEx[1],
                    priceAt : itemEx[2],
                    total : 0
                });
                no++;
                $('#basicModal').modal('hide');
            }
        }
    }
});
// inialisasi 
$("#single-select").select2();
$("#tblNewService").dataTable();
var no = 1;
// var dataIdItem = [];