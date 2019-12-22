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
                                    <a href="index.php"><i class="fa fa-desktop" ></i> DASBOARD</a>
                                    
                                </li>    


                                <li>
                                    <a href="home.php"><i class="fa fa-rss" ></i> DATA AWAL</a>
                                </li>
                                <li>
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
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-edit fa-fw" > </i>PROSES K-MEANS<span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level">
                                            <li>
                                                <a href="alternatif1.php"> ASAL DAERAH</a>
                                            </li>
                                            <li>
                                                <a href="alternatif2.php"> ASAL SEKOLAH</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="hasil.php"><i class="fa fa-sitemap fa-fw"> </i>HASIL</a>
                                    </li>
                                    <li>
                                        <a href="grafik.php"><i class="fa fa-bar-chart-o fa-fw"> </i> GRAFIK</a>
                                    </li>
                                    <li>
                                     <a href="#"><i class="fa fa-wrench fa-fw"> </i> PENGATURAN<span class="fa arrow"></span></a>
                                     <ul class="nav nav-second-level">
                                        <li>
                                            <a href="daftar.php">DAFTAR USER</a>
                                        </li>
                                        <li>
                                            <a href="setting.php">GANTI PASWORD</a>
                                        </li>
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
                            <h1 class="page-header"><i class="fa fa-user"></i>&nbsp;Data Mahasiswa</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                               <div>
                                <form action="" method="post" enctype="multipart/form-data">
                                    <input type="file"  name="filepath" id="filepath" class="btn btn-primary"></td><td>
                                </div>
                                <div class="panel-heading">
                                    <a type="button" href="" class="btn btn-primary" name="upload"><i class="fa fa-upload"></i>&nbsp;Import</a>
                                    <a type="button" class="btn btn-primary" href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>&nbsp;Tambah</a>

                                    <!-- Modal -->
                                    <div id="myModal" class="modal fade" role="dialog">
                                      <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h2 class="modal-title"><i class="fa fa-user"></i>&nbsp;Insert Data</h2>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" method="POST">
                                                <div class="form-group">
                                                    <label>Nomor Pokok Mahasiswa</label>
                                                    <input class="form-control" placeholder="NPM" name="NPM" id="NPM">
                                                    <p class="help-block">Masukkan NPM</p>
                                                </div>
                                                <div class="form-group">
                                                    <label>Masukkan Nama</label>
                                                    <input class="form-control" placeholder="Nama" name="nama" id="nama">
                                                </div>
                                                <div class="form-group">
                                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                                        <option>Laki-Laki</option>
                                                        <option>Perempuan</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Tempat Lahir</label>
                                                    <input class="form-control" placeholder="Tempat Lahir" name="tempat_lahir" id="tempat_lahir">
                                                </div>
                                                <div class="form-group">
                                                    <label>Tanggal Lahir</label>
                                                    <input class="form-control" type="date" placeholder="Enter text" name="tgl_lahir" id="tgl_lahir">
                                                </div>
                                                <div class="form-group">
                                                    <label for="lulusan">Lulusan</label>
                                                    <select id="lulusan" name="lulusan" class="form-control">
                                                        <option>SMA</option>
                                                        <option>SMK</option>
                                                        <option>MA</option>
                                                    </select>

                                                </div>
                                                <div class="form-group">
                                                    <label for="asal_derah">Asal Daerah</label>
                                                    <select class="form-control" placeholder="Provensi Sulawesi Selatan-Barat" name="asal_daerah" id="asal_daerah">
                                                        <option>Selayar</option>
                                                        <option>Bulukumba</option>
                                                        <option>Bantaeng</option>
                                                        <option>Jeneponto</option>
                                                        <option>Takalar</option>
                                                        <option>Gowa</option>
                                                        <option>Makassar</option>
                                                        <option>Maros</option>
                                                        <option>Pangkep</option>
                                                        <option>Barru</option>
                                                        <option>Pare-Pare</option>
                                                        <option>Pinrang</option>
                                                        <option>Soppeng</option>
                                                        <option>Wajo</option>
                                                        <option>Bone</option>
                                                        <option>Sinjai</option>
                                                        <option>Sidrap</option>
                                                        <option>Enrekang</option>
                                                        <option>Toraja</option>
                                                        <option>Belpoa</option>
                                                        <option>Palopo</option>
                                                        <option>Masamba</option>
                                                        <option>Mamasa</option>
                                                        <option>Polewali Mandar</option>
                                                        <option>Majene</option>
                                                        <option>Mamuju</option>
                                                        <option>Mamuju Tengah</option>
                                                        <option>Mamuju Utara</option>
                                                    </select> 
                                                </div>
                                                <div class="form-group">
                                                    <label>Informasi Masuk STMIK</label>
                                                    <select class="form-control" placeholder="Enter text" name="informasi" id="informasi">
                                                        <option>Media Cetak</option>
                                                        <option>Media Online</option>
                                                        <option>Media Elektronik</option>
                                                        <option>Personal Salling</option>
                                                        <option>Pendekatan</option>
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

                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th class="center">id</th>
                                    <th class="center">Username</th>
                                    <th class="center">jabatan</th>
                                    <th class="center">Tempat Lahir</th>
                                    <th class="center">Tanggal Lahir</th>
                                    <th class="center">Lulusan</th>
                                    <th class="center">Asal Daerah</th>
                                    <th class="center">Media Informasi</th>
                                    <th class="center">Aksi</th>


                                </tr>
                            </thead>
                            <tbody>
                               <?php
                               $query= $konek-> query('SELECT * FROM tb_user');
                               while ($data= mysqli_fetch_array($query)) {
                                   ?>
                                   <tr>
                                       <td><?php echo $data['id']; ?></td>
                                       <td><?php echo $data['username']; ?></td>
                                       <td><?php echo $data['jabatan']; ?></td>
                                       <td><?php echo $data['password']; ?></td>
                                       <td width="100" align="center">
                                           <div class="btn-group btn-group-sm">
                                            <a class="btn btn-primary" href="#modalEdit" data-id="<?php echo $data['id']; ?>" data-toggle="modal"><i class="fa fa-pencil-square-o"></i></a>
                                            <a class="btn btn-danger" href="delete.php ?NPM=<?php echo $data['id']; ?>"><i class="fa fa-trash-o"></i></a>
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

<div class="modal fade" id="modalEdit" role="dialog">
  <div class="modal-dialog" role="document">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h2 class="modal-title">Ubah Data</h2>
    </div>
    <div class="modal-body">

        <div class="hasil-dataa"></div>    

    </div> 
</div>
</div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $('#modalEdit').on('show-bs-modal', function (e) {

            var id = $(e.relatedTarget).data('id');

            $.ajax({
                type: "post",
                url: "edit.php",
                success: function(data) {
                    $('.hasil-dataa').html(data);
                }
            });
        });

        $('#dataTables-example').DataTable({
            responsive: true
        });

    });
</script>

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


</body>

</html>

<?php 
include 'koneksi.php';

if (isset($_POST['simpan'])) {

    $id=$_POST['id'];
    $username=$_POST['username'];
    $jabatan=$_POST['jabatan'];
    $password=$_POST['password'];



    $query = $konek->query("INSERT INTO tb_user VALUES ('$id','$username','$jabatan','$password') ");
    if ($query) {
        echo "<script>alert('Data Tersimpan');parent.location='home.php';</script>";
    }
    else {
        echo "<script>alert('Data Gagal Tersimpan');</script>";

    }
}

?>