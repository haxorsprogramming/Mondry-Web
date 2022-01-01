// route 
var rProcessRegisNewLaundry = server + "app/laundry-card/add/process";
// vue object
var appLaundry = new Vue({
    el: "#divAddLaundryCard",
    data: {
        itemData: [],
        stateIdItemInTemp: false,
        idCustomerSelected: "",
        totalPrice : 0
    },
    methods: {
        chooseAtc: function (itemData) {
            chooseAtc(itemData);
        },
        setPrice: function (idItem) {
            setPrice(idItem);
            setTotalPrice();
        },
        deleteItem: function (idItem) {
            deleteItem(idItem);
            setTotalPrice();
        },
        processRegisNewLaundryCardAtc : function()
        {
            let ds = {'idCustomer':appLaundry.idCustomerSelected, 'itemData':appLaundry.itemData}
            axios.post(rProcessRegisNewLaundry, ds).then(function(res){
                pesanUmumApp('success', 'Success', 'Success registered new laundry..');
                load_page(rLaundryCard, "Laundry Card");
            });
        }
    },
});
// inialisasi
$("#txtCustomer").select2();
$("#tblNewService").dataTable();
tip(".btnDelete", "Delete");
var no = 1;

function setPayment()
{
    let paymentType = document.querySelector("#txtPayment").value;
    console.log(paymentType);
}

function setTotalPrice()
{
    let totalPrice = 0;
    for (i = 0; i < appLaundry.itemData.length; i++) {
        let priceTotalPerItem = appLaundry.itemData[i].total;
        totalPrice += priceTotalPerItem;
    }
    appLaundry.totalPrice = totalPrice;
}

function deleteItem(idItem) {
    let indexChoice = 0;
    for (i = 0; i < appLaundry.itemData.length; i++) {
        if (appLaundry.itemData[i].idItem === idItem) {
            indexChoice = i;
        }
    }
    appLaundry.itemData.splice(indexChoice, 1);
    resetOrdinal();
}

function setCustomer() {
    let customer = document.querySelector("#txtCustomer").value;
    appLaundry.idCustomerSelected = customer;
}

function setPrice(idItem) {
    let indexChoice = 0;

    for (i = 0; i < appLaundry.itemData.length; i++) {
        if (appLaundry.itemData[i].idItem === idItem) {
            indexChoice = i;
        }
    }
    let priceAt = appLaundry.itemData[indexChoice].priceAt;
    let qtInField = document.querySelector("#qt_" + idItem).value;
    let total = parseInt(priceAt) * parseInt(qtInField);
    appLaundry.itemData[indexChoice].qt = qtInField;
    appLaundry.itemData[indexChoice].total = total;
}

function resetOrdinal() {
    let no = 1;
    for (i = 0; i < appLaundry.itemData.length; i++) {
        appLaundry.itemData[i].no = no;
        no++;
    }
}

function chooseAtc(itemData) {
    appLaundry.stateIdItemInTemp = false;
    let itemEx = itemData.split("|");
    for (i = 0; i < appLaundry.itemData.length; i++) {
        let idItem = appLaundry.itemData[i].idItem;
        if (idItem === itemEx[0]) {
            appLaundry.stateIdItemInTemp = true;
        }
    }
    if (appLaundry.stateIdItemInTemp === true) {
        pesanUmumApp("warning", "Double item","Double item for service, please check again");
    } else {
        appLaundry.itemData.push({
            no: no,
            idItem: itemEx[0],
            itemName: itemEx[1],
            priceAt: itemEx[2],
            qt : 0,
            total: 0,
        });
        no++;
        resetOrdinal();
        $("#basicModal").modal("hide");
    }
}
