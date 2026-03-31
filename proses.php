<?php

$nama = $_POST['nama'];

$email = $_POST['email'];

$pesan = $_POST['pesan'];

$data = "Nama: $nama | Email: $email | Pesan: $pesan\n";

$file = fopen("data.txt", "a");

fwrite($file, $data);

fclose($file);

?>

<!DOCTYPE html>
<html>

<head>

<title>Pesan Terkirim</title>

<style>

body{

background:#0b0b0b;

color:white;

font-family:Arial;

display:flex;

justify-content:center;

align-items:center;

height:100vh;

}

.box{

background:#111;

padding:40px;

border-radius:12px;

text-align:center;

}

h1{

color:gold;

margin-bottom:20px;

}

a{

display:inline-block;

margin-top:20px;

padding:12px 25px;

background:gold;

color:black;

text-decoration:none;

border-radius:8px;

font-weight:bold;

}

</style>

</head>

<body>

<div class="box">

<h1>Pesan Berhasil Dikirim!</h1>

<p>Terima kasih telah menghubungi kami.</p>

<a href="index.php">

Kembali ke Portfolio

</a>

</div>

</body>

</html>