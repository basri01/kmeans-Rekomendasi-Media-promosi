<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>STMIK HANDAYANI - APLIKASI DATA MINIG</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <center><a href="./"><img src="logo.png" style="width: 150px;padding-top: 50px"></a></center>
                <div class="login-panel panel panel-default" style="margin-top: 20px;">
                    <div class="panel-heading">
                        <h3 class="panel-title">Silahkan Login</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="POST" action="">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="username" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="password" name="password" type="password">
                                </div>
                                <div>
                                <button type="submit" name="submit" class="btn btn-lg btn-success btn-block">login</button>
                        <div class="social-login-content">
                            <div class="social-button">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>
</html>

<?php 
error_reporting(E_ALL ^  E_NOTICE);
session_start();
include"Koneksi.php";

    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $query=$konek-> query("SELECT * from tb_user WHERE username='$username' and password='$password'");
        $simpan=mysqli_fetch_array($query);
        if (mysqli_num_rows($query)==1){
        $_SESSION['username']=$name;
        $_SESSION['password']=$password;
        echo"<script>alert('anda berhasil login');parent.location='pages/index.php' </script>";}
        else{
        echo"<script>alert('anda gagal login');parent.location='index.php' </script>";

        }
}
?>