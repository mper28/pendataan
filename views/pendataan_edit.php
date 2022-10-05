<?php
$nis=$_GET['nis'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM Pendataan WHERE nis='$nis'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Pendataan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nis" class="col-sm-3 control-label">Nis</label>
                             <div class="col-sm-2">
								<input type="text" name="nis" value="<?=$data['nis']?>"class="form-control" id="inputEmail3" placeholder="Nis" readonly="true">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                             <div class="col-sm-2">
                                <input type="text" name="nama" value="<?=$data['nama']?>"class="form-control" id="inputEmail3" placeholder="Nama" readonly="true">
                            </div>
                        </div>
						
                        <div class="form-group">
                            <label for="tgl_pendaftaran" class="col-sm-3 control-label">Tanggal penfaftaran</label>
                             <div class="col-sm-2">
                                <input type="date" name="tgl_pendaftaran" value="<?=$data['tgl_pendaftaran']?>"class="form-control" id="inputEmail3"  readonly="true">
                            </div>
                        </div>

                                <div class="form-group">
                            <label for="tgl_pengambilan" class="col-sm-3 control-label">Tanggal Pengambilan</label>
                             <div class="col-sm-2">
                                <input type="date" name="tgl_pengambilan"class="form-control" id="inputEmail3">
                            </div>
                        </div>
						
						
                        <div class="form-group">
                            <label for="ket" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="ket" value="<?=$data['keterangan']?>" class="form-control" id="inputPassword3" placeholder="Keterangan">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-4">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Pinjaman</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=pendataan&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Pendataan
                    </a>
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
	$tgl_pendaftaran=$_POST['tgl_pendaftaran'];
	$tgl_pengambilan=$_POST['tgl_pengambilan'];
	$lama_pengambilan =$_POST['lama_pengambilan'];
	$lama_pengambilan= (($tgl_pengambilan))-(($tgl_pendaftaran));
    $keterangan=$_POST['keterangan'];
    //buat sql
    $sql="UPDATE pendataan SET nis = '$nis', nama='$nama', tgl_pendaftaran='$tgl_pendaftaran', tgl_pengambilan='$tgl_pengambilan', lama_pengambilan='$lama_pengambilan', keterangan='$keterangan' WHERE nis='$nis'"; 
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=pendataan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



