function logout(){
	$.post("login.php",{
		logout: "logout"
	},function(response){
		window.location.replace("loginMenu.html");
	});
}
