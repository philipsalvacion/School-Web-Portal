function validate(id,fname,lname,bday){
	var format = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;

	var validate_user = format.test(user);

	if(user == "" || pass == ""){
		alert("Please fill up the ");
		return false;
	}
	else{
		if (validate_user) {
			alert("Special Character not allowed");
			return false;
		}
		else{
			return true;
		}
	}
}

function facultyReg(){
	var id = $('#id').val();
	var fName = $('#firstName').val();
	var lName = $('#lastName').val();
	var birthday = $('#birthday').val();

	var validate = validate(id,fName,lName,birthday);

	if (validate) {
		$.post("register_faculty.php",{
			id: id,
			firstName: fName,
			lastName: lName,
			birthday: birthday,
			facultyReg: "facultyReg"
		}, function(response){
			alert(response);
		});
	}
}
