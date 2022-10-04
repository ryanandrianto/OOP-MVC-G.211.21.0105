<?php
$koneksi=mysqli_connect("localhost","root","","perpustakaan");

$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun_terbit'];
$isbn = $_POST['isbn'];
$jumlah = $_POST['jumlah'];
$tanggal = $_POST['tanggal'];
$foto = $_FILES['foto']['tmp_name'];
$namalama = $_FILES['foto']['name'];
$nama = date('dmYHis').$namalama;
$target = "foto/".$nama;

move_uploaded_file($foto, $target);
        $sql = mysqli_query($koneksi, "INSERT INTO buku VALUES(NULL, '$judul', '$pengarang', '$penerbit',
        '$tahun', '$isbn', '$jumlah', '$tanggal', '$nama')");

        if ($sql) {
            ?>
  <script type="text/javascript">
   
   alert("Data Berhasil Disimpan :)");
   window.location.href="../perpustakaan/index_admin.php?page=buku";
  </script>
  <?php
 }
 else {?>
    <script type="text/javascript">
   
    alert("Data Gagal Disimpan :(");
   </script><?php
 }

?>