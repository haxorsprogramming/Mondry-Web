// route 
var rProcessRegisNewLaundry = server + "app/laundry-card/add/process";
var rCheckPromoCode = server + "app/laundry-card/promo-code/check";
// vue object
var appLaundry = new Vue({
    el: "#divAddLaundryCard",
    data: {
        itemData: [],
        stateIdItemInTemp: false,
        idCustomerSelected: "",
        totalPrice : 0,
        togCusData : false,
        customerSelected : "",
        txtBtnSelectCustomer : "Select customer",
        totalDisc : 0,
        finalPrice : 0,
        cash : 0,
        back : 0
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
        },
        chooseCustomerAtc : function(cusData)
        {
            let exCus = cusData.split("|");
            appLaundry.togCusData = true;
            appLaundry.customerSelected = exCus[1];
            appLaundry.idCustomerSelected = exCus[0];
            $("#customerModal").modal("hide");
            appLaundry.txtBtnSelectCustomer = "Change customer";
        },
        checkPromoAtc : function()
        {
            let promoCode = document.querySelector("#txtPromoCode").value;
            let ds = {'code':promoCode}
            axios.post(rCheckPromoCode, ds).then(function(res){
                let obj = res.data;
                if(obj.status === 'SUCCESS'){
                    let promoData = obj.promoData;
                    let type = promoData.type;
                    let valueR = promoData.value;
                    if(type === "P"){
                        let disc = (valueR / 100) * appLaundry.totalPrice;
                        appLaundry.totalDisc = disc;
                    }else{
                        appLaundry.totalDisc = valueR;
                    }
                    pesanUmumApp('success', 'Promo assign', 'Promo succesfully add, promo name : '+promoData.promo_name+'.');
                }else{
                    pesanUmumApp('warning', 'No code', 'No promo code available');
                }
            });
        }
    },
});
// inialisasi
$("#txtCustomer").select2();
$("#tblNewService").dataTable();
$("#tblCustomer").dataTable();
tip(".btnDelete", "Delete");
$('#txtCash').mask('000.000.000.000.000', {reverse: true});
var no = 1;

function countPayment()
{
    let cash = document.querySelector("#txtCash").value;
    cashFix = clearDot(cash);
    
    // appLaundry.cash = cash;
}

function clearDot(num)
{
    let fixNum = num.replace(".","");
    let intNum = parseInt(fixNum)
    return intNum;
}

function setPayment()
{
    let paymentType = document.querySelector("#txtPayment").value;
    if(paymentType === "now"){
        $("#dPaymentArea").show();
        document.querySelector("#txtCash").focus();
    }else{
        $("#dPaymentArea").hide();
    }
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

function setPrice(idItem) {
    let indexChoice = 0;

    for (i = 0; i < appLaundry.itemData.length; i++) {
        if (appLaundry.itemData[i].idItem === idItem) {
            indexChoice = i;
        }
    }
    let priceAt = appLaundry.itemData[indexChoice].priceAt;
    let qtInField = document.querySelector("#qt_" + idItem).value;
    let total = parseFloat(priceAt) * parseFloat(qtInField);
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
