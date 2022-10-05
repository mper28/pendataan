<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data </h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM datasiswa WHERE nis ='" . $_GET ['nis'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                    <tr>
                            <td>No Incident</td> <td><?= $data['nis'] ?></td>
                        </tr>    
                    <tr>
                            <td width="200">Nama Costumer</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Induk Gamas</td> <td><?= $data['kelas'] ?></td>
                        </tr>
                        <tr>
                            <td>TTR</td> <td><?= $data['Jurusan'] ?></td>
                        </tr>
                        <tr>
                            <td>SID</td> <td><?= $data['alamat'] ?></td>
                        </tr>
						<tr>
                            <td>Date</td> <td><?= $data['thn_masuk'] ?></td>
                        </tr>
					
						<tr>
                            <td>Penyebab</td> <td><?= $data['asal_sekolah'] ?></td>
                        </tr>
                        <tr>
                            <td>Foto</td> <td><?php echo "<img src='foto/".$data['foto']."' width='90px' height='90px'/>"?></td>
                        </tr>
                        <tr>
                            <td>Solusi</td> <td><?= $data['agama'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=datauntuk&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

