<?php
//konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "db_uas";
//perintah php untuk akses ke database
$con = mysqli_connect($host, $user, $password, $database);

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

$query = "INSERT INTO login (username,email,password) VALUES ('$username','$email','$password')";

if (mysqli_query($con, $query)) {
	echo "<script>alert('Registrasi Berhasil!!!')</script>";
	echo "<script>window.location = 'login.html';</script>";
}else {
    echo "Pendaftaran Gagal : ".mysqli_error($con);
}
?>