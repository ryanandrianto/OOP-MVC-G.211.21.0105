<div class="panel panel-default">
<div class="panel-heading">
    Tambah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" name="judul" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nim</label>
                                            <input class="form-control" name="nim" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Pinjam</label>
                                            <input class="form-control" type="text" name="tgl_pinjam" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Kembali</label>
                                            <input class="form-control" type="text" name="tgl_kembali" />
                                        </div>
                                        <div>
                                                <input type=submit name="simpan" value="Simpan" class="btn btn-primary">
                                        </div>
                                                </form>

<?php

$judul = @$_POST['judul'];
$nim = @$_POST['nim'];
$tgl_pinjam = @$_POST['tgl_pinjam'];
$tgl_kembali = @$_POST['tgl_kembali'];

$simpan = @$_POST['simpan'];

if ($simpan) {
 
 $sql = $koneksi->query("INSERT INTO transaksi SET judul='$judul', nim='$nim', tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali'");

 if ($sql) {
  ?>

  <script type="text/javascript">
   
   alert("Data Berhasil Disimpan :)");
   window.location.href="?page=transaksi";

  </script>

  <?php
 }
}

?>