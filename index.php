<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <i class="fas fa-user-circle fa-3x" ></i>
                <span  class="sidebar-brand-text mx-3">ADMIN</span>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php" style="color: yellow;">
                    <i class="fas fa-fw fa-tachometer-alt" style="color: yellow;"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="wapo.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Data Customer Wapo</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="layar.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Data Customer Layar</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="burudy.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Data Customer Bu Rudy</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="pakjayen.php">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Data Customer Tahu Telor Pak Jayen</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="grafik.php">
                    <i class="fas fa-bars"></i>
                    <span>Grafik Pemesan</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="login.html">
                    <i class="fas fa-store"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <div class="input-group" style="margin-left: 10px; color: #000000; font-weight: 500; font-size: 15pt">
                            Welcome, Admin!
                        </div>
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Total Customer</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php  
                                                 $host       = "localhost";
                                                 $user       = "root";
                                                 $password   = "";
                                                 $database   = "db_uas";
                                                 $mysqli     = mysqli_connect($host, $user, $password, $database);

                                                 $sql = "SELECT COUNT(customer_id) as jumlah_cust from pesanan";
                                                 $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                        echo number_format($row2['jumlah_cust'],0,".",",");
                                                    }
                                                ?>  
                                                </div>
                                        </div>
                                        <div class="col-auto">
                                             <i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Jumlah Resto Terdaftar</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                            <?php
                                            $sql = "SELECT COUNT(resto_id) as resto from resto";
                                            $query = mysqli_query($mysqli,$sql);
                                                    while($row2=mysqli_fetch_array($query)){
                                                    echo number_format($row2['resto'],0,".",",");
                                                }
                                            ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                           <i class="fa fa-store fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

        <div class="form-row">
            <div class="col-12" style="text-align: right; margin-bottom: 20px;">
                <a href="pdf.php" class= "btn btn-danger">Cetak Data PDF</a>
                <a href="excel.php" class= "btn btn-success">Cetak Data Excel</a>
            </div>
        </div>
        <form method="POST" action="">
          <div class="form-row">
            <div class="col-12">
                <center><table border="1" style="margin-bottom: 20px;">
                    <tr>
                        <th>No</th>
                        <th>Nama Resto Tujuan</th>
                        <th>Nama Customer</th>
                        <th>No Telp</th>
                        <th>Email</th>
                        <th>Pax</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Catatan Menu</th>
                    </tr>
                    <?php
                    $host = "localhost";
                    $user = "root";
                    $password = "";
                    $database = "db_uas";
                    //perintah php untuk akses ke database
                    $con = mysqli_connect($host, $user, $password, $database);
                    $pesanan = mysqli_query($con, "SELECT * from pesanan");
                    $no=1;
                    foreach ($pesanan as $row) {
                        echo "<tr>
                             <td>$no</td>
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
                    ?>
                    </table></center>
                </div>
            </div>
        </form>
        </div>
        </div>
            <footer class="sticky-footer bg-dark">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span style="color: white;">&copy; JNeran 2023</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>

    </body>
</html>