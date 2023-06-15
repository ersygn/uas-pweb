<?php
$koneksi = mysqli_connect("localhost","root","","db_uas");
$produk = mysqli_query($koneksi,"select * from resto");
while($row = mysqli_fetch_array($produk)){
$nama_resto[] = $row['nama_resto'];
$query = mysqli_query($koneksi,"select count(customer_id) as jumlah from
pesanan where nama_resto='".$row['nama_resto']."'");
$row = $query->fetch_array();
$jumlah_cus[] = $row['jumlah'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="icon" href="gambar/logo-3.png">
     <link href="style2.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>JNeran</title>
    <script type="text/javascript" src="Chart.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-nav fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand">
                <img src="gambar/JN.png" height="40" alt="CoolBrand">
            </a>
             <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="beranda.html">BERANDA <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="grafik.php" style="color: yellow;">REKOMENDASI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="resto.html">KULINER</a>
              </li>
              <li class="nav-item">
                    <a class="nav-link" href="login.html">RESERVASI</a>
              </li>
          </ul>
        </div>
    </div>
    </nav>

    <div class="jumbotron grap jumbotron-fluid">
        <div class="container">
            <br><br>
             <center><h1 class="display-4" style="color: white; font-weight: bold;">Grafik Terkini</h1></center>
            <center><p class="lead" style="color: white;">Dari JNeran.</p></center>
        </div>
    </div>

    <div class="container-fluid konten-2">
    <br>
    <div class="row">
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Konsumen Dari Setiap Resto Yang Terdaftar Di Website JNeran</h6>
            </div>
            <div class="card-body" style="color: white;">
                <div style="width: 700px;height: 400px">
                <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
    <footer class="sticky-footer bg-dark">
          <div class="container my-auto">
              <div class="copyright text-center my-auto">
                  <span style="color: white;">&copy; JNeran 2023</span>
              </div>
          </div>
      </footer>
  <script>
  var ctx = document.getElementById("myChart").getContext('2d');
  var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
  labels: <?php echo json_encode($nama_resto); ?>,
  datasets: [{
  label: 'Grafik Penjualan',
  data: <?php echo json_encode($jumlah_cus);

  ?>,

  backgroundColor: 'rgba(70, 130, 180, 0.6)',
  borderColor: 'rgba(70, 130, 180, 0,4)',
  borderWidth: 1
  }]
  },
  options: {
  scales: {
  yAxes: [{
  ticks: {
  beginAtZero:true
  }
  }]
  }
  }
  });
  </script>
</body>

</html>