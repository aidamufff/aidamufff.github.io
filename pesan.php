<?php
include 'koneksi.php';

$email = $_POST['email'];
$nama = $_POST['nama'];
$number = $_POST['number'];
$pesan = $_POST['pesan'];

$query = mysqli_query($koneksi, "INSERT INTO pesan(id, email, nama, telp, pesan) VALUES ('','$email','$nama','$number','$pesan')")
or die(mysqli_error($koneksi));

if($query){
    header("Location: index.html");
}else{
    echo "Gagal Update";
}

?>