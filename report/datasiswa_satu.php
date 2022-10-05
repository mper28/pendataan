<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data  </title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM datasiswa WHERE nis='" . $_GET ['nis'] . "'";
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
                        <h2>SISTEM INFORMASI Rekap Data Witel Cirebon </h2>
                        <h4>Jln. Pagongan No. 11, Cirebon, Jawa Barat, Indonesia</h4>
                        <hr>
                        <h3>DATA PERCOSTUMER</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>No Incident</td> <td><?= $data['nis'] ?></td>
                                </tr>
                                <tr>
                                    <td >Nama Costumer</td> <td><?= $data['nama'] ?></td>
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
                                    <td>Foto</td> <td><img src="../foto/<?= $data['foto']?>" width="150" height="150"></td>
                                </tr>
                                <tr>
                                    <td>Solusi</td> <td><?= $data['agama'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Cirebon  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Manager BGES<strong></u><br>
                                        .....
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>