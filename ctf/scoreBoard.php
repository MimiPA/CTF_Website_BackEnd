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
	<title>Score Board</title>
</head>

<body>
<?php include "template/header.temp.php"?>
    <section class="scoreContainer">
        
    <ul class="containerList">
        <?php
            include "koneksi.php";
            $data = mysqli_query($conn,"SELECT id_login, SUM(total_score) FROM tabel_score GROUP BY id_login ORDER BY SUM(total_score) DESC");
            $i = 1;
            while($d = mysqli_fetch_array($data)){
                $id_login = $d['id_login'];
                $dataLogin = mysqli_query($conn,"SELECT id_login, username FROM tabel_login WHERE id_login='$id_login'");
                $dataLogin1 = mysqli_fetch_array($dataLogin);
        ?>
                <li class="boxList">
                    <span class="urutanList"><?php echo $i;?></span>
                    <span class="namaList"><?php echo $dataLogin1['username'];?></span>
                    <span class="pointList"><?php echo $d['SUM(total_score)'];?></span>
                    <span class="iconList"><i class="fa fa-trophy" aria-hidden="true"></i></span>
                </li>
            <?php
            $i++;
            }
            ?>
    </ul>
    </section>
	<?php include "template/footer.temp.php"?>
</body>

</html>