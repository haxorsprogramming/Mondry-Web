// vue object 
var appBranch = new Vue({
    el : '#divBranch',
    data : {

    },
    methods : {
        addEmployeeAtc : function()
        {
            $("#divDataBranch").hide();
            $("#divAddBranch").show();
        }
    }
});