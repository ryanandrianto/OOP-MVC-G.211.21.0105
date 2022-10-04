<?php
    $id = $_GET['id'];
    $koneksi->query("DELETE FROM anggota WHERE nim = '$id'");
?>

<script type="text/javascript">
    window.location.href="?page=anggota";
</script>