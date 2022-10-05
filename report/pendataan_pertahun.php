<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Pendataan Pertahun</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $tgl_pendaftaran=$_POST['tahun'];

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>SISTEM INFORMASI SMK SWASTA AMAL BAKTI </h2>
                        <h4>Jl. Irigasi No.101, Sei Kamah II, Sei Dadap  <br>Kabupaten Asahan, Sumatera Utara, Kode Pos : 21251 </h4>
                        <hr>
                        <h3>Pendataan Siswa Tahun <?php echo "$tgl_pendaftaran"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
								<tr>
									<center><th>No.</th></center><center><th>Nis</th></center><center><th>Peneriama</th></center><center><th>Tanggal Pendaftaran</th></center><center><th>Tanggal Pengambilan</th></center><center><th>Lama Pengambilan</th></center>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM Pendataan WHERE substr(tgl_pendaftaran,1,4)='$tgl_pendaftaran'";
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
                                    <td><?= $data['tgl_pendaftaran'] ?></td>
                                    <td><?= $data['tgl_pengambilan'] ?></td>
                                    <td><?= $data['lama_pengambilan'] ?> Hari</td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="8" class="text-right">
                                        Kisaran,  &nbsp <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kepala Sekolah, S.Pd<strong></u><br>
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
