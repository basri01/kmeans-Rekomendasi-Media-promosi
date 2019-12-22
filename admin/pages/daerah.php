<?php 
session_start();
include"Koneksi.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>STMIK HANDAYANI - APLIKASI DATA MINING</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">STMIK HANDAYANI - APLIKASI DATA MINING</a>
                </div>
                <!-- /.navbar-header -->

                <ul class="nav navbar-top-links navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <strong>John Smith</strong>
                                        <span class="pull-right text-muted">
                                            <em>Yesterday</em>
                                        </span>
                                    </div>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>Read All Messages</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks">
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 1</strong>
                                            <span class="pull-right text-muted">40% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                <span class="sr-only">40% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 2</strong>
                                            <span class="pull-right text-muted">20% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 3</strong>
                                            <span class="pull-right text-muted">60% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <p>
                                            <strong>Task 4</strong>
                                            <span class="pull-right text-muted">80% Complete</span>
                                        </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Tasks</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-tasks -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-comment fa-fw"></i> New Comment
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> Message Sent
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-tasks fa-fw"></i> New Task
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- /.dropdown-alerts -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">

                            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="../index.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->


                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li class="sidebar-search">
                                <div class="input-group custom-search-form">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                                <!-- /input-group -->
                                <li>
                                    <a href="index.php"><i class="fa fa-desktop" ></i> BERANDA </a>
                                    
                                </li>    

                                <li>
                                    <a href="data_daerah.php"><i class="fa fa-trello" ></i> DATA DAERAH</a>
                                </li>
                                <li>
                                    <a href="kategori_media.php"><i class="fa fa-maxcdn" ></i> KATEGORI MEDIA</a>
                                </li>

                                <li>
                                    <a href="home.php"><i class="fa fa-group" ></i> DATA MAHASISWA</a>
                                </li>

