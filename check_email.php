<?php
	function Redirect($url)
			{
			    header('Location: ' . $url);
			    exit();
			}
	if (isset($_POST["email"])) {
		include 'vt.php';
		$email = $con->real_escape_string($_POST['email']);
		$query = "select * from uyekayit where mail='$email'";
		$res = mysqli_query($con,$query);
		$kontrol = mysqli_num_rows($res);
		// Hata kontrol sayfasını çağır.
		include 'error.php';
			if ($kontrol == 0) {
				$var = "true";
				echo json_encode($var);
			}
			else{
				$var = "Bu mail kullanılmaktadır.";
				echo json_encode($var);
			}

		$con->close();
	}
	else{
		$con->close();
		Redirect('http://localhost/proje/index.php');
	}

?>
