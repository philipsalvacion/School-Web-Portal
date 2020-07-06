$(document).ready(function(){
	var qtr = 'First';
	$.post("faculty_grade.php",{
		refresh: "refresh"
	},function(response){
		$('#table_body').html(response);
	});
});

function changeFilter(fltr){
	$("#fltr_btn").html(fltr);
}

function searchStudent(){
	var inputSearch = $("#searchBar").val();
	var str_fltr = $("#fltr_btn").html();
	var fltr = str_fltr.toLowerCase();

	$.post("faculty_grade.php",{
		fltr: fltr,
		search: inputSearch
	},function(response){
		$('#table_body').html(response);
	});
	console.log(inputSearch);
}

function openStudentData(student_id){
	$.post("faculty_grade.php",{
		student_id: student_id,
		getStudentProfile: "profile"
	},function(response){
		$("#table_grade").html(response);
	});
}

function updateGrade(subject, id){
	var grade = $('#'+subject).val();

	$.post("faculty_grade.php",{
		id: id,
		grade: grade,
		subject: subject,
		updateGrade: "update"
	},function(response){
		alert("Update success");
	});

}
