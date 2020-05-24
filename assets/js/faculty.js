function logout(){
	$.post("login.php",{
		logout: "logout"
	},function(response){
		window.location.replace("loginMenu.html");
	});
}

function facultyData(){
	$.post("faculty_data.php",{
		facultyName: "facultyName"
	},function(response){
		var firstname = response.firstname;
		var lastname = response.lastname;
		var dept = response.dept;

		$("#dept").html("Faculty Department: " + dept);
		$("#dept2").html("Faculty Department: " + dept);
		$("#faculty_name").html(lastname + ", " + firstname);
	});
}

function date(){
	var d = new Date(),
	minutes = d.getMinutes().toString().length == 1 ? '0'+d.getMinutes() : d.getMinutes(),
	hours = d.getHours().toString().length == 1 ? '0'+d.getHours() : d.getHours(),
	ampm = d.getHours() >= 12 ? 'pm' : 'am',
	months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
	days = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];
	var date = days[d.getDay()]+', '+months[d.getMonth()]+' '+d.getDate()+', '+d.getFullYear()+' '+hours+':'+minutes+' '+ampm;
	$("#date").html(date);
	$("#date").css('color', 'white');
}

function changePassword(){
	var password = $("#password").val();
	var retype = $("#retypePassword").val();
	var format = /[ ()\-=\[\]{};':"\\|,.<>\/?]/;
	var validate_format = format.test(password);

	if (!validate_format) {
		if (retype == password) {
			$.post("faculty_data.php",{
				password: password,
				changePassword: "Change"
			},function(response){
				alert("Change password successful!");
			});
		}
		else {
			alert("Password don't match!");
		}
	}
	else {
		alert("Invalid format!");
	}

}

$(document).ready(function(){
	facultyData();
	date();
});
