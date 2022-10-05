<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data pertahun</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $thn_masuk=$_POST['thn_masuk'];

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>SISTEM INFORMASI Rekap Data Witel Cirebon </h2>
                        <h4>Jln. Pagongan No. 11, Cirebon, Jawa Barat, Indonesia </h4>
                        <hr>
                        <h3>Rekap Data <?php echo "$thn_masuk"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
								<tr>
									<th>No.</th>
                                <th width="17%">No Incident</th><th>Nama Costumer</th><th>Induk Gamas</th><th>TTR</th> <th width="14%">SID</center></th><th width="14%">Date</center></th><th width="15%">Penyebab</th><th>Foto</th><th>Solusi</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM datasiswa WHERE substr(thn_masuk,1,4)='$thn_masuk'";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $nomor ?></td>
									<td><?= $data['nis'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['kelas'] ?></td>
                                    <td><?= $data['Jurusan'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['thn_masuk'] ?></td>
									<td><?= $data['asal_sekolah'] ?></td>
									
                                    <td><?php echo "<img src='foto/".$data['foto']."' width='100px' height='100px'/>"?></td>
                                    <td><?= $data['agama'] ?></td>           
                                    <td>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="12" class="text-right">
                                        Cirebon <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Manager BGES<strong></u><br>
                                       ......
									             </td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
