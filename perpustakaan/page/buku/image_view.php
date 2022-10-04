
<?php
include('koneksi.php');
if(isset($_GET['id_buku'])) 
{
    $query = mysqli_query($koneksi,"select * from buku where id_buku='".$_GET['id_buku']."'");
    $row = mysqli_fetch_array($query);
   
    echo $row["file"];
}
else
{
    header('location:index.php');
}
?>
