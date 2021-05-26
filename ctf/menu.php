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
	<link rel="stylesheet" href="assets/css/style.min.css">
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<title>SubWeb</title>
</head>

<body>
	<div class="circle"></div>
	<header>
		<div class="header2">
			<div class="logo"><a href="">CTF 2021_UAJM</a></div>
			<div class="akunIcon">
				<div class="containerIcon">
				</div>
			</div>
		</div>
	</header>
	<section class="sec2">
		<div class="container2">
			<div class="Judul2">
				<h1 id="h1ID">Web Exploitation</h1>
				<p id="pID">Solve The Problem And Find flag!</p>
				<a id="linka" href="#">
					<div class="button2"> MULAI </div>
				</a>
			</div>
		</div>
		<div id="myDIV" class="ringMenu">
			<ul class="containerList">
				<li id="ICmi" class="main material-icons" onclick="myFunction();changedIcon('pause_circle')">play_circle
				</li>
				<li class="one material-icons md-48 md-dark"
					onclick="changedH1('Web Exploitation');changedColor('#EED5D1');changedColorText('#991901');changedP('Solve The Problem And Find flag!');changedButton('#991901');changedLink('submenu1.php')">
					language</li>
				<li class="two material-icons md-48 md-dark"
					onclick="changedH1('Cryptography');changedColorText('#013499');changedColor('#98DAE9');changedP('Solve The Problem And Find flag!');changedButton('#017E99');changedLink('submenu2.php')">
					https</li>
				<li class="three material-icons md-48 md-dark"
					onclick="changedH1('Forensics');changedColorText('#C7771A');changedColor('#E8D8C7');changedP('Solve The Problem And Find flag!');changedButton('#C7771A');changedLink('submenu3.php')">
					fingerprint</li>
				<li class="four material-icons md-48 md-dark"
					onclick="changedH1('General Skill');changedColorText('#1AC76A');changedColor('#D1EBDD');changedP('Solve The Problem And Find flag!');changedButton('#11A655');changedLink('submenu4.php')">
					lightbulb</li>
				<li class="five material-icons md-48 md-dark"
					onclick="changedH1('Score Board');changedColorText('#013499');changedColor('#CBD8F7 ');changedP('Solve The Problem And Find flag!');changedButton('#1A4BC7');changedLink('scoreBoard.php')">
					extension</li>
			</ul>
		</div>
	</section>
	<script src="assets/js/javas.js"></script>
</body>
</html>