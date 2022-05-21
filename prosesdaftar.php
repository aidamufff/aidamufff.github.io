<?php
include "koneksi.php";

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = mysqli_query($koneksi, "INSERT INTO users(id,username,email,password) VALUES ('','$username','$email','$password')");

echo "Data anda telah berhasil diinput, Masukkan Username dan password anda di <span><a href='login.php'><b> Disini </b></a></span>";
echo "<h3><a href='login.php'>Klik Disini</a>  untuk Login </h3>";
