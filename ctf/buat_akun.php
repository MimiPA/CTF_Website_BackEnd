<?php
	include "verifikasi_akun.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/style.min.css">
	<title>Mainweb</title>
	<script src="https://kit.fontawesome.com/b4f4eda484.js" crossorigin="anonymous"></script>
</head>
<body>
	<section>
<div class="circle"></div>	


<header class="headerLogin">
	<img src="assets/img/ATL2021.png" alt=""><div class="logo"><a href="">CTF 2021_UAJM</a></div>
	<div class="containerSign">
		<div class="sigNp"><a href="buat_akun.php">Sudah Punya Akun  ?</a></div>
		<a href="index.php"><div class="buttonSign"> Sign In </div></a>
	</div>
</header>
<div class="formContainer">
	<div class="formBoxSign">
		<div class="judulForm"><h1>WELCOME</h1><h2>Capture The Flag</h2></div>
		<br>

		<?php 
            if(isset($msg)){  // Check if $msg is not empty
                echo '<b style="color:red;position:relative;left:25%;top:10%;">'.$msg.'</b>'; // Display our message
            } 
        ?>

        <form method="POST" class="formAction" action="buat_akun.php">
		  
			    <div class="inputUser">
				    <input class="user" type="text" id="userAkun" name="userAkun" placeholder="User Name">
			    </div>
			    <div class="email">
				    <input type="email" id="email" name="email" placeholder="Email">
			    </div>
			    <div class="passUser">
				    <input class="pass" type="password" id="passAkun" name="passAkun" placeholder="Password">
			    </div>
			    <div class="confirmPass">
				    <input class="pass" type="password" id="confirmPass" name="confirmPass" placeholder="Confirm Password">
			    </div>
		    <div class="buttonLogin">
               
                    <button type="submit" name="buatAkun" class="btn Login">Daftar</button>
			</div>
        </form>
	</div>
</div>
</section>
<?php include "template/footer.temp.php"?>
</body>
</html>