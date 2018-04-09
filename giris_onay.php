<?php
	include 'vt.php';
	function Redirect($url)
		{
			header('Location: ' . $url);
			exit();
		}
	if (isset($_POST['username'])) {
		$kullaniciAdi = $con->real_escape_string($_POST['username']);
		$sifre = $_POST['password'];
		$query = "select * from uyekayit where kullaniciAdi='$kullaniciAdi'";
		$res = mysqli_query($con,$query);
		$kontrol = mysqli_num_rows($res);
		include 'error.php';
		if ($kontrol == 1) {
			$array = mysqli_fetch_assoc($res);
			$hash = $array['sifre'];
			if (password_verify($sifre,$hash) && $array['kullaniciAdi'] == $kullaniciAdi) {
				#GİRİŞ VE SESSİON İŞLEMLERİ
				echo "EŞLEŞTİ";
			}
			else{
				$con->close();
				Redirect('http://localhost/proje/giris.php?err=1');
			}
		}
		elseif ($kontrol == 0) {
			$con->close();
			Redirect('http://localhost/proje/giris.php?err=1');
		}
	}
	else{
		$con->close();
		Redirect('http://localhost/proje/index.php');
	}
	$con->close();
?>