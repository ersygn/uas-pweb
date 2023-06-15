<?php
    require 'vendor/autoload.php';
    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'No');
    $sheet->setCellValue('B1', 'Nama Resto Tujuan');
    $sheet->setCellValue('C1', 'Nama Customer');
    $sheet->setCellValue('D1', 'No Telp');
    $sheet->setCellValue('E1', 'Email');
    $sheet->setCellValue('F1', 'Pax');
    $sheet->setCellValue('G1', 'Tanggal');
    $sheet->setCellValue('H1', 'Jam');
    $sheet->setCellValue('I1', 'Catatan Menu');

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "db_uas";
    $koneksi = mysqli_connect($host, $user, $password, $database);
    $nama_resto = 'tahu telor pak jayen';
    $sql = mysqli_query($koneksi, "SELECT * FROM pesanan where nama_resto = '$nama_resto'");
    $i = 2;
    $no = 1;
    while ($row = mysqli_fetch_array($sql)) {
        $sheet->setCellValue('A'.$i, $no++);
        $sheet->setCellValue('B'.$i, $row['nama_resto']);
        $sheet->setCellValue('C'.$i, $row['nama_customer']);
        $sheet->setCellValue('D'.$i, $row['no_telp']);
        $sheet->setCellValue('E'.$i, $row['email']);
        $sheet->setCellValue('F'.$i, $row['pax']);
        $sheet->setCellValue('G'.$i, $row['tanggal']);
        $sheet->setCellValue('H'.$i, $row['jam']);
        $sheet->setCellValue('I'.$i, $row['catatan_menu']);
        $i++;
    }
    $styleArray = [
        'borders'=>[
            'allBorders'=>[
                'borderStyle'=> \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ];

    $i = $i - 1;
    $sheet->getStyle('A1:AU1'.$i)->applyFromArray($styleArray);
    $writer = new Xlsx($spreadsheet);
    $writer->save('Report Data Resto Pak Jayen.xlsx');
?>