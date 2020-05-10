$(document).ready(function(){
	$.post("student_video.php",{

	},function(response){
		$(".video-lessons").html(response);
	});
});
