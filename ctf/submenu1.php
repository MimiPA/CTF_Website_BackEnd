<?php
	error_reporting(0);
	include "cekSession.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/style.css">
	<script src="https://kit.fontawesome.com/b4f4eda484.js" crossorigin="anonymous"></script>
	<title>Web Exploitation</title>
</head>

<body>
<?php  include "template/header.temp.php"; ?>

	<section class="containerSoal">
	<div class="menuContainer">
		<?php
			$kategori = 'binary';

			$id = '1';
			$point 		='40';
			$judulSoal	='Flag At This Web';
			$hint		='<a href="https://ctfwebsitefreehosting.000webhostapp.com/SoalWebExploitan.html">Link</a>';
			include 'template/boxsoal.temp.php';

				 ?>
</div>
	</section>
	<?php include "template/footer.temp.php"?>
</body>

</html>