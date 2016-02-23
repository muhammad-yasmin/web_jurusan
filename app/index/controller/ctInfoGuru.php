<script src="../../../assets/js/jQuery-2.1.4.min.js"></script>
<script>
	function loadSiswa(){
		$.ajax({
			url: '../model/loadGuru.php',
			data: {},
			success: function(data){
				$("#listTabelSiswa").html(data);
			},
			error: function(xhr){
				alert("gagal");
			}
		});
	}
	loadSiswa();
	function btn_prev(id){
		loadPrev(id);
		$("#panelLoad").slideUp('slow', function(){
			$("#panelPrev").slideDown('slow');
		});
	}
	function loadPrev(id){
		$.ajax({
			url: '../model/loadPrevGuru.php',
			data: {
				id:id
			},
			success: function(data){
				$("#prevSiswa").html(data);
			},
			error: function(xhr){
				alert("Gagal");
			}
		});
	}
	$("#back").click(function(){
		$("#panelPrev").slideUp('slow', function(){
			$("#panelLoad").slideDown('slow');
		});
	});
</script>