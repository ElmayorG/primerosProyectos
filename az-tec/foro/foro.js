function loguear(){
	var con_log = $(".cor_log").val();
	var cont_log = $(".contr_log").val();
	if(con_log == ""){
		$(".cor_log").focus();
	}else if(cont_log == ""){
		$(".contr_log").focus();
	}
	return false;
}
function registrar(){
	if($(".user").val() == "" || $(".user").val().lenght < 6){
		$(".user").focus();
	}
	return false;
}