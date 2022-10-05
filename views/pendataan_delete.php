<?php
//membuat query untuk hapus data
$sql="DELETE FROM pendataan WHERE nis ='".$_GET['nis']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=pendataan&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=pendataan&actions=tampil');</scripr>";
}

