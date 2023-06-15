<?php
// konfigurasi database
$host = "localhost";
$user = "root";
$password = "";
$database = "db_uas";

// perintah php untuk akses ke database
$con = mysqli_connect($host, $user, $password, $database);
$nama_resto='wapo';
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($con, "select * from pesanan  WHERE nama_resto = '$nama_resto'");

// Mendefinisikan teks tambahan sebelum tabel
$html = '<center><h3>Daftar Pesanan Anda</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">
	<tr>
	<th>No</th>
	<th>Nama Resto</th>
	<th>Nama Customer</th>
	<th>No Telp</th>
	<th>Email</th>
	<th>Pax</th>
	<th>Tanggal</th>
	<th>Jam</th>
	<th>Catatan Menu</th>
	</tr>';
	$no = 1;
	while($row = mysqli_fetch_array($query))
	{
	    $html .= "<tr>
	    <td>".$no."</td>
	    <td>".$row['nama_resto']."</td>
	    <td>".$row['nama_customer']."</td>
	    <td>".$row['no_telp']."</td>
	    <td>".$row['email']."</td>
	    <td>".$row['pax']."</td>
	    <td>".$row['tanggal']."</td>
	    <td>".$row['jam']."</td>
	    <td>".$row['catatan_menu']."</td>
	    </tr>";
	    $no++;
	}

$html .= '</table>';
$html .= '<p>Hal yang perlu diperhatikan:<br/>
1. Simpan dengan baik-baik dan tunjukkan pada resto tujuan anda.<br/>
2. Hubungi resto tujuan sesuai dengan nomor pada web ini.</p>';
$html .='<center><p><b>SIMPAN BAIK - BAIK BUKTI UNDUHAN INI<br> LALU SERAHKAN KE PIHAK RESTO TUJUAN ANDA!!</b></p></center>';
$html .= "</html>";
$dompdf->loadHtml($html);
// setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'portrait');

// rendering dari html ke pdf
$dompdf->render();

// mendapatkan tanggal saat ini
$tanggal = date('Y-m-d');

// judul dokumen PDF
$judul = 'Daftar Pesanan Anda - '.$tanggal.'.pdf';

// melakukan output file pdf
$dompdf->stream($judul);
?>
