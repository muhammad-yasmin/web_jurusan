$('#logout').click(function(){
	$('.screen').addClass('screen-off');
	setTimeout(function(){
		window.location.href = "logout.php";
	}, 650);
});
$(document).ready(function() {
	$("#nav").addClass('animate bounceInUp');
	App.init();
	// DashboardV2.init();
});