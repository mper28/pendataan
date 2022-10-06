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
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data </h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                             <th>No</th>
                                <th width="17%">No Incident</th>,<th>Nama Costumer</th>
                                <th>Induk Gamas</th>
                                <th>TTR</th>
                                <th width="14%">SID</center></th>,
                                <th width="14%">Date</center></th>
                                <th width="15%">Penyebab</th>
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
                                        <a href="?page=datasiswa&actions=detail&nis=<?= $data['nis'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="?page=datasiswa&actions=edit&nis=<?= $data['nis'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                 
										</a>
                                        <a href="?page=datasiswa&actions=delete&nis=<?= $data['nis'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=datasiswa&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Data 
                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

