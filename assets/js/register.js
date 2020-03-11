function validate(id,fname,lname){
	var format = /[ !@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/;
	var validate_id = format.test(id);
	var validate_fname = format.test(fname);
	var validate_lname = format.test(lname);
	// var validate_bday = format.test(bday);

	if(id == "" || fname == "" || lname == ""){
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
	// var birthday = $('#birthday').val();

	var validate = validate(id,fName,lName);

	if (validate_id && validate_fname && validate_lname) {
		$.post("register_faculty.php",{
			id: id,
			firstName: fName,
			lastName: lName,
			// birthday: birthday,
			facultyReg: "facultyReg"
		}, function(response){
			alert(response);
		});
	}
}

function facultyPasswordSetup(){
	var password = $.('#password').val();
	var retype = $.('#retype').val();

	if(password.test(retype)){

	}
	$.post("register_faculty.php",{
		password: password,
		retype: retype,
		passwordSetup: "passwordSetup"
	},function(response){
		alert("Success!");
	});
}
