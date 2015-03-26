$(document).ready(function(){
	if(sessionStorage.getItem("admin_key") != 1){
		setTimeout(function(){ window.location = "admin_login.html"; }, 0);
	}		
});