<?php
session_start();
//konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "db_uas";
//perintah php untuk akses ke database
$con = mysqli_connect($host, $user, $password, $database);

$username = $_POST["username"];
$password = $_POST["password"];

$query = "SELECT * FROM login
          WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($con, $query);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: reser.html");
	} else {
		echo "<script>alert('Woops! Username Atau Password anda Salah.')</script>";
		echo "<script>window.location = 'login.html';</script>";
	}
?>
