<script src="../../../assets/js/jQuery-2.1.4.min.js"></script>
<script type="text/javascript">
	function showModal(isiPesan){
		$("#idPesanModal").html(isiPesan);
		$("#btnModal").click();
	}
	function loadProkel(){
		$.ajax({
			url: '../model/loadProkel.php',
			data: {},
			success: function(data){
				$("#listProkel").html(data);
			},
			error: function(xhr){
				showModal("Gagal ambil data");
			}
		});
	}
	loadProkel();
	function loadFormUpdateProkel(id){
		$.ajax({
			url: '../model/loadFormUpdateProkel.php',
			type: 'post',
			data: {
				id: id
			},
			success: function(data){
				$("#updateProkel").html(data);
				$("#idNya").val(id);
				// showModal(id);
			},
			error: function(xhr){
				showModal("Gagal ambil data");
			}
		});
	}
	function updateProkel(id){
		if (!$("#updatenya").attr('checked')) {
			$.ajax({
				url: '../model/updateProkel.php',
				type: 'post',
				data: {
					id: $("#idNya").val(),
					nama: $("#namanya").val(),
					inisial: $("#inisialnya").val(),
					deskripsi: $("#deskripsinya").val(),
					update: $("#updatenya").val()
				},
				success: function(data){
					// showModal(data);
					showModal("Berhasil update data !");
					$("#pnlUpdt").hide('slow', function(){
						loadProkel();
						$("#pnlData").show('slow');
					});
				},
				error: function(xhr){
					showModal("Gagal update data !");
				}
			});
		} else {
			showModal("Gagal");
		}
		
	}
	function btn_edit(id){
		// showModal(id);
		loadFormUpdateProkel(id);
		keForm();
	}
	$("#btnUpdt").click(function(){
		updateProkel();
		// showModal(id);
	});
	$("#btnBackFromUpdt").click(function(){
		$("#pnlUpdt").slideUp('slow', function(){
			$("#pnlData").slideDown('slow');
		});
	});
	function keForm(){
		$("#pnlData").hide('slow', function(){
			$("#pnlAdd").hide('slow', function(){
				$("#pnlPrev").hide('slow', function(){
					$("#pnlUpdt").show('slow');
				});
			});
		});
	}
</script>