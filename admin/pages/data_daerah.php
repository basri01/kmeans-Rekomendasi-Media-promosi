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
                            <h1 class="page-header" ><i class="fa fa-trello"></i>&nbsp;Data Daerah</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <!-- /.panel-heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <form method="post" enctype="multipart/form-data">
                                    <div class="panel-heading">
                                        <a type="button" class="btn btn-primary" href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>&nbsp;Tambah</a>

                                        <!-- Modal -->
                                        <div id="myModal" class="modal fade" role="dialog">
                                          <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h2 class="modal-title"><i class="fa fa-trello"></i>&nbsp;Tambah Daerah</h2>
                                            </div>
                                            <div class="modal-body">
                                                <form role="form" method="POST">
                                                    <div class="form-group">
                                                        <input class="form-control" placeholder="Kd_daerah" name="Kd_daerah" id="Kd_daerah">
                                                        
                                                    </div>
                                                    <div class="form-group">
                                                    <div class="form-group">
                                                    <input class="form-control" placeholder="Kabupaten/Kota" name="Kota" id="Kota"></input> 
                                                    </div>
                                                     <div class="form-group">
                                                        <select class="form-control" placeholder="Provensi Sulawesi Selatan-Barat" name="Provensi" id="Provensi">
                                                        <option>Sulaweis Barat</option>
                                                        <option>Sulawesi Selatan</option>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="modal-footer">
                                                        <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;Simpan</a></button>
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-remove"></i>&nbsp;Close</button>
                                                    </div>   

                                                </form>
                                            </div> 
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                        <tbody>
                           <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th class="center">Kode Daerah</th>
                                        <th class="center">Kabupaten/Kota</th>
                                        <th class="center">Provensi</th>
                                        <th class="center">Aksi</th>


                                    </tr>
                                </thead>
                                <?php
                                error_reporting(E_ALL ^  E_NOTICE);
                                $query= $konek-> query('SELECT * FROM data_daerah');
                                while ($data= mysqli_fetch_array($query)) {
                                 ?>
                                 <tr>
                                     <td><?php echo $data['Kd_daerah']; ?></td>
                                     <td><?php echo $data['Kota']; ?></td>
                                     <td><?php echo $data['Provensi']; ?></td>
                                     <td width="100" align="center">
                                         <div class="btn-group btn-group-sm">
                                            <!-- <a class="btn btn-primary" href="javascript:;" data-id="<?php echo $data['id']; ?>" data-toggle="modal" data-target="#modaledit"><i class="fa fa-pencil-square-o"></i></a> -->
                                            <button type="button" class="btn btn-primary btn-edit"
                                            data-iddaerah="<?php echo $data['Kd_daerah']; ?>"
                                            data-Kota="<?php echo $data['Kota']; ?>"
                                            data-Provensi="<?php echo $data['Provensi']; ?>"
                                            ><i class="fa fa-pencil-square-o"></i></button>
                                            <a class="btn btn-danger" href="deleted.php ?Kd_daerah=<?php echo $data['Kd_daerah']; ?>"><i class="fa fa-trash-o"></i></a>
                                        </div>
                                    </td>

                                </tr>
                                <?php } ?>

                            </tbody>        
                        </table>
                        <!-- /.table-responsive -->
                        <!-- /.table-responsive -->
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

<div id="modaledit" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title"><i class="fa fa-pencil-square-o"></i>&nbsp;Update</h2>
    </div>
    <div class="modal-body">
        <form role="form" method="POST">
            <div class="form-group">
                <input class="form-control" placeholder="Kd_daerah" name="Kd_daerah" id="Kd_daerah">

            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Kota" name="Kota" id="Kota">
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Provensi" name="Provensi" id="Provensi">
            </div>
            <div class="modal-footer">
                <input type="submit" name="update" value="Update" class="btn btn-primary" >
                <!-- <BUTTON name="update" type="submit" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i>&nbsp;Update</button> -->
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-remove"></i>&nbsp;Close</button>
                </div>
            </form>
        </div> 

    </div> 
</div>
</div>
</div>


<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });

        $(document).on('click', '.btn-edit', function(e) {
            e.preventDefault();
            $('#modaledit').modal('show');

            $('.Kd_daerah').val($(this).data('Kd_daerah'));
            $('.Kota').val($(this).data('Kota'));
            $('.Provensi').val($(this).data('Provensi'));
        });
    });
    // </script>

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

        $(document).on('click', '.btn-edit', function(e) {
            e.preventDefault();
            $('#modaledit').modal('show');
            $('.Kd_daerah').val($(this).data('Kd_daerah'));
            $('.Kota').val($(this).data('Kota'));
            $('.Provensi').val($(this).data('Provensi'));
        });
    });
    // </script>

</body>

</html>

<?php 
include 'koneksi.php';

if (isset($_POST['simpan'])) {

    $Kd_daerah=$_POST['Kd_daerah'];
    $Kota=$_POST['Kota'];
    $Provensi=$_POST['Provensi'];
    


    $query = $konek->query("INSERT INTO data_daerah VALUES ('$Kd_daerah','$Kota','$Provensi') ");
    if ($query) {
        echo "<script>alert('Data Tersimpan');parent.location='data_daerah.php';</script>";
    }
    else {
        echo "<script>alert('Data Gagal Tersimpan');</script>";

    }
}


$query = $konek->query("SELECT * FROM tb_user WHERE password ='$_GET[aksi]'");

while ($data= mysqli_fetch_array($query)){
  $Kd_daerah = $data['Kd_daerah'];
  $Kota = $data['Kota'];
  $Provensi = $data['Provensi'];
}


if (isset($_POST['update']) ) {

    $Kd_daerah = $_POST['Kd_daerah'];
    $Kota = $_POST['Kota'];
    $Provensi = $_POST['Provensi'];
    
    $query = $konek->query("UPDATE data_daerah set Kota = '$Kota', Provensi = '$Provensi',  WHERE Kd_daerah = '$Kd_daerah'");

    if ($query) {
        echo "<script>alert('Data Berhasil Update');parent.location='daftar.php';</script>";
    }
    else {
        echo "<script>alert('Data Gagal Tersimpan');</script>";

    }
}

?>
?>
<h5 align="center">Copyrigth@Basri-handayani.ac.id</h5>