<!--                                 <li>
                                    <li>
                                        <a href="#"><i class="fa fa-table fa-fw" > </i> DATA CLUSTER<span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level">
                                            <li>
                                                <a href="daerah.php"> ASAL DAERAH</a>
                                            </li>
                                            <li>
                                                <a href="sekolah.php"> ASAL SEKOLAH </a>
                                            </li>
                                        </ul>
                                    </li> -->
                                    <li>
                                        <a href="#"><i class="fa fa-spinner" > </i>&nbsp;PROSES & REKOMENDASI<span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level">
                                            <li>
                                                <a href="alternatif1.php"> ASAL DAERAH</a>
                                            </li>
                                            <!-- <li>
                                                <a href="alternatif2.php"> ASAL SEKOLAH</a>
                                            </li> -->
                                        </ul>
                                    </li>
                                  <!--   <li>
                                        <a href="hasil.php"><i class="fa fa-sitemap fa-fw"> </i>HASIL</a>
                                    </li> -->
                                    <li>
                                        <a href="grafik.php"><i class="fa fa-bar-chart-o fa-fw"> </i> GRAFIK</a>
                                    </li>
                                    <li>
                                     <a href="#"><i class="fa fa-wrench fa-fw"> </i> PENGATURAN<span class="fa arrow"></span></a>
                                     <ul class="nav nav-second-level">
                                        <li>
                                            <a href="daftar.php">DAFTAR USER</a>
                                        </li>
                                        <!-- <li>
                                            <a href="setting.php">GANTI PASWORD</a>
                                        </li> -->
                                    </ul>
                                    <!-- /.nav-second-level -->
                                </li>
                            </ul>
                        </div>
                        <!-- /.sidebar-collapse -->
                    </div>
                    <!-- /.navbar-static-side -->
                </nav>
                <?php
                // untuk mengatasi error pada division by zero
                error_reporting(E_ALL ^  E_NOTICE);
    // untuk memanggil fungsi
                require_once 'kmeans.php';
                $proses = new Proses;
                $query= $konek->query('SELECT DISTINCT asal_daerah FROM tb_mahasiswa');

                $asal_daerah = [];
                $media_cetak = [];
                $media_elektronik = [];
                $media_online = [];
                $personal_salling = [];
                $pendekatan = [];

                while ($data = mysqli_fetch_array($query, MYSQLI_ASSOC)) {


                    $asal_daerah[] = $data['asal_daerah'];

                            // mengambil data berdasarkan Media
                    $daerah = $data['asal_daerah'];

                    $sql1    = "SELECT COUNT(informasi) FROM tb_mahasiswa WHERE informasi = 'Media Cetak' AND asal_daerah = '".$daerah."' ";
                    $result1 = $konek->query($sql1);

                    $sql2    = "SELECT COUNT(informasi) FROM tb_mahasiswa WHERE informasi = 'Media Elektronik' AND asal_daerah = '".$daerah."' ";
                    $result2 = $konek->query($sql2);

                    $sql3    = "SELECT COUNT(informasi) FROM tb_mahasiswa WHERE informasi = 'Media Online' AND asal_daerah = '".$daerah."' ";
                    $result3 = $konek->query($sql3);

                    $sql4    = "SELECT COUNT(informasi) FROM tb_mahasiswa WHERE informasi = 'Personal Salling' AND asal_daerah = '".$daerah."' ";
                    $result4 = $konek->query($sql4);

                    $sql5    = "SELECT COUNT(informasi) FROM tb_mahasiswa WHERE informasi = 'Pendekatan' AND asal_daerah = '".$daerah."' ";
                    $result5 = $konek->query($sql5);

                    while ($hasil1 = mysqli_fetch_array($result1)) {
                        $media_cetak[] = $hasil1[0];
                    }

                    while ($hasil2 = mysqli_fetch_array($result2)) {
                        $media_elektronik[] = $hasil2[0];
                    }

                    while ($hasil3 = mysqli_fetch_array($result3)) {
                        $media_online[] = $hasil3[0];
                    }

                    while ($hasil4 = mysqli_fetch_array($result4)) {
                        $personal_salling[] = $hasil4[0];
                    }

                    while ($hasil5 = mysqli_fetch_array($result5)) {
                        $pendekatan[] = $hasil5[0];
                    }

                }

                $datacluster = array();

                foreach ($asal_daerah as $key => $value) {
                    $datacluster[$key]['asal_daerah'] = $value;
                }

                foreach ($media_cetak as $key => $value) {
                    $datacluster[$key]['media_cetak'] = $value;
                }

                foreach ($media_elektronik as $key => $value) {
                    $datacluster[$key]['media_elektronik'] = $value;
                }

                foreach ($media_online as $key => $value) {
                    $datacluster[$key]['media_online'] = $value;
                }

                foreach ($personal_salling as $key => $value) {
                    $datacluster[$key]['personal_salling'] = $value;
                }

                foreach ($pendekatan as $key => $value) {
                    $datacluster[$key]['pendekatan'] = $value;
                }

                $data = [];

                foreach ($datacluster as $key => $value) {

                    $hasil = [
                    'asal_daerah' => $value['asal_daerah'],
                    $value['media_cetak'],
                    $value['media_elektronik'],
                    $value['media_online'],
                    $value['personal_salling'],
                    $value['pendekatan']
                    ];

                    array_push($data, $hasil);

                }

                

                ?>

                <div id="page-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"><i class="fa fa-list"></i>&nbsp;Asal Daerah</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="panel-body">
                        <table width="100%" width="100%" class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="center">ASAL DAERAH</th>
                                    <th class="center">MEDIA CETAK</th>
                                    <th class="center">MEDIA ELEKTRONIK</th>
                                    <th class="center">MEDIA ONLINE</th>
                                    <th class="center">PERSONAL SALLING</th>
                                    <th class="center">PENDEKATAN</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php 

                                foreach ($datacluster as $key => $value) {
                                    echo "<tr>";
                                    echo "<td>".$value['asal_daerah']."</td>";
                                    echo "<td>".$value['media_cetak']."</td>";
                                    echo "<td>".$value['media_elektronik']."</td>";
                                    echo "<td>".$value['media_online']."</td>";
                                    echo "<td>".$value['personal_salling']."</td>";
                                    echo "<td>".$value['pendekatan']."</td>";
                                    echo "</tr>";
                                }

                                ?>

                            </tbody>   
                        </table>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                             <h3><i class="glyphicon glyphicon-search">&nbsp;Centroid</i></h3>
                         </div>



                         <div class="panel-body">
                            <!-- untuk penentuan centroid atau inisialisasi -->
                            <table width="100%" width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" align="center">
                              <thead>
                                <tr>
                                  <th>Centroid</th>
                                  <th>Media Cetak</th>
                                  <th>Media Elektronik</th>
                                  <th>Media Online</th>
                                  <th>Personal Salling</th>
                                  <th>Pendekatan</th>
                              </tr>
                          </thead>
                          <tbody align="center">
                            <?php

                /*
                fungsi untuk menentukan berapa jumlah centroid awal
                dan proses pengambilannya secara acak
                */
                $centroid = $proses->CentroidAwal($data, 3);
                $c = 1;

                foreach ($centroid as $key => $value) {

                  echo "<tr>";
                  echo "<td>c".$c++."</td>";
                  for ($i = 0; $i < count($value); $i++) {
                    echo "<td width='30px'>".$value[$i]."</td>";
                }
                echo "</tr>";

            }

            ?>
        </tbody>
    </table>
