x`<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
						 <div class="form-group">
                            <label for="nis" class="col-sm-3 control-label">No Incident</label>
                            <div class="col-sm-3">
                                <input type="text" name="nis" class="form-control" id="inputEmail3" placeholder="Inputkan No Incident" required="">
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Costumer</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan Nama Costumer" required="">
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="kelas" class="col-sm-3 control-label">Induk Gamas</label>
                            <div class="col-sm-9">
                                <input type="text" name="kelas" class="form-control" id="inputEmail3" placeholder="Inputkan Induk Gamas" required="">
                            </div>
                        </div>
                         <!--Status-->

                         <div class="form-group">
                            <label for="Jurusan" class="col-sm-3 control-label">TTR</label>
                            <div class="col-sm-2 col-xs-9">
                            <input type="text" name="Jurusan" class="form-control" id="inputEmail3" placeholder="InputkanTTR" required="">
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">SID</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan SID" required="">
                            </div>
                        </div>
                      
						<div  div class="form-group">
                            <label class="col-sm-3 control-label">Date</label>
                            <div class="col-sm-2 col-xs-9">
                                 <input type="date" name="thn_masuk" value="<?=$data['thn_masuk']?>" class="form-control" id="inputPassword3" placeholder="Waktu Laporan">
                            </div>
                        </div>
                        <!--Akhir Status-->

						<div class="form-group">
                            <label for="asal_sekolah" class="col-sm-3 control-label">Penyebab</label>
                            <div class="col-sm-9">
                                <input type="text" name="asal_sekolah" class="form-control" id="inputPassword3" placeholder="Inputkan Asal Sekolah">
                            </div>
                        </div>
                        
                       <div class="form-group">
                            <label for="foto" class="col-sm-3 control-label">Foto</label>
                            <div class="col-sm-3">
                            <input type="file" class="custom-file-input" name="foto" onchange="initFile()" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Solusi</label>
                               <div class="col-sm-2 col-xs-9">
                               <input type="text" name="agama" class="form-control" id="inputEmail3" placeholder="Inputkan SID" required="">
                            </div>
                        </div>
                           
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data </button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=datasiswa&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data 
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript">
    function initFile()
    {
        var foto = document.querySelector('input[name=foto]').files
        var choosefile = document.querySelector('#choosefile')
        if(foto.length)
            choosefile.innerHTML = foto[0].name
            else
            choosefile.innerHTML = 'Choose file'
    }
</script>


<?php
if($_POST){
    copy($_FILES['foto']['tmp_name'],'foto/'.$_FILES['foto']['name']);
    //Ambil data dari form
  $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $alamat=$_POST['alamat'];
    $gender=$_POST['gender'];
  $agama=$_POST['agama'];
    $no_telp=$_POST['no_telp'];
  $foto=$_FILES['foto']['name'];
  $thn_masuk=$_POST['thn_masuk'];
    $Jurusan=$_POST['Jurusan'];
    $asal_sekolah=$_POST['asal_sekolah'];
  $Status=$_POST['Status'];

    
    //buat sql
    $sql="INSERT INTO datasiswa VALUES ('$nis','$nama','$kelas','$alamat','$gender','$agama','$no_telp','$foto','$thn_masuk','$Jurusan','$asal_sekolah','$Status')";
    $query=mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Siswa Error");
    if ($query){
        echo "<script>window.location.assign('?page=datasiswa&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
