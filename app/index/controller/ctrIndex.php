<script src="assets/js/jQuery-2.1.4.min.js"></script>
<script>
	function showModal(isinya){
		$("#isimodalnya").html(isinya);
		$("#btnShowModal").click();
	}

	$("#btnnya").click(function(){
		addKritikSaran();
	});
	function addKritikSaran(){
		$.ajax({
			url: 'app/index/model/addSaran.php',
			type: 'post',
			data: {
				nama : $("#namanya").val(),
				email : $("#emailnya").val(),
				isi : $("#isinya").val()
			},
			success: function(data){
				showModal("Terima kasih anda telah ikut berpartisipasi membangun website ini !");
				reset();
			},
			error: function(xhr){
				showModal("Gagal");
			}
		});
	}
	function reset(){
		$("#namanya").val("");
		$("#emailnya").val("");
		$("#isinya").val("");
	}
	$("#infoSiswa").click(function(){
		window.location = "app/index/view/infoSiswa.php";
	});
	$("#infoGuru").click(function(){
		window.location = "app/index/view/infoGuru.php";
	});
	$("#infoAlumni").click(function(){
		window.location = "app/index/view/infoAlumni.php";
	});
	$(document).ready(function() {
		$("#owlGuru1").owlCarousel({
			slideSpeed : 500,
			autoPlay: 5000,
			paginationSpeed : 400,
			singleItem:true
		});
		$("#owlGuru").owlCarousel({
			autoPlay: 3000,
			slideSpeed : 800,
			paginationSpeed : 500,
			singleItem:true
		});
	});
</script>