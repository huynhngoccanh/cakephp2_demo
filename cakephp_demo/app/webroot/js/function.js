var $ = jQuery;
$(document).ready(function(e){
	var arrCard = {1: "10000", 2: "20000", 3: "30000", 4: "50000", 5: "100000", 6: "200000", 7: "300000", 8: "500000"};
	
    $(".js_submit_form").click(function(){
    	var action = $("button.js_submit_form").attr('data');
    	var form = $('form');
    	form.attr('action', action);
        form.submit();
    });
    $(".js_submit_form_confirm").click(function(e){    	
    	var cf = confirm("Bạn sẽ tiếp tục chứ!");
    	if (cf == false) {
    		 e.preventDefault();
        }	
    });
    viewLoadGroup('BillTypeAccount');
    viewLoadGroup('BillTypeAccountChild1');
    viewLoadGroup('BillTypeAccountChild2');
    
    viewLoadGroup('BillTelecommunicationFees');
    viewLoadGroup('BillTypeCard');
    
    viewLoadGroup('BillPaymentService');
    viewLoadGroup('BillElectricity');
    viewLoadGroup('BillReserve');
    viewLoadGroup('BillAccount');
    viewLoadGroup('BillSearch');
    
    $("#BillTypeAccount, #BillTypeAccountChild1, #BillTypeAccountChild2," +
      "#BillTelecommunicationFees, #BillTypeCard," +
      "#BillPaymentService, #BillElectricity," +
      "#BillReserve, #BillAccount, #BillSearch").change(function(){
    	viewLoadGroup(this.id);
    });
    function viewLoadGroup(key) {
    	var val = $("#" + key).val();
    	$("[class^='" + key + "_']").css("display", "none");
    	$("[class^='" + key + "_'] *").prop('disabled',true);
    	
    	$("#" + key + " > option").each(function() {
     	    if (val == this.value) {
     	    	key = key + "_" + val;
     	    	$("." + key).css("display", "block");
     	    	$("." + key + " *").prop('disabled',false);
     	    }
     	});
    }
    $("#BillTagCode").change(function(){
    	loadMoneyCard();
    });
    function loadMoneyCard() {
    	var str = $("#BillTagCode").val();
    	var len = str.length;
    	var key = str.substr(len - 1, 1);
    	if (len !== 14) {
    		$("#BillMoneyCard").val("");
    		alert('Mã thẻ gồm 14 ký tự.');
    	} else	if (arrCard[key] === undefined) {
    		$("#BillMoneyCard").val("");
    		alert('Giá trị không phù hợp.');
    	} else {
    		$("#BillMoneyCard").val(arrCard[key]);
    	}
    }
});