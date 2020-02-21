// ================= FACULTY ====================
function facultyLogin(){
	var id = $("#id").val();
	var pass = $("#password").val();
	if(id != "" && pass != ""){
		$.post('login.php',{
			id: id,
			password: pass,
			facultyLogin: "facultyLogin"
		},function(response){
			if(response == 'true'){
				location.href = "index.html";
			}
			else{
				$("#status").html(response);
			}
		});
	}
	else {
		$("#status").html("Please fill up all fields");
	}
}

function logout(){
	$.post("login.php",{
		logout: "logout"
	},function(response){
		location.href = "loginMenu.html";
	});
}


// ================= STUDENT ====================
function studentLogin(){
	var id = $("#id").val();
	var pass = $("#password").val();
	if(id != "" && pass != ""){
		$.post('login.php',{
			id: id,
			password: pass,
			studentLogin: "studentLogin"
		},function(response){
			if(response == 'true'){
				location.href = "index.html";
			}
			else{
				$("#status").html(response);
			}
		});
	}
	else {
		$("#status").html("Please fill up all fields");
	}
}

function logout(){
	$.post("login.php",{
		logout: "logout"
	},function(response){
		location.href = "loginMenu.html";
	});
}
