<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Siswa Semua</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>SISTEM INFORMASI SMK SWASTA AMAL BAKTI </h2>
                        <h4>Jl. Irigasi No.101, Sei Kamah II, Sei Dadap <br> Kabupaten Asahan, Sumatera Utara, Kode Pos : 21251 </h4>
                        <hr>
                        <h3>DATA SELURUH SISWA</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
								<th>No.</th>
                                <th width="17%">No Incident</th>
                                <th>Nama Costumer</th>
                                <th>Induk Gamas</th>
                                <th>TTR</th> 
                                <th width="14%">SID</center> </th>
                                <th width="14%">Date</center></th>
                                <th width="15%">Penyebab</th>
                                <th>Foto</th>
                                <th>Solusi</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM datasiswa";
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
                                    <td>Foto</td> <td><img src="../foto/<?= $data['foto']?>" width="150" height="150"></td>
                                    <td><?= $data['agama'] ?></td>           
                                    <td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Cirebon  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Manager BGES<strong></u><br>
                                       ..............
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>