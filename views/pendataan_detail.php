<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Pendataan</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM pendataan WHERE nis='" . $_GET ['nis'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nama Penerima</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pendaftran</td> <td><?= $data['tgl_pendaftaran'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal pengambilan</td> <td><?= $data['tgl_pengambilan'] ?></td>
                        </tr>
                        <tr>
                            <td>Lama Pengambilan</td> <td><?= $data['lama_pengambilan'] ?></td>
                        </tr>
					
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pendataan&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Riwayat Pendataan </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

