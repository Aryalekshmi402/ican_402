$(function(){
	
	$("#fnamerr").hide();
	$("#lnamerr").hide();
	
	var errmsg_fname = false;
	var errmsg_lname = false;
	
	$("#textnames").focusout() {
		check_fname();
	}
	
	$("#txtnames").focusout() {
		check_lname();
	}
	
	function check_fname() {
		var fn=$("textnames").val().length;
		var pattern=/^[A-Za-z]+$/;
		var fnam=$("textnames").val();
		alert("asdfgh");
		if( (fn==0) || (fn<2) || !(pattern.test(fnam)) ) {
			$("#fnamerr").html("Invalid name");
			$("#fnamerr").show();
			errmsg_fname = true;
		}
		else {
			$("#fnamerr").hide();
		}
	}
});