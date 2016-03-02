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
	// Siswa
	function loadPreviewSiswa(id){
		$.ajax({
			url: 'app/index/model/loadSiswa.php',
			type: 'post',
			data: {
				id : id
			},
			success: function(data){
				$("#previewSiswa").html(data);
			},
			error: function(xhr){
				showModalMsg("Error 404");
			}
		});
	}
	function kePreviewsiswa(){
		$("#panelForm").hide('slow', function(){
			$("#panelPreviewGuru").hide('slow', function(){
				$("#panelPreviewAlumni").hide('slow', function(){
					$("#panelPreviewSiswa").show('slow');
				});
			});
		});
	}
	function btnsiswa(id){
		loadPreviewSiswa(id);
		kePreviewsiswa();
	}
	$("#backsiswa").click(function(){
		$("#panelPreviewSiswa").hide('slow', function(){
			$("#panelForm").show('slow');
		});
	});
	// Guru
	function loadPreviewGuru(id){
		$.ajax({
			url: 'app/index/model/loadGuru.php',
			type: 'post',
			data: {
				id : id
			},
			success: function(data){
				$("#previewGuru").html(data);
			},
			error: function(xhr){
				showModalMsg("Error 404");
			}
		});
	}
	function kePreviewguru(){
		$("#panelForm").hide('slow', function(){
			$("#panelPreviewAlumni").hide('slow', function(){
				$("#panelPreviewSiswa").hide('slow', function(){
					$("#panelPreviewGuru").show('slow');
				});
			});
		});
	}
	function btnguru(id){
		loadPreviewGuru(id);
		kePreviewguru();
	}
	$("#backguru").click(function(){
		$("#panelPreviewGuru").hide('slow', function(){
			$("#panelForm").show('slow');
		});
	});
	// Alumni
	function loadPreviewAlumni(id){
		$.ajax({
			url: 'app/index/model/loadAlumni.php',
			type: 'post',
			data: {
				id : id
			},
			success: function(data){
				$("#previewAlumni").html(data);
			},
			error: function(xhr){
				showModalMsg("Error 404");
			}
		});
	}
	function kePreviewalumni(){
		$("#panelForm").hide('slow', function(){
			$("#panelPreviewSiswa").hide('slow', function(){
				$("#panelPreviewGuru").hide('slow', function() {
					$("#panelPreviewAlumni").show('slow');
				});
			})
		});
	}
	function btnalumni(id){
		loadPreviewAlumni(id);
		kePreviewalumni();
	}
	$("#backalumni").click(function(){
		$("#panelPreviewAlumni").hide('slow', function(){
			$("#panelForm").show('slow');
		});
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