</div>
</div>
<!-- untuk penentuan centroid atau inisialisasi -->

<?php

$iterasi = 1;
while (true) {

              // variabel untuk menentukan masuk pada kelompok apa
  $cluster1 = 1;
  $cluster2 = 2;
  $cluster3 = 3;


              /* cara ini untuk mengubah data menjadi array atau mengambil data secara berurut pada kolom
              */
              // variabel array untuk jumlah kolom yang ada pada himpunan data
              $k1 = [];
              $k2 = [];
              $k3 = [];
              $k4 = [];
              $k5 = [];

              // variabel array untuk jumlah centroid
              $cnt1 = [];
              $cnt2 = [];
              $cnt3 = [];


              // mengambil hasil dari perhitungan persamaan ED dan mangambil hasil perhitungan
              $hasil_iterasi = $proses->RumusPersamaanED($data, $centroid);

              // untuk mengambil data dari himpunan data
              foreach ($data as $key1 => $value1) {

                $k1[] = $value1[0];
                $k2[] = $value1[1];
                $k3[] = $value1[2];
                $k4[] = $value1[3];
                $k5[] = $value1[4];

            }

              // hasil dari proses perhitungan
            foreach ($hasil_iterasi as $key2 => $value2) {

                $cnt1[] = $value2[0];
                $cnt2[] = $value2[1];
                $cnt3[] = $value2[2];

            }

              // mengubah data menjadi array hasil centroid
            $cluster = [$cnt1, $cnt2, $cnt3];

              // untuk mengambil hasil dari cluster
            $cls = [];

              // manampilkan data pada hasil iterasi
            for ($i=0; $i < count($data); $i++) {

                // untuk proses pembagian cluster
                if ($cnt1[$i] < $cnt2[$i] && $cnt1[$i] < $cnt3[$i] ) {

                  $cls[] = $cluster1;

              } else if ($cnt2[$i] < $cnt1[$i] && $cnt2[$i] < $cnt3[$i] ) {

                  $cls[] = $cluster2;

              } else if ($cnt3[$i] < $cnt1[$i] && $cnt3[$i] < $cnt2[$i] ) {

                  $cls[] = $cluster3;
              }

          }

          // echo "<pre>";
          //   print_r($cnt1);

              // mengambil hasil untuk menentukan nilai terkecil atau jarak terdekat pada hasil cluster
          $hasil_minimal = $proses->NilaiTerkecil($cluster, $data);

              // untuk mengeksekusi apa bila terdapat nilai 0 pada index pertam
          if (!$k1[0] != 0) {
            $k1[0] = sprintf("%02d", 0);
        }

        if (!$k2[0] != 0) {
            $k2[0] = sprintf("%02d", 0);
        }

        if (!$k3[0] != 0) {
            $k3[0] = sprintf("%02d", 0);
        }

        if (!$k4[0] != 0) {
            $k4[0] = sprintf("%02d", 0);
        }

        if (!$k5[0] != 0) {
            $k5[0] = sprintf("%02d", 0);
        }

        /* mulai proses pencarian nilai rata - rata dari hasil pengelompokan untuk mengambil nilai yang masuk pada cluster */
              // kolom a
        $c1 = [];
        $c2 = [];
        $c3 = [];

              // kolom b
        $d1 = [];
        $d2 = [];
        $d3 = [];

              // kolom c
        $e1 = [];
        $e2 = [];
        $e3 = [];

        // kolom d
        $f1 = [];
        $f2 = [];
        $f3 = [];

        // kolom e
        $g1 = [];
        $g2 = [];
        $g3 = [];


              // untuk menentukan apa bila ada nilai yang memiliki cluster yang sama pada saat pembagian cluster
        for ($j=0; $j < count($cls); $j++) {

                // menampilkan data menjadi 1
            for ($i=0; $i < 1; $i++) {

                  // kolom 1 pada a
              if ($k1[$i] AND $cls[$j] == 1) {
                $c1[] = $k1[$j];
            } else if ($k1[$i] AND $cls[$j] == 2) {
                $c2[] = $k1[$j];
            } else if ($k1[$i] AND $cls[$j] == 3) {
                $c3[] = $k1[$j];
            }

                  // kolom 2 pada b
            if ($k2[$i] AND $cls[$j] == 1) {
                $d1[] = $k2[$j];
            } else if ($k2[$i] AND $cls[$j] == 2) {
                $d2[] = $k2[$j];
            } else if ($k2[$i] AND $cls[$j] == 3) {
                $d3[] = $k2[$j];

            }

                  // kolom 3 pada c
            if ($k3[$i] AND $cls[$j] == 1) {
                $e1[] = $k3[$j];
            } else if ($k3[$i] AND $cls[$j] == 2) {
                $e2[] = $k3[$j];
            } else if ($k3[$i] AND $cls[$j] == 3) {
                $e3[] = $k3[$j];

            }

            if ($k4[$i] AND $cls[$j] == 1) {
                $f1[] = $k4[$j];
            } else if ($k4[$i] AND $cls[$j] == 2) {
                $f2[] = $k4[$j];
            } else if ($k4[$i] AND $cls[$j] == 3) {
                $f3[] = $k4[$j];
            }

            if ($k5[$i] AND $cls[$j] == 1) {
                $g1[] = $k5[$j];
            } else if ($k5[$i] AND $cls[$j] == 2) {
                $g2[] = $k5[$j];
            } else if ($k5[$i] AND $cls[$j] == 3) {
                $g3[] = $k5[$j];

            }

        }
                // menampilkan data menjadi 1

    }

              // hasil penyamaan atara cluster dan data
    $cluster = [
    [$c1, $c2, $c3],
    [$d1, $d2, $d3],
    [$e1, $e2, $e3],
    [$f1, $f2, $f3],
    [$g1, $g2, $g3],
    ];


              // untuk mengambil hasil nilai rata rata
    $nilai_rata = $proses->NilaiRatarata($cluster);

    $nilrat1 = [];
    $nilrat2 = [];
    $nilrat3 = [];


    foreach ($nilai_rata as $key => $value) {

        $nilrat1[] = $value[0];
        $nilrat2[] = $value[1];
        $nilrat3[] = $value[2];


    }

              // hasil centroid baru
    $centroid_baru = [$nilrat1, $nilrat2, $nilrat3];

              // untuk mengambil hasil centroid baru
    $centroid = $proses->CentroidBaru($centroid_baru);

    $hasil_baru = [];

    $tabel_iterasi = array();

              // untuk mengambil data
    foreach ($data as $key => $value) {

                // untuk mengambil data berdasarkan baris
        $tabel_iterasi[$key]['data'] = $value;

    }

              // untuk mengambil hasil centroid c1, c2, c3
    foreach ($hasil_iterasi as $key => $value) {

                // untuk mengambil jarak centroid
        $tabel_iterasi[$key]['jarak_centroid'] = $value;

    }

              // untuk mengambil nilai terkecil atau jarak terdekat
    foreach ($hasil_minimal as $key => $value) {

                // untuk mengambil jarak centroid
        $tabel_iterasi[$key]['jarak_terdekat'] = $value;

    }

              // untuk mengambil cluster
    foreach ($cls as $key => $value) {

                // untuk mengambil clustering
        $tabel_iterasi[$key]['cluster'] = $value;

    }


              // untuk menggabungkan kedua array
    array_push($hasil_baru, $tabel_iterasi);

    ?>

    <!-- untuk menampikan data -->
    <?php foreach ($hasil_baru as $key => $value): ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3><i class="glyphicon glyphicon-check">&nbsp;Iterasi Ke-<?php echo $iterasi++ ?></i></h3>
            </div>

            <div class="table-responsive" >
                <!-- menampilkan hasil iterasi -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                          <thead>
                            <tr>
                              <th rowspan="2">No</th>
                              <th rowspan="2">Asal Daerah</th>
                              <th rowspan="2">Media Cetak</th>
                              <th rowspan="2">Media Elektronik</th>
                              <th rowspan="2">Media Online</th>
                              <th rowspan="2">Personal Salling</th>
                              <th rowspan="2">Pendekatan</th>
                              <th colspan="3">Jarak Terdekat</th>
                              <th rowspan="2">Nilai Terkecil</th>
                              <th rowspan="2">Cluster</th>
                          </tr>
                          <tr>
                              <th>DC1</th>
                              <th>DC2</th>
                              <th>DC3</th>
                          </tr>

                      </thead>
                      <tbody align="center">

                        <?php $no = 1 ?>

                        <?php foreach ($value as $key1 => $value1): ?>
                          <tr>
                            <td width="30px"><?php echo $no++; ?></td>
                            <td width="100px"><?php echo $value1['data']['asal_daerah']; ?></td>
                            <td width="30px"><?php echo $value1['data'][0]; ?></td>
                            <td width="30px"><?php echo $value1['data'][1]; ?></td>
                            <td width="30px"><?php echo $value1['data'][2]; ?></td>
                            <td width="30px"><?php echo $value1['data'][3]; ?></td>
                            <td width="30px"><?php echo $value1['data'][4]; ?></td>
                            <td width="30px"><?php echo number_format($value1['jarak_centroid'][0], 2); ?></td>
                            <td width="30px"><?php echo number_format($value1['jarak_centroid'][1], 2); ?></td>
                            <td width="30px"><?php echo number_format($value1['jarak_centroid'][2], 2); ?></td>
                            <td width="30px"><?php echo number_format($value1['jarak_terdekat'], 2); ?></td>
                            <td width="30px"><?php echo $value1['cluster']; ?></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
            <!-- untuk menampilkan tabel -->
        </div>
    </div>
</div>
<?php endforeach; ?>

<div class="panel panel-default">
    <div class="panel-heading">
      <h3><i class="glyphicon glyphicon-align-justify">&nbsp;Mencari Nilai Rata - rata</i></h3>   
  </div>
</div>
<!-- tabel untuk mencari nilai rata -->
<table width="5%" width="5%" class="table table-striped table-bordered table-hover" id="dataTables-example">

    <thead>
      <tr>
        <th>Centroid</th>
        <th>Media Cetak</th>
        <th>Media Elektronik</th>
        <th>Media Online</th>
        <th>Personal Salling</th>
        <th>Pendekatan</th>
    </tr>
</thead>
<tbody align="center">

  <?php $c = 1 ?>

  <!-- menampilkan hasil nilai rata dan centroid baru -->
  <?php foreach ($centroid_baru as $key => $value): ?>
    <tr>
      <td><?php echo $c++; ?></td>
      <td><?php echo number_format($value[0],2); ?></td>
      <td><?php echo number_format($value[1],2); ?></td>
      <td><?php echo number_format($value[2],2); ?></td>
      <td><?php echo number_format($value[3],2); ?></td>
      <td><?php echo number_format($value[4],2); ?></td>
  </tr>
<?php endforeach; ?>

</tbody>
</table>
<!-- tabel untuk mencari nilai rata -->



<?php

                // memanggil function cluster baru
$cluster_baru = $proses->ClusterBaru($cls, $iterasi);

if (!$cluster_baru) {

                  // berhenti
  break;

}

}

