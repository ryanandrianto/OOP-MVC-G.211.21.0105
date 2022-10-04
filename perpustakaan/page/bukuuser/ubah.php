<?php
    
    $koneksi=mysqli_connect("localhost","root","","perpustakaan");
    $id = $_GET['id'];
    $sql = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$id'");
    $tampil = mysqli_fetch_array($sql);
    $tahun2 = $tampil['tahun_terbit'];

?>
<div class="panel panel-default">
<div class="panel-heading">
    Ubah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label>Judul</label>
                                            <input class="form-control" name="judul" value="<?php echo $tampil['judul']?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Pengarang</label>
                                            <input class="form-control" name="pengarang" value="<?php echo $tampil['pengarang']?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Penerbit</label>
                                            <input class="form-control" name="penerbit" value="<?php echo $tampil['penerbit']?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun Terbit</label>
                                            <select class="form-control" name="tahun_terbit" />
                                                <?php
                                                    $tahun_terbit = date("Y");

                                                    for($i = $tahun_terbit - 25;$i <= $tahun_terbit; $i++){
                                                        
                                                            echo'<option value="'.$i.'">'.$i.'</option>';
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>ISBN</label>
                                            <input class="form-control" name="isbn" value="<?php echo $tampil['isbn']?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Jumlah Buku</label>
                                            <input class="form-control" type="number" name="jumlah" value="<?php echo $tampil['jumlah_buku']?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Input</label>
                                            <input class="form-control" type="date" name="tanggal" value="<?php echo $tampil['tgl_input']?>" />
                                        </div>
                                        <div class="form-group">
                                            <label>Foto</label>
                                            <input class="form-control" type="file" name="foto" accept="image/*" />
                                        </div>
                                        <div>
                                                <input type=submit name="simpan" value="Simpan" class="btn btn-primary">
                                        </div>
                                                </form>

<?php
if(isset($_FILES['foto'])) {
$simpan = $_POST['simpan'];
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
    if(move_uploaded_file($foto, $target)){
 
        $sql = mysqli_query($koneksi,"UPDATE buku SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit', tahun_terbit='$tahun', isbn='$isbn', jumlah_buku='$jumlah', tgl_input='$tanggal', file='$nama' WHERE id_buku='$id'");

 if ($sql) {
  ?>

  <script type="text/javascript">
   
   alert("Data Berhasil Disimpan :)");
   window.location.href="?page=buku";

  </script>

  <?php
 }
}
}
?>

