<?php
$koneksi=mysqli_connect("localhost","root","","perpustakaan");
?>

<a href="?page=buku&aksi=tambah" class="btn btn-primary" style="margin-bottom: 10px;">Tambah Buku</a>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Table Buku
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Pengarang</th>
                                            <th>Penerbit</th>
                                            <th>ISBN</th>
                                            <th>Jumlah Buku</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            $sql = mysqli_query($koneksi, "select * from buku");
                                            while ($data = mysqli_fetch_array($sql)){
                                        ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['judul'];?></td>
                                            <td><?php echo $data['pengarang'];?></td>
                                            <td><?php echo $data['penerbit'];?></td>
                                            <td><?php echo $data['isbn'];?></td>
                                            <td><?php echo $data['jumlah_buku'];?></td>
                                            <td><a href="?page=buku&aksi=ubah&id_buku=<?php echo $data['id_buku']; ?>" class="btn btn-info">Ubah</a>
                                            <a href="?page=buku&aksi=hapus&id_buku=<?php echo $data['id_buku']; ?>"class="btn btn-danger">Hapus</a></td>
                                        <?php } ?>
                                    </tbody>
                                            </div>