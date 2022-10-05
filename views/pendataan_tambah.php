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
                    <h3 class="panel-title">Tambah Pendataan</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nis" class="col-sm-3 control-label">Nis</label>
                            <div class="col-sm-9">
                                <input type="text" name="nis" value="<?=$data['nis']?>" class="form-control" id="inputEmail3" placeholder="Nis" readonly="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" value="<?=$data['nama']?>" class="form-control" id="inputEmail3" placeholder="Nama" readonly="true">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tgl_pendaftaran" class="col-sm-3 control-label">Tanggal Pendaftaran</label>
                            <div class="col-sm-3">
                                <input type="date" name="tgl_pendaftaran" class="form-control" id="inputEmail3" placeholder="Tanggal Pendaftaran">
                            </div>
                        </div>

                         <div class="form-group">
                            <label for="Keterangan" class="col-sm-3 control-label">Keterangan</label>
                            <div class="col-sm-9">
                                <input type="text" name="Keterangan" class="form-control" id="inputEmail3" placeholder="Keterangan">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Pendataan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=datasiswap&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Arsip
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
    $keterangan=$_POST['keterangan'];
    //buat sql
    $sql="INSERT INTO pendataan VALUES ('$nis','$nama','$tgl_pendaftaran','','$keterangan','')";
    $sqlArsip="UPDATE datasiswa SET status='Dipinjam' WHERE nis='$nis'";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Peminjaman Error");
    $queryArsip=  mysqli_query($koneksi, $sqlArsip) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=pendataan&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
