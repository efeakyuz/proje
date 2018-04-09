<?php $title='Ana Sayfa';?>
<!DOCTYPE html>
<html>
<head>
	<!--Header Başlangıç-->

<?php include 'header.php' ?>

	<!--Header Bitiş-->
</head>
<body>
	<!--Navbar Başlangıç-->

<?php include 'navbar.php' ?>

	<!-- Navbar Bitiş-->

	<!-- Content Başlangıç-->
	<div class="container">
		<?php if (isset($_GET['status'])) {
			if ($_GET['status'] == 'True') {
				echo "KAYIT İŞLEMİ TAMAMLANDI";
		}
		} ?>
	</div>
	<!-- Content Bitiş-->

	<!-- Footer Başlangıç-->

<?php include 'footer.php' ?>

	<!-- Footer Bitiş-->
</body>
</html>