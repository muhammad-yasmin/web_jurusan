<script src="../../../assets/plugins/jquery/jQuery-2.1.4.min.js"></script>
<script>
	$(document).ready(function() {
		App.init();
		DashboardV2.init();
		$('#nav').addClass('animated bounceInUp');
		$('#panel1').addClass('animated bounceInRight');
		$('#panel2').addClass('animated bounceInRight');
	});
	$("#logout").click(function() {
		window.location.replace('../logout/');
	});
</script>