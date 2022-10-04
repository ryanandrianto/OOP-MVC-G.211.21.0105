<?php

    session_start();
    $koneksi=mysqli_connect("localhost","root","","perpustakaan");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" type="assets/img/tokobuku.png" href="assets/img/tokobuku.png"/>
<style type='text/css'>
.slide {
position:relative;
margin:0 auto;
width:1000px;
height:490px;
overflow:hidden
}

.slide input {
display:block;
position:absolute;
width:960px;
height:450px;
left:0;
top:0;
opacity:0;
cursor:pointer;
margin:0;
padding:0
}

.slide img {
visibility:hidden;
opacity:0;
height:450px;
position:absolute;
left:0;
top:0;
width:960px;
border:20px solid #ddd;
border-radius:20px;
transition:all .5s ease-out
}

.slide input:checked + img {
visibility:visible;
opacity:1
}

.slide input:checked { display:none }

.slide input:nth-child(1) { z-index:13 }
.slide input:nth-child(3) { z-index:12 }
.slide input:nth-child(5) { z-index:11 }
.slide input:nth-child(7) { z-index:10 }

.slide input:nth-child(1):checked ~ input:nth-child(3),
.slide input:nth-child(3):checked ~ input:nth-child(5),
.slide input:nth-child(5):checked ~ input:nth-child(7) { z-index:15 }
</style>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ryan ANDRIANTO | G.211.21.0105</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index_admin.php">Toko Buku Oase</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">&nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/tokobuku.png" class="user-image img-responsive"/>
					</li>   
                    <li>
                        <a  href="?page=buku"><i class="fa fa-table fa-3x fa-3x"></i> Data Buku</a>
                    </li>

                    <li>
                        <a  href="?page=anggota"><i class="fa fa-edit fa-3x"></i> Data Peminjam</a>
                    </li>

                    <li>
                        <a  href="?page=transaksi"><i class="fa fa-bolt fa-3x"></i> Transaksi Peminjaman</a>
                    </li>

                </ul>
            </div>
            
        </nav>  
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php
                            $page = @$_GET['page'];
                            $aksi = @$_GET['aksi'];

                            if ($page == "buku"){
                                if ($aksi == ""){
                                    include "page/buku/buku.php";
                                }else if ($aksi == "tambah"){
                                    include "page/buku/tambah.php";
                                }else if ($aksi == "ubah"){
                                    include "page/buku/ubah.php";
                                }else if ($aksi == "hapus"){
                                    include "page/buku/hapus.php";
                                }else if ($aksi == "proses"){
                                    include "page/buku/proses.php";
                                }else if ($aksi == "update"){
                                    include "page/buku/update.php";
                                }
                            }
                            if ($page == "anggota"){
                                if ($aksi == ""){
                                    include "page/anggota/anggota.php";
                                }elseif ($aksi == "tambah"){
                                    include "page/anggota/tambah.php";
                                }elseif ($aksi == "ubah"){
                                    include "page/anggota/ubah.php";
                                }elseif ($aksi == "hapus"){
                                    include "page/anggota/hapus.php";
                                }
                            }
                            if ($page == "transaksi"){
                                if ($aksi == ""){
                                    include "page/transaksi/transaksi.php";
                                }elseif ($aksi == "tambah"){
                                    include "page/transaksi/tambah.php";
                                }elseif ($aksi == "ubah"){
                                    include "page/transaksi/ubah.php";
                                }elseif ($aksi == "hapus"){
                                    include "page/transaksi/hapus.php";
                                }
                            }
                        ?>


                    </div>
                </div>
                 <hr />  
    </div>
            </div>
        </div>
    <script src="assets/js/jquery-1.10.2.js"></script> 
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    <script src="assets/js/custom.js"></script>
</body>
</html>