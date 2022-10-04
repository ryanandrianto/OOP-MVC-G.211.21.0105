<?php
$koneksi=mysqli_connect("localhost","root","","perpustakaan");
    $id = $_GET['id'];
    $koneksi->query("DELETE FROM buku WHERE id_buku = '$id'");
?>

<script type="text/javascript">
    window.location.href="?page=buku";
</script>