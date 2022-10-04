<?php
    $id = $_GET['id'];
    $koneksi->query("DELETE FROM transaksi WHERE id = '$id'");
?>

<script type="text/javascript">
    window.location.href="?page=transaksi";
</script>