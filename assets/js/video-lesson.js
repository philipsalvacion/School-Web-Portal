$(document).ready(function(){
	$.post("faculty_video.php",{

	},function(response){
		$("#table_video").html(response);
	});
});

function publishVideo(){
	var title = $("#title").val();
	var subject = $("#subject").val();
	var embed = $("#embed").val();

	$.post("faculty_video.php",{
		title: title,
		subject: subject,
		embed: embed,
		publish: "publish"
	},function(response){
		// Clear publish input forms
		$("#title").val('');
		$("#subject").val('');
		$("#embed").val('');

		// Refresh video table for changes
		$.post("faculty_video.php",{
			video: "video"
		},function(response){
			$('#table_video').html(response);
		});
	});
}

function deleteVideo(video_no){
	var deletion_confirm = confirm("Do you really want to delete this Video?");

	if (deletion_confirm) {
		$.post("faculty_video.php",{
			delete: "delete",
			video_no: video_no
		},function(response){
			// Refresh table after deletion
			$.post("faculty_video.php",{
				video: "video"
			},function(response){
				$('#table_video').html(response);
			});
		});
	}
}
