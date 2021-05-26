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
	<title>General Skill</title>
</head>

<body>
<?php  include "template/header.temp.php"; ?>

	<section class="containerSoal">
	<div class="menuContainer">
		<?php
			$kategori = 'binary';

			$id = '16';
			$point 		='40';
			$judulSoal	='Berapa 0x3D (basis 16) dalam desimal (basis 10)?';
			$hint		='';
			include 'template/boxsoal.temp.php';

			$id = '17';
			$point 		='10';
			$judulSoal	='bASES';
			$hint		='<a href="https://ctfwebsitefreehosting.000webhostapp.com/atl21">TXT.tx</a><br>64 to biner';
			include 'template/boxsoal.temp.php';
				  
			$id = '18';
			$point 		='20';
			$judulSoal	='Weird fOT0';
			$hint		='<a href="https://ctfwebsitefreehosting.000webhostapp.com/mystery.png">This Is Flag</a><br>MD6-1';
			include 'template/boxsoal.temp.php';

			$id = '19';
			$point 		='100';
			$judulSoal	='Apa artinya "YjNsNGo0cl9iNHMzNV95dWs=" ?<br> kayaknya ada hubungannya dengan basis<br>base65-1';
			$hint		='Ingat Formatnya ATL2021{} !!!';
			include 'template/boxsoal.temp.php';

			$id = '20';
			$point 		='100';
			$judulSoal	='Cat Photo';
			$hint		='<a href="https://ctfwebsitefreehosting.000webhostapp.com/a0j_l0h_y3nea_u0j_g0_p0ai3eg.jpg">cAT.PN</a><br>ROT13';
			include 'template/boxsoal.temp.php';

				 ?>
</div>
	</section>
	<?php include "template/footer.temp.php"?>
</body>

</html>