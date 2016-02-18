<script src="../../../assets/plugins/jquery/jQuery-2.1.4.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		App.init();
	});
	function validasi(){
		hasil = true;

		var nisnya = $("#nis").val();
		var passnya = $("#pass").val();

		if(nisnya == "") {
			hasil = false;
			alert("NISN harus diisi");
		} else {}
		if (passnya == "") {
			hasil = false;
			alert("Password harus diisi");
		} else {}
	}

	function hasilLog(hasil){
		if (hasil == "berhasil") {
			window.location("../admin/");
		} else {
			alert("Coba lagi");
		}
	}
</script>