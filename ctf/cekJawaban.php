<?php
	error_reporting(0);
    include "koneksi.php";
	include "cekSession.php";

    //Cek id_login user dengan Session nya
    $dataUser = mysqli_query($conn, "SELECT id_login, username FROM tabel_login WHERE username='$username'");
    $infoUser = mysqli_fetch_array($dataUser);
    $id_login = $infoUser['id_login'];

    //POST dari Form Inputan
    $id = $_POST['id_binary'];
    $poin = $_POST['poin_binary'];
    $masukkanJawaban = $_POST['masukkanJawaban'];

    date_default_timezone_set('Asia/Makassar');
    $tanggal = date("Y-m-d H:i:sa");

    //Mengambil jawaban dari db
    $dataJawaban = mysqli_query($conn, "SELECT * FROM tabel_binary WHERE id_binary='$id'");
    $infoJawaban = mysqli_fetch_array($dataJawaban);
    $jawaban = $infoJawaban['jawaban_binary'];

    //Mengambil id_login pada tabel_score di db
    $dataScore = mysqli_query($conn, "SELECT id_login, id_binary FROM tabel_score WHERE id_login='$id_login'");
    $infoData = mysqli_fetch_array($dataScore);
    $id_Score = $infoData['id_login'];
    $total_binary = $infoData['id_binary'];

    $total_id = "";

    //Cek jawaban di db sm yg di input betul tidak.
    if($masukkanJawaban == $jawaban){
        $total_id .= $total_binary.$id . ',';
        $queryInsert = mysqli_query($conn, "INSERT INTO tabel_score (id_login, total_score, total_binary, tanggal) VALUES ('$id_login', '$poin', '$id', '$tanggal')");
        if($queryInsert){
            $updatePoin = mysqli_query($conn, "UPDATE tabel_binary SET poin_binary = poin_binary - 10 WHERE id_binary ='$id'");
            if($updatePoin){
            ?>
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                <script>
                    /*Swal.fire({
                        'Good job!',
                        'You clicked the button!',
                        'success'
                    });
                    */
                    alert('Congratz!!!')
                    document.location='menu.php';
                </script>
            <?php
            }
            else{
                die ('Poin Gagal Berukurang!' .mysqli_error($conn));
            }
        }
        else{
            die ('Score Gagal Bertambah!' .mysqli_error($conn));
        }
/*
        
        //Cek di db sudah ada tidak id_login. Kalo blum INSERT, kalo sudah UPDATE
        if($id_Score >= 1){
            $queryUpdate = mysqli_query($conn, "UPDATE tabel_score SET total_score = total_score + '$poin' , total_binary ='$total_id' WHERE id_login ='$id_Score'");

            //Cek masuk mi tidak data ke db. Kalo masuk, poin soal berkurang
            if($queryUpdate){
                $updatePoin = mysqli_query($conn, "UPDATE tabel_binary SET poin_binary = poin_binary - 10 WHERE id_binary ='$id'");
                if($updatePoin){
                ?>
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <script>
                        /*Swal.fire({
                            'Good job!',
                            'You clicked the button!',
                            'success'
                        });
                        
			            alert('Congratz!!!')
			            document.location='submenu1.php';
		            </script>
                <?php
                }
                else{
                    die ('Poin Gagal Berukurang!' .mysqli_error($conn));
                }
            }
            else{
                die ('Score Gagal Bertambah!' .mysqli_error($conn));
            }
        }
        else{
            $queryInsert = mysqli_query($conn, "INSERT INTO tabel_score (id_login, total_score, total_binary) VALUES ('$id_login', '$poin', '$total_id')");

            //Cek masuk mi tidak data ke db. Kalo masuk, poin soal berkurang
            if($queryInsert){
                $updatePoin = mysqli_query($conn, "UPDATE tabel_binary SET poin_binary = poin_binary - 10 WHERE id_binary ='$id'");
                if($updatePoin){
                ?>
                    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                    <script>
                        /*Swal.fire({
                            'Good job!',
                            'You clicked the button!',
                            'success'
                        });
                        
			            alert('Congratz!!!')
			            document.location='submenu1.php';
		            </script>
                <?php
                }
                else{
                    die ('Poin Gagal Berukurang!' .mysqli_error($conn));
                }
            }
            else{
                die ('Score Gagal Bertambah!' .mysqli_error($conn));
            }
        }
        */
    }
    else{
        ?>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<script>
            /*Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href>Why do I have this issue?</a>'
            });
            */
			alert('Jawaban Salah!!!')
			document.location='menu.php';
		</script>
        <?php
        //die ('Jawaban Salah!' .mysqli_error($conn));
    }

?>