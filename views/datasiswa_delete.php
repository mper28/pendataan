<?php
//membuat query untuk hapus data
$sql="DELETE FROM datasiswa WHERE nis ='".$_GET['nis']."'";

$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=datasiswa&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=datasiswa&actions=tampil');</scripr>";
}

