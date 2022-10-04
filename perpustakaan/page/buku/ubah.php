<?php
    
    $koneksi=mysqli_connect("localhost","root","","perpustakaan");
    $id_buku = $_GET['id_buku'];
    $sql = mysqli_query($koneksi, "SELECT * FROM buku WHERE id_buku='$id_buku'");
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
                                    <form method="POST" action="index_admin.php?page=buku&aksi=update&id_buku=<?php echo $tampil['id_buku']; ?>" enctype="multipart/form-data">
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
                                        <div>
                                                <input type=submit name="simpan" value="Simpan" class="btn btn-primary">
                                        </div>
                                                </form>

