<div class="panel panel-default">
<div class="panel-heading">
    Tambah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Nim</label>
                                            <input class="form-control" name="nim" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tempat Lahir</label>
                                            <input class="form-control" name="tempat_lahir" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="tgl_lahir" />
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <br>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="jk" value="l" /> Laki-laki
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="jk" value="p" /> Perempuan
                                            </label>
                                        </div>
                                        <div>
                                                <input type=submit name="simpan" value="Simpan" class="btn btn-primary">
                                        </div>
                                                </form>

<?php

$nim = @$_POST['nim'];
$nama = @$_POST['nama'];
$tempat_lahir = @$_POST['tempat_lahir'];
$tgl_lahir = @$_POST['tgl_lahir'];
$jk = @$_POST['jk'];

$simpan = @$_POST['simpan'];

if ($simpan) {
 
 $sql = $koneksi->query("INSERT INTO anggota SET nim='$nim', nama='$nama', tempat_lahir='$tempat_lahir', tgl_lahir='$tgl_lahir', jk='$jk'");

 if ($sql) {
  ?>

  <script type="text/javascript">
   
   alert("Data Berhasil Disimpan :)");
   window.location.href="?page=anggota";

  </script>

  <?php
 }
}

?>