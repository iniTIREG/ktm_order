<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formdeal.css">
    <title>Document</title>
</head>
<body style="background-color: #f0f8ff;">
    <center> 
       <div action="form">
        <form action="" method="post">    
            <div class="label2"><h3 style="color:#3a506b">Apakah anda bersedia membayar uang sebesar <strong>50.000</strong> sebagai biaya untuk membuat KTM pengganti?</h3><br></div>
            <input type="radio"name="stj" value="Ya" required>
            <label for="radio">Ya</label>
            <input type="radio"name="stj" value="Tidak"required>
            <label for="radio">Tidak</label><br>
            <button style="color:white;">submit</button>
        </form>
        </div>
    </center>
    
</body>
<?php
session_start();
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $stj = $_POST['stj']; 
    if($stj == 'Ya'){
        $nama = $_SESSION['nama'];
        $nrp = $_SESSION['nrp'];
        $email = $_SESSION['email'];
        $nomor_wa = $_SESSION['notel'];
        $status_ktm = $_SESSION['ktm'];
        $bukti_lapor = isset($_SESSION['file_bukti']) ? $_SESSION['file_bukti'] : '-';
    $query = "INSERT INTO form_order (nama, NRP, email, nomor_wa, status_ktm, bukti_lapor) 
              VALUES ('$nama','$nrp', '$email', '$nomor_wa', '$status_ktm', '$bukti_lapor')";

    mysqli_query($conn, $query);
    echo "<p style='color:#3a506b; text-align:center;'>Terima kasih, data Anda sudah disimpan dan pembuatan KTM baru akan diproses setelah melakukan pembayaran.</p>";
    session_destroy();
        exit();
    }
    else{
               echo "<p style='color:#3a506b; text-align:center;'>Anda memilih untuk tidak membayar. data tidak akan disimpan dan KTM tidak akan diproses.</p>";
               session_destroy();
               exit();
    }
}
?>