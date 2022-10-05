<?php
if(!isset($_SESSION ['idsesi'])) {
    echo "<script> window.location.assign('../index.php'); </script>";
}
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                            <th>No</th>
                                <th width="17%">No Incident</th>
                                <th>Nama Costumer</th>
                                <th>Induk Gamas</th>
                                <th>TTR</th>
                                <th >SID</th>
                                <th>Date</th>
                                <th>Penyebab</th>
                                <th>Foto</th>
                                <th>Solusi</th>
                                <th>ACTIONS</th>
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
                                    <td><img src="foto/<?= $data['foto']?>" width="120" height="100"></td>
                                    </td>
                                    <td><?= $data['agama'] ?></td>
                                    <td>
                                        <a href="?page=datauntuksiswa&actions=detail&nis=<?= $data['nis'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>

										
                                    </td>
                                </tr>
                              
                            <?php } ?>
                        </tbody>
                        
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

