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
			window.location = "../guru/";
		} else {
			alert("Silahkan coba lagi");
		}
	}
	function PreviewImage() {
		var oFReader = new FileReader();
		oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);
		oFReader.onload = function (oFREvent) {
		document.getElementById("uploadPreview").src = oFREvent.target.result;
		}
	};
</script>