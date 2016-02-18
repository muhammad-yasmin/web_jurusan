$(document).ready(function(){
	$('#example').DataTable({ });
});
$('#logout').click(function(){
	$('.screen').addClass('screen-off');
	setTimeout(function(){
		window.location.href = "../controller/logout.php";
	}, 650);
});
$(document).ready(function(){
	$('#nav').addClass('animated bounceInUp')
	$('#panel3').addClass('animated hang')
	$('#panel1').addClass('animated bounceInRight')
	$('#panel2').addClass('animated bounceInRight')
});
$(document).ready(function() {
	App.init();
	DashboardV2.init();
});