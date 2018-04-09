<?php $title='Kayıt Ol';?>
<!DOCTYPE html>
<html>
<head>
	<!--Header Başlangıç-->

<?php include 'header.php' ?>
	<script type="text/javascript" src="./vendor/js/user-register.js"></script>
	<!--Header Bitiş-->
</head>
<body>
	<!--Navbar Başlangıç-->

<?php include 'navbar.php' ?>

	<!-- Navbar Bitiş-->

	<!-- Content Başlangıç-->
	<div class="container">
		<div class="row" style="margin-top: 8%;">
			<div class="col-lg-3"></div>
			<div class="col-lg-6 right">
				<form id="signupForm1" action="kayit_onay.php" method="POST">
				  <div class="form-group">
				    <label for="username">Kullanıcı Adı</label>
				    <input name="username" type="text" class="form-control" id="username" placeholder="Lütfen kullanıcı adınızı giriniz">
				  </div>
				  <div class="form-group">
				    <label for="birth_date">Doğum Tarihiniz</label>
				    <input name="birth_date" type="date" class="form-control" id="birth_date" min="1900-01-01" max="2010-01-01">
				  </div>
				  <div class="form-group">
				    <label for="email">Email Adresiniz</label>
				    <input name="email" type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Size ait email adresinizi giriniz">
				  </div>
				  <div class="form-group">
				    <label for="password">Şifre</label>
				    <input name="password" type="password" class="form-control" id="password" placeholder="Lütfen şifre giriniz">
				  </div>
				  <div class="form-group">
				    <label for="password2">Şifre</label>
				    <input name="password2" type="password" class="form-control" id="password2" placeholder="Giridiğiniz şifreyi doğrulayınız">
				  </div>
				  <div class="form-group">
				  	<input type="submit" name="submit" value="Kayıt Ol" class="btn btn-dark">
				  	<label for="server_error" class="error">
					  	<?php if (isset($_GET['err'])) {
					  		switch ($_GET['err']) {
					  			case '1':
					  				echo "LÜTFEN TÜM ALANLARI DOLDUNUZ";
					  				break;
					  			case '2':
					  				echo "ŞİFRELERİNİZİN AYNI OLDUĞUNDAN EMİN OLUN";
					  				break;
					  			case '3':
					  				echo "GEÇERLİ BİR EMAİL GİRİNİZ";
					  				break;
					  			case '4':
					  				echo "KULLANICI ADI 4 VE 18 KARAKTER ARASINDA OLMALIDIR.";
					  					break;
					  			case '5':
					  				echo "ŞİFRENİZ 5 VE 18 KARAKTER ARASINDA OLMALIDIR";
					  				break;
					  			case '6':
					  				echo "KULLANICI ADI HARF, SAYI VE SADECE ALT ÇİZGİDEN OLUŞABİLİR";
					  				break;
					  			case '7':
					  				echo "ŞİFRENİZDE BOŞLUK KULLANMAYINIZ";
					  				break;
					  			case '8':
					  				echo "BU KULLANICI ADI KULLANILMAKTADIR";
					  				break;
					  			case '9':
					  				echo "BU E-MAİL KULLANILMAKTADIR";
					  				break;
					  			default:
					  				# code...
					  				break;
					  		}
					  			
					  	}?>	
				  	</label>
				  </div>
				</form>
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