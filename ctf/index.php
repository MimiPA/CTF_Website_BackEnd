<?php
	error_reporting(0);
    include "koneksi.php";
    session_start();
    if(isset($_POST['login'])){
        $user = $_POST['user'];
		$pass = $_POST['pass'];

		if ($user[0] != ' ' && preg_match("/^[a-zA-Z ]*$/",$user)){
			$cekLogin = mysqli_query($conn,"select * from tabel_login WHERE username='$user' AND password='$pass'");
			// menghitung jumlah data yang ditemukan
			$cek = mysqli_num_rows($cekLogin);
			
			if($cek > 0){
				$_SESSION['username'] = $user;
				$_SESSION['password'] = $pass;
				header("Location: menu.php");
			}
			else{
				//echo "Username dan Password Salah";
				$msg = "Login gagal! Username atau Password salah!";
			}
		}
		else{
			$msg = "Login gagal! Username salah";
		}

    }

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
<?php include "template/header_Login.temp.php"?>
<div class="formContainer">
	<div class="formBox">
		<div class="judulForm"><h1>WELCOME</h1><h2>Capture The Flag</h2></div>
        <br>

        <?php 
            if(isset($msg)){  // Check if $msg is not empty
                echo '<b style="color:red;position:relative;left:15%;top:10%;">'.$msg.'</b>'; // Display our message
            } 
        ?>
  
		<form method="POST" class="formAction" action="index.php">
			
				<div class="inputUser">
					<input class="user" type="text" id="user" name="user" placeholder="User Name">
				</div>
				<div class="passUser">
					<input class="pass" type="password" id="pass" name="pass" placeholder="Password">
				</div>
		
			<div class="buttonLogin">
                    <button type="submit" name="login" class="Login">Login</button>
			</div>
		</form>
	</div>
</div>
</section>
<?php include "template/footer.temp.php" ?>
</body>

</html>