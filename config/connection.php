<?php
	/**
	* 
	*/
	class clsDb
	{
		function konek()
		{
			$host = "localhost";
			$user = "root";
			$pass = "muhammadsaw1";
			$db = "db_web_jur";
			mysql_connect($host, $user, $pass) or die ("Koneksi gagal");
			mysql_select_db($db) or die ("Database tidak ditemukan");
		}
		function cekLog($a,$b)
		{
			$user = mysql_real_escape_string($a);
			$pass = md5("pass".$b."word");
			//----------------------------------
			$q_siswa = mysql_query("SELECT nis, nama, pass, level FROM siswa WHERE nis='$user' AND pass='$pass';");
			$row_siswa = mysql_num_rows($q_siswa);
			if ($row_siswa == 1) {
				$assoc_siswa = mysql_fetch_assoc($q_siswa);
				//----------------------------------------
				$_SESSION['nis'] = $assoc_siswa['nis'];
				$_SESSION['nama_siswa'] = $assoc_siswa['nama'];
				$_SESSION['pass_siswa'] = $assoc_siswa['pass'];
				$_SESSION['lvl_siswa'] = $assoc_siswa['level'];
				//----------------------------------------
				return true;
			} else {
				return false;
			}
		}
		function cekLogAdmin($c,$d){
			$us = mysql_real_escape_string($c);
			$pa = md5("pass".$d."word");
			//-----------------------------------
			$q = "SELECT * FROM admin WHERE username='$us' OR pass='$pa'";
			$eks_q = mysql_query($q);
			$row_q = mysql_num_rows($eks_q);
			if ($row_q == 1) {
				$assoc_admin = mysql_fetch_assoc($eks_q);
				//---------------------------------------------
				$_SESSION['id_admin'] = $assoc_admin['id'];
				$_SESSION['nama_admin'] = $assoc_admin['nama'];
				$_SESSION['lvl_admin'] = $assoc_admin['level'];
				$_SESSION['statusLog'] = "true";
				//---------------------------------------------
				// return true;
			} else {
				// return false;
				$_SESSION['statusLog'] = "false";
			}
		}
		function cekLogGuru($u,$p)
		{
			$a = mysql_real_escape_string($u);
			$b = md5("pass".$p."word");
			//--------------------------------
			$q_guru = mysql_query("SELECT * FROM guru WHERE nip = '$a' AND pass = '$b'");
			$row_guru = mysql_num_rows($q_guru);
			if ($row_guru == 1) {
				$assoc_guru = mysql_fetch_assoc($q_guru);
				$_SESSION['nip_guru'] = $assoc_guru['nip'];
				$_SESSION['nama_guru'] = $assoc_guru['nama'];
				$_SESSION['lvl_guru'] = $assoc_guru['level'];
				//------------------------------------------
				return true;
			} else {
				return false;
			}
		}
	}
?>