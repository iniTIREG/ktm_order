<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_file = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];
    $tujuan = "laporan/" . $nama_file;
    move_uploaded_file($tmp, $tujuan);
    $_SESSION['file_bukti'] = $tujuan;

    header("Location: formdeal.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ktm hilang.css">
    <title>Document</title>
</head>
<body style="background-color: #f0f8ff;">
    <center> 
       <div action="form">
        <form action="" method="post" enctype="multipart/form-data">    
           <div class="label1"><h3 style="color:#3a506b">Masukkan scan laporan kehilangan dari kepolisian</h3></div>
           <div class="input">
            <input type="file" name="gambar" placeholder="Masukkan dokumen">
            <div class="buttn">
            <button style="color:white;">submit</button> </div>
        </form>
        </div>
    </center>
    
</body>
</html>