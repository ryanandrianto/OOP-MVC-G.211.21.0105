<?php
$koneksi=mysqli_connect("localhost","root","","perpustakaan");
    $id_buku = $_GET['id_buku'];
    $koneksi->query("DELETE FROM buku WHERE id_buku = '$id_buku'");
?>

<script type="text/javascript">
    window.location.href="?page=buku";
</script>