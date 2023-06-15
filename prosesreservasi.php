<?php
//konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "db_uas";
//perintah php untuk akses ke database
$con = mysqli_connect($host, $user, $password, $database);

$nama_resto = $_POST['nama_resto'];
$nama_customer = $_POST['nama_customer'];
$no_telp = $_POST['no_telp'];
$email = $_POST['email'];
$pax = $_POST['pax'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$catatan_menu = $_POST['catatan_menu'];
$bukti_bayar = $_POST['bukti_bayar'];

$query = "INSERT INTO pesanan (nama_resto,nama_customer,no_telp,email,pax,tanggal,jam,catatan_menu,bukti_bayar) VALUES ('$nama_resto','$nama_customer','$no_telp', '$email','$pax','$tanggal','$jam','$catatan_menu','$bukti_bayar')";

if (mysqli_query($con, $query)) {
  echo "<script>alert('PESANAN BERHASIL!!! INFORMASI BERIKUTNYA AKAN DIKIRIMKAN PIHAK RESTO MELALUI EMAIL ANDA SESUAI DENGAN RESTO TUJUAN ANDA')</script>";
  echo "<script>window.location = 'beranda.html';</script>";
}else {
    echo "Pesanan Gagal : ".mysqli_error($con);
}
?>