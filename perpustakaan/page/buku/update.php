
<?php
$koneksi=mysqli_connect("localhost","root","","perpustakaan");

$id_buku=$_GET['id_buku'];
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
$sql = mysqli_query($koneksi,"UPDATE buku SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit',
tahun_terbit='$tahun', isbn='$isbn', jumlah_buku='$jumlah', tgl_input='$tanggal', file='$nama' WHERE id_buku='$id_buku'");

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