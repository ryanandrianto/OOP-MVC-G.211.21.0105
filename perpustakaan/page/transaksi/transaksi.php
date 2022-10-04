<a href="?page=transaksi&aksi=tambah" class="btn btn-primary" style="margin-bottom: 10px;">Tambah Data</a>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Table Transaksi Peminjaman Buku
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Peminjam</th>
                                            <th>Judul Buku</th>
                                            <th>Jumlah Peminjaman</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            $sql = mysqli_query($koneksi, "SELECT * from transaksi");
                                            while ($data = mysqli_fetch_array($sql)){
                                        ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['judul'];?></td>
                                            <td><?php echo $data['jumlah'];?></td>
                                            <td><a href="?page=transaksi&aksi=ubah&id=<?php echo $data['id']; ?>"class="btn btn-info">Ubah</a>
                                            <a href="?page=transaksi&aksi=hapus&id=<?php echo $data['id']; ?>"class="btn btn-danger">Hapus</a></td>
                                        <?php } ?>
                                    </tbody>
                                            </div>