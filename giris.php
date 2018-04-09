<?php $title='Giriş Yap';?>
<!DOCTYPE html>
<html>
<head>
	<!--Header Başlangıç-->

<?php include 'header.php' ?>
	<script type="text/javascript" src="./vendor/js/user-sign.js"></script>
	<!--Header Bitiş-->
</head>
<body>
	<!--Navbar Başlangıç-->

<?php include 'navbar.php' ?>

	<!-- Navbar Bitiş-->

	<!-- Content Başlangıç-->
	<div class="container">
		<div class="row" style="margin-top: 8%">
			<div class="col-lg-3"></div>
			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-2"></div>
					<div class="col-lg-8">
						<form id="loginForm1" action="giris_onay.php" method="POST">
						  <div class="form-group">
						    <label for="username">Kullanıcı Adı</label>
						    <input name="username" type="text" class="form-control" id="username" placeholder="Kullanıcı adınızı giriniz.">
						  </div>
						  <div class="form-group">
						    <label for="password">Şifre</label>
						    <input name="password" type="password" class="form-control" id="password" placeholder="Şifrenizi giriniz.">
						  </div>
						  <button name="submit" type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<div class="col-lg-2"></div>
				</div>
				
			</div>
			<div class="col-lg-3"></div>
		</div>
	</div>
	<!-- Content Bitiş-->

	<!-- Footer Başlangıç-->

<?php include 'footer.php' ?>

	<!-- Footer Bitiş-->
</body>
</html>