// untuk mengambil asal daerah
$daerah = array();
foreach ($data as $key => $value) {
    $daerah[$key] = $value['asal_daerah'];
}

$media = array('Media Cetak', 'Media EleKtronik', 'Media Online', 'Personal Salling', 'Pendekatan');

$t = [];
$a = [];

foreach ($centroid_baru as $key => $value) {
    $max = $value[0];
    for ($i=0; $i < count($media); $i++) { 
        if ($value[$i] > $max) {
            $t[$key] = $media[$i];
        }
    }
    $a[] = max($value);
}

$nil1 = [];
$nil2 = [];
$nil3 = [];

$dar1 = [];
$dar2 = [];
$dar3 = [];

$ctr1 = [];
$ctr2 = [];
$ctr3 = [];

for ($i=0; $i < count($cls); $i++) { 

    // untuk centroid
    if ($cls[$i] == 1) {
        $nil1[] = $cls[$i];
    } else if ($cls[$i] == 2) {
        $nil2[] = $cls[$i];
    } else if ($cls[$i] == 3) {
        $nil3[] = $cls[$i];
    }

    // untuk daerah
    if ($cls[$i] == 1) {
        $dar1[] = $daerah[$i];
    } else if ($cls[$i] == 2) {
        $dar2[] = $daerah[$i];
    } else if ($cls[$i] == 3) {
        $dar3[] = $daerah[$i];
    }

}

