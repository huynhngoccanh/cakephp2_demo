var $ = jQuery;
$(document).ready(function(e){
    $(".js_submit_form").click(function(){
    	var action = $("button.js_submit_form").attr('data');
    	var form = $('form');
    	form.attr('action', action);
        form.submit();
    });    
    viewLoadGroup('BillTypeAccount');
    viewLoadGroup('BillTypeAccountChild1');
    viewLoadGroup('BillTypeAccountChild2');
    $("#BillTypeAccount, #BillTypeAccountChild1, #BillTypeAccountChild2").change(function(){
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
});