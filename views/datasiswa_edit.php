<?php
$nis=$_GET['nis'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM datasiswa WHERE nis ='$nis'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Siswa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                     <form class="form-horizontal" action="" method="post">
                           <div class="form-group">
                            <label for="nis" class="col-sm-3 control-label">No Incident</label>
                            <div class="col-sm-2">
                                <input type="text" name="nis" value="<?=$data['nis']?>"class="form-control" id="inputEmail3" placeholder="No Incident">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Costumer</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama Costumer">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="kelas" class="col-sm-3 control-label">Induk Gamas</label>
                            <div class="col-sm-2">
                                <input type="text" name="kelas" value="<?=$data['kelas']?>"class="form-control" id="inputEmail3" placeholder="input induk gamas">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">SID</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" value="<?=$data['alamat']?>"class="form-control" id="inputEmail3" placeholder="input sid">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Solusi</label>
                            <div class="col-sm-2 col-xs-9">
                                <input type="text" name="agama" value="<?=$data['agama']?>"class="form-control" id="inputEmail3" placeholder="Para Pihak">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">STO</label>
                            <div class="col-sm-3">
                                <input type="text" name="no_telp" value="<?=$data['no_telp']?>" class="form-control" id="inputPassword3" placeholder="no_telp">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Datel</label>
                            <div class="col-sm-3">
                                <input type="text" name="gender" value="<?=$data['gender']?>" class="form-control" id="inputPassword3" placeholder="gender">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Date</label>
                            <!--untu tahun-->
                            <div class="col-sm-2 col-xs-9">
                                 <input type="date" name="thn_masuk" value="<?=$data['thn_masuk']?>" class="form-control" id="inputPassword3" placeholder="Waktu Laporan">
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-sm-3 control-label">TTR</label>
                            <!--jurusan-->
                            <div class="col-sm-2 col-xs-9">
                                 <input type="text" name="Jurusan" value="<?=$data['Jurusan']?>" class="form-control" id="inputPassword3" placeholder="Jurusan">
                            </div>
                        </div>
                        <!--asal Penyebab-->
                         <div class="form-group">
                            <label class="col-sm-3 control-label">Penyebab</label>
                            <div class="col-sm-9">
                                 <input type="text" name="asal_sekolah" value="<?=$data['asal_sekolah']?>" class="form-control" id="inputPassword3" placeholder="Penyebab">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="foto" class="col-sm-3 control-label">Foto</label>
                            <div class="col-sm-3">
                                <input type="file" class="custom-file-input" name="foto" value="<?=$data['foto']?>"class="form-control">
                                <img src="foto/<?= $data['foto']?>" width="120" height="100">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">Solusi</label>
                            <div class="col-sm-9">
                                 <input type="text" name="agama" value="<?=$data['agama']?>" class="form-control" id="inputPassword3" placeholder="Solusinya">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span>Update Data </button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=datasiswa&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data 
                </div>
            </div>

        </div>
    </div>
</div>

<?php 
if($_POST){
    //Ambil data dari form
 $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $alamat=$_POST['alamat'];
  $gender=$_POST['gender'];
    $agama=$_POST['agama'];
  $no_telp=$_POST['no_telp'];
  $thn_masuk=$_POST['thn_masuk'];
    $Jurusan=$_POST['Jurusan'];
  $asal_sekolah=$_POST['asal_sekolah'];
    
    //buat sql
    $sql="UPDATE datasiswa SET nama='$nama',kelas='$kelas',alamat='$alamat',gender='$gender',agama='$agama',no_telp='$no_telp',thn_masuk='$thn_masuk',Jurusan='$Jurusan',asal_sekolah='$asal_sekolah',Status='$Status'WHERE nis ='$nis'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=datasiswa&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



