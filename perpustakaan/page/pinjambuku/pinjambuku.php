<?php
$koneksi=mysqli_connect("localhost","root","","perpustakaan");
$a=mysqli_query($koneksi, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<head>
    <title>
</title>
</head>
<body><center>
    <h1>Form Data Peminjaman Buku Oase</h1>
    <form action="index_user.php?page=proses" method="post">
<table border=0>
<tr><td>Nama Peminjam</td><td width="20" style="text-align: center;">:</td>
<td>
    <input type=text name="nama">
</td></tr><br>
<tr><td>Judul Buku</td><td width="20" style="text-align: center;">:</td><td>
    <select name="judul">
        <option disabled selected required>--Pilih Judul--</option>
        <?php 
            while($row=mysqli_fetch_array($a)){
        ?>
        <option value="<?php echo $row['judul']; ?>"><?php echo $row['judul']; ?></option>
        <?php
            }
        ?>
    </select>
</td></tr><br>
<tr><td>Jumlah Peminjaman</td><td width="20" style="text-align: center;">:</td><td><input type=text name="jumlah"></td></tr><br>
<tr><td colspan="3" align=center><br><input type=submit value="Pinjam"></td></tr>
</table>
</center>
</body>
</html>