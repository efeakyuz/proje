<?php
	function Redirect($url)
			{
			    header('Location: ' . $url);
			    exit();
			}
	if (isset($_POST["username"])) {
		include 'vt.php';
		$kullaniciAdi = $con->real_escape_string($_POST['username']);
		$query = "select * from uyekayit where kullaniciAdi='$kullaniciAdi'";
		$res = mysqli_query($con,$query);
		$kontrol = mysqli_num_rows($res);
		// Hata kontrol sayfasını çağır.
		include 'error.php';
			if ($kontrol == 0) {
				$var = "true";
				echo json_encode($var);
			}
			else{
				$var = "Üzgünüz bu kullanıcı adı kullanılmaktadır.";
				echo json_encode($var);
			}

		$con->close();
	}
	else{
		$con->close();
		Redirect('http://localhost/proje/index.php');
	}

?>
