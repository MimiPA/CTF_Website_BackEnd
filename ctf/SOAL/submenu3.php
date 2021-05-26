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
	<title>Forensics</title>
</head>

<body>
<?php  include "template/header.temp.php"; ?>

	<section class="containerSoal">
	<div class="menuContainer">
		<?php
			$kategori = 'binary';

			$id = '11';
			$judulSoal	='Kucing NgODING';
			$hint		='<a href="https://ctfwebsitefreehosting.000webhostapp.com/kucings.png">Picture</a>';
			include 'template/boxsoal.temp.php';

			$id = '12';
			$judulSoal	='pICTURE nEWmETA';
			$hint		='<a href="https://ctfwebsitefreehosting.000webhostapp.com/m3t4d4t4.JPG">lINK </a>';
			include 'template/boxsoal.temp.php';
				  
			$id = '13';
			$judulSoal	='002 TEMANNYA 007 ';
			$hint		='https://ctfwebsitefreehosting.000webhostapp.com/S1MPPPPPP.jpg';
			include 'template/boxsoal.temp.php';

			$id = '14';
			$judulSoal	='Blank Space - Taylor ';
			$hint		='<a href="https://ctfwebsitefreehosting.000webhostapp.com/BlankSpace.Taylor.docx
			">Blank Space</a>';
			include 'template/boxsoal.temp.php';

			$id = '15';
			$judulSoal	='Warna ';
			$hint		='<a href="https://ctfwebsitefreehosting.000webhostapp.com/warna.zip
			">Warna</a> <a style="color:red;" href="https://ctfwebsitefreehosting.000webhostapp.com/Red
			">Red</a> <a style="color:green;" href="https://ctfwebsitefreehosting.000webhostapp.com/Green
			">Green</a> <a style="color:blue;" href="https://ctfwebsitefreehosting.000webhostapp.com/Blue
			">Blue</a>';
			include 'template/boxsoal.temp.php';

				 ?>
</div>
	</section>
	<?php include "template/footer.temp.php"?>
</body>

</html>