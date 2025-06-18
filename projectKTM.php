<?php
session_start();

if($_SERVER ["REQUEST_METHOD"] === "POST") {
    $_SESSION ['nama'] = $_POST ['nama'];
    $_SESSION ['nrp'] = $_POST ['nrp'];
    $_SESSION ['email'] = $_POST ['email'];
    $_SESSION ['notel'] = $_POST ['notel'];
    $_SESSION ['ktm'] = $_POST ['ktm'];
}



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $ktm = $_POST['ktm'] ?? '';

    if ($ktm == 'hilang') {
        header("Location: ktmhilang.php");
        exit();
    } elseif ($ktm == 'rusak') {
        header("Location: formdeal.php");
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="projectKTM.css">
    </style>
    <title>Document</title>
</head>
<body style="background-color: #f0f8ff;">
    <center> 
        <form action="" method="post">    
           <div class="label1"><h3 style="color:#3a506b">Form Pembuatan KTM Baru</h3></div>
           <div class="input">
            <input type="text" name="nama" placeholder="Masukkan nama" required>
            <input type="text" name="nrp"placeholder="Masukkan NRP" required> <br>
            <input type="email" name="email" placeholder="Masukkan email" required>
            <input type="tel" name="notel" placeholder=" Masukkan no. hp" required> <br>
           </div>
            <div class="label2"> KTM hilang/rusak?<br></div>
            <input type="radio" name="ktm" value="hilang" required>
            <label for="radio">Hilang</label>
            <input type="radio" name="ktm" value="rusak" required>
            <label for="radio">Rusak</label><br>
            <button style="color:white;">submit</button>
        </form>
    </center>
</body>
</html>