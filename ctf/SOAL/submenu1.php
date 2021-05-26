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
			$kategori = '';

			$id = '1';
			$point 		='40';
			$judulSoal	='The Detective';
			$hint		='Find The Important Clue And Find The Flag , 3 part Flag of 3 side Website then Combine all <a style="color:white; background:none ; font-size:10px;"href="https://ctfwebsitefreehosting.000webhostapp.com/Soal1WEB/SoalWebExploitan.html">link</a>!!';
			include 'template/boxsoal.temp.php';

			$id = '2';
			$point 		='10';
			$judulSoal	='Broken File !!';
			$hint		='Sesuatu sudah terjadi dengan File ini , Bantulah Mr.ARi mendapatkannya kembali <a style="color:white; background:none ; font-size:10px;" href="https://ctfwebsitefreehosting.000webhostapp.com/Soal1WEB/c0rrupt.txt ">link</a>!!';
			include 'template/boxsoal.temp.php';
				  
			$id = '3';
			$point 		='20';
			$judulSoal	='DWO2021{uhkslfudvhdf}';
			$hint		='https://privacycanada.net/classical-encryption/caesar-cipher/';
			include 'template/boxsoal.temp.php';

			$id = '4';
			$point 		='100';
			$judulSoal	='Apa arti dari 34 74 6d 34 6a 34 79 34 ?';
			$hint		='Format jawaban ATL2021{}';
			include 'template/boxsoal.temp.php';

			$id = '5';
			$point 		='100';
			$judulSoal	='tH3 nUMB3Rs';
			$hint		='<a style="color:white; background:none ; font-size:10px;" href="https://ctfwebsitefreehosting.000webhostapp.com/Soal1WEB/th3%20numb3r5%20(kripto).jpg">link</a>';
			include 'template/boxsoal.temp.php';

				 ?>
</div>
	</section>
	<?php include "template/footer.temp.php"?>
</body>

</html>