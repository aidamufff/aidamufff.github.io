<?php
include("koneksi.php");
date_default_timezone_set('Asia/Jakarta');

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$username = mysqli_real_escape_string($koneksi, $username);
$password = mysqli_real_escape_string($koneksi, $password);

if (empty($username) && empty($password)) {
	header('location:login.php?error=1');
} else if (empty($username)) {
	header('location:login.php?error=2');
} else if (empty($password)) {
	header('location:login.php?error=3');
} else {
	header('location:setelahlogin.php');

	$query = mysqli_query($koneksi, "SELECT * from users where username='$username' and password='$password'");
	$row = mysqli_fetch_array($query);

	if (mysqli_num_rows($query) == 1) {
		$_SESSION['username'] = $username;
        $_SESSION['email'] = $email;

		header('location:setelahlogin.php');
	} else {
		header('location:login.php?error=4');
	}
}