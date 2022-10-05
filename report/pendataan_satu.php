<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Pendataan Persiswa</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM pendataan WHERE nis='" . $_GET ['nis'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>SISTEM INFORMASI SMK SWASTA AMAL BAKTI </h2>
                        <h4>Jl. Irigasi No.101, Sei Kamah II, Sei Dadap  <br> Kabupaten Asahan, Sumatera Utara, Kode Pos : 21251 </h4>
                        <hr>
                        <h3>Pendataan Persiswa</h3>
                        <table class="table table-bordered table-striped table-hover">
                            <tbody>
								<tr>
                                    <td>NIS</td> <td><?= $data['nis'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Penerima</td> <td><?= $data['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Pendaftaran</td> <td><?= $data['tgl_pendaftaran'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Pengmabilan</td> <td><?= $data['tgl_pengambilan'] ?></td>
                                </tr>
								<tr>
                                    <td>Lama pengambilan</td> <td><?= $data['lama_pengambilan'] ?> hari</td>
                                </tr>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kepala sekolah, S.Pd<strong></u><br>
                                        NIP.102871291416712
									</td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
