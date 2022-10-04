<?php

$koneksi=mysqli_connect("localhost","root","","perpustakaan");

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$judul = $_POST['judul'];
$jumlah = $_POST['jumlah'];

// menginput data ke database
$a=mysqli_query($koneksi,"INSERT into transaksi values('','$nama','$judul','$jumlah')");

// mengalihkan halaman kembali ke index.php
if($a){
header("location:index_user.php?page=buku");
}

?>