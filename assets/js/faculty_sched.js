$(document).ready(function(){

	$.post("faculty_sched.php",{
		sched: "sched"
	},function(response){
		$('#table_sched').html(response);
	});
});
