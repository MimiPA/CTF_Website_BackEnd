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
	<title>Cryptography</title>
</head>

<body>
<?php  include "template/header.temp.php"; ?>

	<section class="containerSoal">
	<div class="menuContainer">
		<?php
			$kategori = 'binary';

			$id = '6';
			$point 		='40';
			$judulSoal	='PIA2021{cdi_idd_qps_du_p_egdqatb}';
			$hint		='15';
			include 'template/boxsoal.temp.php';

			$id = '7';
			$point 		='10';
			$judulSoal	='f14g5';
			$hint		='<a href="https://ctfwebsitefreehosting.000webhostapp.com/f14g5.png">This Is Flag</a><br>ICS Flags';
			include 'template/boxsoal.temp.php';
				  
			$id = '8';
			$point 		='20';
			$judulSoal	='Tom';
			$hint		='<a href="https://ctfwebsitefreehosting.000webhostapp.com/tom.png">This Is Tom</a><br>0,1,2,3,4,5,6,7';
			include 'template/boxsoal.temp.php';

			$id = '9';
			$point 		='100';
			$judulSoal	='k3l1l1n9 dun14';
			$hint		='<a href="https://ctfwebsitefreehosting.000webhostapp.com/k3l1l1n9%20dun14a.txt">TXT</a><br>kayaknya maps bisa membantu';
			include 'template/boxsoal.temp.php';

			$id = '10';
			$point 		='100';
			$judulSoal	='AMW2021{p1g3w3d3_1s_3s}';
			$hint		='ATLUAJM';
			include 'template/boxsoal.temp.php';

				 ?>
</div>
	</section>
	<?php include "template/footer.temp.php"?>
</body>

</html>