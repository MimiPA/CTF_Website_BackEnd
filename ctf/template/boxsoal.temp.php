<?php
	error_reporting(0);
    include "koneksi.php";
	include "cekSession.php";

    //Cek id_login user dengan Session nya
    $user = mysqli_query($conn, "SELECT id_login, username FROM tabel_login WHERE username='$username'");
    $user1 = mysqli_fetch_array($user);
    $id_login = $user1['id_login'];

    $data = mysqli_query($conn,"SELECT id_binary, poin_binary FROM tabel_binary WHERE id_binary='$id'");
    while($d = mysqli_fetch_array($data)){
    ?>
    <div class="menuCard">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <div class="menuContent">
            <form method="POST" action="cekJawaban.php">
                <h2><?php echo $d['poin_binary']; ?></h2>
                <input type="hidden" name="id_binary" id="id_binary" value="<?=$d['id_binary'];; ?>">
                <input type="hidden" name="poin_binary" id="poin_binary" value="<?=$d['poin_binary'];; ?>">
                <h3><?php echo $judulSoal ?></h3>
                <p><?php echo $hint ?></p>
                <p><?php echo $d['total_binary'] ?></p>
                
                <?php
                    $total_id = mysqli_query($conn, "SELECT * FROM tabel_score WHERE total_binary='$id' AND id_login='$id_login'");
                    $total_id1 = mysqli_fetch_array($total_id);
                    if($total_id1['total_binary'] == $id){
                        echo '<p style="color:green; padding-top:20px;"><b>Selamat! Jawaban Anda Benar</b></p>';
                    }
                    else{
                        echo '<input class="inputJawaban" name="masukkanJawaban" type="text" >';
                        echo '<button type="submit" name="cekJawaban">Jawab</button>';
                    }

                ?>
            </form>
        </div>
    </div>

    <?php
    }
?>
