$(document).ready(function(){
	var qtr = 'First';
	$.post("student_grade.php",{
		qtr: qtr
	},function(response){
		$('#table_body').html(response);
	});
});

function changeQtr(qtr){
	$("#qtr_btn").html(qtr);
}

function searchSchoolYr(){
	var schoolYr = $("#searchBar").html();
	var qtr = $("#qtr_btn").html();
	$.post("student_grade.php",{
		schoolYr: schoolYr,
		search: 'search'
	},function(response){
		$('#table_body').html(response);
	});
}
