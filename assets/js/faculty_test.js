$(document).ready(function(){
	$.post("faculty_test.php",{
		test: "test"
	},function(response){
		$('#table_test').html(response);
	});
});

function deleteTest(test_no){
	var deletion_confirm = confirm("Do you really want to delete this Test / Quiz?");

	if (deletion_confirm) {
		$.post("faculty_test.php",{
			delete: "delete",
			test_no: test_no
		},function(response){
			// Refresh table after deletion
			$.post("faculty_test.php",{
				test: "test"
			},function(response){
				$('#table_test').html(response);
			});
		});
	}
}

function publishTest(){
	var title = $("#title").val();
	var remarks = $("#remarks").val();
	var embed = $("#embed").val();

	$.post("faculty_test.php",{
		title: title,
		remarks: remarks,
		embed: embed,
		publish: "publish"
	},function(response){
		// Clear publish input forms
		$("#title").val('');
		$("#remarks").val('');
		$("#embed").val('');

		// Refresh Test table for changes
		$.post("faculty_test.php",{
			test: "test"
		},function(response){
			$('#table_test').html(response);
		});
	});
}