for ($i=0; $i < count($nil1); $i++) { 
    $ctr1[] = $t[0];
}
for ($i=0; $i < count($nil2); $i++) { 
    $ctr2[] = $t[1];
}
for ($i=0; $i < count($nil3); $i++) { 
    $ctr3[] = $t[2];
}

$qq = array_merge($nil1, $nil2, $nil3);
$ww = array_merge($dar1, $dar2, $dar3);
$ee = array_merge($ctr1, $ctr2, $ctr3);

$baru = [];
$hasil = array();
foreach ($qq as $key => $value) {
 $hasil['cls'][$key] = $value;
}

foreach ($ww as $key => $value) {
 $hasil['dar'][$key] = $value;
}

foreach ($ee as $key => $value) {
 $hasil['ctr'][$key] = $value;
}
array_push($baru, $hasil);
?>



<div>
    <?php 

    $daerah1 = [];
    $daerah2 = [];
    $daerah3 = [];

    foreach ($baru as $key => $value) {
        for ($i=0; $i < count($value['cls']); $i++) {
            if ($value['cls'][$i] == 1) {
                $daerah1[] = $value['dar'][$i];
            } else if ($value['cls'][$i] == 2) {
                $daerah2[] = $value['dar'][$i];
            } else if ($value['cls'][$i] == 3) {
                $daerah3[] = $value['dar'][$i];
            }
        }
    }
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3><i class="glyphicon glyphicon-list-alt">&nbsp;Rekomendasi</i></h3>
        </div>
        <div class="panel-body" id="cetak">
            <table width="100%" class="table table-striped table-bordered table-hover">
                <thead>

                    <h4>Hasil Rekomendasi Cluster Promosi 1 <b><i><?php echo $ctr1[0]; ?></i></b></h4>

