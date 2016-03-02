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
			$pass = md5($b);

			//----------------------------------
			$q_select_admin = "SELECT * FROM admin WHERE username= '$user' AND pass= '$pass'";
			$l = mysql_query($q_select_admin);
			$w = mysql_num_rows($l);

			if ($w == 1) {
				$d = mysql_fetch_assoc($l);

				$_SESSION['level'] = $d['level'];
				$_SESSION['user'] = $d['username'];
				return "admin";
			} else {
				$q_select_siswa = "SELECT * FROM siswa_tabel WHERE nis= '$user' AND password= '$pass'";
				// echo $q2;
				$l2 = mysql_query($q_select_siswa);
				$w2 = mysql_num_rows($l2);
				// echo $w2;

				if ($w2 == 1) {
					$d = mysql_fetch_assoc($l2);
					$_SESSION['level'] = $d['level'];
					$_SESSION['nis'] = $d['nis'];
					$_SESSION['user'] = $d['nama_siswa'];
					return "siswa";
				}else{
					$q_select_guru = "SELECT * FROM guru WHERE nip= '$user' AND pass= '$pass'";
					$l3 = mysql_query($q_select_guru);
					$w3 = mysql_num_rows($l3);

					if ($w3 == 1) {
						$d = mysql_fetch_assoc($l3);
						$_SESSION['nip'] = $d['nip'];
						$_SESSION['level'] = $d['level'];
						$_SESSION['user'] = $d['nama'];
						return "guru";
					}else {
						$q_select_alumni = "SELECT * FROM alumni WHERE nis= '$user' AND pass= '$pass'";
						$l4 = mysql_query($q_select_alumni);
						$w4 = mysql_num_rows($l4);

						if ($w4 == 1) {
							$d = mysql_fetch_assoc($l4);
							$_SESSION['nis'] = $d['nis'];
							$_SESSION['user'] = $d['nama'];
							return "alumni";
						}
					}
				}
			}
		}
	}
?>