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
				window.location.replace("faculty_home.html");
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
				window.location.replace("student_home.html");
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