<!-- <table border="1">
    <thead> -->
        <tr>
            <th>NO</th>
            <th>Asal Daerah</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        foreach ($daerah1 as $key => $value) {
         echo "<tr>"; 
         echo "<td>".$no++."</td>";
         echo "<td>".$value."</td>";
         echo "</tr>";
     }

     ?>
 </tbody>
<!-- </table> -->
</div>
<div class="panel-body" id="cetak">
    <table width="100%" class="table table-striped table-bordered table-hover">
        <thead>
        <h4>Hasil Rekomendasi Cluster 2 Promosi <b><i><?php echo $ctr2[0]; ?></i></b></h4>

<!-- <table border="1">
    <thead> -->
        <tr>
            <th>NO</th>
            <th>Asal Daerah</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        foreach ($daerah2 as $key => $value) {
         echo "<tr>"; 
         echo "<td>".$no++."</td>";
         echo "<td>".$value."</td>";
         echo "</tr>";
     }

     ?>
 </tbody>
<!-- </table> -->
</div>
<div class="panel-body" id="cetak">
    <table width="100%" class="table table-striped table-bordered table-hover">
        <thead>
            <h4>Hasil Rekomendasi Cluster 3 Promosi <b><i><?php echo $ctr3[0]; ?></i></b></h4>

<!-- <table border="1">
    <thead> -->
        <tr>
            <th>NO</th>
            <th>Asal Daerah</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $no = 1;
        foreach ($daerah3 as $key => $value) {
         echo "<tr>"; 
         echo "<td>".$no++."</td>";
         echo "<td>".$value."</td>";
         echo "</tr>";
     }

     ?>
 </tbody>
</table>
<div align="right">
    <button class="btn btn-primary" align="center" onclick="printContent('cetak')"><i class="glyphicon glyphicon-print">&nbsp;Cetak</i></button>
</div>
</div>
</div>
</div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3><i class="fa fa-bar-chart-o fa-fw">&nbsp;Grafik </i></h3>
    </div>
    <div class="panel-body">

        <!-- isi content -->
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/data.js"></script>
        <script src="https://code.highcharts.com/modules/drilldown.js"></script>
        <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        <!-- isi content -->
    </div>
</div>

<!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-6 -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
<h5 align="center">Copyrigth@Basri-handayani.ac.id</h5>

</div>
<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    function printContent(el){
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }

    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });

    // Create the chart
    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Total Cluster Jumlah Daerah  '
        },
        subtitle: {
            text: 'Hasil Cluster (C1 C2 C3)' 
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Total Jumlah Daerah Cluster'
            }

        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y}'
                }
            }
        },

        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y}</b> of total<br/>'
        },

        series: [
        {
            name: "Browsers",
            colorByPoint: true,
            data: [
            {
                name: "C1",
                y: <?php echo count($nil1); ?>,
                drilldown: "C1"
            },
            {
                name: "C2",
                y: <?php echo count($nil2); ?>,
                drilldown: "C2"
            },
            {
                name: "C3",
                y: <?php echo count($nil3); ?>,
                drilldown: "C3"
            }
            ]
        }
        ]
    });
</script>

</body>

</html>
