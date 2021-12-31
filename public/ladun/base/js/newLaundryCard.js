// vue object
var appLaundry = new Vue({
    el: "#divAddLaundryCard",
    data: {
        itemData: [],
        stateIdItemInTemp: false,
        idCustomerSelected: "",
    },
    methods: {
        chooseAtc: function (itemData) {
            chooseAtc(itemData);
        },
        setPrice: function (idItem) {
            setPrice(idItem);
        },
        deleteItem: function (idItem) {
            deleteItem(idItem);
        },
    },
});
// inialisasi
$("#txtCustomer").select2();
$("#tblNewService").dataTable();
tip(".btnDelete", "Delete");
var no = 1;

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
        pesanUmumApp(
            "warning",
            "Double item",
            "Double item for service, please check again"
        );
    } else {
        appLaundry.itemData.push({
            no: no,
            idItem: itemEx[0],
            itemName: itemEx[1],
            priceAt: itemEx[2],
            total: 0,
        });
        no++;
        resetOrdinal();
        $("#basicModal").modal("hide");
    }
}
