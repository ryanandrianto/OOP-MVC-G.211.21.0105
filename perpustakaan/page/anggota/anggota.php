<a href="?page=anggota&aksi=tambah" class="btn btn-primary" style="margin-bottom: 10px;">Tambah Data</a>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Table Anggota
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>username</th>
                                            <th>Password</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $no = 1;
                                            $sql = mysqli_query($koneksi, "select * from user");
                                            while ($data = mysqli_fetch_array($sql)){

                                               
                                        ?>
                                        <tr>
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['username'];?></td>
                                            <td><?php echo $data['pass'];?></td>
                                            
                                            <td><a href="?page=anggota&aksi=ubah&id=<?php echo $data['nim']; ?>"class="btn btn-info">Ubah</a>
                                            <a href="?page=anggota&aksi=hapus&id=<?php echo $data['nim']; ?>"class="btn btn-danger">Hapus</a></td>
                                        <?php } ?>
                                    </tbody>
                                            </div>