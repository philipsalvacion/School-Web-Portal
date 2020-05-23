$(document).ready(function(){
	var qtr = 'First';
	$.post("student_test.php",{
		qtr: qtr
	},function(response){
		$('#table_test').html(response);
	});
});
