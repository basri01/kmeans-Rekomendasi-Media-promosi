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

                <div id="page-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"><i class="fa fa-list"></i>&nbsp;Asal Daerah</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
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
                              $query= $konek->query('SELECT DISTINCT asal_daerah FROM tb_mahasiswa');
                              
                              while ($data= mysqli_fetch_array($query, MYSQLI_ASSOC)) {

                            // mengambil data berdasarkan daerah
                                $daerah = $data['asal_daerah']; 

                            // $sql2 = "SELECT COUNT(asal_daerah) FROM tb_mahasiswa WHERE asal_daerah = '".$daerah."' ";
                            // $result1 = $konek->query($sql2);
                            // while ($hasil1 = mysqli_fetch_array($result1)) {
                            //     // echo "<td>".$hasil1[0]."</td>";
                            // }

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
                                    echo "<tr>";
                                    echo "<td>".$data['asal_daerah']."</td>";
                                    echo "<td>".$hasil1[0]."</td>";
                                }

                                while ($hasil2 = mysqli_fetch_array($result2)) {
                                    echo "<td>".$hasil2[0]."</td>";
                                }

                                while ($hasil3 = mysqli_fetch_array($result3)) {
                                    echo "<td>".$hasil3[0]."</td>";
                                }

                                while ($hasil4 = mysqli_fetch_array($result4)) {
                                    echo "<td>".$hasil4[0]."</td>";
                                }

                                while ($hasil5 = mysqli_fetch_array($result5)) {
                                    echo "<td>".$hasil5[0]."</td>";
                                    echo "</tr>";
                                }                            
                            } 

                            ?>
                        </tbody>   
                    </table>
                    <!-- /.table-responsive -->
                    <!-- /.table-responsive -->
                    
                    <a type="button" href="daerah.php" class="btn btn-primary" name="upload"><i class="fa fa-spinner"></i>&nbsp;Proses Metode</a>
                    
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
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</body>

</html>
<h5 align="center">Copyrigth@Basri-handayani.ac.id</h5>
