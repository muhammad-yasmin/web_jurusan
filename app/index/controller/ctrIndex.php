<script src="../../../assets/plugins/jquery/jQuery-2.1.4.min.js"></script>
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
			url: 'model/addSaran.php',
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
	$(document).ready(function() {
		$("#owl-demo").owlCarousel({
		  autoPlay: 3000,
		  items : 4,
		  itemsDesktop : [1199,3],
		  itemsDesktopSmall : [979,3]

		});
		$("#owl-products").owlCarousel({
			slideSpeed : 300,
			autoPlay: 5000,
			paginationSpeed : 400,
			singleItem:true
		});
		$("#owlGuru").owlCarousel({
			navigation : true,
			slideSpeed : 800,
			paginationSpeed : 500,
			singleItem:true
		});
	});
</script>